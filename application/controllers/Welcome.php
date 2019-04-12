<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model(array('UserModel'));
	}
	public function index()
	{
		$result = $this->UserModel->getUsers()->result();
		$this->load->view("welcome_message",$result);
	}

	public function adduser(){
		$nama = $this->input->post("name");
		$email = $this->input->post("email");

		$data = array(
			"Name" 	=> $nama,
			"Email"	=> $email
		);

		$this->UserModel->insert($data);
		redirect("https://rifkiystarksub1.azurewebsites.net/");
	}
}
