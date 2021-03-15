<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
  }

  function index (){
    $this->_show_view('admin/index');
  }

  public function _show_view($content)
  {
    $this->load->view('includes/nav');
    $this->load->view('includes/header', @$this->my_data);
    $this->load->view('includes/sidebar');
    if ( ! empty($content))
      $this->load->view($content, @$this->my_data);

    $this->load->view('includes/footer');
  }

}

 ?>
