<?php

namespace App\Http\Controllers;

use App\Contact_Us;
use App\Plot;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

    	


   		 return view('welcome');

    }
     public function loginform(){

        


         return view('login');

    }


 	public function about(){

   		 return view('about');

    }

	
 	public function contact_us(){

   		 return view('contact_us');

    }       

    	public function storeContactUs(Request $request){

			$request->validate([
			    'name' => 'required|string|max:255',
			    'email' => 'required',
			    'phone' => 'required',
			    'plot_size' => 'required',
			    'city' => 'required',
			    'massage' => 'required|max:1000',
			]);	
	
	    	Contact_Us::create($request->all());  
			
			return redirect('/');

    }


    public function view_property_type($id){
    	$plots  = Plot::where('plot_type_id',$id)->get();
    	
        if(isset($plots)){
            $plots = $plots->sortBy('discount_price');
    		return view('product')->with(['plots'=>$plots]);

    	}
    	else{
	    	return view('product');

    	}

    }
    public function view_booking_form($property_id){
        
        $plot = Plot::where('id',$property_id)->get();
        return view('booked_property')->with(['property_id'=>$property_id,'plot'=>$plot]);
    }  
}
