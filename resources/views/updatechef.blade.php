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
    <!-- below is used when we want to update the data through form -->
    <base href="/pubic">
    @include('admincss')
    
  </head>

  <body>
  <div class="container-scroller">
  <!-- <h1>User</h1> -->
 
@include('navbar')

<!-- <div style="postion:relative; top:60px; margin-top:80px;margin-left:80px">

</div> -->
<div style="postion:relative; top:60px; margin-top:80px;margin-left:80px">

<form action=" {{url('/saveupdchef',$data->id)}}" method="POST" enctype="multipart/form-data">
    
@csrf
<div>
 <label>Name :</label>
 <input type="text" style="color:black;" name="name" value="{{$data->name}}">
</div>
<br>

<div>
 <label>Speciality :</label>
 <input type="text" style="color:black;" name="speciality" value="{{$data->speciality}}">
</div>
<br>


<br>

<div>
 <label> Old Image :</label>
 <img height="100" width="100" src="chefimage/{{$data->image}}">
</div>

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



</div>



</div>





</div>


@include('adminscript')
  </body>
</html>

</body>
</html>