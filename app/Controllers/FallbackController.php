<?php 

class FallbackController extends Controller{

    /**
     * Generates a view of desired error code inside folder 'fallbacks'
     * f.e - 404
     * 
     * @param string $code  error code
     */
    public function error($code){
        return self::view('fallbacks/'.$code);
    }
}