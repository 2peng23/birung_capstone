<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Birung Clinic</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
  <style>
    .columns{
            display: grid;
        }
        .box{
            height: 300px;
            width: 500px;
            border: 2px solid black;
            border-radius: 20px;
            margin-right: 100px;
            padding: 20px;
        }
        .box h2{
            color: aqua;
            font-size: 2rem;
            margin-bottom: 40px;
        }
        .box p{
            color: black;
            font-size: 1.1rem;
        }
        .text-muted {
        font-size: 18px;
        line-height: 1.5;
      }
      .navv:hover{
        background-color: green;
        color:white;
      }

      @keyframes text-fade-in {
  from {
    opacity: 0;
    transform: translateY(-10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fadeInLeft {
  0% {
    opacity: 0;
    transform: translateX(-100%);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}
.accordion-title{
  margin-bottom: 30px;
}
.question{
  padding: 18px 0;
  font-size: 18px;
  cursor: pointer;
  border-bottom: 1px solid black;
  position: relative; 
}
.question::after{
  content: '+';
  position: absolute;
  right: 5px;
}
.answer{
  padding-top: 15px;
  font-size: 15px;
  line-height: 1.5;
  height: 0;
  overflow: hidden;
  transition: .5s;
}
/* Active Link */
.acc-container.active .answer{
  height: 150px;
}
.acc-container.active .question{
  font-size: 15px;
  transition: .5s;
  color: green;
  font-weight: bolder;
}
.acc-container.active .question::after{
  content: '-';
  transition: .5s;
  font-size:20px;
}
.infinite{
  animation-iteration-count: infinite;
}
.slow{
  animation-duration: 4;
}

      
      

  </style>
</head>
<body >
  

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
     <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">

        <a class="navbar-brand">
          <span class="text-primary">DE VILLA - BIRUNG</span> CLINIC<span id="status" class="animate__animated animate__shakeY infinite"></span> <br>
          <span style="font-size:10px">MONDAY - SATURDAY</span> <br>
          <span style="font-size:13px">8:00 am - 4:00 pm</span>
        </a> 

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#doctor">Doctor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#staff">Staff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sched">Schedules</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
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

 

  <div class="page-hero bg-image overlay-dark" id="bgg"  style="background-image: url(../assets/img/bg_image_3.jpg);">
    
    <div class="hero-section" >
      <div class="container text-center wow zoomIn">
        <h1 class=" text-light" id="t1">DE VILLA - BIRUNG</h1>
        <h2 style="font-size:30px; margin-top:-20px" id="t2">Internal Medicine and Ob-Gyne Services</h2> <br>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-4 py-3 py-md-0" >
            <div class="card-service wow fadeInUp" id="inn">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p class="wow fadeInLeft">
                <span><a href="{{route('login')}}" style="text-decoration:none;cursor:pointer;"  id="inntext1" >Login</a></span> or
                <span><a href="{{route('register')}}" style="text-decoration:none;cursor:pointer;"  id="inntext2">Register Now</a></span>
              </p>
            </div>
            <div class="container card mt-3" style="display: none" id="inmessage">
              
          </div>
          </div>
          
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp" id="appnt">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <h5 style="margin-left:10px" class="wow fadeInLeft" id="apptext"> Online Appointment</h5>
            </div>
            <div class="container card mt-3" style="display: none" id="appmessage">
              
            </div>
          </div>

          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp" id="notif">
              <div class="circle-shape bg-success text-white">
                <span class="fa-solid fa-envelope"></span>
              </div>
              <h5 style="margin-left:10px" class="wow fadeInLeft" id="notiftext">Email and SMS Notification</h5>
             </div>
             <div class="container card mt-3" style="display: none" id="notifmessage">
              
            </div>
          </div>
          

        </div>
      </div>
    </div>
    
    
    

    <div class="page-section pb-0" id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <div class="text-block" >
              <h2 class="section-heading mb-3" id="d-text">Welcome to De Villa - Birung Medical Clinic</h2>
              <h5 class="accordion-title" id="d-text">FAQs</h5>
              <div class="acc-container">
                <div class="question">What we offer?</div>
                <div class="answer text-muted">
                  De Villa Birung Clinic offers Internal Medicine and Ob-gyne services to provide high-quality healthcare to individuals and families in the community.
                   Their team of experienced medical professionals offers a wide range of personalized medical services with a focus on preventive care and early disease detection. 
                  They strive to help patients achieve optimal health outcomes.
                </div>
              </div>
              <div class="acc-container">
                <div class="question">How to make an appointment?</div>
                <div class="answer text-muted">De Villa Birung Clinic offers Internal Medicine and Ob-gyne services with a focus on high-quality healthcare. 
                  Patients can register easily to book appointments with their preferred doctor and receive personalized care. 
                  The clinic prioritizes patient-centered care and aims to provide a seamless healthcare experience for all.
                </div>
              </div>
              <div class="acc-container">
                <div class="question">How can we notify you about your appointment?</div>
                <div class="answer text-muted">Welcome to De Villa Birung Clinic! Our trusted medical facility specializes in Internal Medicine and Ob-Gyne services.
                  We offer SMS and email notifications to remind you of upcoming appointments, ensuring a convenient and efficient experience.
                  Our dedicated team provides high-quality healthcare services with effective communication. 
                  You'll never miss an appointment with our hassle-free system. Visit us for routine check-ups or specialized treatments.
                  Get the care you need at De Villa Birung Clinic.</div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1 animate__pulse animate__animated infinite animate__slow">
              <img src="../doctorimage/birung-logo.jpg" alt="" class="img-fluid rounded-circle mb-5">
            </div>
          </div>
        </div>
      </div>
    </div>
     <!-- .bg-light -->
  </div> <!-- .bg-light -->

  @include('user.doctor')
  @include('user.staff')

  
  </div> 
  @include('schedule') 
  @include('user.news') 

  <!-- .-->
  
  </div> <!-- .page-section -->

  
  </div>
   @include('user.footer') 

 



 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/main.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>

<script>
  const today = new Date();
  const dayOfWeek = today.getDay();
  const hour = today.getHours();
  const status = document.getElementById('status');

  if (dayOfWeek === 0 || (hour >= 21 || hour < 8)) {
      status.innerHTML = " <i class='fa fa-heartbeat'></i>  CLOSED";
      status.style = 'color:red;font-size:20px; width:150px;margin:auto;margin-top:20px'
  }
  else{
    status.style = 'display:none';
  }
</script>
<script>
  // bgimage
const bg = document.querySelector('#bgg')
const text1 = document.querySelector('#t1')
const text2 = document.querySelector('#t2')
bg.addEventListener('mouseover', function(){
    bg.setAttribute('class', 'page-hero bg-image overlay-light');
    text1.setAttribute('class', 'display-4 text-dark')
    text2.style = 'color:black;font-size:30px; margin-top:-20px'
});
bg.addEventListener('mouseout', function(){
    bg.setAttribute('class', 'page-hero bg-image overlay-dark')
    text1.setAttribute('class', 'display-4 text-light')
    text2.style = 'color:white;font-size:30px; margin-top:-20px'
    
});
</script>
<script>
  //About
var about = document.querySelector('#about')
var aboutText = document.querySelectorAll('#d-text')
var acc = document.querySelectorAll('.acc-container')
for(i = 0; i<acc.length; i++){
    acc[i].addEventListener('click', function(){
        this.classList.toggle('active');
    })
}
about.addEventListener('mouseover', function(){
    for(i = 0; i<aboutText.length; i++){
        aboutText[i].setAttribute('class', 'text-block text-info animate__animated animate__flash')
    }
    
});
about.addEventListener('mouseout', function(){
    for(i = 0; i<aboutText.length; i++){
        aboutText[i].setAttribute('class', 'text-block')
    }
});
</script>
<script>
  //Login or Register
const inn = document.querySelector('#inn');
const inntext1 = document.querySelector('#inntext1')
const inntext2 = document.querySelector('#inntext2')
const innmessage = document.querySelector('#inmessage')

inn.addEventListener('mouseover', function(){
    inn.setAttribute('class', 'card-service wow fadeInUp bg-info')
    inntext1.style = 'color:green; text-decoration:none; font-weight:bold;'
    inntext2.style = 'color:green; text-decoration:none; font-weight:bold'
    // innmessage.style.display = 'block'
});
inn.addEventListener('mouseout', function(){
    inn.setAttribute('class', 'card-service wow fadeInUp')
    inntext1.style = 'color:blue; text-decoration:none'
    inntext2.style = 'color:blue; text-decoration:none'
    inn.style = 'color:black'
    innmessage.style.display = 'none'
}); 

//Appointment
const appnt = document.querySelector('#appnt')
const appmessage = document.querySelector('#appmessage')
const apptext = document.querySelector('#apptext')

appnt.addEventListener('mouseover', function(){
    appnt.setAttribute('class', 'card-service wow fadeInUp bg-info')
    apptext.style = 'margin-left:10px; color:green; font-weight:bold'
    // appmessage.style.display = 'block'
})

appnt.addEventListener('mouseout', function(){
    appnt.setAttribute('class', 'card-service wow fadeInUp')
    apptext.style = 'margin-left:10px'
    appmessage.style.display = 'none'
})

//Notification
const notif = document.querySelector('#notif')
const notifmessage = document.querySelector('#notifmessage')
const notiftext = document.querySelector('#notiftext')

notif.addEventListener('mouseover', function(){
    notif.setAttribute('class', 'card-service wow fadeInUp bg-info')
    // notifmessage.style.display = 'block'
    notiftext.style = 'margin-left:10px; color:green; font-weight:bold'
});
notif.addEventListener('mouseout', function(){
    notif.setAttribute('class', 'card-service wow fadeInUp')
    notifmessage.style.display = 'none'
    notiftext.style = 'margin-left:10px'
});


//Navigation
const navItems = document.querySelectorAll('.nav-item');
for (var i = 0; i < navItems.length; i++) {
    (function(index) {
        navItems[index].addEventListener('mouseover', function() {
        navItems[index].setAttribute('class', 'nav-item active');
        });

        navItems[index].addEventListener('mouseout', function() {
        navItems[index].setAttribute('class', 'nav-item');
        });
    })(i);

    
}
</script>




</html>