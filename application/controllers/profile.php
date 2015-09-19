<?php
class Profile extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null ) {
			if ($this->session->userdata('ownerid') != null ) {
				$ownerid = $this->session->userdata('ownerid');
				$sqlgetdata = "select * from owner join user on owner.fb_id = user.fb_id where owner_id = '".$ownerid."' ";
				$data['getuser'] = $this->db->query($sqlgetdata)->row_array();
				$this->load->view("profile",$data);
			}else{
				redirect("auth");
			}
		}else{
			redirect("auth");
		}
	}

	public function edit($id){
		if ($this->input->post("btsave")!=null) {
			$aruser=array(
				"fb_name"=>$this->input->post("name"),
				"birth"=>$this->input->post("birth"),
				"sex"=>$this->input->post("sex")
			);
			$this->db->where("fb_id",$id);
			$this->db->update("user",$aruser);

			$ownerid = $this->session->userdata('ownerid');
			$arowner = array(
				"owner_tel"=>$this->input->post("tel"),
				"owner_email"=>$this->input->post("email")
			);
			$this->db->where("owner_id",$ownerid);
			$this->db->update("owner",$arowner);
			redirect("profile","refresh");
		}else{
			redirect("store");
		}
	}

}

?>