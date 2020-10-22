@extends('admin.layouts.app')


@section('content')


    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contacts Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
              <h3 class="card-title">Contacts Table With Full Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align: center;">Sr #</th>
                  <th style="text-align: center;">Customer Name</th>
                  <th style="text-align: center;">E-mail</th>
                  <th style="text-align: center;">Plot-Size</th>
                  <th style="text-align: center;">Phone</th>
                  <th style="text-align: center;">City</th>
                  <th style="text-align: center;">View</th>
                </tr>
                </thead>
                @if(isset($contacts))
                @php($count=0)
                <tbody>
                  @foreach($contacts as $contact)
                  @php($count++)
                <tr>
                  <td style="text-align: center;">{{$count}}</td>
                  <td style="text-align: center;">{{$contact->name}}</td>
                  <td style="text-align: center;">{{$contact->email}}</td>
                  <td style="text-align: center;">{{$contact->plot_size}}</td>
                  <td style="text-align: center;">{{$contact->phone}}</td>
                  <td style="text-align: center;">{{$contact->city}}</td>
                 
                  <td style="text-align: center;"><a href="{{route('view_single_contact_details',['id'=>$contact->id])}}" style="color: white;" class="btn btn-primary btn-round btn-sm">View</a></td>
                </tr>
               @endforeach
                </tbody>
                @endif
                <tfoot>
                <tr>
                  <th style="text-align: center;">Sr #</th>
                  <th style="text-align: center;">Customer Name</th>
                  <th style="text-align: center;">E-mail</th>
                  <th style="text-align: center;">Plot-Size</th>
                  <th style="text-align: center;">Phone</th>
                  <th style="text-align: center;">City</th>
                  <th style="text-align: center;">View</th>
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