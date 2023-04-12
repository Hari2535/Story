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
    ?>
    </body>
    </html>
    