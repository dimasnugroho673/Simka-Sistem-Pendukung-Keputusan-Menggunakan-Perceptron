<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perceptron extends CI_Controller
{

    private $learning_rate;
    private $weight;
    private $bias;

    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_normalize');
    }

    public function index()
    {
        $data['data_normalize'] = $this->M_normalize->getDataToClassifier()->result_array();
        $data['data_label'] = $this->M_normalize->getDataLabel()->result_array();

        // $data['test'] = array(
        //     array(7.0, 3.2, 4.7, 1.4),
        //     array(6.4, 3.2, 4.5, 1.5),
        //     array(6.9, 3.1, 4.9, 1.5),
        //     array(5.5, 2.3, 4.0, 1.3),
        //     array(6.5, 2.8, 4.6, 1.5),
        //     array(5.7, 2.8, 4.5, 1.3),
        //     array(6.3, 3.3, 4.7, 1.6),
        //     array(6.3, 3.3, 6.0, 2.5),
        //     array(5.8, 2.7, 5.1, 1.9),
        //     array(7.1, 3.0, 5.8, 2.2),
        //     array(6.3, 2.9, 5.6, 1.8),
        //     array(6.5, 3.0, 5.8, 2.2),
        //     array(7.6, 3.0, 6.6, 2.1),
        //     array(4.9, 2.5, 4.5, 1.7)
        // );

        $learning_rate = $this->input->post('learning_rate');
        $weight = array(0.5, 0.5, 0.5, 0.5);


        $nn = new Perceptron1();
        $nn->set_learning_rate($learning_rate);
        $nn->set_weight($weight);
        $nn->set_bias($bias);
        echo "proses pelatihan :</br>";
        $out = $nn->training($data, $label, $max_epoh);    //melakukan training untuk mendapatkan bobot dan bias 
        $bobot = $out[0];
        $bias = $out[1];
        $data_uji = array(7.2, 3.6, 6.1, 2.5);        // data uji (silahkan ubah data ini untuk melakukan pengujian bobot akhir)
        $hasil = $nn->classification($data_uji, $bobot, $bias); // melakukan proses klasifikasi dengan data uji
        echo "<br><br> Hasil klasifikasi : " . $hasil;                // hasil klasifikasi

        var_dump($data['data_normalize'], $data['test'], $data['data_label']);
    }
}
