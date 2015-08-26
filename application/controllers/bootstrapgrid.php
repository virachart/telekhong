<?php
class bootstrapgrid extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){

		$this->load->view("bootstrap-grid.php");

	}

	

}

?>