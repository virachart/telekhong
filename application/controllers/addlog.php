<?php
class addlog extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		$this->load->view("addlog");
	}

	public function addlogdb(){
		$fbid1 = $this->input->post("fbid1");
		$fbid2 = $this->input->post("fbid2");
		$fbid3 = $this->input->post("fbid3");
		$fbid4 = $this->input->post("fbid4");
		$fbid5 = $this->input->post("fbid5");
		
		$sqlgetinfoname = "select * from info where info_id = '50' ";
		$data['getinfoname'] = $this->db->query($sqlgetinfoname)->row_array();

		$datainfo = $this->db->query($sqlgetinfoname)->row_array();
		$begin = $datainfo['info_begin_date'];
		$expire = $datainfo['info_expire_date'];

		$dbegin = substr($begin, 8,2);
		$mbegin = substr($begin, 5,2);
		$ybegin = substr($begin, 0,4);

		$dexpire = substr($expire, 8,2);
		$mexpire = substr($expire, 5,2);
		$yexpire = substr($expire, 0,4);

		if ($yexpire == $ybegin) {
			$difmonth = $mexpire - $mbegin;
		}else{
			$difa = 12 - $mbegin;
			$difmonth = $mexpire + $difa;
		}



//begin age recive message
		$simumonth = $mbegin;
		$simuday = $dbegin;
		$simuyear = $ybegin;
		$count = 1;
		if ($yexpire == $ybegin) {
			for ($i=$simumonth; $i <= $mexpire ; $i++) { 
				$dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
				if ($dayofmonth > $dexpire && $i == $mexpire) {
					$dayofmonth = $dexpire;
				}
				if ($dayofmonth < $simuday) {
					$simuday = 1;
				}
				if ($i < 10) {
					$i = "0".$i;
				}
				for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
					if ($j < 10) {
						$j = "0".$j;
					} 
					$ran1 = rand(40,90);
					$ran2 = rand(40,90);
					$ran3 = rand(40,90);
					$ran4 = rand(40,90);
					$ran5 = rand(40,90);

					for ($i=0; $i < $ran1; $i++) { 
						$sqlinsert1 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid1."')";
						$this->db->query($sqlinsert1);
					}
					for ($i=0; $i < $ran2; $i++) { 
						$sqlinsert2 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid2."')";
						$this->db->query($sqlinsert2);
					}
					for ($i=0; $i < $ran3; $i++) { 
						$sqlinsert3 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid3."')";
						$this->db->query($sqlinsert3);
					}
					for ($i=0; $i < $ran4; $i++) { 
						$sqlinsert4 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid4."')";
						$this->db->query($sqlinsert4);
					}
					for ($i=0; $i < $ran5; $i++) { 
						$sqlinsert5 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid5."')";
						$this->db->query($sqlinsert5);
					}
					
				

					
					$simuday++;
				}
			}
		}else{
			for ($i=$simumonth; $i <= 12 ; $i++) { 
				$dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
				
				if ($dayofmonth < $simuday) {
					$simuday = 1;
				}
				if ($i < 10) {
					$i = "0".$i;
				}
				for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
					if ($j < 10) {
						$j = "0".$j;
					} 

					for ($i=0; $i < 57; $i++) { 
						$sqlinsert1 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid1."')";
						$sqlinsert2 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid2."')";
						$sqlinsert3 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid3."')";
						$sqlinsert4 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid4."')";
						$sqlinsert5 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid5."')";
						$this->db->query($sqlinsert1);
						$this->db->query($sqlinsert2);
						$this->db->query($sqlinsert3);
						$this->db->query($sqlinsert4);
						$this->db->query($sqlinsert5);
					}
					
					$simuday++;
				}
			}
			$simuyear+=1;
			for ($i=1; $i <= $mexpire ; $i++) { 
				$dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
				if ($dayofmonth > $dexpire && $i == $mexpire) {
					$dayofmonth = $dexpire;
				}
				$simuday = 1;
				if ($i < 10) {
					$i = "0".$i;
				}
				for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
					if ($j < 10) {
						$j = "0".$j;
					} 

					for ($i=0; $i < 57; $i++) { 
						$sqlinsert1 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid1."')";
						$sqlinsert2 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid2."')";
						$sqlinsert3 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid3."')";
						$sqlinsert4 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid4."')";
						$sqlinsert5 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$simumonth."-".$simuday." 10:18:43', '50', '".$fbid5."')";
						$this->db->query($sqlinsert1);
						$this->db->query($sqlinsert2);
						$this->db->query($sqlinsert3);
						$this->db->query($sqlinsert4);
						$this->db->query($sqlinsert5);
					}
					
					$simuday++;
					
				}
			}
		}

	}
	

}

?>