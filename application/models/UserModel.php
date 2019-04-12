<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Model {

	public function getUsers(){
        return $this->db->get();
    }
}
