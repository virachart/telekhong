<?php
class Managestore extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('admin') != null) {
				$config['base_url'] = base_url()."index.php/managestore/index";
				$config['per_page'] = 10;
				//count_all(); -> count data in table
				$counttable = $this->db->count_all("store");
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


				$sqluser = "Select * from store";
				$sqluserav = "Select * from store where status_store_id = '1'";
				$sqluserbl = "Select * from store where status_store_id = '2'";
				$sqluserba = "Select * from store where status_store_id = '3'";
				$data['num1'] = $this->db->query($sqluser);
				$data['num2'] = $this->db->query($sqluserav);
				$data['num3'] = $this->db->query($sqluserbl);
				$data['num4'] = $this->db->query($sqluserba);
				$data['rs'] = $this->db->select("*,count(sensoro_id) AS sennum")
								->from("store")
								->join("owner","store.owner_id=owner.owner_id")
								->join("user","owner.fb_id=user.fb_id")
								->join("package","store.package_id = package.package_id")
								->join("sensoro","store.store_id = sensoro.store_id","left")
								->group_by("sensoro.store_id")
								->limit($config['per_page'],end($this->uri->segments))->get()->result_array();
								
				$this->load->view("managestore",$data);
			}else{
				redirect("store");
			}
		}else{
			redirect('auth');
		}

	}

	public function del($id){
		$data = array('status_store_id' => "4");
		$this->db->where('store_id', $id);
		$this->db->update('mytable', $data); 
		redirect("managestore","refresh");
	}

	public function edit(){
			
		$storeid = $this->input->post("id");
		$name = $this->input->post("name");
		$detail = $this->input->post("detail");
		$address = $this->input->post("address");
		$tel = $this->input->post("tel");
		$open = $this->input->post("open");
		$status = $this->input->post("status");
		$sqlupdate = "UPDATE store SET store_name ='".$name."', detail ='".$detail."', address ='".$address."' , tel ='".$tel."' , open_time ='".$open."' , status_store_id ='".$status."' WHERE store_id = '".$storeid."'";
		$this->db->query($sqlupdate);

	}


	public function search(){
		if($this->session->userdata('admin') != null){
			$name = $this->input->post("searchst");
			// echo $name;
			
			if ($name != null) {
				$find = $this->input->post("selectsearch");
				

				$sqluser = "Select * from store";
				$sqluserav = "Select * from store where status_store_id = '1'";
				$sqluserbl = "Select * from store where status_store_id = '2'";
				$sqluserba = "Select * from store where status_store_id = '3'";
				$data['num1'] = $this->db->query($sqluser);
				$data['num2'] = $this->db->query($sqluserav);
				$data['num3'] = $this->db->query($sqluserbl);
				$data['num4'] = $this->db->query($sqluserba);
				

				if ($find == "owner_name") {
					$data['rs'] = $this->db->select("*,count(sensoro_id) AS sennum")
								->from("store")
								->join("owner","store.owner_id=owner.owner_id")
								->join("user","owner.fb_id=user.fb_id")
								->join("package","store.package_id = package.package_id")
								->join("sensoro","store.store_id = sensoro.store_id","left")
								->like("fb_name",$name)
								->group_by("store.store_id")
								->get()->result_array();
				}
				if ($find == "store_name") {
					$data['rs'] = $this->db->select("*,count(sensoro_id) AS sennum")
								->from("store")
								->join("owner","store.owner_id=owner.owner_id")
								->join("user","owner.fb_id=user.fb_id")
								->join("package","store.package_id = package.package_id")
								->join("sensoro","store.store_id = sensoro.store_id","left")
								->like("store_name",$name)
								->group_by("store.store_id")
								->get()->result_array();
				}
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

	public function searchstore($ownerid){

		$sqluser = "Select * from store";
		$sqluserav = "Select * from store where status_store_id = '1'";
		$sqluserbl = "Select * from store where status_store_id = '2'";
		$sqluserba = "Select * from store where status_store_id = '3'";
		$data['num1'] = $this->db->query($sqluser);
		$data['num2'] = $this->db->query($sqluserav);
		$data['num3'] = $this->db->query($sqluserbl);
		$data['num4'] = $this->db->query($sqluserba);
		

		
		$data['rs'] = $this->db->select("*,count(sensoro_id) AS sennum")
					->from("store")
					->join("owner","store.owner_id=owner.owner_id")
					->join("user","owner.fb_id=user.fb_id")
					->join("package","store.package_id = package.package_id")
					->join("sensoro","store.store_id = sensoro.store_id","left")
					->where("store.owner_id",$ownerid)
					->group_by("sensoro.store_id")
					->get()->result_array();
		
		$this->load->view("managestore",$data);
			
	}

}

?>