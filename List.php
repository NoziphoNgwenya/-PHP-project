<?php 
session_start();
#=============================================================================================
#RETRIEVING ALL INFORMATION
#=============================================================================================

$mySQL= new mysqli('localhost', 'root','', 'find_plumber') or die('Connection to database failed: ' . $mySQL->error);//CONNCTING TO DATABASE
$cityName=$_SESSION['town'];
$msg="";

$sql= "SELECT * FROM register WHERE city='$cityName'";
$result=$mySQL->query($sql)or die('Connection to table failed: ' . $mySQL->error);
      ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PLUMBERS AVAILABLE</title>
        <link rel="stylesheet" href="DATA.css">
    </head>
    <body>
     
            <header><h1>FIND PLUMBER</h1>
                <ul>
                    <li><a href='index.php'>HOME</a></li>
                    <li><a href='Plumbers.php'>PLUMBER</a></li>
                    <li><a href='Register.php'>REGISTER</a></li>
                </ul>
            </header>
        
            <p><?php echo $msg;?></p>
            <DIV id="grey3">
                
            <table id='myTable'>
                <tr>
                    <td><strong>no.</strong></td>
                    <td><strong>NAME</strong></td>
                    <td><strong>COMPANY</strong></td>
                    <td><strong>Cell/Tel no.</strong></td>
                    <td><strong>EMAIL</strong></td>
                    <td><strong>LOCATION</strong></td>
                </tr>
                <?php
                if($result->num_rows>0){
                $msg="NO RECORDS OF YOUR TOWN FOUND";
                $counter=0;
                while($row=$result->fetch_assoc()){
                    $counter++;
                ?>
                <tr>
                    <td><?php echo $counter;?></td>
                    <td><?php echo $row['names'];?></td>
                    <td><?php echo $row['company'];?></td> 
                    <td><?php echo $row['phone'];?></td> 
                    <td><?php echo $row['email'];?></td> 
                    <td><?php echo $row['province']."<br>".$row['city'];?></td> 
                </tr>
                <?php
                }
                }else
                if($result->num_rows==0){
                $province=$_SESSION['province'];
                $sql= "SELECT * FROM register WHERE province='$province'";
                $result=$mySQL->query($sql)or die('Connection to database failed: ' . $mySQL->error);
                if($result->num_rows>0){
                    $msg="NO RECORDS OF YOUR TOWN FOUND<br>AVAILABLE PLUMBERS IN YOUR PROVINCE";
                    $counter=0;
                    while($row=$result->fetch_assoc()){
                        $counter++;
                ?>
                <tr>
                    <td><?php echo $counter;?></td>
                    <td><?php echo $row['names'];?></td>
                    <td><?php echo $row['company'];?></td> 
                    <td><?php echo $row['phone'];?></td> 
                    <td><?php echo $row['email'];?></td> 
                    <td><?php echo $row['province']."<br>".$row['city'];?></td> 
                </tr>
                <?php
                
                    }
                }else{
                    $msg="NO RECORDS FOUND";
                   ?>
                <tr>
                    <td><?php echo "#";?></td>
                    <td><?php echo "no record";?></td>
                    <td><?php echo "no record";?></td> 
                    <td><?php echo "no record";?></td>
                    <td><?php echo "no record";?></td>
                    <td><?php echo "no record";?></td> 
                </tr>
                <?php
                }
            }
                ?>
            </table>
        </DIV>
    </body>
</html>
