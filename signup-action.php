<?php
  include 'inc/connection.php';
  session_start();

  if(isset($_SESSION['user_id'])){ 
        header("location:index.php");
    }else if(isset($_POST['register'])){

        $firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $contact = mysqli_real_escape_string($connect, $_POST['contact']);

        $gender = mysqli_real_escape_string($connect, $_POST['gender']);

        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $client_type = mysqli_real_escape_string($connect, $_POST['client_type']);

    $clientReg = "INSERT INTO client (firstname,lastname,gender,username,password,email,contact,client_type) values ('$firstname','$lastname','$gender','$username','$password','$email','$contact','$client_type')";

      $allClient = mysqli_query($connect,"SELECT username FROM client WHERE username = '$username'");

         if(mysqli_num_rows($allClient) >= 1){
              echo "<script>
              alert('Username already exist');
              window.location.href='signup.php';
              </script>";
         }else{
            $registerClient = mysqli_query($connect, $clientReg);   
              echo "<script>
              alert('Registration Successful');
              window.location.href='login.php';
              </script>";    
}
      $allClient = mysqli_query($connect,"SELECT firstname,lastname FROM client WHERE firstname  = '$firstname' and lastname ='$lastname'");

        if(mysqli_num_rows($allClient) >= 1){
              echo "<script>
              alert('Name already exist');
              window.location.href='add-speaker.php';
              </script>";
              }else{ 
                  $registerClient = mysqli_query($connect, $clientReg); 
                  header('Location:login.php');
              }
  }
  
?>