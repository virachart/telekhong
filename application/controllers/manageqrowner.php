<?php
class Manageqrowner extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				if ($this->session->userdata('storeid') != null) {
					if ($this->session->userdata('statuspack') == "3") {
						//start show all store have all owner page
						$ownerid = $this->session->userdata('ownerid');
						$storeid = $this->session->userdata('storeid');
						$sqlallstore = "select * from store where owner_id = '".$ownerid."' and status_store_id != '4' and store_id != '".$storeid."' ";
						$data['allstore'] = $this->db->query($sqlallstore)->result_array();
						//end show all store have all owner page

						$sqluser = "Select * from qr where status_qr_id = '1'";
						$data['num1'] = $this->db->query($sqluser);
						$data['rs'] = $this->db->select("*,count(qr_log.qr_log_id) AS qrcount")
										->from("qr a")
										->join("info b","a.info_id = b.info_id")
										->join("store c","a.store_id = c.store_id")
										->join("qr_log","a.qr_id = qr_log.qr_id","left")
										->where("a.store_id" , $storeid)
										->where("status_qr_id !=","3")
										->group_by("a.qr_id")
										->get()->result_array();
						$this->load->view("manageqrowner",$data);
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

	public function del($id){
		$data = array('status_qr_id' => "3");
		$this->db->where('qr_id', $id);
		$this->db->update('qr', $data); 
		redirect("manageqrowner","refresh");
	}


	public function search(){
		if ($this->input->post("btsave")!=null) {
			$name = $this->input->post("searchqr");
			// echo $name;

			
			if ($name != null) {
				
				$sqlqr = "Select * from qr";
				$data['num1'] = $this->db->query($sqlqr);
				
				$data['rs'] = $this->db->select("*,count(qr_log.qr_log_id) AS qrcount")
										->from("qr a")
										->join("info b","a.info_id = b.info_id")
										->join("store c","a.store_id = c.store_id")
										->join("qr_log","a.qr_id = qr_log.qr_id","left")
										->where("status_qr_id !=","3")
										->like("store_name",$name)
										->group_by("a.qr_id")
										->get()->result_array();
				// echo $this->db->last_query();
				$this->load->view("manageqrowner",$data);
				// print_r($data['rs']);
				// // exit();
			}else{
				$this->index();
			}
		}else{
			$this->index();
		}
	}


	public function chstatus()	{
		$id = $this->input->post("qrid");
		$st = $this->input->post("statusqr");
		// echo $id;
		// echo $st;
		if ($st != 0) {
			$dataupdate = array('status_qr_id' => $st);
			$this->db->where('qr_id', $id);
			$this->db->update('qr', $dataupdate);
		}
		
		// redirect("manageqr","refresh");

	}
	

}

?>