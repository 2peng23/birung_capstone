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
        
        <style>
            
            .staff1 {
                position: relative;
                height: auto;
                margin: 10px auto;
                display: flex;
                border: 1px solid #ccc;
                border-radius: 10px;
                background-color: #fff;
                box-shadow: 0 0 5px rgba(0,0,0,0.2);
            }
            .staff1:hover {
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
            transform: translateY(-5px);
            transition: all 0.3s ease;
            }
            .staff-info,
            .staff-actions {
                display: none;
                font-size: 16px;
                margin-top: 40px;
                text-align: center;
            }
            .staff-info {
                font-weight: bold;
                text-transform: uppercase;
            }
            
            button {
                width: 100px;
                border-radius: 20px;
                margin: 10px 0;
                padding: 5px 10px;
                font-size: 14px;
                background-color: #1E90FF;
                color: #fff;
                border: none;
                cursor: pointer;
                transition: background-color 0.2s ease;
            }
            button:hover {
                background-color: aqua;
            }
            .show-hide {
                position: absolute;
                right: 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            
            .show-hide > button:first-child {
                display: block;
            }
            .show-hide > button:last-child {
                display: none;
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
										<h2>Staff</h2>
									</header>
									<div class="features">
                                            <a href="{{url('add_staff_view')}}" class="btn btn-success">Add New Staff  +</a>
                                         <div class="row" style="width:100%;margin:10px auto;">
                                                
                                
                                                @foreach($staff_data as $staff)
                                                <div class="col-sm-6" style="margin-top: 20px;" class="staff">
                                                    <div class="staff1">
                                                        <div>
                                                            <img src="doctorimage/{{$staff->image}}" style="width:200px;height:200px;border-radius: 10px 0 0 10px;">
                                                        </div>
                                                        <div style="margin:auto 40px;font-size:25px;text-align: center;">
                                                            <div class="staff-info">
                                                                {{$staff->name}} <br>
                                                                {{$staff->phone}} <br>
                                                                {{$staff->role}} <br>
                                                            </div>
                                                            <div class="staff-actions">
                                                                <a class="btn btn-primary" href="{{url('editstaff', $staff->id)}}">Update</a>
                                                                <a class="btn btn-danger" href="{{url('deletestaff', $staff->id)}}" onclick="return confirm('Are you sure you want to delete this?')">Delete</a>
                                                            </div>
                                                        </div>
                                                        <div class="show-hide">
                                                            <button class="btn btn show-btn" style="width:120px;margin-bottom:100px;"> <p style="color: black"> Show More</p></button>
                                                            <button class="btn btn hide-btn" style="width:120px;margin-bottom:100px;"><p style="color: black"> Show Less</p></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                @endforeach
                                
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
                $(document).ready(function() {
                    // Show more button click event
                    $('.show-btn').click(function() {
                        $(this).closest('.staff1').find('.staff-info, .staff-actions').show();
                        $(this).hide();
                        $(this).siblings('.hide-btn').show();
                        $(this).closest('.staff1').find('.staff-actions').css('display', 'flex',).css('margin-left', '10px 10px');
                    });
            
                    // Show less button click event
                    $('.hide-btn').click(function() {
                        $(this).closest('.staff1').find('.staff-info, .staff-actions').hide();
                        $(this).hide();
                        $(this).siblings('.show-btn').show();
                    });
                });
            </script>

	</body>
</html>