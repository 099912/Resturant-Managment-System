<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
    @include('admincss')
  </head>
  <body>
  <div class="container-scroller">
@include('navbar')
<div style="postion:relative; top:60px; margin-top:80px;margin-left:80px">

<form action="{{url('/saveupdate',$data->id)}}" method="POST" enctype="multipart/form-data">
    
@csrf
<div>
 <label>Title :</label>
 <input type="text" style="color:black;" name="title" value="{{$data->title}}">
</div>
<br>

<div>
 <label>Price :</label>
 <input type="text" style="color:black;" name="price" value="{{$data->price}}">
</div>
<br>

<div>
 <label>Old Image :</label>
 <img height="100" width="100" src="/foodimage/{{$data->image}}">
</div>


<!-- image cant be shown in  input type file option you have to do it in image tag -->
<div>
 <label>Image :</label>
 <input type="file" name="image">
</div>
<br>

<div>
 <label>Discription :</label>
 <input type="text" style="color:black;" name="discription" value="{{$data->discription}}">
</div>
<br>
<div style="">
<!-- <input type="submit" value="Save"> -->
<button type="submit"style="background-color:grey;">Submit</button>
</div>


</form>
</div>
</div>
@include('adminscript')
  </body>
</html>