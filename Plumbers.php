<?php session_start();
      $msg="";
      ?>
<html>
    <head>
        <meta charset="UTF-8">
         <title>SEARCHING FOR PLUMBERS</title>
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
            
        <div id="grey2">
            <form action="DBconnect.php" method="post">
                <table style=" margin: 50px 60px;">
                    <tr><td><strong>SEARCH </br> PLUMBER</strong></td></tr>    
                    <tr><td>ENTER PROVINCE</td></tr>  
                    <tr><td>
                        <select name="sel_province">
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
                    <tr><td><input type='text' name='sel_City' placeholder="Enter City" required=""></td></tr>  
                    <tr><td><input type='submit' name="search" value="SEARCH" id="search_btn" ></td></tr>  
                </table>
            </form>
       </div>
        
    </body>
</html>
