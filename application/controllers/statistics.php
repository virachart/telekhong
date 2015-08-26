<?php
class statistics extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			$this->load->view("statistics",$data);
		}else{
			redirect("auth");
		}
	}

	
	public function ye14(){
		$y = "2014";
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
		//end user

		//start owner
		$sqlOwner12 = "SELECT * FROM owner WHERE owner_date like '".$y."-12%'";
		$data['owner12'] = $this->db->query($sqlOwner12);
		$sqlUser11 = "SELECT * FROM owner WHERE owner_date like '".$y."-11%'";
		$data['owner11'] = $this->db->query($sqlOwner11);
		$sqlOwner10 = "SELECT * FROM owner WHERE owner_date like '".$y."-10%'";
		$data['owner10'] = $this->db->query($sqlOwner10);
		$sqlOwner9 = "SELECT * FROM owner WHERE owner_date like '".$y."-09%'";
		$data['owner9'] = $this->db->query($sqlOwner9);
		$sqlOwner8 = "SELECT * FROM owner WHERE owner_date like '".$y."-08%'";
		$data['owner8'] = $this->db->query($sqlOwner8);
		$sqlOwner7 = "SELECT * FROM owner WHERE owner_date like '".$y."-07%'";
		$data['owner7'] = $this->db->query($sqlOwner7);
		$sqlOwner6 = "SELECT * FROM owner WHERE owner_date like '".$y."-06%'";
		$data['owner6'] = $this->db->query($sqlOwner6);
		$sqlOwner5 = "SELECT * FROM owner WHERE owner_date like '".$y."-05%'";
		$data['owner5'] = $this->db->query($sqlOwner5);
		$sqlOwner4 = "SELECT * FROM owner WHERE owner_date like '".$y."-04%'";
		$data['owner4'] = $this->db->query($sqlOwner4);
		$sqlOwner3 = "SELECT * FROM owner WHERE owner_date like '".$y."-03%'";
		$data['owner3'] = $this->db->query($sqlOwner3);
		$sqlOwner2 = "SELECT * FROM owner WHERE owner_date like '".$y."-02%'";
		$data['owner2'] = $this->db->query($sqlOwner2);
		$sqlOwner1 = "SELECT * FROM owner WHERE owner_date like '".$y."-01%'";
		$data['owner1'] = $this->db->query($sqlOwner1);
		//end owner

		//start sensoro
		$sqlsen12 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-12%'";
		$data['sen12'] = $this->db->query($sqlsen12);
		$sqlUser11 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-11%'";
		$data['sen11'] = $this->db->query($sqlsen11);
		$sqlsen10 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-10%'";
		$data['sen10'] = $this->db->query($sqlsen10);
		$sqlsen9 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-09%'";
		$data['sen9'] = $this->db->query($sqlsen9);
		$sqlsen8 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-08%'";
		$data['sen8'] = $this->db->query($sqlsen8);
		$sqlsen7 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-07%'";
		$data['sen7'] = $this->db->query($sqlsen7);
		$sqlsen6 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-06%'";
		$data['sen6'] = $this->db->query($sqlsen6);
		$sqlsen5 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-05%'";
		$data['sen5'] = $this->db->query($sqlsen5);
		$sqlsen4 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-04%'";
		$data['sen4'] = $this->db->query($sqlsen4);
		$sqlsen3 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-03%'";
		$data['sen3'] = $this->db->query($sqlsen3);
		$sqlsen2 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-02%'";
		$data['sen2'] = $this->db->query($sqlsen2);
		$sqlsen1 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-01%'";
		$data['sen1'] = $this->db->query($sqlsen1);
		//end sensoro

		//start package
		$sqlpack4 = "SELECT * FROM store WHERE package_id = 4 and status_store_id = 1";
		$data['pack4'] = $this->db->query($sqlsen4);
		$sqlpack3 = "SELECT * FROM store WHERE package_id = 3 and status_store_id = 1";
		$data['pack3'] = $this->db->query($sqlsen3);
		$sqlpack2 = "SELECT * FROM store WHERE package_id = 2 and status_store_id = 1";
		$data['pack2'] = $this->db->query($sqlsen2);
		$sqlpack1 = "SELECT * FROM store WHERE package_id = 1 and status_store_id = 1";
		$data['pack1'] = $this->db->query($sqlsen1);
		//end package

		$this->load->view("statistics",$data);
		
	}


	public function ye15(){
		$y = "2015";
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
		//end user

		//start owner
		$sqlOwner12 = "SELECT * FROM owner WHERE owner_date like '".$y."-12%'";
		$data['owner12'] = $this->db->query($sqlOwner12);
		$sqlUser11 = "SELECT * FROM owner WHERE owner_date like '".$y."-11%'";
		$data['owner11'] = $this->db->query($sqlOwner11);
		$sqlOwner10 = "SELECT * FROM owner WHERE owner_date like '".$y."-10%'";
		$data['owner10'] = $this->db->query($sqlOwner10);
		$sqlOwner9 = "SELECT * FROM owner WHERE owner_date like '".$y."-09%'";
		$data['owner9'] = $this->db->query($sqlOwner9);
		$sqlOwner8 = "SELECT * FROM owner WHERE owner_date like '".$y."-08%'";
		$data['owner8'] = $this->db->query($sqlOwner8);
		$sqlOwner7 = "SELECT * FROM owner WHERE owner_date like '".$y."-07%'";
		$data['owner7'] = $this->db->query($sqlOwner7);
		$sqlOwner6 = "SELECT * FROM owner WHERE owner_date like '".$y."-06%'";
		$data['owner6'] = $this->db->query($sqlOwner6);
		$sqlOwner5 = "SELECT * FROM owner WHERE owner_date like '".$y."-05%'";
		$data['owner5'] = $this->db->query($sqlOwner5);
		$sqlOwner4 = "SELECT * FROM owner WHERE owner_date like '".$y."-04%'";
		$data['owner4'] = $this->db->query($sqlOwner4);
		$sqlOwner3 = "SELECT * FROM owner WHERE owner_date like '".$y."-03%'";
		$data['owner3'] = $this->db->query($sqlOwner3);
		$sqlOwner2 = "SELECT * FROM owner WHERE owner_date like '".$y."-02%'";
		$data['owner2'] = $this->db->query($sqlOwner2);
		$sqlOwner1 = "SELECT * FROM owner WHERE owner_date like '".$y."-01%'";
		$data['owner1'] = $this->db->query($sqlOwner1);
		//end owner

		//start sensoro
		$sqlsen12 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-12%'";
		$data['sen12'] = $this->db->query($sqlsen12);
		$sqlUser11 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-11%'";
		$data['sen11'] = $this->db->query($sqlsen11);
		$sqlsen10 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-10%'";
		$data['sen10'] = $this->db->query($sqlsen10);
		$sqlsen9 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-09%'";
		$data['sen9'] = $this->db->query($sqlsen9);
		$sqlsen8 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-08%'";
		$data['sen8'] = $this->db->query($sqlsen8);
		$sqlsen7 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-07%'";
		$data['sen7'] = $this->db->query($sqlsen7);
		$sqlsen6 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-06%'";
		$data['sen6'] = $this->db->query($sqlsen6);
		$sqlsen5 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-05%'";
		$data['sen5'] = $this->db->query($sqlsen5);
		$sqlsen4 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-04%'";
		$data['sen4'] = $this->db->query($sqlsen4);
		$sqlsen3 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-03%'";
		$data['sen3'] = $this->db->query($sqlsen3);
		$sqlsen2 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-02%'";
		$data['sen2'] = $this->db->query($sqlsen2);
		$sqlsen1 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-01%'";
		$data['sen1'] = $this->db->query($sqlsen1);
		//end sensoro

		//start package
		$sqlpack4 = "SELECT * FROM store WHERE package_id = 4 and status_store_id = 1";
		$data['pack4'] = $this->db->query($sqlsen4);
		$sqlpack3 = "SELECT * FROM store WHERE package_id = 3 and status_store_id = 1";
		$data['pack3'] = $this->db->query($sqlsen3);
		$sqlpack2 = "SELECT * FROM store WHERE package_id = 2 and status_store_id = 1";
		$data['pack2'] = $this->db->query($sqlsen2);
		$sqlpack1 = "SELECT * FROM store WHERE package_id = 1 and status_store_id = 1";
		$data['pack1'] = $this->db->query($sqlsen1);
		//end package

		$this->load->view("statistics",$data);
		
	}


}

?>