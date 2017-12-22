<?php
	class Transport extends CI_Controller{
		public function index(){
		        $data['title'] = 'Naujausi transporto įrašai';

		        $data['classes'] = $this->class_model->get_classes();

		        $data['transports'] = $this->transport_model->get_transports();


		        $this->load->view('templates/header');
		        $this->load->view('transport/index', $data);
		        $this->load->view('templates/footer');
		}

		public function view($slug = NULL){
			$data['transports'] = $this->transport_model->get_transports($slug);

			$transport_id = $data['transports']['t_id'];

			if(empty($data['transports'])){
				show_404();
			}

			$data['title'] = $data['transports']['t_licenceplate'];

		        $this->load->view('templates/header');
		        $this->load->view('transport/view', $data);
		        $this->load->view('templates/footer');
		}

		public function create(){
			// check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = 'Kurti transportą';

			$data['classes'] = $this->transport_model->get_classes();

			$this->form_validation->set_rules('t_licenceplate','t_licenceplate', 'required');
			$this->form_validation->set_rules('t_information','t_information', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
		        $this->load->view('transport/create', $data);
		        $this->load->view('templates/footer');			
			} 
				else{
					//Upload image
				$config['upload_path'] = './assets/images/transports';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$transport_image = 'noimage.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$transport_image = $_FILES['userfile']['name'];
				}

					$this->transport_model->create_transports($transport_image);
					//sesija
					$this->session->set_flashdata('post_created','Įrašas sukurtas!');
					redirect('transport');
			}
	
		}


		public function delete($id){

			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}			
			$this->transport_model->delete_transport($id);
			$this->session->set_flashdata('post_deleted','Įrašas pašalintas!');
			redirect('transport');
		}

		public function edit($slug){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			
			$data['transports'] = $this->transport_model->get_transports($slug);


			$data['classes'] = $this->transport_model->get_classes();

			if(empty($data['transports'])){
				show_404();
			}

			$data['title'] = 'Įrašo redagavimas';

		        $this->load->view('templates/header');
		        $this->load->view('transport/edit', $data);
		        $this->load->view('templates/footer');
		}

		public function update(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->transport_model->update_transports();
			$this->session->set_flashdata('post_updated','Įrašas atnaujintas!');
			redirect('transport');
		}
	}
