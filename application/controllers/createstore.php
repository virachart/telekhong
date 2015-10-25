<?php
class Createstore extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				$sqlgetpack = "select * from package";
				$data['pack'] = $this->db->query($sqlgetpack)->result_array();
				$data['ch'] = 0;
				$this->load->view("createstore",$data);
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
			// $id = '5';
			$opentime = $opti." - ".$clti;

			$secode = null;
			if ($pack == 3) {
				$secode = random_string('alnum', 10);
				$secode = strtolower($ranqr);
				$sqlChCode = "SELECT * FROM store where se_key ='".$secode."' ";
				$rsChCode = $this->db->query($sqlChCode);
				while ($rsChCode->num_rows != 0) {
					$secode = random_string('alnum', 10);
					$secode = strtolower($ranqr);
					$sqlChCode = "select * FROM store where se_key ='".$secode."' ";
					$rsChCode = $this->db->query($sqlChCode);
				}
			}

			$sqlInsert = "INSERT INTO store (`store_name`, `detail`, `address`, `tel`, `open_time`, `se_key` ,`package_id`, `owner_id`) VALUES ('".$stname."', '".$detail."', '".$address."', '".$tel."', '".$opentime."', '".$secode."' , '".$pack."', '".$id."');";
			$this->db->query($sqlInsert);
			// echo $this->db->last_query();

			$sqlStoreid = "select store_id from store where store_name = '".$stname."' and owner_id = '".$id."' ";
			$rsStoreid = $this->db->query($sqlStoreid);
			$dataStoreid = $rsStoreid->row_array();
			$storeid = $dataStoreid['store_id'];
			// echo $this->db->last_query();
			// echo $storeid;
			$image_data = $this->input->post("image-data");
			if ($image_data !=""){
				$dataimg = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image_data));		
				file_put_contents('images/store/store-'.$storeid.'.jpg', $dataimg);
				$newname = "store-".$storeid.".jpg";
				$sqlupdate = "UPDATE store SET picture_store ='".$newname."' WHERE store_id = '".$storeid."'";
				$this->db->query($sqlupdate);

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