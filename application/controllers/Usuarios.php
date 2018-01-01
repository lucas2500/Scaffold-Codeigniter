<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Usuarios Controller.
 */
class Usuarios extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Usuarios_model');
		

	}

	# GET /usuarios
	function index() {
		$data['usuarios'] = $this->Usuarios_model->find();
		$data['content'] = '/usuarios/index';
		$this->load->view('/includes/template', $data);
	}

	# GET /usuarios/create
	function create() {
		$data['content'] = '/usuarios/create';
		$this->load->view('/includes/template', $data);
	}

	# GET /usuarios/edit/1
	function edit() {
		$id = $this->uri->segment(3);
		$data['usuarios'] = $this->Usuarios_model->find($id);
		$data['content'] = '/usuarios/create';
		$this->load->view('/includes/template', $data);
	}

	# GET /usuarios/destroy/1
	function destroy() {
		$id = $this->uri->segment(3);
		$data['usuarios'] = $this->Usuarios_model->destroy($id);
		redirect('/usuarios/index', 'refresh');
	}

	# POST /usuarios/save
	function save() {
		
		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('idade', 'Idade', 'required');

		if ($this->form_validation->run()) {

			$data[] = array();
			$data['id'] = $this->input->post('id', TRUE);
			$data['nome'] = $this->input->post('nome', TRUE);
			$data['email'] = $this->input->post('email', TRUE);
			$data['idade'] = $this->input->post('idade', TRUE);
			$this->Usuarios_model->save($data);
			redirect('/usuarios/index', 'refresh');
		}
		$data['usuarios'] =	$this->rebuild();
		$data['content'] = '/usuarios/create';
		$this->load->view('/includes/template', $data);
	}

	function rebuild() {
		$object = new Usuarios_model();
		$object->id = $this->input->post('id', TRUE);
		$object->nome = $this->input->post('nome', TRUE);
		$object->email = $this->input->post('email', TRUE);
		$object->idade = $this->input->post('idade', TRUE);
		return $object;
	}
}

?>
