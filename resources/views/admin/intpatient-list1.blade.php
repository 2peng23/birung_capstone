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
          
          table a {
            color: #337ab7;
            text-decoration: none;
          }
          
          table a:hover {
            text-decoration: underline;
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
			#menu li.active > a {
    background-color: rgb(208, 223, 44);
    color: black;
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
										<h2>Internal Medicine Patient</h2>
									</header>
									<div class="features">
										<div style="align:center;" >

                                            <div style=" width:98%; margin:10px auto;display:flex;justify-content:space-between;">
                                                    <div>
                                                      <form action="{{url('search-record')}}" method="post" style="color: black;  margin-top:10px;">
                                                        {{csrf_field()}}
                                                        <input type="search" required name="nname" autocomplete="off" style="border-color:black;width:200px" placeholder="Input Patient's Name...">
                                                        <button type="submit" style="color:black;height:43px;width:150px;margin-top:10px;" hidden>Search Patient</button>
                                                      </form>
                                                      <form method="GET" action="{{ url('/intpatient-list') }}">
                                                        <input type="number" name="pagesize" id="" required placeholder="Pagination" style="border-color:black;border-radius:5px;width:200px;">
                                                        <input type="submit" value="Submit" hidden>
                                                    </form>
                                                     
                                                    </div>
                                  
                                                    <div> 
                                                        <a href="{{url('add-patient')}}" class="btn btn-success" style="border:none;width:180px">Add New Patient  +</a> <br>
                                                        <a href="{{url('archive-patient')}}" class="btn btn-primary" style="border:none;margin-top:50px;width:180px;">Inactive Patient</a> 
                                                    </div>
                                                    
                                                
                                            </div>
                                  
                                            
                                       
                                  
                                            <div  id="printable">
                                              <table class="table-style" style="border:solid black 1px; margin-left: 10px; margin-right: 10px;">
                                                  <tr style="color:black; text-align:center;">
                                                      <th style="text-align: center;">Full Name</th>
                                                      <th style="text-align: center;">Email</th>
                                                      <th style="text-align: center;">Contact Number</th>
                                                      <th style="text-align: center;">Age</th>
                                                      <th style="text-align: center;">Sex</th>
                                                      <th style="text-align: center;">Address</th>
                                                      <th style="text-align: center;">Birthday</th>
                                                      <th style="text-align: center;">Last Consultation</th>  
                                                      <th class="no-print" style="text-align: center;">Action</th>
                                                  </tr>
                                                  
                                                  @php
                                                  // Sort the $data array by updated_at field in ascending order
                                                  $sortedData = $data->sortByDesc('updated_at');
                                                  @endphp
                                              
                                              @foreach($sortedData as $patientdata2)
                                                  <tr style="color: black; border:1px solid black;">
                                                      <td>{{$patientdata2 ->name}}</td>
                                                      <td>{{$patientdata2 ->email}}</td>
                                                      <td>{{$patientdata2->phone}}</td>
                                                      <td>{{$patientdata2 ->age}}</td>
                                                      <td>{{$patientdata2 ->sex}}</td>
                                                      <td>{{$patientdata2 ->address}}</td>
                                                      @php date_default_timezone_set('Asia/Manila'); @endphp
                                                      <td>{{ date('M j, Y ', strtotime($patientdata2->bday)) }}</td>
                                                      @php date_default_timezone_set('Asia/Manila'); @endphp
                                                      <td>{{ date('M j, Y h:i A', strtotime($patientdata2->updated_at)) }}</td>
                                                      <td style="text-align:center;" class="no-print">
                                                        <a href="{{url('viewpatient', $patientdata2->id)}}" class="btn btn-success" style="width:80px;">View</a>  
                                                        <a href="{{url('editpatient', $patientdata2->id)}}" class="btn btn-primary" style="width:80px;">Update</a>
                                                      </td>
                                                  </tr>
                                              @endforeach
                                              
                                              
                                              </table> 
                                              
                                          </div>
                                          {{ $data->appends(request()->except('page'))->links() }}
                                          
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
                function printTable() {
                  // Clone the table to create a new table that can be modified without affecting the original
                  var printTable = document.querySelector('table').cloneNode(true);
                  // Remove the "Action" column from the new table
                  var noPrintTh = printTable.querySelector('.no-print');
                  var noPrintIndex = Array.prototype.indexOf.call(noPrintTh.parentNode.children, noPrintTh);
                  printTable.querySelectorAll('tr').forEach(function(row) {
                    row.removeChild(row.children[noPrintIndex]);
                  });
                  // Open a new window containing the new table
                  var printWindow = window.open('', '', 'height=400,width=800');
                  printWindow.document.write('<html><head><title>Print Table</title>');
                  printWindow.document.write('<style>table, th, td {border: 1px solid black;border-collapse: collapse; text-align:center;}</style>');
                  printWindow.document.write('</head><body>');
                  printWindow.document.write('<h1 style="text-align:center;"> Report</h1>');
                  printWindow.document.write(printTable.outerHTML);
                  printWindow.document.write('</body></html>');
                  printWindow.document.close();
                  printWindow.focus();
                  // Print the new table
                  printWindow.print();
                  // Close the new window
                  printWindow.close();
                }
              </script>

	</body>
</html>