<?php

class PostController extends Controller{
    
    public function index(){
        return self::view('posts/index', Post::all('posts'));
    }

    public function create(){
        return self::view('posts/create');
    }

    public function store($post){
        Post::insert((object) [
            'header' => $post['header'],
            'content' => $post['content'],
        ]);
        return self::redirect('posts');
    }

    public function show($id){
        $post = Post::row('posts', $id);
        if (empty($post)){
            return self::view('fallbacks/404');
        }  
        return self::view('posts/show', $post);
    }

    public function edit(){
        //
    }

    public function update(){
        // 
    }
    
    public function destroy($id){
        Post::destroy('posts', $id);
        return self::redirect('posts');
    }
}

?>