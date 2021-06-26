<?php
error_reporting(0);
$A = $_POST["empid"];
$B = $_POST["name"];
$C = $_POST["dept"];
$D = $_POST["email"];
echo "Your personal details";
echo "<br><br>";
echo "Employee id: $A <br>";
echo "Name: $B <br>";
echo "Department: $C <br>";
echo "Email: $D <br>";