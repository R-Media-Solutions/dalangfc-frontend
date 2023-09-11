<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matches extends CI_Controller {
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

    $data['title']          = TITLE . 'Pertandingan';
    $data['headstyles']     = $headstyles;
    $data['scripts']        = $loadscripts;
    $data['scripts_init']   = $scripts_init;
    $data['scripts_add']    = $scripts_add;
    $data['main_content']   = 'pages/matches';

    $this->load->view('template', $data);
	}

  public function standing()
	{
    $headstyles             = "";
    $loadscripts            = "";
    $scripts_init           = "";
    $scripts_add            = '';

    $data['title']          = TITLE . 'Klasemen Liga';
    $data['headstyles']     = $headstyles;
    $data['scripts']        = $loadscripts;
    $data['scripts_init']   = $scripts_init;
    $data['scripts_add']    = $scripts_add;
    $data['main_content']   = 'pages/standing';

    $this->load->view('template', $data);
	}

  public function standingCup()
	{
    $headstyles             = "";
    $loadscripts            = "";
    $scripts_init           = "";
    $scripts_add            = '';

    $data['title']          = TITLE . 'Klasemen Cup';
    $data['headstyles']     = $headstyles;
    $data['scripts']        = $loadscripts;
    $data['scripts_init']   = $scripts_init;
    $data['scripts_add']    = $scripts_add;
    $data['main_content']   = 'pages/standing-cup';

    $this->load->view('template', $data);
	}

  public function broadcasts()
	{
    $headstyles             = "";
    $loadscripts            = "";
    $scripts_init           = "";
    $scripts_add            = '';

    $data['title']          = TITLE . 'Siaran Pertandingan';
    $data['headstyles']     = $headstyles;
    $data['scripts']        = $loadscripts;
    $data['scripts_init']   = $scripts_init;
    $data['scripts_add']    = $scripts_add;
    $data['main_content']   = 'pages/broadcasts';

    $this->load->view('template', $data);
	}

  public function matchLive()
	{
    $headstyles             = "";
    $loadscripts            = "";
    $scripts_init           = "";
    $scripts_add            = '';

    $data['title']          = TITLE . 'Pertandingan Langsung';
    $data['headstyles']     = $headstyles;
    $data['scripts']        = $loadscripts;
    $data['scripts_init']   = $scripts_init;
    $data['scripts_add']    = $scripts_add;
    $data['main_content']   = 'pages/match-live';

    $this->load->view('template', $data);
	}

  public function liveTextStream()
	{
    $headstyles             = "";
    $loadscripts            = "";
    $scripts_init           = "";
    $scripts_add            = '';

    $data['title']          = TITLE . 'Berita Pertandingan Langsung';
    $data['headstyles']     = $headstyles;
    $data['scripts']        = $loadscripts;
    $data['scripts_init']   = $scripts_init;
    $data['scripts_add']    = $scripts_add;
    $data['main_content']   = 'pages/live-text-stream';

    $this->load->view('template', $data);
	}

  public function upcomingMatch()
	{
    $headstyles             = "";
    $loadscripts            = "";
    $scripts_init           = "";
    $scripts_add            = '';

    $data['title']          = TITLE . 'Pertandingan Mendatang';
    $data['headstyles']     = $headstyles;
    $data['scripts']        = $loadscripts;
    $data['scripts_init']   = $scripts_init;
    $data['scripts_add']    = $scripts_add;
    $data['main_content']   = 'pages/upcoming-match';

    $this->load->view('template', $data);
	}
}
