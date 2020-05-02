<?php

class ImageController extends Controller{
    
    public function index(){
        return self::view('images/index', Image::all('images'));
    }

    public function create(){

        return self::view('images/create');
    }

    public function store($image){
        $fileHandler = new FileHandler();
        $filename = $fileHandler->upload($_FILES['image']);

        if ($filename == null) die("<br>Command terminated.<br>");

        Image::insert((object)[
            'header' => $image['header'],
            'filename' => $filename
        ]);
        return self::redirect('images');
    }

    public function show($id){
        $image = Image::row('images', $id);
        if (empty($image)){
            return self::view('fallbacks/404');
        }  
        return self::view('images/show', $image);

    }

    public function edit(){
        //
    }

    public function update(){
        // 
    }
    
    public function destroy($id){
        $fileHandler = new FileHandler();
        $filename = Image::cell('images', $id, 'filename');
        if (empty($filename)){
            return self::view('fallbacks/404');
        }
        $fileHandler->delete($filename);
        Image::destroy('images', $id);
    
        return self::redirect('images');
    }
}

?>