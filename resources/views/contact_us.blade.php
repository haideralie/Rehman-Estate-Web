@extends('master')


@section('title','Contact Page')


@section('content')
<style type="text/css">
  label{

  }
</style>

        <div class="container mt-5">
             <div class="row">
                 <div class="col-md-6 ">

              


                <form action="{{url('/storeContactUs')}}" method="POST" enctype="multipart/form-data">
                    
                    @csrf


                    <div class="form-group">
                      <label for="name"><strong>Name</strong></label>
                    <input type="text" class="form-control" name="name" id="name" required="true">
                    </div>
                    
                    <div class="form-group">
                      <label for="email"><strong>Email address</strong></label>
                      <input type="email" class="form-control" name="email" required="true" >
                    </div>

                    <div class="form-group">
                      <label for="phone"><strong>Phone</strong></label>
                      <input type="text" class="form-control" name="phone" required="true">
                    </div>


                    <div class="form-group">
                        <label class="form-check-label" for="exampleRadios1"><strong>Plot Size</strong></label>
                        <ul style="margin-top: 5px;">

                          <li>
                            <input class="form-check-input" type="radio" name="plot_size" id="exampleRadios1" value="3-Marla" >
                      <label class="form-check-label" for="exampleRadios1">
                        &nbsp;3-Marla
                      </label>
                          </li>

                          <li>
                               <input class="form-check-input" type="radio" name="plot_size" id="4-Marla" value="4-Marla" >
                          <label class="form-check-label" for="4-Marla">
                           &nbsp;4-Marla
                          </label>
                          </li>



                          <li>
                               <input class="form-check-input" type="radio" name="plot_size" id="5-Marla" value="5-Marla" >
                          <label class="form-check-label" for="exampleRadios1">
                            &nbsp;5-Marla
                          </label>
                          </li>






                          <li>
                               <input class="form-check-input" type="radio" name="plot_size" id="exampleRadios1" value="6-Marla" >
                          <label class="form-check-label" for="exampleRadios1">
                           &nbsp;6-Marla
                          </label>
                          </li>



                          <li>
                               <input class="form-check-input" type="radio" name="plot_size" id="8-Marla" value="8-Marla" >
                          <label class="form-check-label" for="8-Marla">
                           &nbsp;8-Marla
                          </label>
                          </li>

                          <li>
                               <input class="form-check-input" type="radio" name="plot_size" id="10-Marla" value="10-Marla" >
                          <label class="form-check-label" for="exampleRadios1">
                            10-Marla
                          </label>
                          </li>


                        </ul>
                    </div>

                     <div class="form-group">
                        <label for="city"><strong>City</strong></label>
                        <select name="city" class="form-control" required="true">
                          <option value="lahore">Lahore</option>
                          <option value="Karachi">Karachi</option>

                          <option value="Multan">Multan</option>

                          <option value="Islamabad">Islamabad</option>

                          <!-- <option>...</option> -->
                        </select>
                      </div>

                       <div class="form-group">
                        <label for="message"><strong>Message</strong></label>
                        <textarea class="form-control" id="message"  name="massage" rows="3" required="true"></textarea>
                      </div>
                    
                    <button type="submit" class="btn btn-success col-md-6">Submit</button>
                  </form>



          </div>

                 <div class="col-md-6">
                    <h1 style="color:red">Address:<h1>
                    <p>Rehman Estate & Builders <br> <h1 style="font-family:Footlight MT Light;"> <p style="font-size:50%;">C-5 Faisal Block Main Boulevard S.A Gardens Phase II.</p> 

                      <a class="mr-3" style="color:red"><i class="fa fa-phone"></i></a>923035009002
                      


                 </div>
              </div>
      </div>


@endsection
<!-- 
      <form>
            <table> 
                   <tr>
                       <th colspan="2"><b>Contact Us</b></th>
                   </tr>
                   <tr>
                       <td bgcolor="98FB98"><b>Name</b></td>
                       <td bgcolor="98FB98"><input type="text" name="fname" placeholder="Enter your name"></td><br>
                   </tr>
                   <tr>
                       <td bgcolor="98FB98"><b>E-mail</b></td>
                       <td bgcolor="98FB98"><input type="email" name="em" placeholder="Enter your e-mail"></td><br>
                   </tr>
                   <tr>
                       <td bgcolor="98FB98"><b>Phone</b></td>
                       <td bgcolor="98FB98"><input type="tel" name="mobno" placeholder="Enter your phone number"></td><br>
                   </tr>
                   <tr>
                       <td bgcolor="98FB98"><b>Plot Size</b></td>
                       <td bgcolor="98FB98">
                           <input type="radio" name="room">3 Marla
                           <input type="radio" name="room">4 Marla
                           <input type="radio" name="room">5 Marla
                           <input type="radio" name="room">6 Marla
                           <input type="radio" name="room">8 Marla
                           <input type="radio" name="room">10 Marla
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="98FB98"><b>City</b></td>
                       <td bgcolor="98FB98">
                       <select>
                         <option value="city1">Lahore</option>
                         <option value="city2">Karachi</option>
                         <option value="city3">Islamabad</option>
                         <option value="city4">Multan</option>
                       </select>
                   </td><br>
                   </tr>
                   <tr>
                       <td bgcolor="98FB98"><b>Message</b></td><br>
                       <td><textarea rows="4" cols="50">
                       </textarea>
                   </tr>
                   <tr>
                       <td colspan="2"><input type="submit" value="Submit"></td>
                   </tr>
            </table>
      </form>
 -->
       