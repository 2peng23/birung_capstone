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

        <style type="text/css">
			#menu li.active > a {
    background-color: pink;
    color: black;
}
            

              p {
                  display: block;
                  margin-top: 30px;
                  margin-right: 40px;
                  text-align: center;
              }

            th{
                
                padding:0 25px;
                color:black;   
                text-align:center;
                border:3px solid  black; 
                height: 50px;
               }
               tr{
                height: 50px;
               }
            td
            {
                border:solid;
                border-color:black;
            }
            button:hover{
                background-color: aquamarine;
            }
            button{
                border-radius: 20px;
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
									<header class="row pb-4" >
										<h1 class="col-sm-10" style="font-size: 25px">Appointment</h1>
                                        <a href="{{url('home')}}" style="width:80px" class="btn btn-primary col-sm-2">Back</a>
									</header>
									<div class="features">
										<div class="text-center">
                                            @if(session()->has('message')) 
                                    
                                                        <div class="alert alert-success">
                                                            {{session()->get('message')}}
                                                <a type="button" class="close btn btn-danger text-danger" data-dismiss="alert" style="width: 50px;"><i class="fa fa-times"></i></a>
                                                            
                                                        </div>
                                    
                                                    @endif
                                                  </div>
                                                  
                                                
                                                  
                                              <div>
                                                @if($appointment_data->isEmpty())
                                                <p>No data available.</p>
                                            @else
                                            <form method="GET" action="{{ url('/showappointment') }}">
                                              <input type="number" name="pagesize" id="" required placeholder="Pagination" style="width:130px">
                                              <input type="submit" value="Submit" hidden>
                                          </form>
                                              
                                          <div>
                                            <a href="{{url('emergency')}}" class="btn btn-danger"><i class="fas fa-exclamation-triangle"></i> Create an Emergency</a>
                                          </div>
                                          @if($errors->has('pagesize'))
                                              <div class="alert alert-danger">{{ $errors->first('pagesize') }}</div>
                                          @endif
                                                
                                                <table style="margin-top:30px; margin-right:40px;text-align:center;" id="appointments-table" class="rounded">
                                                    <tr>
                                                        <th style="text-align: center;">Customer's Name</th>
                                                        <th style="text-align: center;">Date</th>
                                                        <th style="text-align: center;">Message</th>
                                                        <th style="text-align: center;">Appointment Created</th> 
                                                        <th style="text-align: center;">Status</th>
                                                        <th style="text-align: center;">Action</th>
                                                    </tr>
                                                    @foreach($appointment_data as $data)
                                                        <tr>
                                                            <td style="color: black;">{{$data->name}}</td>
                                                            <td style="color: black;">{{ date('F d, Y', strtotime($data->date)) }} <br> {{ $data->slot }}</td>
                                                            <td style="color: black; text-align:center;">{{$data->message}}</td>
                                                            <td style="color: black;">{{ date('F d, Y h:ia', strtotime($data->created_at)) }}</td>
                                                            <td style="color: black;">
                                                              @if($data->status === 'Denied')
                                                              <p style="background-color:red">{{$data->status}}</p>
                                                              @elseif($data->status ==='Approved')
                                                              <p style="background-color:green;">{{$data->status}}</p>
                                                              @else {{$data->status}}
                                                              @endif
                                                            </td>
                                                            <td>
                                                                @if($data->status != 'Denied' && $data->status != 'Approved')
                                                                    <a class="btn btn-success" href="{{ url('approve', $data->id) }}" style="width:80px;">Approve</a>
                                                                @else 
                                                                    <a class="btn btn-secondary" style="cursor:auto" disabled style="width:80px;">Approve</a>
                                                                @endif
                                                                      
                                                                
                                                                @if($data->status != 'Approved' && $data->status != 'Denied')
                                                                    <a class="btn btn-danger" href="{{ url('cancel', $data->id) }}" style="width:80px;">Cancel</a>
                                                                @else
                                                                    <a class="btn btn-secondary" disabled style="width:80px;">Cancel</a>
                                                                @endif 
                                                                                    
                                                                <a href="{{url('deleteapp', $data->id)}}" onclick="return confirm('Are you sure yant to delete this?')" > <button class="fa fa-trash " style="border-radius:20px;font-size:15px;width:50px"></button></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                                {{ $appointment_data->appends(request()->except('page'))->links() }}
                                            @endif
                                            
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