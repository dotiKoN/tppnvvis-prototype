<?php
	class Classes extends CI_Controller{

		public function index(){
			$data['title'] = 'Klasės';

			$data['classes'] = $this->class_model->get_classes();

				$this->load->view('templates/header');
				$this->load->view('classes/index', $data);
				$this->load->view('templates/footer');
		}
		public function transport($id){
			$data['title'] = $this->class_model->get_class($id)->c_title;

			$data['classes'] = $this->class_model->get_classes();
			$data['transports'] = $this->transport_model->get_transport_by_class($id);

				$this->load->view('templates/header');
				$this->load->view('transport/index', $data);
				$this->load->view('templates/footer');
		}

		public function create(){
			$data['title'] = 'Sukurkite klasę';
			$data['class'] = $this->transport_model->get_classes();
			$this->form_validation->set_rules('c_title', 'c_title', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('classes/create', $data);
				$this->load->view('templates/footer');
			} else{
				$this->class_model->create_class();
				$this->session->set_flashdata('category_created','Kategorija sukurta!');
				redirect('classes');

			}
		}

		public function edit($slug){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['classes'] = $this->class_model->get_classes($slug);

			if(empty($data['classes'])){
				show_404();
			}

			$data['title'] = 'Įrašo redagavimas';

		        $this->load->view('templates/header');
		        $this->load->view('classes/edit', $data);
		        $this->load->view('templates/footer');
		}

		public function update(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->class_model->update_class();
			$this->session->set_flashdata('post_updated','Įrašas atnaujintas!');
			redirect('classes');
		}

	}