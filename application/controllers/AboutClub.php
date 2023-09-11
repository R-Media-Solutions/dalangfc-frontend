<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutClub extends CI_Controller {
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

    $data['title']          = TITLE . 'Klub';
    $data['headstyles']     = $headstyles;
    $data['scripts']        = $loadscripts;
    $data['scripts_init']   = $scripts_init;
    $data['scripts_add']    = $scripts_add;
    $data['main_content']   = 'pages/about-club';

    $this->load->view('template', $data);
	}
  
	public function clubStats()
	{
    $headstyles             = "";
    $loadscripts            = "";
    $scripts_init           = "";
    $scripts_add            = '';

    $data['title']          = TITLE . 'Statistik Klub';
    $data['headstyles']     = $headstyles;
    $data['scripts']        = $loadscripts;
    $data['scripts_init']   = $scripts_init;
    $data['scripts_add']    = $scripts_add;
    $data['main_content']   = 'pages/club-stats';

    $this->load->view('template', $data);
	}
}
