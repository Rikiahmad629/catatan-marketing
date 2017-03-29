<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_template extends CI_Controller {
	public $username="Riki Ahmad Fadilah";
	public function index()
	{
		$this->load->view('login');
	}
	public function index_admin()
	{
		global $username;
		$content=$this->load->view('index_admin',"",true);
		$data= array(
			'username'=>$username,
			'content'=>$content
		);
		$this->load->view($data,'V_template');
	}
}
