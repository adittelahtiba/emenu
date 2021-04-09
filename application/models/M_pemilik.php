<?php

class M_pemilik extends CI_Model
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

    function v_all_pemilik($where = '')
    {
        $query = $this->db->query("SELECT c.*,p.* FROM pemilik p left join cafe c on p.id_pemilik=c.id_pemilik " . $where . "");

        return   $query->result_array();
    }
}
