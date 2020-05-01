<?php

class Image extends Model{

    public static function insert($row){
        return Database::query("
            INSERT INTO 
            posts (header, date, src)
            VALUES ('$row->header', now(), '$row->src')"
        );
    }
}