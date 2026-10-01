<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Universitysingle_model $Universitysingle_model
 */
class Universitysingle extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load->model('Universitysingle_model');
        $this->load->database();
    }

    public function view($slug)
    {
        $data['title'] = 'University Single';
        $this->load->model('Universitysingle_model');

        if ($slug === 'LPU-university-Online') {
            $data['university'] = $this->Universitysingle_model->getLpuBySlug($slug);

            if (!$data['university']) {
                show_404();
            }

            $data['slug'] = $slug;
            $this->load->view('layouts/header', $data);
            $this->load->view('lpuonline', $data);
            $this->load->view('layouts/footer', $data);
            return;
        }

        $data['university'] = $this->Universitysingle_model->getBySlug($slug);
        $data['slug'] = $slug;

        if (!$data['university']) {
            show_404();
        }

        $this->load->view('layouts/header', $data);
        $this->load->view('universitysingle', $data);
        $this->load->view('layouts/footer', $data);
    }
}
