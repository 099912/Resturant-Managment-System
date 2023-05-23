<!DOCTYPE html>
<html>
    <head>
        <title>FoodMenu</title>
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

<form action="uploadmenu" method="POST" enctype="multipart/form-data">
    
@csrf
<div>
 <label>Title :</label>
 <input type="text" style="color:black;" name="title" placeholder="write a title">
</div>
<br>

<div>
 <label>Price :</label>
 <input type="text" style="color:black;" name="price" placeholder="price">
</div>
<br>

<div>
 <label>Image :</label>
 <input type="file" name="image">
</div>
<br>

<div>
 <label>Discription :</label>
 <input type="text" style="color:black;" name="discription" placeholder="write a title">
</div>
<br>
<div style="">
<!-- <input type="submit" value="Save"> -->
<button type="submit"style="background-color:grey;">Submit</button>
</div>


</form>
<div style="margin-top:30px;margin-bottom:30px">
<table bgcolor="black" border="3px">
<tr>
    <th style="padding:30px">Title</th>
    <th style="padding:30px">Price</th>
    <th style="padding:30px">Discription</th>
    <th style="padding:30px">Image</th>
    <th style="padding:30px">Action</th>
    <th style="padding:30px">Action 2</th>
</tr>
@foreach($data as $dat)
<tr align="center">
<td>{{$dat->title}}</td>
<td>{{$dat->price}}</td>
<td>{{$dat->discription}}</td>
<!-- below line will get images from folder and show it against the required data -->
<td><img height="100" width="100" src="/foodimage/{{$dat->image}}"></td>

<td><a href="{{url('deletemenu',$dat->id)}}">DELETE</td>

<td><a href="{{url('updatemenu',$dat->id)}}">UPDATE</td>
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