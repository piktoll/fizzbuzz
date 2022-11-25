<?php

class Application {
    public $title;
    public $desc;

    function __construct($title, $desc) {
        $this->title = $title;
        $this->desc = $desc;
    }
}

$app = new Application('Fizzbuzz', 'A popular interview screening exercise.');
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $app->title; ?></title>
        <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
        <script src="./assets/js/fizzbuzz.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <h1><?php echo $app->title; ?></h1>
            <h3><?php echo $app->desc; ?></h3>
        </header>
        <div class="result-container">
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
        </div>
    </body>
</html>
