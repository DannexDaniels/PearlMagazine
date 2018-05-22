<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/18
 * Time: 8:32 AM
 */

class Article_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_article($reference){
        $query = $this->db->get_where('article',array('reference' => $reference));
        return $query->row_array();
    }

    public function get_all_articles($category){
        $this->db->order_by('year desc , month asc');
        $query = $this->db->get_where('posts',array('catName' => $category));
        return $query->result_array();
    }

    public function get_specific_article($reference){
        $query = $this->db->get_where('posts',array('reference' => $reference));
        return $query->row_array();
    }

    public function add_like($artId){
        $query = $this->db->get_where('reaction',array('article'=> $artId));
        $answer = $query->row_array();
        if ($query->num_rows() > 0){
            $this->db->where('article',$artId);
            $this->db->update('reaction',array('likes'=>$answer['likes']+1));
            return true;
        }else{
            //insert multiple data
        }
    }

    public function add_unlike($artId){
        $query = $this->db->get_where('reaction',array('article'=> $artId));
        $answer = $query->row_array();
        if ($query->num_rows() > 0){
            $this->db->where('article',$artId);
            $this->db->update('reaction',array('unlikes'=>$answer['unlikes']+1));
            return true;
        }else{
            //insert multiple data
        }
    }

    public function add_view($artId){
        $query = $this->db->get_where('reaction',array('article'=> $artId));
        $answer = $query->row_array();
        if ($query->num_rows() > 0){
            $this->db->where('article',$artId);
            $this->db->update('reaction',array('views'=>$answer['views']+1));
            return true;
        }else{
            //insert multiple data
        }
    }
}