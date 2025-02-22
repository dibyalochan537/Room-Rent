<?php
session_start();
  include("connection.php");
  if(isset($_POST['login'])){
    $userNotFound="";
    $choose=$_POST['choose'];
    $userName=$_POST['userName'];
    $userPassword=$_POST['password'];


    if($choose=="user"){
      $user_query="SELECT * FROM userdetails WHERE userName='$userName' && password='$userPassword';";
      $user_query_execute=mysqli_query($conn,$user_query);
      $total_user= mysqli_num_rows($user_query_execute);
      if($total_user==1){
        $_SESSION['user_name']=$userName;
          $sql_user="SELECT FirstName,MiddleName,LastName FROM userdetails WHERE userName='$userName';"  ;
          $sql_user_conn=mysqli_query($conn,$sql_user);
          $sql_user_total=mysqli_num_rows($sql_user_conn);
          if($sql_user_total==1){
            $row = mysqli_fetch_assoc($sql_user_conn);
           $_SESSION['first_name']=$row["FirstName"];
           $_SESSION['middle_name']=$row["MiddleName"];
           $_SESSION['last_name']=$row["LastName"];
          }
          header('location:./User-All/userHome.php');
      }
      else{
        $userNotFound="User not Found";
      }
    }


    if($choose=="owner"){
      $owner_query="SELECT * FROM ownerdetails WHERE userName='$userName' && password='$userPassword';";
      $owner_query_execute=mysqli_query($conn,$owner_query);
      $total_owner= mysqli_num_rows($owner_query_execute);
      if($total_owner==1){
        $_SESSION['user_name']=$userName;
          $sql_owner="SELECT FirstName,MiddleName,LastName FROM ownerdetails WHERE userName='$userName';"  ;
          $sql_owner_conn=mysqli_query($conn,$sql_owner);
          $sql_owner_total=mysqli_num_rows($sql_owner_conn);
          if($sql_owner_total==1){
            $row = mysqli_fetch_assoc($sql_owner_conn);
           $_SESSION['first_name_owner']=$row["FirstName"];
           $_SESSION['middle_name_owner']=$row["MiddleName"];
           $_SESSION['last_name_owner']=$row["LastName"];
          }
          header('location:./Owner-All/ownerHome.php');
      }
      else{
        $userNotFound="User not Found";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body{
      background-color:darkcyan;
    }
    .login-name{
      width:fit-content;
      background-color: chocolate;
      height:60px;
      margin-left:25%;
    }
    .login-name p{
      font-size:50px;
      height:fit-content;
    }
    .formLogin{
      background-color:burlywood;
      width:50%;
      margin-left:25%;
      height:500px;
    }
    .form-container{
      padding:20px;
    }
    .form-popup-size{
      font-size:40px;
    }
    .top{
      margin-top:40px;
    }
    .form-input{
      font-size:30px;
    }
    .btn{
      font-size:30px;
      background-color: orangered;
      border:none;
      border-radius: 100px;
    }
    .already-account{
      margin-top:10px;
      font-size:25px;
    }
    .already-login{
      border:none;
      background-color: transparent;
    }
  </style>
</head>
<body>
  
<div class="formLogin">
  <div class="login-name">
    <p>Login to your Profile</p>
  </div>
                <form action="" class="form-container" method="POST">
                  <div class="form-container-popup">
                      <div class="userOrOwner">
                          <select name="choose" id="choose">
                            <option value="select">Select</option>
                              <option value="user">User</option>
                              <option value="owner">Owner</option>
                          </select>
                      </div>
                      <div class="form-user-details top">
                        <label for="username" class="form-popup-size"><b>User Name : </b></label>
                        <input type="text" placeholder="Enter User Name" name="userName" required class="form-input"> <br><br>
                      </div>
    
                      <div class="form-user-details top">
                        <label for="psw" class="form-popup-size"><b>Password : </b></label>
                        <input type="password" placeholder="Enter Password" name="password" required class="form-input"><br><br>
                      </div>
                  </div>
                  <div class="login-close top">
                        <input type="submit" value="Login" class="btn" name="login">
                        <button type="button" class="btn">Close</button>
                  </div>
                  <div class="already-account">
                      I have no Account?<a href="registerpage.php">Register</a>
                  </div>
                </form>
  </div>
</body>
</html>
