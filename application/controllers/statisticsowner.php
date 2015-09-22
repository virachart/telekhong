<?php
class Statisticsowner extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){

		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				if ($this->session->userdata('storeid') != null) {
					if ($this->session->userdata('statuspack') == "2" ||
						$this->session->userdata('statuspack') == "3") {
						//start show all store have all owner page
						$ownerid = $this->session->userdata('ownerid');
						$storeid = $this->session->userdata('storeid');
						$sqlallstore = "select * from store where owner_id = '".$ownerid."' and status_store_id != '4' and store_id != '".$storeid."' ";
						$data['allstore'] = $this->db->query($sqlallstore)->result_array();
						//end show all store have all owner page

						$id = $storeid;
						// $id = "6";
						$sqlgetstoreinfo = "select * from info where store_id = '".$id."' ";
						$data['rs'] = $this->db->query($sqlgetstoreinfo)->result_array();
						if ($data['rs'] != null) {

							$y = date("Y");
							$nowdate = date("Y-m-d");

							$y17 = $y-17;
							$y18 = $y-18;
							$y25 = $y-25;
							$y26 = $y-26;
							$y35 = $y-35;
							$y36 = $y-36;
							$y50 = $y-50;
							$y51 = $y-51;
							$y100 = $y-100;

							//user age data
							$sqlage1 = "SELECT * FROM user where birth between '".$y17."-01-01' and '".$nowdate."';";
							$data['age1'] = $this->db->query($sqlage1);
							$sqlage2 = "SELECT * FROM user where birth between '".$y25."-01-01' and '".$y18."-12-31';";
							$data['age2'] = $this->db->query($sqlage2);
							$sqlage3 = "SELECT * FROM user where birth between '".$y35."-01-01' and '".$y26."-12-31';";
							$data['age3'] = $this->db->query($sqlage3);
							$sqlage4 = "SELECT * FROM user where birth between '".$y50."-01-01' and '".$y36."-12-31';";
							$data['age4'] = $this->db->query($sqlage4);
							$sqlage5 = "SELECT * FROM user where birth between '".$y100."-01-01' and '".$y51."-12-31';";
							$data['age5'] = $this->db->query($sqlage5);

							//user sex data
							$sqlsexma = "SELECT * FROM user WHERE sex = 'male' ";
							$data['male'] = $this->db->query($sqlsexma);
							$sqlsexfe = "SELECT * FROM user WHERE sex = 'female'";
							$data['female'] = $this->db->query($sqlsexfe);
							$sqlsexun = "SELECT * FROM user WHERE sex = null ";
							$data['unkn'] = $this->db->query($sqlsexun);

							// echo "<pre>";
							// var_dump($data);
							// echo "</pre>";

							//function recive promotion 
							$sqlMax = "SELECT MAX(info_id) AS maxinfo , info_name from info where store_id = '".$id."'; ";
							$maxinfo = $this->db->query($sqlMax);
							$infoid = $maxinfo->row_array();
							// echo "<pre>";
							// print_r($infoid);
							// echo "</pre>";

							$maxid = $infoid['maxinfo'];
							$sqlMaxname = "SELECT info_name from info where info_id = '".$maxid."'; ";
							$queryname = $this->db->query($sqlMaxname);
							$infoname = $queryname->row_array();

							$sqlgetinfoname = "select info_name from info where info_id = '".$maxid."' ";
							$data['getinfoname'] = $this->db->query($sqlgetinfoname)->row_array();
							// 

							// $data['maxinfo'] = $infoname['info_name'];
				//->>change here			
							// $maxid = "1";

							//count day of month
							// $d = cal_days_in_month(CAL_GREGORIAN,$m,$ye);


							$day1 = date("j");
							$day2 ;
							$mo1 = date("m");
							$yearre = date("Y");

							$data['day'] = $day1;
							$data['month'] = $mo1;
							$data['year'] = $y;
							//part of age recive promotion 
							for ($i=1; $i <= $day1 ; $i++) { 
								if ($i < 10) {
									$day2 = "0".$i;
								}else{
									$day2 = $i;
								}
								$sqlreciveage1[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y17."-01-01' and '".$nowdate."' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
								$data['reage1d'.$i] = $this->db->query($sqlreciveage1[$i]);
								$sqlreciveage2[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y25."-01-01' and '".$y18."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
								$data['reage2d'.$i] = $this->db->query($sqlreciveage2[$i]);
								$sqlreciveage3[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y35."-01-01' and '".$y26."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
								$data['reage3d'.$i] = $this->db->query($sqlreciveage3[$i]);
								$sqlreciveage4[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y50."-01-01' and '".$y36."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
								$data['reage4d'.$i] = $this->db->query($sqlreciveage4[$i]);
								$sqlreciveage5[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y100."-01-01' and '".$y51."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
								$data['reage5d'.$i] = $this->db->query($sqlreciveage5[$i]);
							}
							//part of sex recive promotion
							for ($i=1; $i <= $day1 ; $i++) { 
								if ($i < 10) {
									$day2 = "0".$i;
								}else{
									$day2 = $i;
								}

								$sqlrecivesex1[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = 'male' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
								$data['resex1d'.$i] = $this->db->query($sqlrecivesex1[$i]);
								$sqlrecivesex2[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = 'female' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
								$data['resex2d'.$i] = $this->db->query($sqlrecivesex2[$i]);
								$sqlrecivesex3[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = null and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
								$data['resex3d'.$i] = $this->db->query($sqlrecivesex3[$i]);
							}

							//part of age recive promotion and go in to store
							for ($i=1; $i <= $day1 ; $i++) { 
								if ($i < 10) {
									$day2 = "0".$i;
								}else{
									$day2 = $i;
								}
								$sqlreciveinstoreage1[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y17."-01-01' and '".$nowdate."' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
								$data['reinage1d'.$i] = $this->db->query($sqlreciveinstoreage1[$i]);
								$sqlreciveinstoreage2[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y25."-01-01' and '".$y18."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
								$data['reinage2d'.$i] = $this->db->query($sqlreciveinstoreage2[$i]);
								$sqlreciveinstoreage3[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y35."-01-01' and '".$y26."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
								$data['reinage3d'.$i] = $this->db->query($sqlreciveinstoreage3[$i]);
								$sqlreciveinstoreage4[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y50."-01-01' and '".$y36."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
								$data['reinage4d'.$i] = $this->db->query($sqlreciveinstoreage4[$i]);
								$sqlreciveinstoreage5[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y100."-01-01' and '".$y51."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
								$data['reinage5d'.$i] = $this->db->query($sqlreciveinstoreage5[$i]);
							}


							//part of sex recive promotion and go into store
							for ($i=1; $i <= $day1 ; $i++) { 
								if ($i < 10) {
									$day2 = "0".$i;
								}else{
									$day2 = $i;
								}

								$sqlreciveinsex1[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and sex = 'male' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
								$data['reinsex1d'.$i] = $this->db->query($sqlreciveinsex1[$i]);
								$sqlreciveinsex2[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and sex = 'female' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
								$data['reinsex2d'.$i] = $this->db->query($sqlreciveinsex2[$i]);
								$sqlreciveinsex3[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and sex = null and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
								$data['reinsex3d'.$i] = $this->db->query($sqlreciveinsex3[$i]);
							}

							//part of age use qr code
							for ($i=1; $i <= $day1 ; $i++) { 
								if ($i < 10) {
									$day2 = "0".$i;
								}else{
									$day2 = $i;
								}
								$sqlqrage1[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y17."-01-01' and '".$nowdate."' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
								$data['qrage1d'.$i] = $this->db->query($sqlqrage1[$i]);
								$sqlqrage2[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y25."-01-01' and '".$y18."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%';";
								$data['qrage2d'.$i] = $this->db->query($sqlqrage2[$i]);
								$sqlqrage3[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y35."-01-01' and '".$y26."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%';";
								$data['qrage3d'.$i] = $this->db->query($sqlqrage3[$i]);
								$sqlqrage4[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y50."-01-01' and '".$y36."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%';";
								$data['qrage4d'.$i] = $this->db->query($sqlqrage4[$i]);
								$sqlqrage5[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y100."-01-01' and '".$y51."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%';";
								$data['qrage5d'.$i] = $this->db->query($sqlqrage5[$i]);
							}

							// echo "test";
							//part of sex use qr code
							for ($i=1; $i <= $day1 ; $i++) { 
								if ($i < 10) {
									$day2 = "0".$i;
								}else{
									$day2 = $i;
								}

								$sqlqrsex1[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and sex = 'male' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
								$data['qrsex1d'.$i] = $this->db->query($sqlqrsex1[$i]);
								$sqlqrsex2[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and sex = 'female' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
								$data['qrsex2d'.$i] = $this->db->query($sqlqrsex2[$i]);
								$sqlqrsex3[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and sex = null and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
								$data['qrsex3d'.$i] = $this->db->query($sqlqrsex3[$i]);
							}

							// select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id group by qr.qr_id , qr_log.fb_id;

							//create attribute for qr agian
							for ($i=1; $i <= $day1 ; $i++) { 
								//age
								$data['countqragage1d'.$i] = 0;
								$data['countqragage2d'.$i] = 0;
								$data['countqragage3d'.$i] = 0;
								$data['countqragage4d'.$i] = 0;
								$data['countqragage5d'.$i] = 0;
								//sex
								$data['countqragsex1d'.$i] = 0;
								$data['countqragsex2d'.$i] = 0;
								$data['countqragsex3d'.$i] = 0;
							}


							//part of age use qr code agian
							for ($i=1; $i <= $day1 ; $i++) { 
								if ($i < 10) {
									$day2 = "0".$i;
								}else{
									$day2 = $i;
								}
								$sqlqragage1[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y17."-01-01' and '".$nowdate."' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' group by qr.qr_id , qr_log.fb_id;";
								$data['qragage1d'.$i] = $this->db->query($sqlqragage1[$i]);
								$sqlqragage2[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y25."-01-01' and '".$y18."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' group by qr.qr_id , qr_log.fb_id;";
								$data['qragage2d'.$i] = $this->db->query($sqlqragage2[$i]);
								$sqlqragage3[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y35."-01-01' and '".$y26."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' group by qr.qr_id , qr_log.fb_id;";
								$data['qragage3d'.$i] = $this->db->query($sqlqragage3[$i]);
								$sqlqragage4[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y50."-01-01' and '".$y36."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' group by qr.qr_id , qr_log.fb_id;";
								$data['qragage4d'.$i] = $this->db->query($sqlqragage4[$i]);
								$sqlqragage5[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y100."-01-01' and '".$y51."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' group by qr.qr_id , qr_log.fb_id;";
								$data['qragage5d'.$i] = $this->db->query($sqlqragage5[$i]);
								//age1
								if ($data['qragage1d'.$i]->num_rows() != null ) {
									foreach ($data['qragage1d'.$i]->result_array() as $r) {
										$sqlchqragage1 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
										$rsqragage1 = $this->db->query($sqlchqragage1);
										if ($rsqragage1->num_rows() != null) {
											$data['countqragage1d'.$i]++;
										}
									}
								}
								// $qqqqq = $data['qragage1d10']->result();
								// var_dump($qqqqq);

								//age2
								if ($data['qragage2d'.$i]->num_rows() != null ) {
									foreach ($data['qragage2d'.$i]->result_array() as $r) {
										$sqlchqragage2 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
										$rsqragage2 = $this->db->query($sqlchqragage2);
										if ($rsqragage2->num_rows() != null) {
											$data['countqragage2d'.$i]++;
										}
									}
								}

								//age3
								if ($data['qragage3d'.$i]->num_rows() != null ) {
									foreach ($data['qragage3d'.$i]->result_array() as $r) {
										$sqlchqragage3 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
										$rsqragage3 = $this->db->query($sqlchqragage3);
										if ($rsqragage3->num_rows() != null) {
											$data['countqragage3d'.$i]++;
										}
									}
								}

								//age4
								if ($data['qragage4d'.$i]->num_rows() != null ) {
									foreach ($data['qragage4d'.$i]->result_array() as $r) {
										$sqlchqragage4 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
										$rsqragage4 = $this->db->query($sqlchqragage4);
										if ($rsqragage4->num_rows() != null) {
											$data['countqragage4d'.$i]++;
										}
									}
								}

								//age5
								if ($data['qragage5d'.$i]->num_rows() != null ) {
									foreach ($data['qragage5d'.$i]->result_array() as $r) {
										$sqlchqragage5 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
										$rsqragage5 = $this->db->query($sqlchqragage5);
										if ($rsqragage5->num_rows() != null) {
											$data['countqragage5d'.$i]++;
										}
									}
								}

							}


							//part of sex use qr code agian
							for ($i=1; $i <= $day1 ; $i++) { 
								if ($i < 10) {
									$day2 = "0".$i;
								}else{
									$day2 = $i;
								}

								$sqlqragsex1[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = 'male' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%'  group by qr.qr_id , qr_log.fb_id;";
								$data['qragsex1d'.$i] = $this->db->query($sqlqragsex1[$i]);
								$sqlqragsex2[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = 'female' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%'  group by qr.qr_id , qr_log.fb_id;";
								$data['qragsex2d'.$i] = $this->db->query($sqlqragsex2[$i]);
								$sqlqragsex3[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = null and qr_log_date like '".$yearre."-".$mo1."-".$day2."%'  group by qr.qr_id , qr_log.fb_id;";
								$data['qragsex3d'.$i] = $this->db->query($sqlqragsex3[$i]);

								//sex male
								foreach ($data['qragage1d'.$i]->result_array() as $r) {
									$sqlchqragsex1 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
									$rsqragsex1 = $this->db->query($sqlchqragsex1);
									if ($rsqragsex1->num_rows() != null) {
										$data['countqragsex1d'.$i]++;
									}
								}

								//sex female
								foreach ($data['qragsex2d'.$i]->result_array() as $r) {
									$sqlchqragsex2 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
									$rsqragsex2 = $this->db->query($sqlchqragsex2);
									if ($rsqragsex2->num_rows() != null) {
										$data['countqragsex2d'.$i]++;
									}
								}

								//sex unknow
								foreach ($data['qragsex3d'.$i]->result_array() as $r) {
									$sqlchqragsex3 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
									$rsqragsex3 = $this->db->query($sqlchqragsex3);
									if ($rsqragsex3->num_rows() != null) {
										$data['countqragsex3d'.$i]++;
									}
								}
							}


							// echo "<pre>";
							// var_dump($data);
							// echo "<pre>";

							//part of age recive promotion 
							// $sqlreciveage1[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y17."-01-01' and '".$nowdate."' ;";
							// $data['reage1'] = $this->db->query($sqlreciveage1);
							// $sqlreciveage2 = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y25."-01-01' and '".$y18."-12-31';";
							// $data['reage2'] = $this->db->query($sqlreciveage2);
							// $sqlreciveage3 = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y35."-01-01' and '".$y26."-12-31';";
							// $data['reage3'] = $this->db->query($sqlreciveage3);
							// $sqlreciveage4 = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y50."-01-01' and '".$y36."-12-31';";
							// $data['reage4'] = $this->db->query($sqlreciveage4);
							// $sqlreciveage5 = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y100."-01-01' and '".$y51."-12-31';";
							// $data['reage5'] = $this->db->query($sqlreciveage5);

							$this->load->view("statisticsowner",$data);

					}else{
						redirect('store');
					}
				}else{
					redirect('store');
				}
			}else{
				redirect('regis');
			}
		}else{
			redirect('auth');
		}


		if($this->session->userdata('id') != null){
			// if($this->session->userdata('storeid') != null){
			
			}else{
				redirect("storeowner");
			}
			
		}else{
			redirect("auth");
		}
	}

	
	public function otherinfo($maxid){
		$id = $this->session->userdata('storeid');
				// $id = "6";
		$sqlgetstoreinfo = "select * from info where store_id = '".$id."' ";
		$data['rs'] = $this->db->query($sqlgetstoreinfo)->result_array();

		$sqlgetinfoname = "select info_name from info where info_id = '".$maxid."' ";
		$data['getinfoname'] = $this->db->query($sqlgetinfoname)->row_array();
		
		$y = date("Y");
		$nowdate = date("Y-m-d");



		$y17 = $y-17;
		$y18 = $y-18;
		$y25 = $y-25;
		$y26 = $y-26;
		$y35 = $y-35;
		$y36 = $y-36;
		$y50 = $y-50;
		$y51 = $y-51;
		$y100 = $y-100;

				//user age data
		$sqlage1 = "SELECT * FROM user where birth between '".$y17."-01-01' and '".$nowdate."';";
		$data['age1'] = $this->db->query($sqlage1);
		$sqlage2 = "SELECT * FROM user where birth between '".$y25."-01-01' and '".$y18."-12-31';";
		$data['age2'] = $this->db->query($sqlage2);
		$sqlage3 = "SELECT * FROM user where birth between '".$y35."-01-01' and '".$y26."-12-31';";
		$data['age3'] = $this->db->query($sqlage3);
		$sqlage4 = "SELECT * FROM user where birth between '".$y50."-01-01' and '".$y36."-12-31';";
		$data['age4'] = $this->db->query($sqlage4);
		$sqlage5 = "SELECT * FROM user where birth between '".$y100."-01-01' and '".$y51."-12-31';";
		$data['age5'] = $this->db->query($sqlage5);

				//user sex data
		$sqlsexma = "SELECT * FROM user WHERE sex = 'male' ";
		$data['male'] = $this->db->query($sqlsexma);
		$sqlsexfe = "SELECT * FROM user WHERE sex = 'female'";
		$data['female'] = $this->db->query($sqlsexfe);
		$sqlsexun = "SELECT * FROM user WHERE sex = null ";
		$data['unkn'] = $this->db->query($sqlsexun);

				// echo "<pre>";
				// var_dump($data);
				// echo "</pre>";


				// $data['maxinfo'] = $infoname['info_name'];
	//->>change here			
				// $maxid = "1";

				//count day of month
				// $d = cal_days_in_month(CAL_GREGORIAN,$m,$ye);


		$day1 = date("j");
		$day2 ;
		$mo1 = date("m");
		$yearre = date("Y");

		$data['day'] = $day1;
		$data['month'] = $mo1;
		$data['year'] = $y;
				//part of age recive promotion 
		for ($i=1; $i <= $day1 ; $i++) { 
			if ($i < 10) {
				$day2 = "0".$i;
			}else{
				$day2 = $i;
			}
			$sqlreciveage1[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y17."-01-01' and '".$nowdate."' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
			$data['reage1d'.$i] = $this->db->query($sqlreciveage1[$i]);
			$sqlreciveage2[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y25."-01-01' and '".$y18."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
			$data['reage2d'.$i] = $this->db->query($sqlreciveage2[$i]);
			$sqlreciveage3[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y35."-01-01' and '".$y26."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
			$data['reage3d'.$i] = $this->db->query($sqlreciveage3[$i]);
			$sqlreciveage4[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y50."-01-01' and '".$y36."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
			$data['reage4d'.$i] = $this->db->query($sqlreciveage4[$i]);
			$sqlreciveage5[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y100."-01-01' and '".$y51."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
			$data['reage5d'.$i] = $this->db->query($sqlreciveage5[$i]);
		}
				//part of sex recive promotion
		for ($i=1; $i <= $day1 ; $i++) { 
			if ($i < 10) {
				$day2 = "0".$i;
			}else{
				$day2 = $i;
			}

			$sqlrecivesex1[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = 'male' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
			$data['resex1d'.$i] = $this->db->query($sqlrecivesex1[$i]);
			$sqlrecivesex2[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = 'female' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
			$data['resex2d'.$i] = $this->db->query($sqlrecivesex2[$i]);
			$sqlrecivesex3[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = null and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
			$data['resex3d'.$i] = $this->db->query($sqlrecivesex3[$i]);
		}

				//part of age recive promotion and go in to store
		for ($i=1; $i <= $day1 ; $i++) { 
			if ($i < 10) {
				$day2 = "0".$i;
			}else{
				$day2 = $i;
			}
			$sqlreciveinstoreage1[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y17."-01-01' and '".$nowdate."' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
			$data['reinage1d'.$i] = $this->db->query($sqlreciveinstoreage1[$i]);
			$sqlreciveinstoreage2[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y25."-01-01' and '".$y18."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
			$data['reinage2d'.$i] = $this->db->query($sqlreciveinstoreage2[$i]);
			$sqlreciveinstoreage3[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y35."-01-01' and '".$y26."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
			$data['reinage3d'.$i] = $this->db->query($sqlreciveinstoreage3[$i]);
			$sqlreciveinstoreage4[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y50."-01-01' and '".$y36."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
			$data['reinage4d'.$i] = $this->db->query($sqlreciveinstoreage4[$i]);
			$sqlreciveinstoreage5[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y100."-01-01' and '".$y51."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
			$data['reinage5d'.$i] = $this->db->query($sqlreciveinstoreage5[$i]);
		}


				//part of sex recive promotion and go into store
		for ($i=1; $i <= $day1 ; $i++) { 
			if ($i < 10) {
				$day2 = "0".$i;
			}else{
				$day2 = $i;
			}

			$sqlreciveinsex1[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and sex = 'male' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
			$data['reinsex1d'.$i] = $this->db->query($sqlreciveinsex1[$i]);
			$sqlreciveinsex2[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and sex = 'female' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
			$data['reinsex2d'.$i] = $this->db->query($sqlreciveinsex2[$i]);
			$sqlreciveinsex3[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and sex = null and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
			$data['reinsex3d'.$i] = $this->db->query($sqlreciveinsex3[$i]);
		}

				//part of age use qr code
		for ($i=1; $i <= $day1 ; $i++) { 
			if ($i < 10) {
				$day2 = "0".$i;
			}else{
				$day2 = $i;
			}
			$sqlqrage1[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y17."-01-01' and '".$nowdate."' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
			$data['qrage1d'.$i] = $this->db->query($sqlqrage1[$i]);
			$sqlqrage2[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y25."-01-01' and '".$y18."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%';";
			$data['qrage2d'.$i] = $this->db->query($sqlqrage2[$i]);
			$sqlqrage3[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y35."-01-01' and '".$y26."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%';";
			$data['qrage3d'.$i] = $this->db->query($sqlqrage3[$i]);
			$sqlqrage4[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y50."-01-01' and '".$y36."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%';";
			$data['qrage4d'.$i] = $this->db->query($sqlqrage4[$i]);
			$sqlqrage5[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y100."-01-01' and '".$y51."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%';";
			$data['qrage5d'.$i] = $this->db->query($sqlqrage5[$i]);
		}

				// echo "test";
				//part of sex use qr code
		for ($i=1; $i <= $day1 ; $i++) { 
			if ($i < 10) {
				$day2 = "0".$i;
			}else{
				$day2 = $i;
			}

			$sqlqrsex1[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and sex = 'male' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
			$data['qrsex1d'.$i] = $this->db->query($sqlqrsex1[$i]);
			$sqlqrsex2[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and sex = 'female' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
			$data['qrsex2d'.$i] = $this->db->query($sqlqrsex2[$i]);
			$sqlqrsex3[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and sex = null and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
			$data['qrsex3d'.$i] = $this->db->query($sqlqrsex3[$i]);
		}

				// select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id group by qr.qr_id , qr_log.fb_id;

				//create attribute for qr agian
		for ($i=1; $i <= $day1 ; $i++) { 
					//age
			$data['countqragage1d'.$i] = 0;
			$data['countqragage2d'.$i] = 0;
			$data['countqragage3d'.$i] = 0;
			$data['countqragage4d'.$i] = 0;
			$data['countqragage5d'.$i] = 0;
					//sex
			$data['countqragsex1d'.$i] = 0;
			$data['countqragsex2d'.$i] = 0;
			$data['countqragsex3d'.$i] = 0;
		}


				//part of age use qr code agian
		for ($i=1; $i <= $day1 ; $i++) { 
			if ($i < 10) {
				$day2 = "0".$i;
			}else{
				$day2 = $i;
			}
			$sqlqragage1[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y17."-01-01' and '".$nowdate."' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' group by qr.qr_id , qr_log.fb_id;";
			$data['qragage1d'.$i] = $this->db->query($sqlqragage1[$i]);
			$sqlqragage2[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y25."-01-01' and '".$y18."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' group by qr.qr_id , qr_log.fb_id;";
			$data['qragage2d'.$i] = $this->db->query($sqlqragage2[$i]);
			$sqlqragage3[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y35."-01-01' and '".$y26."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' group by qr.qr_id , qr_log.fb_id;";
			$data['qragage3d'.$i] = $this->db->query($sqlqragage3[$i]);
			$sqlqragage4[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y50."-01-01' and '".$y36."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' group by qr.qr_id , qr_log.fb_id;";
			$data['qragage4d'.$i] = $this->db->query($sqlqragage4[$i]);
			$sqlqragage5[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y100."-01-01' and '".$y51."-12-31' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%' group by qr.qr_id , qr_log.fb_id;";
			$data['qragage5d'.$i] = $this->db->query($sqlqragage5[$i]);
					//age1
			if ($data['qragage1d'.$i]->num_rows() != null ) {
				foreach ($data['qragage1d'.$i]->result_array() as $r) {
					$sqlchqragage1 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
					$rsqragage1 = $this->db->query($sqlchqragage1);
					if ($rsqragage1->num_rows() != null) {
						$data['countqragage1d'.$i]++;
					}
				}
			}
					// $qqqqq = $data['qragage1d10']->result();
					// var_dump($qqqqq);

					//age2
			if ($data['qragage2d'.$i]->num_rows() != null ) {
				foreach ($data['qragage2d'.$i]->result_array() as $r) {
					$sqlchqragage2 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
					$rsqragage2 = $this->db->query($sqlchqragage2);
					if ($rsqragage2->num_rows() != null) {
						$data['countqragage2d'.$i]++;
					}
				}
			}

					//age3
			if ($data['qragage3d'.$i]->num_rows() != null ) {
				foreach ($data['qragage3d'.$i]->result_array() as $r) {
					$sqlchqragage3 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
					$rsqragage3 = $this->db->query($sqlchqragage3);
					if ($rsqragage3->num_rows() != null) {
						$data['countqragage3d'.$i]++;
					}
				}
			}

					//age4
			if ($data['qragage4d'.$i]->num_rows() != null ) {
				foreach ($data['qragage4d'.$i]->result_array() as $r) {
					$sqlchqragage4 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
					$rsqragage4 = $this->db->query($sqlchqragage4);
					if ($rsqragage4->num_rows() != null) {
						$data['countqragage4d'.$i]++;
					}
				}
			}

					//age5
			if ($data['qragage5d'.$i]->num_rows() != null ) {
				foreach ($data['qragage5d'.$i]->result_array() as $r) {
					$sqlchqragage5 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
					$rsqragage5 = $this->db->query($sqlchqragage5);
					if ($rsqragage5->num_rows() != null) {
						$data['countqragage5d'.$i]++;
					}
				}
			}

		}


				//part of sex use qr code agian
		for ($i=1; $i <= $day1 ; $i++) { 
			if ($i < 10) {
				$day2 = "0".$i;
			}else{
				$day2 = $i;
			}

			$sqlqragsex1[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = 'male' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%'  group by qr.qr_id , qr_log.fb_id;";
			$data['qragsex1d'.$i] = $this->db->query($sqlqragsex1[$i]);
			$sqlqragsex2[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = 'female' and qr_log_date like '".$yearre."-".$mo1."-".$day2."%'  group by qr.qr_id , qr_log.fb_id;";
			$data['qragsex2d'.$i] = $this->db->query($sqlqragsex2[$i]);
			$sqlqragsex3[$i] = "select  * from qr join qr_log on qr.qr_id = qr_log.qr_id join user on qr_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = null and qr_log_date like '".$yearre."-".$mo1."-".$day2."%'  group by qr.qr_id , qr_log.fb_id;";
			$data['qragsex3d'.$i] = $this->db->query($sqlqragsex3[$i]);

					//sex male
			foreach ($data['qragage1d'.$i]->result_array() as $r) {
				$sqlchqragsex1 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
				$rsqragsex1 = $this->db->query($sqlchqragsex1);
				if ($rsqragsex1->num_rows() != null) {
					$data['countqragsex1d'.$i]++;
				}
			}

					//sex female
			foreach ($data['qragsex2d'.$i]->result_array() as $r) {
				$sqlchqragsex2 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
				$rsqragsex2 = $this->db->query($sqlchqragsex2);
				if ($rsqragsex2->num_rows() != null) {
					$data['countqragsex2d'.$i]++;
				}
			}

					//sex unknow
			foreach ($data['qragsex3d'.$i]->result_array() as $r) {
				$sqlchqragsex3 = "select * from qr_log where fb_id = '".$r['fb_id']."' and qr_id = '".$r['qr_id']."' and qr_log_id != '".$r['qr_log_id']."'  ";
				$rsqragsex3 = $this->db->query($sqlchqragsex3);
				if ($rsqragsex3->num_rows() != null) {
					$data['countqragsex3d'.$i]++;
				}
			}
		}

		$this->load->view("statisticsowner",$data);

	}


	


}

?>