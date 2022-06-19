<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class historyModel extends CI_Model {
		//Get data.
		public function get_data_berita(){
			$data = $this->db->get('newsfeed');
			return $data->result_array();
		}
		public function get_all_diskusi()
		{
			$this->db->select('*');
			$this->db->from('diskusi');
			$this->db->order_by('datetime','DESC');
			return $data = $this->db->get()->result_array();
		}
		public function get_all_pertanyaan()
		{
			$this->db->select('*');
			$this->db->from('diskusi');
			$condition = $this->session->userdata('userTrack');
			$this->db->where('namaPengguna',$condition);
			$this->db->order_by('datetime','DESC');
			return $data = $this->db->get()->result_array();
		}
		public function get_all_balasan()
		{
			$this->db->select('*');
			$this->db->from('balasan');
			$this->db->order_by('datetime','DESC');
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
		public function get_data_userKebutuhan(){
			$this->db->select('*');
			$this->db->from('kebutuhankalori');
			$this->db->join('pengguna','kebutuhankalori.id_user = pengguna.id_user');
			$condition = array('date' => date("Y/m/d"), 'namaPengguna' =>  $this->session->userdata('userTrack'));
			$this->db->where($condition);
			return $data = $this->db->get()->result_array();
		}
		public function get_total_kebutuhan(){
			$this->db->select('kalori, waktu');
			$this->db->from('pengguna');
			$this->db->join('jadwalkalori','jadwalkalori.id_user = pengguna.id_user');
			$this->db->join('asupan','asupan.id_asupan = jadwalkalori.id_asupan');
			$condition = array('date' => date("Y/m/d"), 'namaPengguna' =>  $this->session->userdata('userTrack'));
			$this->db->where($condition);
			return $data = $this->db->get()->result_array();
		}	

		//Create discussion.
		public function posting($data){
			$this->db->insert('diskusi',$data);	
			redirect('history');
		}

		//Reply discussion.
		public function insertReply($data){
			$this->db->insert('balasan',$data);	
			redirect('history');
		}

		//Insert daily asupan calorie.
		public function insertJadwal($data){
			$this->db->insert('jadwalkalori',$data);	
			// redirect('history');
		}

		//Insert today calorie.
		public function insertCal($data){
			$this->db->insert('kebutuhankalori',$data);	
			redirect('history');
		}
	}
?>
