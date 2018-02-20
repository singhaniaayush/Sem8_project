<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "guideman";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    $result = "SELECT * FROM tbl_tourist WHERE touristemail='$touristemail' AND touristpassword='$touristpasswordUser'";

    $query = mysqli_query($conn, $result);
       $row = mysqli_fetch_array($query);

       $tourist_id = $row['tourist_id'];
       $profile_photo = $row['profile_photo'];
       $touristname = $row['touristname'];
       $touristemail = $row['touristemail'];
       $touristpassword = $row['touristpassword'];
       $touristaddress = $row['touristaddress'];
       $touriststate = $row['touriststate'];
       $touristcity = $row['touristcity'];
       $touristgender = $row['touristgender'];
       $touristdateofbirth = $row['touristdateofbirth'];
       $touristnumber = $row['touristnumber'];

?>

<script>
       var touristname = "<?php echo $touristname ?>"; 
       var touristemail = "<?php echo $touristemail ?>"; 
       var touristaddress = "<?php echo $touristaddress ?>";
       var touriststate = "<?php echo $touriststate ?>";
       var touristcity = "<?php echo $touriststate ?>";
</script>