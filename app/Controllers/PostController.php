<?php

class PostController extends Controller{
    
    public function index(){
        return self::view('posts/index', Post::all('posts'));
    }

    public function create(){

    }

    public function store($post){
        $newPost = new Post($post['header'], $post['date'], $post['content']);
        var_dump($newPost);
    }

    public function show($id){
        $post = Post::row('posts', $id);
        if (empty($post)){
            return self::view('fallbacks/404', null);
        }  
        return self::view('posts/show', $post);
    }

    public function edit(){

    }

    public function update(){

    }
    
    public function destroy($id){
        Post::destroy('posts', $id);
        return self::view('posts/index', Post::all('posts'));
    }
}

?>