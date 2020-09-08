<!DOCTYPE html>
<?php
    include 'person.php'
?>
<html>
<body>
<?php 
    // $rover = new Person();
    // echo 'my owner is: '.$rover->owner();
    // $cookie = new Person();
    // echo $cookie->owner();
    // $me = new Person();
    // $me->setName("Devon");
    // echo $me->name;

    // $me2 = new Person();
    // $me2->setName("Timmy");
    // echo $me2->name;

    $me = new Person('Name', 'Green', '26');
    $me->setName('Jerry');
    echo $me->getName();
    // echo $me->name;
    // echo $me->eyeColor;
    // echo $me->age;
    // echo $me->last;
?>
</body>
</html>