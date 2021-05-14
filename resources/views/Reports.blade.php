<!DOCTYPE HTML>
<html>
    <head>
        <title>Inventory Management New Entry</title>
        <link href    = "/css/main.css" rel="stylesheet">
        <link href    = "/css/invCreate.css" rel="stylesheet">
        <link href    = "/css/date.css" rel="stylesheet">
        <script src   = "https://kit.fontawesome.com/85c9cbf9ed.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <header>
<div class            = "header">
<a href               = "SCHome">
  <img src            = "/pictures/SSLogo.jpg" class="logo" height="80px" width="160px" >
</a><br>
	<font size           = "18" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b> </font>
</div>
</header>
<div class            = "topnav">
  <a href             = "/index">Room Booking</a>
  <a href             = "eventHome">Event Management</a>
  <a href             = "{{ route('employees.index') }}">Employee Management</a>
  <a href             = "RM">Room Management</a>
  <a href             = "{{ route('housekeepers.index') }}">Maintenance</a>
  <a href             = "{{ route('dinein.create') }}">Dining</a>
  <a href             = "InvHome">Inventory</a>
  <a href             = "users">Financial</a>

</div>
<hr class             = "line2">
<br>
<a href               = "SCHome" style="font-family:calibri;font-size:18px;"> Home  </a>
<text> > </text>
<a href               = "InvHome" style="font-family:calibri;font-size:18px;"> Inventory Management </a>
<text> > </text>
<a href               = "Reports" style="font-family:calibri;font-size:18px;"> Reports </a>
<a href               = "#useraccount" target="_blank">
<button class         = "bttn1"><i class="fas fa-user"></i>  My Account</button>
</a><br><br>
<hr class             = "line2">

<div id               = "ssDiv">
  
    <form action      = "#createdb">
      <label for      = "repId">Report ID : </label>
      <input type     = "text" id="repId" name="Report ID"><br>
      <label for      = "repName">Report Name : </label>
      <input type     = "text" id="repName" name="Report Name"><br>
      <label for      = "supDes">Description : </label>
      <input type     = "text" id="supDes" name="Description"><br>
      <label for      = "date">Year / Month : </label>
      <input type     = "date" id="date" name="Year / Month"><br>
      
      <input type     = "submit" value="Generate">
    </form>
  
</div> 


<hr class             = "line2">
</body>

</html>