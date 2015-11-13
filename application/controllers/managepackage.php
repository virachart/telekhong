<?php
class managepackage extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		// if($this->session->userdata('admin') != null){
			// $data['rs'] = $this->db->select("*")->from("package")->get()->result_array();
			// echo $this->db->last_query();
			// var_dump($data);
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// print_r($data['rs']);
			$this->load->view("managepackage.php");

		// }else{
			// redirect("auth");
		// }
	}

	public function del($id){
		$this->db->delete("package",array("package_id"=>$id));
		redirect("package","refresh");
		exit();
	}

	public function add()
	{
		if ($this->input->post("btsave")!=null) {
			$name = $this->input->post("name");
			$desc = $this->input->post("desc");
			$upload = $this->input->post('upload');
			$price = $this->input->post('price');
			$sql = "INSERT INTO `telekhong`.`package` (`package_name`, `upload_limit`, `package_descrip`, `price`) VALUES ('".$name."', '".$upload."', '".$desc."', '".$price."')";
			$this->db->query($sql);
			redirect("package","refresh");
		}
		$this->index();
		
	}

	public function getpic(){
		$encoded = $this->input->post("data");
	    $decoded = urldecode($encoded);
	    // $exp = explode(',', $decoded);
	    // //we just get the last element with array_pop
	    // $base64 = array_pop($exp);
	    // //decode the image and finally save it
	    // $data = base64_decode($base64);
	    // $file = 'data.png';
	    // //make sure you are the owner and have the rights to write content
	    // echo file_put_contents($file, $data);
	    $exp = explode(';', $decoded);
	    $exp = explode(':', $exp[0]);
	    $image = array_pop($exp);
	   
	    echo $image;
	}

}

?>