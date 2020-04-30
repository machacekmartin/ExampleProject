<?php

class PostController extends Controller{
    
    public function index(){
        return self::view('posts/index', Post::all('posts'));
    }

    public function create(){

    }

    public function store(){

    }

    public function show($id){
        $post = Post::row('posts', $id);
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