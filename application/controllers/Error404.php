<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}
	
	public function index()
	{
		$profile=$this->fetch->getWebProfile();
		$this->load->view('header',['web'=>$profile , 'title'=>'Error ! 404 page not found.']);
		$this->load->view('errors/html/custom_404');
		$this->load->view('footer');
	}
}
