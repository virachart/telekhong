<?php
class Testdate extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){

		
		$this->load->view("testdate");

					
	}

	public function test(){
		$da = $this->input->post("datepick");
		echo $da;


	}
}
?>