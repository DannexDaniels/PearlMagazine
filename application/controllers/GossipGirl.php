<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/17/18
 * Time: 10:09 PM
 */

class GossipGirl extends CI_Controller {
    public function index(){
        $data['article'] = $this->article_model->get_all_articles('Gossip Girl');
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header');
        $this->load->view('gossip_girl/index',$data);
        $this->load->view('template/footer');
    }

    public function content($page = 'gossipgirl-dec'){
        $data['article'] = $this->article_model->get_article($page);
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header',$data);
        $this->load->view('gossip_girl/'.$page,$data);
        $this->load->view('template/reactions',$data);
        $this->load->view('template/footer');
    }
}