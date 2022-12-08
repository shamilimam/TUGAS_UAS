<?php
defined('BASEPATH') or exit ('No Direct Script access allow');
class ModelUser extends CI_Model
{
    public function simpandata($data=null)
    {
        return $this->db->insert('user', $data);
    }

    public function cekdata($where=null)
    {
        return $this->db->get_where('user', $where);
    }

    public function getuserwhere($where=null)
    {
        return $this->db->get_where('user', $where);
    }

    public function cekuseraccess($where= null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getuserlimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10.0);
        return $this->db->get();

    }
}