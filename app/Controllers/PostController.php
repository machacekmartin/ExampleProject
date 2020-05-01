<?php

class PostController extends Controller{
    
    public function index(){
        return self::view('posts/index', Post::all('posts'));
    }

    public function create(){
        return self::view('posts/create', Post::all('posts'));
    }

    public function store($post){
        $newPost = new Post();
        $newPost->header = $post['header'];
        $newPost->content = $post['content'];

        Post::insert($newPost);

        self::redirect('posts');
        return self::view('posts/index', Post::all('posts'));
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
        
        self::redirect('posts');
        return self::view('posts/index', Post::all('posts'));
    }
}

?>