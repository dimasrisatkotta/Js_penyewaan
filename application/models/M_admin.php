<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Admin extends Ci_model
{
    public function jml_baca()
    {
        $this->db->where('proses', 'Belum diproses');
        $query = $this->db->get('sewa');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jml_penyewa()
    {
        $query = $this->db->get('sewa');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jml_kategori()
    {
        $query = $this->db->get('kategori');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jml_produk()
    {
        $query = $this->db->get('produk');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function baca()
    {
        $this->db->select("*");
        $this->db->from('sewa');
        $this->db->where('proses', 'Belum diproses');
        $this->db->order_by('tgl', 'DESC');
        $this->db->limit(5);

        $query = $this->db->get();
        return $query->result_array();
    }

    function slide()
    {
        $this->db->select("*");
        $this->db->from('slide');

        $query = $this->db->get();
        return $query->result_array();
    }

    function layanan()
    {
        $this->db->select("*");
        $this->db->from('layanan');

        $query = $this->db->get();
        return $query->result_array();
    }

    function kategori()
    {
        $this->db->select("*");
        $this->db->from('kategori');

        $query = $this->db->get();
        return $query->result_array();
    }

    function produk()
    {
        $this->db->select('produk.*, kategori.kategori, kategori.deskripsi');
        $this->db->from('produk');
        $this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori');

        $query = $this->db->get();
        return $query->result_array();
    }

    function sewa($awal, $akhir, $proses)
    {
        if($awal == 'ALL' && $akhir == 'ALL') {
            $this->db->select("*");
            $this->db->from('sewa');
            $this->db->order_by('tgl', 'DESC');
            
        }elseif($proses == 'ALL') {
            $this->db->select("*");
            $this->db->from('sewa');
            $this->db->where('tgl >=', $awal);
            $this->db->where('tgl <=', $akhir);
            $this->db->order_by('tgl', 'DESC');
    
        }else {
            $this->db->select("*");
            $this->db->from('sewa');
            $this->db->where('tgl >=', $awal);
            $this->db->where('tgl <=', $akhir);
            $this->db->where('proses', $proses);
            $this->db->order_by('tgl', 'DESC');
        }
        

        $query = $this->db->get();
        return $query->result_array();
    }

    

    // function sewa()
    // {
    //     $this->db->select("*");
    //     $this->db->from('sewa');
    //     $this->db->order_by('tgl', 'DESC');

    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    function hapus_data($where, $table)
    {
        $this->db->where($where);

        $this->db->delete($table);
    }

    function laporan()
    {
        $this->db->select("*");
        $this->db->from('sewa');
        $this->db->order_by('tgl', 'DESC');

        $query = $this->db->get();
        return $query->result_array();
    }

}