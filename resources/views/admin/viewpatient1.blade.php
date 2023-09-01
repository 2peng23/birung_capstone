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
            *{
              margin: 0;
              padding: 0;
              font-family: 'Open Sans', sans-serif;
            }
            .container {
              margin: 20px auto;
            }
            h1 {
              font-weight: 600;
              text-align: center;
              margin-bottom: 40px;
              color: black;
              border-bottom: 2px solid lightgray;
            }
            .card {
                margin-top:20px; 
              background-color: white;
              box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
              border-radius: 10px;
              padding: 0 40px;
              text-align: left;
              margin-bottom: 40px;
              color: black;
            }
            .card .info{
              display: flex;
              justify-content: space-between;
              margin: 0 6%;
            }
            .card h2 {
              font-weight: 400;
              margin-bottom: 20px;
              margin-left: 38%;
            }
            .card p {
              font-weight: 400;
              margin-bottom: 20px;
            }
            .card .section {
              border-top: 1px solid lightgray;
              padding-top: 40px;
              margin-top: 40px;
            }
            .dl{
              position: absolute;
              right: 5px;
              top: 20px;
              width: 15%;
              justify-content: space-between;
            }
            .dl button{
              border-radius: 20px;
              height: 60px;
              width: 60px;
            }
            .dl button:hover{
              background-color: aqua;
            }
            .cert{
                width: 100%;
                text-align: center;
            }
            .cert a{
              margin-bottom: 20px;
              color: black;
              text-decoration: none;
            }
            .cert a:hover{
              background-color: greenyellow;
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
								<section  style="position: relative;">
									<header class="major">
										<h2>Patient's Details</h2>
									</header>
									<div class="features">
										<div class="container" id="print">
                                        <div class="card">
                                        <h1>DE VILLA - BIRUNG <br> <span style="font-size:15px;"> MEDICAL AND OB-GYNE CLINIC </span></h1>
                                        <h2>Patient Information</h2>
                                            <div class="info">
                                                <div class="basics">
                                                    <p>Name: {{$data->name}}</p>
                                                    <p>Email: {{$data->email}}</p>
                                                    <p>Age: {{$data->age}}</p>
                                                    <p>Sex: {{$data->sex}}</p>
                                                    <p>Address: {{$data->address}}</p>
                                                    <p>Birthday: {{$data->bday}}</p>
                                                    <p>Contact Number: {{$data->phone}}</p>
                                                </div>
                                                <div class="stats">
                                                    <p>Height: {{$data->height}}</p>
                                                    <p>Weight: {{$data->weight}}</p>
                                                    <p>BMI: {{$data->bmi}}</p>
                                                    <p>BP: {{$data->bp}}</p>
                                                    <p>O2 Sat: {{$data->o2sat}}</p>
                                                    <p>HR: {{$data->hr}}</p>
                                                    <p>Temperature: {{$data->temp}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                        <h2>Medical Information</h2>
                                        <p>Diagnosis: {{$data->diag}}</p>
                                        <p>Prescription: {{$data->prec}}</p>
                                        <p class="section" id="print">Notes: {{$data->notes}}</p>
                                        </div>
                                    </div>
                                    
                                    <div class="cert">
                                        <a href="{{url('generatecert', $data->id)}}" class="btn btn-success" style="color: black;">Generate Medical Certificate</a>
                                    </div>
                                    
                                        <div class="dl">

                                            

                                        <button onclick="printNow()" class="fa-solid fa-print">
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
                  window.print(data);
                }
              </script>

	</body>
</html>