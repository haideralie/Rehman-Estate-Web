<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
     protected $fillable = ['size','price', 'discount_price','plot_type_id','location','description','image'];

  		 public function plot_type()
		    {
		        return $this->belongsTo('App\Plot_type','plot_type_id');
		    }
}

