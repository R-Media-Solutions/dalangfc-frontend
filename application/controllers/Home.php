<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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

    $data['title']          = TITLE . 'Beranda';
    $data['headstyles']     = $headstyles;
    $data['scripts']        = $loadscripts;
    $data['scripts_init']   = $scripts_init;
    $data['scripts_add']    = $scripts_add;
    $data['main_content']   = 'pages/home';

    $this->load->view('template', $data);
	}
}
