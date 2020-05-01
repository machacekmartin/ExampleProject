<?php

class Image extends Model{

    public static function insert($row){
        return Database::query("
            INSERT INTO 
            images (header, date, filename)
            VALUES ('$row->header', now(), '$row->filename')"
        );
    }
}