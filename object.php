<html>
    <body>
        <h1>The fruits Program </h1>
    
        <?php
        class Fruit{
            public $name;
            public $color;

            function set_name($name){
                $this->name =$name;
            }
            function get_name(){
                return $this->name;
        }
    }
$one = new Fruit();
$two = new Fruit();
$one->set_name('Apple');
$two->set_name('Mango');

echo $one->get_name();
echo "<br>";
echo $two->get_name();


    ?>
    </body>
    </html>
    