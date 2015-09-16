<?php
class Testsession extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		echo $this->session->userdata('ownerid');
	}

}

?>