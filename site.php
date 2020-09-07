<!DOCTYPE html>
    <html>
    <meta charset="utf-8">
    <head>
    </head>
    <title>
    </title>
    <body>

        <?php
        // quick staircase algorithm
            function staircase($numberOfStairs) {
                for ($i = 1; $i <= $numberOfStairs; $i++) {

                    $spaces = $numberOfStairs - $i;
                    while ($spaces) {
                        echo " ";
                        $spaces--;
                    }
                    $staircase = $spaces - $i;

                    while ($staircase < $spaces) {
                        echo "#";
                        $staircase++;
                    }
                    echo "<br>";
                }
            }
            staircase(6);
        ?>
    </body>
</html>
