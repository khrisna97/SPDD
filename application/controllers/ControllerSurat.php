<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerSurat extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('M_surat');
  }

  public function data_ajax($id)
  {
    $data = $this->M_surat->readSurat($id);
    echo json_encode($data);
  }

  public function admintambahuser(){
    $this->load->view('tuser');
  }

  public function hapusSurat($id){
    if($this->session->userdata('statusLogin') == "loginUser"){
      $result = $this->M_surat->readSurat($id);
      $surat1 = ($result->surat1);
      $surat2 = ($result->surat2);
      $surat3 = ($result->surat3);
      $surat4 = ($result->surat4);
      unlink($surat1);
      unlink($surat2);
      unlink($surat3);
      unlink($surat4);
      $this->M_surat->deleteSurat($id);
      $this->session->set_flashdata('notisSM',
      '  <div class="alert alert-info alert-dismissible pull-right" style="width:30%; height:50px; margin:0px 0px -10px 0px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-trash"></i>SPD Berhasil Dihapus!</h4>
      </div>');
      echo json_encode(array("status" => TRUE));
    }else{
      redirect(base_url(''));
    }
  }

  public function lihatSurat($id,$jenisSurat){
    if($this->session->userdata('statusLogin') == "loginAdmin" || $this->session->userdata('statusLogin') == "loginUser"){
      $result = $this->M_surat->readSurat($id);
        if($jenisSurat === "surat1"){
          $fileSurat = ($result->surat1);
        }else if($jenisSurat === "surat2"){
          $fileSurat = ($result->surat2);
        }else if($jenisSurat === "surat3"){
          $fileSurat = ($result->surat3);
        }else if($jenisSurat === "surat4"){
          $fileSurat = ($result->surat4);
        }else if($jenisSurat === "suratBalasan"){
          $fileSurat = ($result->suratBalasan);
        }

      $file = $fileSurat;
      $filename = $fileSurat;
      header('Content-type: application/pdf');
      header('Content-Disposition: inline; filename="' . $filename . '"');
      header('Content-Transfer-Encoding: binary');
      header('Accept-Ranges: bytes');
      @readfile($file);
    }else{
      redirect(base_url(''));
    }
  }


  public function daftarSurat(){
    if($this->session->userdata('statusLogin') == "loginUser"){
      $data['itemSurat'] = $this->M_surat->readSurat(FALSE);
      $this->load->view('v_surat', $data);
      $this->load->view('footer');
    }else{
      redirect(base_url(''));
    }
  }

   public function tambahspd(){
    if($this->session->userdata('statusLogin') == "loginUser"){
      $config['upload_path'] = './assets/DOKUMENSURAT/';
      $config['allowed_types'] = 'pdf';
      $config['max'] = 2048;
      $this->load->library('upload', $config);
      $this->upload->do_upload('filesurat');
      $surat1 = $this->upload->data('file_name');
      $this->upload->do_upload('filesurat1');
      $surat2 = $this->upload->data('file_name');
      $this->upload->do_upload('filesurat2');
      $surat3 = $this->upload->data('file_name');
      $this->upload->do_upload('filesurat3');
      $surat4 = $this->upload->data('file_name');

        $this->M_surat->createSurat($surat1,$surat2,$surat3,$surat4,$this->input->post());
        $this->session->set_flashdata('notisSM',
        '<div class="alert alert-info alert-dismissible pull-right" style="width:30%; height:50px; margin:0px 0px -10px 0px;">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i>SPD Berhasil Ditambah!</h4>
        </div>');
        redirect(base_url());
    }else{
      redirect(base_url(''));
    }
  }

  public function ubahSPD()
  {
    if($this->session->userdata('statusLogin') == "loginUser"){
      $this->session->set_flashdata('notisSM',
      '  <div class="alert alert-info alert-dismissible pull-right" style="width:30%; height:50px; margin:0px 0px -10px 0px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-edit"></i>SPD Berhasil Diubah!</h4>
      </div>');
    $this->M_surat->updateSurat(array('id' => $this->input->post('idEdit')), $this->input->post());
    echo json_encode(array("status" => TRUE));
    }else{
      redirect(base_url(''));
    }
  }

  public function admindaftarSurat(){
    if($this->session->userdata('statusLogin') == "loginAdmin"){
      $data['itemSurat'] = $this->M_surat->readSuratAdmin();
      $this->load->view('vAdmin_surat', $data);
      $this->load->view('footer');
    }else{
      redirect(base_url(''));
    }
  }
 public function adminSetuju()
  {
    if($this->session->userdata('statusLogin') == "loginAdmin"){
        $config['upload_path'] = './assets/DOKUMENSURAT/';
        $config['allowed_types'] = 'pdf';
        $config['max'] = 2048;
        $this->load->library('upload', $config);
        $this->upload->do_upload('fileBalasan');
        $surat = $this->upload->data('file_name');
        $file = 'assets/DOKUMENSURAT/'.$surat;
        $data = array(
					'suratBalasan' => $file,
					'statusCair' => "Disetujui"
					);
      $this->M_surat->updateSuratAdmin(array('id' => $this->input->post('id')), $data);
      echo json_encode(array("status" => TRUE));

      $this->session->set_flashdata('notisSM',
      '  <div class="alert alert-info alert-dismissible pull-right" style="width:30%; height:50px; margin:0px 0px -10px 0px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-edit"></i>Status SPD Berhasil Diubah!</h4>
      </div>');
    }else{
      redirect(base_url(''));
    }
  }


  public function adminTolak($id)
  {
    if($this->session->userdata('statusLogin') == "loginAdmin"){
      $data = array(
        'statusCair' => "Ditolak"
        );
      $this->M_surat->updateSuratAdmin(array('id' => $id), $data);
      echo json_encode(array("status" => TRUE));

      $this->session->set_flashdata('notisSM',
      '  <div class="alert alert-info alert-dismissible pull-right" style="width:30%; height:50px; margin:0px 0px -10px 0px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-edit"></i>Status SPD Berhasil Diubah!</h4>
      </div>');
    }else{
      redirect(base_url(''));
    }
  }



}
