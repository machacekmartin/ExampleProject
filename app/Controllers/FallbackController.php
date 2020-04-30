<?php 

class FallbackController extends Controller{
    public function index($code){
        require_once('resources/views/fallbacks/'.$code.'.php');
    }
}