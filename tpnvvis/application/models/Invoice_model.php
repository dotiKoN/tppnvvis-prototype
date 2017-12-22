<?php
	class Invoice_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_invoices($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('i_id','DESC');
				$query = $this->db->get('invoices');
				return $query->result_array();
			}

			$query = $this->db->get_where('invoices', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_invoice(){
			$slug = url_title($this->input->post('i_id'));

			$data = array(
				'i_id' => $this->input->post('i_id'),
				'user_id' => $this->input->post('user_id'),
				'slug' => $slug,
				'transport_id' => $this->input->post('transport_id'),
				'class_id' => $this->input->post('class_id'),
				'i_total' => $this->input->post('i_total'),
				'i_startdate' => $this->input->post('i_startdate'),
				'i_enddate' => $this->input->post('i_enddate'),
				'i_status' => '1'
				);

			return $this->db->insert('invoices', $data);
		}
	}
