@extends('layouts.app')

@section('content')


    <!-- Inner Heading Start -->
    <div class="pageTitle">
        <div class="container">
            <h1 class="page-heading">
              {{ __('Booking Details') }}
            </h1>
        </div>
    </div>

    <div class="container">
     <form action="{{route('booking.post')}}" method="POST">
          @csrf 
        <div class="row">
            <div class="col-md-12 col-lg-12"  style="padding-top:10vh">

                <div class="bformBox" style="border-radius:2rem; box-shadow: 0px 10px 10px rgba(0 0 0 /100%); background:#111;">

                  <h3>Add following products</h3>                   
                    
                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">   
                          <div class="form-check">
                            <label class="form-check-label" for="check2">
                              <input type="checkbox" class="form-check-input" id="check1" name="option2" value="something">1.Prepaid gas
                            </label>
                          </div>
                      </div>
                    </div>
                    
                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                          <div class="form-check">
                            <label class="form-check-label" for="check2">
                              <input type="checkbox" class="form-check-input" id="check1" name="option2" value="something">2.Car wash 
                            </label>
                          </div>
                      </div>
                    </div>
                    
                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                          <div class="form-check">
                            <label class="form-check-label" for="check2">
                              <input type="checkbox" class="form-check-input" id="check1" name="option2" value="something">3.iphone charger 
                            </label>
                          </div>
                      </div>
                    </div>

                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                          <div class="form-check">
                            <label class="form-check-label" for="check2">
                              <input type="checkbox" class="form-check-input" id="check1" name="option2" value="something">4.Android charger 
                            </label>
                          </div>
                      </div>
                    </div>

                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                          <div class="form-check">
                            <label class="form-check-label" for="check2">
                              <input type="checkbox" class="form-check-input" id="check1" name="option2" value="something">5.Delivery (we will deliver your shiny new vehicle to your desired location within 30 miles of Chicago)
                            </label>
                          </div>
                      </div>
                    </div>

                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                          <div class="form-check">
                            <label class="form-check-label" for="check2">
                              <input type="checkbox" class="form-check-input" id="check1" name="option2" value="something">6.Pick up (we will pick up the vehicle from your desired location within 30 miles of Chicago)
                            </label>
                          </div>
                      </div>
                    </div>    
                </div>  
            </div>
            
            <div class="col-md-12" style="padding-top:20vh">
                <div class="bformBox" style="border-radius:2rem; box-shadow: 0px 10px 10px rgba(0 0 0 /100%); ">

                  <h3>Add Insurances</h3>                     
                    <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                          <div class="form-check">
                            <label class="form-check-label" for="check2">
                              <input type="checkbox" class="form-check-input" id="check1" name="option2" value="something"> 1. I have my own physical damage and liability insurance, for example, through my credit card company.
                            </label>
                          </div>
                      </div>
                    </div>

                     <div class="row" style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                          <div class="form-check">
                            <label class="form-check-label" for="check2">
                              <input type="checkbox" class="form-check-input" id="check1" name="option2" value="something">2. I have liability insurance but would like to buy comprehensive physical damage insurance for peace of mind
                            </label>
                          </div>
                      </div>
                    </div>  

                     <div class="row"  style="padding-bottom:1vh;">
                      <div class="col-md-12 col-sm-12">
                          <div class="form-check">
                            <label class="form-check-label" for="check2">
                              <input type="checkbox" class="form-check-input" id="check1" name="option2" value="something">3. I do not have liability or physical damage insurance to my knowledge
                            </label>
                          </div>
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


    @endsection

    @push('js')

        <script type="text/javascript" src="{{ asset('js/moving.js') }}"></script>

    @endpush
