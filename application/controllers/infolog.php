<?php
class Infolog extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			
			$this->load->view("infolog");
		}else{
			redirect("auth");
		}
		

	}

	

}

?>