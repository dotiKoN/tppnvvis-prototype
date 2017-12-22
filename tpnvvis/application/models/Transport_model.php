<?php
	class Transport_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_transports($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('t_id','DESC');
				$this->db->join('classes','classes.c_id = transports.class_id');
				$query = $this->db->get('transports');
				return $query->result_array();
			}

			$query = $this->db->get_where('transports', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_transports($transport_image){
			$slug = url_title($this->input->post('t_licenceplate'));

			$data = array(
				't_licenceplate' => $this->input->post('t_licenceplate'),
				'slug' => $slug,
				't_information' => $this->input->post('t_information'),
				't_make' => $this->input->post('t_make'),
				't_model' => $this->input->post('t_model'),
				't_year' => $this->input->post('t_year'),
				't_fueltype' => $this->input->post('t_fueltype'),
				't_location' => $this->input->post('t_location'),
				't_availability' => $this->input->post('t_availability'),
				't_color' => $this->input->post('t_color'),
				'class_id' => $this->input->post('class_id'),
				't_image' => $transport_image
				);

			return $this->db->insert('transports', $data);
		}

		public function update_transports(){
			$slug = url_title($this->input->post('t_licenceplate'));

			$data = array(
				't_id' => $this->input->post('t_id'),
				't_licenceplate' => $this->input->post('t_licenceplate'),
				'slug' => $slug,
				't_information' => $this->input->post('t_information'),
				't_make' => $this->input->post('t_make'),
				't_model' => $this->input->post('t_model'),
				't_year' => $this->input->post('t_year'),
				't_fueltype' => $this->input->post('t_fueltype'),
				't_location' => $this->input->post('t_location'),
				't_availability' => $this->input->post('t_availability'),
				't_color' => $this->input->post('t_color'),
				'class_id' => $this->input->post('class_id'),
				);

			$this->db->where('t_id', $this->input->post('t_id'));
			return $this->db->update('transports', $data);

		}


		public function delete_transport($id){
			$this->db->where('t_id', $id);
			$this->db->delete('transports');
			return true;
		}


		public function get_classes(){
			$this->db->order_by('c_title');
			$query = $this->db->get('classes');
			return $query->result_array();
		}

		public function get_transport_by_class($class_id){
			$this->db->order_by('transports.t_id','DESC');
			$this->db->join('classes','classes.c_id = transports.class_id');
			$query = $this->db->get_where('transports', array('class_id' => $class_id));
			return $query->result_array();			
		}


	}