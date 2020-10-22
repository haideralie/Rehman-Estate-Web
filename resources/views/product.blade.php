
@extends('master')


@section('title','Product Page')


@section('content')

<style type="text/css">
	.card{
		margin-top: 5px;
		margin-left: 14px;
		/*border:1px solid black;*/
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
</style>

	
	<div class="row">
		@if(isset($plots))
		@foreach($plots as $plot)
		<div class="card" style="width: 20rem;">
			@if($plot->discount_price!=0)
				<div class="card-header bg-danger" style="color: white;">
					<span style="font-weight: bolder;">Special Offer {{$plot->discount_price}} % OFF</span>
				</div>		
						@endif
		  <img class="card-img-top" src="{{asset('images/'.$plot->image)}}" style="width: 318px;height: 212px;" alt="Card image cap">
		  <div class="card-body">
		  <?php 
               $discounted_amount = $plot->price-($plot->price/100)*$plot->discount_price
                  ?>
			@if($plot->discount_price!=0)

		    <h5 class="card-title"><span >PKR <?=number_format($discounted_amount) ?></span></h5>
		    @else
		    <h5 class="card-title"><span >PKR <?=number_format($plot->price) ?></span></h5>
		    @endif

			<p>{{$plot->size}} {{$plot->plot_type->name}} in {{$plot->location}} </p>

			<p>
<!-- 				<span style="background-color: grey;color: white;border-radius: 5px;padding: 3px;"><a href="#" style="color: white;">Read More</a>
				</span> -->
				{{$plot->description}}
			</p>
		  </div>

<!-- 
		  <ul class="list-group list-group-flush">
		    <li class="list-group-item">Size : {{$plot->size}}</li>
		    <li class="list-group-item">Type : {{$plot->plot_type->name}}</li>
		    <li class="list-group-item">{{$plot->location}}</li>
		  </ul> -->
<!-- 		  <div class="card-body">
		  		    <p class="card-text">{{$plot->description}}}</p>

		   </div> -->
		  <div class="card-footer">
		    <a href="{{url('/user-booking-form',['id'=>$plot->id])}}" class="btn btn-danger col-md-5" style="font-weight: bolder;">Book Now</a>
		    <a href="#" class="btn  col-md-6" style="background-color:#212529;color: white;"><span style="font-weight:bolder;">Email</span></a>
		     <!-- <a href="#"><img width="90"  src="{{asset('Images\logo.jpg') }}"></a> -->
		  </div>
		</div>
		@endforeach
		@endif

	</div>
	<!-- end of row -->


@endsection

