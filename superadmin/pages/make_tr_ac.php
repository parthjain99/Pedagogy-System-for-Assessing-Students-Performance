<?php
include '../../database/config.php';
$sid = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "UPDATE tbl_users SET acc_stat='1' WHERE user_id='$sid'";

if ($conn->query($sql) === TRUE) {
    header("location:../teacher.php?rp=7823");
} else {
    header("location:../teacher.php?rp=1298");
}

$conn->close();
?>
