<?php
class Appback extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		
	}

	public function findinfo(){
		$arsend = null;

		$info = $this->input->post("info");
		$data = json_decode($info);
		$uuid = $data->uuid;
		$major = $data->major;
		$minor = $data->minor;
		$id = $data->fb_id;
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		$ar = array('uuid' => $uuid , 'major' => $major , 'minor' => $minor , 'sensoro_type' => '1');
		$sqlSenType = "select * from sensoro where uuid='".$uuid."' and major='".$major."' and minor='".$minor."' and sensoro_type='1' and status_sensoro_id = '1' ";
		// $data['rs'] = $this->db->select("*")->from("sensoro");
		$rs = $this->db->query($sqlSenType);
		$data1 = $rs->row_array();
		
		// echo "string";
				
		$ar=array(
			"sensoro_id"=>$data1['sensoro_id'],
			"fb_id"=>$id
			);
		$this->db->insert("sensoro_log",$ar);
		// echo $this->db->last_query();
		if ($rs->num_rows() != null) {
			
			$idSen = $data1['sensoro_id'];
		// 	// SELECT * FROM (info INNER JOIN store ON info.store_id = store.store_id) JOIN sensoro ON info.store_id = sensoro.store_id
			$sqlInfo = "SELECT * FROM (info INNER JOIN store ON info.store_id = store.store_id) JOIN sensoro ON info.store_id = sensoro.store_id where sensoro_id = '".$idSen."' and info_begin_date < NOW() and info_expire_date >= NOW()+1 and status_store_id = '1' ";
		
			$rsInfo = $this->db->query($sqlInfo);
			

			if ($rsInfo->num_rows() != 0) {
				$dataInfo = $rsInfo->row_array();
				
				// print_r($dataInfo);
				$cat = $dataInfo['catagory'];
				$sqlCat = "Select * from user where ".$cat." = '1' ";
				$rsCat = $this->db->query($sqlCat);
				if ($rsCat->num_rows != 0) {
					$arsend = array("info_id"=>$dataInfo['info_id'],
						"info_name"=>$dataInfo['info_name'],
						"info_desc"=>$dataInfo['info_descrip'],
						"info_begin"=>$dataInfo['info_begin_date'],
						"info_expire"=>$dataInfo['info_expire_date'],
						"info_pic"=>$dataInfo['info_pic'],
						"catagory"=>$dataInfo['catagory'],
						"store_id"=>$dataInfo['store_id'],
						"store_name"=>$dataInfo['store_name']
						);

				//insert data to info_log
					$arInfo = array("info_id"=>$dataInfo['info_id'],
						"fb_id"=>$id
						);
					$this->db->insert("info_log",$arInfo);
				}
			// echo $this->db->last_query();
			}
		}


			// echo "<pre>";
			// echo $dataInfo->store_id;
			// print_r($dataInfo);
			// print_r($dataInfo2);
			// print_r($rsInfo);
			// echo "</pre>";
		
		echo json_encode($arsend);

	}


	public function storedetail(){
		$arsend = null;

		$jsStore = $this->input->post("store");
		$arJsStore = json_decode($jsStore);
		$id = $arJsStore->store_id;

		$sqlStore = "Select * from store where store_id = '".$id."' and status_store_id = '1' ";
		$rsStore = $this->db->query($sqlStore);
		$dataStore = $rsStore->row_array();
		if ($rsStore->num_rows != 0) {
			$arsend = array("detail"=>$dataStore['detail'],
				"address"=>$dataStore['address'],
				"tel"=>$dataStore['tel'],
				"opentime"=>$dataStore['open_time'],
				"pic"=>$dataStore['picture_store']
				);
		}else{
			$arsend = array("detail"=>null,
				"address"=>null,
				"tel"=>null,
				"opentime"=>null,
				"pic"=>null
				);
		}


		echo json_encode($arsend);
	}

	public function fav(){
		$jsFav = $this->input->post("fav");
		$arFav = json_decode($jsFav);
		//var_dump($ar1);
		$fbid = $arFav->fb_id;
		$infoid = $arFav->info_id;
		$arInfo = array("info_id"=>$infoid,
			"fb_id"=>$fbid);
		$this->db->insert("favorite",$arInfo);
		$arsend = array("status"=> "finish");
		echo json_encode($arsend);
	}

	public function follow(){
		$jsFol = $this->input->post("fol");
		$arFol = json_decode($jsFol);
		//var_dump($ar1);
		$fbid = $arFol->fb_id;
		$storeid = $arFol->store_id;
		$sqlFol = "select * from sensoro where store_id = '".$storeid."' and sensoro_type = '1' ";
		$rsFol = $this->db->query($sqlFol);
		$dataFol = $rsFol->row_array();
		$senid = $dataFol['sensoro_id'];
		$arFol = array("sensoro_id"=>$senid,
			"fb_id"=>$fbid
			);
		$this->db->insert("follow",$arFol);
		$arsend = array("status"=> "finish");
		echo json_encode($arsend);
	}

	public function setapp(){
		$jsSet = $this->input->post("setap");
		$arSet = json_decode($jsSet);
		$fb = $arSet->id;
		$food = $arSet->food;
		$fashion = $arSet->fashion;
		$sport = $arSet->sport;
		$entertain = $arSet->entertain;
		$book = $arSet->book;
		$it = $arSet->it;
		$healty = $arSet->healty;
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
		echo json_encode($arsend);
	}

	public function qrcode(){
		$jsQr = $this->input->post("qr");
		$arQr = json_decode($jsQr);
		$fb = $arQr->fb;
		$info = $arQr->info;
		$sqlQr = "select * from qr where info_id = '".$info."' ";
		$rsQr = $this->db->query($sqlQr);
		$dataQr = $rsQr->row_array();
		$sqlChQr = "select * FROM info join qr on info.info_id = qr.info_id where info_begin_date < NOW() and info_expire_date >= NOW()+1";
		$rsChQr = $this->db->query($sqlChQr);
		if ($rsChQr->num_rows != 0) {
			$qrid = $dataQr['qr_id'];
			$arRe = array('qr_id' => $qrid , 'fb_id'=>$fb );
			$this->db->insert('qr_log', $arRe);
			$arSend = array('qrid' => $qrid,
							'qrcode' => $dataQr['code']);
		}else{
			$arSend = null;
		}

		echo json_encode($arSend);
		// $arapp = array('testa' => $b,'testb' => $c);
		// echo json_encode($arapp);
	}

	public function login(){
		$jsLog = $this->input->post("login");
		$arLog = json_decode($jsLog);
		$fbid = $arLog->id;
		$name = $arLog->name;
		$sex = $arLog->gender;
		$birth = $arLog->birth;

		$sqlLogin = "Select * from user where fb_id = '".$fbid."' ";
		$rsLogin = $this->db->query($sqlLogin);
		if ($rsLogin->num_rows == 0) {
			$arInLogin = array('fb_id' => $fbid ,
				'fb_name' => $name,
				'sex' => $sex,
				'birth' => $birth);
			$this->db->insert('user' , $arInLogin);
		}
		$sqlLogin2 = "Select * from user where fb_id = '".$fbid."' ";
		$rsLogin2 = $this->db->query($sqlLogin2);
		$dataLogin = $rsLogin2->row_array();
		$arSend = array('fbid' => $dataLogin['fb_id'],
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
		echo json_encode($arSend);
	}


}

?>