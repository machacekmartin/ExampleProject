<?php

class Post extends Model{


    /** TODO NEEDS REFACTOR OR MORE ABSTRACTION
     * Uses a Database class to query db configured in config/database.php
     * Inserts object into the database table 'posts' (might make it into an attribute later)
     * 
     * 
     * @param object $row   Post object that is fit to be extracted into db query (needs properties header and content)
     */
    public static function insert($row){
        return Database::query("
            INSERT INTO 
            posts (header, date, content)
            VALUES ('$row->header', now(), '$row->content')"
        );
    }


}