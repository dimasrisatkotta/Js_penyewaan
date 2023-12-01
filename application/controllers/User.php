<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['website'] 	= $this->M_user->website();
		$data['contak'] 	= $this->M_user->contak();
		$data['slide'] 		= $this->M_user->slide();
		$data['layanan'] 	= $this->M_user->layanan();
		$data['about'] 		= $this->M_user->about();
		$data['solusi'] 	= $this->M_user->solusi();
		$data['kategori'] 	= $this->M_user->kategori();

		$this->load->view('user/Header', $data);
		$this->load->view('user/Index', $data);
		$this->load->view('user/Footer', $data);
	}

	public function produk()
	{
		$data['website'] 		= $this->M_user->website();
		$data['contak'] 		= $this->M_user->contak();
		$data['about'] 			= $this->M_user->about();
		$data['kategori'] 		= $this->M_user->kategori();
		
		$id_kategori = $_GET['id_kategori'];
		$data['kategori_prod'] 	= $this->M_user->kategori_prod($id_kategori);
		$data['produk'] = $this->M_user->produk($id_kategori);

		$this->load->view('user/Header', $data);
		$this->load->view('user/Produk', $data);
		$this->load->view('user/Footer', $data);
	}

	public function sewa()
	{
		$data['website'] 		= $this->M_user->website();
		$data['contak'] 		= $this->M_user->contak();
		$data['about'] 			= $this->M_user->about();
		$data['kategori'] 		= $this->M_user->kategori();
		
		$this->load->view('user/Header', $data);
		$this->load->view('user/Sewa', $data);
		$this->load->view('user/Footer', $data);
	}

	public function tambah_sewa()
    {
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
			'proses'    	=> 'Belum diproses',
			'tgl'    		=> date("Y-m-d")

        );

        $this->db->insert('sewa', $data);
        $this->session->set_flashdata('sukses', 'sukses');
        redirect('User/sewa');
    }
}
