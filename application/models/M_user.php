<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends Ci_model
{
    function website()
    {
        $this->db->select("*");
        $this->db->from('website');
        $this->db->limit(1);

        $query = $this->db->get();
        return $query->result_array();
    }

    function contak()
    {
        $this->db->select("*");
        $this->db->from('contak');
        $this->db->limit(1);

        $query = $this->db->get();
        return $query->result_array();
    }

    function slide()
    {
        $this->db->select("*");
        $this->db->from('slide');
        $this->db->where('status', 'aktif');

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

    function about()
    {
        $this->db->select("*");
        $this->db->from('about');

        $query = $this->db->get();
        return $query->result_array();
    }

    function solusi()
    {
        $this->db->select("*");
        $this->db->from('solusi');

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

    function produk($id_kategori)
    {
        $this->db->select('produk.*, kategori.kategori, kategori.deskripsi');
        $this->db->from('produk');
        $this->db->where('produk.id_kategori', $id_kategori);
        $this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori');

        $query = $this->db->get();
        return $query->result_array();
    }

    function kategori_prod($id_kategori)
    {
        $this->db->select("*");
        $this->db->from('kategori');
        $this->db->where('id_kategori', $id_kategori);

        $query = $this->db->get();
        return $query->result_array();
    }
}