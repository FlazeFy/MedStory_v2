<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class smartDoc extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('SmartDocModel');
			$this->load->model('accountModel');
		}
		public function index(){
			$data = [];
			$data['dataPenyakit']= $this->SmartDocModel->get_data_penyakit();
			$data['dataGejala']= $this->SmartDocModel->get_data_gejala();
			$data['dataRelasi']= $this->SmartDocModel->get_data_relasi();
			$data['dataObat']= $this->SmartDocModel->get_data_obat();
			$data['dataRelasiObat']= $this->SmartDocModel->get_data_relasiObat();
			$data['dataKMS']= $this->SmartDocModel->get_data_kms();
			$data['dataUser']= $this->accountModel->get_data_user();
			$this->load->view('smartDocPage', $data);
		}

		//Check ssymptomn in db.
		public function searchGejala()
		{
			$gejala = $this->input->post('gejala');

			$this->db->select('*');
			$this->db->from('gejala');
			$condition = array('nama_gejala' => $gejala);
			$this->db->where($condition);
			$penyakitCheck = $this->db->get()->result_array();
			if(count($penyakitCheck) >= 1){
				$this->session->set_userdata('gejala',$gejala);	
				redirect('smartDoc');
			}else{
				redirect('smartDoc');
			}
		}
		public function hitungKMS(){
			//Variable declaration.
			$jKelamin = $this->input->post('jKelaminAnak');
			$berat = $this->input->post('beratAnak');
			$tinggi = $this->input->post('tinggiAnak');
			$tglLahir = $this->input->post('tglLahirAnak');
			$ageMax = 61;
			$ageMin = 0;

			//Get age (month) from date picker and date now.
			$dateBorn = strtotime($tglLahir);
			$dateNow = strtotime(date("Y/m/d"));

			$yearBorn = date('Y', $dateBorn);
			$yearNow = date('Y', $dateNow);
			$monthBorn = date('m', $dateBorn);
			$monthNow = date('m', $dateNow);

			$age = (($yearNow - $yearBorn) * 12) + ($monthNow - $monthBorn);

			//Get ideal weight and height from gender.
			if ($age >= 0 && $age <= 12){
				//For age under a year.
				if ($age >= 1 && $age <= 2){
					if($jKelamin == "Pria"){
						//Height.
						if($tinggi <= 50.4){
							$hasilTinggi = "Tinggi Badan Kurang";
						} else if($tinggi > 50.4 && $tinggi <= 59.1){
							$hasilTinggi = "Tinggi Badan Normal";
						} else if($tinggi > 59.1){
							$hasilTinggi = "Tinggi Badan Lebih";
						}
						//Weight
						if($berat <= 3.4){
							$hasilBerat = "Berat Badan Kurang";
						} else if($berat > 3.4 && $berat <= 5.5){
							$hasilBerat = "Berat Badan Normal";
						} else if($berat > 5.5 ){
							$hasilBerat = "Berat Badan Lebih";
						}
					} else {
						//Height.
						if($tinggi <= 49.4){
							$hasilTinggi = "Tinggi Badan Kurang";
						} else if($tinggi > 49.4 && $tinggi <= 59.0){
							$hasilTinggi = "Tinggi Badan Normal";
						} else if($tinggi > 59.0){
							$hasilTinggi = "Tinggi Badan Lebih";
						}
						//Weight
						if($berat <= 3.3){
							$hasilBerat = "Berat Badan Kurang";
						} else if($berat > 3.3 && $berat <= 5.2){
							$hasilBerat = "Berat Badan Normal";
						} else if($berat > 5.2 ){
							$hasilBerat = "Berat Badan Lebih";
						}
					}
				}
				else if ($age >= 3 && $age <= 4){
					if($jKelamin == "Pria"){
						//Height.
						if($tinggi <= 55.7){
							$hasilTinggi = "Tinggi Badan Kurang";
						} else if($tinggi > 55.7 && $tinggi <= 64.6){
							$hasilTinggi = "Tinggi Badan Normal";
						} else if($tinggi > 64.6){
							$hasilTinggi = "Tinggi Badan Lebih";
						}
						//Weight
						if($berat <= 4.8){
							$hasilBerat = "Berat Badan Kurang";
						} else if($berat > 4.8 && $berat <= 7.1){
							$hasilBerat = "Berat Badan Normal";
						} else if($berat > 7.1 ){
							$hasilBerat = "Berat Badan Lebih";
						}
					} else {
						//Height.
						if($tinggi <= 54.4){
							$hasilTinggi = "Tinggi Badan Kurang";
						} else if($tinggi > 54.4 && $tinggi <= 61.5){
							$hasilTinggi = "Tinggi Badan Normal";
						} else if($tinggi > 61.5){
							$hasilTinggi = "Tinggi Badan Lebih";
						}
						//Weight
						if($berat <= 4.4){
							$hasilBerat = "Berat Badan Kurang";
						} else if($berat > 4.4 && $berat <= 6.7){
							$hasilBerat = "Berat Badan Normal";
						} else if($berat > 6.7 ){
							$hasilBerat = "Berat Badan Lebih";
						}
					}
				} else if ($age >= 5 && $age <= 6){
					if($jKelamin == "Pria"){
						//Height.
						if($tinggi <= 60.4){
							$hasilTinggi = "Tinggi Badan Kurang";
						} else if($tinggi > 60.4 && $tinggi <= 69.2){
							$hasilTinggi = "Tinggi Badan Normal";
						} else if($tinggi > 69.2){
							$hasilTinggi = "Tinggi Badan Lebih";
						}
						//Weight
						if($berat <= 5.8){
							$hasilBerat = "Berat Badan Kurang";
						} else if($berat > 5.8 && $berat <= 8.4){
							$hasilBerat = "Berat Badan Normal";
						} else if($berat > 8.4 ){
							$hasilBerat = "Berat Badan Lebih";
						}
					} else {
						//Height.
						if($tinggi <= 58.9){
							$hasilTinggi = "Tinggi Badan Kurang";
						} else if($tinggi > 58.9 && $tinggi <= 69.1){
							$hasilTinggi = "Tinggi Badan Normal";
						} else if($tinggi > 69.1){
							$hasilTinggi = "Tinggi Badan Lebih";
						}
						//Weight
						if($berat <= 5.3){
							$hasilBerat = "Berat Badan Kurang";
						} else if($berat > 5.3 && $berat <= 7.9){
							$hasilBerat = "Berat Badan Normal";
						} else if($berat > 7.9 ){
							$hasilBerat = "Berat Badan Lebih";
						}
					}
				} else if ($age >= 7 && $age <= 8){
					if($jKelamin == "Pria"){
						//Height.
						if($tinggi <= 64.2){
							$hasilTinggi = "Tinggi Badan Kurang";
						} else if($tinggi > 64.2 && $tinggi <= 73.2){
							$hasilTinggi = "Tinggi Badan Normal";
						} else if($tinggi > 73.2){
							$hasilTinggi = "Tinggi Badan Lebih";
						}
						//Weight
						if($berat <= 6.8){
							$hasilBerat = "Berat Badan Kurang";
						} else if($berat > 6.8 && $berat <= 9.5){
							$hasilBerat = "Berat Badan Normal";
						} else if($berat > 9.5 ){
							$hasilBerat = "Berat Badan Lebih";
						}
					} else {
						//Height.
						if($tinggi <= 62.6){
							$hasilTinggi = "Tinggi Badan Kurang";
						} else if($tinggi > 62.6 && $tinggi <= 72.8){
							$hasilTinggi = "Tinggi Badan Normal";
						} else if($tinggi > 72.8){
							$hasilTinggi = "Tinggi Badan Lebih";
						}
						//Weight
						if($berat <= 6.2){
							$hasilBerat = "Berat Badan Kurang";
						} else if($berat > 6.2 && $berat <= 9.0){
							$hasilBerat = "Berat Badan Normal";
						} else if($berat > 9.0 ){
							$hasilBerat = "Berat Badan Lebih";
						}
					}
				}	else if ($age >= 9 && $age <= 12){
					if($jKelamin == "Pria"){
						//Height.
						if($tinggi <= 67.4){
							$hasilTinggi = "Tinggi Badan Kurang";
						} else if($tinggi > 67.4 && $tinggi <= 78.2){
							$hasilTinggi = "Tinggi Badan Normal";
						} else if($tinggi > 78.2){
							$hasilTinggi = "Tinggi Badan Lebih";
						}
						//Weight
						if($berat <= 7.6){
							$hasilBerat = "Berat Badan Kurang";
						} else if($berat > 7.6 && $berat <= 10.6){
							$hasilBerat = "Berat Badan Normal";
						} else if($berat > 10.6 ){
							$hasilBerat = "Berat Badan Lebih";
						}
					} else {
						//Height.
						if($tinggi <= 65.5){
							$hasilTinggi = "Tinggi Badan Kurang";
						} else if($tinggi > 65.5 && $tinggi <= 77.6){
							$hasilTinggi = "Tinggi Badan Normal";
						} else if($tinggi > 77.6){
							$hasilTinggi = "Tinggi Badan Lebih";
						}
						//Weight
						if($berat <= 6.9){
							$hasilBerat = "Berat Badan Kurang";
						} else if($berat > 6.9 && $berat <= 10.2){
							$hasilBerat = "Berat Badan Normal";
						} else if($berat > 10.2 ){
							$hasilBerat = "Berat Badan Lebih";
						}
					}
				}
			} else if($age > 12 && $age <= 24){
				//for age 1-2 year.
				if($jKelamin == "Pria"){
					//Height.
					if($tinggi <= 75.7){
						$hasilTinggi = "Tinggi Badan Kurang";
					} else if($tinggi > 75.7 && $tinggi <= 87.8){
						$hasilTinggi = "Tinggi Badan Normal";
					} else if($tinggi > 87.8){
						$hasilTinggi = "Tinggi Badan Lebih";
					}
					//Weight
					if($berat <= 9.6){
						$hasilBerat = "Berat Badan Kurang";
					} else if($berat > 9.6 && $berat <= 12.3){
						$hasilBerat = "Berat Badan Normal";
					} else if($berat > 12.3 ){
						$hasilBerat = "Berat Badan Lebih";
					}
				} else {
					//Height.
					if($tinggi <= 74){
						$hasilTinggi = "Tinggi Badan Kurang";
					} else if($tinggi > 74 && $tinggi <= 86){
						$hasilTinggi = "Tinggi Badan Normal";
					} else if($tinggi > 86){
						$hasilTinggi = "Tinggi Badan Lebih";
					}
					//Weight
					if($berat <= 8.9){
						$hasilBerat = "Berat Badan Kurang";
					} else if($berat > 8.9 && $berat <= 11.5){
						$hasilBerat = "Berat Badan Normal";
					} else if($berat > 11.5 ){
						$hasilBerat = "Berat Badan Lebih";
					}
				}
			} else if($age > 24 && $age <= 36){
				//for age 2-3 year.
				if($jKelamin == "Pria"){
					//Height.
					if($tinggi <= 87.8){
						$hasilTinggi = "Tinggi Badan Kurang";
					} else if($tinggi > 87.8 && $tinggi <= 96.1){
						$hasilTinggi = "Tinggi Badan Normal";
					} else if($tinggi > 96.1){
						$hasilTinggi = "Tinggi Badan Lebih";
					}
					//Weight
					if($berat <= 12.2){
						$hasilBerat = "Berat Badan Kurang";
					} else if($berat > 12.2 && $berat <= 14.3){
						$hasilBerat = "Berat Badan Normal";
					} else if($berat > 14.3 ){
						$hasilBerat = "Berat Badan Lebih";
					}
				} else {
					//Height.
					if($tinggi <= 85.7){
						$hasilTinggi = "Tinggi Badan Kurang";
					} else if($tinggi > 85.7 && $tinggi <= 95.1){
						$hasilTinggi = "Tinggi Badan Normal";
					} else if($tinggi > 95.1){
						$hasilTinggi = "Tinggi Badan Lebih";
					}
					//Weight
					if($berat <= 11.5){
						$hasilBerat = "Berat Badan Kurang";
					} else if($berat > 11.5 && $berat <= 13.9){
						$hasilBerat = "Berat Badan Normal";
					} else if($berat > 13.9 ){
						$hasilBerat = "Berat Badan Lebih";
					}
				}
			} else if($age > 36 && $age <= 48){
				//for age 3-4 year.
				if($jKelamin == "Pria"){
					//Height.
					if($tinggi <= 96.1){
						$hasilTinggi = "Tinggi Badan Kurang";
					} else if($tinggi > 96.1 && $tinggi <= 103.3){
						$hasilTinggi = "Tinggi Badan Normal";
					} else if($tinggi > 103.3){
						$hasilTinggi = "Tinggi Badan Lebih";
					}
					//Weight
					if($berat <= 14.3){
						$hasilBerat = "Berat Badan Kurang";
					} else if($berat > 14.3 && $berat <= 16.3){
						$hasilBerat = "Berat Badan Normal";
					} else if($berat > 16.3 ){
						$hasilBerat = "Berat Badan Lebih";
					}
				} else {
					//Height.
					if($tinggi <= 95.1){
						$hasilTinggi = "Tinggi Badan Kurang";
					} else if($tinggi > 95.1 && $tinggi <= 102.7){
						$hasilTinggi = "Tinggi Badan Normal";
					} else if($tinggi > 102.7){
						$hasilTinggi = "Tinggi Badan Lebih";
					}
					//Weight
					if($berat <= 13.9){
						$hasilBerat = "Berat Badan Kurang";
					} else if($berat > 13.9 && $berat <= 16.1){
						$hasilBerat = "Berat Badan Normal";
					} else if($berat > 16.1 ){
						$hasilBerat = "Berat Badan Lebih";
					}
				}
			} else if($age > 48 && $age <= 60){
				//for age 4-5 year.
				if($jKelamin == "Pria"){
					//Height.
					if($tinggi <= 103.3){
						$hasilTinggi = "Tinggi Badan Kurang";
					} else if($tinggi > 103.3 && $tinggi <= 110.3){
						$hasilTinggi = "Tinggi Badan Normal";
					} else if($tinggi > 110.0){
						$hasilTinggi = "Tinggi Badan Lebih";
					}
					//Weight
					if($berat <= 16.3){
						$hasilBerat = "Berat Badan Kurang";
					} else if($berat > 16.3 && $berat <= 18.3){
						$hasilBerat = "Berat Badan Normal";
					} else if($berat > 18.3 ){
						$hasilBerat = "Berat Badan Lebih";
					}
				} else {
					//Height.
					if($tinggi <= 102.7){
						$hasilTinggi = "Tinggi Badan Kurang";
					} else if($tinggi > 102.7 && $tinggi <= 109.4){
						$hasilTinggi = "Tinggi Badan Normal";
					} else if($tinggi > 109.4){
						$hasilTinggi = "Tinggi Badan Lebih";
					}
					//Weight
					if($berat <= 16.1){
						$hasilBerat = "Berat Badan Kurang";
					} else if($berat > 16.1 && $berat <= 18.2){
						$hasilBerat = "Berat Badan Normal";
					} else if($berat > 18.2 ){
						$hasilBerat = "Berat Badan Lebih";
					}
				}
			}

			//Database initialization.
			$data = array(
				'id_kms' => 'NULL',
				'id_user' => $this->input->post('id_user'),
				'namaAnak' => $this->input->post('namaAnak'),
				'jenisKelamin' => $jKelamin,
				'berat' => $berat,
				'tinggi' => $tinggi,
				'tanggalLahirA' => $this->input->post('tglLahirAnak'),
				'datecreated' => date("Y/m/d"),
				'hasilBerat' => $hasilBerat,
				'hasilTinggi' => $hasilTinggi,
			);	

			//Insert database condition.
			if($age < $ageMax && $age >= $ageMin){
				$this->SmartDocModel->insertKms($data, 'kms');
				//Modal data initialization.
				$data['kmsDataModal'] = $this->input->post('namaAnak');
				$this->session->set_userdata('jKelaminKMSTrack',$jKelamin);
				$this->session->set_userdata('usiaKMSTrack', $age);
				$this->session->set_userdata('beratKMSTrack', $tinggi." Cm (".$hasilBerat.")");
				$this->session->set_userdata('tinggiKMSTrack', $berat." Kg (".$hasilTinggi.")");

				$this->index();
				$this->load->view('smartDocPage', $data);
			} else {
				redirect('smartDoc');
			}	
		}
	}
?>
