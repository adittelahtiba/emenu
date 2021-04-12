<?php
class Daftar extends CI_Controller
{
    public $data = [];
    function __construct()
    {
        parent::__construct();
        // $this->load->database();
        $this->load->library(['form_validation']);
        $this->load->helper(['url', 'language']);
    }

    public function index()
    {
        //testing
        $this->load->view('template/auth_header', $this->data);
        $this->load->view('daftar/v_show');
        $this->load->view('template/dash_footer');
    }

    public function daftar()
    {
        $this->form_validation->set_rules('nama_pemilik', 'Full name', 'trim|required');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[5]|is_unique[pemilik.username]', ['is_unique' => 'Username have been used']);
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('conf_password', 'confirm password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('no_hp', 'mobile number', 'trim|required|min_length[5]');
        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            unset($_POST['conf_password']);
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $_POST['date_create'] = date('Y-m-d H:i:s');
            $res = $this->M_login->insertdata('pemilik', $_POST);
            if ($res) {
                $this->session->set_flashdata('message', '<div class=" alert alert-warning" role="alert">
                Pendaftarn berhasil! silahkan login</div>');
                redirect('login');
            } else {
                $this->session->set_flashdata('message', '<div class=" alert alert-warning" role="alert">
                Daftar tidak berhasil! seilahkan coba lagi</div>');
                $this->index();
            }
        }
    }
}
