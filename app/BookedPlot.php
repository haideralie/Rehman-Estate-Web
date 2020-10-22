<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookedPlot extends Model
{
    protected $fillable = ['name','email', 'phone','cnic','plot_id'];
}
