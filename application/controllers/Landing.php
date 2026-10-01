<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function index()
    {
        // Header
        $this->load->view('layouts/header');

        // Landing Page
        $this->load->view('landing/index');

        // Footer
        $this->load->view('layouts/footer');

        // chatbot
        $this->load->view('layouts/chatbot');
    }
}