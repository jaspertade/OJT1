<?php
include 'inc/connection.php';
session_start();

$id=$_GET['id'];


$client_id = $_SESSION['user_id'];

$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$random = substr( str_shuffle( $chars ), 0, 8 );


$sql = "INSERT INTO payment (eventid,client_id,payment_code) VALUES ('$id','$client_id','$random')";

if (mysqli_query($connect, $sql)) {
    echo "<script>
    alert('You are now registered to an event. Please follow instructions for payment');
    window.location.href='client-congress-list.php';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
?>