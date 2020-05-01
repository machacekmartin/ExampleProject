<?php

class Image extends Model{

    /** TODO NEEDS REFACTOR OR MORE ABSTRACTION
     * Uses a Database class to query db configured in config/database.php
     * Inserts object into the database table 'images' (might make it into an attribute later)
     * 
     * @param object $row   Image object that is fit to be extracted into db query (needs properties header and filename)
     */
    public static function insert($row){
        return Database::query("
            INSERT INTO 
            images (header, date, filename)
            VALUES ('$row->header', now(), '$row->filename')"
        );
    }
}