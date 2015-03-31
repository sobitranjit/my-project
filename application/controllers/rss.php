<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class rss extends CI_Controller {

       
     	function __construct(){
		parent::__construct();
		$this->load->helper('xml');
        $this->load->helper('text');
        $this->load->model('post_model');
		}


function index()
{
	$posts = $this ->post_model -> get_post();
	$data['feed_name'] = 'rss feed'; // the url to the feed

	$data['feed_url'] = 'http://www.sobitranjit.com.np/feed'; // the url to the feed
    $data['encoding'] = 'utf-8'; // the encoding
    $data['page_description'] = 'The latest blog post '; //  description
    $data['page_language'] = 'en-en'; // the language
    $data['creator_email'] = 'sobit.ranjit@gmail.com'; //  email
      
 //  email
    $data['posts'] = $posts;  
    header("Content-Type: application/rss+xml"); // important!



    $this->load->view('rss', $data);


}


}


         ?>
