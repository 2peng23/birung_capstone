<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>De Villa Birung Clinic</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./admin1/assets/css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
		<link rel="stylesheet" href="../assets/css/theme.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        
		<style>
			
			#menu li.active > a {
    background-color: pink;
    color: black;
}
			ul li ul {
          display: none; /* Hide the submenus by default */
        }
      
        ul li:hover > ul {
          display: block; /* Show the submenu on hover */
          animation: slide-down 0.3s ease;
        }
      
        @keyframes slide-down {
          from {
            opacity: 0;
            transform: translateY(-10px);
          }
          to {
            opacity: 1;
            transform: translateY(0);
          }
        }
			/* Add some initial styling to the article elements */
			article {
			  border:2px solid black;
			  height:180px;
			  border-radius:20px;
			  display:flex;
			  justify-content:space-between;
			  align-items:center;
			  position: relative;
			  overflow: hidden;
			}
			article h1 {
			  position:absolute;
			  top:20%;
			  left:42%;
			  font-size:40px;
			}
			article span {
			  font-size: 100px;
			  margin-left:50px;
			}
			article div {
			  margin-right:220px;
			  font-size:40px;
			  margin-top:40px;
			}
			article a {
			  position:absolute;
			  bottom:10px;
			  right:10px;
			  font-size:30px;
			  opacity: 0;
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
  position: relative;
  width: 40px;
  height: 60px;
  animation: heartBeat 1.2s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
}

.loader:before,
.loader:after {
  content: "";
  background: #ff3d00 ;
  width: 40px;
  height: 60px;
  border-radius: 50px 50px 0 0;
  position: absolute;
  left: 0;
  bottom: 0;
  transform: rotate(45deg);
  transform-origin: 50% 68%;
  box-shadow: 5px 4px 5px #0004 inset;
}
.loader:after {
  transform: rotate(-45deg);
}
@keyframes heartBeat {
  0% { transform: scale(0.95) }
  5% { transform: scale(1.1) }
  39% { transform: scale(0.85) }
  45% { transform: scale(1) }
  60% { transform: scale(0.95) }
  100% { transform: scale(0.9) }
}
		  </style>
	</head>
	<body class="is-preload">
		<!-- Loader -->
		<div class="loadScreen bg-dark container-fluid" >
			<span class="loader"></span>
		</div>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							@include('admin.header')
							
							

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Dashboard</h2>
									</header>
									<div class="features">
										<article style="border:2px solid black;height:180px;border-radius:20px;display:flex; justify-content:space-between;align-items:center;">
                                            <h1 style="position:absolute;top:0;left:42%;font-size:40px;">Doctor</h1>
											<span class="fa fa-user-md" style="font-size: 100px;margin-left:50px"></span>
											<div>
												<h1 style="margin-right:220px;font-size:40px;margin-top:40px;">{{$doctor}}</h1>
											</div>
                                            <a href="{{url('showdoctor')}}" style="position:absolute; bottom:10px; right:10px;font-size:30px;" class="text-center wow fadeInUp">View</a>
										</article>
										<article style="border:2px solid black;height:180px;border-radius:20px;display:flex; justify-content:space-between;align-items:center;">
                                            <h1 style="position:absolute;top:0;left:42%;font-size:40px;">Staff</h1>
											<span class="fa fa-female" style="font-size: 100px;margin-left:50px"></span>
											<div>
												<h1 style="margin-right:220px;font-size:40px;margin-top:40px;">{{$staff}}</h1>
											</div>
                                            <a href="{{url('staff')}}" style="position:absolute; bottom:10px; right:10px;font-size:30px;" class="text-center wow fadeInUp">View</a>
										</article>
                                        <article style="border:2px solid black;height:180px;border-radius:20px;display:flex; justify-content:space-between;align-items:center;">
                                            <h1 style="position:absolute;top:0;left:42%;font-size:20px;">Internal Medicine <br> Patient</h1>
											<span class="fa fa-user" style="font-size: 100px;margin-left:50px"></span>
											<div>
												<h1 style="margin-right:220px;font-size:40px;margin-top:40px;">{{$intpatient}}</h1>
											</div>
                                            <a href="{{url('intpatient-list')}}" style="position:absolute; bottom:10px; right:10px;font-size:30px;" class="text-center wow fadeInUp">View</a>
										</article>
                                        <article style="border:2px solid black;height:180px;border-radius:20px;display:flex; justify-content:space-between;align-items:center;">
                                            <h1 style="position:absolute;top:0;left:42%;font-size:20px;">Ob- Gyne <br> Patient</h1>
											<span class="fa fa-person-pregnant" style="font-size: 100px;margin-left:50px"></span>
											<div>
												<h1 style="margin-right:220px;font-size:40px;margin-top:40px;">{{$obpatient}}</h1>
											</div>
                                            <a href="{{url('obpatient-list')}}" style="position:absolute; bottom:10px; right:10px;font-size:30px;" class="text-center wow fadeInUp">View</a>
										</article>
                                        <article style="border:2px solid black;height:180px;border-radius:20px;display:flex; justify-content:space-between;align-items:center;">
                                            <h1 style="position:absolute;top:0;left:42%;font-size:30px;">Appointment</h1>
											<span class="fa fa-calendar" style="font-size: 100px;margin-left:50px"></span>
											<div>
												<h1 style="margin-right:220px;font-size:40px;margin-top:40px;">{{$appoint}}</h1>
											</div>
                                            <a href="{{url('showappointment')}}" style="position:absolute; bottom:10px; right:10px;font-size:30px;" class="text-center wow fadeInUp">View</a>
										</article>
									</div>
								</section>

							

						</div>
					</div>
					<div style="color: rgb(144, 232, 170)"></div>

				@include('admin.sidebar2')

			</div>

		<!-- Scripts -->
			@include('admin.script2')
			<script>
				//Loader
			  document.addEventListener('DOMContentLoaded', function(){
				  const loader = document.querySelector('.loadScreen')
				  loader.style = 'display:flex'
			  
				  function loaderTimeout(){
					  loader.style = 'display:none'
				  };
				  setInterval(loaderTimeout, 2000) //1.5second
			  });
			  </script>
			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			<script>
				$('article').hover(function() {
  // When the mouse enters the article element
  $(this).css('background-color', 'pink');
  $(this).find('span').animate({
    marginLeft: "0px"
  }, 400);
  $(this).find('div').animate({
    marginRight: "0px"
  }, 400);
  $(this).find('a').css('visibility', 'visible').animate({
    opacity: 1
  }, 400);
}, function() {
  // When the mouse leaves the article element
  $(this).css('background-color', 'transparent');
  $(this).find('span').animate({
    marginLeft: "50px"
  }, 400);
  $(this).find('div').animate({
    marginRight: "220px"
  }, 400);
  $(this).find('a').animate({
    opacity: 0
  }, 400, function() {
    $(this).css('visibility', 'hidden');
  });
});

			  </script>

	</body>
</html>