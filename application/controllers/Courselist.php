<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courselist extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load->model('Sector_model');
        $this->load->database();
    }

    public function index()
    {
        $data['title'] = 'Course List';

        $this->load->view('layouts/header', $data);
        $this->load->view('course/courselist', $data);
        $this->load->view('layouts/footer', $data);
    }

    public function florist()
    {
        $data['title'] = 'Florist';

        $this->load->view('layouts/header', $data);
        $this->load->view('course/florist', $data);
        $this->load->view('layouts/footer', $data);
    }

}