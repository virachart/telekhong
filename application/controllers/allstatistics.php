<?php
class Allstatistics extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){

		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				if ($this->session->userdata('storeid') != null) {
					if ($this->session->userdata('statuspack') == "2" ||
						$this->session->userdata('statuspack') == "3") {

						$this->load->view("allstatistics");

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