<html>
    <body>
        <?php
        class Fruit{
            public $name;
            public $color;

            function __construct($name, $color){
                $this->name = $name;
                $this->color = $color;

            }
            function get_name(){
                return $this->name;
            }
            function get_color(){
                return $this->color;
            }
        }

        $one = new Fruit ("Banana", "yello");
        echo $one->get_name();
        echo"<br>";
        echo $one->get_color();
        ?>
</body>
</html>

