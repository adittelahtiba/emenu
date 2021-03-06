<?php

class M_cafe extends CI_Model
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

  function find_cafe($kode_cafe)
  {
    $query = $this->db->query("SELECT * FROM `cafe` cf left join sosmed sm on cf.id_cafe=sm.id_cafe
    left join pemilik pm on cf.id_pemilik=pm.id_pemilik
    Where cf.kode_cafe='" . $kode_cafe . "'");

    return   $query->row_array();
  }

  function find_sosmed($id_cafe)
  {
    $query = $this->db->query("SELECT * FROM sosmed Where id_cafe='" . $id_cafe . "'");

    return   $query->row_array();
  }

  function find_cafe_pemilik($id_pemilik)
  {
    $query = $this->db->query("SELECT * FROM cafe Where id_pemilik='" . $id_pemilik . "'");

    return   $query->row_array();
  }

  function find_message($id_cafe)
  {
    $query = $this->db->query("SELECT * FROM message Where id_cafe='" . $id_cafe . "'");

    return   $query->result_array();
  }

  function get_cafe($id_pemilik)
  {
    $query = $this->db->query("SELECT * FROM `cafe` cf left join sosmed sm on cf.id_cafe=sm.id_cafe
    left join pemilik pm on cf.id_pemilik=pm.id_pemilik
    Where cf.id_pemilik='" . $id_pemilik . "'");

    return   $query->row_array();
  }
}
