<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::id();
        //$users -> save ();
        // return $users; 

        return view('home');
    }
}

    /*public function login()
    {
        $data['error'] ="Invalid Login";
        $this->load->view('auth');
        if($this->input->post())
        {
            $user = $this->UserModel->login($this->input->post());
            if(count($user)>0)
            {
                $array = array(
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'password' => $user['password'],
                    );
                    $this->session->set_userdata($array);
                    if($user['client_type_id'] == '1'){
                    redirect(base_url('your_controller/admin_dashboard'));
                    } else {
                    redirect(base_url('your_controller/client_dashboard'));
                    }
            }
            else
            {
                $data["error_message"]="Invalid User Name and Password combination";
            }

            //$this->UserModel->login($this->input->post());
            //redirect(base_url('../fms'));
        //}
        //$this->load->view('auth/signin',$data);
        //$this->load->view('auth/footer');
    //}

    //function admin_dashboard(){ 
    //$this->load->view('admin/header');
    //$this->load->view('admin/home',$data);
    //$this->load->view('admin/footer');
    //}

    //function user_dashboard(){
    //$this->load->view('client/header');
    //$this->load->view('client/home',$data);
    //$this->load->view('client/footer');
    //}
}