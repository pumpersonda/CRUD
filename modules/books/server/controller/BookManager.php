<?php

/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 23/12/2016
 * Time: 12:08 PM
 */

require_once("../../../core/server/DataBaseManager.php");

class BookManager
{
    private $dbManager;
    private static $_instance;

    private function __construct(){
        $this->dbManager = DataBaseManager::getInstance();
    }

    public function __destruct()
    {
        $this->dbManager->close();
        self::$_instance = null;
    }

    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new BookManager();
        }
        return self::$_instance;
    }

    public function saveBook($book)
    {
        $query = "INSERT INTO book (title,author,year,editorial,ISBN) VALUES 
        ('$book->title','$book->author','$book->year','$book->editorial',$book->I[ISBN])";

        $save = $this->dbManager->insertQuery($query);

        if(!is_bool($save)){
            return "$save";
        }
        return "";
    }
}










