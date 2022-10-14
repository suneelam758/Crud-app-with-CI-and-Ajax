<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('display');
	}

	public function  disp()
	{
		$result=$this->fetch->show();
		echo json_encode($result);
	}
	public function insert()
	{

		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$number=$_POST['number'];
		$telephone=$_POST['telephone'];
		$password=$_POST['password'];
   
		$checkbox=$_POST['checkbox'];
		$checkbox1=implode(",",$checkbox);
   
		$date=$_POST['date'];
		$month=$_POST['month'];
		$radio=$_POST['radio'];
		$range=$_POST['range_input'];
		$select=$_POST['select_input'];
		$color=$_POST['color'];

		

		$data=array(
			'name'=>$name,
			'email'=>$email,
			'number'=>$number,
			'telephone'=>$telephone,
			'password'=>$password,
			'checkbox'=>$checkbox1,
			'date'=>$date,
			'month'=>$month,
			'radio'=>$radio,
			'range_input'=>$range,
			'select_input'=>$select,
			'color'=>$color
			
		);

		// echo"<pre>";
		// print_r($data); exit;
       
		 $this->load->model('insert');
		  $this->insert->createData($data);
		 
	}
	public function formalldata()
	{
	
		$id=$_POST['id'];
		$this->load->model('insert');
		$data= $this->insert->getsingledata('*','allinput',array('id'=>$id));
        echo json_encode($data);
	
	}
	public function update()
	{
		
			$id=$_POST['id'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$number=$_POST['number'];
			$telephone=$_POST['telephone'];
			$password=$_POST['password'];
	   
			$checkbox=$_POST['checkbox'];
			$checkbox1=implode(",",$checkbox);
	   
			$date=$_POST['date'];
			$month=$_POST['month'];
			$radio=$_POST['radio'];
			$range=$_POST['range_input'];
			$select=$_POST['select_input'];
			$color=$_POST['color'];
	
			
	
			$data=array(
				'name'=>$name,
				'email'=>$email,
				'number'=>$number,
				'telephone'=>$telephone,
				'password'=>$password,
				'checkbox'=>$checkbox1,
				'date'=>$date,
				'month'=>$month,
				'radio'=>$radio,
				'range_input'=>$range,
				'select_input'=>$select,
				'color'=>$color
				
			);
			$this->load->model('insert');
            $this->insert->updatedata('allinput',$data,array('id'=>$id));
		
	     }
	

	public function delete()
	{

		 $id=$_POST['id'];
		 $this->load->model('insert');
		$this->insert->deletedata('allinput',array('id'=>$id));
		
	}
	
}
