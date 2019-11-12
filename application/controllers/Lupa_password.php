 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
   
 class Lupa_password extends CI_Controller {  
   
   public function __construct(){
    parent::__construct();
    $this->load->model('M_pegawai');
  }
     public function index1()  
     {  
         
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');   
         
         if($this->form_validation->run() == FALSE) {
             $data['title'] = 'Halaman Reset Password | Tutorial reset password CodeIgniter @ https://recodeku.blogspot.com'; 
             $this->load->view('v_lupa_password',$data);  
         }else{  
             $email = $this->input->post('email');   
             $clean = $this->security->xss_clean($email);  
             $userInfo = $this->M_pegawai->getUserInfoByEmail($clean);  
               
             if(!$userInfo){  
               $this->session->set_flashdata('sukses', 'email address salah, silakan coba lagi.');  
               redirect(site_url(''),'refresh');   
             }    
               
             //build token   
                       
             $token = $this->M_pegawai->insertToken($userInfo->id);              
             $qstring = $this->base64url_encode($token);           
             $url = site_url() . 'lupa_password/reset_password/token/' . $qstring;  
             $link = '<a href="' . $url . '">' . $url . '</a>';   
             //$to      = 'haritoushiro@gmail.com';
             //$subject = 'reset password';
             $message = '';             
             $message .= '<strong>Hai, anda menerima email ini karena ada permintaan untuk memperbaharui  
                 password anda.</strong><br>';  
             $message .= '<strong>Silakan klik link ini:</strong> ' . $link;
             //$headers = 'From: webmaster@example.com' . "\r\n" .
                       // 'Reply-To: webmaster@example.com' . "\r\n" .
                         //   'X-Mailer: PHP/' . phpversion();
            // mail($to, $subject, $message, $headers);
             echo $message; //send this through mail  
             exit;  
           
         }  
         
     }  
   
     public function reset_password()  
     {  
       $token = $this->base64url_decode($this->uri->segment(4));           
       $cleanToken = $this->security->xss_clean($token);  
         
       $user_info = $this->M_pegawai->isTokenValid($cleanToken); //either false or array();          
         
       if(!$user_info){  
         $this->session->set_flashdata('sukses', 'Token tidak valid atau kadaluarsa');  
         redirect(site_url(''),'refresh');   
       }    
   
       $data = array(  
         'title'=> 'Halaman Reset Password | Tutorial reset password CodeIgniter @ https://recodeku.blogspot.com',  
         'nama'=> $user_info->nama,   
         'email'=>$user_info->email,   
         'token'=>$this->base64url_encode($token)  
       );  
         
       $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');  
       $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');         
         
       if ($this->form_validation->run() == FALSE) {    
         $this->load->view('v_password', $data);  
       }else{  
                           
         $post = $this->input->post(NULL, TRUE);          
         $cleanPost = $this->security->xss_clean($post);          
         $hashed = $cleanPost['password'];          
         $cleanPost['password'] = $hashed;  
         $cleanPost['id'] = $user_info->id;  
         unset($cleanPost['passconf']);          
         if(!$this->M_pegawai->updatePassword($cleanPost)){  
           $this->session->set_flashdata('sukses', 'Update password gagal.');  
         }else{  
           $this->session->set_flashdata('sukses', 'Password anda sudah  
             diperbaharui. Silakan login.');  
         }  
         redirect(site_url(''),'refresh');         
       }  
     }  
       
   public function base64url_encode($data) {   
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');   
   }   
   
   public function base64url_decode($data) {   
    return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));   
   }    
 }  