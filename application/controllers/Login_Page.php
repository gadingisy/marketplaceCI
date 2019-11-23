<?php

class Login_page extends CI_Controller{
        protected $CI;
        
        public function __construct(){
        $this->CI =& get_instance();
        parent::__construct();  
    }
    public function index(){
        $this->form_validation->set_rules('user_admin','Username','trim|required');
        $this->form_validation->set_rules('pass_admin','Password','trim|required');
        if($this->form_validation->run() == false){
            $this->load->view('admin/login.php');
        }
        else{
            $this->_login();
        }
        
     
    }
    private function _login(){
        
        $user_admin = $this->input->post('user_admin');
        $pass_admin = $this->input->post('pass_admin');

        $user = $this->db->get_where('tb_admin',['user_admin' => $user_admin])->row_array();
      
        if($user){
                 if($user['is_active'] == 1){
                         if(password_verify($pass_admin, $user['pass_admin'])){
                            $data = array(
                                    'user_admin' => $user['user_admin'],
                                    'status'    => TRUE
                            );
                            $this->session->set_userdata($data);
                            redirect('Overview');
                        } else{
                            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                            Password Salah!
                        </div>');
                            redirect('Login_Page');
                        }
                    } else{
                        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                    Tidak ada Username tersebut.
                </div>');
                    redirect('Login_Page');
                    }
                    
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Username atau Password Salah!
           </div>');
             redirect('Login_Page');
        }
            
        
    }
    public function registration(){
        $this->form_validation->set_rules('user_admin','Username','trim|required|is_unique[tb_admin.user_admin]',
            [
                'is_unique' => 'Username sudah terdaftar'
                ]);
        $this->form_validation->set_rules('password1','Password','trim|required|min_length[3]|matches[password2]', [
            'matches' => 'Password Tidak Sama!',
            'min_length' => 'Password Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2','Password','trim|required|matches[password1]');
        if($this->form_validation->run() == false){
            $this->load->view('admin/registeradmin.php');
        }
        else{
        $data=[
           'user_admin' => $this->input->post('user_admin'),
           'pass_admin' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
           'is_active' => 1
        ];
        $this->db->insert('tb_admin',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
                    Username telah terdaftar, silahkan login.
                </div>');
        redirect('Login_Page');
    
    }
        
     
    }

    public function logout(){
        $this->session->unset_userdata('user_admin');
        $this->session->unset_userdata('status');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
        Logout Sukses!
        </div>');
        session_destroy();
       
        redirect('Login_Page');
    }

}

?>