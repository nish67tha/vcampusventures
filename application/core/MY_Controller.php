<?php 
class MY_Controller extends CI_Controller {

    public function checkRole($role)
    {
        if ($this->session->userdata('role') != $role) {
            redirect('/');
        }
    }
}
