<?php
class form extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('product_model');
	}
	function index(){
		$this->load->view('form_view');
	}
}