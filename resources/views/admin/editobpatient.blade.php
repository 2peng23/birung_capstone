<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">

    <style>
      /* Add styling to the form */
      .record-box1{
        display: flex;
        justify-content: space-between;
        width: 100%;
      }
      div.record-box2{
        display: flex;
        justify-content: space-between;
        width: 100%;
      }
      .basics{
        padding: 30px;
        background-color: #f2f2f2;
        width: 45%;
        margin: 20px 20px ;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      .stats{
        padding: 30px;
        background-color: #f2f2f2;
        width: 45%;
        margin: 20px 20px ;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      div.notes1{
        padding: 30px;
        background-color: #f2f2f2;
        width: 45%;
        margin: 20px 20px ;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        color: black;
      }
      div.notes2{
        padding: 30px;
        background-color: #f2f2f2;
        width: 45%;
        margin: 20px 20px ;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        color: black;
      }
      form {
        margin: 20px 20px ;
        
      }
  
      label {
        font-size: 18px;
        font-weight: bold;
        margin-top: 1px;
        display: block;
        color: black;
      }
  
      input[type="text"], input[type="email"], input[type="number"],input[type="tel"],input[type="date"], select, textarea {
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
    
    @include('admin.css')
  </head>
  <body style="background-color: white">
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include ('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
        
        <div style="align:center;" >
            @if(session()->has('message'))

                    <div class="alert alert-success">
                        
                        {{session()->get('message')}}
                        
                    </div>

                @endif

        <div>
            <form action="{{url('patientupdate', $data2->id)}}" method="post" enctype="multipart/form-data" >
                @csrf
                
                <div class="record-box1">
                  <div class="basics">
                    <label>Basic Information</label><hr style="color:black;"><hr style="color:black;">
                    <label>Name:</label>
                    <input type="text" name="name" required autocomplete="off"  value="{{$data2->name2}}"><br>
                
                    <label>Email:</label>
                    <input type="email" name="email"  autocomplete="off" value="{{$data2->email2}}"><br>

                    <label>Age:</label>
                    <input type="number" name="age" required autocomplete="off" value="{{$data2->age2}}"><br>
                      
                    <label style="color:black;">Sex:</label>
                      <select name="sex" required style="color:black;" value="{{$data2->sex2}}">
                        <option value="" style="color:black;padding:1px;">Select</option>
                        <option value="Male" style="color:black;padding:1px;">Male</option>
                        <option value="Female" style="color:black;padding:1px;">Female</option>
                      </select><br>
                    
                    <label>Address:</label>
                    <input type="text" name="address" required autocomplete="off" value="{{$data2->address2}}"><br>

                    <label>Birthday:</label>
                    <input type="date" name="bday" autocomplete="off" value="{{$data2->bday2}}"><br>

                    <label>Contact Number:</label>
                    <input type="number" pattern="[0-9]{11}" name="phone"  autocomplete="off" value="{{$data2->phone2}}"><br>
                  </div>

                  <div class="stats">
                    <label>Stats</label> <hr style="color:black;"><hr style="color:black;">
                    <label>Height:</label>
                    <input type="number" name="height" placeholder="cm"  autocomplete="off" value="{{$data2->height2}}"><br>

                    <label>Weight:</label>
                    <input type="number" name="weight" placeholder="kg"  autocomplete="off" value="{{$data2->weight2}}"><br>

                    <label>BMI:</label>
                    <input type="text" name="bmi"  autocomplete="off" value="{{$data2->bmi2}}"><br>

                    <label>BP:</label>
                    <input type="text" name="bp"  autocomplete="off" value="{{$data2->bp2}}"><br>
                    
                    <label>O2 Sat:</label>
                    <input type="text" name="o2sat"  autocomplete="off" value="{{$data2->o2sat2}}"><br>
                    
                    <label>HR:</label>
                    <input type="text" name="hr"  autocomplete="off" value="{{$data2->hr2}}"><br>
                    
                    <label>Temperature:</label>
                    <input type="text" name="temp"  autocomplete="off" value="{{$data2->temp2}}"><br>
                  </div>
             </div>

             <div class="record-box2">
              <div class="notes1">
                     <label>Diagnosis:</label>
                     <textarea name="diag" id="" cols="5" rows="1" autocomplete="off" style="color:black;">{{$data2->diag2}}</textarea>

                     <label>Prescriptions:</label>
                     <textarea name="prec" id="" cols="30" rows="10" autocomplete="off" style="color:black;" >{{$data2->prec2}}</textarea>
              </div>
              
              <div class="notes2">
                     <label>Notes:</label>
                     <textarea name="notes" id="" cols="30" rows="10" autocomplete="off" style="color:black;" >{{$data2->notes2}}</textarea>
              </div>
           </div>
                

                    <div>
                        
                        <input  type="submit" class="btn btn-primary" style="margin-right:20px;"> 
                        <button class="btn btn-danger"><a href="{{url('obpatient-list')}}">Back</a></button>
                        
                    </div><br>

                    


                
            </form>
        </div>
</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>