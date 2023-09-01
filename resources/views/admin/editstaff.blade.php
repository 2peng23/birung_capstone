<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
        .doctor-box1{
        width: 100%;
        padding: 30px 30px;
        background-color: #accadf;
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
        display: flex;
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
        height: 40px;
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
  <body style="background-color:rgb(139, 207, 249);">
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container"  style="padding:100px";>
                @if(session()->has('message'))
                <div class="alert alert-success" style="margin-left:40px; margin-bottom: 80px;">
                  <button type="button" class="close" data-dismiss="alert" style="width: 50px;">x</button>
                    {{session()->get('message')}}
                    
                </div>
                 @endif


                <form action="{{url('staffupdate', $staff_data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                

                    <div class="doctor-box1">
              <label>Staff's Name:</label>
              <input type="text" name="name" value="{{$staff_data->name}}" required autocomplete="off"  required><br>

              <div >
                <label>Staff's Image</label>
                <input type="file" name="file" value="{{$staff_data->file}}" required="" style="color:black; margin-top:10px;">
              </div>

              <div >
                <label>Phone Number</label>
                <input type="number" pattern="[0-9]{11}" value="{{$staff_data->phone}}" name="phone"  style="color:black; margin-top:10px;">
              </div>

              <div >
                <label>Role</label>
                <input type="text"  name="role" value="Secretary" style="color:black; margin-top:10px;" readonly>
              </div>

          
             
            </div> 

            

          <div style="margin-top:100px; margin-left:40px;">
                        
            <input type="submit" class="btn btn-success" style="color:black;">
            <button class="btn btn-danger"><a href="{{url('staff')}}">Back</a></button>
         </div>

                </form>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>