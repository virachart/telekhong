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
		$info = $this->input->post("info");
		$data = json_decode($info);
		$uuid = $data->uuid;
		$major = $data->major;
		$minor = $data->minor;
		$id = $data->fb_id;
		// $ar = array('uuid' => $uuid , 'major' => $major , 'minor' => $minor , 'sensoro_type' => '1');
		$sqlSenType = "select * from sensoro where uuid='".$uuid."' and major='".$major."' and minor='".$minor."' and sensoro_type='1' ";
		// $data['rs'] = $this->db->select("*")->from("sensoro");
		$rs = $this->db->query($sqlSenType);
		$data1 = $rs->row_array();
		if ($rs->num_rows != 0) {
			// $data1['rs'] = $rs->row_array();
			// echo $data1['sensoro_id'];
			
		}else{
			// $sqlAddSenLog = ""
		}

	}


	public function storedetail(){
		
	}

	public function fav(){
		
	}

	public function follow(){
		
	}

	public function setapp(){
		
	}

	public function qrcode(){
				
	}


	

}

?>