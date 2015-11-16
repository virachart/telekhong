<?php
class Testcon extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		$sqlgetuser = "select * from user where fb_name like '%a%' ";
		$data['user'] = $this->db->query($sqlgetuser)->result_array();

		$data['userrow'] = $this->db->query($sqlgetuser)->row_array();
		$this->load->view("testcon",$data);

	}

	public function addpack(){
		$packname = $this->input->post("name");
		$lim = $this->input->post("limit");
		$des = $this->input->post("des");
		$price = $this->input->post("price");

		$ardata = array('package_name' => $packname ,
						'upload_limit' => $lim ,
						'package_descrip' => $des ,
						'price' => $price );
		$this->db->insert('package', $ardata); 

		// $sqladdpack = "INSERT INTO package (`package_name`, `upload_limit`, `package_descrip`, `price`) VALUES ('".$packname."', '".$lim."', '".$des."', '".$price."') ";
		// $this->db->query($sqladdpack);
		echo $this->db->last_query();

	}

	

}

?>