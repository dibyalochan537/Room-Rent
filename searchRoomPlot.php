<?php
 include("connection.php");
 error_reporting(0);
?>
<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="roomrent";
      $conn=new mysqli('localhost','root','','roomrent');
        if(isset($_POST['submitSearch'])){
            $searchRoomPlot=$_POST['selectSearch'];
            $queryTableShow="SELECT * FROM uploadroomplot WHERE myname='$searchRoomPlot';";
            $data=$queryTableShow;
            $connObjShow=mysqli_query($conn,$queryTableShow);
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post search page</title>
</head>
<style>
    body{
        background-color:blanchedalmond;
    }
    table{
        border-collapse: collapse;
        font-size:40px;
    }
    th{
        background-color:burlywood;
    }
    .nav-data{
        margin-top:50px;
        height:60px;
        
    }
    .search-data-name{
        width:fit-content;
        margin-left:40%;
    }
    .show-data{
        margin-top:40px;
        margin-left:12%;
    }
</style>
<body>
   <header>
       <div class="nav-data">
         <div class="search-data-name">
            <p style="font-size:50px;"><u>Search Data</u></p>
         </div>
       </div>
   </header>
   <main>
       <div class="show-data">
        <table border="1">
            <tr>
              <th>Owner ID</th>
              <th>Owner Name</th>
              <th>Phone Number</th>
              <th>Room/Plot</th>
              <th>Address</th>
              <th>Price</th>
            </tr>
            <tr>
                <?php
                  while($row = mysqli_fetch_assoc($connObjShow)){
                ?>
                <td><?php echo $row['userName']?></td>
                <td><?php echo $row['myname']?></td>
                <td><?php echo $row['phnumber']?></td>
                <td><?php echo $row['roomPlot']?></td>
                <td><?php echo $row['address']?></td>
                <td><?php echo $row['price']?></td>
            </tr>
            <tr>
                <?php
                  }
                ?>
            </tr>
        </table>
       </div>
   </main>
</body>

</html>
