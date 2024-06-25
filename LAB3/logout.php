<?php
session_start();
session_unset();
session_destroy();
header("Location: ex8.php");
exit();
