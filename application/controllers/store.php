<?php
class Store extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			// $ownerid = $this->session->userdata('ownerid');
			$ownerid = 5;
			$sqlfindstore = "select MIN(store_id) AS store_id from store where status_store_id = '1' and owner_id = '".$ownerid."' ";
			$rsfindstore = $this->db->query($sqlfindstore);
			$arfindstore = $rsfindstore->row_array();
			$storeid = $arfindstore['store_id'];
			$sqlgetstore = "select * from store join package on store.package_id = package.package_id
			 where store_id = '".$storeid."' ";
			$rsgetstore = $this->db->query($sqlgetstore);
			$data['rs'] = $rsgetstore->row_array();
			foreach ($data as $r) {
				$storeid = $r['store_id'];
			};
			$arstoreid = array('storeid' => $storeid );
			$this->session->set_userdata($arstoreid);

			$sqlallstore = "select * from store where owner_id = '".$ownerid."' and status_store_id != '4' and store_id != '".$storeid."' ";
			$data['allstore'] = $this->db->query($sqlallstore)->result_array();

			$sqlgetinfo = "select * from info where store_id = '".$storeid."' ";
			$data['info'] = $this->db->query($sqlgetinfo)->result_array();

			$this->load->view("store",$data);
		// }else{
		// 	redirect("auth");
		}

	}

	public function selectst($id){
		// $ownerid = $this->session->userdata('ownerid');
		$ownerid = 5;
		$this->session->unset_userdata('storeid');
		$sqlchoosestore = "select * from store join package on store.package_id = package.package_id
			 where store_id = '".$id."'";
		$rsgetstore = $this->db->query($sqlchoosestore);
		$data['rs'] = $rsgetstore->row_array();

		$arstoreid = array('storeid' => $id );
		$this->session->set_userdata($arstoreid);
		$sqlallstore = "select * from store where owner_id = '".$ownerid."' and status_store_id != '4' and store_id != '".$id."' ";
		$data['allstore'] = $this->db->query($sqlallstore)->result_array();
		
		$sqlgetinfo = "select * from info where store_id = '".$id."' ";
		$data['info'] = $this->db->query($sqlgetinfo)->result_array();

		$this->load->view("store",$data);


	}

	public function showinfo($id){
		$rs = $this->db->where("info_id",$id)->get("info")->row_array();
		$rss = $this->db->where("info_id",$id)->get("qr")->row_array();
		if ($rss == null) {
			$ar = array('info_id' => $rs['info_id'] ,
						'info_name' => $rs['info_name'] ,
						'info_pic' => $rs['info_pic'] ,
						'info_descrip' => $rs['info_descrip'] ,
						'info_begin_date' => $rs['info_begin_date'] ,
						'info_expire_date' => $rs['info_expire_date'] ,
						'catagory' => $rs['catagory'] ,
						'info_date' => $rs['info_date'] ,
						'qr' => "No QR"
						);
		}else{
			$ar = array('info_id' => $rs['info_id'] ,
						'info_name' => $rs['info_name'] ,
						'info_pic' => $rs['info_pic'] ,
						'info_descrip' => $rs['info_descrip'] ,
						'info_begin_date' => $rs['info_begin_date'] ,
						'info_expire_date' => $rs['info_expire_date'] ,
						'catagory' => $rs['catagory'] ,
						'info_date' => $rs['info_date'] ,
						'qr' => "Have QR"
						);
		}
		
		echo json_encode($ar);

	}

	public function activate(){
		$ref1 = $this->input->post("ref1");
		$ref2 = $this->input->post("ref2");
		$storeid = "8";
		// $storeid = $this->session->userdata('storeid');
		$sqlcheckref = "select * from sensoro where sensoro_code1 = '".$ref1."' and sensoro_code2 = '".$ref2."' ";
		$rs = $this->db->query($sqlcheckref)->row_array();
		if ($rs != null) {
			$aractivate = array('store_id' => $storeid);
			$this->db->where('sensoro_id', $rs['sensoro_id']);
			$this->db->update('sensoro', $aractivate);
			$sqlgetsen = "select * from sensoro where sensoro_id = '".$rs['sensoro_id']."' ";
			$data = $this->db->query($sqlgetsen)->row_array();
			$arsend = array('uuid' => $data['uuid'] ,
							'major' => $data['major'] ,
							'minor' => $data['minor'] ,
							'status' => 'ok' ); 
		}else{
			$arsend = array('status' => 'no' );
		}
		echo json_encode($arsend);
	}

}

?>