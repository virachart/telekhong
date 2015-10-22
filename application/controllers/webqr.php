<?php
class webqr extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata("webcodeqr") != null) {
			$data['complete'] = null;
			$this->load->view("webqr",$data);
		}else{
			redirect("webqrlogin");
		}
	}

	public function checkqr() {
		$qr = $this->input->post("qrcode");
		
		if ($qr != null) {
			// echo $qr;
			$qrcode = substr($qr, 0,15);
			$id = substr($qr, 15);
			// echo $qrcode;
			// echo "<br>";
			// echo $id;
			$argetqr = array('qr.code' => $qrcode , 
							'qr.store_id' => $this->session->userdata("webcodeqr"),
							'info_status_id' => "1");
			$rs = $this->db->select("*")
					->from("qr")
					->join("info","qr.info_id = info.info_id")
					->join("store","info.store_id = store.store_id")
					->where($argetqr)
					->where("info_begin_date < NOW() and info_expire_date >= NOW()+1")
					->get();

			if ($rs->num_rows() > 0) {
				$data['qr'] = $rs->row_array();
				$getqr = $rs->row_array();
				$arinsert = array('qr_id' => $getqr['qr_id'],
								  'fb_id' => $id );

				$this->db->insert("qr_log",$arinsert);
				$data['complete'] = "QR Code Correct!!. ".$getqr['info_name'].".";
				$this->load->view("webqr",$data);
			}else{
				$data['complete'] = "QR Code Incorrect. Please Scan QR Code Agian!!!!";
				$this->load->view("webqr",$data);
			}
			
		}else{
			$data['complete'] = "Please Scan QR Code Agian!!!!";
			$this->load->view("webqr",$data);
		}
	}

	public function logout(){
		$this->session->unset_userdata("webcodeqr");
		// print_r($this->session->all_userdata());
		redirect("webqrlogin");
	} 

}

?>