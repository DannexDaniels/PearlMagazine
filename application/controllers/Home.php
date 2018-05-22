<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/17/18
 * Time: 10:15 PM
 */

class Home extends CI_Controller {
    public function index(){
        $this->load->view('template/header');
        $this->load->view('home/index');
        $this->load->view('template/footer');
    }
}