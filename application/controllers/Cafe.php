<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cafe extends CI_Controller
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
        $cafe = $this->M_cafe->find_cafe_pemilik($_SESSION['id']);
        if ($cafe) {
            $this->edit_cafe();
        } else {
            $this->tambah_cafe();
        }
    }

    public function edit_cafe()
    {
        $data['jsfile'] = 'cafe.js';
        $this->load->view('template/dash_header', $data);
        $this->load->view('cafe/v_show');
        $this->load->view('template/dash_footer');
    }

    public function tambah_cafe()
    {
        $data['jsfile'] = 'cafe.js';
        $this->load->view('template/dash_header', $data);
        $this->load->view('cafe/v_show');
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
        // $_POST['date_create'] = date('Y-m-d H:i:s');
        // // $_POST['user_create'] = $_SESSION['nama_karyawan'];
        if (!empty($_FILES["foto_kartu"]["name"])) {
            $_POST['foto_kartu'] = $this->upload($_POST['id_kartu']);
        }

        if ($_POST['foto_kartu'] <> "foto gagal") {
            $dPemilik = [
                'id_kartu' => $_POST['id_kartu'],
                'foto_kartu' => $_POST['foto_kartu'],
            ];
            $res = $this->M_cafe->updatedata('pemilik', $dPemilik, ['id_pemilik' => $_POST['id_pemilik']]);
        } else {
            echo "UPLOAD KTP GAGAL SILAHKAN ULANGI";
            exit;
        }

        $dCafe = [
            'id_pemilik' => $_POST['id_pemilik'],
            'nama_cafe' => $_POST['nama_cafe'],
            'kode_cafe' => $this->kode_Cafe($_POST['nama_cafe']),
            'logo_cafe' => 'logo-putih.png',
            'background' => 'bg.jpg',
            'background_body' => 'food.jpg',
            'menu' => 'menu.pdf',
            'tageline' => 'Solusi Fried Chicken',
            'alamat' => 'Jl Kayu Agung II No 9, Kec Turangga, Kec Lengkong Kota Bandung',
            'maps_url' => 'https://goo.gl/maps/g53wN7KiX6DwpBJC6',
            'maps_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4069183.925383313!2d106.7335334!3d-5.1338872!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e08cd5ed284e081%3A0xeae889e76b24f6e4!2sAditya%20pangestu!5e0!3m2!1sen!2sid!4v1617866184409!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'message_wa' => 'Hi kak, saya mau pesan : -',
            'date_create' => date('Y-m-d H:i:s'),
        ];

        if ($res) {
            $res = $this->M_cafe->insertdata('cafe', $dCafe);
        }
        echo json_encode($res);
    }



    public function kode_Cafe($cafe)
    {
        $strna = array(",", ".");
        $name = str_replace($strna, "", $cafe);
        $name = str_replace(" ", "-", $name);
        $res = $this->M_cafe->find_cafe($name);
        $i = 0;
        while ($res == true) {
            $i++;
            $name = $name . '-' . $i;
            $res = $this->M_cafe->find_cafe($name);
            if ($i == 20) {
                exit;
            }
        }

        return $name;
    }

    public function edit()
    {
        if (!isset($_POST['password'])) {
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

    public function upload($name)
    {
        $config['upload_path']          = APPPATH . '../assets/images/ktp/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
        $config['file_name']            = $name . '-' . date('Ymd') . date('i');
        $config['overwrite']            = true;
        $config['max_size']             = 8120; // 5MB

        $this->load->library('upload', $config);
        $upload = $this->upload->do_upload('foto_kartu');
        if ($upload) {
            return $this->upload->data("file_name");
        } else {
            return 'foto gagal';
        }
    }
}
