<?php

class response_select extends CI_Model {
    //These methods pull text with associated attributes to be classified under strategies' categories
    //selected by the user

    function get_response($category) {
       
        $this->db->where('category', $category);
        $query = $this->db->get('responses');
        return $query->result();      
        
    }
    
    function get_strategy($category){
       $this->db->select('text');
       $this->db->where('code', $category);
       $query = $this->db->get('strategies');
       return $query->result();
               
    }

    function F_get_a_response() {

        $query = $this->db->get('F_responses');
        return $query->result();
    }

    function PF_get_a_response() {

        $query = $this->db->get('PF_responses');
        return $query->result();
    }
    
    function FF_get_a_response() {

        $query = $this->db->get('FF_responses');
        return $query->result();
    }
    
    function Fs_get_a_response() {

        $query = $this->db->get('Fs_responses');
        return $query->result();
    }
    
    function PFs_get_a_response() {

        $query = $this->db->get('PFs_responses');
        return $query->result();
    }
    
    function FFs_get_a_response() {

        $query = $this->db->get('FFs_responses');
        return $query->result();
    }
    
    function As_get_a_response() {

        $query = $this->db->get('As_responses');
        return $query->result();
    }
    
    function FUN_get_a_response() {

        $query = $this->db->get('FUN_responses');
        return $query->result();
    }
    
    function INC_get_a_response() {

        $query = $this->db->get('INC_responses');
        return $query->result();
    }
    
    function SUP_get_a_response() {

        $query = $this->db->get('SUP_responses');
        return $query->result();
    }
    
    function OO_get_a_response() {

        $query = $this->db->get('OO_responses');
        return $query->result();
    }
    
    function TNO_get_a_response() {

        $query = $this->db->get('OO_responses');
        return $query->result();
    }
    

}
