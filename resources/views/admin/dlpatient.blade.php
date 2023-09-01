<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Required meta tags -->
    <base href="/public">
    
    @include('admin.css')

    <style>
      *{
        margin: 0;
        padding: 0;
        font-family: 'Open Sans', sans-serif;
      }
      .container {
        width: 70%;
        margin: 20px auto;
      }
      h1 {
        text-align: center;
        margin-bottom: 40px;
        color: black;
      }
      .card {
        background-color: white;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 0 40px;
        text-align: left;
        margin-bottom: 40px;
        color: black;
      }
      .card .info{
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 0 0;
      }
      .card h2 {
        font-weight: 400;
        margin-bottom: 20px;
        margin-left: 38%;
      }
      .card p {
        font-weight: 400;
        margin-bottom: 20px;
      }
      .card .section {
        border-top: 1px solid lightgray;
        padding-top: 40px;
        margin-top: 40px;
      }
      .dl{
        position: absolute;
        right: 5px;
        top: 20px;
        width: 15%;
        justify-content: space-between;
      }
      .dl button{
        height: 60px;
        width: 60px;
      }
      .dl button:hover{
        background-color: aqua;
      }
      
      
      
    </style>
  </head>
  <body style="
  background-color: white; height: 100vh;" id="body">
    
      
    
      <div class="container" id="print">
        <div class="card" id="print">
          <h1>DE VILLA - BIRUNG <br> <span style="font-size:15px;"> MEDICAL AND OB-GYNE CLINIC </span></h1><hr>
          <h2>Patient Information</h2>
          <div class="info">
              <div class="basics">
                <p>Name: {{$data->name}}</p>
                <p>Email: {{$data->email}}</p>
                <p>Age: {{$data->age}}</p>
                <p>Sex: {{$data->sex}}</p>
                <p>Address: {{$data->email}}</p>
                <p>Birthday: {{$data->bday}}</p>
                <p>Contact Number: {{$data->phone}}</p>
              </div>
              <div class="stats">
                <p>Height: {{$data->height}}</p>
                <p>Weight: {{$data->weight}}</p>
                <p>BMI: {{$data->bmi}}</p>
                <p>BP: {{$data->bp}}</p>
                <p>O2 Sat: {{$data->o2sat}}</p>
                <p>HR: {{$data->hr}}</p>
                <p>Temperature: {{$data->temp}}</p>
              </div>
            </div>
        </div>
        <div class="card" >
          <h2>Medical Information</h2>
          <p>Diagnosis: {{$data->diag}}</p>
          <p>Prescription: {{$data->prec}}</p>
          <p class="section" >Notes: {{$data->notes}}</p>
        </div>
      </div>
    
        
      

  
        
     
    
    
        @include('admin.script')
  </body>
</html>