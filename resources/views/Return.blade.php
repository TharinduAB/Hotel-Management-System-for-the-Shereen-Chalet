<!DOCTYPE HTML>
<html>
    <head>
        <title>Inventory Management New Entry</title>
        <link href    = "/css/main.css" rel="stylesheet">
        <link href    = "/css/invCreate.css" rel="stylesheet">
        <script src   = "https://kit.fontawesome.com/85c9cbf9ed.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <header>
<div class            = "header">
<a href               = "#home">
  <img src            = "/pictures/SSLogo.jpg" class="logo" height="80px" width="160px" >
</a><br>
	<font size           = "18" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b> </font>
</div>
</header>
<div class            = "topnav">
  <a href             = "#RoomBooking">Room Booking</a>
  <a href             = "#Event">Event Management</a>
  <a href             = "#Emp">Employee Management</a>
  <a href             = "#RoomMana">Room Management</a>
  <a href             = "#Maint">Maintenance</a>
  <a href             = "#Dining">Dining</a>
  <a href             = "#Inv">Inventory</a>
  <a href             = "#Fin">Financial</a>

</div>
<hr class             = "line2">
<br>
<a href               = "#home" style="font-family:calibri;font-size:18px;"> Home  </a>
<text> > </text>
<a href               = "#Inv" style="font-family:calibri;font-size:18px;"> Inventory Management </a>
<text> > </text>
<a href               = "#New" style="font-family:calibri;font-size:18px;"> Returns </a>
<a href               = "#useraccount" target="_blank">
<button class         = "bttn1"><i class="fas fa-user"></i>  My Account</button>
</a><br><br>
<hr class             = "line2">

<div id               = "ssDiv">
  
    <form action      = "Return" method="POST">
      @csrf
      <label for      = "itemId">Item ID : </label>
      <input type     = "text" id="repId" name="ItemID" required><br>
      <label for      = "itemName">Item Name : </label>
      <input type     = "text" id="repName" name="ItemName" required><br>
      <label for      = "reason">Fault / Reason : </label>
      <input type     = "text" id="reason" name="FaultReason" required><br>
      <label for      = "more">More Details : </label>
      <input type     = "text" id="more" name="MoreDetails"><br>
      <label for      = "supName">Supplier Name : </label>
      <input type     = "text" id="supName" name="SupName" required><br>
      
      <input type     = "submit" value="Inquiry">
    </form>
  
</div> 

<hr class             = "line2">
</body>

</html>