<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_data extends CI_Controller
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
        $data['baca']       = $this->M_admin->baca();

        $data['kategori']   = $this->M_admin->kategori();

        $this->load->view('admin/template_admin/Header', $data);
        $this->load->view('admin/Kategori', $data);
        $this->load->view('admin/template_admin/Footer', $data);
        $this->load->view('admin/template_admin/Alert');
    }

    public function tambah_kategori()
    {
        $kategori      = $this->input->post('kategori');
        $deskripsi        = $this->input->post('deskripsi');

        //cek jika ada gambar yang akan di upload
        $upload_foto    = $_FILES['gambar']['name'];

        if ($upload_foto) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '30000';
            $config['upload_path']   = './assets/user/img/kategori/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $new_foto = $this->upload->data('file_name');
            } else {
                echo $this->upload->dispay_errors();
            }
        }


        $data = array(
            'kategori'     => $kategori,
            'deskripsi' => $deskripsi,
            'gambar'    => $new_foto

        );

        $this->db->insert('kategori', $data);
        $this->session->set_flashdata('sukses', 'sukses');
        redirect('admin/Master_data');
    }

    public function edit_kategori()
    {

        $data['kategori'] = $this->db->get_where('kategori', ['id_kategori' => $this->input->post('id_kategori')])->row_array();

        $deskripsi  = $this->input->post('deskripsi');
        $kategori  = $this->input->post('kategori');
        $id_kategori  = $this->input->post('id_kategori');

        //cek jika ada gambar yang akan di upload
        $upload_foto    = $_FILES['gambar']['name'];

        if ($upload_foto) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '30000';
            $config['upload_path']   = './assets/user/img/kategori/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $foto_lama = $data['kategori']['gambar'];
                if ($foto_lama != 'default.png') {
                    unlink(FCPATH . './assets/user/img/kategori/' . $foto_lama);
                }

                $new_foto = $this->upload->data('file_name');
                $this->db->set('gambar', $new_foto);
            } else {
                echo $this->upload->dispay_errors();
            }
        }
        $this->db->set('kategori', $kategori);
        $this->db->set('deskripsi', $deskripsi);
        $this->db->where('id_kategori', $id_kategori);
        $this->db->update('kategori');

        $this->session->set_flashdata('sukses', 'sukses');
        redirect('admin/Master_data');
    }

    function hapus_kategori($id_kategori)
    {
        $where = array('id_kategori' => $id_kategori);
        $this->M_admin->hapus_data($where, 'produk');
        $this->M_admin->hapus_data($where, 'kategori');
        $this->session->set_flashdata('hapus', 'hapus');
        redirect('admin/Master_data');
    }

    public function produk()
    {
        $data['editor_count'] = 100;
        $data['website']    = $this->M_user->website();
        $data['jml_baca']   = $this->M_admin->jml_baca();
        $data['baca']       = $this->M_admin->baca();

        $data['kategori']   = $this->M_admin->kategori();
        $data['produk']   = $this->M_admin->produk();

        $this->load->view('admin/template_admin/Header', $data);
        $this->load->view('admin/Produk', $data);
        $this->load->view('admin/template_admin/Footer', $data);
        $this->load->view('admin/template_admin/Alert');
    }

    public function edit_produk()
    {

        $data['produk'] = $this->db->get_where('produk', ['id' => $this->input->post('id')])->row_array();

        $id_kategori  = $this->input->post('id_kategori');
        $produk  = $this->input->post('produk');
        $tipe  = $this->input->post('tipe');
        $s_jam  = $this->input->post('s_jam');
        $min_sewa  = $this->input->post('min_sewa');
        $har_opr  = $this->input->post('har_opr');
        $id  = $this->input->post('id');

        //cek jika ada gambar yang akan di upload
        $upload_foto    = $_FILES['gambar']['name'];

        if ($upload_foto) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '30000';
            $config['upload_path']   = './assets/user/img/produk/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $foto_lama = $data['produk']['gambar'];
                if ($foto_lama != 'default.png') {
                    unlink(FCPATH . './assets/user/img/produk/' . $foto_lama);
                }

                $new_foto = $this->upload->data('file_name');
                $this->db->set('gambar', $new_foto);
            } else {
                echo $this->upload->dispay_errors();
            }
        }
        $this->db->set('id_kategori', $id_kategori);
        $this->db->set('produk', $produk);
        $this->db->set('tipe', $tipe);
        $this->db->set('s_jam', $s_jam);
        $this->db->set('min_sewa', $min_sewa);
        $this->db->set('har_opr', $har_opr);
        $this->db->where('id', $id);
        $this->db->update('produk');

        $this->session->set_flashdata('sukses', 'sukses');
        redirect('admin/Master_data/produk');
    }

    public function tambah_produk()
    {
        $id_kategori  = $this->input->post('id_kategori');
        $produk  = $this->input->post('produk');
        $tipe  = $this->input->post('tipe');
        $s_jam  = $this->input->post('s_jam');
        $min_sewa  = $this->input->post('min_sewa');
        $har_opr  = $this->input->post('har_opr');

        //cek jika ada gambar yang akan di upload
        $upload_foto    = $_FILES['gambar']['name'];

        if ($upload_foto) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '30000';
            $config['upload_path']   = './assets/user/img/produk/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $new_foto = $this->upload->data('file_name');
            } else {
                echo $this->upload->dispay_errors();
            }
        }


        $data = array(
            'id_kategori'   => $id_kategori,
            'produk'        => $produk,
            'tipe'          => $tipe,
            's_jam'         => $s_jam,
            'min_sewa'      => $min_sewa,
            'har_opr'       => $har_opr,
            'gambar'        => $new_foto

        );

        $this->db->insert('produk', $data);
        $this->session->set_flashdata('sukses', 'sukses');
        redirect('admin/Master_data/produk');
    }

    function hapus_produk($id)
    {
        $where = array('id' => $id);
        $this->M_admin->hapus_data($where, 'produk');
        $this->session->set_flashdata('hapus', 'hapus');
        redirect('admin/Master_data/produk');
    }

    public function sewa()
    {
        $awal = $this->input->post('awal');
        $akhir = $this->input->post('akhir');
        $proses = $this->input->post('proses');
        
        if($awal == NULL){
            $awal = 'ALL';
            $akhir = 'ALL';
            $proses = 'ALL';
        }else{
            $awal = $this->input->post('awal');
            $akhir = $this->input->post('akhir');
            $proses = $this->input->post('proses');
        }

        $data['awal']= $awal;
        $data['akhir']= $akhir;
        $data['proses']= $proses;

        $data['editor_count'] = 100;
        $data['website']    = $this->M_user->website();
        $data['jml_baca']   = $this->M_admin->jml_baca();
        $data['baca']       = $this->M_admin->baca();

        $data['sewa']   = $this->M_admin->sewa($awal, $akhir, $proses);

        $this->load->view('admin/template_admin/Header', $data);
        $this->load->view('admin/Sewa', $data);
        $this->load->view('admin/template_admin/Footer', $data);
        $this->load->view('admin/template_admin/Alert');
    }

    public function tambah_sewa()
    {
        $proses     = $this->input->post('proses');
        $nama      	= $this->input->post('nama');
		$perusahaan	= $this->input->post('perusahaan');
		$email      = $this->input->post('email');
		$tlp      	= $this->input->post('tlp');
		$tgl_sewa  	= $this->input->post('tgl_sewa');
		$lama_sewa	= $this->input->post('lama_sewa');
		$spl_alat	= $this->input->post('spl_alat');
		$lok_proyek	= $this->input->post('lok_proyek');
		
       
        $data = array(
            'nama'     		=> $nama,
			'perusahaan'	=> $perusahaan,
			'email'     	=> $email,
			'tlp'     		=> $tlp,
			'tgl_sewa'     	=> $tgl_sewa,
			'lama_sewa'     => $lama_sewa,
			'spl_alat'     	=> $spl_alat,
			'lok_proyek'   	=> $lok_proyek,
			'proses'    	=> $proses,
			'tgl'    		=> date("Y-m-d")

        );

        $this->db->insert('sewa', $data);
        $this->session->set_flashdata('sukses', 'sukses');
        redirect('admin/Master_data/sewa');
    }

    public function edit_sewa()
    {

        $proses     = $this->input->post('proses');
        $nama      	= $this->input->post('nama');
		$perusahaan	= $this->input->post('perusahaan');
		$email      = $this->input->post('email');
		$tlp      	= $this->input->post('tlp');
		$tgl_sewa  	= $this->input->post('tgl_sewa');
		$lama_sewa	= $this->input->post('lama_sewa');
		$spl_alat	= $this->input->post('spl_alat');
		$lok_proyek	= $this->input->post('lok_proyek');

        $id         = $this->input->post('id');

        
        $this->db->set('proses', $proses);
        $this->db->set('nama', $nama);
        $this->db->set('perusahaan', $perusahaan);
        $this->db->set('email', $email);
        $this->db->set('tlp', $tlp);
        $this->db->set('tgl_sewa', $tgl_sewa);
        $this->db->set('lama_sewa', $lama_sewa);
        $this->db->set('spl_alat', $spl_alat);
        $this->db->set('lok_proyek', $lok_proyek);
       
        $this->db->where('id', $id);
        $this->db->update('sewa');

        $this->session->set_flashdata('sukses', 'sukses');
        redirect('admin/Master_data/sewa');
    }

    function hapus_sewa($id)
    {
        $where = array('id' => $id);
        $this->M_admin->hapus_data($where, 'sewa');
        $this->session->set_flashdata('hapus', 'hapus');
        redirect('admin/Master_data/sewa');
    }

    public function cetak()
    {
        $awal = $_GET['awal'];
        $akhir = $_GET['akhir'];
        $proses = $_GET['proses'];

        $data['editor_count'] = 100;
        $data['website']    = $this->M_user->website();
        $data['jml_baca']   = $this->M_admin->jml_baca();
        $data['baca']       = $this->M_admin->baca();

        $data['sewa']   = $this->M_admin->sewa($awal, $akhir, $proses);

        $this->load->view('admin/Cetak', $data);

    }

}