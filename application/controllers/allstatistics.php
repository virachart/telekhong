<?php
class Allstatistics extends CI_Controller{

	public function main(){

		parent::__construct();
		$this->load->database();
	}

	public function index(){

		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				if ($this->session->userdata('storeid') != null) {
					if ($this->session->userdata('statuspack') == "2" ||
						$this->session->userdata('statuspack') == "3") {

						$storeid = $this->session->userdata("storeid");
							
						$year = date("Y");

						$data['nothave1'] = "0";
						$data['nothave2'] = "0";
						//top 5 fav rank
						$sqlgetinfofav = "select * , count(fb_id) AS countfav from info join favorite on info.info_id = favorite.info_id where info.store_id = '".$storeid."' and info.info_status_id = '1' and info_begin_date between '".$year."-01-01' and '".$year."-12-31' ;";
						$rsinfofav = $this->db->query($sqlgetinfofav);
						$data['favtop'] = $rsinfofav->result_array();
						$data['forfav'] = 0;
						if ($rsinfofav->num_rows() < 5 ) {
							$numfav = $rsinfofav->num_rows();
							$numfav = 5 - $numfav;
							$arfav = array('store_id' => $storeid ,
											'info_status_id' => '1' );
							// echo $rsinfofav->num_rows();
							if ($rsinfofav->num_rows() != 0) {
								foreach ($data['favtop'] as $r) {
									if ($r['countfav'] > 0) {
										$notin = $r['info_id']."";
										$araddinfo = array('info_id !=' => $notin );
										$arfav = array_merge($arfav, $araddinfo);
									}else{
										$data['nothave1'] = "1";
									}
								}
							}
							
							// echo $this->db->last_query();
							$data['favadd'] = $this->db->select("*")
												->from("info")
												->where($arfav)
												->where("info_begin_date between '".$year."-01-01' and '".$year."-12-31'")
												->limit($numfav)
												->get()->result_array();
												// echo $this->db->last_query();

							$data['forfav'] = 1;
						}

						// recive info
						$sqlgetinfore = "select * , count(fb_id) AS countre from info join info_log on info.info_id = info_log.info_id where info.store_id = '".$storeid."' and info.info_status_id = '1' and info_begin_date between '".$year."-01-01' and '".$year."-12-31' ;";
						$reinfore = $this->db->query($sqlgetinfore);
						$data['infore'] = $reinfore->result_array();

						$data['forinfo'] = 0;
						$sqlcountinfo = "select count(info_id) AS numinfo from info where store_id = '".$storeid."' and info_status_id ='1' ";
						$countinfo = $this->db->query($sqlcountinfo)->row_array();
						if ($reinfore->num_rows() < $countinfo['numinfo'] ) {
							$arfav2 = array('store_id' => $storeid ,
											'info_status_id' => '1' );
							if ($reinfore->num_rows() != 0 ) {
								foreach ($data['infore'] as $r) {
									if ($r['countre'] > 0) {
										$notin = $r['info_id']."";
										$araddinfo = array('info_id !=' => $notin );
										$arfav2 = array_merge($arfav2, $araddinfo); 
									}else{
										$data['nothave2'] = "1";
									}
								}
							}
							$data['readd'] = $this->db->select("*")
												->from("info")
												->where($arfav2)
												->where("info_begin_date between '".$year."-01-01' and '".$year."-12-31'")
												->get()->result_array();
							$data['forinfo'] = 1;
						}

						$y = date("Y");
						$data['foryear'] = $y;
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

						$formonth = date("n")+0;
						for ($i=1; $i <= $formonth ; $i++) { 
							if ($i < 10) {
								$i = "0".$i;
							}
							$sqlfollowage1 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y17."-01-01' and '".$nowdate."' and fol_date between '".$year."-".$i."-01' and '".$year."-".$i."-01' ";
							$sqlfollowage2 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y25."-01-01' and '".$y18."-12-31'  and fol_date between '".$year."-".$i."-01' and '".$year."-".$i."-01' ";
							$sqlfollowage3 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y35."-01-01' and '".$y26."-12-31'  and fol_date between '".$year."-".$i."-01' and '".$year."-".$i."-01' ";
							$sqlfollowage4 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y50."-01-01' and '".$y36."-12-31'  and fol_date between '".$year."-".$i."-01' and '".$year."-".$i."-01' ";
							$sqlfollowage5 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y100."-01-01' and '".$y51."-12-31'  and fol_date between '".$year."-".$i."-01' and '".$year."-".$i."-01' ";

							$data['foage1m'.$i] = $this->db->query($sqlfollowage1);
							$data['foage2m'.$i] = $this->db->query($sqlfollowage2);
							$data['foage3m'.$i] = $this->db->query($sqlfollowage3);
							$data['foage4m'.$i] = $this->db->query($sqlfollowage4);
							$data['foage5m'.$i] = $this->db->query($sqlfollowage5);

							//follow sex graph
							$sqlfollowsex1 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and sex = 'male'  and fol_date between '".$year."-".$i."-01' and '".$year."-".$i."-01' ";
							$sqlfollowsex2 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and sex = 'female'  and fol_date between '".$year."-".$i."-01' and '".$year."-".$i."-01' ";
							$sqlfollowsex3 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and sex = 'null'  and fol_date between '".$year."-".$i."-01' and '".$year."-".$i."-01' ";

							$data['fosex1m'.$i] = $this->db->query($sqlfollowsex1);
							$data['fosex2m'.$i] = $this->db->query($sqlfollowsex2);
							$data['fosex3m'.$i] = $this->db->query($sqlfollowsex3);
						}
						

						$data['formonth'] = $formonth;



						$data['foage1'] = array();
						for ($i=1; $i <= $formonth; $i++) { 
							if ($i < 10) {
								$i = "0".$i;
							}
							array_push($data['foage1'], $data['foage1m'.$i]->num_rows() );
							
						}
						$data['foage2'] = array();
						for ($i=1; $i <= $formonth; $i++) { 
							if ($i < 10) {
								$i = "0".$i;
							}
							array_push($data['foage2'], $data['foage2m'.$i]->num_rows() );
							
						}
						$data['foage3'] = array();
						for ($i=1; $i <= $formonth; $i++) { 
							if ($i < 10) {
								$i = "0".$i;
							}
							array_push($data['foage3'], $data['foage3m'.$i]->num_rows() );
							
						}
						$data['foage4'] = array();
						for ($i=1; $i <= $formonth; $i++) { 
							if ($i < 10) {
								$i = "0".$i;
							}
							array_push($data['foage4'], $data['foage4m'.$i]->num_rows() );
							
						}
						$data['foage5'] = array();
						for ($i=1; $i <= $formonth; $i++) { 
							if ($i < 10) {
								$i = "0".$i;
							}
							array_push($data['foage5'], $data['foage5m'.$i]->num_rows() );
							
						}
						

						$data['fosex1'] = array();
						for ($i=1; $i <= $formonth; $i++) { 
							if ($i < 10) {
								$i = "0".$i;
							}
							array_push($data['fosex1'], $data['fosex1m'.$i]->num_rows() );
							
						}
						$data['fosex2'] = array();
						for ($i=1; $i <= $formonth; $i++) { 
							if ($i < 10) {
								$i = "0".$i;
							}
							array_push($data['fosex2'], $data['fosex2m'.$i]->num_rows() );
							
						}
						$data['fosex3'] = array();
						for ($i=1; $i <= $formonth; $i++) { 
							if ($i < 10) {
								$i = "0".$i;
							}
							array_push($data['fosex3'], $data['fosex3m'.$i]->num_rows() );
							
						}

						$data['showval'] = 

						$data['graphtype'] = "year";
						
						// echo "<pre>";
						// print_r($data);
						// echo "</pre>";

						$this->load->view("allstatistics",$data);

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
	}


	public function getfrommonth(){
		
		$getmonth = $this->input->post("getmonth");
		$storeid = $this->session->userdata("storeid");
						
		$data['nothave1'] = "0";
		$data['nothave2'] = "0";
		//top 5 fav rank
		$sqlgetinfofav = "select * , count(fb_id) AS countfav from info join favorite on info.info_id = favorite.info_id where info.store_id = '".$storeid."' and info.info_status_id = '1' and fav_time between '".$getmonth."-01' and '".$getmonth."-31' ;";
		$rsinfofav = $this->db->query($sqlgetinfofav);
		$data['favtop'] = $rsinfofav->result_array();
		$data['forfav'] = 0;
		if ($rsinfofav->num_rows() < 5 ) {
			$numfav = $rsinfofav->num_rows();
			$numfav = 5 - $numfav;
			$arfav = array('store_id' => $storeid ,
							'info_status_id' => '1' );
			// echo $rsinfofav->num_rows();
			if ($rsinfofav->num_rows() != 0) {
				foreach ($data['favtop'] as $r) {
					if ($r['countfav'] > 0) {
						$notin = $r['info_id']."";
						$araddinfo = array('info_id !=' => $notin );
						$arfav = array_merge($arfav, $araddinfo);
					}else{
						$data['nothave1'] = "1";
					}
					 
				}
			}
			// echo $this->db->last_query();
			$data['favadd'] = $this->db->select("*")
								->from("info")
								->where($arfav)
								->where("info_begin_date between '".$getmonth."-01' and '".$getmonth."-31'")
								->limit($numfav)
								->get()->result_array();
								// echo $this->db->last_query();


			$data['forfav'] = 1;
		}

		// recive info
		$sqlgetinfore = "select * , count(fb_id) AS countre from info join info_log on info.info_id = info_log.info_id where info.store_id = '".$storeid."' and info.info_status_id = '1' and info_log_date between '".$getmonth."-01' and '".$getmonth."-31' ;";
		$reinfore = $this->db->query($sqlgetinfore);
		$data['infore'] = $reinfore->result_array();

		$data['forinfo'] = 0;
		$sqlcountinfo = "select count(info_id) AS numinfo from info where store_id = '".$storeid."' and info_status_id ='1' ";
		$countinfo = $this->db->query($sqlcountinfo)->row_array();
		if ($reinfore->num_rows() < $countinfo['numinfo'] ) {
			// $arfav = "";
			$arfav2 = array('store_id' => $storeid ,
							'info_status_id' => '1' );
			// echo $reinfore->num_rows();
			// echo "<pre>";
			// print_r($reinfore);
			// echo "</pre>";
			if ($reinfore->num_rows() != 0 ) {
				foreach ($data['infore'] as $r) {
					if ($r['countre'] > 0) {
						$notin = $r['info_id']."";
						$araddinfo = array('info_id !=' => $notin );
						$arfav2 = array_merge($arfav2, $araddinfo); 
					}else{
						$data['nothave2'] = "1";
					}
					
				}
			}
			$data['readd'] = $this->db->select("*")
								->from("info")
								->where($arfav2)
								->where("info_begin_date between '".$getmonth."-01' and '".$getmonth."-31'")
								->get()->result_array();
								// echo $this->db->last_query();
			$data['forinfo'] = 1;
			// echo "<pre>";
			// print_r($data['readd']);
			// echo "</pre>";
		}

		$getforyear = substr($getmonth, 0,4);
		$getformonth = substr($getmonth, 5,2);
			$nowdate = date("-m-d");
			$nowdate = $getforyear.$nowdate;

			$y17 = $getforyear-17;
			$y18 = $getforyear-18;
			$y25 = $getforyear-25;
			$y26 = $getforyear-26;
			$y35 = $getforyear-35;
			$y36 = $getforyear-36;
			$y50 = $getforyear-50;
			$y51 = $getforyear-51;
			$y100 = $getforyear-100;

		$dayofmonth = cal_days_in_month(CAL_GREGORIAN,$getformonth,$getforyear);

		for ($i=1; $i <= $dayofmonth ; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			//follow age graph
			$sqlfollowage1 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y17."-01-01' and '".$nowdate."' and fol_date between '".$getmonth."-".$i."' and '".$getmonth."-".$i."' ";
			$sqlfollowage2 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y25."-01-01' and '".$y18."-12-31' and fol_date between '".$getmonth."-".$i."' and '".$getmonth."-".$i."' ";
			$sqlfollowage3 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y35."-01-01' and '".$y26."-12-31' and fol_date between '".$getmonth."-".$i."' and '".$getmonth."-".$i."' ";
			$sqlfollowage4 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y50."-01-01' and '".$y36."-12-31' and fol_date between '".$getmonth."-".$i."' and '".$getmonth."-".$i."' ";
			$sqlfollowage5 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y100."-01-01' and '".$y51."-12-31' and fol_date between '".$getmonth."-".$i."' and '".$getmonth."-".$i."' ";

			$data['foage1m'.$i] = $this->db->query($sqlfollowage1);
			$data['foage2m'.$i] = $this->db->query($sqlfollowage2);
			$data['foage3m'.$i] = $this->db->query($sqlfollowage3);
			$data['foage4m'.$i] = $this->db->query($sqlfollowage4);
			$data['foage5m'.$i] = $this->db->query($sqlfollowage5);

			//follow sex graph
			$sqlfollowsex1 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and sex = 'male' and fol_date between '".$getmonth."-".$i."' and '".$getmonth."-".$i."' ";
			$sqlfollowsex2 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and sex = 'female' and fol_date between '".$getmonth."-".$i."' and '".$getmonth."-".$i."' ";
			$sqlfollowsex3 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and sex = 'null' and fol_date between '".$getmonth."-".$i."' and '".$getmonth."-".$i."' ";

			$data['fosex1m'.$i] = $this->db->query($sqlfollowsex1);
			$data['fosex2m'.$i] = $this->db->query($sqlfollowsex2);
			$data['fosex3m'.$i] = $this->db->query($sqlfollowsex3);
		}

		$data['formonth'] = $dayofmonth;
		$data['foryear'] = $getmonth."";

		$data['foage1'] = array();
		for ($i=1; $i <= $dayofmonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['foage1'], $data['foage1m'.$i]->num_rows() );
			
		}
		$data['foage2'] = array();
		for ($i=1; $i <= $dayofmonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['foage2'], $data['foage2m'.$i]->num_rows() );
			
		}
		$data['foage3'] = array();
		for ($i=1; $i <= $dayofmonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['foage3'], $data['foage3m'.$i]->num_rows() );
			
		}
		$data['foage4'] = array();
		for ($i=1; $i <= $dayofmonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['foage4'], $data['foage4m'.$i]->num_rows() );
			
		}
		$data['foage5'] = array();
		for ($i=1; $i <= $dayofmonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['foage5'], $data['foage5m'.$i]->num_rows() );
			
		}
		

		$data['fosex1'] = array();
		for ($i=1; $i <= $dayofmonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['fosex1'], $data['fosex1m'.$i]->num_rows() );
			
		}
		$data['fosex2'] = array();
		for ($i=1; $i <= $dayofmonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['fosex2'], $data['fosex2m'.$i]->num_rows() );
			
		}
		$data['fosex3'] = array();
		for ($i=1; $i <= $dayofmonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['fosex3'], $data['fosex3m'.$i]->num_rows() );
			
		}



		$data['forte1'] = $getforyear;
		$data['forte2'] = $getformonth;
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$data['graphtype'] = "month";

		$this->load->view("allstatistics",$data);

	}




	public function getfromyear(){
		
		$getmonth = $this->input->post("getyear");
		$storeid = $this->session->userdata("storeid");
						
		$year = date("Y");

		$data['nothave1'] = "0";
		$data['nothave2'] = "0";
		//top 5 fav rank
		$sqlgetinfofav = "select * , count(fb_id) AS countfav from info join favorite on info.info_id = favorite.info_id where info.store_id = '".$storeid."' and info.info_status_id = '1' and info_begin_date between '".$getmonth."-01-01' and '".$getmonth."-12-31' ;";
		$rsinfofav = $this->db->query($sqlgetinfofav);
		$data['favtop'] = $rsinfofav->result_array();
		$data['forfav'] = 0;
		if ($rsinfofav->num_rows() < 5 ) {
			$numfav = $rsinfofav->num_rows();
			$numfav = 5 - $numfav;
			$arfav = array('store_id' => $storeid ,
							'info_status_id' => '1' );
			// echo $rsinfofav->num_rows();
			if ($rsinfofav->num_rows() != 0) {
				foreach ($data['favtop'] as $r) {
					if ($r['countfav'] > 0) {
						$notin = $r['info_id']."";
						$araddinfo = array('info_id !=' => $notin );
						$arfav = array_merge($arfav, $araddinfo);
					}else{
						$data['nothave1'] = "1";
					}
				}
			}
			
			// echo $this->db->last_query();
			$data['favadd'] = $this->db->select("*")
								->from("info")
								->where($arfav)
								->where("info_begin_date between '".$getmonth."-01-01' and '".$getmonth."-12-31'")
								->limit($numfav)
								->get()->result_array();
								// echo $this->db->last_query();

			$data['forfav'] = 1;
		}

		// recive info
		$sqlgetinfore = "select * , count(fb_id) AS countre from info join info_log on info.info_id = info_log.info_id where info.store_id = '".$storeid."' and info.info_status_id = '1' and info_begin_date between '".$getmonth."-01-01' and '".$getmonth."-12-31' ;";
		$reinfore = $this->db->query($sqlgetinfore);
		$data['infore'] = $reinfore->result_array();

		$data['forinfo'] = 0;
		$sqlcountinfo = "select count(info_id) AS numinfo from info where store_id = '".$storeid."' and info_status_id ='1' ";
		$countinfo = $this->db->query($sqlcountinfo)->row_array();
		if ($reinfore->num_rows() < $countinfo['numinfo'] ) {
			$arfav2 = array('store_id' => $storeid ,
							'info_status_id' => '1' );
			if ($reinfore->num_rows() != 0 ) {
				foreach ($data['infore'] as $r) {
					if ($r['countre'] > 0) {
						$notin = $r['info_id']."";
						$araddinfo = array('info_id !=' => $notin );
						$arfav2 = array_merge($arfav2, $araddinfo); 
					}else{
						$data['nothave2'] = "1";
					}
				}
			}
			$data['readd'] = $this->db->select("*")
								->from("info")
								->where($arfav2)
								->where("info_begin_date between '".$getmonth."-01-01' and '".$getmonth."-12-31'")
								->get()->result_array();
			$data['forinfo'] = 1;
		}

		$data['foryear'] = $getmonth;
			$nowdate = date("-m-d");
			$nowdate = $getmonth.$nowdate;

			$y17 = $getmonth-17;
			$y18 = $getmonth-18;
			$y25 = $getmonth-25;
			$y26 = $getmonth-26;
			$y35 = $getmonth-35;
			$y36 = $getmonth-36;
			$y50 = $getmonth-50;
			$y51 = $getmonth-51;
			$y100 = $getmonth-100;

		
		if ($getmonth == $year) {
			$formonth = date("n")+0;
		}else{
			$formonth = 12;
		}
		
		for ($i=1; $i <= $formonth ; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			$sqlfollowage1 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y17."-01-01' and '".$nowdate."' and fol_date between '".$getmonth."-".$i."-01' and '".$getmonth."-".$i."-01' ";
			$sqlfollowage2 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y25."-01-01' and '".$y18."-12-31'  and fol_date between '".$getmonth."-".$i."-01' and '".$getmonth."-".$i."-01' ";
			$sqlfollowage3 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y35."-01-01' and '".$y26."-12-31'  and fol_date between '".$getmonth."-".$i."-01' and '".$getmonth."-".$i."-01' ";
			$sqlfollowage4 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y50."-01-01' and '".$y36."-12-31'  and fol_date between '".$getmonth."-".$i."-01' and '".$getmonth."-".$i."-01' ";
			$sqlfollowage5 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and birth between '".$y100."-01-01' and '".$y51."-12-31'  and fol_date between '".$getmonth."-".$i."-01' and '".$getmonth."-".$i."-01' ";

			$data['foage1m'.$i] = $this->db->query($sqlfollowage1);
			$data['foage2m'.$i] = $this->db->query($sqlfollowage2);
			$data['foage3m'.$i] = $this->db->query($sqlfollowage3);
			$data['foage4m'.$i] = $this->db->query($sqlfollowage4);
			$data['foage5m'.$i] = $this->db->query($sqlfollowage5);

			//follow sex graph
			$sqlfollowsex1 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and sex = 'male'  and fol_date between '".$year."-".$i."-01' and '".$year."-".$i."-01' ";
			$sqlfollowsex2 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and sex = 'female'  and fol_date between '".$year."-".$i."-01' and '".$year."-".$i."-01' ";
			$sqlfollowsex3 = "select * from follow join user on follow.fb_id = user.fb_id join sensoro on follow.sensoro_id = sensoro.sensoro_id where store_id = '".$storeid."' and sex = 'null'  and fol_date between '".$year."-".$i."-01' and '".$year."-".$i."-01' ";

			$data['fosex1m'.$i] = $this->db->query($sqlfollowsex1);
			$data['fosex2m'.$i] = $this->db->query($sqlfollowsex2);
			$data['fosex3m'.$i] = $this->db->query($sqlfollowsex3);
		}
		

		$data['formonth'] = $formonth;

		$data['foage1'] = array();
		for ($i=1; $i <= $formonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['foage1'], $data['foage1m'.$i]->num_rows() );
			
		}
		$data['foage2'] = array();
		for ($i=1; $i <= $formonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['foage2'], $data['foage2m'.$i]->num_rows() );
			
		}
		$data['foage3'] = array();
		for ($i=1; $i <= $formonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['foage3'], $data['foage3m'.$i]->num_rows() );
			
		}
		$data['foage4'] = array();
		for ($i=1; $i <= $formonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['foage4'], $data['foage4m'.$i]->num_rows() );
			
		}
		$data['foage5'] = array();
		for ($i=1; $i <= $formonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['foage5'], $data['foage5m'.$i]->num_rows() );
			
		}
		

		$data['fosex1'] = array();
		for ($i=1; $i <= $formonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['fosex1'], $data['fosex1m'.$i]->num_rows() );
			
		}
		$data['fosex2'] = array();
		for ($i=1; $i <= $formonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['fosex2'], $data['fosex2m'.$i]->num_rows() );
			
		}
		$data['fosex3'] = array();
		for ($i=1; $i <= $formonth; $i++) { 
			if ($i < 10) {
				$i = "0".$i;
			}
			array_push($data['fosex3'], $data['fosex3m'.$i]->num_rows() );
			
		}

		$data['graphtype'] = "year";
		
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		$this->load->view("allstatistics",$data);

	}



}
?>