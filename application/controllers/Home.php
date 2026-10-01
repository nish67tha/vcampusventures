<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load->model('University_model');
        $this->load->database();
        $this->load->model('Sector_model');
        $this->load->model('Contact_model');

    }

    public function index()
    {
        $data['title'] = 'Home Page';

        $allUniversity = $this->University_model->getAllUniversity();
        $data['allUniversity'] = $allUniversity;
        $sectorhome = $this->Sector_model->getAllSectorHome();
        $data['sectorhome'] = $sectorhome;

        
        $allOnlinePrograms = $this->University_model->getAllOnlinePrograms();
        $data['allOnlinePrograms'] = $allOnlinePrograms;

        $this->load->view('layouts/header', $data);
        $this->load->view('home', $data);
        $this->load->view('layouts/footer');
    }

    public function about()
    {
        $data['title'] = 'About Us';

        $this->load->view('layouts/header', $data);
        $this->load->view('about');
        $this->load->view('layouts/footer');
    }

    public function contact()
    {
        $data['title'] = 'Contact Us';

        $this->load->view('layouts/header', $data);
        $this->load->view('contact');
        $this->load->view('layouts/footer');
    }

    public function enroll()
    {
        $data['title'] = 'Enrollment';

        $this->load->view('layouts/header', $data);
        $this->load->view('enroll');
        $this->load->view('layouts/footer');
    }

    public function universities()
    {
        $data['title'] = 'Universities';

        $allUniversity = $this->University_model->getAllUniversity();
        $data['allUniversity'] = $allUniversity;

        $this->load->view('layouts/header', $data);
        $this->load->view('universities', $data);
        $this->load->view('layouts/footer');
    }

    public function university()
    {
        $data['title'] = 'University';

        $this->load->view('layouts/header', $data);
        $this->load->view('universitysingle');
        $this->load->view('layouts/footer');
    }

    public function termsconditions()
    {
        $data['title'] = 'Terms & Conditions';

        $this->load->view('layouts/header', $data);
        $this->load->view('termsconditions');
        $this->load->view('layouts/footer');
    }

    public function privacypolicy()
    {
        $data['title'] = 'Privacy Policy';

        $this->load->view('layouts/header', $data);
        $this->load->view('privacypolicy');
        $this->load->view('layouts/footer');
    }

    public function courses()
    { 
        $data['title'] = 'Courses';

        $this->load->view('layouts/header', $data);
        $this->load->view('courses');
        $this->load->view('layouts/footer');
    }
    
    public function gallery()
    {
        $data['title'] = 'Gallery';

        $this->load->view('layouts/header', $data);
        $this->load->view('gallery');
        $this->load->view('layouts/footer');
    }
    
    public function error()
    {
        $data['title'] = '404';
        // $data['heading'] = 'Courses';
        // $data['message'] = 'Courses';

        $this->load->view('layouts/header', $data);
        $this->load->view('errors/html/error_404',$data);
        $this->load->view('layouts/footer');
    }
    
    public function partner()
    {
        $data['title'] = 'Partner';

        $this->load->view('layouts/header', $data);
        $this->load->view('partner');
        $this->load->view('layouts/footer');
    }

    public function hire_from_us()
    {
        $data['title'] = 'Hire From Us';

        $this->load->view('layouts/header', $data);
        $this->load->view('hire-from-us');
        $this->load->view('layouts/footer');
    }

    public function counselor_form()
    {
        $data['title'] = 'Counselor';

        $this->load->view('layouts/header', $data);
        $this->load->view('counselor-form');
        $this->load->view('layouts/footer');
    }

    public function submit()
{
    $this->load->database();
    $this->load->library('upload');

    // ========================
    // TEXT DATA
    // ========================
    $data = [];

    // PERSONAL
    $data['title'] = $this->input->post('title');
    $data['full_name'] = $this->input->post('full_name');
    $data['address'] = $this->input->post('address');
    $data['mobile'] = $this->input->post('mobile');
    $data['email'] = $this->input->post('email');
    $data['dob'] = $this->input->post('dob');
    $data['gender'] = $this->input->post('gender');
    $data['marital_status'] = $this->input->post('marital_status');

    // INSTITUTE
    $data['institute_name'] = $this->input->post('institute_name');
    $data['office_address'] = $this->input->post('office_address');
    $data['inst_mobile'] = $this->input->post('inst_mobile');
    $data['inst_email'] = $this->input->post('inst_email');

    // CHECKBOX ARRAY (IMPORTANT)
    // $background = $this->input->post('background');
    $documents = $this->input->post('documents');

    // $data['background'] = !empty($background) ? implode(',', $background) : '';
    $data['documents'] = !empty($documents) ? implode(',', $documents) : '';

    // CENTRE DETAILS
    // $data['setup_type'] = $this->input->post('setup_type');
    // $data['existing'] = $this->input->post('existing');
    // $data['centre_name'] = $this->input->post('centre_name');
    // $data['centre_address'] = $this->input->post('centre_address');
    // $data['city'] = $this->input->post('city');
    // $data['state'] = $this->input->post('state');
    // $data['pin'] = $this->input->post('pin');

    // 
    $data['associated_university'] = $this->input->post('associated_university');
    // ========================
    // IMAGE UPLOAD CONFIG
    // ========================
    $config['upload_path']   = './uploads/';
    $config['allowed_types'] = 'jpg|jpeg|png|webp';
    $config['max_size']      = 2048;
    $config['encrypt_name']  = TRUE; // secure file name

    $this->upload->initialize($config);

    // ========================
    // UPLOAD 5 IMAGES
    // ========================
    for ($i = 1; $i <= 10; $i++) {

        if (!empty($_FILES["image$i"]['name'])) {

            $_FILES['file']['name']     = $_FILES["image$i"]['name'];
            $_FILES['file']['type']     = $_FILES["image$i"]['type'];
            $_FILES['file']['tmp_name'] = $_FILES["image$i"]['tmp_name'];
            $_FILES['file']['error']    = $_FILES["image$i"]['error'];
            $_FILES['file']['size']     = $_FILES["image$i"]['size'];

            if ($this->upload->do_upload('file')) {

                $uploadData = $this->upload->data();
                $data["image$i"] = $uploadData['file_name'];

            } else {

                // Optional: store error or leave empty
                $data["image$i"] = '';
                // log_message('error', $this->upload->display_errors());

            }
        } else {
            $data["image$i"] = '';
        }
    }

    // ========================
    // INSERT INTO DATABASE
    // ========================
    $insert = $this->Contact_model->save_counselor($data);
    // $this->db->insert('applications', $data);

    // ========================
    // RESPONSE
    // ========================
    if ($this->db->affected_rows() > 0) {
        echo "Application Submitted Successfully!";
    } else {
        echo "Something went wrong!";
    }
}




 public function head()
    {
    $data['title'] = 'videos';
        $this->load->view('layouts/header',$data);
        $this->load->view('layouts/head');
        $this->load->view('layouts/footer');
    }

}