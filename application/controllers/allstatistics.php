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

						$storeid = $this->session->userdata("storeid");
						
						//top 5 fav rank
						$sqlgetinfofav = "select * , count(fb_id) AS countfav from info join favorite on info.info_id = favorite.info_id where info.store_id = '".$storeid."' and info.info_status_id = '1' ;";
						$data['favtop'] = $this->db->query($sqlgetinfofav)->result_array();

						// recive info
						$sqlgetinfore = "select * , count(fb_id) AS countre from info join info_log on info.info_id = info_log.info_id where info.store_id = '".$storeid."' and info.info_status_id = '1' ;";
						$data['infore'] = $this->db->query($sqlgetinfore)->result_array();

						// echo "<pre>";
						// print_r($data);
						// echo "</pre>";

						$this->load->view("allstatistics",$data);

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