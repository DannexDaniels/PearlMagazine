<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/17/18
 * Time: 10:09 PM
 */

class DailyDose extends CI_Controller {
    public function index(){
        $data['article'] = $this->article_model->get_all_articles('Daily Dose');
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header');
        $this->load->view('daily_dose/index',$data);
        $this->load->view('template/footer');
    }

    public function content($page = 'dailydoze-dec'){
        $data['article'] = $this->article_model->get_article($page);
        $data['ref_obj'] = $this->article_model;
        $this->load->view('template/header',$data);
        $this->load->view('daily_dose/'.$page,$data);
        $this->load->view('template/reactions',$data);
        $this->load->view('template/footer');
    }
}