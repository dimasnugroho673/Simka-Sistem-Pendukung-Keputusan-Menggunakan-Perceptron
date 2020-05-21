<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Decision extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('db_admin', ['nama' => $this->session->userdata('nama')])->row_array();

        $data['data_normalize'] = $this->db->get('tb_normalize')->result_array();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/navbar', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/decision/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function decision_process()
    {
        $data['user'] = $this->db->get_where('db_admin', ['nama' => $this->session->userdata('nama')])->row_array();

        // form prediksi



        // settingan
        $max_epoch = 1000;
        $learning_rate = 0.1;
        $bayes = 0.5;
        $weight = 0.5;

        $data_normalize = $this->db->get('tb_normalize')->result();

        $i = 0;
        $jumlah_data = 0;
        foreach ($data_normalize as $data) {
            $id[$i] = $data->id;
            $x1[$i] = $data->data1;
            $x2[$i] = $data->data2;
            $x3[$i] = $data->data3;
            $x4[$i] = $data->data4;
            $x5[$i] = $data->data5;
            $x6[$i] = $data->data6;
            $x7[$i] = $data->data7;
            $x8[$i] = $data->data8;
            $x9[$i] = $data->data9;
            $x10[$i] = $data->data10;
            $target[$i] = $data->target;
            $i++;
            $jumlah_data;
            $bayes;
            $weight;
        }

        // hitung
        $sukses = 0;
        for ($epoch = 0; $epoch < $max_epoch; $epoch++) {

            if ($sukses == $jumlah_data) {
                break;
            } else {
                $sum1[$i] = $x1[$i] * $weight;
                $sum2[$i] = $x2[$i] * $weight;
                $sum3[$i] = $x3[$i] * $weight;
                $sum4[$i] = $x4[$i] * $weight;
                $sum5[$i] = $x5[$i] * $weight;
                $sum6[$i] = $x6[$i] * $weight;
                $sum7[$i] = $x7[$i] * $weight;
                $sum8[$i] = $x8[$i] * $weight;
                $sum9[$i] = $x9[$i] * $weight;
                $sum10[$i] = $x10[$i] * $weight;

                $jumlahkan = ($sum1 + $sum2 + $sum3 + $sum4 + $sum5 + $sum6 + $sum7 + $sum8 + $sum9 + $sum10) + $bayes;

                // activation function
                $sigmoid = 1 / (1 + exp($jumlahkan));
                $hasil = $sigmoid;

                // var_dump($jumlahkan);
            }
        }

        var_dump($x1[$i]);
        die;
    }
}
