<?php
class Managestoreowner extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				if ($this->session->userdata('storeid') != null) {
					if ($this->session->userdata('statuspack') == "1" ||
						$this->session->userdata('statuspack') == "2" ||
						$this->session->userdata('statuspack') == "3") {
						//start show all store have all owner page
						$ownerid = $this->session->userdata('ownerid');
						$storeid = $this->session->userdata('storeid');
						$sqlallstore = "select * from store where owner_id = '".$ownerid."' and status_store_id != '4' and store_id != '".$storeid."' ";
						$data['allstore'] = $this->db->query($sqlallstore)->result_array();
						//end show all store have all owner page

						$sqlgetstore = "select * from store where store_id = '".$storeid."' ";
						$data['store'] = $this->db->query($sqlgetstore)->row_array();

						$this->load->view("managestoreowner",$data);

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

	public function edit(){
		if ($this->input->post("btsave")!=null) {
			$opti = $this->input->post("opti");
			$clti = $this->input->post("clti");
			$open = $opti." - ".$clti;

			$storeid = $this->session->userdata("storeid");
			$arstore=array(
				"store_name"=>$this->input->post("name"),
				"address"=>$this->input->post("address"),
				"tel"=>$this->input->post("tel"),
				"open_time"=>$open,
				"detail"=>$this->input->post("detail")
			);
			$this->db->where("store_id",$storeid);
			$this->db->update("store",$arstore);

			$config['upload_path'] = 'images/store';
			$config['allowed_types'] = "jpg|gif|png";
			$config['max_size'] = "15360"; // KB
			
			$this->load->library("upload",$config);
			if ($this->upload->do_upload("picture")) { // if upload don't have problem
				$data = $this->upload->data();
				$newname = $data['file_name'];
				$sqlupdate = "UPDATE store SET picture_store ='".$newname."' WHERE store_id = '".$storeid."'";
				$this->db->query($sqlupdate);
			}

			
			redirect("store","refresh");
		}else{
			redirect("store");
		}
	}

}

?>