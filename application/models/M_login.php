<?php

class M_login extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  //----------start---show all wilayah-----------------

  public function insertdata($tabelname, $data)
  {
    $res = $this->db->insert($tabelname, $data);
    return $res;
  }

  public function updatedata($tabelname, $data, $where)
  {
    $res = $this->db->update($tabelname, $data, $where);
    return $res;
  }

  public function deletedata($tabelname, $where)
  {
    $res = $this->db->delete($tabelname, $where);
    return $res;
  }

  function find_user($username)
  {
    $query = $this->db->query("SELECT * FROM `pemilik` 
    Where username='" . $username . "'");

    return   $query->row_array();
  }

   public function isNotLogin($data){
        return $this->session->userdata($data) === null;
    }
}
