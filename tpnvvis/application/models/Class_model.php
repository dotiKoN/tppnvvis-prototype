<?php
	class Class_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_classes(){
			$this->db->order_by('c_title');
			$query = $this->db->get('classes');
			return $query->result_array();
		}

		public function create_class(){

			$slug = url_title($this->input->post('c_title'));

			$data = array(
				'c_id' => $this->input->post('c_id'),
				'c_title' => $this->input->post('c_title'),
				'slug' => $slug,
				'c_ratehour' => $this->input->post('c_ratehour'),
				'c_rateday' => $this->input->post('c_rateday'),
				'c_rateweek' => $this->input->post('c_rateweek'),
				'c_ratemonth' => $this->input->post('c_ratemonth')
				);

			return $this->db->insert('classes', $data);
		}

		public function update_class(){
			
			$slug = url_title($this->input->post('c_title'));

			$data = array(
				'c_id' => $this->input->post('c_id'),
				'c_title' => $this->input->post('c_title'),
				'slug' => $slug,
				'c_ratehour' => $this->input->post('c_ratehour'),
				'c_rateday' => $this->input->post('c_rateday'),
				'c_rateweek' => $this->input->post('c_rateweek'),
				'c_ratemonth' => $this->input->post('c_ratemonth')
				);

			$this->db->where('c_id', $this->input->post('c_id'));
			return $this->db->update('classes', $data);
		}



		public function get_class($c_id){
			$query = $this->db->get_where('classes', array('c_id' => $c_id));
			return $query->row();
		}
	}