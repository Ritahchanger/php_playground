<?php


class User
{

    public $name;
    public $username;
    public $followerCount;
}

$dennisPeterObject = new User();

$dennisPeterObject->name = "Dennis Peter";

$dennisPeterObject->username = "peterdennis573@gmail.com";

$dennisPeterObject->followerCount = 67;



$johnObject = new User();

$johnObject->name = "John Peter";

$johnObject->username = "dennispeter2580@gmail.com";

$johnObject->followerCount = 67;


print_r($dennisPeterObject);

print_r($johnObject);
