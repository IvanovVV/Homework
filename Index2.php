<?php
$Pass = $_POST['pass'];
$Name = $_POST['name'];
if (($Pass <> 1234) ||($Name <> 'Vova')){
 echo 'Incorrect Name/Password';
}
else {
 echo 'Hello Vova';
}
?>