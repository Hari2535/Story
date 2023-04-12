<?php
    if(isset($_POST["name"]) || isset($_POST["age"])) {
        if(preg_match("/[^A-Za-z'-]/",$_POST['name'])) {
            die("Invalid name. Name should be alphabet");
    }
    echo "Hello". $_POST['name']. "<br/>";
    echo "Your age is ". $_POST['age']. "<br/>";

    exit ();
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