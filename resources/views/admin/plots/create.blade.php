@extends('admin.layouts.app')


@section('content')


    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-8 col-12">
            <!-- small box -->
              <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Plot </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('/admin-store-plot')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="plot_size">Plot Size</label>
                    <input type="text" class="form-control" id="plot_size"  name="size" placeholder="Enter Plot Size      eg  2-marla.." required>
                  </div>
                     <div class="form-group">
                    <label for="plot_price">Plot Price</label>
                    <input type="text" class="form-control" id="price" required name="price" placeholder="Enter Price">
                  </div>
                     <div class="form-group">
                    <label for="discount">Discount %</label>
                    <input type="text" class="form-control" id="discount" required name="discount_price" placeholder="Enter Discount %">
                  </div>
                     <div class="form-group">
                    <label for="exampleInputName">Plot Type</label>
                   <select class="form-control" required name="plot_type_id">
                    @if(isset($plot_types))
                    @foreach($plot_types as  $plot_type)
                      <option value="{{$plot_type->id}}">{{$plot_type->name}}</option>
                     @endforeach
                     @endif 
                    </select>
                  </div>
                     <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" required name="location" placeholder="Enter Location">
                  </div>
                     <div class="form-group">
                    <label for="description">Plot Description</label>
                      <textarea class="form-control" required name="description"></textarea>
                  </div>  
                  <div class="form-group">
                    <label for="file">Image</label>

                      <input type="file" class="form-control" id="file" name="image" >
                  </div> 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
       
        </div>
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
   

@endsection