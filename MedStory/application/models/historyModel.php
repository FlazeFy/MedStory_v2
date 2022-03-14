<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class historyModel extends CI_Model {
		//News Feed
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
		public function posting($data){
			$this->db->insert('diskusi',$data);	
			redirect('history');
		}
		public function insertReply($data){
			$this->db->insert('balasan',$data);	
			redirect('history');
		}
		public function get_all_balasan()
		{
			$this->db->select('*');
			$this->db->from('balasan');
			$this->db->order_by('datetime','DESC');
			return $data = $this->db->get()->result_array();
		}
	}
?>
