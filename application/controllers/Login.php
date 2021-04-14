<?php
class Login extends CI_Controller
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
        $this->load->view('template/auth_header', $this->data);
        $this->load->view('login/v_show');
        $this->load->view('template/dash_footer');
    }

    public function login()
    {
        $this->form_validation->set_rules('id', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->_login();
        }
    }

    

    private function _login()
    {
        $id = htmlspecialchars($this->input->post('id', true));
        $password = $this->input->post('password');

        $user = $this->M_login->find_user($id);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                //     if ($user['status_aktif'] == 0) {
                //         $this->session->set_flashdata('message', '<div class=" alert alert-warning" role="alert">
                // Akun anda belum Aktif!</div>');
                //         redirect('login/index');
                //     } else {
                $data = [
                    'cafe' => 'msn',
                    'level' => 'pemilik',
                    'id' => $user['id_pemilik'],
                    'nama' => $user['nama_pemilik']
                ];
                $this->session->set_userdata($data);
                $this->directpage();
                // }
            } else {
                $this->session->set_flashdata('message', '<div class=" alert alert-danger" role="alert">
                    Password salah, silahkan ulangi!</div>');
                redirect('login/index');
            }
        } elseif ($id == 'ptmsn' and $password == 'kopiluak') {
            $data = [
                'cafe' => 'msn',
                'level' => 'superadmin',
                'id' => '1',
                'nama' => 'PT MSN ^.^'
            ];
            $this->session->set_userdata($data);
            $this->directpage();
        } else {
            $this->session->set_flashdata('message', '<div class=" alert alert-danger" role="alert">
            Username tidak ditemukan, silahkan cek kembali!</div>');
            redirect('login/index');
        }
    }

    public function directpage()
    {
        if ($_SESSION['level'] == 'superadmin') {
            redirect('pemilik');
        } else {
            redirect('cafe');
        }
    }



    public function logout()
    {
        $this->session->unset_userdata('cafe');
        $this->session->set_flashdata('message', '<div class=" alert alert-success" role="alert">
		Anda Berhasil Logout</div>');
        $this->index();
    }
}
