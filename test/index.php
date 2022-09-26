<?php

require 'vendor/autoload.php';

use test\User;
use test\Book;


$array = [
    ['name' => 'Nguyễn Gia Hào', 'email' => 'giahao9899@gmail.com'],
    ['name' => 'VNP Group', 'email' => 'vnp@gmail.com'],
    ['name' => '123dok', 'email' => '123dok@gmail.com'],
];


//$book = Book::from($array);
$book = Book::collection($array);
echo "\n";
//dem phan tu
//print_r($book->count());

// lay ra phan tu dau
//print_r($book->first());

//lay ra phan tu cuoi
//print_r($book->last());

print_r($book->getIterator());

//xoa book
//print_r($book->clear());
//add them book
//print_r($book->add(['name' => 'Phat', 'email' => '123456@gmail.com']));
//print_r($book);


$me = ['name' => 'Nguyễn Gia Hào', 'email' => 'giahao9899@gmail.com'];


$user = User::from((array)$me);


$user->name = 'VNP';


echo $user->name."\n";

echo $user->email;

