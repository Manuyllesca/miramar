<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class funcs_home_ajax extends CI_Controller {
	
	
	public function __construct(){
		parent::__construct();
			if (!isset($_SESSION)){
			
			}
		
		
	}
	
	public function change_to_type(){
	session_start();
	  $_SESSION['sess_tipo_propiedad'] = $_GET['tipo']; 
	  echo $_SESSION['sess_tipo_propiedad'];
	 
	}
	
	

}