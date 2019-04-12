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
		echo json_encode($result);
	}
}
