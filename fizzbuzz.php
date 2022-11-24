<?php
    $title = 'FizzBuzz';
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
        <script src="./assets/js/fizzbuzz.js" type="text/javascript"></script>
    </head>
    <body>
            <p id="echo-php" class="result">
                <?php
                    for ($i = 1; $i < 100; $i++) {
                        if ($i % 3 == 0) {
                            echo 'Fizz';
                        } else if ($i % 5 == 0) {
                            echo 'Buzz';
                        } else {
                            echo $i;
                        }
                        echo ' ';
                    }
                ?>
            </p>
            <p id="echo-js" class="result"></p>
    </body>
</html>
