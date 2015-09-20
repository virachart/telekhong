<?php
class Payment extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			$storeid = $this->session->userdata('storeid');
			// $storeid = 6;
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
			redirect("auth");
		}
	}

	public function checkpayment(){
		$result = $this->input->post("result");
		$apcode = $this->input->post("apCode");
		$amt = $this->input->post("amt")+0;
		// $text = "result: ".$result." apcode: ".$apcode." amount: ".$amt;
		$statuspay = substr($result,0,2);
		$storepay = (int)substr($result,6,3);
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
			if ($data['expire_date'] == null) {
				$day = date("d");
				$month = date("n");
				$year = date("Y");
				if ($month == 12) {
					$year ++;
				}
				$month1 = $month +1;
				if ($day == 30 || $day == 31) {
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