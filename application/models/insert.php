<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Model {

	public function createData($data)
	{
	
		$this->db->insert('allinput',$data);
        // $data=$query->result_array();
      
	}

	public function getsingledata($data,$tablename,$where)
	{
		$query=$this->db->select($data)
		                ->from($tablename)
						->where($where)
						->get();
		return $query->row_array();

        
	}
	public function updatedata($tablename,$data,$where)
	{
		$this->db->update($tablename,$data,$where);
		                
		

        
	}
	public function deletedata($tablename,$where)
	{
		$query=$this->db->delete($tablename,$where);
		                
		return $query;

        
	}
}
