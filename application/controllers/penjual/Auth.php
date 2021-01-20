<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_loginp', 'auth');
        $this->load->model('Admin_model', 'admin');
    }

    private function _has_login()
    {
        if ($this->session->has_userdata('login_session')['supplier']) {
            redirect('penjual/dashboard');
        }
    }

    public function index()
    {
        $this->_has_login();

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Aplikasi';
            $this->template->load('layouts/login', 'penjual/auth/login', $data);
        } else {
            $input = $this->input->post(null, true);

            $cek_username = $this->auth->cek_username($input['username']);
            if ($cek_username > 0) {
                $password = $this->auth->get_password($input['username']);
                if (password_verify($input['password'], $password)) {
                    $supplier_db = $this->auth->userdata($input['username']);
                    if ($supplier_db['userdata']) {
                        redirect('login');
                    } else {
                        $userdata = [
                            'supplier'  => $supplier_db['id_supplier'],
                            // 'role'  => $user_db['role'],
                            'timestamp' => time()
                        ];
                        $this->session->set_userdata('login_session', $userdata);
                        redirect('penjual/barang/add');	
                    }
                } else {
                    set_pesan('password anda salah', false);
                    redirect('penjual/auth');
                }
            } else {
                set_pesan('username belum terdaftar', false);
                redirect('penjual/auth');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('login_session');

        set_pesan('Anda telah berhasil keluar');
        redirect('penjual/auth');
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|trim');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Buat Akun';
            $this->template->load('layouts/login', 'penjual/auth/register', $data);
        } else {
            $input = $this->input->post(null, true);
            unset($input['password2']);
            $input['password']      = password_hash($input['password'], PASSWORD_DEFAULT);
            // $input['role']          = 'admin';
            // $input['created_at']    = time();

            $query = $this->admin->insert('supplier', $input);
            if ($query) {
                set_pesan('Daftar telah berhasil');
                redirect('penjual/auth');
            } else {
                set_pesan('gagal menyimpan ke database', false);
                redirect('penjual/register');
            }
        }
    }
}
