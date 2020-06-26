<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MMasuk extends CI_Model
{
    function AddData($tabel, $data=array())
    {
        $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

    function GetData($tabel)
    {
        $query= $this->db->get($tabel);
        return $query->result();
    }

    function GetDataWhere($id,$nilai)
    {
        $this->db->from('tbl_barang as a, tbl_masuk as b');
        $this->db->where('a.id_barang = `b`.`id_barang`');
        $this->db->where($id,$nilai);
        $query= $this->db->get();
        return $query;
    }
     function list_barang()
     {
        return $this->db->get('tbl_barang')->result();
     }
}