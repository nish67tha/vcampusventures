<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lab extends CI_Controller {

   public function index() {
        $this->load->view('lab_dashboard');
    }

    public function run_php() {
        $code = $this->input->post('code');

        // Create temp file
        $file = FCPATH . "temp_" . time() . ".php";

        // Wrap PHP code
        $fullCode = "<?php\n" . $code;

        // Save file
        file_put_contents($file, $fullCode);

        // Execute
        $output = shell_exec("php $file 2>&1");

        // Delete file
        unlink($file);

        echo $output;
    }

  public function experiments($lab_id) {
    $this->db->where('lab_id', $lab_id);
    $data['experiments'] = $this->db->get('experiments')->result();
    $this->load->view('experiments', $data);
  }

  public function run($id) {
    $data['experiment'] = $this->db->get_where('experiments', ['id'=>$id])->row();
    $this->load->view('run_lab', $data);
  }

  public function submit() {
    $data = [
      'student_id' => 1, // session later
      'experiment_id' => $this->input->post('experiment_id'),
      'code' => $this->input->post('code'),
      'output' => 'Not Executed',
    ];

    $this->db->insert('submissions', $data);

    redirect('lab');
  }
}