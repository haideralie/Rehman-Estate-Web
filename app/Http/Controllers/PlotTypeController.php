<?php

namespace App\Http\Controllers;


use App\Plot_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlotTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plots_types  = Plot_type::all();
        if(isset($plots_types)){
            return view('admin.plot_type.index')->with(['plots_types'=>$plots_types]);

        }

        else{

            return view('admin.plot_type.index');

        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plot_type.create');
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
                'name' => 'required|max:255',
            ]);

            Plot_type::create($request->all());
            
            return redirect('/admin-view-plot-type')->withStatus(__('PLot type Added Successful'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plot_type  $plot_type
     * @return \Illuminate\Http\Response
     */
    public function show(Plot_type $plot_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plot_type  $plot_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Plot_type $plot_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plot_type  $plot_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plot_type $plot_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plot_type  $plot_type
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=Plot_type::where('id',$id)->delete();

        return redirect('/admin-view-plot-type')->withStatus(__('PLot type Delete Successful'));
    }
}
