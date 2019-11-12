<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPegawai extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('M_pegawai');
  }

	public function login()
	{
    if($this->session->userdata('statusLogin') === "loginUser" || $this->session->userdata('statusLogin') === "loginAdmin"){
      redirect($_SERVER['HTTP_REFERER']);
    }else{
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('nik', 'NIK', 'required');

      if($this->form_validation->run() === FALSE){
        $this->load->view('login');
      }else{
        $nik = $this->input->post('nik');
        $pass = $this->input->post('password');
        $where = array(
          'nik' => $nik,
          'password' => $pass
        );

        if($this->M_pegawai->readPegawai($where, FALSE)->num_rows() > 0){
          $nama = $this->M_pegawai->readPegawai(FALSE, $nik)->nama;
          $jabatan = $this->M_pegawai->readPegawai(FALSE, $nik)->jabatan;
          $id = $this->M_pegawai->readPegawai(FALSE, $nik)->id;

          $data_session = array(
						'nama' => $nama,
						'jabatan' => $jabatan,
						'nik' => $nik,
						'id' => $id
						);
					$this->session->set_userdata($data_session);

          if($jabatan == "admin"){
            $this->session->set_userdata('statusLogin', 'loginAdmin');
            redirect(base_url('admin/SPD'));
          }else if($jabatan == "user"){
            $this->session->set_userdata('statusLogin', 'loginUser');
            redirect(base_url('SPD'));
          }

        }else{
          $this->session->set_flashdata('messageLogin',
					' <div class="alert alert-danger"><center>
						NIP atau Password yang anda masukkan salah !</center>
						</div>');
            $this->load->view('login');
        }
      }
    }
	}


public function regis(){
    $this->load->view('register');
  }

  public function register(){
    $nik = $this->input->post("nik");
    $nama = $this->input->post("nama");
    $email = $this->input->post("email");
    $password = $this->input->post("password");
    $jabatan = $this->input->post("jabatan");
    $parameter = array(
      'nik' => $nik,
      'nama'=> $nama,
      'email'=> $email,
      'password'=> $password,
      'jabatan'=> $jabatan
    );

    $this->M_pegawai->register($parameter);
    $this->session->set_flashdata('notisSM',
        '<div class="alert alert-info alert-dismissible pull-right" style="width:30%; height:50px; margin:0px 0px -10px 0px;">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i>User berhasil ditambahkan</h4>
        </div>');
     redirect(base_url('admin/t_user'));

}
  public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}


}
