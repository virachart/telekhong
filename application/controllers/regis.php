<?php
class Regis extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		$this->load->view("regis");

	}

	public function add(){
		// $data = $this->input->post();
		
		 if ($this->input->post("bttsave")!=NULL) {
			$email = $this->input->post("email");
			$tel = $this->input->post("tel");
			$id = $this->session->userdata('id');
			$sql = "INSERT INTO `telekhong`.`owner` (`owner_email`, `owner_tel`, `fb_id`) VALUES ('".$email."', '".$tel."', '".$id."');";
			$this->db->query($sql);
		// 	// $email = $this->input->post("email");
		// 	// $tel = $this->input->post("tel");
		// 	// $id = $this->session->userdata($me['id']);
			
		// 	// $this->db->set("owner_email",$email);
		// 	// $this->db->set("owner_tel",$tel);
		// 	// $this->db->set("user_fb_id",$id);
			// $this->db->insert("owner",$arr);
			
			redirect("dashboardowner","refresh");
			
		 }
		$this->load->view("auth");

	}

}

?>