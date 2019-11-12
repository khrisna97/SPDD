<?php
  class M_pegawai extends CI_Model{

     public function __construct(){
       $this->load->database();
     }


     public function readPegawai($where = FALSE, $nik = FALSE, $idPegawai = FALSE){
       if($nik === FALSE && $where != FALSE && $idPegawai === FALSE){
         return $this->db->get_where("pegawai", $where);
       }else if($where === FALSE && $nik != FALSE  && $idPegawai === FALSE){
         $query = $this->db->get_where('pegawai', array('nik'=>$nik));
         return $query->row();
       }else if($where === FALSE && $idPegawai != FALSE){
         $query = $this->db->get_where('pegawai', array('idPegawai'=>$idPegawai));
         return $query->row();
       }else{
         $query = $this->db->order_by('status','ASC')->get_where('pegawai', array('jabatan'=>0));
         return $query->result_array();
       }
     }


     public function updatePegawai($data, $where){
        return $this->db->update('pegawai', $data, $where);
     }


     public function deletePegawai($idPegawai){
         return $this->db->delete('pegawai',array('idPegawai'=>$idPegawai));
     }

     public function register($data){
        $this->db->insert('pegawai', $data);
     }   
      
       public function getUserInfo($id)  
   {  
     $query = $this->db->get_where('pegawai', array('id' => $id), 1);   
     if($this->db->affected_rows() > 0){  
       $row = $query->row();  
       return $row;  
     }else{  
       error_log('no user found getUserInfo('.$id.')');  
       return false;  
     }  
   }  
   
  public function getUserInfoByEmail($email){  
     $q = $this->db->get_where('pegawai', array('email' => $email), 1);   
     if($this->db->affected_rows() > 0){  
       $row = $q->row();  
       return $row;  
     }  
   }  
   
   public function insertToken($user_id)  
   {    
     $token = substr(sha1(rand()), 0, 30);   
     $date = date('Y-m-d');  
       
     $string = array(  
         'token'=> $token,  
         'user_id'=>$user_id,  
         'created'=>$date  
       );  
     $query = $this->db->insert_string('tokens',$string);  
     $this->db->query($query);  
     return $token . $user_id;  
       
   }  
   
   public function isTokenValid($token)  
   {  
     $tkn = substr($token,0,30);  
     $uid = substr($token,30);     
       
     $q = $this->db->get_where('tokens', array(  
       'tokens.token' => $tkn,   
       'tokens.user_id' => $uid), 1);               
           
     if($this->db->affected_rows() > 0){  
       $row = $q->row();         
         
       $created = $row->created;  
       $createdTS = strtotime($created);  
       $today = date('Y-m-d');   
       $todayTS = strtotime($today);  
         
       if($createdTS != $todayTS){  
         return false;  
       }  
         
       $user_info = $this->getUserInfo($row->user_id);  
       return $user_info;  
         
     }else{  
       return false;  
     }  
       
   }   
   
   public function updatePassword($post)  
   {    
     $this->db->where('id', $post['id']);  
     $this->db->update('pegawai', array('password' => $post['password']));      
     return true;  
   }   

  }
 ?>
