<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_saldos()
    {
    	$query = $this->db->get_where('tb_saldo', array('id' => 1));
    	return $query->row_array();
    }

    public function hapus_saldos($id, $news)
    {
        $saldos = array();
        foreach ($news as $saldo) {
            $saldos[] = $saldo['saldo'];
        }
        $saldos = implode($saldos);

        $this->db->select('jumlah_saldo');
        $query = $this->db->get_where('tb_saldo', array('id' => 1));
        $jml_saldo = $query->row_array();
        $jml = $jml_saldo['jumlah_saldo'] - $saldos;

        $data = array('jumlah_saldo' => $jml);

        $this->db->where('id', 1);
        return $this->db->update('tb_saldo', $data);

    }

    public function tambah_saldos($id, $tariks)
    {
        $saldos = array();
        foreach ($tariks as $saldo) {
            $saldos[] = $saldo['nominal'];
        }
        $saldos = implode($saldos);
        $this->db->select('jumlah_saldo');
        $query = $this->db->get_where('tb_saldo', array('id' => 1));
        $jml_saldo = $query->row_array();
        $jml = $jml_saldo['jumlah_saldo'] + $saldos;

        $data = array('jumlah_saldo' => $jml);

        $this->db->where('id', 1);
        return $this->db->update('tb_saldo', $data);

    }
}