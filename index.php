        <?php
            include 'includes/dbh.inc.php';
            include 'includes/user.inc.php';
            include 'includes/viewuser.inc.php';
        ?>
<!DOCTYPE html>
    <html>
    <meta charset="utf-8">
    <head>
    </head>
    <title>
    </title>
    <body>
        <?php
            $users = new ViewUser();
            $users->showAllUsers();
        ?>
    </body>
</html>


