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
            <h1>Booked Plots Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Booked Plot Type</a></li>
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
              <h3 class="card-title">Booked Plots Table With Full Details</h3>
            </div>

         <!--    <div class="card-header">
              <h3 class="card-title"><a href="{{url('/admin-plot-type')}}" class="btn btn-primary btn-md">Add Plot Type</a></h3>
            </div> -->
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align: center;">Sr #</th>
                   <th style="text-align: center;">Name</th>

                  <th style="text-align: center;">Booked Plot ID</th>
                  <th style="text-align: center;">Email</th>
                  <th style="text-align: center;">Phone</th>
                  <th style="text-align: center;">CNIC</th>
                  <th style="text-align: center;">Action</th>
        
                </tr>
                </thead>
                @if(isset($booked_plots))
                @php($count=0)
                <tbody>
                  @foreach($booked_plots as $booked_plot)
                  @php($count++)
                <tr>
                  <td style="text-align: center;">{{$count}}</td>
                  <td style="text-align: center;">{{$booked_plot->name}}</td>
                  <td style="text-align: center;">{{$booked_plot->plot_id}}</td>
                  <td style="text-align: center;">{{$booked_plot->email}}</td>
                  <td style="text-align: center;">{{$booked_plot->phone}}</td>
                  <td style="text-align: center;">{{$booked_plot->cnic}}</td>

                  <td style="text-align: center;">
                    
            <a href="{{url('/admin-view-single-plot-detail',['id'=>$booked_plot->id])}}" class="btn btn-info btn-sm">View</a>
                    
                  </td>



                  

                </tr>
               @endforeach
                </tbody>
                @endif
                <tfoot>
                <tr>
                   <th style="text-align: center;">Sr #</th>
                   <th style="text-align: center;">Name</th>

                  <th style="text-align: center;">Booked Plot ID</th>
                  <th style="text-align: center;">Email</th>
                  <th style="text-align: center;">Phone</th>
                  <th style="text-align: center;">CNIC</th>
                  <th style="text-align: center;">Action</th>
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