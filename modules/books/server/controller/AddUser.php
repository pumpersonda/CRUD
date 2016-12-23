<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 23/12/2016
 * Time: 12:26 PM
 */


require_once("BookManager.php");
require_once("../models/Book.php");
$title = $_POST["title"];
$author = $_POST["author"];
$year = $_POST[""];
$editorial = $_POST["editorial"];
$ISBN = $_POST["ISBN"];

$book = Book($title,$author,$year,$editorial,$ISBN);
$bookManager = BookManager::getInstance();
$bookManager->saveBook($book);


