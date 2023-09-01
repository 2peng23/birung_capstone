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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
		<link rel="stylesheet" href="../assets/css/theme.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		
		<style>
			/* Define the animation */
  @keyframes shake {
    0% {
      transform: translateX(0);
    }
    10%, 30%, 50%, 70%, 90% {
      transform: translateX(2px);
    }
    20%, 40%, 60%, 80% {
      transform: translateX(5px);
    }
    100% {
      transform: translateX(0);
    }
  }

  /* Apply the animation to the image */
  div img {
    max-width: 100%;
    height: auto;
    animation: shake 1s ease-in-out infinite;
  }
			/* Style the form container */
			.form-container {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
    }
	.form-container2 {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
    }
	.form-container1 {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
    }
	.form-container1:hover{
		background-color: rgb(248, 191, 191);
		cursor: pointer;
		transform: scale(1.05);
		transition: transform 0.3s ease-in-out;
			}

			/* Style the form labels */
			label {
        display: block;
        margin-bottom: 5px;
    }
    /* Style the form inputs */
    input[type="text"], input[type="date"], input[type="time"], input[type="number"], textarea {
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 10px;
    }
    
    /* Style the form submit button on hover */
   
			 /* Add animation to the form */
			 @keyframes submit-animation {
        0% { transform: scale(1); }
        50% { transform: scale(1.2); }
        100% { transform: scale(1); }
    }
    /* Apply animation to the submit button */
    input[type="submit"] {
        animation: submit-animation 0.5s ease-in-out;
    }
			
			.table-responsive {
        height: 50px;
        overflow-y: scroll;
        scrollbar-width: thin; /* optional */
    }

    ::-webkit-scrollbar {
        width: 5px; /* optional */
    }

    ::-webkit-scrollbar-thumb {
        background-color: rgba(0, 0, 0, 0.3); /* optional */
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
										<h2>Emergency</h2>
									</header>
									<div class="features">
										@if(session()->has('message'))
                                    
                                    <div class="alert alert-success" >
                                        {{session()->get('message')}}
										<a type="button" class="close btn btn-danger text-danger" data-dismiss="alert" style="width: 50px;"><i class="fa fa-times"></i></a>
                                        
                                    </div>
                            
                                @endif
                                        <div  style="display: flex;">
                                    
								<div class="form-container">
								<form class="row" action="{{ url('add_emergency') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateTimeInputs()"> 
									@csrf
									<div class="col-sm-6">
										<label for="">Date</label>
										<input type="date" name="date" required> <br>
										<label for="">From</label>
										<input type="time" name="time_from" id="time_from" required>
										<label for="">To</label>
										<input type="time" name="time_to" id="time_to" required> <br>
										<input type="submit" value="Create Emergency">
									</div>
									<div class="col-sm-6">
										<label for="">Message</label>
										<textarea name="message" id="" cols="30" rows="8" placeholder="Enter Reason of Emergency..." required></textarea>
										{{-- <label for="">Duration Time of the Message <br> (in minutes)</label>
										<input type="number" name="duration">  --}}
										
									</div>
								</form>

							</div>
							<div>
								<img src="../doctorimage/emer1.png" alt="">
							</div>
								
									</div>
									@if(count($emerge)>0)
									<div style="display: flex;justify-content:space-between;width:100%;">
									<div style="margin-top:50px" class="form-container1">
										<h5>Current Emergency <br> <span style="font-size:12px"> (Please Delete Before Creating New Emergency)</span></h5> <br>
										@foreach ($emerge as $emerge1)
											<label for="">Reason of Emergency: {{$emerge1->message}}</label>
											<label for="">Date: {{ date('F d, Y', strtotime($emerge1->date)) }}</label>
											<label for="">Time: From {{date('g:ia', strtotime($emerge1->time_from))}} to {{date('g:ia', strtotime($emerge1->time_to))}}</label>
											<a href="{{url('delete-emergency', $emerge1->id)}}" onclick="return confirm('Are you sure yant to delete this?')" > 
												<i class="fa fa-trash " style="border-radius:20px;font-size:30px;"></i>
											</a>
										@endforeach
									</div>
									<div class="form-container2" style="margin-top:50px;width:80%;height:250px;overflow-y:scroll;">
										<h5>Patient(s) Who Received Feedback</h5> <br>
										<table class="table-responsive" >
											@foreach($feedback as $feed)
												<tr>
													<td>{{$feed->feedback}}</td>
												</tr> 
											@endforeach
										</table>
									</div>
									
									</div>
									@else
									<div style="display: none;"></div>
									@endif
									
                                            
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
				function validateTimeInputs() {
				  // Get the "From" and "To" input elements
				  var timeFrom = document.getElementById("time_from");
				  var timeTo = document.getElementById("time_to");
				
				  // Get the values of the input elements
				  var timeFromValue = timeFrom.value;
				  var timeToValue = timeTo.value;
				
				  // Compare the input values
				  if (timeFromValue === timeToValue) {
					// Display an error message
					alert("Time From should not be same as Time To");
					return false; // Prevent the form from being submitted
				  }
				
				  return true; // Allow the form to be submitted
				}
				</script>
				
				
				
				
				
				
			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			<script>
				$('article').hover(function() {
  // When the mouse enters the article element
  $(this).css('background-color', 'aquamarine');
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
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

	</body>
</html>