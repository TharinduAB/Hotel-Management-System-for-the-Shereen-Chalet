@extends('incomes.layout');
@section('content');
<link rel="stylesheet" href="/css/createex.css"/>
<header>
<div class= "header">
<a href= "#home">
<img src= "/pictures/SSLogo.jpg" class="logo" height="80px" width="160px" >
</a><br>
<font size= "18" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b> </font>
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
<a href               = "#Inv" style="font-family:calibri;font-size:18px;"> Financial Management </a>
<text> > </text>
<a href               = "#New" style="font-family:calibri;font-size:18px;"> Edit Income </a>
<a href               = "#useraccount" target="_blank">
<button class         = "bttn1"><i class="fas fa-user"></i>  My Account</button>
</a><br><br>
<hr class             = "line2"> <br><br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Income</h2>
        </div>
        <div class="pull-right">
            
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('incomes.update',$income->id) }}" method="POST">
    <div id="box3" class="box">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h5>Date:</h5>
                <input type="date" class="form-control"  name="Time_info" value="{{ $income->Time_info }}"><br><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h5>Detail:</h5>
                <input type="text" name="description" class="form-control" placeholder="Name" value= "{{ $income->description }}"><br><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h5>Amount:</h5>
                <input type="number" class="form-control" name="amount" value= "{{ $income->amount }}"><br><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br><br>
          <button type="submit" class="btn btn-primary2">Submit</button>
          <a class="btn btn-primary3" href="{{ route('incomes.index') }}"> Back</a><br><br><br><br><br>
        </div>
    </div>
    </div>
</form>
@endsection