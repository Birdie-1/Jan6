<?php
if ($_POST) {
    $name = $_POST['fname'];
    $surname = $_POST['lname'];
    $birthday = $_POST['birthday'];
    $sex = $_POST['sex'];
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];


    echo "Hello Mr. $name $surname<br>";
    echo "วันเกิด : $birthday<br>";
    echo "เพศ : $sex<br>";
    echo "Username : $username<br>";
    echo "Password : $pwd<br>";

}
?>