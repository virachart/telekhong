<?php
class Manageqrowner extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				if ($this->session->userdata('storeid') != null) {
					if ($this->session->userdata('statuspack') == "3") {
						//start show all store have all owner page
						$ownerid = $this->session->userdata('ownerid');
						$storeid = $this->session->userdata('storeid');
						$sqlallstore = "select * from store where owner_id = '".$ownerid."' and status_store_id != '4' and store_id != '".$storeid."' ";
						$data['allstore'] = $this->db->query($sqlallstore)->result_array();
						//end show all store have all owner page

						$sqluser = "Select * from qr";
						$data['num1'] = $this->db->query($sqluser);
						$data['rs'] = $this->db->select("*")->from("qr a")->join("info b","a.info_id = b.info_id")->join("store c","a.store_id = c.store_id")->where('a.store_id',$storeid)->get()->result_array();
						$this->load->view("manageqrowner",$data);
					}else{
						redirect('store');
					}
				}else{
					redirect('store');
				}
			}else{
				redirect('regis');
			}
		}else{
			redirect('auth');
		}


		
	}

	public function del($id){
		$this->db->delete("qr",array("qr_id"=>$id));
		redirect("manageqrowner","refresh");
		exit();
	}


	public function search(){
		if ($this->input->post("btsave")!=null) {
			$name = $this->input->post("searchqr");
			// echo $name;

			
			if ($name != null) {
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
				$data['rs'] = $this->db->select("*")->from("qr a")->join("info b","a.info_id = b.info_id")->join("store c","a.store_id = c.store_id")->like("store_name",$name)->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
				
				// echo $this->db->last_query();
				$this->load->view("manageqrowner",$data);
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