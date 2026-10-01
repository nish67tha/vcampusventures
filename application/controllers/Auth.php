<?php
class Auth extends CI_Controller {

    public function login()
    {
        if ($this->input->post()) {
            $user = $this->db
                ->get_where('users',['email'=>$this->input->post('email')])
                ->row_array();

            if ($user && password_verify($this->input->post('password'),$user['password'])) {
                $this->session->set_userdata($user);
                redirect($user['role'].'/dashboard');
            } else {
                $this->session->set_flashdata('error','Invalid login');
                redirect('/');
            }
        }
        $this->load->view('auth/login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
