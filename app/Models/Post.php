<?php

class Post extends Model{

    public static function insert($row){
        return Database::query("
            INSERT INTO 
            posts (header, date, content)
            VALUES ('$row->header', now(), '$row->content')"
        );
    }


}