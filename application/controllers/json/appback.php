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
		$uuid = $data->major;
		$uuid = $data->minor;
		$uuid = $data->fb_id;

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