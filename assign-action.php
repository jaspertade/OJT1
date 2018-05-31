<?php
  include 'inc/connection.php';
  session_start();

  if(isset($_POST['assign'])){

        $speakerid = mysqli_real_escape_string($connect, $_POST['speakerid']);
        $eventid = mysqli_real_escape_string($connect, $_POST['eventid']);


    $speakerAssign = "INSERT INTO event_speaker (speakerid,eventid) values ('$speakerid','$eventid')";

            $allAssign = mysqli_query($connect,"SELECT * FROM event_speaker WHERE speakerid = '$speakerid' && eventid = '$eventid'");

         if(mysqli_num_rows($allAssign) >= 1){
              echo "<script>
              alert('Speaker is already assigned to the event');
              window.location.href='speakers.php';
              </script>";
         }else{
            $AssignSpeaker = mysqli_query($connect, $speakerAssign);   
              echo "<script>
              alert('Speaker Assign Successful');
              window.location.href='speakers.php';
              </script>";
            }
    }
?>