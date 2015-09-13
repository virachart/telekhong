<?php
class Dashboard extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('admin') != null){
			$y = date("Y");
			$sqlStore = "Select * from store where status_store_id = '1' ";
			$data['store'] = $this->db->query($sqlStore);
			$sqlUser = "Select * from user";
			$data['user'] = $this->db->query($sqlUser);
			$sqlOwner = "Select * from owner where status_owner = '1' ";
			$data['owner'] = $this->db->query($sqlOwner);
			$sqlSensoro = "Select * from sensoro where store_id = '6' ";
			$data['sensoro'] = $this->db->query($sqlSensoro);

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
			redirect("auth");
		}

	}

	

}

?>