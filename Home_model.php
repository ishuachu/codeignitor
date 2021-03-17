<?php

class Home_model extends CI_model{
	
	function insert($data){
		$this->db->insert('register',$data);
		return true;
	}
	
	function get($data){
		$result = $this->db->select('*')->where('email',$data['email'])->where('password',$data['password'])->get('register')->row();
		
	if(!empty($result))
	{
		return true;
	}
	else{
		return false;
	}
		
    }
	
}