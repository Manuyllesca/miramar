<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class funcs_home_ajax extends CI_Controller {
	
	
	public function __construct(){
		parent::__construct();
			if (!isset($_SESSION)){
			session_start();
			}
			var_dump($_SESSION);
		
	}
	
	public function change_to_type($var){
		
	  $_SESSION['sess_tipo_propiedad'] == $var; 
	}
	
	

}