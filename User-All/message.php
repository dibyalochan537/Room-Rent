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
   include("../connection.php");
   error_reporting(0);
   $owner_id=$_SESSION['owner_id_message'];
   $query="SELECT FirstName,MiddleName,LastName FROM ownerdetails WHERE userName='$owner_id';";
   $data=mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($data);
   $o_firstName=$row['FirstName'];
   $o_middleName=$row['MiddleName'];
   $o_lastName=$row['LastName'];
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body{
            background-color: wheat;
            margin:0;
            border:0;
            width:auto;
            margin-top:-40px;
        }
        header{
            
        }
        .nav-bar{
            height:auto;
        }
        .logo-name-nav-bar p{
            font-size:40px;
        }
        .main-div{
            margin-top:-40px;
            height:auto;
            width:auto;
            display:flex;
        }
        /* Action-div */
        
       
        .action-div{
            width:5%;
            height:400px;
        }
        .chatting-direct {
            height:60%;
            width:auto;
            margin-top:20%;
            display: grid;
        }
        .chatting-setting-archive{
            height:60%;
            width:auto;
            margin-top:197px;
            /* background-color: blue; */
        }
        .b-div {
            width:60%;
            margin-left:20%;
            font-size: 35px;
            /* background-color: red; */
            padding-bottom:35px;
        }
        .b-div button{
            font-size: 30px;
            background-color: transparent;
            border-color: transparent;
        }
        .a-div{
            width:60%;
            margin-left:20%;
            font-size: 30px;
            padding-bottom:30px;
        }
        .a-div button{
            font-size: 30px;
            background-color: transparent;
            border-color: transparent;
        }
         /* close action div */
        .chat-details{
            background-color: white;
            width:95%;
            height:697px;
            display: flex;
            border-top-left-radius:10px;
            border:0.3px solid black;
            
        }
        
        .chat-room-div{
            background-color: yellow;
            width:75%;
            height:697px;
            border-left: .5px solid black;
        }
        /* For chatt room */
        .profile-div-top{
            width:auto;
            height:10%;
            background-color: white;
            border-bottom:0.2px solid black;
            display: flex;
            align-items: center;
        }
        .message-type-div{
            width:auto;
            height:9.7%;
            background-color: white;
            border-bottom:0.2px solid black;
            border-top:0.2px solid black;
        }
        /* Chatting contact div */
        .chats-list-div{
            border-top-left-radius:10px;
            background-color:white;
            width:25%;
            height:697px;
        }
        .type-of-chat{
            width:auto;
            height:10%;
            background-color:white;
            border-top-left-radius:10px;
        }
        .search-chat{
            width:auto;
            height:5%;
            align-content: center;
        }
        .search-chat input{
            width:80%;
            height:90%;
            margin-left:10%;
            border-radius: 10px;
            border:.3px solid black;
        }
        /* Profile-bar-div-chatt-room */
        
        
        /* Personal-message-operation */
        
        /* Chatting message top */
        .profile-photo{
            width:7%;
            height:100%;
            /* background-color: red; */
        }
        .name-last-seen{
            width:40%;
            height:100%;
            /* background-color: blue; */
        }
        .profile-photo i{
            font-size:380%;
            margin:7%;
        }
        .lseen-name p{
            margin-top:5px;
            font-size: 20px;
            height:5px;
            padding:5px;
        }
        .vc-ac-search-message{
            width:15%;
            height:70%;
            background-color:aliceblue;
            margin-left:38%;
            display:flex;
        }
        .personal-vvm{
            font-size: 30px;
            width:33%;
            margin-left:7%;
            /* background-color: blue; */
            height:fit-content;
            margin-top:5%;
        }
        .personal-vvm button{
            font-size:80%;
            background-color: transparent;
            border-color: transparent;
        }
        .personal-vvm:hover{
            border-bottom:4px solid black;
        }
        /* Message shoe room */
        .message-show-div{
            background-image: url("./image/chatt_room_message_show.png");
            height:80%;
            width:auto;
            /* background-color:transparent; */
        }


        /* Button-chatt room */
        .message-type-div{
            display: flex;
            align-items: center;
        }
        .emoji-button-tag{
            width:4%;
            /* background-color: red; */
        }
        .file-photo-select-attach{
            width:4%;
            /* background-color: saddlebrown; */
        }
        .mesage-type-here{
            width:88%;
            /* background-color: blue; */
        }
        .mesage-type-here input{
            font-size:100%;
            width:97%;
            border:transparent;
            background-color: transparent;
        }
        .mesage-type-here input:focus{
            outline: none;
        }
        .voice-message{
            width:4%;
            /* background-color: salmon; */
        }
        .btm-height{
            height:60%;
            font-size:170%;
            align-content: center;
            padding:5px;
        }
        .btm-height button{
            font-size:80%;
            background-color: transparent;
            border-color: transparent;
        }
    </style>
</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="logo-name-nav-bar">
               <p>&nbsp;<i class="fa-brands fa-whatsapp"></i> Chat World</p>
            </div>
            <!-- <div class="dark-mode-on-of">
                <input type="">
            </div> -->
        </div>
    </header>
    <main>
        
        <div class="main-div">
            <!-- Side border details for different button -->
            <div class="action-div">
                <div class="chatting-direct">
                    <div class="all-bar-show b-div">
                       <button  onclick="showChattBar();"><i class="fa-solid fa-bars"></i></button>
                    </div>
                    <div class="message-logo-div b-div">
                        <button><i class="fa-solid fa-comment-sms"></i></button>
                    </div>
                    <div class="call-logo-div b-div">
                        <button><i class="fa-solid fa-phone"></i></button>
                    </div>
                    <div class="status-div b-div">
                        <button><i class="fa-solid fa-record-vinyl"></i></button>
                    </div>
                </div>
                <div class="chatting-setting-archive">
                    <div class="all-bar-show a-div">
                        <button><i class="fa-regular fa-star"></i></button>
                    </div>
                    <div class="message-logo-div a-div">
                        <button><i class="fa-solid fa-box-archive"></i></button>
                    </div>
                    <div class="call-logo-div a-div">
                        <button><i class="fa-solid fa-gear"></i></button>
                    </div>
                    <div class="status-div a-div">
                        <button><i class="fa-solid fa-circle-user"></i></button>
                    </div>
                </div>
            </div>
            <!-- Chatting contact show and message div-->
            <div class="chat-details">
                <!-- Chatting contact list -->
               <div class="chats-list-div">
                   <div class="type-of-chat"></div>
                   <div class="search-chat">
                      <input type="search" placeholder="Search or Start a new Chat">
                   </div>
                    
                   <div class="chatting-all-contact">
                      <div class="owner_dp">
                        <img src="./Image/r2.png" alt="">
                      </div>
                      <div class="owner_name">
                        <p><?php echo $o_firstName." ".$o_middleName." ".$o_lastName?></p>
                      </div>
                   </div>
                   
                    
               </div>
               <style>
                .chatting-all-contact{
                    display: flex;
                    flex-wrap: wrap;
                    margin-top: 10px;
                    width:80%;  
                    margin-left:10%;
                    
                }
                .owner_dp{
                    width:30%;
                    height:60px;
                    /* background-color: red; */
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .owner_dp img{
                    height:80%;
                    border-radius: 100%;
                }
                .owner_name{
                    width:70%;
                    height:60px;
                    /* background-color: red; */
                    display: flex;
                    /* justify-content: center; */
                    align-items: center;
                }
                .owner_name p{
                    margin-left:2%;
                    font-size:200%;
                }
               </style>
               <!-- Chatting message room -->
               <div class="chat-room-div">

                   <!-- Chatting mesage top -->
                   <div class="profile-div-top">
                      <div class="profile-photo">
                        <i class="fa-solid fa-circle-user"></i>
                      </div>

                      <div class="name-last-seen">
                        <div class="name-of-profile lseen-name">
                            <p><?php echo $o_firstName." ".$o_middleName." ".$o_lastName?></p>
                        </div>
                        <div class="last-seen-online lseen-name">
                            <p>Last Seen Yesterday 19:30 AM</p>
                        </div>
                      </div>

                      <div class="vc-ac-search-message">
                        <div class="video-call-personal personal-vvm">
                            <button><i class="fa-solid fa-video"></i></button>
                        </div>
                        <div class="voice-call-personal personal-vvm" style="border-right:1px solid black">
                            <button><i class="fa-solid fa-phone"></i></button>
                        </div>
                        <div class="message-search-personal personal-vvm" >
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                      </div>
                   </div>

                   <!-- Chatting message show  -->
                   <div class="message-show-div"></div>
                   <!-- Chatting typing here -->
                   <div class="message-type-div">
                     <div class="emoji-button-tag btm-height">
                        <button><i class="fa-regular fa-face-smile"></i></button>
                     </div>
                     <div class="file-photo-select-attach btm-height">
                        <button><i class="fa-solid fa-paperclip"></i></button>
                     </div>
                     <div class="mesage-type-here btm-height">
                        <input type="text" placeholder="Type your message here !!">
                     </div>
                     <div class="voice-message btm-height">
                        <button><i class="fa-solid fa-microphone"></i></button>
                     </div>
                   </div>
               </div>
            </div>
        </div>
    </main>
    <script>
        function showChattBar(){
            document.body.main.style.backgroundColor="red";
        }
    </script>
</body>
</html>