<?php
class login extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('email')){
            redirect('admin');
        }
        $this->form_validation->set_rules('email', 'Alamat Email','required|trim|valid_email',
            [
                'required'=>'Email Harus Di Isi', 
                'valid_email'=>'Email Tidak Benar', 
            ]
        );
        $this->form_validation->set_rules('password','Password','required|trim',
        [
            'required'=>'Password Harus Di Isi', 
        ]
    );
    if ($this->form_validation->run()==false)
    {
        $data['user']='';
        $this->load->view('login_form');
    }
}    
}