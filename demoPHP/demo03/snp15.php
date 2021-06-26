<?php 
$month = 86400 + time();
setcookie('Name', 'Jerry', $month);
echo "The cookie has been set.";
?>