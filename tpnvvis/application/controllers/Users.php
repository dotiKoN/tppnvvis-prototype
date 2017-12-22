<?php
	class Users extends CI_Controller{
		// Register user

		public function index(){
			$data['title'] = 'Vartotojų sąrašas';

			$data['users'] = $this->user_model->get_users();

				$this->load->view('templates/header');
				$this->load->view('users/index', $data);
				$this->load->view('templates/footer');
		}

		public function invoices($id){
			$data['title'] = $this->user_model->get_user($id)->id;

			$data['users'] = $this->user_model->get_users();
			$data['invoices'] = $this->invoice_model->get_invoices_by_user($id);

				$this->load->view('templates/header');
				$this->load->view('invoices/index', $data);
				$this->load->view('templates/footer');
		}


		public function register(){
			$data['title'] = 'Registracija';

			$this->form_validation->set_rules('name', 'Name', 'required', 
				array('required' => 'Būtina įvesti vardą'));
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists', 
				array('required' => 'Būtina įvesti prisijungimo vardą'));
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				// Set message
				$this->session->set_flashdata('user_registered', 'Paskyra sukurta, galite prisijungti');

				redirect('users/login');
			}
		}

		public function edit($username){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			
			$data['users'] = $this->user_model->get_users($username);

			if(empty($data['users'])){
				show_404();
			}

			$data['title'] = '';

		        $this->load->view('templates/header');
		        $this->load->view('users/edit', $data);
		        $this->load->view('templates/footer');
		}
		public function update(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->user_model->update_user();
			$this->session->set_flashdata('post_updated','Įrašas atnaujintas!');
			redirect('users');
		}




		//login user

		public function login(){
			$data['title'] = 'Prisijungimas';

			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');


			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else{
				//get username

				$username = $this->input->post('username');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				//login user
				$user_id = $this->user_model->login($username, $password);

				if($user_id){
					// create session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);
					$this->session->set_userdata($user_data);

					//set message
					$this->session->set_flashdata('user_loggedin',' Prisijungimas pavyko');

					redirect('posts');
				} else{
					// set message
					$this->session->set_flashdata('login_failed','Neteisingi duomenys');

					redirect('users/login');					
				}
			}

		}

		//log out
		public function logout(){
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');
					//set message
			$this->session->set_flashdata('user_loggedout','Jūs atsijungėte');
			redirect('users/login');
		}

		// check if username exists
		public function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists', 'Toks vartotojas jau egzistuoja!');
			if($this->user_model->check_username_exists($username)){
				return true;
			} else{
				return false;
			}
		}
		// check if email exists
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'Toks el.paštas jau egzistuoja!');
			if($this->user_model->check_email_exists($email)){
				return true;
			} else{
				return false;
			}
		}

	}