<?php
class Packageowner extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			$data['rs'] = $this->db->select("*")->from("package")->get()->result_array();
			// echo $this->db->last_query();
			// var_dump($data);
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// print_r($data['rs']);
			$this->load->view("packageowner",$data);

		}else{
			redirect("auth");
		}
	}

	

}

?>