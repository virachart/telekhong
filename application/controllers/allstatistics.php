<?php
class Allstatistics extends CI_Controller{

	public function main(){

		parent::__construct();
		$this->load->database();
	}

	public function index(){

		if ($this->session->userdata('id') != null) {
			if ($this->session->userdata('ownerid') != null) {
				if ($this->session->userdata('storeid') != null) {
					if ($this->session->userdata('statuspack') == "2" ||
						$this->session->userdata('statuspack') == "3") {

						$storeid = $this->session->userdata("storeid");
						
						//top 5 fav rank
						$sqlgetinfofav = "select * , count(fb_id) AS countfav from info join favorite on info.info_id = favorite.info_id where info.store_id = '".$storeid."' and info.info_status_id = '1' ;";
						$rsinfofav = $this->db->query($sqlgetinfofav);
						$data['favtop'] = $rsinfofav->result_array();
						$data['forfav'] = 0;
						if ($rsinfofav->num_rows() < 5 ) {
							$numfav = $rsinfofav->num_rows();
							$numfav = 5 - $numfav;
							$arfav = array('store_id' => $storeid ,
											'info_status_id' => '1' );
							foreach ($data['favtop'] as $r) {
								$notin = $r['info_id']."";
								$araddinfo = array('info_id !=' => $notin );
								$result = array_merge($arfav, $araddinfo); 
							}
							// echo $this->db->last_query();
							$data['favadd'] = $this->db->select("*")
												->from("info")
												->where($result)
												->limit($numfav)
												->get()->result_array();
												// echo $this->db->last_query();

							$data['forfav'] = 1;
						}

						// recive info
						$sqlgetinfore = "select * , count(fb_id) AS countre from info join info_log on info.info_id = info_log.info_id where info.store_id = '".$storeid."' and info.info_status_id = '1' ;";
						$reinfore = $this->db->query($sqlgetinfore);
						$data['infore'] = $reinfore->result_array();

						$data['forinfo'] = 0;
						$sqlcountinfo = "select count(info_id) AS numinfo from info where store_id = '".$storeid."' and info_status_id ='1' ";
						$countinfo = $this->db->query($sqlcountinfo)->row_array();
						if ($reinfore->num_rows() < $countinfo['numinfo'] ) {
							$arfav = array('store_id' => $storeid ,
											'info_status_id' => '1' );
							foreach ($data['infore'] as $r) {
								$araddinfo = array('info_id !=' => $r['info_id'] );
								$result = array_merge($arfav, $araddinfo); 
							}
							$data['readd'] = $this->db->select("*")
												->from("info")
												->where($result)
												->get()->result_array();
							$data['forinfo'] = 1;
						}

						// echo "<pre>";
						// print_r($data);
						// echo "</pre>";

						$this->load->view("allstatistics",$data);

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
}
?>