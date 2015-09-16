<?php
class Manageqr extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			$this->load->library("pagination");
			$config['base_url'] = base_url()."index.php/manageqr";
			$config['per_page'] = 10;
			$config['total_rows'] = $this->db->count_all("qr");

			$config['full_tag_open'] = "<div class = 'pagination'>";
			$config['full_tag_close'] = "</div>";
			$this->pagination->initialize($config);

			$sqluser = "Select * from qr";
			$data['num1'] = $this->db->query($sqluser);
			$data['rs'] = $this->db->select("*")->from("qr a")->join("info b","a.info_id = b.info_id")->join("store c","a.store_id = c.store_id")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
			
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
		$this->db->delete("qr",array("qr_id"=>$id));
		redirect("manageqr","refresh");
		exit();
	}


	public function search(){
		if($this->session->userdata('admin') != null){
			$name = $this->input->post("searchqr");
			// echo $name;

			
			if ($name != null) {
				$find = $this->input->post("selectsearch");
				$this->load->library("pagination");
				$config['base_url'] = base_url()."index.php/manageqr";
				$config['per_page'] = 10;
				$sqlnumrow = "SELECT * FROM (qr INNER JOIN info ON qr.info_id = info.info_id) INNER JOIN store ON qr.store_id = store.store_id where store_name like '%".$name."%'";
				$e = $this->db->query($sqlnumrow);
				$config['total_rows'] = $e->num_rows();
				$config['full_tag_open'] = "<div class = 'pagination'>";
				$config['full_tag_close'] = "</div>";
				$this->pagination->initialize($config);
				$sqlqr = "Select * from qr";
				$data['num1'] = $this->db->query($sqlqr);
			
				if ($find == "store_name") {
					$data['rs'] = $this->db->select("*")->from("qr a")->join("info b","a.info_id = b.info_id")->join("store c","a.store_id = c.store_id")->like("store_name",$name)->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
				}
				if ($find == "info_name") {
					$data['rs'] = $this->db->select("*")->from("qr a")->join("info b","a.info_id = b.info_id")->join("store c","a.store_id = c.store_id")->like("info_name",$name)->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
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