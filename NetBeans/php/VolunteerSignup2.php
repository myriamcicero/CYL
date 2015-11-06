<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src = "..js/myriamscripts.js"></script>
        <link rel = "stylesheet" href = "../css/myriamstyles.css">    
        <title> CYL Home </title>
    </head>
    <body>
        <?php
        include"../header.html";
        ?>
        <main>
            <h1 style = "font-family: arial"> Unself Launch Party </h1>
            <h5> Posted by Nicole Mahobian on August 28, 2015</h5></br>
            <p> Are you interested in helping test and pilot an AMAZING new phone application? Do you want an easy faster, and cooler way to track your volunteer hours or find volunteering? Do you want free CHIPOTLE, DRINK, AND SWAG?! Then come learn more about Unself, our newest partner!</p></br>
            <p>What's even cooler? They are buying dinner for anyone in this test/pilot group! all you have to do is RSVP, show up and complete these steps: </br>
                </br>1. You and your parents must sign BOTH of these waivers before the party on September 17th.</br>
                </br>- Terms of Use</br>
                </br>- Photo Release</br>
                </br>*You can turn these forms at your next LEM or on the 17th.</br>
                </br>2. You must have access to an iPhone or iPad. </br>
                </br>3. You should read about Unself <a href="">here</a>.</p>
            <h6> WHEN </h6>
            <p> September 17, 2015 at 7:00p.m. - 9p.m.<p>
            <h6> WHERE </h6>
            <p> Statera Corporate Offices (Chipotle Provided)</p>
            <h6> CONTACT </h6>
            <p> Brittany Lindstrom : brittany@unself.org : (760)271-5181</p></br> 
            <h4> Will You Come? </h4>
            <form action = "../php/processvolunteersignup.php" method = "post">
                First Name </br><input type = "text" name="firstname"></br>
                </br>Last Name </br> <input type = "text" name = "lastname"></br>
                </br>Email</br> <input type = "text" name = "email"></br>
                </br>Mobile phone (optional)</br> <input type = "number" name ="mobilephone"></br>
                </br>How many other people are you bringing?</br> <input type = "number" name = "people"></br>
                </br> <input type = "submit" value = "Send RSVP">
            </form>
        </main>
        <?php
        include"../Volunteeraside.html";
        include"../footer.html";
        ?>
    </body>
</html>