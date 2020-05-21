<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mymodel');
	}

	function index()
	{
		$this->load->view('form_login');
	}

	function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => md5($password)
		);

		$user = $this->db->get_where('db_admin', ['username' => $username])->row_array();

		$cek = $this->Mymodel->cek_login("db_admin", $where)->num_rows();
		// $user = $this->Mymodel->cek_login("db_user", $where)->num_rows();
		if ($cek > 0) {

			$data_session = [
				'nama' => $user['nama'],
				'level' => $user['level'],
				'status' => "login"
			];

			$this->session->set_userdata($data_session);
			redirect('panel/dashboard');
		} else {

			$this->load->view('form_login');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('form_login');
	}
}
