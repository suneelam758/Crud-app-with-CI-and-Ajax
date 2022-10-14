<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fetch extends CI_Model {

	public function show()
	{
		$query=$this->db->get('allinput');

        return $query->result_array();
	}
}
