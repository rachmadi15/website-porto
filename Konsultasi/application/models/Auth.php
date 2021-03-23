<?php 
class Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
    }
    function tampil_data(){
		return $this->db->get('user');
    }
    function tampil_data2(){
		return $this->db->get('psychologist');
    }
    function tambah_transaksi($table, $data)
    {
        $this->db->insert($table, $data);
    }
    function tambah_transaksi2($table, $data)
    {
        $this->db->insert($table, $data);
    }
    function berita_baru($data)
    {
        $this->db->insert('berita_baru', $data);
    }
    function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('psychologist');
        $this->db->like('fullname', $keyword);
        $this->db->or_like('address', $keyword);
    }
    function tampil_data_detail($where){
		return $this->db->get('user', $where);
    }
    function tampil_dokter(){
		return $this->db->get('dokter');
	}
    function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function edit_data($where, $table)
    {
       $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
       $this->db->where($where);
       $this->db->update($table, $data);
    }
    function hapus($where,$table)
    {
        $this->db->where($where);

        $this->db->delete($table);
    }
    function hitung($val)
    {
        $sql = "Select count(id) as total from pasien where id = '$val'";
        $result = $this->db->query($sql);
        return $result->row();
    }
	function register($nama,$email,$password,$provinsi,$kota,$foto)
	{
		$data_user = array(
            'nama'=>$nama,
            'email'=>$email,
            'password'=>password_hash($password,PASSWORD_DEFAULT),
            'provinsi'=>$provinsi,
            'kota'=>$kota,
            'is_active'=>'0',
            'foto'=>$foto
		);
		$this->db->insert('user',$data_user);
    }
    function register4($data)
    {
        $this->db->insert('user_token', $data);
    }
    function register3($nama,$password){
		$data_user = array(
            'name'=>$nama,
            'username'=>$nama,
            'password'=>password_hash($password,PASSWORD_DEFAULT)
		);
		$this->db->insert('users',$data_user);
    }
    function register2($datauser)
	{
		$this->db->insert('user',$datauser);
    }
    function login_user($email,$password)
	{
        $query = $this->db->get_where('user',array('email'=>$email));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('id',$data_user->id);
                $this->session->set_userdata('email',$email);
				$this->session->set_userdata('nama',$data_user->nama);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
}
?>