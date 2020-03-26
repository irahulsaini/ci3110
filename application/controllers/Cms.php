<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {


	public function index($page='home'){
		$data = array();
		get_template($page,$data);
	}
	public function form_handler(){
	    $type = $this->input->get('type');
	    switch($type){
	        case 'contact':
	            $this->load->helper('form_handler');
	            $status  = form_handler_helper::contact_form($this->input->post());
	            if(empty($status)){
	                echo 'Unable to send your message at this time, please try again later';
	            }else{
	                echo $status;
	            }
	        break;
	    }
	}
	public function handle_404(){
	    show_404();
	}
}
