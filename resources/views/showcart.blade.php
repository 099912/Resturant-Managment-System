<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- this base tag is use to give
     the path which css cannot get so thats wht is is used -->
<base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            <li class="scroll-to-section">
                               
                                    <!-- Cart[{{$count}}] -->
                                <!-- it means if user have logged in it will show show cart with count--> 
                                @auth
                                <!-- below line we get the user id from user table  -->
                                <a href="{{url('showcart',Auth::user()->id)}}">

                                Cart[{{$count}}]]
                                </a>
                                @endauth    
                                <!-- if user is not logged in then it will show -->
                                 @guest
                                Cart
                                @endguest 
                                



                                </li> 

                        <!-- below lines code is login which is from jetstream so we copy it from dashboard from here -->
                            
                        <li>@if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                    <li>
                    <x-app-layout>
    
                    </x-app-layout>
        
                   </li>
                    @else
                     <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif </li>

            
                        </ul>        
                        <!-- <a class='menu-trigger'>
                            <span>Menu</span>
                        </a> -->
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>



    
    <div id="top">
    <table align="center" bgcolor="lightgrey">

        <tr>
    <th style="padding:30px">Food Name</th>
    <th style="padding:30px">Price</th>  
    <th style="padding:30px">Quantity</th>
    <th style="padding:30px">Action</th>    
    </tr>
    <form action="{{url('orderconfirm')}}" method="POST">
@csrf
    @foreach($data as $dat)
       <tr align="center">
        <td >
        <!-- //This foodname attribute allows the data
         from the input to be sent to the server in an array format.
        this value will go to form and after this php code will show to user -->
        <input type="text" name="foodname[]" hidden="" value="{{$dat->title}}">    
        {{$dat->title}}</td>
        <td >
        <input type="text" name="price[]" hidden="" value="{{$dat->price}}">    
        {{$dat->price}}</td>
        <td>
        <input type="text" name="quantity[]" hidden="" value="{{$dat->quantity}}">    
        {{$dat->quantity}}</td>
        </tr>
        @endforeach

    @foreach($data2 as $data)
    <tr style="position:relative; top:-60px; right:-360px;">
        <td >
            <a href="{{url('removecart',$data->id)}}" class="btn btn-warning">Remove</a>
        </td>   
        </tr> 
        @endforeach
    </table>


    

    </div>
    <div align="center" style="margin-top:10px;">
    <div  class="btn btn-secondary" style="padding:10px;">
    <input  type="button"  id="order" value="Order Now">
</div>
</div>


<div id="appear" style="padding:10px; display:none;" align="center">

<div style="padding:10px;">

  NAME <input type="text" name="name">
</div>
<div style="padding:10px;">

PHONE <input type="number" name="phone"></div>
<div style="padding:10px;">

ADDRESS <input type="text" name="address"></div>

<div align="center">
<div class="btn btn-success">
<input  type="submit"  value="Order Confirm ">
</div>
<div class="btn btn-danger"> 
<input type="button"  id="close" value="close">

</div>
</div>

</div> 
</form> 


<script type="text/javascript">

$("#order").click(

function()
{

    $("#appear").show();

}

);

$("#close").click(

function()
{

    $("#appear").hide();

}

);



</script>

    
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>