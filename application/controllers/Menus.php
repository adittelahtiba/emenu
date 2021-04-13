<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menus extends CI_Controller
{


    public function index()
    {
        $this->cafe('pt-msn');
    }

    public function cafe($kode_cafe = 'pt-msn')
    {
        $data['cafe'] = $this->M_cafe->find_cafe($kode_cafe);
        $data['message'] = $this->M_cafe->find_message($data['cafe']['id_cafe']);
        if (!isset($data['cafe'])) {
            $this->load->view('error/error_404', $data);
        }

        if ($data['cafe']['status_aktif'] == 0) {
            echo "<h1>Toko Belum Aktif [sementara]</h1>";
            die;
        }

        $this->load->view('template/menu_header', $data);
        $this->load->view('menu/v_show');
        $this->load->view('template/menu_footer');
    }

    public function wa($kode_cafe)
    {
        $data = $this->M_cafe->find_cafe($kode_cafe);
        $wa = '62' . substr($data['whatsapp'], 1, $data['whatsapp']);
        $text = trim(preg_replace('/\s\s+/', ' ', $data['message_wa']));

        function isMobile()
        {
            return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
        }

        // Use the function
        if (isMobile()) {
            // Do something for only mobile users
            redirect('https://wa.me/' . $wa . '&text=' . $text);
        } else {
            // Do something for only desktop users
            redirect('https://web.whatsapp.com/send?phone=' . $wa . '&text=' . $text);
        }
    }
}
