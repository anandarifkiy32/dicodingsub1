<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function getUsers(){
        return $this->db->get("Users");
    }
}
