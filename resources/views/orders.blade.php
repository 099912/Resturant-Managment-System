<html lang="en">
  <head>
  <x-app-layout>
   
   </x-app-layout>
    @include('admincss')
  </head>
  <body>
  <div class="container-scroller">
 
@include('navbar')

<div class="container" style="margin-top:30px; margin-left:30px; margin-right:30px;">


<form action="{{url('searchorder')}}" method="get">

<input type="text" name="search" placeholder="search" style="color:black;" >
<input type="submit" value="Search" class="btn btn-success">
</form>
 





<div style="postion:relative; top:60px; margin-top:80px;margin-left:80px">
<h1>Customer Orders</h1><br><br>
<table bgcolor="grey" border="3px">
<tr>
    <th style="padding:30px">Name</th>
    <th style="padding:30px">Phone</th>
    <th style="padding:30px">Address</th>
    <th style="padding:30px">Foodname</th>
    <th style="padding:30px">Quantity</th>
    <th style="padding:30px">price</th>
    <th style="padding:30px">Total Price</th>
</tr>
@foreach($data as $dat)
<tr align="center" style="margin-right: 30px;">
<td style="padding:30px">{{$dat->name}}</td>
<td style="padding:30px">{{$dat->phone}}</td>
<td style="padding:30px">{{$dat->address}}</td>
<td style="padding:30px">{{$dat->foodname}}</td>
<td style="padding:30px">{{$dat->quantity}}</td>
<td style="padding:30px">{{$dat->price}}$</td>
<td style="padding:30px">{{$dat->price * $dat->quantity}}$</td>

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