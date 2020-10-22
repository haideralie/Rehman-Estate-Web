<?php

namespace App\Http\Controllers;

use App\BookedPlot;
use Illuminate\Http\Request;

class BookedPlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
        $booked_plots = BookedPlot::orderBy('created_at', 'desc')->get();

        return view('admin.booked_plots.index')->with(['booked_plots'=>$booked_plots]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'name' => 'required|string|max:255',
                'email' => 'required',
                'phone' => 'required',
                'cnic' => 'required',
                'plot_id' => 'required',
            ]); 
    
            BookedPlot::create($request->all());  
            return redirect('/')->withStatus(__('Your property has been Booked Successfully'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookedPlot  $bookedPlot
     * @return \Illuminate\Http\Response
     */
    public function show(BookedPlot $bookedPlot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookedPlot  $bookedPlot
     * @return \Illuminate\Http\Response
     */
    public function edit(BookedPlot $bookedPlot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookedPlot  $bookedPlot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookedPlot $bookedPlot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookedPlot  $bookedPlot
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookedPlot $bookedPlot)
    {
        //
    }
}
