<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enrollment extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation', 'session', 'email']);
        $this->load->model('Enrollment_model');
        $this->load->database();
    }

    public function submit()
    {
        $this->form_validation->set_rules('firstName', 'First Name', 'required|trim');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('course', 'Course', 'required');
        $this->form_validation->set_rules('terms', 'Terms', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect($_SERVER['HTTP_REFERER']);
        }

        $data = [
            'first_name'   => $this->input->post('firstName', TRUE),
            'last_name'    => $this->input->post('lastName', TRUE),
            'email'        => $this->input->post('email', TRUE),
            'phone'        => $this->input->post('phone', TRUE),
            'course'       => $this->input->post('course', TRUE),
            'education'    => $this->input->post('education', TRUE),
            'experience'   => $this->input->post('experience', TRUE),
            'motivation'   => $this->input->post('motivation', TRUE),
            'newsletter'   => $this->input->post('newsletter') ? 1 : 0,
            'terms_agreed' => 1,
            'created_at'   => date('Y-m-d H:i:s')
        ];

        $this->Enrollment_model->save($data);

        // SEND EMAIL
        $this->_send_enrollment_email($data);

        $this->session->set_flashdata(
                    'contact_success',
                    'Thank you! Your enquiry has been submitted successfully.'
                );

        redirect($_SERVER['HTTP_REFERER']); //redirect on the current page.

        // $this->session->set_flashdata(
        //     'success',
        //     'Enrollment submitted successfully!'
        // );

        // redirect($_SERVER['HTTP_REFERER']);
    }

    private function _send_enrollment_email($data)
    {
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

        $this->email->from('info@vcampusventures.com', 'VCampus Website');
        $this->email->to('info@vcampusventures.com'); // admin inbox
        $this->email->reply_to($data['email'], $data['first_name'].' '.$data['last_name']);

        $this->email->subject('New Enrollment Submission - VCampus');

        $message = '
        <html>
        <body style="font-family:Arial, Helvetica, sans-serif; background:#f4f6f8; padding:20px;">
            <table width="600" align="center" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:6px;">
                <tr>
                    <td style="background:#2c3e50; padding:20px; text-align:center; color:#ffffff;">
                        <h2 style="margin:0;">New Enrollment Request</h2>
                    </td>
                </tr>

                <tr>
                    <td style="padding:25px; color:#333;">
                        <table width="100%" cellpadding="8" cellspacing="0" style="font-size:14px;">
                            <tr><td><strong>Name</strong></td><td>'.$data['first_name'].' '.$data['last_name'].'</td></tr>
                            <tr><td><strong>Email</strong></td><td>'.$data['email'].'</td></tr>
                            <tr><td><strong>Phone</strong></td><td>'.$data['phone'].'</td></tr>
                            <tr><td><strong>Course</strong></td><td>'.$data['course'].'</td></tr>
                            <tr><td><strong>Education</strong></td><td>'.$data['education'].'</td></tr>
                            <tr><td><strong>Experience</strong></td><td>'.$data['nbnbbbbb '].'</td></tr>
                            <tr>
                                <td><strong>Newsletter</strong></td>
                                <td>'.($data['newsletter'] ? 'Yes' : 'No').'</td>
                            </tr>
                        </table>

                        <hr style="margin:20px 0; border:0; border-top:1px solid #e0e0e0;">

                        <p>
                            <strong>Motivation / Message:</strong><br>
                            '.nl2br(htmlspecialchars($data['motivation'])).'
                        </p>
                    </td>
                </tr>

                <tr>
                    <td style="background:#f1f1f1; padding:15px; text-align:center; font-size:12px; color:#777;">
                        Submitted on '.date('d M Y, h:i A').'<br>
                        © VCampus Global
                    </td>
                </tr>
            </table>
        </body>
        </html>';

        $this->email->message($message);

        // Plain-text fallback (important)
        $this->email->set_alt_message(
            "New Enrollment Submission\n\n".
            "Name: {$data['first_name']} {$data['last_name']}\n".
            "Email: {$data['email']}\n".
            "Phone: {$data['phone']}\n".
            "Course: {$data['course']}\n".
            "Education: {$data['education']}\n".
            "Experience: {$data['experience']}\n".
            "Newsletter: ".($data['newsletter'] ? 'Yes' : 'No')."\n\n".
            "Motivation:\n{$data['motivation']}"
        );

        if (!$this->email->send()) {
            log_message('error', $this->email->print_debugger());
        }
    }
}
