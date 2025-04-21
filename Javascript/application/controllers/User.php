<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public $db; 
	public $session; 

	public function signup()
	{
		$name = $this->input->post('name');
		$mobile = $this->input->post('mobile');
		$password = md5($this->input->post('password'));


		$query = "INSERT INTO users(name, mobile, password) VALUES (?, ? ,?)";

		$this->db->query($query , array($name ,$mobile,$password));

		echo json_encode(["status" => "success" , "message" => "Signup successful"]);

	}

	public function login()
	{

		$mobile = $this->input->post('mobile');
		$password = md5($this->input->post('password'));


		$query = "SELECT * FROM users WHERE mobile = ? AND password = ?";

		$result = $this->db->query($query , array($mobile , $password))->row_array();

		if ($result) {
			$userData = [
				'id' => $result['id'],
				'name' => $result['name'],
				'mobile' => $result['mobile']
			];

			$this->session->set_userdata('userdata', $userData);
			echo json_encode(["status" => "success" , "message" => "Login successful"]);
		} else {
			echo json_encode(["status" => "error" , "message" => "Invalid mobile or password"]);
		}
		


	}


	public function logout()
	{
		$this->session->sess_destroy();
		echo json_encode(["status" => "success" , "message" => "Logout successful"]);
	}
	
}
