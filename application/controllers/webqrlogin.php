<?php
class Webqrlogin extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata("webcodeqr") == null) {

			$this->load->view("webqrlogin");
		}else{
			redirect("webqr");
		}
	}


	public function entercode()	{
		if ($this->input->post("btsub")!=null) {
			$code = $this->input->post("codelogin");
			if ($code != null) {
				$arqr = array('se_key' => $code ,
							  'package_id' => "3" ,
							  'status_store_id' => "1");
				$rsqr = $this->db->select("*")
						->from("store")
						->where($arqr)
						->get();
				if ($rsqr->num_rows() > 0) {
					$dataqr = $rsqr->row_array();
					$arsession = array('webcodeqr' => $dataqr['store_id'] );
					$this->session->set_userdata($arsession);
					// echo $this->session->userdata("webcodeqr");
					redirect("webqr");
				}else{
					$this->load->view("webqrlogin");
				}
			}else{
				$this->load->view("webqrlogin");
			}
			
		}
	}


}

?>