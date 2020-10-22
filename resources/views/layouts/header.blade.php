
      <div class="container-fluid " style="margin-top: 3px;" >
      	  @if (session('status'))
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                            <span>{{ session('status') }}</span>
                        </div>
                    </div>
                </div>
            @endif
		<div class="row flex-xl-nowrap justify-content-md-center">
			<div class="col-12 col-md-12 col-xl-12" style="margin-left: 0px;">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">

							<img src="{{asset('Images\SA.png') }}" alt="First slide" style="width:100%;height:700px;">

						</div>
						<div class="carousel-item">

							<img src="{{asset('Images\Baymisaal_SA_Garden-4.jpg') }}" alt="Second slide" style="width:100%;height:700px;">


						</div>
						<div class="carousel-item">

							<img src="{{asset('Images\Marine.jpg') }}" alt="Third slide" style="width:100%;height:700px;">
							
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
      </div>
