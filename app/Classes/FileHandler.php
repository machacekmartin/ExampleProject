<?php

class FileHandler{
    
    private $valid = array('.jpg', '.jpeg', '.png');
    private $folder = 'resources/images/';

    /**
     * Uploads file to a folder given in class attribute $folder
     * First, checks if the file has valid format (extension), then
     * adds a date to the filename to avoid duplicates/overwriting.
     * Finally, uses move_uploaded_file to upload the file.
     * 
     * @param object $file  Object taken from available $_FILES 
     * 
     * @return string $name Final name of the uploaded file
     * @return null         Ff something went wrong
     */
    public function upload($file){
        $ext = strrchr($file['name'], '.');
        if (in_array($ext, $this->valid)){
            $name = date("Ymd-His")."-".str_replace(' ', '-', $file['name']);
            $dest = $this->folder . $name;
            if (move_uploaded_file($file['tmp_name'], $dest)){
                return $name;
            }
            else{
                echo "For some reason, the file could not be uploaded..";
            }
        }
        else{
            echo "<br>Invalid extension<br>";
        }
    }

    /**
     * Deletes file by given name 
     * Uses class attribute folder, to determine right path
     * 
     * @param string $filename  Name of the file (full, with extension)
     */
    public function delete($filename){
        unlink($this->folder.'/'.$filename);
    }
}

?>