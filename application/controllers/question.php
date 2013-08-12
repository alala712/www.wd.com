<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question extends CI_Controller{
	
	
	public function index()
	{
		exit('index');
	}
	
	public function  add(){
		
		if(empty($_POST)){
			
			$this->load->view('question.add.php');
		}
		$this->load->model('MQuestion','mquestion');

		//插入数据库 
		 $this->mquestion->insert('question',$_POST);
	}
	
}