<!DOCTYPE html>
<?php
    include 'person.php'
?>
<html>
<body>
<?php 
    // $rover = new Person();
    // echo 'my owner is: '.$rover->owner();

    $cookie = new Pet();
    echo $cookie->owner();
?>
</body>
</html>