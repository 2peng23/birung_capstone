<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    @include('admin.css')
    
   
    <style type="text/css">
      *{
        margin:0;
        padding: 0;
        box-sizing: border-box; /* add box-sizing property to ensure padding and border values are included in element's total width and height */
      }
          table 
          {
              margin-top:30px;
          }
  
          table, th, td 
          {
              border:solid black;
          }
  
          /* add media queries to make page responsive */
          @media only screen and (max-width: 768px) { /* adjust max-width value as needed */
            table {
              font-size: 0.8em;
            }
          }
  
          @media only screen and (max-width: 600px) { /* adjust max-width value as needed */
            table {
              font-size: 0.6em;
            }
          }
  
          @media only screen and (max-width: 480px) { /* adjust max-width value as needed */
            table {
              font-size: 0.4em;
            }
          }
          .dl{
        position: absolute;
        right: 40px;
        top: 100px;
        justify-content: space-between;
        color: black;
      }
      .dl span:hover{
        background-color: grey;
      }

      
      
      </style>

  </head>
  <body style="background-color: white; width: 100%; height:100vh;" id="body">
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
        
          <div style="align:center; width:98%; margin:0 auto;position:relative;" class="container" id="print">

            <div style="width:100%;margin:20px auto;text-align:center;">
                <h3 style="color:black;font-size:40px;font-style:bolder;text-transform:uppercase;">Weekly Internal Medicine Patient's Report</h3>
            </div>

          <div  class="table-responsive">
            <table class="table" style="border:solid black 1px;margin:0 auto;width:100%;" >
                <tr style="color:black; text-align:center;">
                    <th style="color:black;">#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Address</th>
                    <th>Birthday</th>
                    <th>Phone Number</th>
                    <th>Last Consultation</th>
                </tr>
                @php
                    $x = ($data->currentPage()-1) * $data->perPage() + 1;
                @endphp
                @foreach($data as $patientdata2)
                <tr style="color: black;text-align:center;">
                    <td>{{$x++}}</td>
                    <td>{{$patientdata2 ->name}}</td>
                    <td>{{$patientdata2 ->age}}</td>
                    <td>{{$patientdata2 ->sex}}</td>
                    <td>{{$patientdata2 ->address}}</td>
                    @php date_default_timezone_set('Asia/Manila'); @endphp
                    <td>{{ date('M j, Y ', strtotime($patientdata2->bday)) }}</td>
                    <td>{{$patientdata2 ->phone}}</td>
                    @php date_default_timezone_set('Asia/Manila'); @endphp
                    <td>{{ date('M j, Y h:i A', strtotime($patientdata2->updated_at)) }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        
       
        
    </div>
    <div class="mt-5">
        {{ $data->links() }}
    </div>
    
        
    <button class="btn btn-danger" style="margin:20px 20px;width:100px;"><a href="{{url('home')}}">Back</a></button>

    <div class="dl" bg-primary>
        <span class="fa-solid fa-print" onclick="printNow()" style="font-size:40px;cursor:pointer;"></span>
  </div>

    </div>
    
     
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <script>
        function printNow(){
          var data = document.getElementById('print').innerHTML;
          document.getElementById('body').innerHTML = data;
          window.print(data);
        }
      </script>
    <!-- End custom js for this page -->
  </body>
</html>