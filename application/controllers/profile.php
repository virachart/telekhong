<?php
class Profile extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		$this->load->view("profile");

	}

	

}

?>