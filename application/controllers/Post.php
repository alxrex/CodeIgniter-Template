<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			$this->load->model('posts_model');
	}

	public function index()
	{
		$this->getAll();
	}

	
	// TODO: create a form
	public function create() {

		$data = array();

 		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Titulo', 'required');
		$this->form_validation->set_rules('fecha_publicacion', 'Fecha', 'required');
		$this->form_validation->set_rules('contenido', 'Contenido', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status'] = 0;
			
			$this->load->view('template/header');
			$this->load->view('post/create',$data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->posts_model->insert();

			$data['status'] = 1;
			$data['message'] = 'Success!';
			$this->load->view('template/header');
			$this->load->view('post/create',$data);
			$this->load->view('template/footer');
		}
	}

	public function get() {

	}

	public function getAll() {
		$data['query'] = $this->posts_model->getAll();

		$this->load->view('template/header');
		$this->load->view('post/index',$data);
		$this->load->view('template/footer');
	}

	public function update() {

	}

	public function delete() {
		
	}
}
