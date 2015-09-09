<?php
class Statisticsowner extends CI_Controller{

	public function main(){

		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('id') != null){
			// if($this->session->userdata('storeid') != null){
				$id = $this->session->userdata('storeid');
				$arsq = array('store_id' => $id);
				$data['rs'] = $this->db->select("*")->from("info")->where($arsq)->get()->result_array();

				$y = date("Y");
				$nowdate = date("Y-m-d");

				$y17 = $y-17;
				$y18 = $y-18;
				$y25 = $y-25;
				$y26 = $y-26;
				$y35 = $y-35;
				$y36 = $y-36;
				$y50 = $y-50;
				$y51 = $y-51;
				$y100 = $y-100;

				//user age data
				$sqlage1 = "SELECT * FROM user where birth between '".$y17."-01-01' and '".$nowdate."';";
				$data['age1'] = $this->db->query($sqlage1);
				$sqlage2 = "SELECT * FROM user where birth between '".$y25."-01-01' and '".$y18."-12-31';";
				$data['age1'] = $this->db->query($sqlage2);
				$sqlage3 = "SELECT * FROM user where birth between '".$y35."-01-01' and '".$y26."-12-31';";
				$data['age1'] = $this->db->query($sqlage3);
				$sqlage4 = "SELECT * FROM user where birth between '".$y50."-01-01' and '".$y36."-12-31';";
				$data['age1'] = $this->db->query($sqlage4);
				$sqlage5 = "SELECT * FROM user where birth between '".$y100."-01-01' and '".$y51."-12-31';";
				$data['age1'] = $this->db->query($sqlage5);

				//user sex
				$sqlsexma = "SELECT * FROM user WHERE sex = 'male' ";
				$data['male'] = $this->db->query($sqlsexma);
				$sqlsexfe = "SELECT * FROM user WHERE sex = 'female'";
				$data['female'] = $this->db->query($sqlsexfe);
				$sqlsexun = "SELECT * FROM user WHERE sex = null ";
				$data['unkn'] = $this->db->query($sqlsexun);

				//function recive promotion 
				$sqlMax = "SELECT MAX(info_id) AS maxinfo from info where store_id = '".$id."'; ";
				$maxinfo = $this->db->query($sqlMax);
				$infoid = $maxinfo->row_array();
				// $maxid = $infoid['maxinfo'];
				$maxid = "6";

				//count day of month
				// $d = cal_days_in_month(CAL_GREGORIAN,$m,$ye);

				$day1 = date("j");
				$day2 ;
				$mo1 = date("m");
				$yearre = date("Y");
				//part of age recive promotion 
				for ($i=1; $i <= $day1 ; $i++) { 
					if ($i < 10) {
						$day2 = "0".$i;
					}else{
						$day2 = $i;
					}
					$sqlreciveage1[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y17."-01-01' and '".$nowdate."' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
					$data['reage1d'.$i] = $this->db->query($sqlreciveage1[$i]);
					$sqlreciveage2[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y25."-01-01' and '".$y18."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
					$data['reage2d'.$i] = $this->db->query($sqlreciveage2[$i]);
					$sqlreciveage3[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y35."-01-01' and '".$y26."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
					$data['reage3d'.$i] = $this->db->query($sqlreciveage3[$i]);
					$sqlreciveage4[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y50."-01-01' and '".$y36."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
					$data['reage4d'.$i] = $this->db->query($sqlreciveage4[$i]);
					$sqlreciveage5[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y100."-01-01' and '".$y51."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
					$data['reage5d'.$i] = $this->db->query($sqlreciveage5[$i]);
				}
				//part of sex recive promotion
				for ($i=1; $i <= $day1 ; $i++) { 
					if ($i < 10) {
						$day2 = "0".$i;
					}else{
						$day2 = $i;
					}

					$sqlrecivesex1[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = 'male' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
					$data['resex1d'.$i] = $this->db->query($sqlrecivesex1[$i]);
					$sqlrecivesex2[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = 'female' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
					$data['resex2d'.$i] = $this->db->query($sqlrecivesex2[$i]);
					$sqlrecivesex3[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and sex = null and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
					$data['resex3d'.$i] = $this->db->query($sqlrecivesex3[$i]);
				}

				//part of sex recive promotion and go in to store
				for ($i=1; $i <= $day1 ; $i++) { 
					if ($i < 10) {
						$day2 = "0".$i;
					}else{
						$day2 = $i;
					}
					$sqlreciveinstoreage1[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y17."-01-01' and '".$nowdate."' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
					$data['reinage1d'.$i] = $this->db->query($sqlreciveinstoreage1[$i]);
					$sqlreciveinstoreage2[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y25."-01-01' and '".$y18."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
					$data['reinage2d'.$i] = $this->db->query($sqlreciveinstoreage2[$i]);
					$sqlreciveinstoreage3[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y35."-01-01' and '".$y26."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
					$data['reinage3d'.$i] = $this->db->query($sqlreciveinstoreage3[$i]);
					$sqlreciveinstoreage4[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y50."-01-01' and '".$y36."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
					$data['reinage4d'.$i] = $this->db->query($sqlreciveinstoreage4[$i]);
					$sqlreciveinstoreage5[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and birth between '".$y100."-01-01' and '".$y51."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
					$data['reinage5d'.$i] = $this->db->query($sqlreciveinstoreage5[$i]);
				}


				//part of sex recive promotion and go into store
				for ($i=1; $i <= $day1 ; $i++) { 
					if ($i < 10) {
						$day2 = "0".$i;
					}else{
						$day2 = $i;
					}

					$sqlreciveinsex1[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and sex = 'male' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
					$data['reinsex1d'.$i] = $this->db->query($sqlreciveinsex1[$i]);
					$sqlreciveinsex2[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and sex = 'female' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
					$data['reinsex2d'.$i] = $this->db->query($sqlreciveinsex2[$i]);
					$sqlreciveinsex3[$i] = "select DISTINCT * from info_log a inner join user b on a.fb_id = b.fb_id inner join sensoro_log c on b.fb_id = c.fb_id inner join sensoro d on c.sensoro_id = d.sensoro_id where info_id = '".$maxid."' and sex = null and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
					$data['reinsex3d'.$i] = $this->db->query($sqlreciveinsex3[$i]);
				}

				//part of age use qr code
				for ($i=1; $i <= $day1 ; $i++) { 
					if ($i < 10) {
						$day2 = "0".$i;
					}else{
						$day2 = $i;
					}
					$sqlqrage1[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y17."-01-01' and '".$nowdate."' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' ;";
					$data['qrage1d'.$i] = $this->db->query($sqlqrage1[$i]);
					$sqlqrage2[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y25."-01-01' and '".$y18."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
					$data['qrage2d'.$i] = $this->db->query($sqlqrage2[$i]);
					$sqlqrage3[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y35."-01-01' and '".$y26."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
					$data['qrage3d'.$i] = $this->db->query($sqlqrage3[$i]);
					$sqlqrage4[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y50."-01-01' and '".$y36."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
					$data['qrage4d'.$i] = $this->db->query($sqlqrage4[$i]);
					$sqlqrage5[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and birth between '".$y100."-01-01' and '".$y51."-12-31' and info_log_date like '".$yearre."-".$mo1."-".$day2."%';";
					$data['qrage5d'.$i] = $this->db->query($sqlqrage5[$i]);
				}


				//part of sex use qr code
				for ($i=1; $i <= $day1 ; $i++) { 
					if ($i < 10) {
						$day2 = "0".$i;
					}else{
						$day2 = $i;
					}

					$sqlqrsex1[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and sex = 'male' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
					$data['qrsex1d'.$i] = $this->db->query($sqlqrsex1[$i]);
					$sqlqrsex2[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and sex = 'female' and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
					$data['qrsex2d'.$i] = $this->db->query($sqlqrsex2[$i]);
					$sqlqrsex3[$i] = "select * from qr a inner join qr_log b on a.qr_id = b.qr_id inner join user c on b.fb_id = c.fb_id where info_id = '".$maxid."' and sex = null and info_log_date like '".$yearre."-".$mo1."-".$day2."%' and sensoro_type = '2' ;";
					$data['qrsex3d'.$i] = $this->db->query($sqlqrsex3[$i]);
				}
				//part of age recive promotion 
				// $sqlreciveage1[$i] = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y17."-01-01' and '".$nowdate."' ;";
				// $data['reage1'] = $this->db->query($sqlreciveage1);
				// $sqlreciveage2 = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y25."-01-01' and '".$y18."-12-31';";
				// $data['reage2'] = $this->db->query($sqlreciveage2);
				// $sqlreciveage3 = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y35."-01-01' and '".$y26."-12-31';";
				// $data['reage3'] = $this->db->query($sqlreciveage3);
				// $sqlreciveage4 = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y50."-01-01' and '".$y36."-12-31';";
				// $data['reage4'] = $this->db->query($sqlreciveage4);
				// $sqlreciveage5 = "select * from info_log join user on info_log.fb_id = user.fb_id where info_id = '".$maxid."' and birth between '".$y100."-01-01' and '".$y51."-12-31';";
				// $data['reage5'] = $this->db->query($sqlreciveage5);

				$this->load->view("statisticsowner",$data);
			// }else{
			// 	redirect("storeowner");
			// }
		}else{
			redirect("auth");
		}
	}

	
	public function repro($infoid){
		
	}


	public function ye14(){
		
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
		$sqlOwner11 = "SELECT * FROM owner WHERE owner_date like '".$y."-11%'";
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
		$sqlsen11 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-11%'";
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
		$data['pack4'] = $this->db->query($sqlpack4);
		$sqlpack3 = "SELECT * FROM store WHERE package_id = 3 and status_store_id = 1";
		$data['pack3'] = $this->db->query($sqlpack3);
		$sqlpack2 = "SELECT * FROM store WHERE package_id = 2 and status_store_id = 1";
		$data['pack2'] = $this->db->query($sqlpack2);
		$sqlpack1 = "SELECT * FROM store WHERE package_id = 1 and status_store_id = 1";
		$data['pack1'] = $this->db->query($sqlpack1);
		//end package

		//year
		$data['year'] = 2014;
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
		$sqlOwner11 = "SELECT * FROM owner WHERE owner_date like '".$y."-11%'";
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
		$sqlsen11 = "SELECT * FROM sensoro WHERE sensoro_date like '".$y."-11%'";
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
		$data['pack4'] = $this->db->query($sqlpack4);
		$sqlpack3 = "SELECT * FROM store WHERE package_id = 3 and status_store_id = 1";
		$data['pack3'] = $this->db->query($sqlpack3);
		$sqlpack2 = "SELECT * FROM store WHERE package_id = 2 and status_store_id = 1";
		$data['pack2'] = $this->db->query($sqlpack2);
		$sqlpack1 = "SELECT * FROM store WHERE package_id = 1 and status_store_id = 1";
		$data['pack1'] = $this->db->query($sqlpack1);
		//end package

		$data['year'] = 2015;

		// echo $data['pack1']->num_rows();
		$this->load->view("statistics",$data);
		
	}


}

?>