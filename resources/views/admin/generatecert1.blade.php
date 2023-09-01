<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        <base href="/public">
		<title>De Villa Birung Clinic</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./admin1/assets/css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
		<link rel="stylesheet" href="../assets/css/theme.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

        <style>
            body {
          font-family: Arial, sans-serif;
          color: black;
        }
        
        .print {
          margin: 0 auto;
          max-width: 800px;
          position: relative;
          z-index: 1;
          height: 100vh;
        }
        
        
        .container {
          text-align: center;
          margin-bottom: 10px;
        }
        
        .topper h1 {
          font-size: 24px;
          font-weight: bold;
          margin: 0;
        }
        
        .info h4 {
          font-size: 16px;
          margin: 0;
        }
        
        .cert h2 {
          font-size: 24px;
          font-weight: bold;
          text-align: center;
          margin: 20px 0;
        }
        
        
        
        .letter p {
          font-size: 16px;
          line-height: 1.5;
        }
        
        .letter span {
          margin-left:30px;
        }
        
        .imp, .rem {
          font-size: 18px;
          font-weight: bold;
          margin: 20px 0 10px;
          margin-top:50px;
        }
        
        
        .bro h4 {
          font-size: 18px;
          margin: 40px 0 0;
          text-align: center;
          border-top: 2px solid black;
          margin-top:100px;
        }
        
        .note p {
          font-size: 18px;
          margin-top: 20px;
        }
        
        .signed h4 {
          font-size: 18px;
          font-weight: bold;
          margin: 60px 0;
          text-align: right;
        }
            .dl{
              position: absolute;
              right: 5px;
              top: 20px;
              width: 15%;
              justify-content: space-between;
            }
            .dl button{
              height: 60px;
              width: 60px;
              border-radius: 20px;
            }
            .dl button:hover{
              background-color: aqua;
            }
            .img{
              position: absolute;
              bottom: 20%;
              left: 20%;
              opacity: 20%;
              border-radius: 50%;
            }
            
            
          </style>
	</head>
	<body class="is-preload" id="body">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							@include('admin.header')
							
							

							<!-- Section -->
								<section style="position: relative;">
									<header class="major">
										<h2>Medical Certificate</h2>
									</header>
									<div class="features">
										<div class="print" id="print" style="position: relative;">
                                            <div class="container">
                                              <div class="topper">
                                                <h3 class="text-uppercase">jefferson b. birung, md, fpcp <br> internal medicine</h3>
                                              </div>
                                              <div class="info">
                                                <h6 class="text-uppercase mt-3 font-weight-bold">
                                                    de villa - birung medical and ob-gyne clinic <br>
                                                    poblacion bansud oriental mindoro <br>
                                                    monday - saturday 8:00am - 5:00pm by Appointment
                                                </h6>
                                              </div>
                                            </div><hr>
                                          
                                            <div class="cert">
                                              <h5 class="text-end mt-3">Date: {{ date('F j, Y') }}</h5>
                                              <h2>MEDICAL CERTIFICATE</h2>
                                            </div>
                                            <div class="letter mt-5">
                                              <p>To whom it may concern:</p>
                                              <p> 
                                                <span> This is to certify that {{$data->name}}</span>,
                                                {{$data->age}} y/o, {{$data->sex}}, presently residing at {{$data->address}}, 
                                                consulted/was examined/treated/confined on/from {{ date('F d, Y', strtotime($data->updated_at)) }} for 
                                                _____________________________.
                                              </p>
                                          
                                              <h4 class="imp">Assessment/Impression:</h4>
                                              <p>________________________________________________________________________________________</p>
                                              <p>________________________________________________________________________________________</p> 
                                              <p class="imp-value"></p>
                                              
                                        <img src="../doctorimage/birung2.png" alt="" class="img">
                                              <h4 class="imp">Recommendation/s:</h4>
                                              <p class="ml-4"><i class="fas fa-square text-light border border-dark"></i> Fit to work</p>
                                              <p class="ml-4"><i class="fas fa-square text-light border border-dark"></i> Fit for __________________________________________</p>
                                              <p class="ml-4"><i class="fas fa-square text-light border border-dark"></i> Rest For _____day/s</p>
                                              <p class="ml-4"><i class="fas fa-square text-light border border-dark"></i> Referral to _______________________________________</p>



                                              <h4 class="rem">Remarks:</h4>
                                              <p>________________________________________________________________________________________</p>
                                              <p>________________________________________________________________________________________</p>
                                              <p class="rem-value"></p>
                                          
                                              <div class="bro mt-3">
                                                <p> <span>This</span>  certificate is being issued upon the request of the abovementioned name for whatever purpose it may serve, excluding legal matters.</p>
                                              </div>
                                              <div class="text-end mt-5">
                                                <h4 style="font-weight:bolder;">JEFFERSON B. BIRUNG, MD</h4>
                                                <p>License No. 0127727</p>
                                                <p>PTR No. 31612284</p>
                                              </div>
                                            </div>
                                          </div>
                                      
                                          <div class="dl">
                                      
                                            
                                      
                                          <button onclick="printNow()" class="fa-solid fa-print" id="printnow">
                                          </button>
                                      
                                            <a href="{{url('intpatient-list')}}" >
                                              <button class="fa-solid fa-angle-right"></button> 
                                            </a>
                                          
                                          
                                        </div>
									</div>
								</section>

							

						</div>
					</div>

				@include('admin.sidebar2')

			</div>

		<!-- Scripts -->
			@include('admin.script2')
            <script>
                function printNow(){
                  var data = document.getElementById('print').innerHTML;
                  document.getElementById('body').innerHTML = data;
                  window.print();
                }
              </script> 

	</body>
</html>