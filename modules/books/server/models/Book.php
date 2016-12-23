<?php

/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 23/12/2016
 * Time: 11:48 AM
 */
class Book
{
    public $title = "";
    public $author = "";
    public $year = "";
    public $editorial = "";
    public $ISBN = "";

    /**
     * book constructor.
     * @param string $title
     * @param string $author
     * @param string $year
     * @param string $editorial
     * @param string $ISBN
     */
    public function __construct($title, $author, $year, $editorial, $ISBN)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->editorial = $editorial;
        $this->ISBN = $ISBN;
    }


    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param string $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getEditorial()
    {
        return $this->editorial;
    }

    /**
     * @param string $editorial
     */
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;
    }

    /**
     * @return string
     */
    public function getISBN()
    {
        return $this->ISBN;
    }

    /**
     * @param string $ISBN
     */
    public function setISBN($ISBN)
    {
        $this->ISBN = $ISBN;
    }




}