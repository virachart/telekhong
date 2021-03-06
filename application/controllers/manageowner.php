<?php
class Manageowner extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('admin') != null) {
				$config['base_url'] = base_url()."index.php/manageowner/index";
				$config['per_page'] = 15;
				//count_all(); -> count data in table
				$counttable = $this->db->count_all("owner");
				$config['total_rows'] = $counttable;

				//out side
				$config['full_tag_open'] = "<ul class='pagination'>";
					
				$config['first_tag_open'] = '<li>';
				$config['first_tag_close'] = '</li>';

					$config['last_tag_open'] = '<li>';
					$config['last_tag_close'] = '</li>';

				$config['prev_tag_open'] = '<li>';
				$config['prev_tag_close'] = '</li>';

				//current page
				$config['cur_tag_open'] = "<li class='active'><a>";
				$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
				
				//another page
				$config['num_tag_open'] = "<li>";
				$config['num_tag_close'] = "</li>";

				$config['next_tag_open'] = '<li>';
				$config['next_tag_close'] = '</li>';

				$config['full_tag_close'] = "</ul";

				$this->pagination->initialize($config);


				$sqluser = "Select * from owner";
				$sqluserav = "Select * from owner where status_owner = '1'";
				$sqluserbl = "Select * from owner where status_owner = '2'";
				$sqluserba = "Select * from owner where status_owner = '3'";
				$data['num1'] = $this->db->query($sqluser);
				$data['num2'] = $this->db->query($sqluserav);
				$data['num3'] = $this->db->query($sqluserbl);
				$data['num4'] = $this->db->query($sqluserba);
				$data['rs'] = $this->db->select("*,count(store_id) AS storenum")
								->from("owner")
								->join("user","owner.fb_id=user.fb_id")
								->join("store","owner.owner_id = store.owner_id","left")
								->group_by("owner.owner_id")
								->limit($config['per_page'],end($this->uri->segments))->get()->result_array();
								
				$this->load->view("manageowner",$data);
			}else{
				redirect("store");
			}
		}else{
			redirect('auth');
		}

	}



	public function del($id){
		$this->db->delete("owner",array("owner_id"=>$id));
		redirect("manageowner","refresh");
		exit();
	}

	public function edit(){
			$ownerid = $this->input->post("id");
			$email = $this->input->post("email");
			$tel = $this->input->post("tel");
			$status = $this->input->post("status");
			$sqlupdate = "UPDATE owner SET owner_email ='".$email."', owner_tel ='".$tel."', status_owner ='".$status."' WHERE owner_id = '".$ownerid."'";
			$this->db->query($sqlupdate);
	}

	
	public function search(){
		if($this->session->userdata('admin') != null){
			$name = $this->input->post("searchow");
			// echo $name;
			
			if ($name != null) {
				$find = $this->input->post("selectsearch");

				$sqluser = "Select * from owner";
				$sqluserav = "Select * from owner where status_owner = '1'";
				$sqluserbl = "Select * from owner where status_owner = '2'";
				$sqluserba = "Select * from owner where status_owner = '3'";
				$data['num1'] = $this->db->query($sqluser);
				$data['num2'] = $this->db->query($sqluserav);
				$data['num3'] = $this->db->query($sqluserbl);
				$data['num4'] = $this->db->query($sqluserba);
				if ($find == "owner_name") {
					$data['rs'] = $this->db->select("*,count(store_id) AS storenum")->from("owner")
									->join("user","owner.fb_id=user.fb_id")
									->join("store","owner.owner_id = store.owner_id","left")
									->like("fb_name",$name)
									->group_by("owner.owner_id")
									->get()->result_array();
				}
				if ($find == "owner_email") {
					$data['rs'] = $this->db->select("*,count(store_id) AS storenum")->from("owner")
									->join("user","owner.fb_id=user.fb_id")
									->join("store","owner.owner_id = store.owner_id","left")
									->like("owner_email",$name)
									->group_by("owner.owner_id")
									->get()->result_array();
				}
				if ($find == "owner_tel") {
					$data['rs'] = $this->db->select("*,count(store_id) AS storenum")->from("owner")
									->join("user","owner.fb_id=user.fb_id")
									->join("store","owner.owner_id = store.owner_id","left")
									->like("owner_tel",$name)
									->group_by("owner.owner_id")
									->get()->result_array();
				}
				// echo $this->db->last_query();
				
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