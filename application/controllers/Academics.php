<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academics extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load->model('Sector_model');
        $this->load->database();
    }

    public function graduate()
    {
        $data['title'] = 'Graduation Course';

        $allJob = $this->Sector_model->getAllJob();
        $allSector = $this->Sector_model->getAllSector();

        $data['allJob'] = $allJob;
        $data['allSector'] = $allSector;
        $this->load->view('layouts/header', $data);
        $this->load->view('graduate', $data);
        $this->load->view('layouts/footer', $data);
    }

    public function postgraduate()
    {
        $data['title'] = 'Post Graduation Course';


        $this->load->view('layouts/header', $data);
        $this->load->view('postgraduate', $data);
        $this->load->view('layouts/footer', $data);
    }
         
    public function doctorate()
    {
        $data['title'] = 'Doctorate Course';
        $this->load->view('layouts/header',$data);
         $this->load->view('doctorate', $data);
        $this->load->view('layouts/footer', $data);
    }
        public function skill_development()
    {
        $data['title'] = 'Skill Development Course';
        $this->load->view('layouts/header',$data);
         $this->load->view('skill_development', $data);
        $this->load->view('layouts/footer', $data);
    }

        public function executive_education()
    {
        $data['title'] = 'Executive Education Course';
        $this->load->view('layouts/header',$data);
         $this->load->view('executive education', $data);
        $this->load->view('layouts/footer', $data);
    }

}
