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
        }
        
        
        .container {
          text-align: center;
          margin-bottom: 20px;
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
        
        .letter {
          margin-top: 20px;
        }
        
        .letter p {
          font-size: 16px;
          line-height: 1.5;
          margin-bottom: 20px;
        }
        
        .letter span {
          margin-left:30px;
        }
        
        .imp, .rem {
          font-size: 18px;
          font-weight: bold;
          margin: 20px 0 10px;
          margin-top:100px;
        }
        .rem{
          margin-top:100px;
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
              left: 16%;
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
										<div class="print" id="print">
                                            <div class="container">
                                              <div class="topper">
                                                <h1>DE VILLA - BIRUNG MEDICAL AND OB-GYNE CLINIC</h1>
                                              </div>
                                              <div class="info">
                                                <h4>
                                                  Poblacion, Bansud, Oriental Mindoro <br>
                                                  Monday - Saturday 8am - 5pm, by appointment <br>
                                                  09654202382 / 09480265720
                                                </h4>
                                              </div>
                                            </div>
                                          
                                            <div class="cert">
                                              <h2>MEDICAL CERTIFICATE</h2>
                                            </div>
                                            <div class="letter">
                                              <p> 
                                                <span> This is to certify that {{$data2->name2}}</span>,
                                                {{$data2->age2}} y/o, {{$data2->sex2}}, and resident of {{$data2->address2}} 
                                                was seen and examined in our clinic last {{ date('F d, Y', strtotime($data2->updated_at)) }}.
                                              </p>
                                          
                                              <h4 class="imp">Diagnosis: <p style="margin: 20px;">{{$data2->diag2}}</p></h4>
                                              <p class="imp-value"></p>
                                              
                                        <img src="../doctorimage/birung2.png" alt="" class="img">
                                          
                                              <h4 class="rem">Remarks: <p style="margin:20px;">{{$data2->prec2}} <br> {{$data2->notes2}}</p></h4>
                                              <p class="rem-value"></p>
                                          
                                              <div class="bro">
                                                <h4> <strong > NOTHING FOLLOWS </strong></h4>
                                              </div>
                                              <div class="note">
                                                <p><span>Note:</span> Not for medico-legal purposes.</p>
                                              </div>
                                              <div class="signed">
                                                <h4>FRANCESS CARMEL BIRUNG, MD</h4>
                                              </div>
                                            </div>
                                          </div>
                                      
                                          <div class="dl">
                                      
                                            
                                      
                                          <button onclick="printNow()" class="fa-solid fa-print" id="printnow">
                                          </button>
                                      
                                            <a href="{{url('obpatient-list')}}" >
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
                  window.close();
                }
              </script> 

	</body>
</html>