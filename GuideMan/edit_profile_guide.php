<?php
session_start();

$guide_email = $_SESSION['email'];

$servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "guideman";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "connection failed";
      die("Connection failed: " . $conn->connect_error);
    }

       $guidename = $_POST['name'];
       $guideemail = $_POST['email'];
       $guideaddress = $_POST['address'];
       $guidestate = $_POST['state'];
       $guidecity = $_POST['city'];
       $guidegender = $_POST['gender'];
       $guidedateofbirth = $_POST['dob'];
       $guidenumber = $_POST['no'];    


    $query = " UPDATE `tbl_guide` SET `guidename` = '$guidename', `guideemail` = '$guideemail', `guideaddress` = '$guideaddress', `guidestate` = '$guidestate', `guidecity` = '$guidecity', `guidegender` = '$guidegender', `guidedateofbirth` = '$guidedateofbirth', `guidecontactnumber` = '$guidenumber' WHERE `guideemail` = '$guide_email'  ";

    $_SESSION['email'] = $guideemail;
    
    $result = mysqli_query($conn, $query);


    echo 'true';
?>