<?php
class Testdate extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){

		
		$artest = array('aa' => "123");
		$second_array = array('name3'=>'value3'); 
        $artest = array_merge($artest, $second_array);

		// echo "<pre>";
		// print_r($artest);
		// echo "</pre>";
		echo $artest['name3'];
		$arrayName = array('info_id != ' => '1');
		$this->db->select("*")->from("info")->where($arrayName)->limit(10)->get()->result_array();
		// echo $this->db->last_query();

		$this->load->view("testdate");

					
	}

	public function test(){
		$da = $this->input->post("datepick");
		echo $da;
	}

	public function test2(){
		$artt = array();
		$artt = array("test");
		print_r($artt);
	}
}
?>