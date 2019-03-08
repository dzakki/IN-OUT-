<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_news( )
    {
        $query = $this->db->get('tb_masukan');
        return $query->result_array();
    
    }

    public function get_news_id($id)
    {
        $query = $this->db->get_where('tb_masukan', array('id_masukan' => $id));
        return $query->row_array();
    }

    public function get_news_select_id($id)
    {

        $this->db->select('saldo');
        $query = $this->db->get_where('tb_masukan', array('id_masukan' => $id));
        return $query->row_array();

    }


    public function get_news_count()
    {
        $query = $this->db->count_all_results('tb_masukan');
        return $query;
    }

    public function get_news_date()
    {
        $this->db->select('MONTH(tanggal)');
        $query = $this->db->get('tb_masukan');
        return $query->result_array();
    }

    public function set_news()
    {
        $data = array(
            'saldo' => $this->input->post('saldo'),
            'ket' => $this->input->post('ket')
        );

        return $this->db->insert('tb_masukan',$data);
    }
    public function update_news($id){
        $data = array(
            'saldo' => $this->input->post('saldo'),
            'ket' => $this->input->post('ket')
        );
        $this->db->where('id_masukan', $id);
        return $this->db->update('tb_masukan',$data);
    }
    public function del_news($id)
    {
        return $this->db->delete('tb_masukan', array('id_masukan' => $id));
    }

}
