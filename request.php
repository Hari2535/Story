<?php
    if(isset($_REQUEST["name"]) || isset($_REQUEST["age"])) {
        echo "Hi ". $_REQUEST['name']. "<br/>"; 
        echo "Your age is ". $_REQUEST['age']. "Years";
        exit();
    }
?>
<html>
    <body>
        <from action = "<?php $_PHP_SELF ?>" method = "POST" >
    Name: <input type="text" name = "name" />
Age: <input type="text" name="age" />
<input type="submit" />
</from>
    </body>
</html>