<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

use Food as GlobalFood;

        class Food {
           private $name;
           private $price;
           public function __construct($name, $price)
           {
            $this->name = $name;
            $this->price = $price;
           }
           public function show_price() {
            echo $this->price . '<br>';
           }
        }
        class Animal {
           private $name;
           private $height;
           private $weight;
           public function __construct($name, $height, $weight)
           {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
           }
           public function show_height() {
            echo $this->height .'<br>';
           }
           
        }
        $orange = new Food('orange', 100);
        print_r($orange);
        $pochi = new Animal('dog', 10, 100);
        print_r($pochi);
        $orange->show_price();
        $pochi->show_height();
    ?>
</body>
</html>