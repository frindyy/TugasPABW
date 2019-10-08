<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penduduk extends CI_Model {

	public function get_penduduk(){
		return $this->db->get('penduduk');
	}

	public function insert_penduduk($table,$data){
		return $this->db->insert($table,$data);
	}

	public function get_penduduk_id($nik){
		return $this->db->get_where('penduduk',['nik'=>$nik]);
	}

	public function update_penduduk($nik,$data){
		$this->db->where('nik',$nik);
		$this->db->update('penduduk',$data);
	}

	public function hapus_penduduk($nik){
		$this->db->where('nik',$nik);
		$this->db->delete('penduduk');
	}

}

