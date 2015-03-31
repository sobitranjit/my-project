<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MY_Controller extends CI_Controller {


	/**
 	* constructer
 	*/

		function __construct(){
			
		parent::__construct();
		$this->load->model('register_model');
		


		$is_logged_in =$this->session->userdata('is_logged_in');
		if(!$is_logged_in)
       {
       //echo "you do not have permission";
          redirect(base_url() . 'login');
      }




}
 }
