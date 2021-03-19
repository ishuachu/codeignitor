<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
	function registration_page()
	{
		$this->load->view('registration');	
	}
	function registration_process()
	{
		$data['name'] = $this ->input->post('name');
		$data['email'] = $this ->input->post('email');
		$data['mobile'] = $this ->input->post('mobile');
		$data['password'] = $this ->input->post('password');
				
		$this->load->model('Home_model');
		
		$status = $this->Home_model->insert($data);
		
		if($status == true){
			echo "Registration Success....";
		}
		else{
			echo 'Failed!';
		}
	}
	
	
	function login_page()
	{
		$this->load->view('login');	
	}
	function login_process()
	{
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		
		$this->load->model('Home_model');
		$status = $this->Home_model->get($data);
		
		if ($status == true){
			echo 'login success...';
			}else{
				echo 'invalid login';
			}
		
	}
}


