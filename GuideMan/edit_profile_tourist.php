<?php
session_start();

$tuorist_email = $_SESSION['email'];

$servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "guideman";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "connection failed";
      die("Connection failed: " . $conn->connect_error);
    }

       $touristname = $_POST['name'];
       $touristemail = $_POST['email'];
       $touristaddress = $_POST['address'];
       $touriststate = $_POST['state'];
       $touristcity = $_POST['city'];
       $touristgender = $_POST['gender'];
       $touristdateofbirth = $_POST['dob'];
       $touristnumber = $_POST['no'];    


    $query = " UPDATE `tbl_tourist` SET `touristname` = '$touristname', `touristemail` = '$touristemail', `touristaddress` = '$touristaddress', `touriststate` = '$touriststate', `touristcity` = '$touristcity', `touristgender` = '$touristgender', `touristdateofbirth` = '$touristdateofbirth', `touristnumber` = '$touristnumber' WHERE `touristemail` = '$tuorist_email'  ";
    
    $result = mysqli_query($conn, $query);

    if($result == true)
        echo 'Record Updated Successfully!!!';
    else
        echo 'Try again!!!';
?>