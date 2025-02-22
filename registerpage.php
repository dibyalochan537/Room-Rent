<?php
 include("connection.php");
//  $query="CREATE TABLE userlogindetails(
//   userName VARCHAR(220),
//   mypassword VARCHAR(220),
//   FirstName VARCHAR(220),
//   MiddleName VARCHAR(220),
//   LastName VARCHAR(220),
//   PhNumber int(80),
//   Email VARCHAR(220)
//  );";
//  $execute=mysqli_query($conn,$query);

// Owner table *********************************


//  $query="CREATE TABLE ownerdetails(
//   FirstName VARCHAR(220),
//   MiddleName VARCHAR(220),
//   LastName VARCHAR(220),
//   PhNumber int(80),
//   email VARCHAR(220),
//   userName VARCHAR(220),
//   password VARCHAR(220)
//  );";
//  $execute=mysqli_query($conn,$query);

if(isset($_POST['create'])){
  $choose=$_POST['choose'];
  if($choose=="user"){
    $fname=$_POST['firstName'];
    $mname=$_POST['middleName'];
    $lname=$_POST['lastName'];
    $pno=$_POST['phoneNumber'];
    $ename=$_POST['emailName'];
    $userName=$_POST['userName'];
    $myPassword=$_POST['password'];
    $myConfirmPasswod=$_POST['confirmPassword'];
    $sql_u="SELECT * FROM userdetails WHERE userName='$userName';";
    $res_u=mysqli_query($conn,$sql_u);
      if((mysqli_num_rows($res_u))>0){
        $user_error="Sorry User Name Already Exists !!";
      }
      else{
        if(($myPassword==$myConfirmPasswod)){
          $query="INSERT INTO userdetails(FirstName,MiddleName,LastName,PhNumber,email,userName,password) 
          VALUES('$fname','$mname','$lname','$pno','$ename','$userName','$myPassword');";
          $data=mysqli_query($conn,$query);
          header("location: loginpage.php");
        }
        else{
          echo "password does not match";
        }
      }
  }
  if($choose=="owner"){
    $fname_o=$_POST['firstName'];
    $mname_o=$_POST['middleName'];
    $lname_o=$_POST['lastName'];
    $pno_o=$_POST['phoneNumber'];
    $ename_o=$_POST['emailName'];
    $userName_o=$_POST['userName'];
    $myPassword_o=$_POST['password'];
    $myConfirmPasswod_o=$_POST['confirmPassword'];
    $sql_o="SELECT * FROM ownerdetails WHERE userName='$userName_o';";
    $res_o=mysqli_query($conn,$sql_o);
      if((mysqli_num_rows($res_o))>0){
        $user_error_o="Sorry User Name Already Exists !!";
      }
      else{
        if(($myPassword==$myConfirmPasswod)){
          $query_o="INSERT INTO ownerdetails(FirstName,MiddleName,LastName,PhNumber,email,userName,password) 
          VALUES('$fname_o','$mname_o','$lname_o','$pno_o','$ename_o','$userName_o','$myPassword_o');";
          $data_o=mysqli_query($conn,$query_o);
          header("location: loginpage.php");
        }
        else{
          echo "password does not match";
        }
      }
  }
 else{
   
 }
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login -Page</title>
  <style>
    body{
      background-color:darkcyan;
    }
    .myFormSignup{
      background-color:burlywood;
      width:50%;
      margin-top:2%;
      margin-left:25%;
    }
    .form-container{
      height:650px;
    }
    .signup-details-div,.popup-login-close{
      padding:20px;
    }
    .btn{
      margin-top:20px;
    }
    .login-name-form{
      height:60px;
      width:fit-content;
      margin-left:34%;
      background-color:chocolate;
    }
    .login-name-form p{
      font-size:50px;
      height:fit-content;
    }
    .font-login{
      font-size: 30px;
    }
    .font-field{
      font-size:20px;
    }
    .font-field-1{
      font-size: 15px;
    }
    .back,.register{
      font-size:30px;
      background-color: orangered;
      border:none;
      border-radius: 100px;
    }
    .already-account{
      padding-left:20px;
      font-size:25px;
    }
    .already-login{
      border:none;
      background-color: transparent;
    }
  </style>
</head>
<body>
<div id="myFormSignup" class="myFormSignup">
                <form action="" class="form-container" method="POST">
                  <div class="form-container-popup">
                    <div class="login-name-form">
                      <p>Register Here</p>
                    </div>
                    <div class="signup-details-div">
                    <div class="userOrOwner">
                    <select name="choose" id="choose">
                        <option value="select" >Select</option>
                        <option value="user" >User</option>
                        <option value="owner" >Owner</option>
                    </select>
                  </div>
                          <div class="fmlname  btn">
                            <label for="name" class="font-login">Name : </label>
                            <input type="text" placeholder="First Name" required name="firstName" class="font-field-1">
                            <input type="text" placeholder="Middle Name" name="middleName" class="font-field-1">
                            <input type="text" placeholder="Last Name" required name="lastName" class="font-field-1">
                          </div>
                          <div class="signup-phno  btn">
                            <label for="phno" class="font-login">Phone Number :</label>
                            <input type="number" required name="phoneNumber" placeholder="Ph. Number" class="font-field">
                          </div>
                          <div class="signup-email  btn">
                            <label for="email" class="font-login" >Email : </label>
                            <input type="email" required name="emailName" placeholder="Drop your Email" class="font-field">
                          </div>
                          <div class="signup-userName  btn">
                            <label for="userName" class="font-login">User Name : </label>
                            <input type="text" required name="userName" placeholder="User Name" class="font-field">
                            <?php if (isset($user_error)): ?>
                            <?php echo $user_error; ?>
                            <?php endif ?>
                          </div>
                          <div class="password  btn">
                            <label for="password" class="font-login">Password : </label>
                            <input type="password" id="psw" required placeholder="Enter Password" name="password" class="font-field">
                          </div>
                          <div class="confirm-password  btn">
                            <label for="confirm_password" class="font-login">Confirm Password : </label>
                            <input type="password" id="confpsw" required placeholder="Enter Password" name="confirmPassword" class="font-field">
                          </div>
                          <div class="show-password" style="font-size/* The `:30px;margin-top:15px;" >`
                          
                            <input type="checkbox" class="" onclick="showPsw();">Show Password
                          </div>
                    </div>
                      
    
                      
                  
                      <div class="popup-login-close">
                        <input type="submit" value="Register" class="register" name="create">
                        <a href="index.php"><button type="button" class="back">Back</button></a>
                      </div>
                      <div class="already-account">
                      Already have an Account?<a href="loginpage.php">Login</a>
                      </div>
                  </div>
                </form>
              </div>

      <script>
        function showPsw(){
          var pwd=document.getElementById("psw")
          var conf_pwd=document.getElementById("conf-psw");
          
          if(psw.type === "text"){
            psw.type = "password";
          }
          else{
            psw.type = "text";
          }
          if(confpsw.type === "text"){
            confpsw.type = "password";
          }
          else{
            confpsw.type = "text";
          }
        }
      </script>
</body>
</html>
