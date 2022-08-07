<?php

session_start();

session_destroy(); // session delete

echo $_SESSION['name'];
echo "<br>";
// echo $user_name;