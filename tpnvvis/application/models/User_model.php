<?php
	class User_model extends CI_Model{

		public function get_users(){
			$this->db->order_by('id');
			$query = $this->db->get('users');
			return $query->result_array();
		}

		public function get_user($id){
			$query = $this->db->get_where('users', array('id' => $id));
			return $query->row();
		}




		public function register($enc_password){
			// User data array
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'is_admin' => '0',
                'password' => $enc_password
			);

			// Insert user
			return $this->db->insert('users', $data);
		}

		public function update_user($enc_password){
			// User data array
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'is_admin' => '0',
                'password' => $enc_password
			);

			// Insert user
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('users', $data);
		}



		// Log user in
		public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				return $result->row(0)->id;
			} else {
				return false;
			}
		}

		// Check username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('users', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
	}