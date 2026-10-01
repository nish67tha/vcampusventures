<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Universitysingle_model extends CI_Model {

    public function getBySlug($slug)
    {
        return $this->db
            ->where('slug', $slug)
            ->where('isActive', 1)
            ->get('university')
            ->row_array();
    }

    public function getLpuBySlug($slug)
    {
        return $this->db
            ->where('slug', $slug)
            ->get('university')
            ->row_array();
    }

}
