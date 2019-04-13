<?php 
echo "Cookie: Username: " . $_COOKIE['username'] . "<br>";
echo "Cookie: First Name: " . $_COOKIE['firstname'] . "<br>";
echo "Cookie: Last Name: " . $_COOKIE['lastname'] . "<br>";
if (isset($_COOKIE["cookie"])){
    foreach ($_COOKIE["cookie"] as $key => $value){
        echo $key . ' is ' . $value . "<br>";
    }
}
?>