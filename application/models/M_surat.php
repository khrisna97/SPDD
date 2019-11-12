<?php
  class M_surat extends CI_Model{

     public function __construct(){
       $this->load->database();
     }

     public function createSurat($surat1, $surat2, $surat3, $surat4, $post){
       $inputan = array(
         'surat1' => 'assets/DOKUMENSURAT/'.$surat1,
         'surat2' => 'assets/DOKUMENSURAT/'.$surat2,
         'surat3' => 'assets/DOKUMENSURAT/'.$surat3,
         'surat4' => 'assets/DOKUMENSURAT/'.$surat4,
         'bidang' => $post['bidang'],
         'skpd' => $post['skpd'],
         'bagian' => $post['bagian'],
         'subbagian' => $post['subbagian'],
         'nospd' => $post['nospd'],
         'tglberangkat' => $post['tglberangkat'],
         'tglkembali' => $post['tglkembali'],
         'program' => $post['program'],
         'kegiatan' => $post['kegiatan'],
         'koderekening' => $post['koderekening'],
         'uangharian' => $post['uangsaku'],
         'jumlahorang' => $post['jumlahorang'],
         'uangtransport' => $post['uangtransport']
       );
       $nama = implode(',', $this->input->post('namapegawai'));
       $query = $this->db->insert('nama', array('nospd' => $post['nospd'], 'namapegawai' => $nama));
       $query1 = $this->db->insert('spd', $inputan);
         return $query;
         return $query1;
     }

     public function updateSurat($where, $post){
       $inputan = array(
           'bidang' => $post['bidangEdit'],
           'skpd' => $post['skpdEdit'],
           'bagian' => $post['bagianEdit'],
           'subbagian' => $post['subbagianEdit'],
           'nospd' => $post['nospdEdit'],
           'tglberangkat' => $post['tglberangkatEdit'],
           'tglkembali' => $post['tglkembaliEdit'],
           'program' => $post['programEdit'],
           'kegiatan' => $post['kegiatanEdit'],
           'koderekening' => $post['koderekeningEdit'],
           'uangharian' => $post['uangsakuEdit'],
           'jumlahorang' => $post['jumlahorangEdit'],
           'uangtransport' => $post['uangtransportEdit']
         );
         $namaEdit = implode(',', $this->input->post('namapegawaiEdit'));
         $q = $this->db->update('nama', array('nospd' => $post['nospdEdit'], 'namapegawai' => $namaEdit, $where));
         $q1 = $this->db->update('spd', $inputan, $where);
         return $q;
         return $q1;
     }

     public function readSurat($id = FALSE){
       if($id !== FALSE){
         $query = $this->db->get_where('spd', array('id'=>$id));
         return $query->row();
       }else{
         $query = $this->db->order_by('id','DESC')->get('spd');
         return $query->result_array();
       }
     }



     public function deleteSurat($id){
         $q = $this->db->delete('spd',array('id'=>$id));
         $q1 = $this ->db->delete('nama', array('id'=>$id));
         return q;
         return q1;
     }


     public function readSuratAdmin(){
       $sql = $this->db->query("SELECT * FROM spd");
       return $sql->result_array();
     }
      
      public function readUser(){
          $sql = $this->db->query("SELECT * FROM pegawai");
          return $sql->result_array();
      }

     public function updateSuratAdmin($where, $data){
         $this->db->update('spd', $data, $where);
     		 return $this->db->affected_rows();
     }
      

  }
 ?>
