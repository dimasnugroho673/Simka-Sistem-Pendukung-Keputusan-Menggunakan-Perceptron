<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {

        $data['user'] = $this->db->get_where('db_admin', ['nama' => $this->session->userdata('nama')])->row_array();



        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/navbar', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/dashboard/index', $data);
        $this->load->view('admin/templates/footer');
    }
}
