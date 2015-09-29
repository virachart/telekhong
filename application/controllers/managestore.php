<?php
class Managestore extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('admin') != null) {
				$config['base_url'] = base_url()."index.php/managestore/index";
				$config['per_page'] = 10;
				//count_all(); -> count data in table
				$counttable = $this->db->count_all("store");
				$config['total_rows'] = $counttable;

				//out side
				$config['full_tag_open'] = "<ul class='pagination'>";
				
				$config['first_tag_open'] = '<li>';
				$config['first_tag_close'] = '</li>';

   				$config['last_tag_open'] = '<li>';
   				$config['last_tag_close'] = '</li>';

				$config['prev_tag_open'] = '<li>';
				$config['prev_tag_close'] = '</li>';

				//current page
				$config['cur_tag_open'] = "<li class='active'><a>";
				$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
				
				//another page
				$config['num_tag_open'] = "<li>";
				$config['num_tag_close'] = "</li>";

				$config['next_tag_open'] = '<li>';
				$config['next_tag_close'] = '</li>';

				$config['full_tag_close'] = "</ul";

				$this->pagination->initialize($config);


				$sqluser = "Select * from store";
				$sqluserav = "Select * from store where status_store_id = '1'";
				$sqluserbl = "Select * from store where status_store_id = '2'";
				$sqluserba = "Select * from store where status_store_id = '3'";
				$data['num1'] = $this->db->query($sqluser);
				$data['num2'] = $this->db->query($sqluserav);
				$data['num3'] = $this->db->query($sqluserbl);
				$data['num4'] = $this->db->query($sqluserba);
				$data['rs'] = $this->db->select("*,store.store_id,count(sensoro_id) AS sennum")
								->from("store")
								->join("owner","store.owner_id=owner.owner_id")
								->join("user","owner.fb_id=user.fb_id")
								->join("package","store.package_id = package.package_id")
								->join("sensoro","store.store_id = sensoro.store_id","left")
								->where("status_store_id !=" ,4 )
								->group_by("store.store_id")
								->order_by("expire_date asc")
								->limit($config['per_page'],end($this->uri->segments))->get()->result_array();
				

				$data['no1'] = "";
				$data['expire'] = "Expire Date";
				$data['pagi'] = 1;
				$this->load->view("managestore",$data);
			}else{
				redirect("store");
			}
		}else{
			redirect('auth');
		}

	}

	public function nopay(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('admin') != null) {
				
				$sqluser = "Select * from store";
				$sqluserav = "Select * from store where status_store_id = '1'";
				$sqluserbl = "Select * from store where status_store_id = '2'";
				$sqluserba = "Select * from store where status_store_id = '3'";
				$data['num1'] = $this->db->query($sqluser);
				$data['num2'] = $this->db->query($sqluserav);
				$data['num3'] = $this->db->query($sqluserbl);
				$data['num4'] = $this->db->query($sqluserba);
				$arnopay = array('expire_date' => null ,
								 'status_store_id !=' => 4);
				$data['rs'] = $this->db->select("*,store.store_id,count(sensoro_id) AS sennum")
								->from("store")
								->join("owner","store.owner_id=owner.owner_id")
								->join("user","owner.fb_id=user.fb_id")
								->join("package","store.package_id = package.package_id")
								->join("sensoro","store.store_id = sensoro.store_id","left")
								->where($arnopay)
								->group_by("store.store_id")->get()->result_array();
				
				$data['no1'] = "";
				$data['expire'] = "No Payment";
				$data['pagi'] = 0;
				$this->load->view("managestore",$data);
			}else{
				redirect("store");
			}
		}else{
			redirect('auth');
		}

	}

	public function outdate(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('admin') != null) {
				$day = date("d");
				$day += 1;
				if ($day < 10 ) {
					$day = "0".$day;
				}
				$date = date("Y-m-");
				$date = $date.$day;
				$sqluser = "Select * from store";
				$sqluserav = "Select * from store where status_store_id = '1'";
				$sqluserbl = "Select * from store where status_store_id = '2'";
				$sqluserba = "Select * from store where status_store_id = '3'";
				$data['num1'] = $this->db->query($sqluser);
				$data['num2'] = $this->db->query($sqluserav);
				$data['num3'] = $this->db->query($sqluserbl);
				$data['num4'] = $this->db->query($sqluserba);
				$aroutdate = array('expire_date < ' => $date ,
								 'status_store_id !=' => 4);
				$data['rs'] = $this->db->select("*,store.store_id,count(sensoro_id) AS sennum")
								->from("store")
								->join("owner","store.owner_id=owner.owner_id")
								->join("user","owner.fb_id=user.fb_id")
								->join("package","store.package_id = package.package_id")
								->join("sensoro","store.store_id = sensoro.store_id","left")
								->where($aroutdate)
								->group_by("store.store_id")->get()->result_array();

				$data['no1'] = "";
				
				$data['expire'] = "OutDated";
				$data['pagi'] = 0;
				$this->load->view("managestore",$data);
			}else{
				redirect("store");
			}
		}else{
			redirect('auth');
		}

	}

	public function del($id){
		$data = array('status_store_id' => "4");
		$this->db->where('store_id', $id);
		$this->db->update('store', $data); 
		redirect("managestore","refresh");
	}

	public function edit(){
			
		$storeid = $this->input->post("id");
		$name = $this->input->post("name");
		$detail = $this->input->post("detail");
		$address = $this->input->post("address");
		$tel = $this->input->post("tel");
		$open = $this->input->post("open");
		$status = $this->input->post("status");
		$sqlupdate = "UPDATE store SET store_name ='".$name."', detail ='".$detail."', address ='".$address."' , tel ='".$tel."' , open_time ='".$open."' , status_store_id ='".$status."' WHERE store_id = '".$storeid."'";
		$this->db->query($sqlupdate);

	}


	public function search(){
		if($this->session->userdata('admin') != null){
			$name = $this->input->post("searchst");
			// echo $name;
			
			if ($name != null) {
				$find = $this->input->post("selectsearch");
				

				$sqluser = "Select * from store";
				$sqluserav = "Select * from store where status_store_id = '1'";
				$sqluserbl = "Select * from store where status_store_id = '2'";
				$sqluserba = "Select * from store where status_store_id = '3'";
				$data['num1'] = $this->db->query($sqluser);
				$data['num2'] = $this->db->query($sqluserav);
				$data['num3'] = $this->db->query($sqluserbl);
				$data['num4'] = $this->db->query($sqluserba);
				
				$data['no1'] = "";

				if ($find == "owner_name") {
					$data['rs'] = $this->db->select("*,store.store_id,count(sensoro_id) AS sennum")
								->from("store")
								->join("owner","store.owner_id=owner.owner_id")
								->join("user","owner.fb_id=user.fb_id")
								->join("package","store.package_id = package.package_id")
								->join("sensoro","store.store_id = sensoro.store_id","left")
								->where("status_store_id !=" ,4 )
								->like("fb_name",$name)
								->group_by("store.store_id")
								->get()->result_array();
				}
				if ($find == "store_name") {
					$data['rs'] = $this->db->select("*,store.store_id,count(sensoro_id) AS sennum")
								->from("store")
								->join("owner","store.owner_id=owner.owner_id")
								->join("user","owner.fb_id=user.fb_id")
								->join("package","store.package_id = package.package_id")
								->join("sensoro","store.store_id = sensoro.store_id","left")
								->where("status_store_id !=" ,4 )
								->like("store_name",$name)
								->group_by("store.store_id")
								->get()->result_array();
				}
				// echo $this->db->last_query();
				$this->load->view("managestore",$data);
				// print_r($data['rs']);
				// // exit();
			}else{
				$this->index();
			}
		}else{
			$this->index();
		}
	}

	public function searchstore($ownerid){

		$sqluser = "Select * from store";
		$sqluserav = "Select * from store where status_store_id = '1'";
		$sqluserbl = "Select * from store where status_store_id = '2'";
		$sqluserba = "Select * from store where status_store_id = '3'";
		$data['num1'] = $this->db->query($sqluser);
		$data['num2'] = $this->db->query($sqluserav);
		$data['num3'] = $this->db->query($sqluserbl);
		$data['num4'] = $this->db->query($sqluserba);

		$data['no1'] = "1";
		
		$arsearchstore = array('store.owner_id' => $ownerid ,
								 'status_store_id !=' => 4);
		
		$data['rs'] = $this->db->select("*,store.store_id,count(sensoro_id) AS sennum")
					->from("store")
					->join("owner","store.owner_id=owner.owner_id")
					->join("user","owner.fb_id=user.fb_id")
					->join("package","store.package_id = package.package_id")
					->join("sensoro","store.store_id = sensoro.store_id","left")
					->where($arsearchstore)
					->group_by("store.store_id")
					->get()->result_array();

		$data['expire'] = "Expire Date";
		$data['pagi'] = 0;
		$this->load->view("managestore",$data);
			
	}

	public function showpayment($storeid){
		$sqlgetst = "select * from store join package on store.package_id = package.package_id where store_id = '".$storeid."' ";
		$data['storedetail'] = $this->db->query($sqlgetst)->row_array();

		$sqlgetpayment = "select * from store join payment_log on store.store_id = payment_log.store_id where payment_log.store_id = '".$storeid."' ";
		$data['payment'] = $this->db->query($sqlgetpayment)->result_array();

		$sqlgetdate = "select MIN(payment_id) AS id from payment_log where store_id = '".$storeid."' ";
		$payid = $this->db->query($sqlgetdate)->row_array();

		$sqlgetpromiss = "select * from payment_log where payment_id = '".$payid['id']."' ";
		$data['firstday'] = $this->db->query($sqlgetpromiss)->row_array();

		$this->load->view("showpayment" , $data);
	}

}

?>