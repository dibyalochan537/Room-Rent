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
            $searchAddress=$_POST['selectAddress'];
            $selectPrice=$_POST['searchPrice'];
            if($searchRoomPlot=="Room"){
                if($selectPrice=="1") {
                    $queryPriceCheck="SELECT * FROM uploadroomplot WHERE price>='0' && price<='5000';";
                    $queryPriceExecute=mysqli_query($conn,$queryPriceCheck);
                    $connObjShow=$queryPriceExecute;
                }
                if($selectPrice=="2") {
                    $queryPriceCheck="SELECT * FROM uploadroomplot WHERE price>'5000' && price<='10000';";
                    $queryPriceExecute=mysqli_query($conn,$queryPriceCheck);
                    $connObjShow=$queryPriceExecute;
                }
                if($selectPrice=="3") {
                    $queryPriceCheck="SELECT * FROM uploadroomplot WHERE price>'10000' && price<='30000';";
                    $queryPriceExecute=mysqli_query($conn,$queryPriceCheck);
                    $connObjShow=$queryPriceExecute;
                }
                if($selectPrice=="4") {
                    $queryPriceCheck="SELECT * FROM uploadroomplot WHERE price>'30000' && price<='50000';";
                    $queryPriceExecute=mysqli_query($conn,$queryPriceCheck);
                    $connObjShow=$queryPriceExecute;
                }
                if($selectPrice=="5") {
                    $queryPriceCheck="SELECT * FROM uploadroomplot WHERE price>'50000' && price<='70000';";
                    $queryPriceExecute=mysqli_query($conn,$queryPriceCheck);
                    $connObjShow=$queryPriceExecute;
                }
                if($selectPrice=="6") {
                    $queryPriceCheck="SELECT * FROM uploadroomplot WHERE price>'70000' && price<='100000';";
                    $queryPriceExecute=mysqli_query($conn,$queryPriceCheck);
                    $connObjShow=$queryPriceExecute;
                }
                if($selectPrice=="7"){
                    $queryPriceCheck="SELECT * FROM uploadroomplot WHERE price>'100000';";
                    $queryPriceExecute=mysqli_query($conn,$queryPriceCheck);
                    $connObjShow=$queryPriceExecute;
                }
            }
            else{
                header('location:index.php');
            }
            
            if($searchRoomPlot=="Room"){

            }
            
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
              <th>Room/Plot</th>
              <th>Phone Number</th>
              <th>Room/Plot Type</th>
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
