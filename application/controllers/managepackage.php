<?php
class managepackage extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('admin') != null) {

				$data['pack'] = $this->db->select("*")
											->from("package")
											->get()->result_array();


				$this->load->view("managepackage",$data);
			}else{
				redirect("store");
			}

		}else{
			redirect("auth");
		}
	}

	public function delpack($id){
		$sqldelpack = "delete from package where package_id = '".$id."' ";
		$this->db->query($sqldelpack);
		echo $this->db->last_query();
		redirect("managepackage");
	}

	public function editpack(){
			$id = $this->input->post("pid");
			$name = $this->input->post("pname");
			$lim = $this->input->post("plimit");
			$des = $this->input->post("pdes");
			$price = $this->input->post("pprice");

			$arpack = array('package_name' => $name,
							'upload_limit' => $lim,
							'package_descrip' => $des,
							'price' => $price
							);
			$this->db->where('package_id', $id);
			$this->db->update('package', $arpack); 
			echo $this->db->last_query();
			
			redirect("managepackage");
			
	}

	public function getpack(){
		$id = $this->input->post("id");
		$sqlgetpack = "select * from package where package_id = '".$id."' ";
		$rs = $this->db->query($sqlgetpack)->row_array();
		
		$arsend = array('pid' => $rs['package_id'] ,
						'pname' => $rs['package_name'] ,
						'pdes' => $rs['package_descrip'] ,
						'pprice' => $rs['price'] , 
						'pup' => $rs['upload_limit'] ); 
		
		echo json_encode($arsend);
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


	public function addpack(){
		$name = $this->input->post("cpname");
		$lim = $this->input->post("limit");
		$des = $this->input->post("des");
		$price = $this->input->post("price");
		$araddpack = array(
		   'package_name' => $name ,
		   'upload_limit' => $lim ,
		   'package_descrip' => $des ,
		   'price' => $price
		);

		$this->db->insert('package', $araddpack); 
		// echo $name;
		// echo "<br>";
		// echo $lim;
		// echo "<br>";
		// echo $des;
		// echo "<br>";
		// echo $price;
		// echo "<br>";
		// $arsend = array('name' => $name,
						// 'limit' => $lim,
						// 'des' => $des,
						// 'price' => $price
						//  );
		// $arsend = array('' => , );
		// echo json_encode($arsend);
	}

}

?>