<?php

namespace test;
use test\User;
use test\Book;

require 'vendor/autoload.php';

$me = ['name' => 'Nguyễn Gia Hào', 'email' => 'giahao9899@gmail.com'];

$user = User::from((array)$me);

$user->name = 'VNP';


echo $user->name."\n";

echo $user->email;