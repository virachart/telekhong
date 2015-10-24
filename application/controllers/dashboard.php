<?php
class Dashboard extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('admin') != null) {
				$y = date("Y");
				$sqlStore = "Select * from store where status_store_id = '1' ";
				$data['store'] = $this->db->query($sqlStore);
				$sqlUser = "Select * from user";
				$data['user'] = $this->db->query($sqlUser);
				$sqlOwner = "Select * from owner where status_owner = '1' ";
				$data['owner'] = $this->db->query($sqlOwner);
				$sqlSensoro = "Select * from sensoro where store_id = '6' ";
				$data['sensoro'] = $this->db->query($sqlSensoro);

				// start growth owner

				$day = date("d");
				$month = date("m");
				$year = date("Y");

				$sqlcounttodayowner = "select count(owner_id) AS toowner from owner where owner_date = '".$year."-".$month."-".$day."%' ";
				$data['ownernow'] = $this->db->query($sqlcounttodayowner)->row_array();

				$sqlcounttodayuser = "select count(fb_id) AS toowner from user where user_date = '".$year."-".$month."-".$day."%' ";
				$data['usernow'] = $this->db->query($sqlcounttodayuser)->row_array();

				$sqlcounttodaystore = "select count(store_id) AS toowner from store where store_date = '".$year."-".$month."-".$day."%' ";
				$data['storenow'] = $this->db->query($sqlcounttodaystore)->row_array();

				$day = $day-1;
				if ($day < 1) {
					$month = $month - 1;
					if ($month < 1) {
						$year = $year - 1;
						$month = 12;
						$day = 31; 
					}
				}
				if ($month < 10) {
					$month = "0".$month;
				}

				if ($day < 10) {
					$day = "0".$day;
				}

				$sqlcountyesowner = "select count(owner_id) AS toowner from owner where owner_date = '".$year."-".$month."-".$day."%' ";
				$data['owneryes'] = $this->db->query($sqlcountyesowner)->row_array();

				$sqlcountyesuser = "select count(fb_id) AS toowner from user where user_date = '".$year."-".$month."-".$day."%' ";
				$data['useryes'] = $this->db->query($sqlcountyesuser)->row_array();

				$sqlcountyesstore = "select count(store_id) AS toowner from store where store_date = '".$year."-".$month."-".$day."%' ";
				$data['storeyes'] = $this->db->query($sqlcounttodaystore)->row_array();

				// end growth owner

				// Start Count khong

				$sqlcountkhin = "select count(sensoro_id) AS inkhong from sensoro where store_id = '6' ";
				$data['inkhong'] = $this->db->query($sqlcountkhin)->row_array();

				$sqlcountkhout = "select count(sensoro_id) AS outkhong from sensoro where store_id != '6' ";
				$data['outkhong'] = $this->db->query($sqlcountkhout)->row_array();


				// End Count Khong


				$d = date("j");
				$m = date("n");
				$a = $m-6;
				if ($a < 1) {
					$m6 = 12+$a;
					$y6 = $y - 1;
				}else{
					$m6 = $a;
					$y6 = $y;
				}
				if ($m6 < 10) {
					$m6 = "0".$m6;
				}
				$d6 = $d-1;
				if ($d6 < 10) {
					$d6 = "0".$d6;
				}

				if ($d < 10) {
					$d = "0".$d;
				}

				
				$y1 = $y-1;
				if ($m < 10) {
					$m1 = "0".$m;
				}else{
					$m1 = $m;
				}

				// count day of month
				
				$daymonth = cal_days_in_month(CAL_GREGORIAN,$m,$y1);
				$dayover = $d-1;
				$mov = $m;
				$yov = $y1;
				if ($dayover > $daymonth) {
					$mov = $mov - 1;
					$dayover = cal_days_in_month(CAL_GREGORIAN,$mov,$y1);;
					
					if ($mov == 0) {
						$mov = "01";
						$yov = $yov - 1;
					}
					
				}
				if ($dayover < 10) {
					$dayover = "0".$dayover;
				}
				if ($mov < 10) {
					$mov = "0".$mov;
				}

				$sqlsen6 = "select * from sensoro where sensoro_date between '".$y6."-".$m6."-".$d6."' and '".$y."-".$m1."-".$d."'; ";
				$data['sen6'] = $this->db->query($sqlsen6);
				// echo $this->db->last_query();
				// echo "<br>";
				$sqlsen12 = "select * from sensoro where sensoro_date between '".$y1."-".$m1."-".$d."' and '".$y6."-".$m6."-".$d."'; ";
				$data['sen12'] = $this->db->query($sqlsen12);
				// echo $this->db->last_query();
				// echo "<br>";
				$sqlsenover = "select * from sensoro where sensoro_date <= '".$yov."-".$mov."-".$dayover."' ; ";
				$data['senover'] = $this->db->query($sqlsenover);
				// echo $this->db->last_query();
				
				
				$this->load->view("dashboard",$data);
			}else{
				redirect("store");
			}
		}else{
			redirect('auth');
		}
		

	}

	

}

?>