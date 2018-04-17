<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "guideman";

    $con = new mysqli($servername,$username,$password,$dbname);
    
    if($con->connect_error){
        die("Connection Failed: ".$con->connect_error);
    }
    else{
        $tourist = "select * from tbl_tourist";
        $guide = "select * from tbl_guide";
        $payment = "select * from tbl_payement";
        $tour = "select * from tbl_tour";
        
        $query_tourist = mysqli_query($con,$tourist);
        $tourist_count = mysqli_num_rows($query_tourist);
        $query_guide = mysqli_query($con,$guide);
        $guide_count = mysqli_num_rows($query_guide);
        $query_payment = mysqli_query($con,$payment);
        $payment_count = mysqli_num_rows($query_payment);
        $query_tour = mysqli_query($con,$tour);
        $tour_count = mysqli_num_rows($query_tour);
    }
    

?>

<!DOCTYPE HTML>
<html>
    
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.css.map" type="text/css" />
        <link rel=stylesheet href="css/font-awesome.min.css"  type="text/css" />
        <script src="js/bootstrap.min.js" type=text/javascript></script>
        <script src="js/jquery.min.js" type="text/javascript" > </script>
        <script src="js/jquery-3.3.1.js" type="text/javascript" > </script>
        
        <style>
            
            body{
                background-color:darkgray;
            }
                
            main{
                width: 100%;
                height: 100%;
                overflow: auto;
                margin-top: 25px;
            }
            
            .adminpanel{                
                font-size: 20px;
                
            }
            
            .navigation{
                float: right;
                display: block;
                font-size: 24px;
                
            }
            
            .navigation:hover{
                cursor: pointer;
            }
            
            .content{
                display: block;
                font-size: 18px;
                margin-top: 5%;
                margin-bottom: 25px;
                border: 1px solid;
                border-radius: 10px;
                padding: 25px;
                border-color: burlywood;
            }
            
            .table{
                text-align: center;
                vertical-align: middle;
            }
            
            .container_admin{
                margin: 25px;
                font-size: 24px;
                padding-left: 25px;
                position: relative;
                flex: auto;
            }            
                
            .tourist_count{
                height: 125px;
                width: 350px;
                border-radius: 14px;
                padding: 25px;
                padding-top: 40px;
                font-size: 32px;
                background-color: #e6e6e6;
            }
            
            .guide_count{
                position: absolute;
                top: 0px;
                left: 515px;
                height: 125px;
                width: 350px;
                border-radius: 14px;
                padding: 25px;
                padding-top: 42px;
                font-size: 32px;
                background-color: #e6e6e6;
                
            }
            
            .tour_count{
                position: absolute;
                top: 0px;
                left: 1000px;
                height: 125px;
                width: 350px;
                border-radius: 14px;
                padding: 25px;
                padding-top: 40px;
                font-size: 32px;
                background-color: #e6e6e6;
            }
            
            .recent_tours{
                overflow: auto;
                height: 400px;
                margin-top: 50px;
                font-size: 20px;
            }
            
        </style>
        
        <script type="text/javascript">
        
            function content_admin(){
                
                document.getElementById("menu1").style.display = "none";
                document.getElementById("menu2").style.display = "none";
                document.getElementById("menu3").style.display = "none";
                document.getElementById("menu4").style.display = "none";
                
            }
            
            function dashboardSelect(){
                
                document.getElementById("home").style.display = "block";
                document.getElementById("menu1").style.display = "none";                
                document.getElementById("menu2").style.display = "none";
                document.getElementById("menu3").style.display = "none";
                document.getElementById("menu4").style.display = "none";
            }
            
            function touristSelect(){                
                document.getElementById("home").style.display = "none";
                document.getElementById("menu1").style.display = "block";                
                document.getElementById("menu2").style.display = "none";
                document.getElementById("menu3").style.display = "none";
                document.getElementById("menu4").style.display = "none";                
            }
            
            function guideSelect(){
                document.getElementById("home").style.display = "none";
                document.getElementById("menu1").style.display = "none";                
                document.getElementById("menu2").style.display = "block";
                document.getElementById("menu3").style.display = "none";
                document.getElementById("menu4").style.display = "none";
            }
            
            function placesSelect(){
                document.getElementById("home").style.display = "none";
                document.getElementById("menu1").style.display = "none";                
                document.getElementById("menu2").style.display = "none";
                document.getElementById("menu3").style.display = "block";
                document.getElementById("menu4").style.display = "none";
            }
            
            function paymentSelect(){
                document.getElementById("home").style.display = "none";
                document.getElementById("menu1").style.display = "none";                
                document.getElementById("menu2").style.display = "none";
                document.getElementById("menu3").style.display = "none";
                document.getElementById("menu4").style.display = "block";
            }
            
        </script>
        
        <script type="text/javascript">
            
            $(document).ready(function(){
                
                $("#dash").click(function(){
                    $(this).addClass(" active ");
                    $("#tourist").removeClass("active");
                    $("#guide").removeClass("active");
                    $("#places").removeClass("active");
                    $("#pay").removeClass("active");
                });
                
                $("#tourist").click(function(){
                    $(this).addClass(" active ");
                    $("#dash").removeClass("active");
                    $("#guide").removeClass("active");
                    $("#places").removeClass("active");
                    $("#pay").removeClass("active");
                });
                
                $("#guide").click(function(){
                    $(this).addClass(" active ");
                    $("#dash").removeClass("active");
                    $("#tourist").removeClass("active");
                    $("#places").removeClass("active");
                    $("#pay").removeClass("active");
                });
                
                $("#places").click(function(){
                    $(this).addClass(" active ");
                    $("#dash").removeClass("active");
                    $("#tourist").removeClass("active");
                    $("#guide").removeClass("active");
                    $("#pay").removeClass("active");
                });
                
                $("#pay").click(function(){
                    $(this).addClass(" active ");
                    $("#dash").removeClass("active");
                    $("#guide").removeClass("active");
                    $("#tourist").removeClass("active");
                    $("#places").removeClass("active");
                });
                
                
            });
            
        </script>        
        
    </head>
    
    <body onload="content_admin()">
        
        <header>
            
        </header>
        
        <main style="overflow:auto; height:100%">
            <div class="container" style="width:100%; height:100%; overflow:auto;">
                <div class="panel panel-success" style="height:100%;">
                    <div class="panel-heading adminpanel" style="font-size:30px; padding-left:50px;"><b> Admin Panel </b></div>
                    <div class="panel-body adminbody" style="overflow:auto">
                        <div class="navigation">
                            <ul class="nav nav-tabs">
                                <li class="active" id="dash"><a href="#home" onclick="dashboardSelect()">Dashboard</a></li>
                                <li id="tourist"><a href="#menu1" onclick="touristSelect()">Tourist</a></li>
                                <li id="guide"><a href="#menu2" onclick="guideSelect()">Guide</a></li>
                                <li id="places"><a href="#menu3" onclick="placesSelect()">Tours</a></li>
                                <li id="pay"><a href="#menu4" onclick="paymentSelect()">Payment</a></li>
                            </ul>
                        </div>
                        
                        <div class="content">
                            
                            <!-- DashBoard -->                            
                            <div id="home">
                                
                                <div class="container_admin ">
                                    
                                    <div class="tourist_count">
                                        <label> Tourist Count: <?php echo $tourist_count; ?> </label>
                                    </div>
                                    
                                    <div class="guide_count">
                                        <label> Guide Count: <?php echo $guide_count; ?> </label>
                                    </div>
                                    
                                    <div class="tour_count">
                                        <label> Total Tours: <?php echo $tour_count; ?> </label>
                                    </div>
                                    
                                    <div class="recent_tours">
                                        <label>Recent Tours:</label>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="success">
                                                    <td><b>Id</b></td>
                                                    <td><b>Tourist Name</b></td>
                                                    <td><b>Guide Name </b></td>
                                                    <td><b>No. of Days</b></td>
                                                    <td><b>Traveller Count</b></td>
                                                    <td><b>Description</b></td>
                                                    <td><b>Payment</b></td>
                                                    <td><b>City</b></td>
                                                    <td><b>State</b></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                        
                                        <?php
                                                
                                                $recent_tour = "select * from tbl_tour order by tour_id desc limit 5";
        
                                            $query_recent = mysqli_query($con,$recent_tour);
                                            while($row = mysqli_fetch_array($query_recent)){
                                               echo "<tr>".
                                                   "<td>".$row["tour_id"]."</td>".
                                                   "<td>".$row["tourist_name"]."</td>".
                                                   "<td>".$row["guide_name"]."</td>".
                                                   "<td>".$row["days"]."</td>".
                                                   "<td>".$row["peoplenumber"]."</td>".
                                                   "<td>".$row["description"]."</td>".
                                                   "<td>".$row["payment"]."</td>".
                                                   "<td>".$row["city"]."</td>".
                                                   "<td>".$row["state"]."</td>".
                                                   "</tr>";
                                            }
                                        ?>                                        
                                        
                                    </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <!-- Tourist Data -->
                            <div id="menu1" style="overflow:auto">
                                <table class="table table-bordered " style="overflow:auto" id="tbl_tourist">
                                    <thead>
                                        <tr class="success">
                                            <td><b>Id</b></td>
                                            <td><b>Name</b></td>
                                            <td><b>Email</b></td>
                                            <td><b>Address</b></td>
                                            <td><b>State</b></td>
                                            <td><b>City</b></td>
                                            <td><b>Gender</b></td>
                                            <td><b>Contactnumber</b></td>
                                            <td><b>Date Of Birth</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            while($row = mysqli_fetch_array($query_tourist)){
                                               echo "<tr>".
                                                   "<td>".$row["tourist_id"]."</td>".
                                                   "<td>".$row["touristname"]."</td>".
                                                   "<td>".$row["touristemail"]."</td>".
                                                   "<td>".$row["touristaddress"]."</td>".
                                                   "<td>".$row["touriststate"]."</td>".
                                                   "<td>".$row["touristcity"]."</td>".
                                                   "<td>".$row["touristgender"]."</td>".
                                                   "<td>".$row["touristnumber"]."</td>".
                                                   "<td>".$row["touristdateofbirth"]."</td>".
                                                   "</tr>";
                                            }
                                        ?>                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- Guide Data -->
                            <div id="menu2" style="overflow:auto">
                                
                                
                                <table class="table table-bordered " id="tbl_guide" style="overflow:auto">
                                    <thead>
                                        <tr class="success">
                                            <td><b>Id</b></td>
                                            <td><b>Name</b></td>
                                            <td><b>Email</b></td>
                                            <td><b>Address</b></td>
                                            <td><b>State</b></td>
                                            <td><b>City</b></td>
                                            <td><b>Gender</b></td>
                                            <td><b>Contactnumber</b></td>
                                            <td><b>Date Of Birth</b></td>
                                            <td><b>Rating</b></td>
                                            <td><b>License no</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            while($row = mysqli_fetch_array($query_guide)){
                                               echo "<tr>".
                                                   "<td>".$row["guide_id"]."</td>".
                                                   "<td>".$row["guidename"]."</td>".
                                                   "<td>".$row["guideemail"]."</td>".
                                                   "<td>".$row["guideaddress"]."</td>".
                                                   "<td>".$row["guidestate"]."</td>".
                                                   "<td>".$row["guidecity"]."</td>".
                                                   "<td>".$row["guidegender"]."</td>".
                                                   "<td>".$row["guidecontactnumber"]."</td>".
                                                   "<td>".$row["guidedateofbirth"]."</td>".
                                                   "<td>".$row["guiderating"]."</td>".
                                                   "<td>".$row["guidelicense"]."</td>".
                                                   "</tr>";
                                            }
                                        ?>                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- Tours Data -->
                            <div id="menu3" style="overflow:auto">
                                <table class="table table-bordered " style="overflow:auto" style="overflow:auto" id="tbl_tours">
                                    <thead>
                                        <tr class="success">
                                            <td><b>Id</b></td>
                                            <td><b>Tourist Name</b></td>
                                            <td><b>Guide Name </b></td>
                                            <td><b>No. of Days</b></td>
                                            <td><b>Traveller Count</b></td>
                                            <td><b>Description</b></td>
                                            <td><b>Payment</b></td>
                                            <td><b>City</b></td>
                                            <td><b>State</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            while($row = mysqli_fetch_array($query_tour)){
                                               echo "<tr>".
                                                   "<td>".$row["tour_id"]."</td>".
                                                   "<td>".$row["tourist_name"]."</td>".
                                                   "<td>".$row["guide_name"]."</td>".
                                                   "<td>".$row["days"]."</td>".
                                                   "<td>".$row["peoplenumber"]."</td>".
                                                   "<td>".$row["description"]."</td>".
                                                   "<td>".$row["payment"]."</td>".
                                                   "<td>".$row["city"]."</td>".
                                                   "<td>".$row["state"]."</td>".
                                                   "</tr>";
                                            }
                                        ?>                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- Payment Details -->
                            <div id="menu4" style="overflow:auto">
                                <table class="table table-bordered " id="tbl_tours">
                                    <thead>
                                        <tr class="success">
                                            <td><b>Tour Id</b></td>
                                            <td><b>Tourist Id</b></td>
                                            <td><b>Guide Id </b></td>
                                            <td><b>Tourist Name</b></td>
                                            <td><b>Guide Name</b></td>
                                            <td><b>Amount</b></td>
                                            <td><b>Transaction Id</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            while($row = mysqli_fetch_array($query_payment)){
                                               echo "<tr>".
                                                   "<td>".$row["tour_id"]."</td>".
                                                   "<td>".$row["tourist_id"]."</td>".
                                                   "<td>".$row["guide_id"]."</td>".
                                                   "<td>".$row["touristname"]."</td>".
                                                   "<td>".$row["guidename"]."</td>".
                                                   "<td>".$row["amount"]."</td>".
                                                   "<td>".$row["trans_id"]."</td>".
                                                   "</tr>";
                                            }
                                        ?>                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        

            
        </main>
        
        
        <footer>
            
            
        </footer>
        
        
    </body>
    
</html>