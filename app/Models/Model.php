<?php

class Model{
    
    public static function all($table){
        $data = Database::query("SELECT * FROM $table");
        return $data;
    }
    public static function row($table, $id){
        $data = Database::query("SELECT * FROM $table WHERE id=$id");
        return $data;
    }
}