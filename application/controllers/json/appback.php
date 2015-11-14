<?php
class Appback extends CI_Controller{

	public function main(){

		parent::__construct();
		// $this->output->set_content_type('application/json');

	}

	public function index(){
		echo "index";
	}

	public function findinfo(){
		$arsend = null;

		$uuid = $this->input->post("uuid");
		$major = $this->input->post("major");
		$minor = $this->input->post("minor");
		$id = $this->input->post("fb_id");

		$ar = array('uuid' => $uuid , 'major' => $major , 'minor' => $minor , 'sensoro_type' => '1');
		$sqlSenType = "select * from sensoro where uuid='".$uuid."' and major='".$major."' and minor='".$minor."' and sensoro_type='1' and status_sensoro_id = '1' ";
		// $data['rs'] = $this->db->select("*")->from("sensoro");
		$rs = $this->db->query($sqlSenType);
		$data1 = $rs->row_array();
				
		
		// echo $this->db->last_query();
		if ($rs->num_rows() != null) {
			$ar=array(
			"sensoro_id"=>$data1['sensoro_id'],
			"fb_id"=>$id
			);
			$this->db->insert("sensoro_log",$ar);
			// echo "test";
			$idSen = $data1['sensoro_id'];
		// 	// SELECT * FROM (info INNER JOIN store ON info.store_id = store.store_id) JOIN sensoro ON info.store_id = sensoro.store_id
			$sqlInfo = "SELECT * FROM (info INNER JOIN store ON info.store_id = store.store_id) JOIN sensoro ON info.store_id = sensoro.store_id where sensoro_id = '".$idSen."' and info_begin_date < NOW() and info_expire_date >= NOW()+1 and status_store_id = '1'  and info_status_id = '1' ";
		
			$rsInfo = $this->db->query($sqlInfo);
			// echo "<pre>";
			// print_r($rsInfo);
			// echo "</pre>";
			// echo $this->db->last_query();
			

			if ($rsInfo->num_rows() > 0) {
				$dataInfo = $rsInfo->row_array();
				// echo "<pre>";
				// print_r($dataInfo);
				// echo "</pre>";
				// echo $dataInfo['info_id'];
				$dataqr = $this->db->select("*")
							->from("qr")
							->where("info_id",$dataInfo['info_id'])->get();
							// echo $this->db->last_query();
				if ($dataqr->num_rows() != 0) {
					$qrch = "have";
				}else{
					$qrch = "not have";
				}
				// print_r($dataInfo);
				$cat = $dataInfo['catagory'];
				$sqlCat = "Select * from user where ".$cat." = '1' ";
				$rsCat = $this->db->query($sqlCat);
				if ($rsCat->num_rows() != 0) {
					$arsend = array("info_id"=>$dataInfo['info_id'],
						"info_name"=>$dataInfo['info_name'],
						"info_desc"=>$dataInfo['info_descrip'],
						"info_begin"=>$dataInfo['info_begin_date'],
						"info_expire"=>$dataInfo['info_expire_date'],
						"info_pic"=>$dataInfo['info_pic'],
						"catagory"=>$dataInfo['catagory'],
						"store_id"=>$dataInfo['store_id'],
						"store_name"=>$dataInfo['store_name'],
						"qr" => $qrch
						);

				//insert data to info_log
					$arInfo = array("info_id"=>$dataInfo['info_id'],
						"fb_id"=>$id
						);
					$this->db->insert("info_log",$arInfo);
				}else{
					$arsend = array("info_id"=> null,
						"info_name"=>null,
						"info_desc"=>null,
						"info_begin"=>null,
						"info_expire"=>null,
						"info_pic"=>null,
						"catagory"=>null,
						"store_id"=>null,
						"store_name"=>null,
						"qr" => null
						);
				}
			// echo $this->db->last_query();
			}else{
				$arsend = array("info_id"=> null,
						"info_name"=>null,
						"info_desc"=>null,
						"info_begin"=>null,
						"info_expire"=>null,
						"info_pic"=>null,
						"catagory"=>null,
						"store_id"=>null,
						"store_name"=>null,
						"qr" => null
						);
			}
		}else{
			$arsend = array("info_id"=> null,
						"info_name"=>null,
						"info_desc"=>null,
						"info_begin"=>null,
						"info_expire"=>null,
						"info_pic"=>null,
						"catagory"=>null,
						"store_id"=>null,
						"store_name"=>null,
						"qr" => null
						);
		}

		$this->output
        			->set_content_type('application/json')
        			->set_output(json_encode($arsend));

	}


	public function storedetail(){
		$arsend = null;
		if ($this->input->get("storeid") != null) {
			$id = $this->input->get("storeid");
		}else{
			$id = $this->input->post("storeid");
		}
		// $id = $this->input->get("storeid");
		// $arJsStore = json_decode($jsStore);
		// $id = $arJsStore->store_id;

		$sqlStore = "Select * from store where store_id = '".$id."' and status_store_id = '1' ";
		$rsStore = $this->db->query($sqlStore);
		$dataStore = $rsStore->row_array();
		if ($rsStore->num_rows() != 0) {
			$arsend = array("storename" => $dataStore['store_name'],
				"detail"=>$dataStore['detail'],
				"address"=>$dataStore['address'],
				"tel"=>$dataStore['tel'],
				"opentime"=>$dataStore['open_time'],
				"pic"=>$dataStore['picture_store'],
				"id"=>$id
				);
		}else{
			$arsend = array("storename" => null,
				"detail"=>null,
				"address"=>null,
				"tel"=>null,
				"opentime"=>null,
				"pic"=>null,
				"id"=>$id
				);
		}
		$st = (string)$id;
		// write_file('./test.txt', $st."test");
		
		$this->output
        			->set_content_type('application/json')
        			->set_output(json_encode($arsend));
		// echo $aa;
	}

	public function fav(){
		// $jsFav = $this->input->post("fav");
		// $arFav = json_decode($jsFav);
		//var_dump($ar1);
		$fbid = $this->input->post("fb_id");
		$infoid = $this->input->post("info_id");
		$arInfo = array("info_id"=>$infoid,
			"fb_id"=>$fbid);
		$this->db->insert("favorite",$arInfo);
		$arsend = array("status"=> "finish");
		$this->output
        			->set_content_type('application/json')
        			->set_output(json_encode($arsend));
	}

	public function follow(){
		// $jsFol = $this->input->post("fol");
		// $arFol = json_decode($jsFol);
		//var_dump($ar1);
		$fbid = $this->input->post("fb_id");
		$storeid = $this->input->post("store_id");
		// $fbid = $arFol->fb_id;
		// $storeid = $arFol->store_id;
		$sqlFol = "select * from sensoro where store_id = '".$storeid."' and sensoro_type = '1' ";
		$rsFol = $this->db->query($sqlFol);
		$dataFol = $rsFol->row_array();
		$senid = $dataFol['sensoro_id'];
		$arFol = array("sensoro_id"=>$senid,
			"fb_id"=>$fbid
			);
		$this->db->insert("follow",$arFol);
		$arsend = array("status"=> "finish");
		$this->output
        			->set_content_type('application/json')
        			->set_output(json_encode($arsend));
	}

	public function setapp(){
		// $jsSet = $this->input->post("setap");

		// $arSet = json_decode($jsSet);
		$fb = $this->input->post("id");
		$food = $this->input->post("food");
		$fashion = $this->input->post("fashion");
		$sport = $this->input->post("sport");
		$entertain = $this->input->post("entertain");
		$book = $this->input->post("book");
		$it = $this->input->post("it");
		$healty = $this->input->post("healty");
		$arUpdate = array('food' => $food ,
			'fashion' => $fashion ,
			'sport' => $sport ,
			'entertain' => $entertain , 
			'book' => $book ,
			'it' => $it ,
			'healty' => $healty 
			);
		$this->db->where('fb_id' , $fb);
		$this->db->update('user', $arUpdate);

		$arsend = array('status' => "finish");
		$this->output
        			->set_content_type('application/json')
        			->set_output(json_encode($arsend));
	}

	public function getfav(){
		$id = $this->input->post("fbid");

		$sqlgetfav = "select DISTINCT info.info_id from favorite join info on favorite.info_id = info.info_id where fb_id = '".$id."' and info_begin_date < NOW() and info_expire_date >= NOW()+1 and info_status_id = '1' ";
		$datafav = $this->db->query($sqlgetfav)->result_array();
		$argetfav = array();
		foreach ($datafav as $r) {
			$getidfav = $r['info_id'];
			array_push($argetfav , $getidfav);
		}
		// print_r($argetfav) ;
		$this->output
        			->set_content_type('application/json')
        			->set_output(json_encode($argetfav));

	}

	public function getinfo(){
		$infoid = $this->input->post("info");
		$sqlgetinfo = "select * from info join store on info.store_id = store.store_id where info_id = '".$infoid."' ";
		$dataInfo = $this->db->query($sqlgetinfo)->row_array(); 

		$dataqr = $this->db->select("*")
							->from("qr")
							->where("info_id",$dataInfo['info_id'])->get();
							// echo $this->db->last_query();
		if ($dataqr->num_rows() != 0) {
			$qrch = "have";
		}else{
			$qrch = "not have";
		}
		$arsend = array("info_id"=>$dataInfo['info_id'],
						"info_name"=>$dataInfo['info_name'],
						"info_desc"=>$dataInfo['info_descrip'],
						"info_begin"=>$dataInfo['info_begin_date'],
						"info_expire"=>$dataInfo['info_expire_date'],
						"info_pic"=>$dataInfo['info_pic'],
						"catagory"=>$dataInfo['catagory'],
						"store_id"=>$dataInfo['store_id'],
						"store_name"=>$dataInfo['store_name'],
						"qr" => $qrch
						);
		$this->output
        			->set_content_type('application/json')
        			->set_output(json_encode($arsend));

	}

	public function getfol(){
		$id = $this->input->post("fbid");

		$sqlgetfol = "select DISTINCT store.store_id from follow join sensoro on follow.sensoro_id = sensoro.sensoro_id join store on sensoro.store_id = store.store_id where fb_id = '".$id."' and store.status_store_id = '1'  ";
		$datafol = $this->db->query($sqlgetfol)->result_array();
		$argetfol = array();
		foreach ($datafol as $r) {
			$getidfol = $r['store_id'];
			array_push($argetfol , $getidfol);

		}
		// print_r($argetfol);
		$this->output
        			->set_content_type('application/json')
        			->set_output(json_encode($argetfol));

	}

	public function qrcode(){
		// $jsQr = $this->input->post("qr");
		// $arQr = json_decode($jsQr);
		$fb = $this->input->post("fb");
		$info = $this->input->post("info");
		$sqlQr = "select * from qr where info_id = '".$info."' ";
		$rsQr = $this->db->query($sqlQr);
		$dataQr = $rsQr->row_array();
		$sqlChQr = "select * FROM info join qr on info.info_id = qr.info_id where info_begin_date < NOW() and info_expire_date >= NOW()+1";
		$rsChQr = $this->db->query($sqlChQr);
		if ($rsChQr->num_rows() != 0) {
			$qrid = $dataQr['qr_id'];
			
			$qrsend = $dataQr['code'].$fb;
			$arsend = array('qrid' => $qrid,
							'qrcode' => $qrsend);
		}else{
			$arsend = null;
		}
		$this->output
        			->set_content_type('application/json')
        			->set_output(json_encode($arsend));
		// $arapp = array('testa' => $b,'testb' => $c);
		// echo json_encode($arapp);
	}

	public function login(){
		// $jsLog = $this->input->post("login");
		// $arLog = json_decode($jsLog);
		$fbid = $this->input->post("id");
		$name = $this->input->post("name");
		$sex = $this->input->post("gender");
		$birth = $this->input->post("birth");

		$sqlLogin = "Select * from user where fb_id = '".$fbid."' ";
		$rsLogin = $this->db->query($sqlLogin);
		if ($rsLogin->num_rows() == 0) {
			$arInLogin = array('fb_id' => $fbid ,
				'fb_name' => $name,
				'sex' => $sex,
				'birth' => $birth);
			$this->db->insert('user' , $arInLogin);
		}
		$sqlLogin2 = "Select * from user where fb_id = '".$fbid."' ";
		$rsLogin2 = $this->db->query($sqlLogin2);
		$dataLogin = $rsLogin2->row_array();
		$arsend = array('fbid' => $dataLogin['fb_id'],
			'name' => $dataLogin['fb_name'],
			'sex' => $dataLogin['sex'],
			'food' => $dataLogin['food'],
			'fashion' => $dataLogin['fashion'],
			'sport' => $dataLogin['sport'],
			'entertain' => $dataLogin['entertain'],
			'book' => $dataLogin['book'],
			'it' => $dataLogin['it'],
			'healty' => $dataLogin['healty'],
			);
		$this->output
        			->set_content_type('application/json')
        			->set_output(json_encode($arsend));
	}

	public function checkuserinfo(){
		$fbid = $this->input->post("id");
		$sqlchinfouser = "select * from user where fb_id = '".$fbid."' ";
		$rsuserlogin = $this->db->query($sqlchinfouser);
		if ($rsuserlogin->num_rows() != 0) {
			$datachuserlogin = $rsuserlogin->row_array();
			if ($datachuserlogin['sex'] != null && $datachuserlogin['birth'] != null) {
				$arsend = array('status' => true);
			}else{
				$arsend = array('status' => false);
			}
		}else{
			$arsend = array('status' => false);
		}
		$this->output
        			->set_content_type('application/json')
        			->set_output(json_encode($arsend));
	}


	public function findinfo2(){
		$arsend = null;

		$uuid = $this->input->post("uuid");
		$major = $this->input->post("major");
		$minor = $this->input->post("minor");
		$id = $this->input->post("fb_id");

		$ar = array('uuid' => $uuid , 'major' => $major , 'minor' => $minor , 'sensoro_type' => '1');
		$sqlSenType = "select * from sensoro where uuid='".$uuid."' and major='".$major."' and minor='".$minor."' and sensoro_type='1' and status_sensoro_id = '1' ";
		// $data['rs'] = $this->db->select("*")->from("sensoro");
		$rs = $this->db->query($sqlSenType);
		$data1 = $rs->row_array();
				
		
		// echo $this->db->last_query();
		if ($rs->num_rows() != null) {
			$ar=array(
			"sensoro_id"=>$data1['sensoro_id'],
			"fb_id"=>$id
			);
			$this->db->insert("sensoro_log",$ar);
			// echo "test";
			$idSen = $data1['sensoro_id'];
		// 	// SELECT * FROM (info INNER JOIN store ON info.store_id = store.store_id) JOIN sensoro ON info.store_id = sensoro.store_id
			$sqlInfo = "SELECT * FROM (info INNER JOIN store ON info.store_id = store.store_id) JOIN sensoro ON info.store_id = sensoro.store_id where sensoro_id = '".$idSen."' and info_begin_date < NOW() and info_expire_date >= NOW()+1 and status_store_id = '1'  and info_status_id = '1' ";
		
			$rsInfo = $this->db->query($sqlInfo);
			// echo "<pre>";
			// print_r($rsInfo);
			// echo "</pre>";
			// echo $this->db->last_query();
			

			if ($rsInfo->num_rows() > 0) {
				$dataInfo = $rsInfo->result_array();
				// echo "<pre>";
				// print_r($dataInfo);
				// echo "</pre>";
				// echo $dataInfo['info_id'];

				$intcountdata = 1;
				$qrch = null;

				$arinfoid = array();
				$arinfoname = array();
				$arinfodesc = array();
				$arinfobegin = array();
				$arinfoexpire = array();
				$arinfopic = array();
				$arinfocat = array();
				$arstoreid = array();
				$arstorename = array();
				$arqr = array();

				$arsend = array();
				$arsend2 = array();

				foreach ($dataInfo as $r) {

					// check cat user
					$cat = $r['catagory'];
					$sqlCat = "Select * from user where ".$cat." = '1' ";
					$rsCat = $this->db->query($sqlCat);
					if ($rsCat->num_rows() != 0) {
						// check qr
						$dataqr = $this->db->select("*")
									->from("qr")
									->where("info_id",$r['info_id'])->get();
									// echo $this->db->last_query();
						if ($dataqr->num_rows() != 0) {
							$qrch = "have";
						}else{
							$qrch = "not have";
						}
						
						$arsetar = array("info_id"=>$r['info_id'],
										"info_name"=>$r['info_name'],
										"info_desc"=>$r['info_descrip'],
										"info_begin"=>$r['info_begin_date'],
										"info_expire"=>$r['info_expire_date'],
										"info_pic"=>$r['info_pic'],
										"catagory"=>$r['catagory'],
										"store_id"=>$r['store_id'],
										"store_name"=>$r['store_name'],
										"qr" => $qrch
										);
						// $arinfoid = array($r['info_id']);
						// $arinfoname = array($r['info_name']);
						// $arinfodesc = array($r['info_descrip']);
						// $arinfobegin = array($r['info_begin_date']);
						// $arinfoexpire = array($r['info_expire_date']);
						// $arinfopic = array($r['info_pic']);
						// $arinfocat = array($r['catagory']);
						// $arstoreid = array($r['store_id']);
						// $arstorename = array($r['store_name']);
						// $arqr = array($qrch);
						array_push($arsend2, $arsetar);
						// array_push($arinfoname, $r['info_name']);
						// array_push($arinfodesc, $r['info_descrip']);
						// array_push($arinfobegin, $r['info_begin_date']);
						// array_push($arinfoexpire, $r['info_expire_date']);
						// array_push($arinfopic, $r['info_pic']);
						// array_push($arinfocat, $r['catagory']);
						// array_push($arstoreid, $r['store_id']);
						// array_push($arstorename, $r['store_name']);
						// array_push($arqr, $qrch);

						$intcountdata++;

						//insert data to info_log
						$arInfo = array("info_id"=>$r['info_id'],
										"fb_id"=>$id
										);
						$this->db->insert("info_log",$arInfo);
					}
					// echo "<pre>";
					// print_r($arsend2);
					// echo "</pre>";
					// echo "</br>";
					$arsend = array_values($arsend2);

				}
				

					
			}else{
				$arsend = array("info_id"=> null,
								"info_name"=>null,
								"info_desc"=>null,
								"info_begin"=>null,
								"info_expire"=>null,
								"info_pic"=>null,
								"catagory"=>null,
								"store_id"=>null,
								"store_name"=>null,
								"qr" => null
								);
			}
			// echo $this->db->last_query();
		}else{
			$arsend = array("info_id"=> null,
							"info_name"=>null,
							"info_desc"=>null,
							"info_begin"=>null,
							"info_expire"=>null,
							"info_pic"=>null,
							"catagory"=>null,
							"store_id"=>null,
							"store_name"=>null,
							"qr" => null
							);
		}
		// }else{
		// 	$arsend = array("info_id"=> null,
		// 				"info_name"=>null,
		// 				"info_desc"=>null,
		// 				"info_begin"=>null,
		// 				"info_expire"=>null,
		// 				"info_pic"=>null,
		// 				"catagory"=>null,
		// 				"store_id"=>null,
		// 				"store_name"=>null,
		// 				"qr" => null
		// 				);
		// }

		// echo json_encode($arsend,JSON_FORCE_OBJECT);

		$this->output
        			->set_content_type('application/json')
        			->set_output(json_encode($arsend,JSON_FORCE_OBJECT));

		
		// echo "<pre>";
		// print_r(json_encode($arsend));
		// echo "</pre>";

	}


}

?>