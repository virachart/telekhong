<?php
class addlog extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		$this->load->view("addlog");
	}

	public function addlogdb(){
		$fbid1 = "781786671955255";
		$fbid2 = "1176771389006710";
		$fbid3 = "1176771389006798";
		$fbid4 = "1176771389006111";
		$fbid5 = "10149999012543146";
		
		$sqlgetinfoname = "select * from info where info_id = '49' ";
		

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

		date_default_timezone_set('Asia/Bangkok');


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

					$fulldatesimu = $simuyear."-".$i."-".$simuday;

					$fulldate = date("Y-m-d");
					// echo $fulldate;
					// echo "<br>";
					// echo date_default_timezone_get();
					if (strtotime($fulldate) >= strtotime($fulldatesimu)) {
						// echo $fulldatesimu;
						// echo "<br>";
						$ran1 = rand(50,200);
						$ran2 = rand(50,300);
						$ran3 = rand(50,200);
						$ran4 = rand(50,200);
						$ran5 = rand(50,200);

						for ($i=0; $i < $ran1; $i++) { 
							$sqlinsert1 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid1."')";
							$this->db->query($sqlinsert1);
						}
						for ($i=0; $i < $ran2; $i++) { 
							$sqlinsert2 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid2."')";
							$this->db->query($sqlinsert2);
						}
						for ($i=0; $i < $ran3; $i++) { 
							$sqlinsert3 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid3."')";
							$this->db->query($sqlinsert3);
						}
						for ($i=0; $i < $ran4; $i++) { 
							$sqlinsert4 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid4."')";
							$this->db->query($sqlinsert4);
						}
						for ($i=0; $i < $ran5; $i++) { 
							$sqlinsert5 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid5."')";
							$this->db->query($sqlinsert5);
						}
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

					$ran1 = rand(100,300);
					$ran2 = rand(100,300);
					$ran3 = rand(100,300);
					$ran4 = rand(100,300);
					$ran5 = rand(100,300);

					for ($i=0; $i < $ran1; $i++) { 
						$sqlinsert1 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid1."')";
						$this->db->query($sqlinsert1);
					}
					for ($i=0; $i < $ran2; $i++) { 
						$sqlinsert2 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid2."')";
						$this->db->query($sqlinsert2);
					}
					for ($i=0; $i < $ran3; $i++) { 
						$sqlinsert3 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid3."')";
						$this->db->query($sqlinsert3);
					}
					for ($i=0; $i < $ran4; $i++) { 
						$sqlinsert4 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid4."')";
						$this->db->query($sqlinsert4);
					}
					for ($i=0; $i < $ran5; $i++) { 
						$sqlinsert5 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid5."')";
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

					$fulldatesimu = $simuyear."-".$simumonth."-".$simuday;

					$fulldate = date("Y-m-d");
					if (strtotime($fulldate) != strtotime($fulldatesimu)) {
						$ran1 = rand(100,300);
						$ran2 = rand(100,300);
						$ran3 = rand(100,300);
						$ran4 = rand(100,300);
						$ran5 = rand(100,300);

						for ($i=0; $i < $ran1; $i++) { 
							$sqlinsert1 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid1."')";
							$this->db->query($sqlinsert1);
						}
						for ($i=0; $i < $ran2; $i++) { 
							$sqlinsert2 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid2."')";
							$this->db->query($sqlinsert2);
						}
						for ($i=0; $i < $ran3; $i++) { 
							$sqlinsert3 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid3."')";
							$this->db->query($sqlinsert3);
						}
						for ($i=0; $i < $ran4; $i++) { 
							$sqlinsert4 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid4."')";
							$this->db->query($sqlinsert4);
						}
						for ($i=0; $i < $ran5; $i++) { 
							$sqlinsert5 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid5."')";
							$this->db->query($sqlinsert5);
						}

					}
					
					$simuday++;
					
				}
			}
		}

	}

	public function addinto(){
		$sqlgetuser = "select * from user limit 20";
		$rsuser = $this->db->query($sqlgetuser)->result_array();

		$sqlgetinfoname = "select * from info where info_id = '49' ";
		

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

		date_default_timezone_set('Asia/Bangkok');


//begin age recive message
		$simumonth = $mbegin;
		$simuday = $dbegin;
		$simuyear = $ybegin;

		foreach ($rsuser as $r) {
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

					$fulldatesimu = $simuyear."-".$i."-".$simuday;

					$fulldate = date("Y-m-d");
					// echo $fulldate;
					// echo "<br>";
					// echo date_default_timezone_get();
					if (strtotime($fulldate) >= strtotime($fulldatesimu)) {
						// echo $fulldatesimu;
						// echo "<br>";

						$sqlinsert1 = "INSERT INTO sensoro_log (`sensoro_log_date`, `sensoro_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '8', '".$r['fb_id']."')";
						$this->db->query($sqlinsert1);

						$sqlinsert2 = "INSERT INTO sensoro_log (`sensoro_log_date`, `sensoro_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '13', '".$r['fb_id']."')";
						$this->db->query($sqlinsert2);
					
						// $sqlinsert2 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid2."')";
						// $this->db->query($sqlinsert2);
					
					
						// $sqlinsert3 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid3."')";
						// $this->db->query($sqlinsert3);
					
						// $sqlinsert4 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid4."')";
						// $this->db->query($sqlinsert4);
					
						// $sqlinsert5 = "INSERT INTO info_log (`info_log_date`, `info_id`, `fb_id`) VALUES ('".$simuyear."-".$i."-".$simuday." 10:18:43', '49', '".$fbid5."')";
						// $this->db->query($sqlinsert5);
						
					}
					
					$simuday++;
				}
			}
		}

	}
	

}

?>