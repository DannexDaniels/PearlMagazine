<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/17/18
 * Time: 10:13 PM
 */

class OpenForum extends CI_Controller {
    public function index(){
        $data['article'] = $this->article_model->get_all_articles('Open Forum');
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header');
        $this->load->view('open_forum/index',$data);
        $this->load->view('template/footer');
    }

    public function content($page = 'openforum-dec'){
        $data['article'] = $this->article_model->get_article($page);
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header',$data);
        $this->load->view('open_forum/'.$page,$data);
        $this->load->view('template/reactions',$data);
        $this->load->view('template/footer');
    }
}