<?php

class Book
{
    /**
     * @var
     */
    private $title;
    private $price;
    private $author;
    private $year;

    /**
     * @param $author
     * @param $price
     * @param $title
     * @param $year
     */
    public function __construct($author, $price, $title, $year)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
        return 'Название: '.$this->title.', Автор: '.$this->author.', Год выпуска: '.$this->year.', Цена: '.$this->price;
    }
}