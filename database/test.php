<?php
if (function_exists('mysqli_connect')) {
    echo "MySQLi is installed and enabled!";
} else {
    echo "MySQLi is not installed.";
}
?>