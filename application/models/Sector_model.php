<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sector_model extends CI_Model {

    public function getAllJob()
    {
        return $this->db->get('nsdc_courses')->result_array();
    }

    public function getAllSector()
    {
        return $this->db
        ->select('sector')
        ->group_by('sector')
        ->order_by('id', 'ASC')
        ->get('nsdc_courses')
        ->result_array();
    }
     public function getAllSectorHome()
    {
        return $this->db
        ->select(['sector','sector_image'])
        ->group_by('sector')
        ->order_by('id', 'ASC')
        ->limit(9)
        ->where('sector_image !=', '')  
        ->get('nsdc_courses')
        ->result_array();
    }
}
