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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
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

        .clock{
          position:absolute;
          top: 0;
          right: 0;
          width: 180px;
          height: 180px;
          border: solid 2px black;
          border-radius: 50%;
        }
        .clock .number{
          --rotation:0;
          position: absolute;
          width: 100%;
          height: 100%;
          text-align: center;
          transform: rotate(var(--rotation));
          font-weight: bolder;
        }
        .clock .number1{--rotation: 30deg;}
        .clock .number2{--rotation: 60deg;}
        .clock .number3{--rotation: 90deg;}
        .clock .number4{--rotation: 120deg;}
        .clock .number5{--rotation: 150deg;}
        .clock .number6{--rotation: 180deg;}
        .clock .number7{--rotation: 210deg;}
        .clock .number8{--rotation: 240deg;}
        .clock .number9{--rotation: 270deg;}
        .clock .number10{--rotation: 300deg;}
        .clock .number11{--rotation: 330deg;}


        .clock .hand{
          --rotation: 0;
          position: absolute;
          left: 50%;
          bottom: 50%;
          background-color:black;
          transform: translateX(-50%) rotate(calc(var(--rotation) * 1deg));
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;
          transform-origin: bottom;
          z-index: 10;
        }

        .clock::after{
          content: '';
          position: absolute;
          background-color: black;
          z-index: 11;
          width: 15px;
          height: 15px;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          border-radius: 50%;
        }
        .clock .hand.second{
          width: 3px;
          height: 45%;
          background-color: red;
        }
        .clock .hand.minute{
          width: 7px;
          height: 40%;
          background-color: black;
        }
        .clock .hand.hour{
          width: 9px;
          height: 30%;
          background-color: black;
        }
        .text-muted {
  font-size: 18px;
  line-height: 1.5;
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
.loadScreen{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999; /* make sure the overlay is on top of other elements */
            display: flex;
            justify-content: center;
            align-items: center
        }
        .loader {
  width: 32px;
  height: 90px;
  display: block;
  margin: 20px auto;
  position: relative;
  border-radius: 50% 50% 0 0;
  border-bottom: 10px solid #FF3D00;
  background-color: #FFF;
  background-image: radial-gradient(ellipse at center, #FFF 34%, #FF3D00 35%, #FF3D00 54%, #FFF 55%), linear-gradient(#FF3D00 10px, transparent 0);
  background-size: 28px 28px;
  background-position: center 20px , center 2px;
  background-repeat: no-repeat;
  box-sizing: border-box;
  animation: animloaderBack 1s linear infinite alternate;
}
.loader::before {
  content: '';  
  box-sizing: border-box;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  width: 64px;
  height: 44px;
  border-radius: 50%;
  box-shadow: 0px 15px #FF3D00 inset;
  top: 67px;
}
.loader::after {
  content: '';  
  position: absolute;
  left: 50%;
  transform: translateX(-50%) rotate(45deg);
  width: 34px;
  height: 34px;
  top: 112%;
  background: radial-gradient(ellipse at center, #ffdf00 8%, rgba(249, 62, 0, 0.6) 24%, rgba(0, 0, 0, 0) 100%);
  border-radius: 50% 50% 0;
  background-repeat: no-repeat;
  background-position: -44px -44px;
  background-size: 100px 100px;
  box-shadow: 4px 4px 12px 0px rgba(255, 61, 0, 0.5);
  box-sizing: border-box;
  animation: animloader 1s linear infinite alternate;
}

@keyframes animloaderBack {
  0%, 30%, 70% {
    transform: translateY(0px);
  }
  20%, 40%, 100% {
    transform: translateY(-5px);
  }
}

@keyframes animloader {
  0% {
    box-shadow: 4px 4px 12px 2px rgba(255, 61, 0, 0.75);
    width: 34px;
    height: 34px;
    background-position: -44px -44px;
    background-size: 100px 100px;
  }
  100% {
    box-shadow: 2px 2px 8px 0px rgba(255, 61, 0, 0.5);
    width: 30px;
    height: 28px;
    background-position: -36px -36px;
    background-size: 80px 80px;
  }
}
.infinite{
  animation-iteration-count: infinite;
}
      

  </style>
</head>
<body>
  <!-- Loader -->
  <div class="loadScreen bg-dark container-fluid" >
    <div class=" animate__animated animate__bounceOutUp">
      <span class="loader"></span>
    </div>
  </div>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
     <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow" >
      <div class="container" >
        <h1 class="navbar-brand">
          <span class="text-primary">DE VILLA - BIRUNG</span> CLINIC<span id="status" class="animate__animated animate__shakeY infinite"></span> <br>
          <span style="font-size:10px">MONDAY - SATURDAY</span> <br>
          <span style="font-size:13px">8:00 am - 4:00 pm</span>
        </h1> 

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home</a>
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

  @if(session()->has('message'))

                    <div class="alert alert-success">
                        
                        {{session()->get('message')}}
                        
                    </div>

                @endif

                <div class="page-hero bg-image overlay-dark" id="bgg"  style="background-image: url(../assets/img/bg_image_3.jpg);">
    
                  <div class="hero-section" >
                    <div class="container text-center wow zoomIn">
                      <h1 class="display-4 text-light" id="t1">DE VILLA - BIRUNG</h1>
                      <h2 style="font-size:30px; margin-top:-20px" id="t2">Internal Medicine and Ob-Gyne Services</h2> <br>
                      <a href="#doctor" class="btn btn-primary">Make An Appointment Now!</a>
                    </div>
                  </div>
                </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Login</span> or Register Now!</p> 
            </div>
          </div>
          
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p>Online Appointment</p>
            </div>
          </div>

          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-success text-white">
                <span class="fa-solid fa-envelope"></span>
              </div>
              <h5 style="margin-left:10px">Email and SMS Notification</h5>
            </div>
          </div>

          

        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0" id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <div class="text-block" >
              <h2 class="section-heading mb-3 fs-3" id="d-text">Welcome to De Villa - Birung Medical Clinic</h2>
              <h5 class="accordion-title fs-5" id="d-text">FAQs</h5>
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
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  @include('user.doctor')
  @include('user.staff')

  
  </div> 
  @include('user.news')

  

  <!-- .-->
  </div> <!-- .page-section -->

  
  </div>
   @include('user.footer') 
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
  setInterval(setClock, 1000)
    const hourHand = document.querySelector('[data-hour-hand]')
    const minuteHand = document.querySelector('[data-minute-hand]')
    const secondHand = document.querySelector('[data-second-hand]')

  function setClock(){
    

    const currentDate = new Date()
    const secondsRatio = currentDate.getSeconds() / 60
    const minutesRatio = (secondsRatio + currentDate.getMinutes()) / 60
    const hoursRatio = (minutesRatio + currentDate.getHours()) / 12

    setRotation(hourHand, hoursRatio)
    setRotation(minuteHand, minutesRatio)
    setRotation(secondHand, secondsRatio)
  }
  function setRotation(element, rotationRatio){
    element.style.setProperty('--rotation', rotationRatio *360)
  }
  setClock()
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
        aboutText[i].setAttribute('class', 'section-heading mb-3 fs-4 text-info animate__animated animate__flash')
    }
    
});
about.addEventListener('mouseout', function(){
    for(i = 0; i<aboutText.length; i++){
        aboutText[i].setAttribute('class', 'section-heading mb-3 fs-4')
    }
});
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
<script src="../assets/js/jquery-3.5.1.min.js"></scrip>

<script src="../assets/js/main.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
<script>
  //Loader
document.addEventListener('DOMContentLoaded', function(){
    const loader = document.querySelector('.loadScreen')
    loader.style = 'display:flex'

    function loaderTimeout(){
        loader.style = 'display:none'
    };
    setInterval(loaderTimeout, 700) //1.5second
});
</script>

  
</body>
</html>