<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Password changed successfully.";
    session_destroy();
}
?>
