<?php
class Createstore extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			$this->load->view("createstore");
		}else{
			redirect("auth");
		}
	}

	public function create(){
		if ($this->input->post("btsave")!=null) {
			$stname = $this->input->post("storename");
			$address = $this->input->post("address");
			$tel = $this->input->post('tel');
			$opho = $this->input->post('opho');
			$opmi = $this->input->post('opmi');
			$clho = $this->input->post('clho');
			$clmi = $this->input->post('clmi');
			$opentime = $opho.".".$opmi." - ".$clho.".".$clmi;
			$detail = $this->input->post('detail');
			$pack = $this->input->post('pack');
			$id = $this->session->userdata('ownerid');
			$sqlInsert = "INSERT INTO store (`store_name`, `detail`, `address`, `tel`, `open_time`, `package_id`, `owner_id`) VALUES ('".$stname."', '".$detail."', '".$address."', '".$tel."', '".$opentime."', '".$pack."', '".$id."');";
			$this->db->query($sqlInsert);

			$sqlStoreid = "select store_id from store where store_name = '".$stname."' and owner_id = '".$id."' ";
			$rsStoreid = $this->db->query($sqlStoreid);
			$dataStoreid = $rsStoreid->row_array();
			$storeid = $dataStoreid['store_id'];

			$config['upload_path'] = "images/";
			$config['allowed_types'] = "jpg|gif|png";
			$config['max_size'] = "15360"; // KB
			$this->load->library("upload",$config);
			if ($this->upload->do_upload("picture")) { // if upload don't have problem
				$data = $this->upload->data();
				$newname = $id.$data['file_ext'];
				rename($data['full_path'], $newname);
				$sqlupdate = "UPDATE store SET picture_store ='".$newname."' WHERE store_id = '".$storeid."'";
				$this->db->query($sqlupdate);
				redirect("storeowner");
			}else{
				$this->index();
			}	
		}else{
		$this->index();
		}	
	}




}

?>