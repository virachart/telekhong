<?php
class Payment extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			// $storeid = $this->session->userdata('storeid');
			$storeid = 6;
			$sqlgetst = "select * from store join package on store.package_id = package.package_id where store_id = '".$storeid."' ";
			$data['storedetail'] = $this->db->query($sqlgetst)->row_array();
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";

			$sqlgetpayment = "select * from store join payment_log on store.store_id = payment_log.store_id where payment_log.store_id = '".$storeid."' ";
			$data['payment'] = $this->db->query($sqlgetpayment)->result_array();

			$sqlgetdate = "select MIN(payment_id) AS id from payment_log where store_id = '".$storeid."' ";
			$payid = $this->db->query($sqlgetdate)->row_array();

			$sqlgetpromiss = "select * from payment_log where payment_id = '".$payid['id']."' ";
			$data['firstday'] = $this->db->query($sqlgetpromiss)->row_array();
			


			$this->load->view("payment",$data);

		}else{
			redirect("auth");
		}
	}

	public function checkpayment(){
		$result = $this->input->post("result");
		$apcode = $this->input->post("apCode");
		$amt = $this->input->post("amt");

		echo $result;
		echo $apcode;
		echo $amt;
	}

	

}

?>