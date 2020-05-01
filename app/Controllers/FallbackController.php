<?php 

class FallbackController extends Controller{
    public function error($code){
        return self::view('fallbacks/404');
    }
}