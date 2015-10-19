<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper('url');
	}
	public function index() {
		$this->data ['view'] = 'index';
		$this->load->view ( $this->config->item ( 'app_layout' ).'template', $this->data );
	}
}