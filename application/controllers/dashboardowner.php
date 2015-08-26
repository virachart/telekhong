<?php
class dashboardowner extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			$y = date("Y");
			$sqlStore = "Select * from store";
			$data['store'] = $this->db->query($sqlStore);
			$sqlUser = "Select * from user";
			$data['user'] = $this->db->query($sqlUser);
			$sqlOwner = "Select * from owner";
			$data['owner'] = $this->db->query($sqlOwner);
			$sqlSensoro = "Select * from sensoro";
			$data['sensoro'] = $this->db->query($sqlSensoro);
			
			// month usesr data
			$sqlUser12 = "SELECT * FROM user WHERE user_date like '".$y."-12%'";
			$data['user12'] = $this->db->query($sqlUser12);
			$sqlUser11 = "SELECT * FROM user WHERE user_date like '".$y."-11%'";
			$data['user11'] = $this->db->query($sqlUser11);
			$sqlUser10 = "SELECT * FROM user WHERE user_date like '".$y."-10%'";
			$data['user10'] = $this->db->query($sqlUser10);
			$sqlUser9 = "SELECT * FROM user WHERE user_date like '".$y."-09%'";
			$data['user9'] = $this->db->query($sqlUser9);
			$sqlUser8 = "SELECT * FROM user WHERE user_date like '".$y."-08%'";
			$data['user8'] = $this->db->query($sqlUser8);
			$sqlUser7 = "SELECT * FROM user WHERE user_date like '".$y."-07%'";
			$data['user7'] = $this->db->query($sqlUser7);
			$sqlUser6 = "SELECT * FROM user WHERE user_date like '".$y."-06%'";
			$data['user6'] = $this->db->query($sqlUser6);
			$sqlUser5 = "SELECT * FROM user WHERE user_date like '".$y."-05%'";
			$data['user5'] = $this->db->query($sqlUser5);
			$sqlUser4 = "SELECT * FROM user WHERE user_date like '".$y."-04%'";
			$data['user4'] = $this->db->query($sqlUser4);
			$sqlUser3 = "SELECT * FROM user WHERE user_date like '".$y."-03%'";
			$data['user3'] = $this->db->query($sqlUser3);
			$sqlUser2 = "SELECT * FROM user WHERE user_date like '".$y."-02%'";
			$data['user2'] = $this->db->query($sqlUser2);
			$sqlUser1 = "SELECT * FROM user WHERE user_date like '".$y."-01%'";
			$data['user1'] = $this->db->query($sqlUser1);
			$this->load->view("dashboardowner",$data);
			
		}else{
			redirect("auth");
		}

	}

	

}

?>