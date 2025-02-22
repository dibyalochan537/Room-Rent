<?php
  session_start();
 include("../connection.php");
 error_reporting(0);
 $userprofile = $_SESSION['user_name'];
 if($userprofile == true){
    
 }
 else{
    header('location:../loginpage.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body{
            border:0px;
            margin:0px;
            background-color:darkcyan;
        }
        .nav-name{
            margin-top:5px;
            border:0px;
            background-color:chocolate;
            width:70%;
            margin-left:15%;
            font-size:50px;
            text-align: center;
        }
        
        .form-div{
            margin-top:5px;
            height:450px;
            background-color: burlywood;
            width:70%;
            margin-left:15%;
        }
        .resume-name{
            font-size:40px;
            text-align: center;
        }
        .personal-details-image{
            height:fit-content;
            display:flex;
            
        }
        .personal-details-qualification{
            height:70px;
            margin-top:100px;
        }
        .personal-details{
            height:70px;
            width:83%;
            margin-left:2%;
        }
        .personal-details h2{
            height:fit-content;
            margin-top:0px;                         
        }
        .input{
            display:flex;
            align-items: center;
            padding:0px;
        }
        .input p{
            font-size:20px;
        }
        .details-iamge{  
            margin-top:10px;    
            width:10%;
            height:138px;
            background-color:white;
            margin-left:2.3%;
        }
        .add-image{
            margin-top:5%;
            margin-left:5%;
            margin-right:5%;
            margin-bottom:0px;
            width:89%;
            height:74%;
            border-radius:100px;

        }
        .first{
            width:15%;
        }
        .personal-details-image{
 
        }
        .update-photo{
            height:20%;
            background-color: red;
            width:80%;
            margin-left:10%;
            border-radius:100px;
        }
        .update-photo label{
            font-size:22px;   
            margin-left:10px;
        }
        .update-photo input{
            display:none;
        }
        .submit-div{
            margin-top:100px;
            margin-left:90%;
        }
        .submit-div input{
            font-size:25px;
            background-color: chocolate;
            border:none;
            border-radius:100px;
        }
    </style>
</head>
<body>
    <header>
        <div class="nav-name">
            Upload your Rooms or Plots
        </div>
        <div class="form-div">
           <form action="" method="POST">
            <div class="personal-details-image">
                <div class="personal-details">
                    <h2><u>Room or Plot Details:-</u></h2>
                    <div class="details-about">
                        <div class="fdiv input">
                            <div class="first"><p>Rooms or Plots</p></div>
                            <div class="second">: <input type="text" name="myname" required></div>
                        </div>
                        <div class="fdiv input">
                            <div class="first"><p>Phone No.</p></div>
                             <div class="second">: <input type="text" name="phonenumber" required></div>
                        </div>
                        <div class="fdiv input">
                            <div class="first"><p>Room or Plots Types </p></div>
                            <div class="second">: <input type="text" name="roomPlot" required></div>
                        </div>
                    </div>
                </div>
                <div class="details-iamge">
                    <div class="add-image">
                            <img src="./Image/addprofiledemo.png" alt="" class="add-image" id="profile-pic" name="profileimage">
                    </div>
                    <div class="update-photo">
                        <label for="add-image-name">Update</label>
                        <input type="file" id="add-image-name" accept="image/png, image/jpg, image/jpeg"> 
                    </div>
                </div>
            </div>
            <div class="personal-details-qualification">
                <div class="personal-details">
                    <h2><u>Address & Price :-</u></h2>
                    <div class="details-about">
                        <div class="fdiv input">
                          <div class="first"><p>Address </p></div>
                          <div class="second">: <input type="text" name="address" required></div>
                        </div>
                        <div class="fdiv input">
                            <div class="first"><p>Price </p></div>
                            <div class="second">: <input type="number" name="price" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submit-div">
                <input type="submit" name="submit" value="Register">
            </div>
            </div>
            </div>
          </form>
        </div>
    </header>
    <script>
        let profilePic = document.getElementById("profile-pic");
        let inputFile = document.getElementById("add-image-name");
        inputFile.onchange = function(){
            profilePic.src =URL.createObjectURL(inputFile.files[0]);
        }
    </script>
</body>
</html>
<?php
session_start();
  include("../connection.php");
  if(isset($_POST['submit'])){
    // $ctable="CREATE TABLE uploadRoomPlot(
    //     id int(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     userName VARCHAR(220),
    //     myname VARCHAR(220),
    //     phnumber int(220),
    //     roomPlot VARCHAR(220),
    //     profileimage LONGBLOB not null,
    //     address VARCHAR(240),
    //     price int(240));";
    // $execute=mysqli_query($conn,$ctable);
        $userprofile = $_SESSION['user_name'];
        $roomPlotName=$_POST['myname'];
        $phNumber=$_POST['phonenumber'];
        $roomPlot=$_POST['roomPlot'];
        $profileImage=$_POST['profileimage'];
        $address=$_POST['address'];
        $roomPlotPrice=$_POST['price'];
        $firstNameOwner=$_SESSION['first_name_owner'];
        $middleNameOwner=$_SESSION['middle_name_owner'];
        $lastNameOwner=$_SESSION['last_name_owner'];
        $query="INSERT INTO uploadRoomPlot(FirstName,MiddleName,LastName,userName,myname,phnumber,roomPlot,profileimage,address,price)
         VALUES('$firstNameOwner','$middleNameOwner','$lastNameOwner','$userprofile','$roomPlotName','$phNumber','$roomPlot','$profileImage','$address','$roomPlotPrice');";
        $execute=mysqli_query($conn,$query);
        header('location:ownerHome.php');
  }
?>