<?php 
defined('BASEPATH') OR exit('NO direct script access allowed');

class Keuangan_model extends CI_Model 
{
    public function getDataKeuangan()
    {
        $this->db->select('*');
        $this->db->from('keuangan');
        $query = $this->db->get();
        return $query->result();
    }

    public function getKeuanganById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function sumKeuangan()
    {
        $sql = "Select sum(harga) as total from keuangan";
        $result = $this->db->query($sql);
        return $result->row()->total;
    }

    public function InsertDataSch($data)
    {
        $this->db->insert('keuangan', $data);
    }

    public function DeleteDataSch($val)
    {
        $this->db->where('id',$val);
        $this->db->delete('keuangan');
    }

    public function EditDataSch($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('keuangan', $data);
    }

    public function getDataKeuanganDetail($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('keuangan');
        return $query->row();
    }

}