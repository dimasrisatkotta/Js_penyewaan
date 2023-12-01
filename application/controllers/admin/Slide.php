<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slide extends CI_Controller
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
        $data['slide'] = $this->M_admin->slide();
        $data['jml_baca']   = $this->M_admin->jml_baca();
        $data['baca']       = $this->M_admin->baca();
        $data['website'] = $this->M_user->website();
        $this->load->view('admin/template_admin/Header', $data);
        $this->load->view('admin/Slide', $data);
        $this->load->view('admin/template_admin/Footer', $data);
        $this->load->view('admin/template_admin/Alert');
    }

    public function edit_data()
    {

        $data['slide'] = $this->db->get_where('slide', ['id' => $this->input->post('id')])->row_array();

        $status  = $this->input->post('status');
        $id  = $this->input->post('id');

        //cek jika ada gambar yang akan di upload
        $upload_foto    = $_FILES['gambar']['name'];

        if ($upload_foto) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '30000';
            $config['upload_path']   = './assets/user/img/slide/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $foto_lama = $data['slide']['gambar'];
                if ($foto_lama != 'default.png') {
                    unlink(FCPATH . './assets/user/img/slide/' . $foto_lama);
                }

                $new_foto = $this->upload->data('file_name');
                $this->db->set('gambar', $new_foto);
            } else {
                echo $this->upload->dispay_errors();
            }
        }
        $this->db->set('status', $status);
        $this->db->where('id', $id);
        $this->db->update('slide');

        $this->session->set_flashdata('sukses', 'sukses');
        redirect('admin/Slide');
    }
}
