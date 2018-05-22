<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/17/18
 * Time: 10:08 PM
 */

class CelebZone extends CI_Controller {
    public function index(){
        $data['article'] = $this->article_model->get_all_articles('Celeb Zone');
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header');
        $this->load->view('celeb_zone/index',$data);
        $this->load->view('template/footer');
    }

    public function content($page = 'celebzone-dec'){
        $data['article'] = $this->article_model->get_article($page);
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header',$data);
        $this->load->view('celeb_zone/'.$page,$data);
        $this->load->view('template/reactions',$data);
        $this->load->view('template/footer');
    }
}