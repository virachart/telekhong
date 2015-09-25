<?php
class Managestoreowner extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				if ($this->session->userdata('storeid') != null) {
					if ($this->session->userdata('statuspack') == "1" ||
						$this->session->userdata('statuspack') == "2" ||
						$this->session->userdata('statuspack') == "3") {
						//start show all store have all owner page
						$ownerid = $this->session->userdata('ownerid');
						$storeid = $this->session->userdata('storeid');
						// $ownerid = "5";
						// $storeid = "6";
						$sqlallstore = "select * from store where owner_id = '".$ownerid."' and status_store_id != '4' and store_id != '".$storeid."' ";
						$data['allstore'] = $this->db->query($sqlallstore)->result_array();
						//end show all store have all owner page

						$sqlgetstore = "select * from store where store_id = '".$storeid."' ";
						$data['store'] = $this->db->query($sqlgetstore)->row_array();

						$this->load->view("managestoreowner",$data);

					}else{
						redirect('store');
					}
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

	public function edit(){
		if ($this->input->post("btsave")!=null) {
			$opti = $this->input->post("opti");
			$clti = $this->input->post("clti");
			$open = $opti." - ".$clti;

			$storeid = $this->session->userdata("storeid");
			// $storeid = "6";
			$arstore=array(
				"store_name"=>$this->input->post("name"),
				"address"=>$this->input->post("address"),
				"tel"=>$this->input->post("tel"),
				"open_time"=>$open,
				"detail"=>$this->input->post("detail")
			);
			$this->db->where("store_id",$storeid);
			$this->db->update("store",$arstore);

			$image_data = $this->input->post("image-data");
			if ($image_data !=""){
				$dataimg = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image_data));		
				file_put_contents('images/store/store-'.$storeid.'.jpg', $dataimg);
				$newname = "store-".$storeid.".jpg";
				$sqlupdate = "UPDATE store SET picture_store ='".$newname."' WHERE store_id = '".$storeid."'";
				$this->db->query($sqlupdate);
			}

			
			redirect("store","refresh");
		}else{
			redirect("store");
		}
	}

}

?>