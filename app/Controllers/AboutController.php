<?php 
class AboutController extends Controller{
    public static function index(){
        return new View('../resources/views/about.php');
    }
}