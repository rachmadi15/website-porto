<?php 
defined('BASEPATH') OR exit('NO direct script access allowed');

class News_model extends CI_Model 
{
    public function getDataNews()
    {
        $this->db->select('*');
        $this->db->from('news');
        $query = $this->db->get();
        return $query->result();
    }

    public function getNewsById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function countNews()
    {
        $sql = "Select count(id) as total from news";
        $result = $this->db->query($sql);
        return $result->row()->total;
    }

    public function getDataNewsDetail($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('news');
        return $query->row();
    }

    public function InsertDataNews($data)
    {
        $this->db->insert('news', $data);
    }

    public function DeleteDataNews($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('news');
    }

    public function EditDataNews($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('news', $data);
    }

    public function berita_baru()
    {
        $sql = "Select * from news where judul in (Select judul from berita_baru)";
        $result = $this->db->query($sql)->row();
        return $result;
        
    }


}