<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function save_contact($data)
    {
        return $this->db->insert('contacts', $data);
    }

    public function save_review($data)
    {
        return $this->db->insert('reviews', $data);
    }

    public function save_hire($data)
    {
        return $this->db->insert('hire_from_us', $data);
    }

    public function save_counselor($data)
    {
        return $this->db->insert('applications', $data);
    }
}
