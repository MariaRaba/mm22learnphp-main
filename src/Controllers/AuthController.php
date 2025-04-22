<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function registerForm(){
        view('auth/register');
    }

    public function register(){
        $user = User::where('email', $_POST['email']);
        if(count($user) === 0 && $_POST['password'] === $_POST['password_confirm']){
            $user = new User();
            $user->email = $_POST['email'];
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $user->save();
            redirect('/login');
        } else {
            $_SESSION['newerror'] = "account exists or passwords don't match";
            redirect('/register');
        }
       
        
    }

    public function loginForm(){
        view('auth/login');
    }

    public function login(){
        $user = User::where('email', $_POST['email']);
        $user = $user[0] ?? null;
        if($user && password_verify($_POST['password'], $user->password)){
            $_SESSION['userId'] = $user->id;
            redirect('/');
        } else {
            $_SESSION['newerror'] = "Credentials don't match";
            redirect('/login');
        }
    }

    public function logout(){
        unset($_SESSION['userId']);
        redirect('/');
    }
}
