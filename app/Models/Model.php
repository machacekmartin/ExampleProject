<?php

class Model{
    
    /**
     * Fetches ALL data from database table using Database function query
     * 
     * @param string $table DB table name
     * 
     * @return array    array of objects.
     */
    public static function all($table){
        return Database::query("SELECT * FROM $table")->fetchAll(PDO::FETCH_CLASS);
    }
    
    /**
     * Fetches one row from database table using Database function query
     * 
     * @param string $table DB table name
     * @param string $id    ID of row that is being retrived
     * 
     * @return array    array of objects
     */
    public static function row($table, $id){
        return Database::query("SELECT * FROM $table WHERE id=$id")->fetch(PDO::FETCH_OBJ);
    }

     /**
     * Fetches exact CELL value from database table using Database function query
     * 
     * @param string $table  DB table name
     * @param string $id     ID of row that is being searched
     * @param string $column name of table's collumn
     * 
     * @return string   cell value
     */
    public static function cell($table, $id, $column){
        return Database::query("SELECT $column FROM $table WHERE id=$id")->fetch(PDO::FETCH_COLUMN);
    }

    /**
     * Deletes a row from table
     * 
     * @param string $table  DB table name
     * @param string $id     ID of row that is being deleted
     * 
     * @return int  number of rows that have been affected (should be 1)  
     */
    public static function destroy($table, $id){
        return Database::query("DELETE FROM $table WHERE id=$id");
    }

}