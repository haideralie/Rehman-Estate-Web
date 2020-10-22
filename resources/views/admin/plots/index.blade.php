@extends('admin.layouts.app')


@section('content')


    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
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
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Plot Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Plot</a></li>
              <li class="breadcrumb-item active"> Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Plot Table With Full Details</h3>
            </div>

            <div class="card-header">
              <h3 class="card-title"><a href="{{url('/admin-add-plot')}}" class="btn btn-primary btn-md">Add Plot </a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align: center;">Sr #</th>
                  <th style="text-align: center;">Plot Type</th>
                  <th style="text-align: center;">Size</th>
                  <th style="text-align: center;">Orignal Price(Rs)</th>
                  <th style="text-align: center;">Discount%</th>
                  <th style="text-align: center;">Discounted Price(Rs)</th>
                   <!-- <th style="text-align: center;">Location</th> -->
                  <th style="text-align: center;" colspan="4">Action</th>
                </tr>
                </thead>


                @if(isset($plots))
                @php($count=0)
                <tbody>
                  @foreach($plots as $plot)
                  @php($count++)
                <tr>
                  <td style="text-align: center;">{{$count}}</td>
                  <td style="text-align: center;">{{$plot->plot_type->name}}</td>
                 
                  <td style="text-align: center;">{{$plot->size}}</td>
                  <td style="text-align: center;"><?= number_format($plot->price) ?></td>
                  <td style="text-align: center;">{{$plot-> discount_price}} %</td>
                  <?php 
               $discounted_amount = $plot->price-($plot->price/100)*$plot->discount_price
                  ?>
                  <td style="text-align: center;"><?= number_format($discounted_amount) ?></td>
                  <!-- <td style="text-align: center;">{{$plot->location}}</td> -->
                  <td style="text-align: center;">
                    <td><a href="{{url('/admin-view-single-plot-detail',['id'=>$plot->id])}}" class="btn btn-info btn-sm">View</a></td>


                    <td>
                       <a href="{{url('/admin-edit-plot',['id'=>$plot->id])}}" class="btn btn-warning btn-sm">Edit</a>
                    </td>


                    <td>
                        
                    <form action="{{url('/admin-delete-plot',['id'=>$plot->id])}}" method="POST">
                      @csrf
                      @method('delete')
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                                            
                    </form>
                    </td>

                  </td>


                </tr>
               @endforeach
                </tbody>
                @endif
                <tfoot>
                <tr>
                   <th style="text-align: center;">Sr #</th>
                  <th style="text-align: center;">Plot Type</th>
                  <th style="text-align: center;">Size</th>
                  <th style="text-align: center;">Orignal Price</th>
                  <th style="text-align: center;">Discount%</th>
                  <th style="text-align: center;">Discounted Price</th>
                   <!-- <th style="text-align: center;">Location</th> -->
                  <th style="text-align: center;" colspan="4">Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection