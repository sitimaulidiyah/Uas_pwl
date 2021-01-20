<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barangmasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Barang Masuk";
        $data['barangmasuk'] = $this->admin->getBarangMasuk();
        $this->template->load('penjual/dashboard', 'penjual/barang_masuk/data', $data);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required|trim');
        $this->form_validation->set_rules('user_id', 'User', 'required');
        $this->form_validation->set_rules('barang_id', 'Barang', 'required');
        $this->form_validation->set_rules('jumlah_masuk', 'Jumlah Masuk', 'required|trim|numeric|greater_than[0]');
    }

    public function add()
    {
        $this->_validasi();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Jual Barang";
            $data['barang'] = $this->admin->get('barang');

            // Mendapatkan dan men-generate kode transaksi barang masuk
            $kode = 'T-BM-' . date('ymd');
            $kode_terakhir = $this->admin->getMax('barang_masuk', 'id_barang_masuk', $kode);
            $kode_tambah = substr($kode_terakhir, -5, 5);
            $kode_tambah++;
            $number = str_pad($kode_tambah, 5, '0', STR_PAD_LEFT);
            $data['id_barang_masuk'] = $kode . $number;
            $input = $this->input->post(null, true);
           

            $this->template->load('penjual/dashboard', 'penjual/barang/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $insert = $this->admin->insert('barang_masuk', $input);
            // if (empty($_FILES['foto']['name'])) {
            //     $insert = $this->admin->update('barang_masuk', 'id_barang_masuk', $input['id_barang_masuk'], $input);
            //     if ($insert) {
            //         set_pesan('perubahan berhasil disimpan.');
            //     } else {
            //         set_pesan('perubahan tidak disimpan.');
            //     }
            //     redirect('penjual/barangmasuk/add');
            // } else {
            //     if ($this->upload->do_upload('foto') == false) {
            //         echo $this->upload->display_errors();
            //         die;
            //     } else {
            //         if (barangmasuk('foto') != 'user.png') {
            //             $old_image = FCPATH . 'assets/img/' . barangmasuk('foto');
            //             if (!unlink($old_image)) {
            //                 set_pesan('gagal hapus foto lama.');
            //                 redirect('profile/setting');
            //             }
            //         }

            //         $input['foto'] = $this->upload->data('file_name');
            //         $update = $this->admin->update('barang_masuk', 'id_barang_masuk', $input['id_barang_masuk'], $input);
            //         if ($update) {
            //             set_pesan('perubahan berhasil disimpan.');
            //         } else {
            //             set_pesan('gagal menyimpan perubahan');
            //         }
            //         redirect('penjual/barangmasuk/add');
            //     }
            // }

            if ($insert) {
                set_pesan('data berhasil disimpan.');
                redirect('penjual/barangmasuk/add');
            } else {
                set_pesan('Opps ada kesalahan!');
                redirect('penjual/barangmasuk/add');
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('barang_masuk', 'id_barang_masuk', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('penjual/barangmasuk/add');
    }
}
