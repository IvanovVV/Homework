<!DOCTYPE html>
<html>
    <head>
        <title>PHP Get Method </title>   
        </head>    
        <body>
            <form action="Index2.php" method="post">
                <!-- After submission, the content of the form fields will be passed to the script in index.php -->
                Name: <input type="text" name="name"/><br />              
                Password: <input type="password" name="pass"/><br />               
                <input type="submit" value="Login" />  
                <!-- Submitting all input values and sending them to the php file -->
            </form>
        </body>
</html>

<?php
if (isset($_POST['name']) && isset($_POST['pass'])){
    $varName = $_POST['name'];
    $varPass = $_POST['pass'];
    var_dump($_COOKIE);
    setcookie('name', $_POST['name'] && 'pass', $_POST['pass']);
}else {
    
    echo'Sorry cookies are not set';
}

?>