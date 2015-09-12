<?php
class Storeowner extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	//function index
	public function index(){
			$this->session->unset_userdata('storeid');
			$ownerid = $this->session->userdata('ownerid');
			$arSql = array('owner_id' => "7" ,
							'status_store_id <>' => "4" );
			$data['rs'] = $this->db->select("*")->from("store")->join("package","store.package_id = package.package_id")->where($arSql)->get()->result_array();
			// echo "<pre>";
			// var_dump($data['rs']);
			// echo "</pre>";

			$this->load->view("storeowner",$data);
	}//close index


	public function del($id){
		$sqlupdate = "UPDATE store SET status_store_id ='4' WHERE store_id = '".$id."'";
		$this->db->query($sqlupdate);
		redirect("store");
		
	}


	public function addinfo($id){
		$arSessStore = array('storeid' => $id);
		$this->session->set_userdata($arSessStore);
		redirect("createinfo");
		
			
		
	}

	

}// close class

?>