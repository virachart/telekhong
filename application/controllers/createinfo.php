<?php
class Createinfo extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			if($this->session->userdata('storeid') != null){
				$this->load->view("createinfo");
			}else{
				redirect("storeowner");
			}
		}else{
			redirect("auth");
		}
	}


	public function create(){
		if ($this->input->post("btsave")!=null) {
			$infoname = $this->input->post("name");
			$desc = $this->input->post("desc");
			$cat = $this->input->post('cat');
			// begin date
			$beda = $this->input->post('beda');
			$bemo = $this->input->post('bemo');
			$beye = $this->input->post('beye');
			// expire date 
			$exda = $this->input->post('exda');
			$exmo = $this->input->post('exmo');
			$exye = $this->input->post('exye');
			
			$qr = $this->input->post('qr');

			$begindate = $beye."-".$bemo."-".$beda;
			$expiredate = $exye."-".$exmo."-".$exda;

			$id = $this->session->userdata('storeid');

			$sqlInsert = "INSERT INTO info (`info_name`, `info_descrip`, `info_begin_date`, `info_expire_date`, `catagory`, `store_id`) VALUES ('".$infoname."', '".$desc."', '".$begindate."', '".$expiredate."', '".$cat."', '".$id."');"; 
			$this->db->query($sqlInsert);

			// $sqlStoreid = "select info_id from info where info_name = '".$infoname."' and store_id = '".$id."' "; 
			$sqlInfoid = "select info_id from info where info_name = '".$infoname."' and store_id = '".$id."' "; 
			$rsInfoid = $this->db->query($sqlInfoid);
			$dataInfoid = $rsInfoid->row_array();
			$infoid = $dataInfoid['info_id'];

			if ($qr != null) {
				$ranqr = random_string('alnum', 15);
				$strqr = strtolower($ranqr);
				$sqlChCode = "SELECT * FROM qr where code ='".$strqr."' ";
				$rsChCode = $this->db->query($sqlChCode);
				while ($rsChCode->num_rows != 0) {
					$ranqr = random_string('alnum', 15);
					$strqr = strtolower($ranqr);
					$sqlChCode = "SELECT * FROM qr where code ='".$strqr."' ";
					$rsChCode = $this->db->query($sqlChCode);
				}
				$sqlInsertQr = "INSERT INTO qr (`code`, `info_id`, `store_id`) VALUES ('".$strqr."', '".$infoid."', '".$id."');"; 
			}

			$sqlGetUp = "SELECT upload from store where store_id = '".$id."' ";
			$rsGetUp = $this->db->query($sqlGetUp);
			$dataGetUp = $rsGetUp->row_array();
			$uploadplus = $dataGetUp['upload']+1;

			$sqlUpdateStoreUpload = "UPDATE store SET upload ='".$uploadplus."' WHERE store_id = '".$id."'";

			$config['upload_path'] = "images/";
			$config['allowed_types'] = "jpg|gif|png";
			$this->load->library("upload",$config);
			if ($this->upload->do_upload("picture")) { // if upload don't have problem
				$data = $this->upload->data();
				$newname = $infoid.$data['file_ext'];
				rename($data['full_path'], $newname);
				$sqlupdate = "UPDATE info SET info_pic ='".$newname."' WHERE info_id = '".$infoid."'";
				$this->db->query($sqlupdate);
				// $this->session->unset_userdata('storeid');
				redirect("store");
			}else{
				$this->index();
			}
		
		}
	
	}
}
?>

<!-- INSERT INTO qr (`code`, `info_id`, `store_id`) VALUES ('ewrtye', '1', '6'); -->



<!-- INSERT INTO info (`info_name`, `info_descrip`, `info_begin_date`, `info_expire_date`, `catagory`, `store_id`) VALUES ('test1', 'testttttttt', '2015-09-04', '2015-09-16', 'healty', '6'); -->