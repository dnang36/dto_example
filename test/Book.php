<?php

namespace test;
use src\Data;

require 'vendor/autoload.php';

class Book extends Data{

}

$array = [
    ['name' => 'Nguyễn Gia Hào', 'email' => 'giahao9899@gmail.com'],
    ['name' => 'VNP Group', 'email' => 'vnp@gmail.com'],
];

$book = Book::collection($array);

print_r($book);