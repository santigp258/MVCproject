<?php

require_once('./user.php');

$user = new User();

$user->add('santiago', 'guerrero', 'santigp@gmail.com', '123456', 'santi', 'active');
//$user->update(1, 'santiago', 'guerrero', 'santigp@gmail.com', 'santiuwu', 'santi', 'active');

$information = $user->get();

foreach($information as $info){
    echo $info['name'] . '<br>';
    echo $info['lastname'] . '<br>';
    echo $info['user'] . '<br>';
    echo $info['name'] . '<br>';

}

$user->delete(1);