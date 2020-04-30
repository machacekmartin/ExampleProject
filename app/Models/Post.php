<?php

class Post extends Model{

    protected $header;
    protected $date;
    protected $content;

    function __constructor($header, $date, $content){
        $this->$header = $header;
        $this->$date = $date;
        $this->$content = $header;
    }

    public function insert($table, $row){
        return Database::query("INSERT INTO posts (header, date, content)
            VALUES $row, $date, $content"
        );
    }


}