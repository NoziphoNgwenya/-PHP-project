<?php
session_start();

$mySQL= new mysqli('localhost', 'root','', 'find_plumber') or die('Connection to database failed: ' . $mySQL->error);

//$sel_province=$sel_town=$names=$company=$number=$email=$province=$city='';
#=============================================================================================
#INSERTING DATA
#=============================================================================================
if(isset($_POST['register2'])){
$names=$_POST['mynames'];
$company=$_POST['myCompany'];
$number=$_POST['myNumber'];
$email=$_POST['myEmail'];
$province=$_POST['myProvince'];
$city=$_POST['myCity'];

if(!empty($names)&&!empty($company)&&!empty($number)&&!empty($email)&&!empty($province)&&!empty($city)){
    $query="INSERT INTO register(names, company, phone, email, province, city) VALUES('$names','$company',$number,'$email','$province','$city')";
    $mySQL->query($query)or die("Quiry connection failed".$mySQL->error);
   
    $_SESSION['update']="YOU'RE REGISTERED!";
    header('Location:Register.php');
}else{
    $msg="<p style='color:red;'>Please enter required fields</p>";
}
}
#=============================================================================================
#DATA FOR RETRIEVING FROM DATABASE
#=============================================================================================
if(isset($_POST['search'])){
    $sel_province=$_POST['sel_province'];
    $sel_town=$_POST['sel_City'];
    
    if(!empty($sel_town)){
        $_SESSION['province']=$sel_province;
        $_SESSION['town']=$sel_town;
        header('Location:List.php');
    }
}
#=============================================================================================
#DIRECTING PRESSED FIND BUTTON
#=============================================================================================
if(isset($_POST['find_btn'])){
    header('Location:Plumbers.php');
}
#=============================================================================================
#DIRECTING PRESSED REGISTER BUTTON
#=============================================================================================
if(isset($_POST['register_btn'])){
    header('Location:Register.php');
}

$mySQL->close();
?>