<?php
class contact extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){

		$this->load->view("contact.php");

	}

	

}

?>