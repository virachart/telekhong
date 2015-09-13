<?php
class Manageowner extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			$this->load->library("pagination");
			$config['base_url'] = base_url()."index.php/manageowner/index";
			$config['per_page'] = 10;
			$config['total_rows'] = $this->db->count_all("owner");

			$config['full_tag_open'] = "<div class = 'pagination'>";
			$config['full_tag_close'] = "</div>";
			$this->pagination->initialize($config);

			$sqluser = "Select * from owner";
			$sqluserav = "Select * from owner where status_owner = '1'";
			$sqluserbl = "Select * from owner where status_owner = '2'";
			$sqluserba = "Select * from owner where status_owner = '3'";
			$data['num1'] = $this->db->query($sqluser);
			$data['num2'] = $this->db->query($sqluserav);
			$data['num3'] = $this->db->query($sqluserbl);
			$data['num4'] = $this->db->query($sqluserba);
			$data['rs'] = $this->db->select("*")->from("owner")->join("user","owner.fb_id=user.fb_id")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
			
			$this->load->view("manageowner",$data);
		}else{
			redirect("auth");
		}
	}

	public function del($id){
		$this->db->delete("owner",array("owner_id"=>$id));
		redirect("manageowner","refresh");
		exit();
	}

	public function edit($id){
		if ($this->input->post("btsave")!=null) {
			
			$ownerid = $this->input->post("id");
			$email = $this->input->post("email");
			$tel = $this->input->post("tel");
			$status = $this->input->post("status");
			$sqlupdate = "UPDATE owner SET owner_email ='".$email."', owner_tel ='".$tel."', status_owner ='".$status."' WHERE owner_id = '".$ownerid."'";
			$this->db->query($sqlupdate);
			redirect("manageowner","refresh");
			exit();
		}

		$sql = "Select * from owner where owner_id = '$id'";
		$rs = $this->db->query($sql);
		if ($rs->num_rows()==0) {
			$data['rs'] = array();
		}else{
			$data['rs'] = $rs->row_array();
		}

		$this->load->view("editowner",$data);

	}

	
	public function search(){
		if($this->session->userdata('admin') != null){
			$name = $this->input->post("searchow");
			// echo $name;
			
			if ($name != null) {
				$this->load->library("pagination");
				$config['base_url'] = base_url()."index.php/manageowner";
				$config['per_page'] = 10;
				$sqlnumrow = "select * from owner where owner_email like '%".$name."%'";
				$e = $this->db->query($sqlnumrow);
				$config['total_rows'] = $e->num_rows();
				$config['full_tag_open'] = "<div class = 'pagination'>";
				$config['full_tag_close'] = "</div>";
				$this->pagination->initialize($config);

				$sqluser = "Select * from owner";
				$sqluserav = "Select * from owner where status_owner = '1'";
				$sqluserbl = "Select * from owner where status_owner = '2'";
				$sqluserba = "Select * from owner where status_owner = '3'";
				$data['num1'] = $this->db->query($sqluser);
				$data['num2'] = $this->db->query($sqluserav);
				$data['num3'] = $this->db->query($sqluserbl);
				$data['num4'] = $this->db->query($sqluserba);
				$data['rs'] = $this->db->select("*")->from("owner")->like("owner_email",$name)->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
				
				// echo $this->db->last_query();
				$this->load->view("manageowner",$data);
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