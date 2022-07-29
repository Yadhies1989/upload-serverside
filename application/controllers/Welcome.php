<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		echo "test upload";
	}

	public function filter()
	{
		$data['title'] = 'Filter Data';
		// $this->load_karyawan();



		$this->load->view('filter', $data);
	}

	public function load_karyawan()
	{
		$karyawan = $this->input->get('karyawan');
		// $karyawan = 3;

		if ($karyawan == 0) {
			$data = $this->db->get('karyawan')->result();
		} else {
			$data = $this->db->get_where('karyawan', ['id' => $karyawan])->result();
		}
		echo json_encode($data);
	}
}
