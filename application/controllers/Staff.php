<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
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

    $data['title']          = TITLE . 'Staf / Official';
    $data['headstyles']     = $headstyles;
    $data['scripts']        = $loadscripts;
    $data['scripts_init']   = $scripts_init;
    $data['scripts_add']    = $scripts_add;
    $data['main_content']   = 'pages/staff';

    $this->load->view('template', $data);
	}
  
	public function player()
	{
    $headstyles             = "";
    $loadscripts            = "";
    $scripts_init           = "";
    $scripts_add            = '';

    $data['title']          = TITLE . 'Daftar Permain';
    $data['headstyles']     = $headstyles;
    $data['scripts']        = $loadscripts;
    $data['scripts_init']   = $scripts_init;
    $data['scripts_add']    = $scripts_add;
    $data['main_content']   = 'pages/player';

    $this->load->view('template', $data);
	}
}
