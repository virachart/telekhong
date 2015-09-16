<?php 
class Auth extends CI_CONTROLLER{

	private $uid;

	private $access_token;


	public function __construct()
	{
		parent::__construct();

		$this->load->library("session");
		$this->load->library("facebook",array(
			"appId"=>"980284185339330",
			"secret"=>"435c82b16b16cadffb2a1f27accceac0"
			));
		$this->uid = $this->facebook->getUser();
		$this->access_token = $this->facebook->getAccessToken();
		$this->facebook->setAccessToken($this->access_token);
	}

	public function index() {
		if ($this->session->userdata('id') != null) {
			redirect(base_url('index.php/dashboard'));
		}else{
			$this->load->view("auth",$this);
		}
		//echo "Hello";
		
	}

	public function login(){
		// $me;
		if ($this->session->userdata('id') != null) {
			redirect(base_url('index.php/dashboard'));
			// $this->load->view("dashboard");
		}else{
			if($this->uid){
				try {
					$me = $this->facebook->api("/me");
				// $this->session->set_userdata("facebook",$me['id']);
				// redirect("auth");

				} catch (FacebookApiException $e) {
					print_r($e);
					$this->uid = NULL;
				}
			}else{
				die("<script>top.location='".$this->facebook->getLoginUrl(array(
					"scope"=>"email",
					"redirect_url"=>site_url("auth")
					))."'</script>");
			}

			$this->checkAdmin($me);
			// $this->checkUser($me);
		}
	}

	public function checkAdmin($me){
		$id = $me['id'];
		$sqlUser = "Select * from admin where fb_id = ".$id;
		$rs = $this->db->query($sqlUser);
		// echo $this->db->last_query();
		if ($rs->num_rows==0) {
			$this->checkUser($me);
			// echo "user";
		}else{
			// echo "admin";
			$sqlOwner = "Select * from owner where fb_id = ".$id;
			$rs2 = $this->db->query($sqlOwner);
			$dataOwner = $rs2->row_array();
			$this->session->set_userdata($me);
			$ownerid = array('ownerid' => $dataOwner['owner_id']);
			$this->session->set_userdata($ownerid);
			$this->session->set_userdata($me);
			$arad = array('admin' => "adminpass");
			$this->session->set_userdata($arad);
			redirect(base_url('index.php/statistics'));
			}
		}
	

	public function checkUser($me){
		$id = $me['id'];
		$sqlUser = "Select * from user where fb_id = ".$id;
		$rs = $this->db->query($sqlUser);
		if ($rs->num_rows==0) {
			$this->session->set_userdata($me);
			$birth = null;
			if ($me['birthday'] == null) {
				$birth = "0000-00-00";
			}else{
				$bi = $me['birthday'];
				$birth = date('Y-m-d', strtotime($bi));
			}
			$sqlInsert = "INSERT INTO `telekhong`.`user` (`fb_id`, `fb_name`, `sex`, `birth`) VALUES ('".$me['id']."', '".$me['name']."', '".$me['gender']."' , '".$birth."' );";
			$this->db->query($sqlInsert);
			redirect("regis");
		}elseif ($rs->num_rows>0) {
			$sqlOwner = "Select * from owner where fb_id = ".$id;
			$rs2 = $this->db->query($sqlOwner);

			if ($rs2->num_rows()==0) {
				$this->session->set_userdata($me);
			// print_r($me);
				redirect("regis");
			}else{
				$dataOwner = $rs2->row_array();
				$this->session->set_userdata($me);
				$ownerid = array('ownerid' => $dataOwner['owner_id']);
				$this->session->set_userdata($ownerid);
				// echo $this->session->userdata('ownerid');
				redirect(base_url('index.php/store'));
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		$uid = "";
		$access_token = "";
		// print_r($this->session->all_userdata());
		redirect("auth");
	} 

}

