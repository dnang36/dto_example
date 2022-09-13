<?php

namespace test;
require 'vendor/autoload.php';

use src\Collection;
use src\Data;

$me = ['name' => 'Nguyễn Gia Hào', 'email' => 'giahao9899@gmail.com'];

class User extends Data{

}


$user = User::from((array)$me);


$user->name = 'VNP';


echo $user->name."\n";

echo $user->email;

