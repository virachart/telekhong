<?php
class Package extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('admin') != null){
			$data['rs'] = $this->db->select("*")->from("package")->get()->result_array();
			// echo $this->db->last_query();
			// var_dump($data);
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// print_r($data['rs']);
			$this->load->view("package.php",$data);

		}else{
			redirect("auth");
		}
	}

	public function del($id){
		$this->db->delete("package",array("package_id"=>$id));
		redirect("package","refresh");
		exit();
	}

	public function add()
	{
		if ($this->input->post("btsave")!=null) {
			$name = $this->input->post("name");
			$desc = $this->input->post("desc");
			$upload = $this->input->post('upload');
			$price = $this->input->post('price');
			$sql = "INSERT INTO `telekhong`.`package` (`package_name`, `upload_limit`, `package_descrip`, `price`) VALUES ('".$name."', '".$upload."', '".$desc."', '".$price."')";
			$this->db->query($sql);
			redirect("package","refresh");
		}
		$this->index();
		
	}

}

?>