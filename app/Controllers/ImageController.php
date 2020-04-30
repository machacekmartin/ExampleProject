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

        return self::view('images/show', Image::row('images', $id));

    }

    public function edit(){

    }

    public function update(){

    }
    
    public function destroy(){

    }
}

?>