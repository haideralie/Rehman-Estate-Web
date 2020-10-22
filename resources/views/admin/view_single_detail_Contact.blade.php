@extends('admin.layouts.app')


@section('content')


    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Tables</li>
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
              <h3 class="card-title">Customer With Full Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <!-- <th style="text-align: center;">Sr #</th> -->
                  <th style="text-align: center;">Customer Name</th>
                  <th style="text-align: center;">E-mail</th>
                  <th style="text-align: center;">Plot-Size</th>
                  <th style="text-align: center;">Phone</th>
                  <th style="text-align: center;">City</th>
                  <!-- <th style="text-align: center;">Message</th> -->
                </tr>
                </thead>
                @if(isset($contact))
                @php($count=0)
                <tbody>
                  @foreach($contact as $c)
                  @php($count++)
                <tr>
                  <!-- <td style="text-align: center;">{{$count}}</td> -->
                  <td style="text-align: center;">{{$c->name}}</td>
                  <td style="text-align: center;">{{$c->email}}</td>
                  <td style="text-align: center;">{{$c->plot_size}}</td>
                  <td style="text-align: center;">{{$c->phone}}</td>
                  <td style="text-align: center;">{{$c->city}}</td>
                  <!-- <td style="text-align: center;">{{$c->massage}}</td> -->
                 
                  
                  
                </tr>


               @endforeach
                </tbody>
                @endif
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><strong>Massage</strong></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if(isset($contact))
                  @foreach($contact as $c)

                     <p>{{$c->massage}}</p>

                   @endforeach
                @endif   
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection