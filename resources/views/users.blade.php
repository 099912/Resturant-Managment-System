<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html>
    <head>
        <title>Users Page</title>
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
  
 
@include('navbar')

<div style="postion:relative; top:60px; margin-top:80px;margin-left:80px">
<h1>User Page</h1><br><br>
<table bgcolor="grey" border="3px">
<tr>
    <th style="padding:30px">NAME</th>
    <th style="padding:30px">EMAIL</th>
    <th style="padding:30px">ACTION</th>
</tr>
@foreach($data as $dat)
<tr align="center">
<td>{{$dat->name}}</td>
<td>{{$dat->email}}</td>


<!-- below line means admin connot delete its userdetail which is saved in user
table  -->
@if($dat->usertype=="0")
<!-- <td><a href="{{url('delete',$dat->id)}}">DELETE</td>   -->
<td><a href="{{url('delete',$dat->id)}}">DELETE</td>    
@else
<td>Not Allowed</td>   

@endif
</tr>

@endforeach

</table>

</div>
</div>


@include('adminscript')
  </body>
</html>


</body>
</html>