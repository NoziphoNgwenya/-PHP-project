<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start();
      $msg="";
      ?>
<html>
    <head>
        
        <meta charset="UTF-8">
        <title>HOME</title>
        <link rel="stylesheet" href="DATA.css">
    </head>
    <body>
        
            <header>
                <h1>FIND PLUMBER</h1>
                <ul>
                    <li><a href='index.php'>HOME</a></li>
                    <li><a href='Plumbers.php'>PLUMBER</a></li>
                    <li><a href='Register.php'>REGISTER</a></li>
                </ul>
            </header>
            <div id='grey'>
                <P id='white' ><H3>WELCOME</h3></P>
            <P id='white'>
          There's thousands of skilled plumbers in South Africa that can render positive services
          for your plumbing.</br> South Africa also has thousands people in need of 
          plumbing services. On this site we offer both services.
            </P>
            <form action="DBconnect.php" method="post">
                <table id="">
                <tr><td><h5>FIND PLUMBERS AROUND YOUR AREA TO FIRE</h5><td/></tr>
                <tr><td><input type="submit" name="find_btn" value="FIND" ><td/></tr> 
                <tr><td><h5>REGISTER AS A PLUMBER FOR YOUR SERVICES</h5><td/></tr> 
                <tr><td><input type="submit" name="register_btn" value="REGISTER" ><td/></tr>
            </table>
            </form>
            </div>
        
         
    </body>
</html>
