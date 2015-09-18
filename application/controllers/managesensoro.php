<?php
class Managesensoro extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('admin') != null){
			// $this->load->library("pagination");
			// $config['base_url'] = base_url()."index.php/managesensoro/index";
			// $config['per_page'] = 5;
			// $config['total_rows'] = $this->db->count_all("sensoro");

			// $config['full_tag_open'] = "<div class = 'pagination'>";
			// $config['full_tag_close'] = "</div>";
			// $this->pagination->initialize($config);

			$config['base_url'] = base_url()."index.php/managesensoro/index";
			$config['per_page'] = 5;
			//count_all(); -> count data in table
			$counttable = $this->db->count_all("sensoro");
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

			$sqluser = "Select * from sensoro";
			$sqluserav = "Select * from sensoro where status_sensoro_id = '1'";
			$sqluserbl = "Select * from sensoro where status_sensoro_id = '2'";
			$sqluserba = "Select * from sensoro where status_sensoro_id = '3'";
			$sqluserty1 = "Select * from sensoro where sensoro_type = '1'";
			$sqluserty2 = "Select * from sensoro where sensoro_type = '2'";
			$data['num1'] = $this->db->query($sqluser);
			$data['num2'] = $this->db->query($sqluserav);
			$data['num3'] = $this->db->query($sqluserbl);
			$data['num4'] = $this->db->query($sqluserba);
			$data['num5'] = $this->db->query($sqluserty1);
			$data['num6'] = $this->db->query($sqluserty2);
			$data['rs'] = $this->db->select("*")
							->from("sensoro a")
							->join("store b","a.store_id = b.store_id")
							->limit($config['per_page'],end($this->uri->segments))->get()->result_array();

			// $data['rs'] = $this->db->select("*")->from("sensoro a")->join("store b","a.store_id = b.store_id")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
			
			$this->load->view("managesensoro",$data);
		}elseif ($this->session->userdata('id') != null) {
			redirect("dashboardowner");
		}else{
			redirect("auth");
		}
	}

	public function getdetail(){
		$senid = $this->input->post("id"); 
		$sqlgetdetail = "select * from sensoro join store on sensoro.store_id = store.store_id where sensoro_id = '".$senid."' ";
		$data = $this->db->query($sqlgetdetail)->row_array();
		$arsend = array('senid' => $data['sensoro_id'] ,
						'store' => $data['store_id'] ,
						'major' => $data['major'] ,
						'minor' => $data['minor'] ,
						'type' => $data['sensoro_type'] ,
						'statusid' => $data['status_sensoro_id']  );
		echo json_encode($arsend);
	}

	public function del($id){
		$this->db->delete("sensoro",array("sensoro_id"=>$id));
		redirect("managesensoro","refresh");
	}

	public function edit(){
		$senid = $this->input->post("senid");
		$storeid = $this->input->post("storeid");
		$type = $this->input->post("type");
		$status = $this->input->post("status");
		$sqlupdate = "UPDATE sensoro SET store_id = '".$storeid."' , sensoro_type = '".$type."' , status_sensoro_id = '".$status."' WHERE sensoro_id = '".$senid."'";
		$this->db->query($sqlupdate);
	}

	public function change(){
		$senid = $this->input->post("senid");
		$day = $this->input->post("day");
		$sqlupdate = "UPDATE sensoro SET sensoro_date = '".$day."' WHERE sensoro_id = '".$senid."'";
		$this->db->query($sqlupdate);
	}


	public function search(){
		if($this->session->userdata('admin') != null){
			$name = $this->input->post("searchst");
			// echo $name;
			
			if ($name != null) {

				$sqluser = "Select * from store";
				$sqluserav = "Select * from store where status_store_id = '1'";
				$sqluserbl = "Select * from store where status_store_id = '2'";
				$sqluserba = "Select * from store where status_store_id = '3'";
				$data['num1'] = $this->db->query($sqluser);
				$data['num2'] = $this->db->query($sqluserav);
				$data['num3'] = $this->db->query($sqluserbl);
				$data['num4'] = $this->db->query($sqluserba);
				$data['rs'] = $this->db->select("*")->from("store")->like("store_name",$name)->get()->result_array();
				
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

	public function add(){
		$uuid = $this->input->post("uuid");
		$major = $this->input->post("major");
		$minor = $this->input->post("minor");
		$type = $this->input->post("type");
		$rancode1 = random_string('alnum', 10);
		$strcode1 = strtolower($rancode1);
		$rancode2 = random_string('alnum', 7);
		$strcode2 = strtolower($rancode2);
		echo $uuid;
		echo $major;
		echo $minor;
		echo $type;
		//check code1
		$sqlChCode = "SELECT * FROM sensoro where sensoro_code1 ='".$strcode1."' ";
		$rsChCode = $this->db->query($sqlChCode);
		while ($rsChCode->num_rows != 0) {
			$rancode1 = random_string('alnum', 10);
			$strcode1 = strtolower($ranqr);
			$sqlChCode = "SELECT * FROM sensoro where sensoro_code1 ='".$strcode1."' ";
			$rsChCode = $this->db->query($sqlChCode);
		}
		//check code2
		$sqlChCode2 = "SELECT * FROM sensoro where sensoro_code2 ='".$strcode2."' ";
		$rsChCode2 = $this->db->query($sqlChCode2);
		while ($rsChCode2->num_rows != 0) {
			$rancode2 = random_string('alnum', 7);
			$strcode2 = strtolower($ranqr);
			$sqlChCode2 = "SELECT * FROM sensoro where sensoro_code1 ='".$strcode1."' ";
			$rsChCode2 = $this->db->query($sqlChCode2);
		}
		//insert to sensoro table
		$sql = "INSERT INTO `sensoro` (`uuid`, `major`, `minor`, `sensoro_code1`, `sensoro_code2`, `store_id`, `sensoro_type`) VALUES ('".$uuid."', '".$major."', '".$minor."', '".$strcode1."', '".$strcode2."', '6', '".$type."');";
		$this->db->query($sql);
		echo $this->db->last_query();

		$this->index();

			// INSERT INTO `telekhong`.`sensoro` (`uuid`, `major`, `minor`, `sensoro_code1`, `sensoro_code2`, `store_id`, `sensoro_type`) VALUES ('2345878o7t', '34', '34', '1234', '3124', '6', '1');
	}

}

?>