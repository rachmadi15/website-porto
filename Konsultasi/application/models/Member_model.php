<?php 
defined('BASEPATH') OR exit('NO direct script access allowed');

class Member_model extends CI_Model 
{
    public function getDataMember()
    {
        $this->db->select('*');
        $this->db->from('member');
        $query = $this->db->get();
        return $query->result();
    }

    public function getMemberById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function countMember()
    {
        $sql = "Select count(id) as total from member";
        $result = $this->db->query($sql);
        return $result->row()->total;
    }

    public function InsertDataMbr($data)
    {
        $this->db->insert('member', $data);
    }

    public function DeleteDataMbr($val)
    {
        $this->db->where('id',$val);
        $this->db->delete('member');
    }

    public function EditDataMbr($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('member', $data);
    }

    public function getDatamemberDetail($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('member');
        return $query->row();
    }

}