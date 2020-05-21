<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_normalize extends CI_Model
{
    public function max_data1()
    {
        $this->db->select_max('data1');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function max_data2()
    {
        $this->db->select_max('data2');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function max_data3()
    {
        $this->db->select_max('data3');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function max_data4()
    {
        $this->db->select_max('data4');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function max_data5()
    {
        $this->db->select_max('data5');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function max_data6()
    {
        $this->db->select_max('data6');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function max_data7()
    {
        $this->db->select_max('data7');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function max_data8()
    {
        $this->db->select_max('data8');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function max_data9()
    {
        $this->db->select_max('data9');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function max_data10()
    {
        $this->db->select_max('data10');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function max_data11()
    {
        $this->db->select_max('data11');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function min_data1()
    {
        $this->db->select_min('data1');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function min_data2()
    {
        $this->db->select_min('data2');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function min_data3()
    {
        $this->db->select_min('data3');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function min_data4()
    {
        $this->db->select_min('data4');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function min_data5()
    {
        $this->db->select_min('data5');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function min_data6()
    {
        $this->db->select_min('data6');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function min_data7()
    {
        $this->db->select_min('data7');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function min_data8()
    {
        $this->db->select_min('data8');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function min_data9()
    {
        $this->db->select_min('data9');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function min_data10()
    {
        $this->db->select_min('data10');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function min_data11()
    {
        $this->db->select_min('data11');
        $query = $this->db->get('tb_data_training');
        return $query;
    }

    public function getDataToClassifier()
    {
        $this->db->select('data1, data2, data3, data4, data5, data6, data7, data8, data9, data10');
        $this->db->from('tb_normalize');
        $query = $this->db->get();
        return $query;
    }

    public function getDataLabel()
    {
        $this->db->select('target');
        $this->db->from('tb_normalize');
        $query = $this->db->get();
        return $query;
    }
}
