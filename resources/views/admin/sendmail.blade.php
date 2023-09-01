<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
    <!-- Required meta tags -->
    <style type="text/css">
        label
        {
            
            display: inline-block;
            width: 200px;
            color: black;

        }
        input
        {
          width:100%; height: 80px; padding:0,0;
         
        }
    </style>
   
    
    @include('admin.css')
  </head>
  <body style="background: white;">
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

                

            <div class="container"  style="padding-top:100px;" >
             
            @if(session()->has('message')) 

                    <div class="alert alert-success">
                        
                        {{session()->get('message')}}
                        
                    </div>

                @endif

                <form action="{{url('sendemail', $data->id)}}" method="POST"  >

                @csrf
                    
                    <div style="padding:15px;">
                        <label>Greetings</label>
                        <input type="text" name="greetings" style="color:black" placeholder="" required="" value="Good Day! From Birung Clinic." >
                    </div>

                    <div style="padding:15px;">
                        <label>Body</label>
                        <input type="text" name="body" style="color:black" placeholder="" required="" value="Your Appointment is Approved! Kindly go to our clinic on your scheduled date.">
                    </div>

                    <div style="padding:15px;">
                        <label>End Part</label>
                        <input type="text" name="endpart" style="color:black" placeholder="" required="" value="Thank you so much!" > 
                    </div>

                    

                    

                    


                    

                    <div style="padding:15px;">
                       <button type="submit" class="btn btn-succcess" style="background-color:green;">Submit</button>
                    </div>

                </form>
            </div>

            </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>