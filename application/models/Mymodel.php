<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model
{

	function cek_login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
}
