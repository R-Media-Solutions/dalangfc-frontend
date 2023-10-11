<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
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

        $data['title']          = TITLE . 'Staf / Official';
        $data['headstyles']     = $headstyles;
        $data['scripts']        = $loadscripts;
        $data['scripts_init']   = $scripts_init;
        $data['scripts_add']    = $scripts_add;
        $data['main_content']   = 'pages/staff';

        $this->load->view('template', $data);
    }

    public function player($id = '')
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
        if(empty($id)){
            $data['main_content']   = 'pages/player';
        }else{
            $data['main_content']   = 'pages/player-detail';
        }

        $arrMember              = $this->Member_model->get_data_member($id);
        if(empty($id)){
            $arrPlayer              = array();
            if(!empty($arrMember)){
                foreach($arrMember AS $rowMember){
                    $arrPlayer[$rowMember->type_position][] = $rowMember;
                }
            }
            $data['player']         = $arrPlayer;
        }
        else{
            $data['player']         = $arrMember;
        }
        
        $this->load->view('template', $data);
    }
}
