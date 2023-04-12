<html>
    <body>
        <?php
        class Fruit{
            public $name;
            public $color;
            public function __construct($name, $color){
                $this->name=$name;
                $this->color=$color;
            }

            public function intro() {
                echo "A {$this->name} is a fruit and color of the fruit is {$this->color}.";
            }
        }

        class Banana extends Fruit {
            public $weight;
            public function __construct($name, $color, $weight) {
                $this->name = $name;
                $this->color = $color;
                $this->weight = $weight;
            }

            public function intro() {
                echo "This fruit is {$this->name}, the color is {$this->color} and the weight is {$this->weight} gram.";
            }
        }
    $one = new banana ("Banana", "Yellow", 35);
    $one->intro();



        ?>
        </body>
    </hmtl>