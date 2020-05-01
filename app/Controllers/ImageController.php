<?php

// 6
class ImageController extends Controller{
    
    public function index(){
        $images = Image::all('images');
        return self::view('images/index', $images);
        
    }

    public function create(){

    }

    public function store($image){
        $newImage = new Image();
        $newImage->header = $image['header'];
        $newImage->src = $image['src'];

        Image::insert($newImage);

        return self::view('images/index', Image::all('images'));
    }

    public function show($id){
        $image = Image::row('images', $id);
        if (empty($image)){
            return self::view('fallbacks/404', null);
        }  
        return self::view('images/show', $image);

    }

    public function edit(){

    }

    public function update(){

    }
    
    public function destroy($id){
        Image::destroy('images', $id);
        self::redirect('posts');
        return self::view('images/index', Image::all('images'));
    }
}

?>