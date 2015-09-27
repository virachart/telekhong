<?php
class Contact extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){

		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				if ($this->session->userdata('storeid') != null) {
					
						// start show all store have all owner page
						$ownerid = $this->session->userdata('ownerid');
						$storeid = $this->session->userdata('storeid');
						// $ownerid = 5;
						// $storeid = 6;
						$sqlallstore = "select * from store where owner_id = '".$ownerid."' and status_store_id != '4' and store_id != '".$storeid."' ";
						$data['allstore'] = $this->db->query($sqlallstore)->result_array();
						//end show all store have all owner page
						

						$this->load->view("contact.php",$data);

					
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

	public function sendmail(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				if ($this->session->userdata('storeid') != null) {
					$storeid = $this->session->userdata('storeid');
					// $storeid = 6;

					$sqlgetdata = "select * from user join owner on user.fb_id = owner.fb_id join store on owner.owner_id = store.owner_id where store.store_id = '".$storeid."' ";
					$data = $this->db->query($sqlgetdata)->row_array();

					$emailuser = $this->session->userdata("email");
					$topic = $this->input->post("topic");
					$detail = $this->input->post("detail");

					$from = "Owner name : ".$data['fb_name'].".ID : ".$data['store_id'].".";

					$this->load->library('email_class');				
					$email_data = array(
						'from' => array('name' => $from),
						'to' => array('email' => "sleepyjob.oneside@gmail.com", 'name' => "Contact Telekhong"),
						'subject' => $topic,
						'message' => $detail
						);
					if($this->email_class->send_email($email_data))
						echo 'Done! <a href="'.base_url().'">Back</a>';
					else
						echo 'Error!';

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