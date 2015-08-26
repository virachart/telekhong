<?php
class manageuser extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			$this->load->library("pagination");
			$config['base_url'] = base_url()."index.php/manageuser/index";
			$config['per_page'] = 10;
			$config['total_rows'] = $this->db->count_all("user");

			$config['full_tag_open'] = "<div class = 'pagination'>";
			$config['full_tag_close'] = "</div>";
			$this->pagination->initialize($config);

			$sqluser = "Select * from user";
			$data['num'] = $this->db->query($sqluser);
			$data['rs'] = $this->db->select("*")->from("user")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
			
			$this->load->view("manageuser",$data);

		}else{
			redirect("auth");
		}
	}


	public function del($id){
		$this->db->delete("user",array("fb_id"=>$id));
		redirect("manageuser","refresh");
		exit();
	}

	public function edit($id){
		if ($this->input->post("btsave")!=null) {
			
			$fbid = $this->input->post("fbid");
			$fbname = $this->input->post("fbname");
			$sex = $this->input->post("sex");
			$sqlupdate = "UPDATE user SET fb_name ='".$fbname."', sex ='".$sex."' WHERE fb_id = '".$fbid."'";
			$this->db->query($sqlupdate);
			redirect("manageuser","refresh");
			exit();
		}

		$sql = "Select * from user where fb_id = '$id'";
		$rs = $this->db->query($sql);
		if ($rs->num_rows()==0) {
			$data['rs'] = array();
		}else{
			$data['rs'] = $rs->row_array();
		}

		$this->load->view("edituser",$data);

	}

	public function search(){
		if ($this->input->post("btsave")!=null) {
			$name = $this->input->post("searchfb");
			// echo $name;
			
			
			if ($name != null) {
				$this->load->library("pagination");
				$config['base_url'] = base_url()."index.php/manageuser";
				$config['per_page'] = 10;
				$sqlnumrow = "select * from user where fb_name like '%".$name."%'";
				$e = $this->db->query($sqlnumrow);
				$config['total_rows'] = $e->num_rows();
				// $confix['row'] = $this->db->select("*")->from("user")->like("fb_name",$name);
				// $config['total_rows'] = $confix['row']->num_rows();

				$config['full_tag_open'] = "<div class = 'pagination'>";
				$config['full_tag_close'] = "</div>";
				$this->pagination->initialize($config);
				$sqluser = "Select * from user";
				$data['num'] = $this->db->query($sqluser);
				$data['rs'] = $this->db->select("*")->from("user")->like("fb_name",$name)->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
				
				// echo $this->db->last_query();
				$this->load->view("manageuser",$data);
				// print_r($data['rs']);
				// // exit();
			}else{
				$this->index();
			}
		}else{
			$this->index();
		}
	}

}

?>