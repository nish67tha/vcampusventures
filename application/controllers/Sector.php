<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sector extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load->model('Sector_model');
        $this->load->database();
    }

    public function index()
    {
        $data['title'] = 'Sector';

        $allJob = $this->Sector_model->getAllJob();
        $allSector = $this->Sector_model->getAllSector();

        $data['allJob'] = $allJob;
        $data['allSector'] = $allSector;
        $this->load->view('layouts/header', $data);
        $this->load->view('sector', $data);
        $this->load->view('layouts/footer', $data);
    }

}
