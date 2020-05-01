<?php

class Model{
    
    public static function all($table){
        return Database::query("SELECT * FROM $table")->fetchAll(PDO::FETCH_CLASS);
    }
    
    public static function row($table, $id){
        return Database::query("SELECT * FROM $table WHERE id=$id")->fetchAll(PDO::FETCH_CLASS);
    }

    public static function cell($table, $id, $column){
        return Database::query("SELECT $column FROM $table WHERE id=$id")->fetch(PDO::FETCH_COLUMN);
    }

    public static function destroy($table, $id){
        return Database::query("DELETE FROM $table WHERE id=$id");
    }

}