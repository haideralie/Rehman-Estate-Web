<?php

namespace App\Http\Controllers;

use Image;
use App\Plot;
use App\Plot_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class PlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $plots = Plot::all();
        
        if(isset($plots)){
            return view('admin.plots.index')->with(['plots'=>$plots]);

        }
        else{
             return view('admin.plots.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plot_types = Plot_type::all();

        if(isset($plot_types)){
             return view('admin.plots.create')->with(['plot_types'=>$plot_types]);
        }

        else{
             return view('admin.plots.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $request->validate([
                'size'      => 'required|max:255',
                'price'     => 'required|max:255',
                'discount_price'       => 'required|max:255',
                'plot_type_id'      => 'required|max:255',
                'location'       => 'required|max:255',
                'description'    => 'required|max:255',

            ]);

      $filename = null;

      if ($request->hasFile('image')) {
          

        $image =  $request->file('image');
        
        $filename = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('images/'.$filename);
        Image::make($image)->save($location);
        }

            
        $plot = new Plot;

        $plot->size = $request->size;
        $plot->price = $request->price;
        $plot->discount_price = $request->discount_price;
        $plot->plot_type_id = $request->plot_type_id;
        $plot->location = $request->location;
        $plot->description = $request->description;
        $plot->image = $filename;
        $plot->save();
        $filename = null;

            return redirect('/admin-view-plot')->withStatus(__('Plot Added Successful'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function show(Plot $plot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plot=Plot::where('id',$id)->get();
          $plot_types = Plot_type::all();
        
        return view('admin.plots.edit')->with(['plot'=>$plot,'plot_types'=>$plot_types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)

    {

  
         $request->validate([
                'size'      => 'required|max:255',
                'price'     => 'required|max:255',
                'discount_price'       => 'required|max:255',
                'plot_type_id'      => 'required|max:255',
                'location'       => 'required|max:255',
                'description'    => 'required|max:255',

            ]);

      $filename = null;

      if ($request->hasFile('image')) {
          

        $image =  $request->file('image');
        
        $filename = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('images/'.$filename);
        Image::make($image)->save($location);
        }

            
        Plot::where('id',$request->id)->update([

        'size' => $request->size,
        'price' => $request->price,
        'discount_price' => $request->discount_price,
        'plot_type_id' => $request->plot_type_id,
        'location' => $request->location,
        'description' => $request->description,
        'image' => $filename
        ]);

        $filename = null;

        return redirect('/admin-view-plot')->withStatus(__('Plot Update Successful'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=Plot::where('id',$id)->delete();

        return redirect('/admin-view-plot')->withStatus(__('Plot Delete Successful'));
    }

    public function view_single_plot_details($id){

        $plot =  Plot::where('id',$id)->get();
        // dd($plot);
          return view('admin.plots.view_single_detail')->with(['plot'=>$plot]);

    }
}
