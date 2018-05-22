<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/17/18
 * Time: 10:11 PM
 */

class PoshParlour extends CI_Controller {
    public function index(){
        $data['article'] = $this->article_model->get_all_articles('Posh Parlour');
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header');
        $this->load->view('posh_parlour/index',$data);
        $this->load->view('template/footer');
    }

    public function content($page = 'poshparlour-dec'){
        $data['article'] = $this->article_model->get_article($page);
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header',$data);
        $this->load->view('posh_parlour/'.$page,$data);
        $this->load->view('template/reactions',$data);
        $this->load->view('template/footer');
    }
}