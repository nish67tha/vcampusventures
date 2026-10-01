<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load->model('Contact_model');
        $this->load->database();
    }

    public function submit()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim');
        $this->form_validation->set_rules('message', 'Message', 'required|trim');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('contact');
        }

        $data = [
            'name'    => $this->input->post('name', TRUE),
            'email'   => $this->input->post('email', TRUE),
            'subject' => $this->input->post('subject', TRUE),
            'message' => $this->input->post('message', TRUE),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $insert = $this->Contact_model->save_contact($data);

        if ($insert) {
            // SEND EMAIL
            $this->_send_email($data);

            $this->session->set_flashdata(
                'contact_success',
                'Thank you! Your enquiry has been submitted successfully.'
            );

            redirect($_SERVER['HTTP_REFERER']); //redirect on the current page.
            
            // $this->session->set_flashdata(
            //     'success',
            //     'Your message has been sent successfully.'
            // );
        } else {
            $this->session->set_flashdata(
                'error',
                'Something went wrong. Please try again.'
            );
        }

        redirect('contact');
    }

    private function _send_email($data)
    {
        $this->load->library('email');

        $config = [
            'protocol'    => 'smtp',
            'smtp_host'   => 'mail.vcampusglobal.in',
            'smtp_user'   => 'info@vcampusventures.com',
            'smtp_pass'   => 'INFO@2025',
            'smtp_port'   => 465,
            'smtp_crypto' => 'ssl',
            'mailtype'    => 'html',
            'charset'     => 'utf-8',
            'newline'     => "\r\n",
            'crlf'        => "\r\n"
        ];

        $this->email->initialize($config);

        // MUST be the SMTP email
        $this->email->from('info@vcampusventures.com', 'VCampus Website');

        // Admin inbox
        $this->email->to('info@vcampusventures.com');

        // User email goes here
        $this->email->reply_to($data['email'], $data['name']);

        $this->email->subject('New Contact Form Submission - VCampus');
        
        $message = '
        <html>
        <body style="font-family:Arial, Helvetica, sans-serif; background:#f4f6f8; padding:20px;">
            <table width="600" align="center" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:6px;">
                <tr>
                    <td style="background:#2c3e50; padding:20px; text-align:center; color:#ffffff;">
                        <h2 style="margin:0;">VCampus Website</h2>
                    </td>
                </tr>

                <tr>
                    <td style="padding:25px; color:#333;">
                        <table width="100%" cellpadding="8" cellspacing="0" style="font-size:14px;">
                            <tr><td><strong>Name</strong></td><td>'.$data['name'].'</td></tr>
                            <tr><td><strong>Email</strong></td><td>'.$data['email'].'</td></tr>
                            <tr><td><strong>Subject</strong></td><td>'.$data['subject'].'</td></tr>
                        </table>

                        <hr style="margin:20px 0; border:0; border-top:1px solid #e0e0e0;">

                        <p>
                            <strong>Message:</strong><br>
                            '.nl2br(htmlspecialchars($data['message'])).'
                        </p>
                    </td>
                </tr>

                <tr>
                    <td style="background:#f1f1f1; padding:15px; text-align:center; font-size:12px; color:#777;">
                        This email was sent from the contact form on <strong>vcampusglobal.in</strong><br>
                        Please do not reply directly to this email.
                    </td>
                </tr>
            </table>
        </body>
        </html>';


        $this->email->message($message);
        $this->email->set_alt_message(
            "New Contact Message\n\n".
            "Name: {$data['name']}\n".
            "Email: {$data['email']}\n".
            "Subject: {$data['subject']}\n".
            "Message:\n{$data['message']}"
        );


        if (!$this->email->send()) {
            log_message('error', $this->email->print_debugger()); 
        }
    }

    public function submit_review()
    {
        $this->form_validation->set_rules('rating', 'Rating', 'trim');
        $this->form_validation->set_rules('name', 'Name', 'trim');
        $this->form_validation->set_rules('title', 'Subject', 'trim');
        $this->form_validation->set_rules('review', 'Message', 'trim');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('/');
        }

        $data = [
            'rating'    => $this->input->post('rating', TRUE),
            'name'   => $this->input->post('name', TRUE),
            'title' => $this->input->post('title', TRUE),
            'review' => $this->input->post('review', TRUE),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $insert = $this->Contact_model->save_review($data);

        if ($insert) {
            $this->session->set_flashdata(
                    'contact_success',
                    'Your review has been submitted successfully.'
                );

            redirect($_SERVER['HTTP_REFERER']); //redirect on the current page.
        } else {
            $this->session->set_flashdata(
                'error',
                'Something went wrong. Please try again.'
            );
        }

        redirect('/');
    }

    public function submit_hire()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        // $this->form_validation->set_rules('company_name', 'Subject', 'trim');
        $this->form_validation->set_rules('contact_number', 'Contact Number', 'required|trim');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('contact');
        }

        $data = [
            'name'    => $this->input->post('name', TRUE),
            'email'   => $this->input->post('email', TRUE),
            'company_name' => $this->input->post('company_name', TRUE),
            'contact_number' => $this->input->post('contact_number', TRUE),
            // 'created_at' => date('Y-m-d H:i:s')
        ];

        $insert = $this->Contact_model->save_hire($data);

        if ($insert) {

            $this->session->set_flashdata(
                'contact_success',
                'Thank you! Your enquiry has been submitted successfully.'
            );

            redirect($_SERVER['HTTP_REFERER']); //redirect on the current page.
            
        } else {
            $this->session->set_flashdata(
                'error',
                'Something went wrong. Please try again.'
            );
        }

        redirect('contact');
    }

}
