<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{

		// $data = $this->Produk->fetch_data('produk', ['slug' => $slug])->row_array();
		// cekdb();
		// $this->session->userdata('produk', $data);


		// $data['title'] = "Produk";
		// $data['headmeta'] = " Alkindi  ";
		// $data['description'] = "Your Style";
		// $data['keywords'] = "keywords";
		// $data['subheadtitle'] = "Alkindi Poli Gigi";
		// $data['data'] =
		// 	[
		// 		'title' => 'Gigi Sehat',
		// 		'headmeta' => 'Alkindi ',
		// 		'subheadtitle' => 'Alkindi Poli Gigi',
		// 	];
		// $this->template->load('template', 'templating/home', $data);

		redirect('produk/about/maccine-wash-portable');
	}

	public function about($slug)
	{
		$datax = $this->Produk->fetch_data('produk', ['slug' => $slug])->row_array();

		$data['data'] = json_encode($datax);
		$this->template->load('template2', 'templating/home', $data);
	}
}
