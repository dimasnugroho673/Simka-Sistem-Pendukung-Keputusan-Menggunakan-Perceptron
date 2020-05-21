<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('M_normalize');
  }

  public function index()
  {
    $data['user'] = $this->db->get_where('db_admin', ['nama' => $this->session->userdata('nama')])->row_array();

    $data['data_training'] = $this->db->get('tb_data_training')->result_array();

    $data['count_data_training'] = count($this->db->get('tb_data_training')->result_array());
    $data['count_data_normalize'] = count($this->db->get('tb_normalize')->result_array());

    $data['message'] = '<div class="alert alert-success" role="alert">
        //     <h4 class="alert-heading">Well done!</h4>
        //     <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        //     <hr>
        //     <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        // </div>';

    // if ($data['count_data_training'] != $data['count_data_normalize']) {
    //     echo 
    // }

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('data1', 'Pukulan', 'required|numeric');
    $this->form_validation->set_rules('data2', 'Tendangan', 'required|numeric');
    $this->form_validation->set_rules('data3', 'Tangkisan', 'required|numeric');
    $this->form_validation->set_rules('data4', 'Hindaran', 'required|numeric');
    $this->form_validation->set_rules('data5', 'Jatuhan', 'required|numeric');
    $this->form_validation->set_rules('data6', 'Teknik bertarung', 'required|numeric');
    $this->form_validation->set_rules('data7', 'Weijen 1', 'required|numeric');
    $this->form_validation->set_rules('data8', 'Weijen 2', 'required|numeric');
    $this->form_validation->set_rules('data9', 'Teknik kuda-kuda', 'required|numeric');
    $this->form_validation->set_rules('data10', 'Teknik tongkat', 'required|numeric');
    $this->form_validation->set_rules('target', 'Target/Label', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header');
      $this->load->view('admin/templates/navbar', $data);
      $this->load->view('admin/templates/sidebar', $data);
      $this->load->view('admin/data/index', $data);
      $this->load->view('admin/templates/footer');
    } else {
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama')),
        'data1' => htmlspecialchars($this->input->post('data1')),
        'data2' => htmlspecialchars($this->input->post('data2')),
        'data3' => htmlspecialchars($this->input->post('data3')),
        'data4' => htmlspecialchars($this->input->post('data4')),
        'data5' => htmlspecialchars($this->input->post('data5')),
        'data6' => htmlspecialchars($this->input->post('data6')),
        'data7' => htmlspecialchars($this->input->post('data7')),
        'data8' => htmlspecialchars($this->input->post('data8')),
        'data9' => htmlspecialchars($this->input->post('data9')),
        'data10' => htmlspecialchars($this->input->post('data10')),
        'target' => htmlspecialchars($this->input->post('target')),
      ];

      $this->db->insert('tb_data_training', $data);

      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil ditambah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect('panel/data');
    }
  }

  public function delete_datatraining($id)
  {
    $this->db->delete('tb_data_training', array('id' => $id));
    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data berhasil dihapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('panel/data');
  }

  public function normalize()
  {
    $data['user'] = $this->db->get_where('db_admin', ['nama' => $this->session->userdata('nama')])->row_array();

    $data['data_normalized'] = $this->db->get('tb_normalize')->result_array();

    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/navbar', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/data/normalize', $data);
    $this->load->view('admin/templates/footer');
  }

  public function normalize_process()
  {
    $max_data1 = $this->M_normalize->max_data1()->row()->data1;
    $max_data2 = $this->M_normalize->max_data2()->row()->data2;
    $max_data3 = $this->M_normalize->max_data3()->row()->data3;
    $max_data4 = $this->M_normalize->max_data4()->row()->data4;
    $max_data5 = $this->M_normalize->max_data5()->row()->data5;
    $max_data6 = $this->M_normalize->max_data6()->row()->data6;
    $max_data7 = $this->M_normalize->max_data7()->row()->data7;
    $max_data8 = $this->M_normalize->max_data8()->row()->data8;
    $max_data9 = $this->M_normalize->max_data9()->row()->data9;
    $max_data10 = $this->M_normalize->max_data10()->row()->data10;
    // $max_data11 = $this->M_normalize->max_data11()->row()->data11;

    $min_data1 = $this->M_normalize->min_data1()->row()->data1;
    $min_data2 = $this->M_normalize->min_data2()->row()->data2;
    $min_data3 = $this->M_normalize->min_data3()->row()->data3;
    $min_data4 = $this->M_normalize->min_data4()->row()->data4;
    $min_data5 = $this->M_normalize->min_data5()->row()->data5;
    $min_data6 = $this->M_normalize->min_data6()->row()->data6;
    $min_data7 = $this->M_normalize->min_data7()->row()->data7;
    $min_data8 = $this->M_normalize->min_data8()->row()->data8;
    $min_data9 = $this->M_normalize->min_data9()->row()->data9;
    $min_data10 = $this->M_normalize->min_data10()->row()->data10;
    // $min_data11 = $this->M_normalize->min_data11()->row()->data11;

    $data['data_training'] = $this->db->get('tb_data_training')->result();

    $count_id = count($this->db->get('tb_normalize')->result_array());

    if ($count_id != 0) {
      $this->db->truncate('tb_normalize');
      foreach ($data['data_training'] as $data) {
        $normalize = [
          'nama' => $data->nama,
          'data1' => (($data->data1 - $min_data1) / ($max_data1 - $min_data1)),
          'data2' => (($data->data2 - $min_data2) / ($max_data2 - $min_data2)),
          'data3' => (($data->data3 - $min_data3) / ($max_data3 - $min_data3)),
          'data4' => (($data->data4 - $min_data4) / ($max_data4 - $min_data4)),
          'data5' => (($data->data5 - $min_data5) / ($max_data5 - $min_data5)),
          'data6' => (($data->data6 - $min_data6) / ($max_data6 - $min_data6)),
          'data7' => (($data->data7 - $min_data7) / ($max_data7 - $min_data7)),
          'data8' => (($data->data8 - $min_data8) / ($max_data8 - $min_data8)),
          'data9' => (($data->data9 - $min_data9) / ($max_data9 - $min_data9)),
          'data10' => (($data->data10 - $min_data10) / ($max_data10 - $min_data10)),
          // 'data11' => (($data->data11 - $min_data11) / ($max_data11 - $min_data11)),
          'target' => $data->target,
          'date_created' => time()
        ];
        $this->db->insert('tb_normalize', $normalize);
      }

      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil dinormalisasi!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect('panel/data/normalize');
    } else {
      $this->db->truncate('tb_normalize');
      foreach ($data['data_training'] as $data) {
        $normalize = [
          'nama' => $data->nama,
          'data1' => (($data->data1 - $min_data1) / ($max_data1 - $min_data1)),
          'data2' => (($data->data2 - $min_data2) / ($max_data2 - $min_data2)),
          'data3' => (($data->data3 - $min_data3) / ($max_data3 - $min_data3)),
          'data4' => (($data->data4 - $min_data4) / ($max_data4 - $min_data4)),
          'data5' => (($data->data5 - $min_data5) / ($max_data5 - $min_data5)),
          'data6' => (($data->data6 - $min_data6) / ($max_data6 - $min_data6)),
          'data7' => (($data->data7 - $min_data7) / ($max_data7 - $min_data7)),
          'data8' => (($data->data8 - $min_data8) / ($max_data8 - $min_data8)),
          'data9' => (($data->data9 - $min_data9) / ($max_data9 - $min_data9)),
          'data10' => (($data->data10 - $min_data10) / ($max_data10 - $min_data10)),
          // 'data11' => (($data->data11 - $min_data11) / ($max_data11 - $min_data11)),
          'target' => $data->target,
          'date_created' => time()
        ];
        $this->db->insert('tb_normalize', $normalize);
      }

      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil dinormalisasi!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect('panel/data/normalize');
    }

    // var_dump($max_data1);
  }
}
