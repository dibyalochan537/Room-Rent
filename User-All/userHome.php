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
<?php
session_start();
   $userprofile = $_SESSION['user_name'];
   include("../connection.php");
   error_reporting(0);
   $query="SELECT * FROM uploadroomplot;";
   $data=mysqli_query($conn,$query);
   
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Rent Here</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body{
            background-color:white;
            margin:0;
            border:0;
            width:auto;
            margin-top:0px;
        }
        .nav-bar{
            margin-left:0px;
            width:auto;
            display: flex;
            flex-wrap:wrap;
            justify-content:space-between;
            font-size:30px;
            height:auto;
            background-color:darksalmon;
            align-items: center;
        }
        .rent-name-logo{
            margin-left:.5%;
            width:10%;
            background-color:red;
            border-radius: 50px;
            text-align: center;
        }
        .home-search-bar{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .search-nav-div i{
            margin-left: 0px;
        }
        .home-mes-not{
            margin-left:25px;
        }
        .nav-btn{
            margin-left:80px;
        }
        .user-profile{
            margin-right:5px;
        }
        .profile-logo input{
            font-size: 27px;
            border-radius: 50px;
            background-color:orchid;
        }
        .btn-font{
            font-size:30px;
        } 
        .btn-font-btn{
            font-size: 30px;
            border-color: transparent;
            background-color: transparent;
            margin-left:0px;
        }
        .nav-btn{
            background-color:transparent;
            border-color: transparent;
            font-size: 20px;
        }
        .nav-btn-hover:hover{
            border-color: aqua ;
        }
    </style>
</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="rent-name-logo">Room Rent</div>
            <div class="home-search-bar">
                <div class="search-nav-div">
                  <input type="search" placeholder="Search your room" class="btn-font">
                  <button class="btn-font-btn nav-btn-hover">
                  <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </div>
                <div class="home-mes-not">
                  <a href=""><button class="nav-btn nav-btn-hover">Home</button></a>
                  <a href="message.php"><button class="nav-btn nav-btn-hover">Message</button></a>
                  <a href=""><button class="nav-btn nav-btn-hover">Notification</button></a>
                </div>
            </div>
            <div class="user-profile">
                <div class="profile-logo">
                    <i class="fa-solid fa-circle-user" onclick="popupProfile();"></i>
                </div>
                <!-- profile information div start-->
                <div class="profile-info" id="plpf">
                    <div class="profile-name ">
                        <h1>Your Profile</h1>
                    </div>
                    <div class="profile-image-div  padding">
                        <div class="image-div">
                         <img src="./Image/addprofiledemo.png" alt="error">
                         <span>
                            <p>
                                <?php
                                   session_start();
                                   include("../connection.php");
                                   echo $_SESSION['first_name']," ",$_SESSION['middle_name']," ",$_SESSION['last_name'];
                                ?>
                            </p>
                         </span>
                        </div>
                        <div class="personal-details">
                            
                        </div>
                    </div>
                    <div class="close-logout padding">
                        <button class="btn-font-info" onclick="popupProfileClose()">Close</button>
                        <a href="../logout.php"><button class="btn-font-info">Logout</button></a>
                    </div>
                </div>
                <style>
                    .profile-info{
                        display: none;
                        width:30%;
                        height:fit-content;
                        position: absolute;
                        top:6%;
                        right:.5%;
                        /* background-color: bisque; */
                        
                    }
                    .profile-name{
                        background-color: darksalmon;
                    }
                   
                    .profile-image-div{
                        background-color: bisque;
                    }
                    .profile-image-div img{
                        margin-top:5px;
                        margin-left:10px;
                        height:100px;
                        width:100px;
                        border-radius: 100px;
                    }
                    .profile-image-div p{
                        margin-left:10px;
                        margin-top:1px;
                        font-size:20px;
                    }
                    .close-logout{
                        margin-top: 0px;
                        background-color: bisque;
                        display: flex;
                        justify-content: space-evenly;
                    }
                    .btn-font-info{
                        font-size: 30px;
                        background-color: darksalmon;
                        border: none;
                        border-radius:100px;
                    }
                    .image-div{
                        margin-top:5px;
                    }
                    .personal-details{
                       
                    }
                    .padding{
                        background-color:bisque;
                        
                    }

                    
                </style>
            </div>
        </div>
    </header>
    <main>
        <div class="types_of_room">
            <div class="type_of_room_name"><i style="font-size:30px"><b>Types of Rooms :</b></i></div>
            <div class="type_room_rent">
                <div class="rent_name"><u style="font-size:25px"><b>Rent</b></u></div>
                <div class="rent_room_photo">
                    <div class="photo-1">
                        <div class="photo_room">
                            <img src="./Image/r1.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 5,000</div>
                            <div class="room_type">2BHK</div>
                        </div>
                    </div>
                    <div class="photo-2">
                        <div class="photo_room">
                            <img src="./Image/r2.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 30,000</div>
                            <div class="room_type">7BHK</div>
                        </div>
                    </div>
                    <div class="photo-3">
                        <div class="photo_room">
                            <img src="./Image/r3.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 9,000</div>
                            <div class="room_type">2BHK</div>
                        </div>
                    </div>
                    <div class="photo-4">
                        <div class="photo_room">
                            <img src="./Image/r4.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 20,000</div>
                            <div class="room_type">4BHK</div>
                        </div>
                    </div>
                    <div class="photo-5">
                        <div class="photo_room">
                             <img src="./Image/r5.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 10,000</div>
                            <div class="room_type">3BHK</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="type_room_buy">
            <div class="buy_name"><u style="font-size:25px"><b>Plots</b></u></div>
                <div class="buy_room_photo">
                    <div class="photo-1">
                        <div class="photo_room">
                            <img src="./Image/b1.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 8,00,000</div>
                            <div class="room_type">900sq.Ft</div>
                        </div>
                    </div>
                    <div class="photo-2">
                        <div class="photo_room">
                            <img src="./Image/b2.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 5,80,000</div>
                            <div class="room_type">800sq.Ft</div>
                        </div>
                    </div>
                    <div class="photo-3">
                        <div class="photo_room">
                            <img src="./Image/b3.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 3,50,000</div>
                            <div class="room_type">550sq.Ft</div>
                        </div>
                    </div>
                    <div class="photo-4">
                        <div class="photo_room">
                            <img src="./Image/b4.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 5,00,000</div>
                            <div class="room_type">700sq.Ft</div>
                        </div>
                    </div>
                    <div class="photo-5">
                        <div class="photo_room">
                            <img src="./Image/b5.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 50,00,000</div>
                            <div class="room_type">2000sq.Ft</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .types_of_room{
                margin-top: 40px;
            }
            .rent_room_photo{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                margin-left: 10px;
            }
            .rent_room_photo img{
                height:100px;
                width:200px;
            }
            .buy_room_photo{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                margin-left: 10px;
            }
            .buy_room_photo img{
                height:100px;
                width:200px;
            }
            .photo_room_name{
                display:flex;
                justify-content: space-between;
            }
        </style>
        <div class="show_to_owner_room">
            <div class="filter_sort_recentUploads">
                <div class="filter">
                    <button class="fsr">Filter</button>
                </div>
                <div class="sort">
                    <select name="sort" id="sort" class="fsr">
                        <option value="Sort">Sort</option>
                        <option value="Relevance">Relavance</option>
                        <option value="Popular">Popular</option>
                        <option value="High">High to Low</option>
                        <option value="Low">Low to High</option>
                    </select>
                </div>
                <div class="recent_upload">
                    <select name="recent" id="recent" class="fsr">
                        <option value="Recents">Recents</option>
                        <option value="30">Last 30 Minitues</option>
                        <option value="1">Last 1 Hour</option>
                        <option value="5">Last 5 Hour</option>
                        <option value="15">Last 15 Hour</option>
                        <option value="24">Last 24 Hour</option>
                    </select>
                </div>
            </div>
        </div>
        <style>
            .show_to_owner_room{
                margin-top: 50px;
            }
            .filter_sort_recentUploads{
                display: flex;
                flex-wrap: wrap;
                width:38%;
                justify-content: space-evenly;
            }
            .fsr{
                height:30px;
                font-size: 25px;
            }
        </style>
        <?php
            while($row = mysqli_fetch_assoc($data)){
        ?>
        <form action="../trial.php" method="POST">
        <div class="owner_display_room_plots">
            <div class="odrp_image">
                <img src="./Image/b4.png" alt="">
            </div>
            <div class="odrp_details">
                <div class="odrp_roomtype"  style="font-size:20px;height:33%;"><?php echo $row['myname']." ".$row['roomPlot']?></div>
                <div class="odrp_price"  style="font-size:20px;height:33%;">Price : <?php echo $row['price']?></div>
                <div class="odrp_area"  style="font-size:20px;height:33%"><?php echo $row['address']?></div>
            </div>
            <div class="odrp_address">
                <div  style="font-size:20px;height:33%;display:flex;" >
                    User ID : <div name="user_id" id="myDiv">
                                    <?php
                                        echo $row['userName']
                                    ?>
                                </div>
                </div>
                <div class="odrp_owner_name"  style="font-size:20px;height:33%;display:flex;"><div ><?php echo $row['FirstName']." ".$row['MiddleName']." ".$row['LastName']?></div></div>
                <div  style="font-size:20px;height:33%;display:flex;">Phone Number : <div><?php echo $row['phnumber']?></div></div>
            </div>
            <div class="odrp_delete">
                <button onclick="setDivValue();">Buy Request</button>
            </div>
        </div>
        </form>
        <?php
            }
        ?>
        <style>
            .owner_display_room_plots{
                height:100px;
                display: flex;
                flex-wrap: wrap;
                width:auto;
                margin-top:10px;
                background-color:burlywood;
            }
            .odrp_image{
                width:15%;
                /* background-color: red; */
                display: flex;
                align-content: center;
                height:fit-content;
            }
            .odrp_image img{
                height: 100px;
                width:200px;
            }
            .odrp_details{
                width:40%;
                /* background-color: blue; */
            }
            .odrp_roomtype{
                font-size:20px;
            }
            .odrp_address{
                width:30%;
                /* background-color: yellow; */
            }
            .odrp_delete{
                width:15%;
                /* background-color: brown; */
                align-content: center;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            .odrp_delete button{
                font-size:150%;
                border-radius:100px;
            }
        </style>
    </main>
    <footer>
        <div class="foot-div">
            <div class="application-logo">
                <div class="footer-logo">
                    <div class="rent-name-logo-footer">Room Rent</div>
                </div>
            </div>
            <div class="contact-div">
                <ul>
                    <li>About Us</li>
                    <li>Careers</li>
                    <li>Updates</li>
                    <li>Notice</li>
                    <li>Photos</li>
                </ul>
            </div>
            <div class="my-details">
                <p>@ i am student of cutm</p>
            </div>
            <div class="help-div">
                <ul>
                    <li>Help Center</li>
                    <li>Grievence</li>
                    <li>Privacy Policy</li>
                    <li>Term & Condition</li>
                    <li>Report Issue</li>
                </ul>
            </div>
        </div>
    </footer>
    <style>
       .foot-div{
    height:auto;
    background-color: darkslategrey;
    display: flex;
    width:auto;
    align-items: center;
    justify-content: space-evenly;
    font-size: 25px;
}
.footer-logo{
    display: flex;
    justify-content: center;
}
.rent-name-logo-footer{
    margin-left: px;
    width:2%;
}
.contact-div{
    width:23%;
    display: flex;
    margin-left:5px;
    justify-content: start;
}
.contact-div ul,li{
    list-style-type:none;
}
.my-details{
    width:50%;
    display: flex;
    justify-content:center;
}
.help-div{
    width:25%;
    display: flex;
    margin-right:5px;
    justify-content: end;
}   
    </style>
    <script>
        // Open drop diown for select login form-user-details
        function openDropDown(){

        }
        function popupProfile(){
            document.getElementById("plpf").style.display="block";
        }
        function popupProfileClose(){
            document.getElementById("plpf").style.display="none";
        }
        // function setDivValue(){
        //     var divValue=document.getElementById('myDiv').innerText;
        //     localStorage.setItem('divValue',divValue);
        // }
    </script>
</body>
</html>
