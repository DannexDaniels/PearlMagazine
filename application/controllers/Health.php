<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/17/18
 * Time: 10:10 PM
 */

class Health extends CI_Controller {
    public function index(){
        $data['article'] = $this->article_model->get_all_articles('Health');
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header');
        $this->load->view('health/index',$data);
        $this->load->view('template/footer');
    }

    public function content($page = 'health-dec'){
        $data['article'] = $this->article_model->get_article($page);
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header',$data);
        $this->load->view('health/'.$page,$data);
        $this->load->view('template/reactions',$data);
        $this->load->view('template/footer');
    }
}