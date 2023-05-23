<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chef;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    function user(){
        $data=User::all();
        ////this compact is used as return view('users',['data'=>$data]);
        return view('users',compact('data'));
    }



////it deletes the user from user table through admin
function delete($id){
    $data=User::find($id);
    $data->delete();
    ////this below line code will put you on a same page 
    return redirect()->back();
}




///foodmenu function in admin 
function foodmenu(){
    $data=food::all();
    return view('foodmenu',compact('data'));
}



/////saving menu in food table through admin

function menu(Request $req){
    //declaring variable for model
    $data=new food;
///it represent the is uploaded from html form
   $image=$req->image;
    ////The time() function returns a timestamp,
    /// and the getClientOriginalExtension() method returns
    /// the file extension of the image.
   $imagename=time().'.'.$image->getClientOriginalExtension();
   ////store the image in the folder
   $req->image->move('foodimage',$imagename);
////store the image name in the image coloumn in database
   $data->image=$imagename;

   $data->title=$req->title;
   $data->price=$req->price;
   $data->discription=$req->discription;

   $data->save();

   return redirect()->back();

}

////it delete the menu through admin 
function deletemenu($id){
    $data=food::find($id);
    $data->delete();
    ////this below line code will put you on a same page 
    return redirect()->back();
}

////it shows in new page with values when we click on update button 
function updatemenu($id){
    $data=food::find($id);
    return view('updatemenu',compact('data'));
}

////it saves the updatedmenu
function saveupdate(Request $req,$id){


$data=food::find($id);

    //declaring variable for mode
///it represent the is uploaded from html form

   $image=$req->image;

   ////The time() function returns a timestamp,
    /// and the getClientOriginalExtension() method returns
    /// the file extension of the image.

    //this if is operated when this image is trying to save 
    if($image!=null){
    $imagename=time().'.'.$image->getClientOriginalExtension();
   ////store the image in the folder
   $req->image->move('foodimage',$imagename);
////store the image name in the image coloumn in database
   $data->image=$imagename;

   $data->title=$req->title;
   $data->price=$req->price;
   $data->discription=$req->discription;
   

   $data->save();

   return redirect()->back();}

   ///this else is operated when no image is trying to save

   else{
    

    $data->title=$req->title;
    $data->price=$req->price;
    $data->discription=$req->discription;
 
    $data->save();
 
    return redirect()->back();
   }

}
function reservation(Request $req){

$data= new Reservation;

$data->name=$req->name;
$data->email=$req->email;
$data->phone=$req->phone;
$data->guest=$req->guest;
$data->time=$req->time;
$data->message=$req->message;
$data->save();

return redirect()->back();



}

function viewreservation(){
if(Auth::id()){

$data=Reservation::all();
return view("viewreservation",compact("data"));

}

else{
    return redirect('login');
}
}

function viewchef(){

    $data=Chef::all();
    return view("adminchef",compact("data"));
    
    }
    

function uploadchef(Request $req){
    $data=new Chef;

    $image=$req->image;
    ////The time() function returns a timestamp,
    /// and the getClientOriginalExtension() method returns
    /// the file extension of the image.
    // if($image!=null){
   $imagename=time().'.'.$image->getClientOriginalExtension();
   ////store the image in the folder
   $req->image->move('chefimage',$imagename);
////store the image name in the image coloumn in database
   $data->image=$imagename;

   $data->name=$req->name;
   $data->speciality=$req->speciality;
   $data->save();

   return redirect()->back();
    // }

    // else{

    //     $data->name=$req->name;
    //     $data->speciallity=$req->speciality;

    //     $data->save();
 
    //     return redirect()->back();
    // }


}

function deletechef($id){
    $data=Chef::find($id);
    $data->delete();
    ////this below line code will put you on a same page 
    return redirect()->back();
}

function updatechef($id){
    $data=Chef::find($id);
    return view('updatechef',compact('data'));
}

////it saves the updatedmenu
function saveupdchef(Request $req,$id){


$data=Chef::find($id);

    //declaring variable for mode
///it represent the is uploaded from html form

   $image=$req->image;

   ////The time() function returns a timestamp,
    /// and the getClientOriginalExtension() method returns
    /// the file extension of the image.

    //this if is operated when this image is trying to save 
    if($image!=null){
    $imagename=time().'.'.$image->getClientOriginalExtension();
   ////store the image in the folder
   $req->image->move('chefimage',$imagename);
////store the image name in the image coloumn in database
   $data->image=$imagename;

   $data->name=$req->name;
   $data->speciality=$req->speciality;
   

   $data->save();

   return redirect()->back();}

   ///this else is operated when no image is trying to save

   else{
    

    $data->name=$req->name;
   $data->speciality=$req->speciality;

    $data->save();
 
    return redirect()->back();
   }

}

function orders(){
    
$data=order::all();

return view("orders",compact('data'));


}

function searchorder(Request $req){
    
    $search=$req->search;

    $data=order::where('name','like','%'.$search.'%')
    ->orwhere("foodname",'like','%'.$search.'%')->get();
    
    return view("orders",compact('data'));
    
    }
    
}
