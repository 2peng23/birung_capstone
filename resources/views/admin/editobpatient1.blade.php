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
            .record-box1{
              display: flex;
              justify-content: space-between;
              width: 100%;
              margin: 0 auto;
            }
            div.record-box2{
              display: flex;
              justify-content: space-between;
              width: 100%;
              margin: 0 auto;
            }
            .basics{
              padding: 5px 5px;
              background-color: white;
              width: 50%;
              margin: 20px 20px ;
              border-radius: 10px;
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .stats{
              padding: 5px 5px;
              background-color: white;
              width: 50%;
              margin: 20px 20px ;
              border-radius: 10px;
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            div.notes1{
              padding: 5px 5px;
              background-color: white;
              width: 50%;
              margin: 20px 20px ;
              border-radius: 10px;
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
              color: black;
            }
            div.notes2{
              padding: 5px 5px;
              background-color: white;
              width: 50%;
              margin: 20px 20px ;
              border-radius: 10px;
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
              color: black;
            }
            
        
            label {
              font-size: 15px;
              font-weight: bold;
              color: black;
            }
        
            input[type="text"], input[type="email"], input[type="number"],input[type="date"], select, textarea {
              width: 100%;
              height:40px;
              font-size: 16px;
              border-radius: 5px;
              border: 1px solid #ccc;
              color: black;
            }
        
            
        
            input[type="submit"]:hover {
              background-color: aqua;
            }
            input[type="submit"] {
              color: white;
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
										<h2>Update Patient's Information</h2>
									</header>
									<div class="features">
                                            @if(session()->has('message'))
                                
                                                    <div class="alert alert-success" style="margin-left:30px">
                                                      <button type="button" class="close" data-dismiss="alert" style="width: 50px;">x</button>
                                                        {{session()->get('message')}}
                                                        
                                                    </div>
                                
                                                @endif
                                
                                       
                                            <form action="{{url('patientobupdate', $data2->id)}}" method="post" enctype="multipart/form-data" style=" width:100%;" >
                                                @csrf
                                                
                                                <div class="record-box1">
                                                  <div class="basics">
                                                    <label>Basic Information</label><hr style="color:black;"><hr style="color:black;">
                                                    <label>Name:</label>
                                                    <input type="text" name="name2" required autocomplete="off"  value="{{$data2->name2}}"><br>
                                                
                                                    <label>Email:</label>
                                                    <input type="email" name="email2"  autocomplete="off" value="{{$data2->email2}}"><br>
                                
                                                    <label>Age:</label>
                                                    <input type="number" name="age2" required autocomplete="off" value="{{$data2->age2}}"><br>
                                                      
                                                    <label style="color:black;">Sex:</label>
                                                    <input type="text" name="sex2" required autocomplete="off" value="{{$data2->sex2}}" ><br>
                                                    
                                                    <label>Address:</label>
                                                    <input type="text" name="address2" required autocomplete="off" value="{{$data2->address2}}"><br>
                                
                                                    <label>Birthday:</label>
                                                    <input type="date" name="bday2"  autocomplete="off" value="{{$data2->bday2}}"><br>
                                
                                                    <label>Contact Number:</label>
                                                    <input type="number" pattern="[0-9]{11}" name="phone2"  autocomplete="off" value="{{$data2->phone2}}"><br>
                                                  </div>
                                
                                                  <div class="stats">
                                                    <label>Stats</label> <hr style="color:black;"><hr style="color:black;">
                                                    <label>Height:</label>
                                                    <input type="number" name="height2" placeholder="cm"  autocomplete="off" value="{{$data2->height2}}"><br>
                                
                                                    <label>Weight:</label>
                                                    <input type="number" name="weight2" placeholder="kg"  autocomplete="off" value="{{$data2->weight2}}"><br>
                                
                                                    <label>BMI:</label>
                                                    <input type="text" name="bmi2"  autocomplete="off" value="{{$data2->bmi2}}"><br>
                                
                                                    <label>BP:</label>
                                                    <input type="text" name="bp2"  autocomplete="off" value="{{$data2->bp2}}"><br>
                                                    
                                                    <label>O2 Sat:</label>
                                                    <input type="text" name="o2sat2"  autocomplete="off" value="{{$data2->o2sat2}}"><br>
                                                    
                                                    <label>HR:</label>
                                                    <input type="text" name="hr2"  autocomplete="off" value="{{$data2->hr2}}"><br>
                                                    
                                                    <label>Temperature:</label>
                                                    <input type="text" name="temp2"  autocomplete="off" value="{{$data2->temp2}}"><br>
                                                  </div>
                                             </div>
                                
                                        <div class="record-box2">
                                              <div class="notes1">
                                                     <label>Diagnosis:</label>
                                                     <textarea name="diag2" id="" cols="5" rows="1" autocomplete="off" style="color:black;height:100px">{{$data2->diag2}}</textarea>
                                
                                                     <label>Prescriptions:</label>
                                                     <textarea name="prec2" id="" cols="30" rows="10" autocomplete="off" style="color:black;height:100px" >{{$data2->prec2}}</textarea>
                                              </div>
                                              
                                              <div class="notes2">
                                                     <label>Notes:</label>
                                                     <textarea name="notes2" id="" cols="30" rows="10" autocomplete="off" style="color:black;height:100px;" >{{$data2->notes2}}</textarea>
                                              </div>
                                        </div>
                                                
                                
                                                    <div style="width:90%;margin:auto;">
                                                        
                                                        <input  type="submit" style="width:100px;height:50px;border-radius:10px;margin-bottom:2px;"> 
                                                        <button  style="width: 100px; border-radius:10px; height:50px;"><a href="{{url('obpatient-list')}}">Back</a></button>
                                                        
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