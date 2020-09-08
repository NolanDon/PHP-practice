<!DOCTYPE html>
<?php
    include 'person.php'
?>
<html>
<body>
<?php 
    // $rover = new Person();
    // echo 'my owner is: '.$rover->owner();

    $cookie = new Person();
    echo $cookie->owner();;
?>
</body>
</html>