<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilik extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->database();
        $this->load->library(['form_validation']);
        $this->load->helper(['url', 'language']);

    }


    public function index()
    {
        $data['jsfile'] = 'pemilik.js';
        $this->load->view('template/dash_header', $data);
        $this->load->view('pemilik/v_show');
        $this->load->view('template/dash_footer');
    }

    public function load()
    {

        $aData = $this->M_pemilik->v_all_pemilik();

        $data['aaData'] = array();
        $no = 1;
        //----------------------------loop data-------------------------------------------------------------------------------------------
        foreach ($aData as $row) {
            $aktif = 'Tidak Aktif';
            if ($row['status_aktif'] == 1) {
                $aktif = 'Aktif';
            }
            $cafe = '';
            if ($row['nama_cafe']) {
                $cafe = $row['nama_cafe'] . '<br><a target="_blank" href="Menus/cafe/' . $row['kode_cafe'] . '" class="btn btn-info btn-square btn-outline-dashed waves-effect waves-light">MENU</a>';
            }

            $data['aaData'][] = array(
                $no,
                $row['nama_pemilik'] . '<br><small>Username : ' . $row['username'] . '</small>' . '<br><small>Email : ' . $row['email'] . '</small>' . '<br><small>No Hp : ' . $row['no_hp'] . '</small>',
                $row['id_kartu'] . '<br><small>Status Aktif : ' . $aktif . '</small>',
                $cafe,
                '<div class="btn-group"> 
                <button type="button" class="btn btn-outline-primary" id="btn_edit" data-toggle="modal" data-target="#edit-modal" data-id_pemilik="' .  $row['id_pemilik']  . '"  data-nama_pemilik="' .  $row['nama_pemilik']  . '"  data-status_aktif="' .  $row['status_aktif']  . '"  data-password="' .  $row['password']  . '" data-backdrop="static" data-keyboard="false" ><i class="mdi mdi-lead-pencil"></i></button>
                <button type="button" class="btn btn-outline-danger" id="btn_remove" data-id="' .  $row['id_pemilik']  . '"><i class="mdi mdi-delete-forever"></i></button>   
                </div> '
            );
            $no++;
        }


        echo json_encode($data); // throw to datatable javascript
    }

    public function save()
    {
        $_POST['date_create'] = date('Y-m-d H:i:s');
        // $_POST['user_create'] = $_SESSION['nama_karyawan'];
        $res = $this->M_division->insertdata('tb_m_division', $_POST);
        echo json_encode($res);
    }

    public function edit()
    {
        if ($_POST['password'] == '') {
            $edit = [
                'nama_pemilik' => $_POST['nama_pemilik'],
                'status_aktif' => $_POST['status_aktif'],
            ];
        } else {
            $edit = [
                'nama_pemilik' => $_POST['nama_pemilik'],
                'status_aktif' => $_POST['status_aktif'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
            ];
        }

        $where = [
            'id_pemilik' => $_POST['id_pemilik'],
        ];
        unset($_POST['id_pemilik']);
        $res = $this->M_pemilik->updatedata('pemilik', $edit, $where);
        echo json_encode($res);
    }

    public function delete()
    {
        $where = array('id_pemilik' =>  $_POST['id_pemilik']);
        $res = $this->M_pemilik->deletedata('pemilik', $where);
        echo json_encode($res);
    }
}
