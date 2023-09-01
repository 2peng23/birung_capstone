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
			#menu li.active > a {
    background-color: pink;
    color: black;
}

			table {
			  border-collapse: collapse;
			  width: 100%;
			}
			
			th, td {
			  text-align: left;
			  padding: 8px;
			  border: 1px solid black;
			}
			
			th {
			  background-color: #4CAF50;
			  color: white;
			}
			
			tr:nth-child(even) {
			  background-color: #f2f2f2;
			}
			
			h1 {
			  font-size: 24px;
			  font-weight: bold;
			  margin-bottom: 10px;
			}
			
			.pagination {
			  display: inline-block;
			  padding-left: 0;
			  margin: 0;
			  border-radius: 4px;
			}
			
			.pagination > li {
			  display: inline;
			}
			
			.pagination > li > a,
			.pagination > li > span {
			  position: relative;
			  float: left;
			  padding: 6px 12px;
			  margin-left: -1px;
			  line-height: 1.42857143;
			  color: #337ab7;
			  text-decoration: none;
			  background-color: #fff;
			  border: 1px solid #ddd;
			}
			
			.pagination > li:first-child > a,
			.pagination > li:first-child > span {
			  margin-left: 0;
			  border-top-left-radius: 4px;
			  border-bottom-left-radius: 4px;
			}
			
			.pagination > li:last-child > a,
			.pagination > li:last-child > span {
			  border-top-right-radius: 4px;
			  border-bottom-right-radius: 4px;
			}
			
			.pagination > li > a:hover,
			.pagination > li > span:hover,
			.pagination > li > a:focus,
			.pagination > li > span:focus {
			  color: #23527c;
			  background-color: #eee;
			  border-color: #ddd;
			}
			
			.pagination > .active > a,
			.pagination > .active > span,
			.pagination > .active > a:hover,
			.pagination > .active > span:hover,
			.pagination > .active > a:focus,
			.pagination > .active > span:focus {
			  z-index: 2;
			  color: #fff;
			  cursor: default;
			  background-color: #337ab7;
			  border-color: #337ab7;
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
								<section>
									<div style="text-align: center;font-style:bolder;display:none;"  id="report-header">
										<h5>DE VILLA - BIRUNG MEDICAL AND OB-GYNE CLINIC <br>
											Poblacion, Bansud, Oriental Mindoro <br>
											Monday - Saturday 8am - 5pm, by appointment <br>
											09654202382 / 09480265720</h5> <hr>
									</div>
									<div style="position:relative;" >
										<form action="{{ url('int_report') }}" method="get" style="color:black;">
                                                        @csrf
                                                        @php date_default_timezone_set('Asia/Manila'); @endphp
                                                        <input type="date" name="ddate" id="ddate" autocomplete="off" style="width: 160px">
                                                        <select name="period" id="period"  style="width: 160px">
                                                          <option value="">Select</option>
                                                          <option value="daily">Daily</option>
                                                          <option value="weekly">Weekly</option>
                                                          <option value="monthly">Monthly</option>
                                                        </select>
                                                        <input type="submit" value="Search Date" style="width: 160px">
                                                      </form>

													  <a class="btn btn-dark"   onclick="printNow()" style="position:absolute;top:20%;right:0;text-decoration:none">
														<i class="fa-solid fa-print" style="font-size:40px;width:80px"></i>
													  </a> <br>
									</div>
									@if(count($int) > 0)
									{{$int->appends(['ddate' => request('ddate'), 'period' => request('period')])->links()}}
									<div id="print1">
										<h1 class="title-style">Internal Medicine Patients</h1><br>
										<table class="table-style">
											<tr>
												<th>Patient</th>
												<th>Age</th>
												<th>Sex</th>
												<th>Address</th>
												<th>Diagnosis</th>
												<th>Last Consultation</th>
											</tr>
										@foreach($int as $ints)	
											<tr>
												<td>{{$ints->name}}</td>
												<td>{{$ints->age}}</td>
												<td>{{$ints->sex}}</td>
												<td>{{$ints->address}}</td>
												<td>{{$ints->diag}}</td>
												<td>{{ date('F d,Y h:ia', strtotime($ints->updated_at)) }}</td>
											</tr>
										@endforeach	
										</table>
									</div>
									@else
									<div style="display: none;" id="print1"></div>
									@endif

									
									
									
									

									<div id="report-footer" style="display: none;justify-content:space-between;">
										<h5>Prepared By: <br><br><br> Amalia De Leon <br>Secretary</h5>
										<h5>Noted By: <br><br><br> Jefferson Birung <br>Internal Medicine Doctor <br><span>Lic. No. 12550</span></h5>
									</div>
									
								</section>

							

						</div>
					</div>

				@include('admin.sidebar2')

			</div>

		<!-- Scripts -->
			@include('admin.script2')
			<script>
				var isPrinting = false;
				
				function printNow() {
				  var header = document.getElementById('report-header').innerHTML;
				  var data1 = document.getElementById('print1').innerHTML;
				  var footer = document.getElementById('report-footer').innerHTML;
			  
				  // Create a new style element and set its content to the styles you want to apply
				  var style = document.createElement('style');
				  style.type = 'text/css';
				  var css = '.header { text-align:center; } .footer {display:flex;justify-content:space-between;}'; // Example styles
				  style.appendChild(document.createTextNode(css));
				  document.head.appendChild(style);
			  
				  // Wrap the content you want to apply the style to in a new div with the class you defined
				  document.getElementById('body').innerHTML = '<div class="header">' + header  + '</div>' + data1 +'<div class="footer">'+footer+ '</div>';
				  
				  // Set the isPrinting flag to true
				  isPrinting = true;
				  
				  window.print(header + data1 + footer);
				}
			  
				// Reset the isPrinting flag when the user cancels the print dialog
				window.onafterprint = function() {
				  if (isPrinting) {
					isPrinting = false;
				  }
				}
				
				// Return to the current page when the user cancels the print dialog
				window.onbeforeprint = function() {
				  if (isPrinting) {
					setTimeout(function() {
					  window.location.reload();
					}, 0);
				  }
				}
			  </script>
			  

	</body>
</html>