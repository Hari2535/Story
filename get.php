<?php 
if(isset($_GET["name"]) || isset($_GET["age"])){
    echo "HII ". $_GET['name']. "<br/>";
    echo "Your age is". $_gGET['age']." Years";
    exit();
}
?>

<html>
<body>
<from action = "<?php $_PHP_self ?>"method = "GET">
Name: <input type="text" name = "name"/>
Age: <input type="text" name = "age" />
<input type="submit"/>
</from>
</body>
</html> 