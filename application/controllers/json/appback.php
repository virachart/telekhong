<?php
class Appback extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		$a = $this->input->post("a");
		$ar1 = json_decode($a);
		//var_dump($ar1);
		$b = $ar1->id;
		$c = $ar1->pass;
		$arapp = array('testa' => $b,'testb' => $c);
		echo json_encode($arapp);
	}

	public function findinfo(){
		$arsend = null;

		$info = $this->input->post("info");
		$data = json_decode($info);
		$uuid = $data->uuid;
		$major = $data->major;
		$minor = $data->minor;
		$id = $data->fb_id;
		// $ar = array('uuid' => $uuid , 'major' => $major , 'minor' => $minor , 'sensoro_type' => '1');
		$sqlSenType = "select * from sensoro where uuid='".$uuid."' and major='".$major."' and minor='".$minor."' and sensoro_type='1' and status_sensoro_id = '1' ";
		// $data['rs'] = $this->db->select("*")->from("sensoro");
		$rs = $this->db->query($sqlSenType);
		$data1 = $rs->row_array();
		$ar=array(
				"sensoro_id"=>$data1['sensoro_id'],
				"fb_id"=>$id
			);
			$this->db->insert("sensoro_log",$ar);
		if ($rs->num_rows != 0) {
			$idSen = $data1['sensoro_id'];
			
			// SELECT * FROM (info INNER JOIN store ON info.store_id = store.store_id) JOIN sensoro ON info.store_id = sensoro.store_id
			$sqlInfo = "SELECT * FROM (info INNER JOIN store ON info.store_id = store.store_id) JOIN sensoro ON info.store_id = sensoro.store_id where sensoro_id = '".$idSen."' and info_begin_date < NOW() and info_expire_date >= NOW() and status_store_id = '1' ";
			// ".$idSen."
			$rsInfo = $this->db->query($sqlInfo);
			// echo $this->db->last_query();
			$dataInfo = $rsInfo->row_array();
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
			// echo "<pre>";
			// echo $dataInfo->store_id;
			// print_r($dataInfo);
			// print_r($dataInfo2);
			// print_r($rsInfo);
			// echo "</pre>";
		}
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
		$infoid = $arFav->info_id
		$arInfo = array("info_id"=>$infoid,
						"fb_id"=>$fbid
							);
		$this->db->insert("favorite",$arInfo);
		$arsend = array("status"=> "finish")
		echo json_encode($arsend);
	}

	public function follow(){
		$jsFol = $this->input->post("fol");
		$arFol = json_decode($jsFol);
		//var_dump($ar1);
		$fbid = $arFav->fb_id;
		$storeid = $arFol->store_id
		$sqlFol = "select * from sensoro where store_id = '".$storeid."' and sensoro_type = '1' ";
		$rsFol = $this->db->query($sqlFol);
		$dataFol = $rsStore->row_array();
		$senid = $dataFol['sensoro_id'];
		$arFol = array("sensoro_id"=>$senid,
						"fb_id"=>$fbid
							);
		$this->db->insert("follow",$arFol);
		$arsend = array("status"=> "finish")
		echo json_encode($arsend);
	}

	public function setapp(){
		
	}

	public function qrcode(){
				
	}


	

}

?>