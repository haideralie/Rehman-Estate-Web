<style type="text/css">
 
  .nav-link{
    color: white;

    font-weight:bolder;
    font-family: sans-serif;
    font-size: 15px;

  }
  .nav-item{
    display: inline-block;
    padding: 10px;
  }
  .nav-item:hover{
    background-color:#dc3545!important;
    color: white;
  }
  .nav-link:hover{
    color: white;
  }
</style>


        






<div class="container-fluid">
<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-dark">
  <!-- Navbar brand -->
  <a class="navbar-brand" href="#"><img width="40" src="{{asset('Images\logo.jpg') }}"></a>
  <!-- Collapse button -->
  <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fa fa-bars" aria-hidden="true" style="color: white;"></i>
  </button>
  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">
    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      
      
      <!-- Dropdown -->
      <li class="nav-item dropdown multi-level-dropdown">
        <a href="#" id="menu" data-toggle="dropdown" class="nav-link dropdown-toggle w-100">Properties</a>
        <ul class="dropdown-menu mt-2 rounded-0 primary-color border-0 z-depth-1">
       <!--    <li class="dropdown-item dropdown-submenu p-0">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle  w-100" style="color: black;">Click Me Too! </a>
            <ul class="dropdown-menu ml-2 rounded-0 primary-color border-0 z-depth-1">
              <li class="dropdown-item p-0">
                <a href="#" class="text-white w-100">Hey</a>
              </li>
              <li class="dropdown-item p-0">
                <a href="#" class="text-white w-100">Hi</a>
              </li>
              <li class="dropdown-item dropdown-submenu p-0">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-white w-100">Hello </a>
                <ul class="dropdown-menu mr-2 rounded-0 primary-color border-0 z-depth-1 r-100 ">
                  <li class="dropdown-item p-0">
                    <a href="#" class="text-white w-100">Some</a>
                  </li>
                  <li class="dropdown-item p-0">
                    <a href="#" class="text-white w-100">Text</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown-item dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle  w-100" style="color: black;">Click me </a>
            <ul class="dropdown-menu mr-2 rounded-0  primary-color border-0 z-depth-1 r-100 ">
              <li class="dropdown-item p-0">
                <a href="#" class="text-white w-100">How</a>
              </li>
              <li class="dropdown-item p-0">
                <a href="#" class="text-white w-100">are</a>
              </li>
              <li class="dropdown-item p-0">
                <a href="#" class="text-white w-100">you </a>
              </li>
            </ul>
          </li> -->



   @php($plot_types = DB::table('Plot_types')->get())
    @if(isset($plot_types))
    @foreach($plot_types as $plot_type)

   
          <li class="dropdown-item" >
            <a href="{{url('view-property-type',['id'=>$plot_type->id])}}">{{$plot_type->name}}</a>
          </li>
    @endforeach
    @endif


        

        </ul>
      </li>

       <li class="nav-item dropdown multi-level-dropdown">
        <a href="#" id="menu" data-toggle="dropdown" class="nav-link dropdown-toggle w-100">Virtual Tour</a>
        <ul class="dropdown-menu mt-2 rounded-0 primary-color border-0 z-depth-1">
          <li class="dropdown-item" >
             <a href="#">S.A Gardens Phase I</a>
          </li>
           <li class="dropdown-item" >
            <a href="http://www.evolve.pk/demos/sagroup/sagarden-vrtour.html">S.A Gardens Phase II</a>
          </li>

        </ul>
      </li>


      <li class="nav-item">
      	<a class="nav-link" href="{{ url('/contact_us')}}">Sell</a>
      </li>


    <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact_us')}}">Contact Us</a>
          </li>

       <li class="nav-item active">
        <a class="nav-link" href="{{url('/about')}}">About Us
          <span class="sr-only">(current)</span>
        </a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Extra
          <span class="sr-only">(current)</span>
        </a>
      </li>

<li class="nav-item">
        <a class="nav-link" href="#">FAQs</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="login">Login</a>

      </li>


      <li class="nav-item">
        <a class="nav-link" href="#">SignUp</a>
      </li>


    </ul>
    <!-- Links -->
   <form class="form-inline">
      <div class="md-form my-0 mt-2">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
    </form>
  </div>   
  <!-- Collapsible content -->
</nav>
<!--/.Navbar-->
</div>

