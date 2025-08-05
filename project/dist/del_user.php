<?php

require '../connect.php';
$username = $_GET['username'];
$sql = "DELETE FROM users WHERE username='$username'";
$result = $con->query($sql);
if (!$result) {
    echo "<script>alert('Can not delete')</script>";
} else {
    echo "<script>window.location.href='index.php?page=users_list'</script>";
}
