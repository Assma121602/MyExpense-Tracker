<?php 

$server = "sql206.epizy.com";
$user = "epiz_30682663";
$pass = "vJk4dgp41MI6I";sql206.epizy.com
$database = "epiz_30682663_expensetracker";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>