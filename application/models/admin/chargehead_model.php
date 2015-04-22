<?php

class Chargehead_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_data() {
        $data = $this->db->from("ci_chargehead")->get();
        return $data->result();
    }
    public function get_selected_data($society_id) {
        
        $data = $this->db->join("ci_society_chargehead","ci_society_chargehead.chargehead_id = ci_chargehead.id")->where("society_id",$society_id)->where("status","1")->from("ci_chargehead")->get();
        return $data->result();
    }
 public function get_current_charge_head($society_id) {
        
        $data = $this->db->select("group_concat(chargehead_id) as chargehead_id")->where("society_id",$society_id)->where("status","1")->from("ci_society_chargehead")->get()->result();
        return isset($data[0]) ? explode(",",$data[0]->chargehead_id) : array();
    }
}