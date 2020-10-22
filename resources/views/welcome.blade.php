@extends('layouts.app')


@section('title','Home page')


@section('content')


      

<!--<body style="background-color:#343A40; -->
     <style>
      blink {
        animation: blinker 0.6s linear infinite;
        color: #1c87c9;
       }
 
      @keyframes blinker {  
        50% { opacity: 0; }
       }


</style>

      <div class="container mt-4 mb-4">
      	    
		<div>
			<h1>

				<blink> 
				<center><h1 style="font-family:Footlight MT Light;"></h1>Current Offers</center>
			</blink>
			</h1>
			<p> <b> Booking Is Now Open For New Block SHERAFGHAN </b></p>
		</div>
	</div>
        <div class="container">
           <div class="row">
			<div class="col-md-3">
				<div class="card mb-3 box-shadow">
					<img class="card-img-top"src="{{asset('Images\5Marla.jpg') }}" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;">
					<div class="card-body"style="background-color: #343A40;">
						<p class="card-text"><a href="product.html"style="color: white;">3-Marla </a></p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card mb-3 box-shadow">
					<img class="card-img-top" src="{{asset('Images\5Marla.jpg') }}" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;">
					<div class="card-body"style="background-color: #343A40;">
						<p class="card-text"><a href="product.html"style="color: white;">5-Marla </a></p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card mb-3 box-shadow">
					<img class="card-img-top"  src="{{asset('Images\5Marla.jpg') }}"  alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;">
					<div class="card-body"style="background-color: #343A40;">
						<p class="card-text"><a href="product.html"style="color: white;">8-Marla</a></p>
					</div>
				</div>
			</div>

				<div class="col-md-3">
				<div class="card mb-3 box-shadow">
					<img class="card-img-top"  src="{{asset('Images\5Marla.jpg') }}"  alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;">
					<div class="card-body" style="background-color: #343A40;">
						<p class="card-text"><a href="product.html" style="color: white;">10-Marla</a></p>
					</div>
				</div>
			</div>
			</div>

		</div>
	</div>



@endsection


