<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class DataKuModel extends CI_Model {
		public function get_total_kebutuhan(){
			$this->db->select('asupan.kalori, jadwalkalori.waktu, jadwalkalori.date');
			$this->db->from('pengguna');
			$this->db->join('jadwalkalori','jadwalkalori.id_user = pengguna.id_user');
			$this->db->join('asupan','asupan.id_asupan = jadwalkalori.id_asupan');
			$condition = array('namaPengguna' =>  $this->session->userdata('userTrack'));
			$this->db->where($condition);
			return $data = $this->db->get()->result_array();
		}
		public function get_total_kebutuhan2(){
			$this->db->select('kalori, waktu');
			$this->db->from('pengguna');
			$this->db->join('jadwalkalori','jadwalkalori.id_user = pengguna.id_user');
			$this->db->join('asupan','asupan.id_asupan = jadwalkalori.id_asupan');
			$condition = array('date' => date("Y/m/d"), 'namaPengguna' =>  $this->session->userdata('userTrack'));
			$this->db->where($condition);
			return $data = $this->db->get()->result_array();
		}	
		public function get_total_asupan(){
			$this->db->select('asupan.id_asupan, asupan.nama, COUNT(jadwalkalori.id_asupan) as jumlah');
			$this->db->from('pengguna');
			$this->db->join('jadwalkalori','jadwalkalori.id_user = pengguna.id_user');
			$this->db->join('asupan','asupan.id_asupan = jadwalkalori.id_asupan');
			$condition = array('namaPengguna' =>  $this->session->userdata('userTrack'));
			$this->db->where($condition);
			$this->db->group_by('id_asupan');
			$this->db->order_by('jumlah','DESC');
			return $data = $this->db->get()->result_array();
		}
		public function get_data_asupan(){
			$data = $this->db->get('asupan');
			return $data->result_array();
		}
		public function get_data_kebutuhan(){
			$data = $this->db->get('kebutuhankalori');
			return $data->result_array();
		}
		public function get_data_jadwal(){
			$data = $this->db->get('jadwalkalori');
			return $data->result_array();
		}	
		public function insertJadwal($data){
			$this->db->insert('jadwalkalori',$data);	
			//redirect('dataKu');
		}
		public function insertCal($data){
			$this->db->insert('kebutuhankalori',$data);	
			redirect('dataKu');
		}
		public function refresh(){
			redirect('dataKu');
		}
	}
?>
