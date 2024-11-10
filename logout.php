<?php

session_unset('r_id','uname');
session_destroy();
header("location:slogin.php");
?>