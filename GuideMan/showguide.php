<?php
session_start();
$method = $_POST['method'];

if($method == "showguide")
{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "guideman";

        $conn = new mysqli($servername, $username, $password, $dbname);
        $returnArray = array();
        $state = $_POST['state'];
        $city = $_POST['city'];

        $query_guide = "SELECT * from tbl_guide WHERE guidestate='$state' AND guidecity='$city' order by guiderating desc limit 10";
        $guide_result = mysqli_query($conn,$query_guide);
        //$row = mysqli_fetch_array($guide_result);

        $numberOfRow = mysqli_num_rows($guide_result);
        
        while($row = mysqli_fetch_array($guide_result)){

          echo "<tr class='guideadded' id=".$row['guide_id']."><th>".$row['guidename']."</th><th>".$row['guiderating']."</th><th>".$row['guideprice']."</th><th><input type='radio' name='selectguide' value=".$row['guidename']."_".$row['guideprice']."></th></tr>"; 
        }

        //$returnArray['message'] = "List of Guides.";
//        echo json_encode($returnArray);
        $conn->close();
        exit;
}else if($method == "finalGuideSelected"){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "guideman";

        $conn = new mysqli($servername, $username, $password, $dbname);
        $returnArray = array();
        
        $guideID = $_POST['guideID'];
        $guide_pricequery = "SELECT guideprice,guideemail from tbl_guide WHERE guide_id='$guideID'";
        $guide_result = mysqli_query($conn,$guide_pricequery);
        $guide_price = mysqli_fetch_array($guide_result);
             
        $touristname = $_POST['touristname'];
        $touristemailquery = "SELECT touristemail from tbl_tourist WHERE touristname='$touristname'";
        $touristemail = mysqli_query($conn,$touristemailquery);
        $tourist_email = mysqli_fetch_array($touristemail);
    
        $tourId = $_POST['tourId'];
        $NoOfDays = $_POST['NoOfDays'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $numberofpeople = $_POST['numberofpeople']; 
        $description = "djfsdfjikfsdgijdrg";
        $payement = $guide_price['guideprice'];
        $touristemail = $tourist_email['touristemail'];
        $guidename = $_POST['guidename'];
        $guideemail = $guide_price['guideemail'];
        $fromdatetravel = $_POST['fromdatetravel'];
        $todatetravel = $_POST['todatetravel'];
    
        $sql = "INSERT INTO tbl_tour VALUES ('$tourId','$NoOfDays','$city','$state','$numberofpeople','$description','$payement','$touristname','$touristemail','$guidename','$guideemail','$fromdatetravel','$todatetravel')";
        
        //$tours_inserted = mysqli_query($conn,$insertTours);
        $query = mysqli_query($conn, $sql);
    
        if ($query) {
                echo "Guide has been booked";
        }else{
                            echo "Sorry there was a problem in booking Guide.Try Again!";
        }
        $conn->close();
        exit;       
    
}else if( $method == "hireguide"){
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "guideman";

        $conn = new mysqli($servername, $username, $password, $dbname);
        $returnArray = array();
    $touristname = $_POST['touristname'];
    $selectedguideId = $_POST['selectedguideId'];
    $guide_query = "SELECT * from tbl_guide WHERE guide_id='$selectedguideId'";
    $guide_result = mysqli_query($conn,$guide_query);
    $guide_value = mysqli_fetch_array($guide_result);
    
    $returnArray['guide_id'] = $guide_value['guide_id'];
    $returnArray['guideprice'] = $guide_value['guideprice'];
    $returnArray['guidename'] = $guide_value['guidename'];
    $returnArray['guidecity'] = $guide_value['guidecity'];
    $returnArray['guidestate'] = $guide_value['guidestate'];    
    
    echo json_encode($returnArray);
    $conn->close();
    exit;    
}
?> 