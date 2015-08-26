<?php
class package extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			
			$this->load->view("package.php");

		}else{
			redirect("auth");
		}
		
		

	}

	

}

?>