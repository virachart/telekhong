<?php
class Store extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		
		if($this->session->userdata('id') != null){
			if ($this->session->userdata('ownerid') != null) {
				$ownerid = $this->session->userdata('ownerid');
				// $ownerid = 5;
				// $sqlfindstore = "select MIN(store_id) AS store_id from store where status_store_id = '1' and owner_id = '".$ownerid."' ";
				$sqlchstore = "select * from store where owner_id = '".$ownerid."' ";
				$rsfindstore = $this->db->query($sqlchstore)->result_array();

				$numcheck = 0;
				if ($rsfindstore == null) {
					redirect("createstore");
				}else{
					foreach ($rsfindstore as $r) {
						if ($r['status_store_id'] != 1 && $numcheck != 0) {
							$numcheck = 10;
						}else{
							$numcheck = 11;
						}
					}

				}

				// get min store id
				$sqlfindminstore = "select MIN(store_id) AS store_id from store where status_store_id = '1' and owner_id = '".$ownerid."' ";
				$rsfindstore = $this->db->query($sqlfindminstore)->row_array();
				
				if ($rsfindstore == null) {
					redirect("createstore");
				}else{
					$pay = 0;

					$storeid = $rsfindstore['store_id'];

					//get store and package info
					$sqlgetstore = "select * from store join package on store.package_id = package.package_id where store_id = '".$storeid."' ";
					$rsstorepay = $this->db->query($sqlgetstore)->row_array();
					$data['rs'] = $this->db->query($sqlgetstore)->row_array();

					if ($rsstorepay['expire_date'] != null) {
						$pay = 1;
					}
					
					//get store id set in session
					$arstoreid = array('storeid' => $storeid );
					$this->session->set_userdata($arstoreid);

					//show all store
					$sqlallstore = "select * from store where owner_id = '".$ownerid."' and status_store_id != '4' and store_id != '".$storeid."' ";
					$data['allstore'] = $this->db->query($sqlallstore)->result_array();

					//show info log
					$sqlgetinfo = "select * from info where store_id = '".$storeid."' order by info_date DESC ";
					$data['info'] = $this->db->query($sqlgetinfo)->result_array();

					if ($numcheck == 10) {
						$this->session->set_userdata("statuspack", "5");
					}elseif ($pay == 0) {
						$sqlgetst = "select * from store join package on store.package_id = package.package_id where store_id = '".$storeid."' ";
						$data['storedetail'] = $this->db->query($sqlgetst)->row_array();
						$this->load->view("selectpayment",$data);
					}elseif ($rsstorepay['package_id'] == 1) {
						$this->session->set_userdata("statuspack", "1");
					}elseif ($rsstorepay['package_id'] == 2) {
						$this->session->set_userdata("statuspack", "2");
					}elseif ($rsstorepay['package_id'] == 3) {
						$this->session->set_userdata("statuspack", "3");
					}
					$follow = $this->db->select("*")
										->from("follow")
										->join("sensoro","follow.sensoro_id = sensoro.sensoro_id")
										->join("store","sensoro.store_id = store.store_id")
										->where('sensoro.store_id',$storeid)->get()->result_array();
					$sqlfollow = "select * from follow join sensoro on follow.sensoro_id = sensoro.sensoro_id where sensoro.store_id = '".$storeid."' ";
					$data['follow'] = $this->db->query($sqlfollow);
					
					// echo "<pre>";
					// print_r($follow);
					// echo "</pre>";

					$this->load->view("store",$data);
				}
			
			}else{
				// login but don't have owner id
				redirect("regis");
			}
			
		}else{
			redirect("auth");
		}

	}

	public function selectst($id){
		$this->session->unset_userdata('statuspack');
		$this->session->unset_userdata('storeid');
		$ownerid = $this->session->userdata('ownerid');

		$pay = 0;

		$storeid = $id;

		//get store and package info
		$sqlgetstore = "select * from store join package on store.package_id = package.package_id where store_id = '".$storeid."' ";
		$rsstorepay = $this->db->query($sqlgetstore)->row_array();
		$data['rs'] = $this->db->query($sqlgetstore)->row_array();

		if ($rsstorepay['expire_date'] != null) {
			$pay = 1;
		}
		
		//get store id set in session
		$arstoreid = array('storeid' => $storeid );
		$this->session->set_userdata($arstoreid);

		//show all store
		$sqlallstore = "select * from store where owner_id = '".$ownerid."' and status_store_id != '4' and store_id != '".$storeid."' ";
		$data['allstore'] = $this->db->query($sqlallstore)->result_array();

		//show info log
		$sqlgetinfo = "select * from info where store_id = '".$storeid."' ";
		$data['info'] = $this->db->query($sqlgetinfo)->result_array();

		if ($pay == 0) {
			$sqlgetst = "select * from store join package on store.package_id = package.package_id where store_id = '".$storeid."' ";
			$data['storedetail'] = $this->db->query($sqlgetst)->row_array();
			$this->load->view("selectpayment",$data);
		}elseif ($rsstorepay['package_id'] == 1) {
			$this->session->set_userdata("statuspack", "1");
		}elseif ($rsstorepay['package_id'] == 2) {
			$this->session->set_userdata("statuspack", "2");
		}elseif ($rsstorepay['package_id'] == 3) {
			$this->session->set_userdata("statuspack", "3");
		}

		$sqlfollow = "select * from follow join sensoro on follow.sensoro_id = sensoro.sensoro_id where sensoro.store_id = '".$storeid."' ";
					$data['follow'] = $this->db->query($sqlfollow);

		$this->load->view("store",$data);
				



		// $ownerid = 5;
		// $this->session->unset_userdata('storeid');
		// $sqlchoosestore = "select * from store join package on store.package_id = package.package_id
		// 	 where store_id = '".$id."'";
		// $rsgetstore = $this->db->query($sqlchoosestore);
		// $data['rs'] = $rsgetstore->row_array();

		// $arstoreid = array('storeid' => $id );
		// $this->session->set_userdata($arstoreid);
		// $sqlallstore = "select * from store where owner_id = '".$ownerid."' and status_store_id != '4' and store_id != '".$id."' ";
		// $data['allstore'] = $this->db->query($sqlallstore)->result_array();
		
		// $sqlgetinfo = "select * from info where store_id = '".$id."' ";
		// $data['info'] = $this->db->query($sqlgetinfo)->result_array();

		// $this->load->view("store",$data);


	}

	public function del(){
		$id = $this->input->post("id");
		$dataupdate = array('status_store_id' => "4");
		$this->db->where('store_id', $id);
		$this->db->update('store', $dataupdate); 
	}

	public function delinfo($id){
		$this->db->where('info_id', $id);
		$this->db->delete('info'); 
		redirect("store"); 
	}

	public function showinfo($id){
		$rs = $this->db->where("info_id",$id)->get("info")->row_array();
		$rss = $this->db->where("info_id",$id)->get("qr")->row_array();
		if ($rss == null) {
			$ar = array('info_id' => $rs['info_id'] ,
						'info_name' => $rs['info_name'] ,
						'info_pic' => $rs['info_pic'] ,
						'info_descrip' => $rs['info_descrip'] ,
						'info_begin_date' => $rs['info_begin_date'] ,
						'info_expire_date' => $rs['info_expire_date'] ,
						'catagory' => $rs['catagory'] ,
						'info_date' => $rs['info_date'] ,
						'qr' => "No QR"
						);
		}else{
			$ar = array('info_id' => $rs['info_id'] ,
						'info_name' => $rs['info_name'] ,
						'info_pic' => $rs['info_pic'] ,
						'info_descrip' => $rs['info_descrip'] ,
						'info_begin_date' => $rs['info_begin_date'] ,
						'info_expire_date' => $rs['info_expire_date'] ,
						'catagory' => $rs['catagory'] ,
						'info_date' => $rs['info_date'] ,
						'qr' => "Have QR"
						);
		}
		
		echo json_encode($ar);

	}

	public function activate(){
		$ref1 = $this->input->post("ref1");
		$ref2 = $this->input->post("ref2");
		$storeid = "8";
		// $storeid = $this->session->userdata('storeid');
		$sqlcheckref = "select * from sensoro where sensoro_code1 = '".$ref1."' and sensoro_code2 = '".$ref2."' ";
		$rs = $this->db->query($sqlcheckref)->row_array();
		if ($rs != null) {
			$aractivate = array('store_id' => $storeid);
			$this->db->where('sensoro_id', $rs['sensoro_id']);
			$this->db->update('sensoro', $aractivate);
			$sqlgetsen = "select * from sensoro where sensoro_id = '".$rs['sensoro_id']."' ";
			$data = $this->db->query($sqlgetsen)->row_array();
			$arsend = array('uuid' => $data['uuid'] ,
							'major' => $data['major'] ,
							'minor' => $data['minor'] ,
							'status' => 'ok' ); 
		}else{
			$arsend = array('status' => 'no' );
		}
		echo json_encode($arsend);
	}


	

}

?>