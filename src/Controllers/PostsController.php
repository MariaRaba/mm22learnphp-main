<?php

namespace App\Controllers;

use App\Models\Post;

class PostsController
{
    public function index(){
        $posts = Post::all();
        view('posts/index', compact('posts'));
    }

    public function create(){
        view('posts/create');
    }

    public function store(){
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        redirect('/admin/posts');
    }

    public function edit(){
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            redirect('/admin/posts');
            return;
        }

        $post = Post::find($_GET['id']);
        if (!$post) {
            redirect('/admin/posts');
            return;
        }

        view('posts/edit', compact('post'));
    }

    public function update(){

        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            redirect('/admin/posts');
            return;
        }

        $post = Post::find($_GET['id']);
        if (!$post) {
            redirect('/admin/posts');
            return;
        }

        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        redirect('/admin/posts');
    }

    public function destroy(){
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            redirect('/admin/posts');
            return;
        }

        $post = Post::find($_GET['id']);
        if ($post) {
            $post->delete();
        }
        redirect('/admin/posts');
    }

//
    public function show(){ 
        $post = Post::find($_GET['id']);
        view('posts/show', compact('post'));
    }

}