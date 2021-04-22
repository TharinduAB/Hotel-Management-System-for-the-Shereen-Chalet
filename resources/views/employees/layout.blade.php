<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href    = "{{asset("css/main.css")}}" rel="stylesheet">
    <script src   = "https://kit.fontawesome.com/85c9cbf9ed.js" crossorigin="anonymous"></script>
    <style>
      th, td {
    font-size: 13px;}

    </style>
</head>
<body>

 <header>
<div class            = "header">
<a href               = "#home">
  <img src            = "{{asset("images/SSLogo.jpg")}}" class="logo" height="80px" width="160px" >
</a><br>
	<font size           = "18" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b> </font>
</div>
</header>
<div class            = "topnav">
  <a href             = "#RoomBooking">Room Booking</a>
  <a href             = "#Event">Event Management</a>
  <a href             = "{{ route('employees.index') }}">Employee Management</a>
  <a href             = "../RM">Room Management</a>
  <a href             = "#Maint">Maintenance</a>
  <a href             = "#Dining">Dining</a>
  <a href             = "#Inv">Inventory</a>
  <a href             = "#Fin">Financial</a>

</div>
<br>

    
    @yield('content')
   
</body>
</html>