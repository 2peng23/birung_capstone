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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
		<link rel="stylesheet" href="../assets/css/theme.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

        <style>
            .card-container{
              width: 80%;
              margin: 0px auto;
            }
            .doctor-box1{
                width: 100%;
                padding: 30px 30px;
                background-color: white;
                margin: -60px 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                margin: 20px 20px 20px 40px;
              }
              
              
              .sched{
                width: 100%;
                padding: 30px 30px;
                background-color: white;
                margin: -60px 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                margin: 20px 20px 20px 40px;
              }
              .sched1, .sched2, .sched3, .sched4, .sched5, .sched6{
                justify-content: space-evenly;
                display: flex;
                padding: 10px 30px;
                background-color: white;
                margin: 0 20px ;
                width: 100%;
                margin: auto;
              }
              
              
              
                form {
                padding-top: 0;
                margin: 40px 20px ;
                
              }
          
              label {
                font-size: 18px;
                font-weight: bold;
                margin-top: 10px;
                display: block;
                color: black;
              }
          
              input[type="text"], input[type="email"], input[type="number"],input[type="tel"],input[type="date"], select, textarea,option {
                width: 100%;
                padding: 1px;
                margin-top: 1px;
                font-size: 16px;
                border-radius: 5px;
                border: 1px solid #ccc;
                color: black;
                height: 40px;
              }
              
          
              
          
              input[type="submit"]:hover {
                background-color: aqua;
              }
              input[type="submit"] {
                color: white;
              }
              button:hover{
                background-color: aqua;
              }
        
        
          </style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							@include('admin.header')
							
							

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Add Staff</h2>
									</header>
									<div class="features">
										<div class="card-container">
                                            @if(session()->has('message'))
                                                <div class="alert alert-success" style="margin-left:60px;">
                                                  <button type="button" class="close" data-dismiss="alert" style="width: 50px;">x</button>
                                                    {{session()->get('message')}}
                                                    
                                                </div>
                                            @endif
                                          
                                        
                                            <form action="{{url('upload_staff')}}" method="POST" enctype="multipart/form-data" >
                                        
                                            @csrf
                                                <div class="doctor-box1"> 
                                                    <label>Staff's Name:</label>
                                                    <input type="text" name="name" required autocomplete="off" autofocus required><br>
                                        
                                                    <div >
                                                      <label>Staff's Image</label>
                                                      <input type="file" name="file" required  style="color:black; margin-top:10px;">
                                                    </div>
                                        
                                                    <div >
                                                      <label>Phone Number</label>
                                                      <input type="number" pattern="[0-9]{11}" name="phone" style="color:black; margin-top:10px;">
                                                    </div>
                                        
                                                    <div >
                                                      <label>Role</label>
                                                      <input type="text"  name="role" value="Secretary" style="color:black; margin-top:10px;" readonly>
                                                    </div>
                                                </div> 
                                        
                                                    <div style="margin-top:10px; margin-left:40px;">
                                                                
                                                    <input type="submit"  style="color:white;">
                                                    <button style="width:110px; height:45px;border-radius:10px;"><a href="{{url('staff')}}">Back</a></button>
                                                    </div>
                                            </form>
                                            </div>
									</div>
								</section>

							

						</div>
					</div>

				@include('admin.sidebar2')

			</div>

		<!-- Scripts -->
			@include('admin.script2')
      <script src="../assets/js/bootstrap.bundle.min.js"></script>

	</body>
</html>