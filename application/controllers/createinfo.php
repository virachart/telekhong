<?php
class Createinfo extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				if ($this->session->userdata('storeid') != null) {
		// 				start show all store have all owner page
						$ownerid = $this->session->userdata('ownerid');
						$storeid = $this->session->userdata('storeid');
						$sqlallstore = "select * from store where owner_id = '".$ownerid."' and status_store_id != '4' and store_id != '".$storeid."' ";
						$data['allstore'] = $this->db->query($sqlallstore)->result_array();
						//end show all store have all owner page

						$this->load->view("createinfo",$data);

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


	public function create(){
		if ($this->input->post("btsave")!=null) {
			$infoname = $this->input->post("name");
			$desc = $this->input->post("desc");
			$cat = $this->input->post('cat');
			// begin date
			$beda = $this->input->post('beda');
			// expire date 
			$exda = $this->input->post('exda');
			
			$qr = $this->input->post('qr');

			$begindate = $beda;
			$expiredate = $exda;

			$id = $this->session->userdata('storeid');
			// $id = 6;

			$sqlInsert = "INSERT INTO info (`info_name`, `info_descrip`, `info_begin_date`, `info_expire_date`, `catagory`, `store_id`) VALUES ('".$infoname."', '".$desc."', '".$begindate."', '".$expiredate."', '".$cat."', '".$id."');"; 
			$this->db->query($sqlInsert);

			// $sqlStoreid = "select info_id from info where info_name = '".$infoname."' and store_id = '".$id."' "; 
			$sqlInfoid = "select info_id from info where info_name = '".$infoname."' and store_id = '".$id."' "; 
			$rsInfoid = $this->db->query($sqlInfoid);
			$dataInfoid = $rsInfoid->row_array();
			$infoid = $dataInfoid['info_id'];
			// echo $infoid;

			if ($qr != null) {
				$ranqr = random_string('alnum', 15);
				$strqr = strtolower($ranqr);
				$sqlChCode = "SELECT * FROM qr where code ='".$strqr."' ";
				$rsChCode = $this->db->query($sqlChCode);
				while ($rsChCode->num_rows != 0) {
					$ranqr = random_string('alnum', 15);
					$strqr = strtolower($ranqr);
					$sqlChCode = "select * FROM qr where code ='".$strqr."' ";
					$rsChCode = $this->db->query($sqlChCode);
				}
				$sqlInsertQr = "INSERT INTO qr (`code`, `info_id`, `store_id`) VALUES ('".$strqr."', '".$infoid."', '".$id."');"; 
			}

			$sqlGetUp = "select * from store where store_id = '".$id."' ";
			$dataGetUp = $this->db->query($sqlGetUp)->row_array();
			// $dataGetUp = $rsGetUp->row_array();
			$uploadplus = $dataGetUp['upload']+1;
			// echo $uploadplus;

			$sqlUpdateStoreUpload = "update store SET upload ='".$uploadplus."' WHERE store_id = '".$id."'";
			$this->db->query($sqlUpdateStoreUpload);
			
			$image_data = $this->input->post("image-data");
			if ($image_data !=""){
				$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image_data));		
				file_put_contents('images/info/info-'.$infoid.'.jpg', $data);
				$newname = "info-".$infoid.".jpg";
				$sqlupdate = "update info SET info_pic ='".$newname."' WHERE info_id = '".$infoid."'";
				$this->db->query($sqlupdate);
				redirect("store");
			}
			
			
			}else{
				$this->index();
			}
		
		
	
	}
}
?>

<!-- INSERT INTO qr (`code`, `info_id`, `store_id`) VALUES ('ewrtye', '1', '6'); -->



<!-- INSERT INTO info (`info_name`, `info_descrip`, `info_begin_date`, `info_expire_date`, `catagory`, `store_id`) VALUES ('test1', 'testttttttt', '2015-09-04', '2015-09-16', 'healty', '6'); -->