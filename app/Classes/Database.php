<?php
include 'config/database.php';

/**
 * DB connection using PDO
 * https://code.tutsplus.com/tutorials/pdo-vs-mysqli-which-should-you-use--net-24059
 * 
 */
class Database {

    /**
     * Creates connection between client and database by using credentials provided in
     * config/database file. Uses PDO, has ERROMODE and EXCEPTION switched on.
     * 
     * @return PDO $pdo instance of database connection, used for queries. 
     */
    private static function connect(){
        $pdo = new PDO(
            'mysql:host='.HOST.';
            dbname='.DATABASE,
            USERNAME, 
            PASSWORD
        ); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    /**
     * Queries a database with provided request, prepares the query to prevent cross-site scripting
     * After executing the command, the data from database will be provided.
     * Execute() is made for usage without parameters.
     * 
     * @param string $sqlQuery  SQL query for the database
     * 
     * @return array $data  Array of data provided by the database as a response to the query.
     */
    public static function query($sqlQuery){
        try{
            $query = self::connect()->prepare($sqlQuery);
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_CLASS);
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

        return $data;
    }
}

?>