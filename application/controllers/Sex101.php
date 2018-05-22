<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/17/18
 * Time: 10:12 PM
 */

class Sex101 extends CI_Controller {
    public function index(){
        $data['article'] = $this->article_model->get_all_articles('Sex 101');
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header');
        $this->load->view('sex_101/index',$data);
        $this->load->view('template/footer');
    }

    public function content($page = 'sex101-dec'){
        $data['article'] = $this->article_model->get_article($page);
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header',$data);
        $this->load->view('sex_101/'.$page,$data);
        $this->load->view('template/reactions',$data);
        $this->load->view('template/footer');
    }
}