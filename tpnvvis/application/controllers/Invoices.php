<?php
	class Invoices extends CI_Controller{
		public function index(){
		        $data['title'] = 'Naujausi sąskaitų įrašai';

		        $data['invoices'] = $this->invoice_model->get_invoices();


		        $this->load->view('templates/header');
		        $this->load->view('invoices/index', $data);
		        $this->load->view('templates/footer');
		}


		public function create(){
			$data['title'] = 'Sukurkite sąskaitą';
			$data['invoices'] = $this->invoice_model->get_invoices();
			$this->form_validation->set_rules('user_id', 'user_id', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('invoices/create', $data);
				$this->load->view('templates/footer');
			} else{
				$this->invoice_model->create_invoice();
				$this->session->set_flashdata('category_created','Kategorija sukurta!');
				redirect('invoices');

			}
		}

		public function get_invoices_by_user($user_id){
			$this->db->order_by('invoices.i_id','DESC');
			$this->db->join('users','users.id = invoices.user_id');
			$query = $this->db->get_where('invoices', array('user_id' => $user_id));
			return $query->result_array();
		}

	}
