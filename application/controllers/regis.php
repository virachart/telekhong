<?php
class Regis extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null) {
			$id = $this->session->userdata('id');
			$sqlchowner = "Select * from owner where fb_id = '".$id."' ";
			$rschowner = $this->db->query($sqlchowner)->row_array();
			if ($rschowner != null) {
				$this->session->set_userdata("ownerid",$rschowner['owner_id']);
				redirect("store");
			}else{
				$this->load->view("regis");
			}
		}else{
			redirect("auth");
		}
		

	}

	public function add(){
		// $data = $this->input->post();
		
		 if ($this->input->post("bttsave")!=NULL) {
			$email = $this->input->post("email");
			$tel = $this->input->post("tel");
			$id = $this->session->userdata('id');
			$name = $this->input->post("name");
			$birth = $this->input->post("birthdate");
			$sex = $this->input->post("sex");

			$aruser = array('fb_name' => $name,
							'sex' => $sex,
							'birth' => $birth
							);
			$this->db->where('fb_id', $id);
			$this->db->update('user', $aruser); 

			$sql = "INSERT INTO `telekhong`.`owner` (`owner_email`, `owner_tel`, `fb_id`) VALUES ('".$email."', '".$tel."', '".$id."');";
			$this->db->query($sql);
			$sqlOwner = "Select * from owner where fb_id = ".$id;
			$rs2 = $this->db->query($sqlOwner);
			$dataOwner = $rs2->row_array();
			$ownerid = array('ownerid' => $dataOwner['owner_id']);
			$this->session->set_userdata($ownerid);

			
			redirect("createstore");
			
		 }
		$this->index();

	}

}

?>