<?php
class Manageuser extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('admin') != null){
			/*
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
			*/
			//pagination
			$config['base_url'] = base_url()."index.php/manageuser/index";
			$config['per_page'] = 10;
			//count_all(); -> count data in table
			$counttable = $this->db->count_all("user");
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


			$sqluser = "Select * from user";
			$data['num'] = $this->db->query($sqluser);
			$data['rs'] = $this->db->select("*")
							->from("user")
							->limit($config['per_page'],end($this->uri->segments))->get()->result_array();

			$this->load->view("manageuser",$data);


		}else{
			redirect("auth");
		}
	}


	public function del($id){
		$this->db->delete("user",array("fb_id"=>$id));
		redirect("manageuser","refresh");
	}

	public function edit(){
			$fbid = $this->input->post("fbid");
			$fbname = $this->input->post("fbname");
			$sex = $this->input->post("sex");
			$sqlupdate = "UPDATE user SET fb_name ='".$fbname."', sex ='".$sex."' WHERE fb_id = '".$fbid."'";
			$this->db->query($sqlupdate);
			
	}

	public function search(){
		if ($this->input->post("btsave")!=null) {
			$name = $this->input->post("searchfb");
			// echo $name;
			
			
			if ($name != null) {
				$find = $this->input->post("selectsearch");
				
				$sqluser = "Select * from user";
				$data['num'] = $this->db->query($sqluser);
				
				if ($find == "fb_id") {
					$data['rs'] = $this->db->select("*")
									->from("user")
									->like("fb_id",$name)
									->get()->result_array();
				}
				if ($find == "fb_name") {
					$data['rs'] = $this->db->select("*")
									->from("user")
									->like("fb_name",$name)
									->get()->result_array();
				}
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