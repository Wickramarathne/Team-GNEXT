<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Players extends User_controller{
    var $data;
    
    public function __construct() {
        parent::__construct();
        $this->data = array(
            'site_name' => $this->config->item('site_name'),
            'company_name' => $this->config->item('company_name'),
            'title' => 'Suppliers - ' . $this->config->item('site_name'),
            'description' => 'Customers Details of' . $this->config->item('description'),
            'usertype' => "Player",
        );
    }
    
    public function play_game(){
        $data=$this->data;
        $data['scripts'][0]['src'] = base_url() . "assets/plugins/form-validation/jquery.validate.min.js";
        
        $data['header'] = $this->load->view('template/a_vheader', $data, TRUE);
        $data['footer'] = $this->load->view('template/a_vfooter', NULL, TRUE);

        $this->load->view('includes/v_include_header', $data);
        $this->load->view('players/v_play_game');
        $this->load->view('includes/v_include_footer');
    }   
}
