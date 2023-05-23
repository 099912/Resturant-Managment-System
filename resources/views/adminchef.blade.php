<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN CHEF</title>
</head>


<body>
    <!-- <div style="position:absolute; top:0; left:0">

</div> -->
<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admincss')
    
  </head>

  <body>
  <div class="container-scroller">
  <!-- <h1>User</h1> -->
 
@include('navbar')

<!-- <div style="postion:relative; top:60px; margin-top:80px;margin-left:80px">

</div> -->
<div style="postion:relative; top:60px; margin-top:80px;margin-left:80px">

<form action="uploadchef" method="POST" enctype="multipart/form-data">
    
@csrf
<div>
 <label>Name :</label>
 <input type="text" style="color:black;" name="name" placeholder="write a title">
</div>
<br>

<div>
 <label>Speciality :</label>
 <input type="text" style="color:black;" name="speciality" placeholder="write a title">
</div>
<br>


<br>

<div>
 <label>Image :</label>
 <input type="file" name="image">
</div>
<br>


<br>
<div style="">
<!-- <input type="submit" value="Save"> -->
<button type="submit"style="background-color:grey;">Submit</button>
</div>


</form>
<div style=" margin-top:30px; margin-bottom:30px;">
<table bgcolor="black" border="3px">
<tr>
    <th style="padding:50px">Name</th>
    <th style="padding:50px">Speciality</th>
    <th style="padding:50px">Image</th>
    <th style="padding:50px">Action</th>
    <th style="padding:50px">Action 2</th>
</tr>
@foreach($data as $dat)
<tr align="center">
<td>{{$dat->name}}</td>
<td>{{$dat->speciality}}</td>
<!-- below line will get images from folder and show it against the required data -->
<td><img height="100" width="100" src="/chefimage/{{$dat->image}}"></td>

<td><a href="{{url('deletechef',$dat->id)}}">DELETE</td>

<td><a href="{{url('updatechef',$dat->id)}}">UPDATE</td>
</tr>

@endforeach


</table>

</div>



</div>





</div>


@include('adminscript')
  </body>
</html>

</body>
</html>