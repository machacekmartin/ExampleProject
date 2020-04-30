<?php

class Model{
    
    public static function all($table){
        return Database::query("SELECT * FROM $table");
    }
    
    public static function row($table, $id){
        return Database::query("SELECT * FROM $table WHERE id=$id");
    }

}