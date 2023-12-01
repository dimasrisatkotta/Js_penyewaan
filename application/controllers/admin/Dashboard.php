<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('username')) {
            redirect('login');
        }

        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index()
    {
        
        $data['editor_count'] = 100;
        $data['website']    = $this->M_user->website();
        $data['jml_baca']   = $this->M_admin->jml_baca();
        $data['jml_penyewa']   = $this->M_admin->jml_penyewa();
        $data['jml_kategori']   = $this->M_admin->jml_kategori();
        $data['jml_produk']   = $this->M_admin->jml_produk();
        $data['baca']       = $this->M_admin->baca();
        $this->load->view('admin/template_admin/Header', $data);
        $this->load->view('admin/Dashboard', $data);
        $this->load->view('admin/template_admin/Footer', $data);
    }

    public function website()
    {
        $data['editor_count'] = 100;
        $data['website']    = $this->M_user->website();
        $data['jml_baca']   = $this->M_admin->jml_baca();
        $data['baca']       = $this->M_admin->baca();

        $this->load->view('admin/template_admin/Header', $data);
        $this->load->view('admin/Website', $data);
        $this->load->view('admin/template_admin/Footer', $data);
        $this->load->view('admin/template_admin/Alert');
    }

    public function edit_data()
    {

        $data['website'] = $this->db->get_where('website', ['id' => $this->input->post('id')])->row_array();

        $nama  = $this->input->post('nama');
        $id  = $this->input->post('id');

        //cek jika ada gambar yang akan di upload
        $upload_foto    = $_FILES['foto']['name'];

        if ($upload_foto) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '30000';
            $config['upload_path']   = './assets/user/img/website/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {

                $foto_lama = $data['website']['foto'];
                if ($foto_lama != 'default.png') {
                    unlink(FCPATH . './assets/user/img/website/' . $foto_lama);
                }

                $new_foto = $this->upload->data('file_name');
                $this->db->set('logo', $new_foto);
            } else {
                echo $this->upload->dispay_errors();
            }
        }
        $this->db->set('nama', $nama);
        $this->db->where('id', $id);
        $this->db->update('website');

        $this->session->set_flashdata('sukses', 'sukses');
        redirect('admin/Dashboard/website');
    }

    public function contak()
    {
        $data['editor_count'] = 100;
        $data['website']    = $this->M_user->website();
        $data['contak']     = $this->M_user->contak();
        $data['jml_baca']   = $this->M_admin->jml_baca();
        $data['baca']       = $this->M_admin->baca();

        $this->load->view('admin/template_admin/Header', $data);
        $this->load->view('admin/Contak', $data);
        $this->load->view('admin/template_admin/Footer', $data);
        $this->load->view('admin/template_admin/Alert');
    }

    public function edit_contak()
    {

        $alamat     = $this->input->post('alamat');
        $tlp        = $this->input->post('tlp');
        $email      = $this->input->post('email');
        $maps       = $this->input->post('maps');
        $id         = $this->input->post('id');

        $this->db->set('alamat', $alamat);
        $this->db->set('tlp', $tlp);
        $this->db->set('email', $email);
        $this->db->set('maps', $maps);
        $this->db->where('id', $id);
        $this->db->update('contak');

        $this->session->set_flashdata('sukses', 'sukses');
        redirect('admin/Dashboard/contak');
    }

    public function about()
    {
        
        $data['editor_count'] = 100;
        $data['website']    = $this->M_user->website();
        $data['about']      = $this->M_user->about();
        $data['jml_baca']   = $this->M_admin->jml_baca();
        $data['baca']       = $this->M_admin->baca();

        $this->load->view('admin/template_admin/Header', $data);
        $this->load->view('admin/About', $data);
        $this->load->view('admin/template_admin/Footer1');
        $this->load->view('admin/template_admin/Alert');
    }

    public function edit_about()
    {

        $data['about'] = $this->db->get_where('about', ['id' => $this->input->post('id')])->row_array();

        $deskripsi  = $this->input->post('deskripsi');
        $id  = $this->input->post('id');

        //cek jika ada gambar yang akan di upload
        $upload_foto    = $_FILES['gambar']['name'];

        if ($upload_foto) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '30000';
            $config['upload_path']   = './assets/user/img/about/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $foto_lama = $data['about']['gambar'];
                if ($foto_lama != 'default.png') {
                    unlink(FCPATH . './assets/user/img/about/' . $foto_lama);
                }

                $new_foto = $this->upload->data('file_name');
                $this->db->set('gambar', $new_foto);
            } else {
                echo $this->upload->dispay_errors();
            }
        }
        $this->db->set('deskripsi', $deskripsi);
        $this->db->where('id', $id);
        $this->db->update('about');

        $this->session->set_flashdata('sukses', 'sukses');
        redirect('admin/Dashboard/about');
    }

    public function solusi()
    {

        $data['editor_count'] = 100;
        $data['website']    = $this->M_user->website();
        $data['solusi']     = $this->M_user->solusi();
        $data['jml_baca']   = $this->M_admin->jml_baca();
        $data['baca']       = $this->M_admin->baca();

        $this->load->view('admin/template_admin/Header', $data);
        $this->load->view('admin/Solusi', $data);
        $this->load->view('admin/template_admin/Footer', $data);
        $this->load->view('admin/template_admin/Alert');
    }

    public function edit_solusi()
    {

        $data['solusi'] = $this->db->get_where('solusi', ['id' => $this->input->post('id')])->row_array();

        $deskripsi  = $this->input->post('deskripsi');
        $judul  = $this->input->post('judul');
        $id  = $this->input->post('id');

        //cek jika ada gambar yang akan di upload
        $upload_foto    = $_FILES['gambar']['name'];

        if ($upload_foto) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '30000';
            $config['upload_path']   = './assets/user/img/solusi/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $foto_lama = $data['solusi']['gambar'];
                if ($foto_lama != 'default.png') {
                    unlink(FCPATH . './assets/user/img/solusi/' . $foto_lama);
                }

                $new_foto = $this->upload->data('file_name');
                $this->db->set('gambar', $new_foto);
            } else {
                echo $this->upload->dispay_errors();
            }
        }
        $this->db->set('judul', $judul);
        $this->db->set('deskripsi', $deskripsi);
        $this->db->where('id', $id);
        $this->db->update('solusi');

        $this->session->set_flashdata('sukses', 'sukses');
        redirect('admin/Dashboard/solusi');
    }

    public function ubah_pass()
    {
        $data['editor_count'] = 100;
        $data['website']    = $this->M_user->website();
        $data['solusi']     = $this->M_user->solusi();
        $data['jml_baca']   = $this->M_admin->jml_baca();
        $data['baca']       = $this->M_admin->baca();
        
        $this->load->view('admin/template_admin/Header', $data);
        $this->load->view('admin/Ubah_pass', $data);
        $this->load->view('admin/template_admin/Footer', $data);
        $this->load->view('admin/template_admin/Alert');
    }

    public function ubah_sandi()
    {
        $data['login'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();

        $pass_lama = $this->input->post('pass_lama');
        $pass_baru = $this->input->post('pass_baru');


        if (!password_verify($pass_lama, $data['login']['password'])) {
            $this->session->set_flashdata('pas_salah', 'gagal');
            redirect('admin/Dashboard/ubah_pass');
        } else {
            if ($pass_lama == $pass_baru) {
                $this->session->set_flashdata('pass_sama', 'gagal');    
                redirect('admin/Dashboard/ubah_pass');
            } else {
                //password suda ok!
                $password_hash = password_hash($pass_baru, PASSWORD_DEFAULT);

                $this->db->set('password', $password_hash);
                $this->db->where('username', $this->session->userdata('username'));
                $this->db->update('login');
                $this->session->set_flashdata('sukses', 'sukses');
                redirect('Login/ubah_pass');
            }
        }
    }
}
