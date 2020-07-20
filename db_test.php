<?php

include './includes/db_credentials.php';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
} else {
    echo "connected successfully";
}
