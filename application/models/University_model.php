<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class University_model extends CI_Model {

    public function getAllUniversity()
    {
        //return $this->db->get('university')->result_array();
        return $this->db
            ->where('isActive', 1)
            ->get('university')
            ->result_array();
    }

    public function getAllOnlinePrograms()
    {
        return $this->db->get('online_programs')->result_array();
    }
}
