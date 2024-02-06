<?php
require_once  __DIR__ . '/public/header.php';
require  __DIR__ . '/src/Book.php';

$book1 = new Book('Athor1','1500','Title1','1999');
$book2 = new Book('Athor2','4135','Title2','2004');
$book3 = new Book('Athor3','6313','Title3','2023');

echo $book1->getInfo().'<br>';
echo $book2->getInfo().'<br>';
echo $book3->getInfo().'<br>';


require_once  __DIR__ . '/public/footer.php';