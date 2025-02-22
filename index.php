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
            margin-top:5px;
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
                    <form action="searchRoomPlot.php" method="POST">
                        <input type="search" placeholder="Search your room" class="btn-font" name="selectSearch">
                        <button class="btn-font-btn nav-btn-hover" name="submitSearch"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="home-mes-not">
                  <a href=""><button class="nav-btn nav-btn-hover">Home</button></a>
                  <button class="nav-btn nav-btn-hover" onclick="openAlert();">Message</button>
                  <button class="nav-btn nav-btn-hover" onclick="openAlert();">Notification</button>
                </div>
            </div>
            <div class="user-profile">
                <div class="profile-logo">
                    <a href="loginpage.php"><input type="submit" value="Login"></a>
                </div>
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
                            <img src="./Owner-All/Image/r1.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 5,000</div>
                            <div class="room_type">2BHK</div>
                        </div>
                    </div>
                    <div class="photo-2">
                        <div class="photo_room">
                            <img src="./Owner-All/Image/r2.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 30,000</div>
                            <div class="room_type">7BHK</div>
                        </div>
                    </div>
                    <div class="photo-3">
                        <div class="photo_room">
                            <img src="./Owner-All/Image/r3.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 9,000</div>
                            <div class="room_type">2BHK</div>
                        </div>
                    </div>
                    <div class="photo-4">
                        <div class="photo_room">
                            <img src="./Owner-All/Image/r4.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 20,000</div>
                            <div class="room_type">4BHK</div>
                        </div>
                    </div>
                    <div class="photo-5">
                        <div class="photo_room">
                             <img src="./Owner-All/Image/r5.png" alt="error">
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
                            <img src="./Owner-All/Image/b1.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 8,00,000</div>
                            <div class="room_type">900sq.Ft</div>
                        </div>
                    </div>
                    <div class="photo-2">
                        <div class="photo_room">
                            <img src="./Owner-All/Image/b2.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 5,80,000</div>
                            <div class="room_type">800sq.Ft</div>
                        </div>
                    </div>
                    <div class="photo-3">
                        <div class="photo_room">
                            <img src="./Owner-All/Image/b3.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 3,50,000</div>
                            <div class="room_type">550sq.Ft</div>
                        </div>
                    </div>
                    <div class="photo-4">
                        <div class="photo_room">
                            <img src="./Owner-All/Image/b4.png" alt="error">
                        </div>
                        <div class="photo_room_name">
                            <div class="room_price">Price : 5,00,000</div>
                            <div class="room_type">700sq.Ft</div>
                        </div>
                    </div>
                    <div class="photo-5">
                        <div class="photo_room">
                            <img src="./Owner-All/Image/b5.png" alt="error">
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
        <div class="govt-job-div">
                <div class="state-wise-job">
                    <div class="state-wise-job-text">
                        <div class="state-text">
                            <p style="font-size:50px; text-align:center;width:fit-content;" class="swf">Search Your Room & Plot</p>
                        </div>
                    </div>
                    <div class="state-wise-job-form">
                      <form action="demandSearch.php" method="POST">
                        <div class="state-search-form">
                            <div class="state-name-form ">
                                    <select name="selectSearch" id="" class="swf">
                                        <option value="0">..Select..</option>
                                        <option value="Room">Room</option>
                                        <option value="Plot">Plot</option>
                                    </select>   
                            </div>
                            <div class="state-wise-post">
                                    <input type="search" class="swf" name="selectAddress" placeholder="serach address here" style="width:fit-content;">
                            </div>
                            <div class="state-wise-date-to">
                                <select name="searchPrice" id="" class="swf">
                                    <option value="0">Select Price</option>
                                    <option value="1">0-5k</option>
                                    <option value="2">5k-10k</option>
                                    <option value="3">10k-30k</option>
                                    <option value="4">30k-50k</option>
                                    <option value="5">50k-70k</option>
                                    <option value="6">70k-1L</option>
                                    <option value="7">Above 1L</option>
                                </select>
                            </div>
                            <div class="state-wise-date-from">
                                <label for="date" style="font-size:20px;">From : </label>
                                <input type="date" class="swf" name="startdate">
                            </div>
                            
                            <div class="state-wise-job-search-button">
                                <button class="swf" style="background-color: darkgoldenrod;border-radius: 100px;" name="submitSearch">Search</button>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
            <style>
                .govt-job-div{
                    width:auto;
                    background-color: antiquewhite;
                }
                .state-wise-job{
                    width:auto;
                    background-color: cadetblue;
                }
                .national-govt-job{
                    width:auto;
                    background-color: cadetblue;
                }
                .state-wise-job-text{
                    width:auto;
                    height:50px;
                    display:flex;
                    justify-content: center;
                    align-items: center;
                }
                .state-search-form{
                    width:fit-content;
                    display: flex;
                    justify-content: space-evenly;
                    align-items: center;
                    background-color: burlywood;
                    height:50px;
                    border-radius: 100px;
                    margin-top:40px;
                    margin-bottom:10px;
                }
                .state-wise-job-form{
                    width:auto;
                    display:flex;
                    justify-content: center;
                    align-items: center;
                }
                .swf{
                    background-color: transparent;
                    border:0px;
                    font-size:25px;
                }
                .swf:hover{
                    border-bottom:4px solid red;
                    border-bottom-left-radius:10px;
                    border-bottom-right-radius:10px;
                }
                select,input:focus{
                    outline: none;
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
        function openAlert(){
            alert("Please login first !!");
        }
    </script>
</body>
</html>