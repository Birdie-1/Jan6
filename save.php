<?php
if ($_POST) {
    $name = $_POST['fname'];
    $surname = $_POST['lname'];
    echo "<h1>Hello Mr. $name $surname</h1><br>" ;
}
?>