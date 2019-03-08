<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarik_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_tariks( )
    {
        $query = $this->db->get('tb_tarik');
        return $query->result_array();
    
    }

    public function get_tariks_id($id)
    {
    	$query = $this->db->get_where('tb_tarik', array('id_tarik' => $id));
    	return $query->row_array();
    }

    public function get_tariks_select_id($id)
    {
        $this->db->select('nominal');
        $query = $this->db->get_where('tb_tarik', array('id_tarik' => $id));
        return $query->row_array();
    }

    public function get_tariks_count()
    {
        $query = $this->db->count_all_results('tb_tarik');
        return $query;
    }

    public function set_tariks()
    {
    	$data = array(
    		'nominal' => $this->input->post('nominal'),
    		'ket' => $this->input->post('ket')
    	);

    	return $this->db->insert('tb_tarik', $data);
    }

    public function update_tariks($id)
    {
    	$data = array(

    		'nominal' => $this->input->post('nominal'),
    		'ket' => $this->input->post('ket')

    	);
    	$this->db->where('id_tarik', $id);
    	return $this->db->update('tb_tarik',$data);
    }

    public function del_tariks($id)
    {
    	return $this->db->delete('tb_tarik', array('id_tarik' => $id));
    }

}
