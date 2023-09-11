<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
  /**
   * Constructor.
   */
  function __construct()
  {
      parent::__construct();
  }
  
	public function index()
	{
    $headstyles             = "";
    $loadscripts            = "";
    $scripts_init           = "";
    $scripts_add            = '';

    $data['title']          = TITLE . 'Berita';
    $data['headstyles']     = $headstyles;
    $data['scripts']        = $loadscripts;
    $data['scripts_init']   = $scripts_init;
    $data['scripts_add']    = $scripts_add;
    $data['main_content']   = 'pages/news';

    $this->load->view('template', $data);
	}
}
