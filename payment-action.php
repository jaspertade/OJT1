<?php
include 'inc/connection.php';
session_start();

$client_id = $_SESSION['user_id'];
$paycode = mysqli_real_escape_string($connect, $_POST['paycode']);

$sql = "UPDATE payment SET status = 'paid' where payment_code = '$paycode'";
$allPayment = mysqli_query($connect,"SELECT * FROM payment WHERE payment_code = '$paycode'");


if(mysqli_num_rows($allPayment) == 0){
    echo "<script>
    alert('Incorrect Code');
    window.location.href='client-home.php';
    </script>";
}else if (mysqli_query($connect, $sql)) {
    echo "<script>
    alert('Payment Successful');
    window.location.href='client-home.php';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
?>