<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
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
        $data['layanan'] = $this->M_admin->layanan();
        $data['jml_baca']   = $this->M_admin->jml_baca();
        $data['baca']       = $this->M_admin->baca();
        $data['website'] = $this->M_user->website();
        $this->load->view('admin/template_admin/Header', $data);
        $this->load->view('admin/Layanan', $data);
        $this->load->view('admin/template_admin/Footer', $data);
        $this->load->view('admin/template_admin/Alert');
    }

    public function edit_data()
    {

        $judul      = $this->input->post('judul');
        $deskripsi  = $this->input->post('deskripsi');
        $id         = $this->input->post('id');

        
        $this->db->set('judul', $judul);
        $this->db->set('deskripsi', $deskripsi);
        $this->db->where('id', $id);
        $this->db->update('layanan');

        $this->session->set_flashdata('sukses', 'sukses');
        redirect('admin/Layanan');
    }
}
