<?php 
defined('BASEPATH') OR exit('NO direct script access allowed');

class Manajemen extends CI_Model 
{
    public function data_anggota(){
      $this->db->select('*');
      $this->db->from('keuangan');   
      $query = $this->db->get();
      return $query;
    }
    public function data_simpanan(){
      $this->db->select('*');
      $this->db->from('psychologist');
      $this->db->join('keuangan','keuangan.id_dokter = psychologist.id');      
      $query = $this->db->get();
      return $query;
    }
    function join2table(){
      $this->db->select('*');
      $this->db->from('psychologist');
      $this->db->join('keuangan','keuangan.id_dokter = psychologist.id');      
      $query = $this->db->get();
      return $query;
    }

}
