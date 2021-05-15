<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report_PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>

<body>
    <header>
        <h1 style="text-align: center">Shereen Chalet - Kalpitiya</h1> <br>
    </header>

    <div class="container mt-3 ml-3"> 

        <br><div class="float-left">Room List</div><br>
        
        <table class="table table-bordered  table-striped mt-2 ">
            <tr style="background-color: #9fe3de; color: #404040" >
                <th></th>
                <th width="40px">RoomNo</th>
                <th width="40px">FloorNo</th>
                <th>RoomType</th>
                <th width="200px">Description</th>
                <th width="100px">RoomStatus</th>
            </tr>
            @foreach ($rooms as $room) <!--this 'rooms' is the variable that we made inside index() of controller class-->
                <tr>
                    <td style="font-size: 12px;">{{ $roomCount }})</td>
                    <td>{{ $room->roomNo}}</td>
                    <td>{{ $room->floorNo}}</td>
                    <td>{{ $room->roomType }}</td>
                    <td style="font-size: 14px;">{{ $room->description}}</td>
                    <td style="font-size: 16px;">{{ $room->roomStatus }}</td>
                </tr>
            @endforeach

        </table>

    </div>

</body>

</html>