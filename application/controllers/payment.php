<?php
class Payment extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				if ($this->session->userdata('storeid') != null) {
					
					//start show all store have all owner page
					$ownerid = $this->session->userdata('ownerid');
					$storeid = $this->session->userdata('storeid');
					$sqlallstore = "select * from store where owner_id = '".$ownerid."' and status_store_id != '4' and store_id != '".$storeid."' ";
					$data['allstore'] = $this->db->query($sqlallstore)->result_array();
					//end show all store have all owner page

					$sqlgetst = "select * from store join package on store.package_id = package.package_id where store_id = '".$storeid."' ";
					$data['storedetail'] = $this->db->query($sqlgetst)->row_array();
					// echo "<pre>";
					// print_r($data);
					// echo "</pre>";

					$sqlgetpayment = "select * from store join payment_log on store.store_id = payment_log.store_id where payment_log.store_id = '".$storeid."' ";
					$data['payment'] = $this->db->query($sqlgetpayment)->result_array();

					$sqlgetdate = "select MIN(payment_id) AS id from payment_log where store_id = '".$storeid."' ";
					$payid = $this->db->query($sqlgetdate)->row_array();

					$sqlgetpromiss = "select * from payment_log where payment_id = '".$payid['id']."' ";
					$data['firstday'] = $this->db->query($sqlgetpromiss)->row_array();
					


					$this->load->view("payment",$data);

				}else{
					redirect('store');
				}
			}else{
				redirect('regis');
			}
		}else{
			redirect('auth');
		}


	}

	public function checkpayment(){
		$result = $this->input->post("result");
		$apcode = $this->input->post("apCode");
		$amt = $this->input->post("amt")+0;
		// $text = "result: ".$result." apcode: ".$apcode." amount: ".$amt;
		$statuspay = substr($result,0,2);
		$storepay = (int)substr($result,6,3);
		$monthpay = (int)substr($result, 9,2);
		$amt = number_format($amt,2,".","");

		/* status result
			00=Success
			99=Fail
			02=Process
		*/
		if ($statuspay == "00") {

			$arinsert = array('amount' => $amt ,
						  	  'store_id' => $storepay);
			$this->db->insert('payment_log',$arinsert);
			$sqlgetstore = "select * from store where store_id = '".$storepay."' ";
			$data = $this->db->query($sqlgetstore)->row_array();

				// echo $yearex;
				// echo "<br>";
				// echo $monthex;
				// echo "<br>";
				// echo $dayex;
			if ($data['expire_date'] == null) {
				$day = date("d");
				$month = date("n");
				$year = date("Y");
				$month1 = $month + $monthpay;
				if ($month1 > 12 ) {
					$year ++;
					$month1 = $month1 - 12;
				}
				
				$chday = cal_days_in_month(CAL_GREGORIAN,$month1,$year);
				if ($day > $chday) {
					$day = cal_days_in_month(CAL_GREGORIAN,$month1,$year);
				}

				if ($month1 < 10) {
					$month1 = "0".$month1;
				}
				if ($day < 10) {
					$day = "0".$day;
				}
				$setdate = $year."-".$month1."-".$day;
				$arupdateexpire = array('expire_date' => $setdate);
				$this->db->where("store_id",$storepay);
				$this->db->update('store',$arupdateexpire);
			}else{
				$ex = $data['expire_date'];
				$yearex = (int)substr($ex,0,4);
				$monthex = (int)substr($ex,5,2);
				$dayex = (int)substr($ex,8,2);
				$monthex += $monthpay;
				if ($monthex > 12) {
					$monthex = $monthex - 12;
					$yearex += 1;
				}
				$daynext = cal_days_in_month(CAL_GREGORIAN,$monthex,$yearex);
				if ($dayex > $daynext) {
					$dayex = $daynext;
				}
				if ($monthex < 10) {
					$monthex = "0".$monthex;
				}
				if ($dayex < 10) {
					$dayex = "0".$dayex;
				}
				$setdateex = $yearex."-".$monthex."-".$dayex;
				$arupdateex = array('expire_date' => $setdateex);
				$this->db->where("store_id",$storepay);
				$this->db->update('store',$arupdateex);

			}
		}

			redirect("payment","refresh");
		// $this->index();
		
	}


	public function checkpaymentchangepack(){
		$result = $this->input->post("result");
		$apcode = $this->input->post("apCode");
		$amt = $this->input->post("amt")+0;
		// $text = "result: ".$result." apcode: ".$apcode." amount: ".$amt;
		$statuspay = substr($result,0,2);
		$storepay = (int)substr($result,2,3);
		$packchange = substr($result,5,1);
		$amt = number_format($amt,2,".","");

		if ($statuspay == "00") {
			$arinsert = array('amount' => $amt ,
						  	  'store_id' => $storepay);
			$this->db->insert('payment_log',$arinsert);
			$sqlgetstore = "select * from store where store_id = '".$storepay."' ";
			$data = $this->db->query($sqlgetstore)->row_array();

			$dayex = date("d");
			$monthex = date("n");
			$yearex = date("Y");
			if ($monthex == 12) {
				$yearex ++;
			}
			$monthex = $monthex +1;
			$daynext = cal_days_in_month(CAL_GREGORIAN,$monthex,$yearex);
			if ($dayex > $daynext) {
				$dayex = $dayex - $daynext;
				$monthex += 1;
			}

			if ($monthex < 10) {
				$monthex = "0".$monthex;
			}
			if ($dayex < 10) {
				$dayex = "0".$dayex;
			}
			$setdate = $yearex."-".$monthex."-".$dayex;
			$arupdateexpire = array('expire_date' => $setdate , 
									'package_id' => $packchange);
			$this->db->where("store_id",$storepay);
			$this->db->update('store',$arupdateexpire);

		}
		redirect("payment","refresh");

		// echo $statuspay;
		// echo "<br>";
		// echo $storepay;
		// echo "<br>";
		// echo $packchange;
		// echo "<br>";
		// echo $amt;
		/* status result
			00=Success
			99=Fail
			02=Process
		*/
	}

}

?>