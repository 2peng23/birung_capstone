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
			/* Add styling to the form */
			div.record-box1{
			  display: flex;
			  justify-content: space-between;
			  width: 100%;
			}
			div.record-box2{
			  display: flex;
			  justify-content: space-between;
			  width: 100%;
			}
			div.basics{
			  padding: 30px;
			  background-color: white;
			  width: 50%;
			  margin: 20px 20px ;
			  border: 1px solid black;
			  border-radius: 10px;
			  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			div.stats{
			  padding: 30px;
			  background-color: white;
			  width: 50%;
			  margin: 20px 20px ;
			  border: 1px solid black;
			  border-radius: 10px;
			  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			div.notes1{
			  padding: 30px;
			  background-color: white;
			  width: 50%;
			  margin: 20px 20px ;
			  border: 1px solid black;
			  border-radius: 10px;
			  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			div.notes2{
			  padding: 30px;
			  background-color: white;
			  width: 50%;
			  margin: 20px 20px ;
			  border: 1px solid black;
			  border-radius: 10px;
			  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			
		
			label {
			  font-size: 15px;
			  font-weight: bold;
			  display: block;
			  color: black;
			}
		
			input[type="text"], input[type="email"], input[type="number"],input[type="tel"],input[type="date"], select, textarea {
			  width: 100%;
			  font-size: 16px;
			  border-radius: 5px;
			  border: 2px solid #ccc;
			  color: black;
			  outline: none;
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
										<h2>Add Patient</h2>
									</header>
									<div class="features">
											@if(session()->has('message'))
								
													<div class="alert alert-success">
														<button type="button" class="close" data-dismiss="alert" style="width: 50px;">x</button>
														{{session()->get('message')}}
														
													</div>
								
												@endif
								
											<form action="{{url('save-ob-patient')}}" method="post" style=" width:100%;">
												@csrf
														  
													<div class="record-box1">
														  <div class="basics">
															<label>Basic Information</label><hr style="color:black;"><hr style="color:black;">
															<label>Name:</label>
															<input type="text" name="name2" required autocomplete="off" autofocus><br>
														
															<label>Email:</label>
															<input type="email" name="email2"  autocomplete="off"><br>
								
															<label>Age:</label>
															<input type="number" name="age2" required autocomplete="off"><br>
															  
															<label style="color:black;">Sex:</label>
															  <select name="sex2" required style="color:black;">
																<option value="" style="color:black;padding:1px;">Select</option>
																<option value="Male" style="color:black;padding:1px;">Male</option>
																<option value="Female" style="color:black;padding:1px;">Female</option>
															  </select><br>
															
															<label>Address:</label>
															<input type="text" name="address2" required autocomplete="off"><br>
								
															<label>Birthday:</label>
															<input type="date" name="bday2"  autocomplete="off"><br>
								
															<label>Contact Number:</label>
															<input type="number" pattern="[0-9]{11}" name="phone2"  autocomplete="off"><br>
														  </div>
								
														  <div class="stats">
															<label>Stats</label> <hr style="color:black;"><hr style="color:black;">
															<label>Height:</label>
															<input type="number" name="height2" placeholder="cm"  autocomplete="off"><br>
								
															<label>Weight:</label>
															<input type="number" name="weight2" placeholder="kg"  autocomplete="off"><br>
								
															<label>BMI:</label>
															<input type="text" name="bmi2"  autocomplete="off"><br>
								
															<label>BP:</label>
															<input type="text" name="bp2"  autocomplete="off"><br>
															
															<label>O2 Sat:</label>
															<input type="text" name="o2sat2"  autocomplete="off"><br>
															
															<label>HR:</label>
															<input type="text" name="hr2"  autocomplete="off"><br>
															
															<label>Temperature:</label>
															<input type="text" name="temp2"  autocomplete="off"><br>
														  </div>
													 </div>
												  <div class="record-box2">
													 <div class="notes1">
															<label>Diagnosis:</label>
															<textarea name="diag2" id="" cols="5" rows="1" autocomplete="off" style="color:black;height:100px"></textarea>
								
															<label>Prescriptions:</label>
															<textarea name="prec2" id="" cols="30" rows="10" autocomplete="off" style="color:black;height:100px"></textarea>
													 </div>
													 
													 <div class="notes2">
															<label>Notes:</label>
															<textarea name="notes2" id="" cols="30" rows="10" autocomplete="off" style="color:black;height:100px"></textarea>
													 </div>
												  </div>
															<div style="margin:20px 20px;">
																
																<input  type="submit"  style=" color:black; height:44px"> 
																<button style="width: 100px; height:45px;border-radius:10px;"><a href="{{url('obpatient-list')}}">Back</a></button>
																
															</div><br>
								
													
											</form>
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