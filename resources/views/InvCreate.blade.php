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
<a href               = "/" style="font-family:calibri;font-size:18px;"> Inventory Management </a>
<text> > </text>
<a href               = "InvCreate" style="font-family:calibri;font-size:18px;"> New Entry </a>
<a href               = "#useraccount" target="_blank">
<button class         = "bttn1"><i class="fas fa-user"></i>  My Account</button>
</a><br><br>
<hr class             = "line2">
<div id               = "ssDiv">
  
    <form action      = "InvCreate" method="POST">
      @csrf
      <label for      = "id">Item ID : </label>
      <input type     = "text" id="id" name="ItemID" required><br>
      <label for      = "iName">Item Name : </label>
      <input type     = "text" id="iName" name="ItemName" required><br>
      <label for      = "type">Item Type : </label>
      <select id      = "type" name="ItemType" required>
      <option value   = "electrical">Electrical</option>
      <option value   = "furniture">Furniture</option>
      <option value   = "food">Food</option>
      <option value   = "Stationary">Stationary</option>
      <option value   = "other">other</option>
      </select><br>
      <label for      = "supName">Supplier's Name : </label>
      <input type     = "text" id="supName" name="SuppliersName" required><br>
      <label for      = "uPrice">Unit Price : </label>
      <input type     = "text" id="uPrice" name="UnitPrice" placeholder="Rs." required><br>
      <label for      = "qty">Quantity : </label>
      <input type     = "text" id="qty" name="Quantity" required><br>
      <label for      = "des">Description : </label>
      <input type     = "text" id="des" name="Description" placeholder="More Details.."><br>
      <input type     = "submit" value="Submit">
    </form>
  
</div> 


<hr class             = "line2">
</body>

</html>