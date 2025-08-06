<?php

require '../connect.php';
$pro_id = $_GET['pro_id'];
$sql = "DELETE FROM products WHERE pro_id='$pro_id'";
$result = $con->query($sql);
if (!$result) {
    echo "<script>alert('Can not delete')</script>";
} else {
    echo "<script>window.location.href='index.php?page=products'</script>";
}
