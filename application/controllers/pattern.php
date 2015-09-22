<?php
class Store extends CI_Controller{

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

						#....code here

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



}
?>