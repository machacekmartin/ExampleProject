<?php

// 6
class ImageController extends Controller{
    
    public function index(){
        Database::query("SELECT * FROM images");
        self::view('images/index', ['hey' => 15]);
    }

    public function create(){

    }

    public function store(){

    }

    public function show(){

    }

    public function edit(){

    }

    public function update(){

    }
    
    public function destroy(){

    }
}

?>