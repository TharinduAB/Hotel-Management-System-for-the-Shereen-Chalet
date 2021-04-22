
<!DOCTYPE html>
<html>

    <head>
        <title>Event Booking HomePage</title>
        <link rel="stylesheet" href="/css/eventHome.css"/>

        <link rel="stylesheet" href="/css/header.css"/>

        <script src   = "https://kit.fontawesome.com/85c9cbf9ed.js" crossorigin="anonymous"></script>
       
    </head>

    <body>

    <!-- start of header and navigation-->  

    <header>
                <div class = "header">
                    <a href = "#home"> <img src = "/pictures/SSLogo.jpg" class="logo" height="80px" width="160px" > </a><br>
	                <font size = "18" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b> </font>
                </div>
         </header>


    <div class            = "topnav">
         <a href             = "#RoomBooking">Room Booking</a>
         <a href             = "eventHome">Event Management</a>
         <a href             = "#Emp">Employee Management</a>
         <a href             = "RM">Room Management</a>
         <a href             = "#Maint">Maintenance</a>
         <a href             = "#Dining">Dining</a>
         <a href             = "#Inv">Inventory</a>
         <a href             = "#Fin">Financial</a>

    </div>

    <hr class             = "line2"><br>
       
        <a href               = "SCHome" style="font-family:calibri;font-size:18px;"> Home  </a><text> > </text>
        <a href               = "eventHome" style="font-family:calibri;font-size:18px;"> Event Management </a>
        
        <a href               = "#useraccount" target="_blank">
        <button class         = "bttn1"><i class="fas fa-user"></i>  My Account</button></a><br><br>
   

        <hr class             = "line2">
    <!-- End of header-->
    
    <div class ="EvntHome">

    <center>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <a href="{{ route('events.create') }}"><button type="button"id="btn1" >Create a New Event Reservation</button></a> <br><br><br><br>
    <a href="{{ route('events.index') }}"><button type="button"id="btn2">View & Manage Event Reservations</button></a><br>
    </center>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
    <br>
    <hr class             = "line2">
    
    </body>
</html>