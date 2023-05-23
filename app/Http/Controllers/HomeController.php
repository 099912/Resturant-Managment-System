<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Chef;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    //laravel jetstream provides a login register all functionality
    //go to provider RouteServiceProvider set HOME=your desired
    // path which you want to show after login
     public function home()
     { 
        if(Auth::id()){
            return redirect("admin");
        }

        
        else{
        $user_id=Auth::id();
        $data=food::all();
        $data2=Chef::all();
        $count=cart::where('userid',$user_id)->count();
        
        return View("home",compact("data","data2","count"));
        }
    }

    public function admin(){
        //declaring variable which have usertype

        $data =food::all();
        $data2=Chef::all();

        $usertype=Auth::user()->usertype;

        if($usertype =='1'){
            return View("admin");
        }

        else{

            //below will get user id
            $user_id=Auth::id();
            ///it will tell how many user are there in cart
            //means how many this a specific user buys 
            $count=cart::where('userid',$user_id)->count();
            
            return View("home",compact("data",'data2','count'));
        }

    }

    public function addcart(Request $req,$id){

        if(Auth::id())
        {
            //getting user id from Auth function and display on screen when user enter
            // add cart button 
            $user_id=Auth::id();
            $food_id=$id;
            $quantity=$req->quantity;
            
            $cart=new Cart;

            $cart->userid = $user_id;
            $cart->foodid = $food_id;
            $cart->quantity = $quantity;

            $cart->save();


            return redirect()->back();
        }

        else{
            return redirect('login');
        }



    }
    function showcart(Request $req,$id){

        ///id is coming from auth
        // It counts the number of
        // entries in the 'cart' table with the given userID
        if(Auth::id()==$id){
        $count=cart::where('userid',$id)->count();


        //it selects all the data associated
        // with a given userID from the 'cart' table.
        $data2=cart::Select('*')->where('userid','=',$id)->get();
        

        //It is a query that joins the 'cart' and 'food' tables together
        $data=cart::where('userid',$id)
        ->join('food','carts.foodid','=','food.id')
        ->get();
        
        return view('showcart',compact('count','data','data2'));}

        else{
            return redirect()->back();
        }
    }

    function removecart($id){

        $data=cart::find($id);

        $data->delete();

        return redirect()->back();

    }


function orderconfirm(Request $req){
//This code is creating a new instance of the Order class,
// and then looping through the foodname, price,
// and quantity arrays from the request, 
//setting the values of the new Order
// instance to the values of the arrays.
 foreach($req->foodname as $key => $foodname){


$data=new Order;

    $data->foodname=$foodname;
    $data->price=$req->price[$key];
    $data->quantity=$req->quantity[$key];
    $data->name=$req->name;
    $data->phone=$req->phone;
    $data->address=$req->address;

    $data->save();

 }

return redirect()->back();



    }

}
