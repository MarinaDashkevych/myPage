<?php
require_once "students.php";
function checkAge($age)
{
    if ($age >= 18) {
        return true;
    }
    return false;
}

$age = $_GET['age'];

$hasAccess = checkAge($age);

if ($hasAccess) {
    echo " Allowed";
} else {
    echo "Denied";
}

