<?php 

class About{
	public function index( $nama = "Eka", $pekerjaan = "programer" ){
		echo "Hello. Nama saya $nama, saya adalah seorang $pekerjaan";
	}

	public function page(){
		echo "About/page";
	}
}