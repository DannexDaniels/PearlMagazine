<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/17/18
 * Time: 10:05 PM
 */

class BusinessCafe extends CI_Controller {
    public function index(){
        $data['article'] = $this->article_model->get_all_articles('Business Cafe');
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header');
        $this->load->view('business_cafe/index',$data);
        $this->load->view('template/footer',$data);
    }

    public function content($page = 'businesscafe-dec'){
        $data['article'] = $this->article_model->get_article($page);
        $data['ref_obj'] = $this->article_model;

        $this->load->view('template/header',$data);
        $this->load->view('business_cafe/'.$page,$data);
        $this->load->view('template/reactions',$data);
        $this->load->view('template/footer');
    }
}