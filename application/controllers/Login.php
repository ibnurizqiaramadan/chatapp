<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		return view('login');
	}

	public function action()
	{
		try {
			
			$validate = Validate([
				"username" => "required|min:5|username",
			]);

			if ($validate['success']) {
				$user = $this->db->get_where('users', $validate['data']);
				if ($user->num_rows() <= 0) Create('users', [
					'username' => Input_('username'), 
					'name' => Input_('username'),
					'email' => 'email@email.com', 
					'password' => $this->req->acak('123456'),
					'online' => '1'
				]);
				$session = [
					'username' => Input_('username'),
					'login' => true
				];
				$this->session->set_userdata($session);
				$message = [
					'status' => 'ok'
				];
			} else {
				$message = [
					'status' => 'fail'
				];
			}			

		} catch (\Throwable $th) {
			$message = [
				'status' => 'fail',
				'message' => $th->getMessage()
			];
		} catch (\Exception $ex) {
			$message = [
				'status' => 'fail',
				'message' => $ex->getMessage()
			];
		} finally {
			$message = array_merge($message, ['validate' => $validate]);
			echo json_encode($message);
		}
	}
}
