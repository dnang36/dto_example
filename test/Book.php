<?php

namespace test;
use src\Data;

require 'vendor/autoload.php';

class Book extends Data{

}

$array = [
    ['name' => 'Nguyễn Gia Hào', 'email' => 'giahao9899@gmail.com'],
    ['name' => 'VNP Group', 'email' => 'vnp@gmail.com'],
    ['name' => '123dok', 'email' => '123dok@gmail.com'],
];

$book = Book::collection($array);

//$book = Book::from($array);
//print_r($book->add(['name' => 'Phat', 'email' => '123456@gmail.com']));
echo "\n";
//print_r($book->count());
//print_r($book->first());
//print_r($book->last());

print_r($book);