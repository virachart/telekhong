<?php
class Store extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			$ownerid = $this->session->userdata('ownerid');
			$sqlfindstore = "select MIN(store_id) AS store_id from store where status_store_id = '1' and owner_id = '".$ownerid."' ";
			$rsfindstore = $this->db->query($sqlfindstore);
			$arfindstore = $rsfindstore->row_array();
			$storeid = $arfindstore['store_id'];
			$sqlgetstore = "select * from store where store_id = '".$storeid."' ";
			$data['rs'] = $this->db->query($sqlgetstore);
			// $data['store'] = $rsgetstore->result_array();
			
			
			$this->load->view("store",$data);
		// }else{
		// 	redirect("auth");
		}

	}

	

}

?>