@extends('master')


@section('title','Booked Property Form')


@section('content')
<style type="text/css">
  label{

  }
</style>

        <div class="container mt-5">
             <div class="row">
                 <div class="col-md-6 ">

              


                <form action="{{url('/user-booked-property')}}" method="POST" enctype="multipart/form-data">
                    
                    @csrf


                    <div class="form-group">
                      <label for="name"><strong>Name</strong></label>
                    <input type="text" class="form-control" name="name" id="name" required="true"placeholder="Emter Name">
                    </div>
                    
                    <div class="form-group">
                      <label for="email"><strong>Email address</strong></label>
                      <input type="email" class="form-control" name="email" required="true" placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                      <label for="phone"><strong>Phone</strong></label>
                      <input type="text" class="form-control" name="phone" required="true" placeholder="eg 00000000000">
                    </div>

                    <div class="form-group">
                      <label for="cnic"><strong>CNIC</strong></label>
                      <input type="text" class="form-control" name="cnic" required="true" placeholder="eg 00000-0000000-0">
                    </div>
                    <input type="hidden" name="plot_id" value="{{$property_id}}">
                    <button type="submit" class="btn btn-success col-md-6">Submit</button>
                  </form>



          </div>
          <div class="col-md-6">
          		<h1>Property Details</h1>
          		<hr >
        	<ol >

          		<li >Property Size <strong>{{$plot[0]->size}}</strong></li>
          		<?php 
               $discounted_amount = $plot[0]->price-($plot[0]->price/100)*$plot[0]->discount_price
                  ?>
          		<li>Property Price <strong >PKR <?= number_format($discounted_amount) ?></strong></li>
          		<li>Property Type <strong>{{$plot[0]->plot_type->name}}</strong></li>
          		<li>Property Description <strong>{{$plot[0]->description}}</strong></li>
          		<li>Location {{$plot[0]->location}}</li>
          			<li style="list-style-type:none"><img src="{{asset('images/'.$plot[0]->image)}}" style="width:100%;height: 50%" class="img-thumbnail"></li>

          		</ul>
          </div>

              </div>
      </div>


@endsection
