<?php

// 6
class ImageController extends Controller{
    
    public function index(){
        return self::view('images/index', Image::all('images'));
    }

    public function create(){

    }

    public function store(){

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
    
    public function destroy(){

    }
}

?>