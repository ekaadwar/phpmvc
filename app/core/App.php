<?php 

class App{
	public function __construct(){
		$url = $this->parseURL();
		var_dump($url);//mengambil niali url
	}

	public function parseURL(){
		if( isset($_GET['url']) ){
			$url = rtrim($_GET['url'],'/'); //menghilangkan tanda '/' di akhir url
			$url = filter_var($url, FILTER_SANITIZE_URL); //menfilter karaker2 aneh
			$url = explode('/', $url); //menjadikan tiap elemen url menjadi array
			return $url;
		}
	}
}