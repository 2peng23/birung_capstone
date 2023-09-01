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
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<style>
  body {
  font-family: "Open Sans", Arial, sans-serif;
}

#emergency {
    animation: slide-left 10s linear infinite;
    position: absolute;
    top: 2%;
    left: 0;
    width: 100%;
    text-align: center;
  }

  @keyframes slide-left {
    0% {
      transform: translateX(100%);
    }
    100% {
      transform: translateX(-100%);
    }
  }
  @keyframes animateMessage{
    from{
      top: 50%;
      opacity: 0;
    }
    to{
      top: 50%;
      opacity: 1;
    }
  }
  

</style>
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

  <div  style="padding:80px; height: 100vh; width:100%;margin:0 auto;position:relative;" class="bg-light">
   
    <div class="container-fluid bg-light" style="width:100%;">
     
    
    
        <div class="row bg-light" style="width:100%;margin:0 auto;justify-content:space-between;">
          @foreach ($emergency as $emerge)
            <div id="emergency">
              <p style="color: blue;font-size:30px;background-color:white;">All Appointments on {{ date('F d, Y', strtotime($emerge->date)) }}
                from {{date('g:ia', strtotime($emerge->time_from))}} to {{date('g:ia', strtotime($emerge->time_to))}} is Cancelled due to {{$emerge->message}}</p>
            </div>

           
          @endforeach
    
        <div style="width:100%;" class="col-sm-6 shadow rounded border-dark">
    
              <form action="{{url('appointment')}}" method="POST"  id="appointment-form">
                @csrf
                <div class="col-sm-12 col-m-6 py-2 wow fadeInLeft">
                  <input type="text" name="doctor" class="form-control" value="{{$doctor->name}}" readonly hidden >
                </div>

                  <div class="col-sm-12 col-m-6 py-2 wow fadeInLeft">
                    <input type="text" name="name" class="form-control" placeholder="Full name" required="">
                  </div>
    
                  <div class="col-sm-12 col-m-6 py-2 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="Email address.." >
                  </div>
    
                  <div class="col-sm-12 col-m-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="number" pattern="[0-9]{11}" name="number" class="form-control" placeholder="Phone Number.." required="">
                  </div>

                  <div class="col-sm-12 col-m-6 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <select name="date" id="date" class="form-control">
                        <option>Select Date</option>
                        @for($i=1; $i<=6; $i++)
                            @if(isset($doctor->{"date$i"}))
                                <option value="{{$doctor->{"date$i"} }}">{{ date('l,F d, Y', strtotime($doctor->{"date$i"})) }}</option>
                            @endif
                        @endfor
                    </select>
                </div>
                
                @if(isset($doctor))
                    <div class="col-sm-12 col-m-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <select name="slot" id="timeslot">
                            <option>Select Time Slot</option>
                            @for ($i = 1; $i <= 6; $i++)
                                @php $timeslots = explode(',', $doctor->{"timeslot$i"}); @endphp
                                @if(isset($timeslots))
                                    <optgroup label="{{ date('l, F d, Y', strtotime($doctor->{"date$i"})) }}" data-date="{{$doctor->{"date$i"} }}">
                                        @foreach ($timeslots as $timeslot)
                                            <option value="{{ str_replace(['[', ']', '"'], '', $timeslot) }}">{{ str_replace(['[', ']', '"'], '', $timeslot) }}</option>
                                        @endforeach
                                    </optgroup>
                                @endif
                            @endfor
                        </select>
                    </div>
                @endif
                
              

          <div class="col-sm-12 col-m-6 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Provide details about your health issue.." required=""></textarea>
          </div>

                  
                  <div style="padding:20px;">
                    <button type="submit" class="btn btn-success mt-3 wow zoomIn" style="background-color:green;">Submit Request</button>
                    <a  class="btn btn-info mt-3 wow zoomIn" style="color:black;" href="{{url('myappointment')}}">View Request</a>
                  </div>
                </form>
                  
          </div>

          <div class="col-sm-6" style=" padding:20px;">
                <img src="/doctorimage/{{$doctor->image}}" alt="" style="width:350px;border-radius:10px;" class="wow fadeInUp">
                <p><strong>
                  {{$doctor->name}} <br>
                  {{$doctor->specialty}}
                </strong>
              </p>
          </div>
          </div>

          {{-- <div id="message" class="message text-uppercase text-light card text-center bg-success h-25 pt-4" style="position:fixed;display:none; top:50%; left:50%;transform: translate(-50%, -50%);font-size:40px">
            <p>
              Appointment Booked Successfully <i class="fa-regular fa-circle-check"></i>
            </p>
          </div> --}}
          

        
        
        
      
    
      </div>
  </div>
  <script>
    const appointmentForm = document.getElementById('appointment-form');
    appointmentForm.addEventListener('submit', (event) => {
    // Prevent the default form submission
    event.preventDefault();
    // Create a message element
    const message = document.createElement('div');
    message.setAttribute('class', 'message text-uppercase text-light card text-center bg-success h-25 pt-5')
    message.innerHTML = 'Appointment Booked <i class="fa-regular fa-circle-check"></i>';
    message.style.position = 'fixed';
    message.style.fontSize = '40px'
    message.style.top = '50%';
    message.style.left = '50%';
    message.style.transform = 'translate(-50%, -50%)';
    message.style.backgroundColor = '#fff';
    message.style.padding = '10px';
    message.style.border = '1px solid #ccc';
    message.style.boxShadow = '0px 0px 10px #ccc';
    message.style.zIndex = '9999';
    message.style.animationName = 'animateMessage';
    message.style.animationDuration = '.5s';
    // Add the message element to the document
    document.body.appendChild(message);
    
    // Submit the form
    setTimeout(() => {
    appointmentForm.submit();
    }, 1000); //1seconds
});
</script>

<script>
// Get the select element
var selectElement = document.getElementById('timeslot');

// Retrieve the array of disabled option values from local storage
var disabledOptionValues = JSON.parse(localStorage.getItem('disabledOptionValues')) || [];

// Disable any options that are already booked
for (var i = 0; i < disabledOptionValues.length; i++) {
  var disabledOption = selectElement.querySelector('option[value="' + disabledOptionValues[i] + '"]');
  if (disabledOption) {
    disabledOption.disabled = true;
  }
}

// Add an event listener to detect when an option is clicked
selectElement.addEventListener('change', function() {
  // Get the selected option
  var selectedOption = selectElement.options[selectElement.selectedIndex];

  // Add the value of the selected option to the array of disabled option values
  disabledOptionValues.push(selectedOption.value);

  // Save the array of disabled option values in local storage
  localStorage.setItem('disabledOptionValues', JSON.stringify(disabledOptionValues));

  // Disable the selected option
  // selectedOption.disabled = true;

  // Set a timeout to enable the selected option after 20 seconds
  setTimeout(function() {
    selectedOption.disabled = false;

    // Remove the value of the selected option from the array of disabled option values
    var index = disabledOptionValues.indexOf(selectedOption.value);
    if (index !== -1) {
      disabledOptionValues.splice(index, 1);
    }

    // Save the array of disabled option values in local storage
    localStorage.setItem('disabledOptionValues', JSON.stringify(disabledOptionValues));
  }, 3600000);//20000 20seconds //3600000 1 hour
});

// Enable any options that were previously disabled after 20 seconds
setTimeout(function() {
  for (var i = 0; i < disabledOptionValues.length; i++) {
    var disabledOption = selectElement.querySelector('option[value="' + disabledOptionValues[i] + '"]');
    if (disabledOption) {
      disabledOption.disabled = false;

      // Remove the value of the selected option from the array of disabled option values
      var index = disabledOptionValues.indexOf(disabledOption.value);
      if (index !== -1) {
        disabledOptionValues.splice(index, 1);
      }

      // Save the array of disabled option values in local storage
      localStorage.setItem('disabledOptionValues', JSON.stringify(disabledOptionValues));
    }
  }
}, 3600000);//20000 20seconds //3600000 1 hour

</script>








 
  <script>
    // Get the date and timeslot select elements
    const dateSelect = document.getElementById('date');
    const timeslotSelect = document.getElementById('timeslot');
  
    // Function to update the available timeslots based on the selected date
    function updateTimeslots() {
      // Get the selected date
      const selectedDate = dateSelect.value;
  
      // Loop through the optgroup elements in the timeslot select element
      for (const optgroup of timeslotSelect.querySelectorAll('optgroup')) {
        // Hide the optgroup if its date doesn't match the selected date
        if (optgroup.getAttribute('data-date') !== selectedDate) {
          optgroup.style.display = 'none';
        } else {
          optgroup.style.display = 'block';
        }
      }
    }
  
    // Update the available timeslots when the date select element is changed
    dateSelect.addEventListener('change', updateTimeslots);
  
    // Call the updateTimeslots function to set the initial available timeslots
    updateTimeslots();
  </script>
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

  
</body>
</html>