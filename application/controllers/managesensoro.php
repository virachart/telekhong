<?php
class Managesensoro extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('admin') != null){
			$this->load->library("pagination");
			$config['base_url'] = base_url()."index.php/managesensoro";
			$config['per_page'] = 10;
			$config['total_rows'] = $this->db->count_all("sensoro");

			$config['full_tag_open'] = "<div class = 'pagination'>";
			$config['full_tag_close'] = "</div>";
			$this->pagination->initialize($config);

			$sqluser = "Select * from sensoro";
			$sqluserav = "Select * from sensoro where status_sensoro_id = '1'";
			$sqluserbl = "Select * from sensoro where status_sensoro_id = '2'";
			$sqluserba = "Select * from sensoro where status_sensoro_id = '3'";
			$sqluserty1 = "Select * from sensoro where sensoro_type = '1'";
			$sqluserty2 = "Select * from sensoro where sensoro_type = '2'";
			$data['num1'] = $this->db->query($sqluser);
			$data['num2'] = $this->db->query($sqluserav);
			$data['num3'] = $this->db->query($sqluserbl);
			$data['num4'] = $this->db->query($sqluserba);
			$data['num5'] = $this->db->query($sqluserty1);
			$data['num6'] = $this->db->query($sqluserty2);
			$data['rs'] = $this->db->select("*")->from("sensoro a")->join("store b","a.store_id = b.store_id")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
			
			$this->load->view("managesensoro",$data);
		}elseif ($this->session->userdata('id') != null) {
			redirect("dashboardowner");
		}else{
			redirect("auth");
		}
	}

	public function del($id){
		$this->db->delete("store",array("store_id"=>$id));
		redirect("managestore","refresh");
		exit();
	}

	public function edit($id){
		if ($this->input->post("btsave")!=null) {
			
			$storeid = $this->input->post("id");
			$name = $this->input->post("name");
			$detail = $this->input->post("detail");
			$address = $this->input->post("address");
			$tel = $this->input->post("tel");
			$open = $this->input->post("open");
			$status = $this->input->post("status");
			$sqlupdate = "UPDATE store SET store_name ='".$name."', detail ='".$detail."', address ='".$address."' , tel ='".$tel."' , open_time ='".$open."' , status_store_id ='".$status."' WHERE store_id = '".$storeid."'";
			$this->db->query($sqlupdate);
			redirect("managestore","refresh");
			exit();
		}

		$sql = "Select * from store where store_id = '$id'";
		$rs = $this->db->query($sql);
		if ($rs->num_rows()==0) {
			$data['rs'] = array();
		}else{
			$data['rs'] = $rs->row_array();
		}

		$this->load->view("editstore",$data);

	}


	public function search(){
		if($this->session->userdata('admin') != null){
			$name = $this->input->post("searchst");
			// echo $name;
			
			if ($name != null) {
				$this->load->library("pagination");
				$config['base_url'] = base_url()."index.php/managestore";
				$config['per_page'] = 10;
				$sqlnumrow = "select * from store where store_name like '%".$name."%'";
				$e = $this->db->query($sqlnumrow);
				$config['total_rows'] = $e->num_rows();
				$config['full_tag_open'] = "<div class = 'pagination'>";
				$config['full_tag_close'] = "</div>";
				$this->pagination->initialize($config);

				$sqluser = "Select * from store";
				$sqluserav = "Select * from store where status_store_id = '1'";
				$sqluserbl = "Select * from store where status_store_id = '2'";
				$sqluserba = "Select * from store where status_store_id = '3'";
				$data['num1'] = $this->db->query($sqluser);
				$data['num2'] = $this->db->query($sqluserav);
				$data['num3'] = $this->db->query($sqluserbl);
				$data['num4'] = $this->db->query($sqluserba);
				$data['rs'] = $this->db->select("*")->from("store")->like("store_name",$name)->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
				
				// echo $this->db->last_query();
				$this->load->view("managestore",$data);
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