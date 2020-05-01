<?php

// 6
class ImageController extends Controller{
    
    public function index(){
        return self::view('images/index', Image::all('images'));
    }

    public function create(){
        return self::view('images/create');
    }

    public function store($image){
        Image::insert((object)[
            'header' => $image['header'],
            'src' => $image['src']
        ]);
        return self::view('images/create');
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
        Image::destroy('images', $id);
        return self::view('images');
    }
}

?>