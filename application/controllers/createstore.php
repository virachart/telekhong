<?php
class Createstore extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				$this->load->view("createstore","refresh");
			}else{
				redirect('regis');
			}
		}else{
			redirect('auth');
		}


	}

	public function create(){
		if ($this->input->post("btsave")!=null) {
			$this->session->unset_userdata('storeid');
			$stname = $this->input->post("storename");
			$address = $this->input->post("address");
			$tel = $this->input->post('tel');
			$opti = $this->input->post('opti');
			$clti = $this->input->post('clti');
			$detail = $this->input->post('detail');
			$pack = $this->input->post('pack');
			$id = $this->session->userdata('ownerid');
			$opentime = $opti." - ".$clti;
			$sqlInsert = "INSERT INTO store (`store_name`, `detail`, `address`, `tel`, `open_time`, `package_id`, `owner_id`) VALUES ('".$stname."', '".$detail."', '".$address."', '".$tel."', '".$opentime."', '".$pack."', '".$id."');";
			$this->db->query($sqlInsert);
			// echo $this->db->last_query();

			$sqlStoreid = "select store_id from store where store_name = '".$stname."' and owner_id = '".$id."' ";
			$rsStoreid = $this->db->query($sqlStoreid);
			$dataStoreid = $rsStoreid->row_array();
			$storeid = $dataStoreid['store_id'];
			// echo $this->db->last_query();
			// echo $storeid;

			$config['upload_path'] = 'images/store';
			$config['allowed_types'] = "jpg|gif|png";
			$config['max_size'] = "15360"; // KB
			
			$this->load->library("upload",$config);
			// print_r($config);
				// echo "testtt";
			if ($this->upload->do_upload("picture")) { // if upload don't have problem
				$data = $this->upload->data();
				
				// $newname = $storeid.$data['file_ext'];
				$newname = $data['file_name'];
				// rename($data['full_path'], $newname);
				$sqlupdate = "UPDATE store SET picture_store ='".$newname."' WHERE store_id = '".$storeid."'";
				$this->db->query($sqlupdate);
				// echo "testtt";
				// echo $this->db->last_query();

				$sqlgetst = "select * from store join package on store.package_id = package.package_id where store_id = '".$storeid."' ";
				$data['storedetail'] = $this->db->query($sqlgetst)->row_array();
				$arstoreid = array('storeid' => $storeid );
				$this->session->set_userdata($arstoreid);
				$this->load->view("selectpayment",$data);
			}else{
				$this->index();
			}	
		}else{
			$this->index();
		}	
	}




}

?>