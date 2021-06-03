@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/metronic_component.css') }}" />

    <!-- Inner Heading Start -->
    <div class="pageTitle" style="margin-top:2vh">
        <div class="container">
            <h1 class="page-heading">
              {{ __('Booking Details') }}
            </h1>
        </div>
    </div>

  <div class="row" style="background:#9e9e9e">
    {{--  <div class="col-md-2 col-sm-2 col-2">
      <img alt="" src="images/mark/ford.jpg" style="padding-top:1rem">
      <img alt="" src="images/mark/mazda.jpg" style="padding-top:1rem">
      <img alt="" src="images/mark/chrysler.jpg" style="padding-top:1rem">
      <img alt="" src="images/mark/wagen.jpg" style="padding-top:1rem">
      <img alt="" src="images/mark/volvo.jpg"  style="padding-top:1rem">
    </div>  --}}
    <div class="container">
    {{--  <form action="#" method="POST">  --}}
    {{--  <form action="{{route('booking.post')}}" method="POST">  --}}
      <form action="{{ route('booking.submitcheckout') }}" method="POST">
          @csrf 
        <div class="row">
            <div class="col-md-12 col-lg-12" >
                <div class="detail_form">

                  <h3>Add following products</h3>                    
                  <div class="row" style="padding-bottom:1vh;">
                    <div class="col-md-12 col-sm-12">   
                        <div class="md-checkbox" >
                          <input type="checkbox" id="checkbox1" name ="checkbox1" class="md-check" >
                          <label for="checkbox1" >
                          <span></span>
                          <span class="check"></span>
                          <span class="box"></span>
                          1.Prepaid gas </label>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                          <div style="padding-left:3rem">
                            <div style="padding-bottom:1rem"> a. 100 dollars </div>                             
                          </div>
                      </div>
                  </div>      

                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                          <div class="md-checkbox ">
                            <input type="checkbox" id="checkbox2" name ="checkbox2" class="md-check">
                            <label for="checkbox2">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span>
                            2.Car wash </label>
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-8">
                          <div style="padding-left:3rem">
                            <div style="padding-bottom:1rem"> a. 30 dollars </div>                             
                          </div>
                      </div>
                    </div>
                    
                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                            <div class="md-checkbox">
                              <input type="checkbox" id="checkbox3" name="checkbox3" class="md-check">
                              <label for="checkbox3">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span>
                              3.iphone charger  </label>
                            </div>
                      </div>
                      <div class="col-md-8 col-sm-8">
                            <div style="padding-left:3rem">
                              <div style="padding-bottom:1rem"> a. 10 dollars </div>                             
                            </div>
                      </div>
                    </div>   

                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                            <div class="md-checkbox ">
                              <input type="checkbox" id="checkbox4" name="checkbox4" class="md-check">
                              <label for="checkbox4">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span>
                              4.Android charger  </label>
                            </div>
                      </div>
                      <div class="col-md-8 col-sm-8">
                            <div style="padding-left:3rem">
                              <div style="padding-bottom:1rem"> a. 10 dollars </div>                             
                            </div>
                      </div>
                    </div>

                    <div class="row" style="padding-bottom:1vh;">
                        <div class="col-md-12 col-sm-12">
                            <div class="md-checkbox">
                              <input type="checkbox" id="checkbox5" name="checkbox5" class="md-check">
                              <label for="checkbox5">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span>
                             5.Delivery (we will deliver your shiny new vehicle to your desired location within 30 miles of Chicago)  </label>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div style="padding-left:3rem">
                              <div style="padding-bottom:1rem"> a. 100 dollars </div>
                              <div class="form-group form-md-line-input has-info" id="input5" style="display:none">
                                <input type="text" class="form-control" id="checkbox5_input" name="checkbox5_input" placeholder="Please enter address" >
                                <label for="checkbox5_input">Address:</label>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                            <div class="md-checkbox">
                              <input type="checkbox" id="checkbox6" name="checkbox6" class="md-check">
                              <label for="checkbox6">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span>
                            6.Pick up (we will pick up the vehicle from your desired location within 30 miles of Chicago) </label>
                            </div>
                      </div>
                      <div class="col-md-8 col-sm-8" >
                            <div style="padding-left:3rem">
                              <div style="padding-bottom:1rem"> a. 100 dollars </div>
                                      
                              <div class="form-group form-md-radios" id="radiopart_6" style="display:none">
                                <label>PIck up same as delivery</label>
                                <div class="md-radio-list">
                                  <div class="md-radio">
                                    <input type="radio" id="radio1" name="radio_pick" class="md-radiobtn" value="yes" checked>
                                    <label for="radio1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Yes </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="radio2" name="radio_pick" class="md-radiobtn" value="no">
                                    <label for="radio2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    No </label>
                                  </div>	
                                </div>
                              </div>

                              <div class="form-group form-md-line-input has-info"  id="input6" style="display:none">
                                <input type="text" class="form-control" id="checkbox6_input" name="checkbox6_input" placeholder="Please enter address" >
                                <label for="checkbox6_input">Address:</label>
                              </div>
                            </div>
                      </div>
                    </div>  
                </div>  
            </div>
            
            <div class="col-md-12" style="padding-top:3vh;">
                <div class="detail_form" >

                  <h3>Add Insurances</h3> 
                    
                    <div class="row" style="padding-bottom:1vh;">
                        <div class="col-md-12 col-sm-12">
                            <div class="md-checkbox">
                              <input type="checkbox" id="checkbox11" name="checkbox11" class="md-check">
                              <label for="checkbox11">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span>
                              1. I have my own physical damage and liability insurance, for example, through my credit card company.</label>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4" id="input11_1" style="display:none; padding-left:5vw">
                            <div class="form-group form-md-line-input has-info">
                              <input type="text" class="form-control" id="checkbox11_company" name="checkbox11_company" placeholder="Please enter company name" >
                              <label for="checkbox11_company">Company name:</label>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4" id="input11_2" style="display:none">
                            <div class="form-group form-md-line-input has-info">     
                              <input type="text" class="form-control" id="checkbox11_policy" name= "checkbox11_policy" placeholder="Please enter policy number" >
                              <label for="checkbox11_policy">Policy number</label>
                            </div>
                        </div>
                      
                    </div>

                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                            <div class="md-checkbox">
                              <input type="checkbox" id="checkbox12" name="checkbox12" class="md-check">
                              <label for="checkbox12">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span>
                             2. I have liability insurance but would like to buy comprehensive physical damage insurance for peace of mind</label>
                            </div>
                            <div style="padding-left:3rem"> a. 18 dollars/day </div>
                      </div>
                    </div>

                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                            <div class="md-checkbox">
                              <input type="checkbox" id="checkbox13" name="checkbox13" class="md-check">
                              <label for="checkbox13">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span>
                            3. I do not have liability or physical damage insurance to my knowledge </label>
                            </div>
                            <div style="padding-left:3rem; display:none" id="checkbox13_description">a. Automatic response: unfortunately we cannot rent cars to drivers without liability insurance</div>
                      </div>
                    </div> 

                </div>  
            </div>

            <div class="col-md-12" style="padding-top:3vh;">
                <div class="detail_form" >

                  <h3>Payment</h3>     

                    <div class="row" style="padding-bottom:1vh;">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group form-md-radios" id="payment_type" style="display:block;">                           
                                <label>Select payment Method:</label>                             
                                <div class="md-radio-list" style="display:inline-flex; padding-left:2vw">
                                  <div class="md-radio" >
                                    <input type="radio" id="radio11" name="payment_method" value="COD" class="md-radiobtn" checked>
                                    <label for="radio11">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Cash on delivery &emsp;</label>
                                  </div>
                                  <div class="md-radio" >
                                    <input type="radio" id="radio12" name="payment_method" value="Paypal" class="md-radiobtn">
                                    <label for="radio12">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Paypal</label>
                                  </div>	
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                      <h3 >&emsp;Total :&emsp;<strong id="total_budget_show" style="color:green">{{ $car_price }} </strong>&emsp;USD</h3>
                      <input type="hidden" id="total_budget" name= "total_budget" value="{{ $car_price }}">
                      <input type="hidden" id="totalDays" value="{{ $totalDaysDiff}}">
                      <input type="hidden" id="car_name" name="car_name" value="{{ $booking_data['car_name']}}">
                      <input type="hidden" id="pick_up" name="pick_up" value="{{ $booking_data['pick_up']}}">
                      <input type="hidden" id="pick_up_lat"  name="pick_up_lat" value="{{ $booking_data['pick_up_lat']}}">
                      <input type="hidden" id="pick_up_lng" name="pick_up_lng" value="{{ $booking_data['pick_up_lng']}}">
                      <input type="hidden" id="pick_up_datetime" name="pick_up_datetime" value="{{ $booking_data['pick_up_datetime']}}">
                      <input type="hidden" id="drop_off" name="drop_off" value="{{ $booking_data['drop_off']}}"> 
                      <input type="hidden" id="drop_off_lat" name="drop_off_lat" value="{{ $booking_data['drop_off_lat']}}"> 
                      <input type="hidden" id="drop_off_lng" name="drop_off_lng" value="{{ $booking_data['drop_off_lng']}}"> 
                      <input type="hidden" id="drop_off_datetime"  name="drop_off_datetime" value="{{ $booking_data['drop_off_datetime']}}"> 
                      <input type="hidden" id="name" name="name" value="{{ $booking_data['name']}}"> 
                      <input type="hidden" id="email"  name="email" value="{{ $booking_data['email']}}"> 
                      <input type="hidden" id="phone" name="phone" value="{{ $booking_data['phone']}}"> 
                    </div>
                
                  <div class= "row">
                      <div class="col-sm-8 col-sm-offset-1">
                          <div class="login-form"><!--login form-->
                              <input type="hidden" name="_token" value="{{csrf_token()}}">
                              <h4>Billing To</h4>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="billing_name" id="billing_name" value="" placeholder="Billing Name" required>
                                  {{--  <span class="text-danger">asd</span>  --}}
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" value="" name="billing_address" id="billing_address" placeholder="Billing Address" required>
                                  {{--  <span class="text-danger">{{$errors->first('billing_address')}}</span>  --}}
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="billing_city" value="" id="billing_city" placeholder="Billing City" required>
                                  {{--  <span class="text-danger">{{$errors->first('billing_city')}}</span>  --}}
                              </div>
                              <div class="form-group ">
                                  <input type="text" class="form-control" name="billing_state" value="" id="billing_state" placeholder=" Billing State" required>
                                  {{--  <span class="text-danger">{{$errors->first('billing_state')}}</span>  --}}
                              </div>
                              <div class="form-group">
                                  <select name="billing_country" id="billing_country" class="form-control" >
                                      @foreach($countries as $country)
                                          <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                              {{-- <div class="form-group ">
                                  <input type="text" class="form-control" name="billing_pincode" value="" id="billing_pincode" placeholder=" Billing Pincode" required>                                                             
                              </div> --}}
                              <div class="form-group">
                                  <input type="text" class="form-control" name="billing_phonenumber" value="" id="billing_phonenumber" placeholder="Billing Phonenumber" required>
                                  {{--  <span class="text-danger">{{$errors->first('billing_phonenumber')}}</span>  --}}
                              </div>
                      
                              {{--  <div class="md-checkbox">
                                <input type="checkbox" id="checkme" name="checkme" class="md-check">
                                <label for="checkme">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span>
                                Shipping Address same as Billing Address
                              </div>  --}}
                          </div>
                      </div>                   

                      {{--  <div class="col-sm-5">
                          <div class="signup-form"><!--sign up form-->
                              <h4>Shipping To</h4>
                              <div class="form-group {{$errors->has('shipping_name')?'has-error':''}}">
                                  <input type="text" class="form-control" name="shipping_name" id="shipping_name" value="" placeholder="Shipping Name" required> 
                                  <span class="text-danger">{{$errors->first('shipping_name')}}</span>
                              </div>
                              <div class="form-group {{$errors->has('shipping_address')?'has-error':''}}">
                                  <input type="text" class="form-control" value="" name="shipping_address" id="shipping_address" placeholder="Shipping Address" required> 
                                  <span class="text-danger">{{$errors->first('shipping_address')}}</span>
                              </div>
                              <div class="form-group {{$errors->has('shipping_city')?'has-error':''}}">
                                  <input type="text" class="form-control" name="shipping_city" value="" id="shipping_city" placeholder="Shipping City" required>
                                  <span class="text-danger">{{$errors->first('shipping_city')}}</span>
                              </div>
                              <div class="form-group {{$errors->has('shipping_state')?'has-error':''}}">
                                  <input type="text" class="form-control" name="shipping_state" value="" id="shipping_state" placeholder="Shipping State" required>
                                  <span class="text-danger">{{$errors->first('shipping_state')}}</span>
                              </div>
                              <div class="form-group">
                                  <select name="shipping_country" id="shipping_country" class="form-control">
                                      @foreach($countries as $country)
                                          <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <div class="form-group {{$errors->has('shipping_pincode')?'has-error':''}}">
                                  <input type="text" class="form-control" name="shipping_pincode" value="" id="shipping_pincode" placeholder="Shipping Pincode" required>
                                  <span class="text-danger">{{$errors->first('shipping_pincode')}}</span>
                              </div>
                              <div class="form-group {{$errors->has('shipping_phonenumber')?'has-error':''}}">
                                  <input type="text" class="form-control" name="shipping_phonenumber" value="" id="shipping_phonenumber" placeholder="Shipping Phonenumber" required>
                                  <span class="text-danger">{{$errors->first('shipping_phonenumber')}}</span>
                              </div>                             
                          </div>
                      </div>  --}}
                      
                  </div>
                  {{--  </form>  --}}                      

                </div>  
            </div>

            <div class="row"  style="margin:auto; padding:2vh">
              <div class="col-md-12 col-sm-12">
                <div class="formbtn">
                  <input type="submit" class="btn" value="Reserve Now"  style="border-radius:10px">
                </div>  
              </div>
            </div>
        </div>

      </form>
    </div>  
    {{--  <div class="col-md-2 col-sm-2 col-2">
      <img alt="" src="images/mark/subaru.jpg"  style="padding-top:1rem; border-radius:10px" >
      <img alt="" src="images/mark/suzuki.jpg"  style="padding-top:1rem">
      <img alt="" src="images/mark/GMC.jpg" style="padding-top:1rem">
       <img alt="" src="images/mark/toyota.png" style="padding-top:1rem">   
       <div style="    border-radius:2rem!important; ">  
      <img alt="" src="images/mark/honda.jpg"  style="padding-top:1rem ">      
      </div>
    </div>  --}}
  </div>


    @endsection

    @push('js')

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{widget(17)->extra_field_1}}&libraries=places"></script>

        <script type="text/javascript" src="{{ asset('js/moving.js') }}"></script>
        <script type="text/javascript" src="{{asset('js/booking_detail.js')}}"></script>
        
        <script>
            $(document).on('click', '#checkbox11', function(){
              if ($('#checkbox11').is(':checked') == true) 
              {
                $('#input11_1').show(); $('#input11_2').show();   
                $('#checkbox11_company').attr('required', true);
                $('#checkbox11_policy').attr('required', true);
              }     
              else
              {   
                $('#input11_1').hide(); $('#input11_2').hide();
                $('#checkbox11_company').attr('required', false);
                $('#checkbox11_policy').attr('required', false);
              }   
            });

            $(document).on('click', '#checkbox12', function(){
              if ($('#checkbox12').is(':checked') == true) 
              {
                var budget = parseFloat($("#total_budget").val()) + 18 * $("#totalDays").val();
                $("#total_budget").val(budget);
                $("#total_budget_show").text(budget);
              }     
              else
              {   
                var budget = parseFloat($("#total_budget").val()) - 18 * $("#totalDays").val();
                $("#total_budget").val(budget);
                $("#total_budget_show").text(budget);
              }   
            });

             $(document).on('click', '#checkbox1', function(){
            
              if ($('#checkbox1').is(':checked') == true) 
              {
                var budget = parseFloat($("#total_budget").val()) + 100;
                $("#total_budget").val(budget);
                $("#total_budget_show").text(budget);
              }     
              else
              {  
                var budget = parseFloat($("#total_budget").val()) - 100;
                $("#total_budget").val(budget);
                $("#total_budget_show").text(budget);
              }   
            });

             $(document).on('click', '#checkbox2', function(){
            
              if ($('#checkbox2').is(':checked') == true) 
              {
                var budget = parseFloat($("#total_budget").val()) + 30;
                $("#total_budget").val(budget);
                $("#total_budget_show").text(budget);
              }     
              else
              {  
                var budget = parseFloat($("#total_budget").val()) - 30;
                $("#total_budget").val(budget);
                $("#total_budget_show").text(budget);
              }   
            });

             $(document).on('click', '#checkbox3', function(){
            
              if ($('#checkbox3').is(':checked') == true) 
              {
                var budget = parseFloat($("#total_budget").val()) + 10;
                $("#total_budget").val(budget);
                $("#total_budget_show").text(budget);
              }     
              else
              {  
                var budget = parseFloat($("#total_budget").val()) - 10;
                $("#total_budget").val(budget);
                $("#total_budget_show").text(budget);
              }   
            });
            
            $(document).on('click', '#checkbox4', function(){
            
              if ($('#checkbox4').is(':checked') == true) 
              {
                var budget = parseFloat($("#total_budget").val()) + 10;
                $("#total_budget").val(budget);
                $("#total_budget_show").text(budget);
              }     
              else
              {  
                var budget = parseFloat($("#total_budget").val()) - 10;
                $("#total_budget").val(budget);
                  $("#total_budget_show").text(budget);
              }   
            });

            $(document).on('click', '#checkbox5', function(){
            
              if ($('#checkbox5').is(':checked') == true) 
              {
                $('#input5').show(); 
                $('#checkbox5_input').attr('required', true);
                var budget = parseFloat($("#total_budget").val()) + 100;
                $("#total_budget").val(budget);
                $("#total_budget_show").text(budget);
              }     
              else
              {   
                $('#input5').hide();
                $('#checkbox5_input').attr('required', false);
                var budget = parseFloat($("#total_budget").val()) - 100;
                $("#total_budget").val(budget);
                $("#total_budget_show").text(budget);
              }   
            });
            $(document).on('click', '#checkbox6', function(){
              if ($('#checkbox6').is(':checked') == true) 
              {
                $('#radiopart_6').show(); 
                var budget = parseFloat($("#total_budget").val()) + 100;
                $("#total_budget").val(budget);
                $("#total_budget_show").text(budget);
              }     
              else
              {   
                $('#radiopart_6').hide();
                $('#radio1').checked = true;
                var budget = parseFloat($("#total_budget").val()) - 100;
                $("#total_budget").val(budget);
                $("#total_budget_show").text(budget);
              }   
            });

            $(document).on('click', '#checkbox13', function(){
              if ($('#checkbox13').is(':checked') == true) 
              {
                $('#checkbox13_description').show(); 
              }     
              else
              {   
                $('#checkbox13_description').hide();
              }   
            });

            $(document).on('click', '#radio1', function(){              
                $('#input6').hide();
                $("#checkbox6_input").attr("required", false);   
          
            });
            $(document).on('click', '#radio2', function(){              
                $('#input6').show(); 
                $("#checkbox6_input").attr("required", true);           
            });

              $("#checkme").click(function () {
                if(this.checked){
                  $("#shipping_name").val($("#billing_name").val());
                  $("#shipping_address").val($("#billing_address").val());
                  $("#shipping_city").val($("#billing_city").val());
                  $("#shipping_state").val($("#billing_state").val());
                  $("#shipping_country").val($("#billing_country").val());
                  $("#shipping_pincode").val($("#billing_pincode").val());
                  $("#shipping_phonenumber").val($("#billing_phonenumber").val());
                }else{
                  $("#shipping_name").val("");
                  $("#shipping_address").val("");
                  $("#shipping_city").val("");
                  $("#shipping_state").val("");
                  $("#shipping_country").val("Albania");
                  $("#shipping_pincode").val("");
                  $("#shipping_phonenumber").val("");
                }
              });
         
        </script>


.is(':checked') == true
    @endpush
