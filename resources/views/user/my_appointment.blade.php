<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>User Dashboard</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <style type="text/css">
       

        th
        {
          text-align:left;
          font-size:20px;
        }

        table, th, td 
        {
          border: 1px solid black;
          border: solid;
          text-align:center;

        }
        input:hover{
          background-color: aqua;
        }
    </style>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
     <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">BIRUNG</span> OB-Gyne Clinic</a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home#doctor">Doctor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home#staff">Staff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home#services">Services</a>
            </li>
            

            @if(Route::has('login'))

            @auth

            
            <x-app-layout> 
            </x-app-layout>
            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth
            @endif 

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
  <div  style="padding:80px; height: 100vh; width:100%;position:relative;" >
   @if(count($emergency) >0)
  <div id="feedback" class="feedback" style="margin-bottom:40px;">
    <form id="feedback-form" action="{{ url('add_feedback') }}" method="POST" >
      @csrf
      @foreach($appoint as $appoints)
        <input type="text" name="feedback" value="{{$appoints->name}}" hidden>
        @endforeach
        <label for="">Please Click if you received notification about cancellation of appointment.</label>
        <input type="submit" value="Got It!" style="border: 1px solid black;width:100px;border-radius:5px;height:40px">
      
    </form>
  </div>
@else
  <div style="display: none;"></div>
@endif



    <button  style="width:80px;position:absolute;right:100px; top:20px"><a href="{{url('home',)}}" class="btn btn-primary">Back</a></button>
    @if(count($appoint) > 0)
    <table style="width:100%;">
        <tr style="background-color:rgb(53, 53, 178);color:white">
            <th style="width:200px;">Date</th>
            <th style="width:200px;">Message</th>
            <th style="width:50px;">Status</th>
            {{-- <th style="width: 200px;">Cancel Appointment</th> --}}
        </tr>
        
        @foreach($appoint as $appoints)
        <tr >
          <td>{{ date('l, F d, Y', strtotime($appoints->date)) }} <br> {{ $appoints->slot }}</td>
            <td>{{$appoints->message}}</td>
            <td>
              @if($appoints->status === 'Denied')
              <p style="background-color:red;color:white;width:100px;margin:auto;">{{$appoints->status}}</p>
               @elseif($appoints->status ==='Approved')
              <p style="background-color:green;color:white;width:100px;margin:auto;">{{$appoints->status}}</p>
              @else {{$appoints->status}}
              @endif
            </td>
            {{-- <td>
                @if($appoints->status != 'Approved' && $appoints->status != 'Denied')
                    <a class="btn btn-danger" onclick="if(this.disabled){ alert('Cannot cancel this appointment.'); return false; } return confirm('Are you sure you want to cancel this appointment?')" href="{{url('cancel_appoint', $appoints->id)}}">Cancel</a>
                @else
                    <button class="btn btn-dark" disabled>Cancel</button> 
                @endif
                
            </td> --}}
        </tr>
    @endforeach
    

    </table>
    @else
    <p>No data available.</p>
    @endif
  </div>

 

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
<script>
  $(document).ready(function() {
    var formSubmitted = false;
    
    // When the form is submitted, show a message and set formSubmitted to true
    $("#feedback-form").submit(function(e) {
      e.preventDefault();
      var form = $(this);
      $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: form.serialize(),
        success: function(response) {
          alert("Thank you for your feedback!");
          formSubmitted = true;
        },
        error: function(xhr, status, error) {
          // Handle error
        }
      });
    });
    
    // Hide the feedback form for 1 minute if it has been submitted
    setInterval(function() {
      if (formSubmitted) {
        $("#feedback").hide();
        setTimeout(function() {
          $("#feedback").show();
        }, 60000); // 1 minute
        formSubmitted = false;
      }
    }, 1000); // Check every second
  });
  </script>


  
</body>
</html>