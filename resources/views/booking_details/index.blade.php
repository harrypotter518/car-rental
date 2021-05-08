@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/metronic_component.css') }}" />

    <!-- Inner Heading Start -->
    <div class="pageTitle">
        <div class="container">
            <h1 class="page-heading">
              {{ __('Booking Details') }}
            </h1>
        </div>
    </div>

  <div class="row">
    <div class="col-2">
      <img alt="" src="images/mark/ford.jpg" >
      <img alt="" src="images/mark/mazda.jpg">
      <img alt="" src="images/mark/chrysler.jpg" >
      <img alt="" src="images/mark/wagen.jpg" >
       <img alt="" src="images/mark/volvo.jpg" >
    </div>
    <div class="container col-8">
     <form action="{{route('booking.post')}}" method="POST">
          @csrf 
        <div class="row">
            <div class="col-md-12 col-lg-12"  style="padding-top:10vh; color:white">

                <div class="bformBox" style="border-radius:2rem; box-shadow: 0px 10px 10px rgba(0 0 0 /100%); background:#111;">

                  <h3>Add following products</h3>       
                   <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">   
                          	<div class="md-checkbox has-warning" >
                              <input type="checkbox" id="checkbox1" class="md-check" >
                              <label for="checkbox1" >
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span>
                              1.Prepaid gas </label>
                            </div>
                      </div>
                    </div>      

                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                          	<div class="md-checkbox has-warning">
                              <input type="checkbox" id="checkbox2" class="md-check">
                              <label for="checkbox2">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span>
                              2.Car wash </label>
                            </div>
                      </div>
                    </div>
                    
                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                            <div class="md-checkbox has-warning">
                              <input type="checkbox" id="checkbox3" class="md-check">
                              <label for="checkbox3">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span>
                              3.iphone charger  </label>
                            </div>
                      </div>
                    </div>   

                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                            <div class="md-checkbox has-warning">
                              <input type="checkbox" id="checkbox4" class="md-check">
                              <label for="checkbox4">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span>
                              4.Android charger  </label>
                            </div>
                      </div>
                    </div>

                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                            <div class="md-checkbox has-warning">
                              <input type="checkbox" id="checkbox5" class="md-check">
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
                                <input type="text" class="form-control" id="form_control_1" placeholder="Please enter address">
                                <label for="form_control_1">Address:</label>
                              </div>
                            </div>
                      </div>
                    </div>

                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                            <div class="md-checkbox has-warning">
                              <input type="checkbox" id="checkbox6" class="md-check">
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
                                    <input type="radio" id="radio1" name="radio1" class="md-radiobtn" checked>
                                    <label for="radio1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Yes </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="radio2" name="radio1" class="md-radiobtn" >
                                    <label for="radio2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    No </label>
                                  </div>	
                                </div>
                              </div>

                              <div class="form-group form-md-line-input has-info"  id="input6" style="display:none">
                                <input type="text" class="form-control" id="form_control_1" placeholder="Please enter address"  style="color:white">
                                <label for="form_control_1">Address:</label>
                              </div>
                            </div>
                      </div>
                    </div>  
                </div>  
            </div>
            
            <div class="col-md-12" style="padding-top:20vh; color:white">
                <div class="bformBox" style="border-radius:2rem; box-shadow: 0px 10px 10px rgba(0 0 0 /100%); ">

                  <h3>Add Insurances</h3> 
                    
                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                            <div class="md-checkbox has-warning">
                              <input type="checkbox" id="checkbox11" class="md-check">
                              <label for="checkbox11">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span>
                              1. I have my own physical damage and liability insurance, for example, through my credit card company.</label>
                            </div>
                        </div>
                          <div class="col-md-6 col-sm-6" id="input11_1" style="display:none">
                              <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control" id="form_control_1" placeholder="Please enter company name"  style="color:white">
                                <label for="form_control_1">Company name:</label>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6" id="input11_2" style="display:none">
                              <div class="form-group form-md-line-input has-info">     
                                <input type="text" class="form-control" id="form_control_1" placeholder="Please enter policy number" style="color:white">
                                <label for="form_control_1">Policy number</label>
                              </div>
                          </div>
                      
                    </div>

                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                            <div class="md-checkbox has-warning">
                              <input type="checkbox" id="checkbox12" class="md-check">
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
                            <div class="md-checkbox has-warning">
                              <input type="checkbox" id="checkbox13" class="md-check">
                              <label for="checkbox13">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span>
                            3. I do not have liability or physical damage insurance to my knowledge </label>
                            </div>
                            <div style="padding-left:3rem">a. Automatic response: unfortunately we cannot rent cars to drivers without liability insurance</div>
                      </div>
                    </div> 

                </div>  
            </div>

            <div class="row"  style="margin:auto; padding:2vh">
              <div class="col-md-12 col-sm-12">
                <div class="formbtn">
                  <input type="submit" class="btn" value="Reserve Now"  style="border-radius:1rem">
                </div>  
              </div>
            </div>
        </div>
      </form>
    </div>  
     <div class="col-2">
      <img alt="" src="images/mark/subaru.jpg" >
      <img alt="" src="images/mark/suzuki.jpg" >
      <img alt="" src="images/mark/GMC.jpg">
       <img alt="" src="images/mark/toyota.png">     
      <img alt="" src="images/mark/honda.jpg" >      
    </div>
  </div>


    @endsection

    @push('js')

        <script type="text/javascript" src="{{ asset('js/moving.js') }}"></script>
        
        <script>
            $(document).on('click', '#checkbox11', function(){
              if ($('#checkbox11').is(':checked') == true) 
              {
                $('#input11_1').show(); $('#input11_2').show();   
              }     
              else
              {   
                 $('#input11_1').hide(); $('#input11_2').hide();
              }   
            });

            $(document).on('click', '#checkbox5', function(){
              if ($('#checkbox5').is(':checked') == true) 
              {
                $('#input5').show(); 
              }     
              else
              {   
                 $('#input5').hide();
              }   
            });
            $(document).on('click', '#checkbox6', function(){
              if ($('#checkbox6').is(':checked') == true) 
              {
                $('#radiopart_6').show(); 
              }     
              else
              {   
                 $('#radiopart_6').hide();
                 $('#radio1').checked = true;
              }   
            });

            $(document).on('click', '#radio1', function(){
              
                $('#input6').hide(); 
          
            });
            $(document).on('click', '#radio2', function(){
              
                $('#input6').show(); 
          
            });


            


         
        </script>


.is(':checked') == true
    @endpush
