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

        <style type="text/css">
          button{
                text-decoration: none;
                cursor: pointer;
                border-radius: 20px;
                height: 30px;
            }
            button:hover{
                background-color:aquamarine; 
            }
            .doctor-info {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
  }
  .doctor-info:hover {
  background-color: rgb(248, 191, 191);
  cursor: pointer;
  transform: scale(1.05);
  transition: transform 0.3s ease-in-out;
}


  .doctor-img {
    max-width: 200px;
    max-height: 150px;
    width: auto;
    height: auto;
  }

  .doctor-details p {
    margin-bottom: 5px;
  }

  .doctor-details a {
    margin-right: 10px;
  }
    .schedule-item {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 10px;
    }

    .day {
        font-weight: bold;
    }

    .time, .slots {
        margin-left: 10px;
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
									<header class="major">
										<h2>Doctor</h2>
									</header>
										<div>
                                            <div style="display: flex;justify-content:space-between;">
                                                <a href="{{url('add_doctor_view')}}" class="btn btn-success">Add New Doctor  +</a>
                                            <a href="{{url('home')}}" class="btn btn-primary">Back</a>
                                        </div>
                                            
                                            <div style="margin: 40px auto;">
                                              <div class="row">
                                                  @foreach($doctor_data as $doctor)
                                                  <div class="col-md-6">
                                                      <div class="doctor-info">
                                                          <div class="row">
                                                              <div class="col-md-6">
                                                                  <img class="doctor-img" src="doctorimage/{{$doctor->image}}" >
                                                              </div>
                                                              <div class="col-md-6">
                                                                  <h2><strong>{{$doctor->name}}</strong></h2>
                                                              </div>
                                                              
                                                          </div>
                                                          <div class="row">
                                                              <div class="col-md-12 doctor-details">
                                                                  <p><strong>Phone Number:</strong> {{$doctor->phone}}</p>
                                                                  <p><strong>Email:</strong> {{$doctor->email}}</p>
                                                                  <p><strong>Specialty:</strong> {{$doctor->specialty}}</p>
                                                                  <div style="display: flex;justify-content:space-between;">
                                                                  <p>
                                                                    <strong>
                                                                        Dates:  </strong><br>
                                                                        @if(isset($doctor->date1))
                                                                        {{ date('F d, Y', strtotime($doctor->date1)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->date2))
                                                                        {{ date('F d, Y', strtotime($doctor->date2)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->date3))
                                                                        {{ date('F d, Y', strtotime($doctor->date3)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->date4))
                                                                        {{ date('F d, Y', strtotime($doctor->date4)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->date5))
                                                                        {{ date('F d, Y', strtotime($doctor->date5)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->date6))
                                                                        {{ date('F d, Y', strtotime($doctor->date6)) }} <br>
                                                                        @endif
                                                                        
                                                                   
                                                                    </p>

                                                                    <p>
                                                                        <strong>
                                                                            From: </strong> <br>
                                                                            @if(isset($doctor->time_from1))
                                                                            {{ date('h:ia', strtotime($doctor->time_from1)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->time_from2))
                                                                            {{ date('h:ia', strtotime($doctor->time_from2)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->time_from3))
                                                                            {{ date('h:ia', strtotime($doctor->time_from3)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->time_from4))
                                                                            {{ date('h:ia', strtotime($doctor->time_from4)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->time_from5))
                                                                            {{ date('h:ia', strtotime($doctor->time_from5)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->time_from6))
                                                                            {{ date('h:ia', strtotime($doctor->time_from6)) }} <br>
                                                                        @endif
                                                                        
                                                                        
                                                                    </p>

                                                                    <p>
                                                                        <strong>
                                                                            To: </strong> <br>
                                                                            @if(isset($doctor->time_to1))
                                                                            {{ date('g:i a', strtotime($doctor->time_to1)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->time_to2))
                                                                            {{ date('g:i a', strtotime($doctor->time_to2)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->time_to3))
                                                                            {{ date('g:i a', strtotime($doctor->time_to3)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->time_to4))
                                                                            {{ date('g:i a', strtotime($doctor->time_to4)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->time_to5))
                                                                            {{ date('g:i a', strtotime($doctor->time_to5)) }} <br>
                                                                        @endif
                                                                        
                                                                        @if(isset($doctor->time_to6))
                                                                            {{ date('g:i a', strtotime($doctor->time_to6)) }} <br>
                                                                        @endif
                                                                        
                                                                        
                                                                    </p>

                                                                    </div>
                                                                  <p>
                                                                      <a class="btn btn-primary" href="{{url('editdoctor', $doctor->id)}}" >Update</a>
                                                                      <a class="btn btn-danger" href="{{url('deletedoctor', $doctor->id)}}" onclick="return confirm('Are you sure you want to delete this?')">Delete</a>
                                                                  </p>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  @endforeach 
                                              </div>
                                          </div>
                                          
                                          
                                            
                                              
                                     </div>

							

						</div>
					</div>

				@include('admin.sidebar2')

			</div>

		<!-- Scripts -->
			@include('admin.script2')

            

	</body>
</html>