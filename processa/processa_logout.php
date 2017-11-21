<?php
session_start();
session_destroy();
echo '<script>top.location.href="../landing.php";</script>';
?>