<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/17/18
 * Time: 10:07 PM
 */

class MainStory extends CI_Controller {
    public function index(){
        $data['article'] = $this->article_model->get_all_articles('Main Story');
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header');
        $this->load->view('main_story/index',$data);
        $this->load->view('template/footer');
    }

    public function content($page = 'mainstory-dec'){
        $data['article'] = $this->article_model->get_article($page);
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header',$data);
        $this->load->view('main_story/'.$page,$data);
        $this->load->view('template/reactions',$data);
        $this->load->view('template/footer');
    }
}