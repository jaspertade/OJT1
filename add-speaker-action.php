<?php
  include 'inc/connection.php';
  session_start();

  if(isset($_POST['create'])){

        $spfirstname = mysqli_real_escape_string($connect, $_POST['spfirstname']);
        $splastname = mysqli_real_escape_string($connect, $_POST['splastname']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $contact_num = mysqli_real_escape_string($connect, $_POST['contact_num']);


    $speakerReg = "INSERT INTO speaker (spfirstname,splastname,email,contact_num) values ('$spfirstname','$splastname','$email','$contact_num')";

            $allSpeaker = mysqli_query($connect,"SELECT spfirstname, splastname FROM speaker WHERE spfirstname = '$spfirstname' && splastname = '$splastname'");
            $allEmail = mysqli_query($connect,"SELECT email FROM speaker WHERE email = '$email'");
            $allConNum = mysqli_query($connect,"SELECT contact_num FROM speaker WHERE contact_num = '$contact_num'");

         if(mysqli_num_rows($allSpeaker) >= 1){
              echo "<script>
              alert('Speaker is already registered');
              window.location.href='add-speaker.php';
              </script>";
         }else if (mysqli_num_rows($allEmail) >= 1){
              echo "<script>
              alert('Email is already in use');
              window.location.href='add-speaker.php';
              </script>";
         }else if (mysqli_num_rows($allConNum) >= 1){
              echo "<script>
              alert('number is already in use');
              window.location.href='add-speaker.php';
              </script>";
         }else{
            $registerEvent = mysqli_query($connect, $speakerReg);   
              echo "<script>
              alert('Speaker Creation Success');
              window.location.href='add-speaker.php';
              </script>";
            }
    }
?>