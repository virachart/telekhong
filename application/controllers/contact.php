<?php
class Contact extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){

		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				if ($this->session->userdata('storeid') != null) {
					
						//start show all store have all owner page
						$ownerid = $this->session->userdata('ownerid');
						$storeid = $this->session->userdata('storeid');
						$sqlallstore = "select * from store where owner_id = '".$ownerid."' and status_store_id != '4' and store_id != '".$storeid."' ";
						$data['allstore'] = $this->db->query($sqlallstore)->result_array();
						//end show all store have all owner page
						$sqlemail = "select owner_email from owner where owner_id = '".$ownerid."' ";
						$rs = $this->db->query($sqlemail)->row_array();
						$this->session->set_userdata("email",$rs['owner_email']);

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
		$emailuser = $this->session->userdata("email");

		$config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);

        $this->email->from($emailuser, 'Your Name');
        $this->email->to('firstza22@gmail.com');

        $this->email->subject($this->input->post("topic"));
        $this->email->message($this->input->post("detail"));

        $this->email->send();

        echo $this->email->print_debugger();
		
	}

	

}

?>