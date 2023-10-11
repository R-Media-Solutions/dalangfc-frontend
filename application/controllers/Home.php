<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  /**
   * Constructor.
   */
  function __construct()
  {
      parent::__construct();
      $this->load->model('Member_model');
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

        $arrMember              = $this->Member_model->get_data_member();
        $arrPlayer              = array();
        if(!empty($arrMember)){
            foreach($arrMember AS $rowMember){
                if($rowMember->is_star != 1) continue;
                $arrPlayer[$rowMember->type_position][] = $rowMember;
            }
        }
        $data['player']         = $arrPlayer;

        $this->load->view('template', $data);
	}
}
