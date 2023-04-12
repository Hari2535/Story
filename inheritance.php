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
            public function message() {
                echo "Is Banana is a fruit or a vegatable?";
            }
        }
        $one =new Banana ("Banana", "yellow");
        $one->message();
        $one->intro();

        ?>
        </body>
    </hmtl>