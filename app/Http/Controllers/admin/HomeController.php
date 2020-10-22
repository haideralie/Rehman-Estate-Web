<?php

namespace App\Http\Controllers\admin;

use App\Contact_Us;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    	return view('admin.dashboard');
    }


     public function contact(){
     	$contacts = Contact_Us::all();
     	if(isset($contacts)){
     		return view('admin.contact_us')->with('contacts',$contacts);
     	}
     	else{
     		return view('admin.contact_us');
     	}
    	
    }

      public function view_single_contact_details(Request $request){

     	$contact = Contact_Us::where('id',$request->id)->get();
     	// dd($contact);
     	if(isset($contact)){
     		return view('admin.view_single_detail_Contact')->with('contact',$contact);
     	}
     	else{
     		return view('admin.view_single_detail_Contact');
     	}
    	
    }

}
