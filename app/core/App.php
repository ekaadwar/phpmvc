<?php 
class App{
	protected 	$controller = "Home", 
				$method = "index", 
				$params = [];

	public function __construct(){
		$url = $this->parseURL();
		
		// controller
		if( file_exists('../app/controllers/' . $url[0]. '.php')  ){
			$this->controller = $url[0];
			unset($url[0]);
		}

		require_once '../app/controllers/' . $this->controller . '.php';

		$this->controller = new $this->controller;

		// method
		if( isset($url[1]) ){
			if( method_exists($this->controller, $url[1]) ){
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		//parameter
		if( !empty($url) ){
			var_dump($url);
		}
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