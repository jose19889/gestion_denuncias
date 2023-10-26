<?php

namespace App\Controllers;
use App\Models\LoginModel;
use CodeIgniter\Controller;
class Login extends BaseController
{

    // function __construct(){
    // parent::__construct();
      
    //   }


    public function index(): string
    {
        // $this->load->helpers('html');
       
        return view('auth/login');
    }

    public function auth(){
        $userModel = new LoginModel();
        $email    = $this->input->post('email',TRUE);
        $password = md5($this->input->post('password',TRUE));
        $validate = $this->login_model->validate($email,$password);
        if($validate->num_rows() > 0){
            $data  = $validate->row_array();
            $name  = $data['username'];
            $email = $data['email'];
            $role_id = $data['role_id'];
    
            $sesdata = array(
                'username'  => $name,
                'email'     => $email,
                'role_id'     => $role_id,
                'logged_in' => TRUE
            );
    
    
            $this->session->set_userdata($sesdata);
    
            // access login for admin
            if($role_id === '1'){
                redirect('dashboard');
    
            // access login for staff
            }elseif($role_id === '2'){
                redirect('dashboard');
    
            // access login for author
            }else{
                redirect('dashboard');
            }
        }else{
            echo $this->session->set_flashdata('msg','Credenciales incorrectas !');
            redirect('');
        }
      }
    
      function logout(){
          $this->session->sess_destroy();
          redirect('login');
      }


}
