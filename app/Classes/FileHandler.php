<?php

class FileHandler{
    
    private $valid = array('.jpg', '.jpeg', '.png');
    private $folder = 'resources/images/';

    public function upload($file){
        $ext = strrchr($file['name'], '.');
        if (in_array($ext, $this->valid)){
            $name = date("Ymd-His")."-".str_replace(' ', '-', $file['name']);
            $dest = $this->folder . $name;
            if (move_uploaded_file($file['tmp_name'], $dest)){
                return $name;
            }
            else{
                echo "SOMETHINGS WRONG IDIOT";
            }
        }
        else{
            
        }
        return null;
    }

    public function delete($filename){
        unlink($this->folder.'/'.$filename);
    }
}

?>