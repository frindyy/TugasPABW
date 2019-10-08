<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_penduduk');
	}
	
	public function index()
	{
		$data['content'] = 'v_penduduk';
		$data['title']='Data penduduk';
		$data['title2']='Data penduduk';
		$data['penduduk'] = $this->m_penduduk->get_penduduk()->result_array(); 
		$this->load->view('template/content',$data);
	}

	// public function tambah(){
	// 	$data['content'] = 'form_tambah';
	// 	$data['title']='Tambah Penduduk';
	// 	$data['title2']='Tambah Penduduk';
	// 	$this->load->view('template/content',$data);
	// }

	public function tambah_penduduk(){
		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['content'] = 'form_tambah';
			$data['title']='Tambah Penduduk';
			$data['title2']='Tambah Penduduk';
			$this->load->view('template/content',$data);
		} else {
	// Jika Form validation benar maka akan di masukan di database bagian dan di tampilkan
			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tgl_lahir = date('Y-m-d',strtotime($this->input->post('tgl_lahir')));
			$alamat = $this->input->post('alamat');

			$data = array(
					'nik' => $nik,
					'nama' => $nama,
					'jenis_kelamin' => $jenis_kelamin,
					'tempat_lahir' => $tempat_lahir,
					'tgl_lahir' => $tgl_lahir,
					'alamat' => $alamat
				);

				$this->m_penduduk->insert_penduduk('penduduk',$data);
				$this->session->set_flashdata('pesan','Ditambahkan');
				redirect('penduduk','refresh');
			}
		}

		public function edit_penduduk($nik){
			$data['content'] = 'form_edit_penduduk';
			$data['title']='Edit Data penduduk';
			$data['title2']='Edit Data penduduk';
			$data['penduduk'] = $this->m_penduduk->get_penduduk_id($nik)->row_array(); 
			$this->load->view('template/content',$data);
		}

		public function edit_penduduk_proses(){
			$this->form_validation->set_rules('nik', 'Nik', 'required');
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
			$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('alamat', 'alamat', 'required');

			if ($this->form_validation->run() == FALSE) {
				$data['content'] = 'form_edit_penduduk';
				$data['title']='Edit Data penduduk';
				$data['title2']='Edit Data penduduk';
				$this->load->view('template/content',$data);
			} else {
		// Jika Form validation benar maka akan di masukan di database bagian dan di tampilkan
				$nik = $this->input->post('nik');
				$nama = $this->input->post('nama');
				$jenis_kelamin = $this->input->post('jenis_kelamin');
				$tempat_lahir = $this->input->post('tempat_lahir');
				$tgl_lahir = date('Y-m-d',strtotime($this->input->post('tgl_lahir')));
				$alamat = $this->input->post('alamat');

				$data = array(
						'nama' => $nama,
						'jenis_kelamin' => $jenis_kelamin,
						'tempat_lahir' => $tempat_lahir,
						'tgl_lahir' => $tgl_lahir,
						'alamat' => $alamat
					);

					$this->m_penduduk->update_penduduk($nik,$data);
					$this->session->set_flashdata('pesan','Diedit');
					redirect('penduduk','refresh');
				}
		}

		public function hapus_penduduk($nik){
			$this->m_penduduk->hapus_penduduk($nik);
			$this->session->flashdata('pesan','Dihapus');
			redirect('penduduk','refresh');
		}

}
