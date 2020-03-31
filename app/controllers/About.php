<?php 

class About extends Controller
{
	public function index( $nama = "Eka", $pekerjaan = "programer", $umur = "24" )
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = "About Me";
		
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page()
	{
		$data['judul'] = "My Pages";
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}