<?php
class Manageqr extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			// $this->load->library("pagination");
			// $config['base_url'] = base_url()."index.php/manageqr/index";
			// $config['per_page'] = 5;
			// $config['total_rows'] = $this->db->count_all("qr");

			// $config['full_tag_open'] = "<div class = 'pagination'>";
			// $config['full_tag_close'] = "</div>";
			// $this->pagination->initialize($config);

			$config['base_url'] = base_url()."index.php/manageqr/index";
			$config['per_page'] = 5;
			//count_all(); -> count data in table
			$counttable = $this->db->count_all("qr");
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

			$sqluser = "Select * from qr where status_qr_id = '1'";
			$data['num1'] = $this->db->query($sqluser);
			$data['rs'] = $this->db->select("*")->from("qr a")->join("info b","a.info_id = b.info_id")->join("store c","a.store_id = c.store_id")->where("status_qr_id !=","2")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
			
// 			SELECT *
// FROM (qr INNER JOIN info ON qr.info_id = info.info_id) 
// INNER JOIN store ON qr.store_id = store.store_id;

			// var_dump($data['rs']);
			// echo "<br>";
			// echo "<pre>";
			// print_r($data['rs']);
			// echo "</pre>";
			$this->load->view("manageqr",$data);
		}else{
			redirect("auth");
		}
	}

	public function del($id){
		$dataupdate = array('status_qr_id' => "2");
		$this->db->where('qr_id', $id);
		$this->db->update('qr', $dataupdate);
		redirect("manageqr","refresh");
	}


	public function search(){
		if($this->session->userdata('admin') != null){
			$name = $this->input->post("searchqr");
			// echo $name;

			
			if ($name != null) {
				$find = $this->input->post("selectsearch");
				
				$sqlqr = "Select * from qr";
				$data['num1'] = $this->db->query($sqlqr);
			
				if ($find == "store_name") {
					$data['rs'] = $this->db->select("*")->from("qr a")->join("info b","a.info_id = b.info_id")->join("store c","a.store_id = c.store_id")->where("status_qr_id !=","2")->like("store_name",$name)->get()->result_array();
				}
				if ($find == "info_name") {
					$data['rs'] = $this->db->select("*")->from("qr a")->join("info b","a.info_id = b.info_id")->join("store c","a.store_id = c.store_id")->where("status_qr_id !=","2")->like("info_name",$name)->get()->result_array();
				}
				// echo $this->db->last_query();
				$this->load->view("manageqr",$data);
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