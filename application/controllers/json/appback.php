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
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		$ar = array('uuid' => $uuid , 'major' => $major , 'minor' => $minor , 'sensoro_type' => '1');
		$sqlSenType = "select * from sensoro where uuid='".$uuid."' and major='".$major."' and minor='".$minor."' and sensoro_type='1' and status_sensoro_id = '1' ";
		// $data['rs'] = $this->db->select("*")->from("sensoro");
		$rs = $this->db->query($sqlSenType);
		$data1 = $rs->row_array();
		// echo "<pre>";
		// print_r($data1);
		// echo "</pre>";
		// echo "string";
				
		$ar=array(
			"sensoro_id"=>$data1['sensoro_id'],
			"fb_id"=>$id
			);
		$this->db->insert("sensoro_log",$ar);
		// echo $this->db->last_query();
		if ($rs->num_rows() != null) {
			// echo "test";
			$idSen = $data1['sensoro_id'];
		// 	// SELECT * FROM (info INNER JOIN store ON info.store_id = store.store_id) JOIN sensoro ON info.store_id = sensoro.store_id
			$sqlInfo = "SELECT * FROM (info INNER JOIN store ON info.store_id = store.store_id) JOIN sensoro ON info.store_id = sensoro.store_id where sensoro_id = '".$idSen."' and info_begin_date < NOW() and info_expire_date >= NOW()+1 and status_store_id = '1' ";
		
			$rsInfo = $this->db->query($sqlInfo);
			// echo $this->db->last_query();
			

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
		if ($rsStore->num_rows != 0) {
			$arsend = array("detail"=>$dataStore['detail'],
				"address"=>$dataStore['address'],
				"tel"=>$dataStore['tel'],
				"opentime"=>$dataStore['open_time'],
				"pic"=>$dataStore['picture_store'],
				"id"=>$id
				);
		}else{
			$arsend = array("detail"=>null,
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
		if ($rsChQr->num_rows != 0) {
			$qrid = $dataQr['qr_id'];
			$arRe = array('qr_id' => $qrid , 'fb_id'=>$fb );
			$this->db->insert('qr_log', $arRe);
			$arsend = array('qrid' => $qrid,
							'qrcode' => $dataQr['code']);
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


}

?>