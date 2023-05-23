
<!DOCTYPE html>
<html>
    <head>
        <title>Reservations</title>
        <x-app-layout>
   
</x-app-layout>
</head>

<body>
    <!-- <div style="position:absolute; top:0; left:0">

</div> -->


<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admincss')
  </head>
  <body>
  <div class="container-scroller">
  <!-- <h1>User</h1> -->
 
@include('navbar')

<div style="postion:relative; top:60px; margin-top:80px; margin-left:80px">
<h1>Reservation Page</h1><br><br>
<table bgcolor="grey" border="3px" >
<tr>
    <th style="padding:30px">NAME</th>
    <th style="padding:30px">EMAIL</th>
    <th style="padding:30px">Phone</th>
    <th style="padding:30px">Guest</th>
    <th style="padding:30px">Time</th>
    <th style="padding:30px">Message</th>
    <th style="padding:30px">ACTION</th>
</tr>
@foreach($data as $dat)
<tr align="center">
<td style="padding:30px">{{$dat->name}}</td>
<td style="padding:30px">{{$dat->email}}</td>
<td style="padding:30px">{{$dat->phone}}</td>
<td style="padding:30px">{{$dat->guest}}</td>
<td style="padding:30px">{{$dat->time}}</td>
<td style="padding:30px">{{$dat->message}}</td>

@endforeach

</table>

</div>
</div>


@include('adminscript')
  </body>
</html>


</body>
</html>