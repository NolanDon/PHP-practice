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

    $me = new Person();
    $me->setName("Devon");
    echo $me->name;

    $me2 = new Person();
    $me2->setName("Timmy");
    echo $me2->name;

?>
</body>
</html>