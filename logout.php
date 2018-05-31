<?php
session_start();
unset($_SESSION['memusername']);
session_destroy();

header("Location: index.php");
exit;
?>