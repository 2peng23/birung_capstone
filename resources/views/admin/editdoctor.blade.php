<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
        .doctor-box1{
        width: 100%;
        padding: 30px 30px;
        background-color: #f2f2f2;
        margin: -60px 20px ;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      .sched{
        width: 100%;
        padding: 30px 30px;
        background-color: #f2f2f2;
        margin: 120px 20px ;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      .sched1{
        width: 100%;
        padding: 10px 30px;
        background-color: #f2f2f2;
        margin: 0 20px ;
      }
      .sched2, .sched3, .sched4, .sched5, .sched6{
        display: flex;
        width: 100%;
        padding: 10px 30px;
        background-color: #f2f2f2;
        margin: 0px 20px ;
      }
      
        form {
        margin: 0px 20px ;
        
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
      }
      
  
      
  
      input[type="submit"]:hover {
        background-color: aqua;
      }
      input[type="submit"] {
        background-color: green;
        color: white;
      }
        
    </style>
    <!-- Required meta tags -->
    
    @include('admin.css')
  </head>
  <body style="background-color: white;">
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="left" style="padding:100px";>
            @if(session()->has('message'))

                    <div class="alert alert-success">
                      
                        
                        {{session()->get('message')}}
                        
                        
                    </div>

                @endif


                <form action="{{url('doctorupdate', $doctor_data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                

                    <div class="doctor-box1">
              <label>Doctor's Name:</label>
              <input type="text" name="name" value="{{$doctor_data->name}}" required autocomplete="off"  required><br>

              <div >
                <label>Doctor's Image</label>
                <input type="file" name="file" value="{{$doctor_data->file}}" required="" style="color:black; margin-top:10px;">
              </div>

              <div >
                <label>Phone Number</label>
                <input type="tel" pattern="[0-9]{11}" value="{{$doctor_data->phone}}" name="phone"  style="color:black; margin-top:10px;">
              </div>

              <label>Service</label>

                <select name="specialty"   required="" style="color:black;" >
                  <option value=""> Select Service</option>
                  <option value="Internal Medicine"> Internal Medicine </option>
                  <option value="Ob-Gyn"> Ob-Gyn Services </option> 
                </select>

          
             
            </div> 

            <div class="sched">
              <h2 style="color:black;font-weight:bold;font-size:30px;text-align:center;">Schedule for Appointment</h2>
              <div class="sched1">
                <label >Select a month:</label>
                <input type="month" id="month" name="month" required autocomplete="off" autofocus>
                <br>
                <label >Select available dates:</label>
                <select id="dates" name="dates[]" multiple required>
                </select>
                <br>
                <label >Select number of slots:</label>
                <input type="number" id="slots" name="slots" min="1" max="20" required value="{{$doctor_data->slots}}">
              
              

              
            </div>
            
          </div>

          <div style="margin-top:-100px; margin-left:40px;">
                        
            <input type="submit" class="btn btn-success" style="color:black;">
            <button class="btn btn-danger"><a href="{{url('showdoctor')}}">Back</a></button>
         </div>

                </form>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')

    <script>
      // Get the month input field
    var monthInput = document.getElementById("month");
    
    // Add an event listener for when the user selects a month
    monthInput.addEventListener("input", function() {
      // Get the selected month and year
      var selectedMonth = this.value.substring(5, 7);
      var selectedYear = this.value.substring(0, 4);
    
      // Get the number of days in the selected month
      var daysInMonth = new Date(selectedYear, selectedMonth, 0).getDate();
    
      // Generate an array of objects containing dates and corresponding days of the week
      var dates = [];
      for (var i = 1; i <= daysInMonth; i++) {
        var date = new Date(selectedYear, selectedMonth - 1, i);
        var dateString = date.toISOString().substring(0, 10);
        var dayOfWeek = date.toLocaleDateString('en-US', { weekday: 'long' });
        dates.push({ date: dateString, dayOfWeek: dayOfWeek });
      }
    
      // Populate the date select field with the generated dates and corresponding days of the week
      var datesSelect = document.getElementById("dates");
      datesSelect.innerHTML = "";
      for (var i = 0; i < dates.length; i++) {
        var option = document.createElement("option");
        option.value = dates[i].date;
        option.text = dates[i].date + ' (' + dates[i].dayOfWeek + ')';
        datesSelect.add(option);
      }
    });
    
    </script>
    <!-- End custom js for this page -->
  </body>
</html>