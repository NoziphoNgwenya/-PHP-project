<?php session_start();
      $msg="";
      ?>
<html>
    <head>
        <meta charset="UTF-8">
         <title>REGISTERING AS A PLUMBER</title>
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
        <P id='white'><H3>REGISTER<br>PLUMBER</h3></P>
        <p><?php  if(isset($_SESSION['update'])){
                
            }
            ?></p>
            <form action="DBconnect.php" method="post" id="form2">
                <div id="tableReg">
                <table>
                    <tr><td><strong>REGISTER</br> PlUMBER</strong></td></tr>  
                    <tr><td>ENTER NAME AND SURNAME</td></tr>
                    <tr><td><input type='text' name='mynames' placeholder="Name and Surname" required=""></td></tr>
                    <tr><td>ENTER COMPANY NAME</td></tr>
                    <tr><td><input type='text' name='myCompany' placeholder="Enter Company" required=""></td></tr>
                    <tr><td>ENTER TEL/CELL NO.</td></tr>
                    <tr><td><input type='number' name='myNumber' placeholder="Enter Cell" required=""></td></tr>
                    <tr><td>ENTER EMAIL</td></tr>
                    <tr><td><input type='email' name='myEmail' placeholder="Enter Email" required=""></td></tr>
                    <tr><td>ENTER PROVINCE</td></tr>
                    <tr><td>
                            <select name="myProvince">
                            <option value=”Gauteng”>GAUTENG</option>
                            <option value=”Limpopo”>LIMPOPO</option>
                            <option value=”Mpumalanga”>MPUMALANGA</option>
                            <option value=”Free_State”>FREE STATE</option>
                            <option value=”Easter_Cape”>EASTERN CAPE</option>
                            <option value=”North_West”>NORTH WEST</option>
                            <option value=”KwaZulu_Natal”>KWA-ZULU NATAL</option>
                            <option value=”Northen_Cape”>NORTHEN CAPE</option>
                            <option value=”Western_Cape”>WESTERN CAPE</option>
                            </select>
                    </td></tr>
                    <tr><td>ENTER CITY</td></tr>
                    <tr><td><input type='text' name='myCity' placeholder="Enter City" required=""></td></tr>
                    <tr><td><?php echo $msg;?></td></tr>
                    <tr><td><input type='submit' name="register2" value="REGISTER" id="register2"></td></tr>
                </table>
                    </div>
            </form>
            
    </body>
</html>
