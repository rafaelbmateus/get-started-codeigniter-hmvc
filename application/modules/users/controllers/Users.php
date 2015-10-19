<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Users extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
		date_default_timezone_set ( 'America/Sao_Paulo' );
		$this->load->model ( 'User' );
	}
	public function index() {
		$this->data ['users'] = $this->User->get ();
		$this->data ['view'] = 'index';
		$this->load->view ( $this->config->item ( 'app_layout' ) . 'template', $this->data );
	}
	public function show() {
		$id = $this->uri->segment ( 3 );
		if ($id) {
			$this->data ['user'] = $this->User->get ( $id );
			$this->load->view ( 'show', $this->data );
		} else {
			redirect ( base_url () . 'users' );
		}
	}
	public function create() {
		$this->data ['view'] = 'new';
		$this->load->view ( $this->config->item ( 'app_layout' ) . 'template', $this->data );
	}
	public function add() {
		$this->load->library ( 'form_validation' );
		$this->form_validation->set_rules ( 'user_name', 'User name', 'trim|required' );
		if ($this->form_validation->run () == false) {
			$this->session->set_flashdata ( 'error', (validation_errors () ? validation_errors () : false) );
		} else {
			$name = $this->input->post ( 'user_name', TRUE );
			
			if ($this->User->add ( $name, date ( "Y-m-d H:i:s" ) )) {
				$this->session->set_flashdata ( 'success', 'Successfully registered record!' );
			} else {
				$this->session->set_flashdata ( 'error', 'Error registering the record.' );
			}
		}
		redirect ( base_url () . 'users' );
	}
	public function edit() {
		$id = $this->uri->segment ( 3 );
		if ($id) {
			$this->data ['user'] = $this->User->get ( $id );
			$this->data ['view'] = 'edit';
			$this->load->view ( $this->config->item ( 'app_layout' ) . 'template', $this->data );
		} else {
			redirect ( base_url () . 'users' );
		}
	}
	public function update() {
		$this->load->library ( 'form_validation' );
		$this->form_validation->set_rules ( 'user_name', 'User name', 'trim|required' );
		if ($this->form_validation->run () == false) {
			$this->session->set_flashdata ( 'error', (validation_errors () ? validation_errors () : false) );
		} else {
			$user_id = $this->input->post ( 'user_id', TRUE );
			$name = $this->input->post ( 'user_name', TRUE );
			
			if ($this->User->update ( $user_id, $name, date ( "Y-m-d H:i:s" ) )) {
				$this->session->set_flashdata ( 'success', 'Successfully updated record!' );
			} else {
				$this->session->set_flashdata ( 'error', 'Error updating the record' );
			}
		}
		redirect ( base_url () . 'users' );
	}
	public function delete() {
		$id = $this->input->post ( 'id', TRUE );
		if ($id) {
			if ($this->User->delete ( $id )) {
				$this->session->set_flashdata ( 'success', 'Successfully deleted record!' );
			} else {
				$this->session->set_flashdata ( 'error', 'Error deleting the record.' );
			}
		}
		redirect ( base_url () . 'users' );
	}
}