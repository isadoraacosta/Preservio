<?php
session_start();
session_unset();
session_destroy();
header("Location: ../../pages/home/principal.php");
exit();