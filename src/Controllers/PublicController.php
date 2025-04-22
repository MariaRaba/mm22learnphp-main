<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController
{
    public function index()
    {
        
        $posts = Post::all();
        view('index', compact('posts'));
        //view('index', ['posts' => $posts]);
    }

    public function us()
    {
        $posts = Post::all();
        dd($posts);
        view('us', compact('posts'));
    }

    public function tech()
    {
        $posts = Post::all();
        view('tech', compact('posts'));
       
    }

    public function form()
    {
        //dump($_GET, $_POST); //query

        // if(isset($_GET['fname'])){
        //     $fname = $_GET['fname'];
        // } else {
        //     $fname = null;
        // }

        //$fname = isset($_GET['fname']) ? $_GET['fname'] : null;

        $fname = $_POST['fname'] ?? null;
        view('form', compact('fname'));
    }

    public function answer()
    {
        echo $_POST['fname'];
    }
}
