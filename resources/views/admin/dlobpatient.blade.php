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
  /* Style for the entire page */
  body {
    font-family: Arial, sans-serif;
    font-size: 14px;
    color: black;
  }

  /* Style for the container */
  #print {
    margin: 0 auto;
    padding: 20px;
    max-width: 800px;
  }

  /* Style for the cards */
  .card {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
    padding: 20px;
  }

  /* Style for the headings */
  h1, h2 {
    margin: 0;
  }

  h1 {
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
  }

  h2 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  /* Style for the patient information section */
  .info {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 20px;
  }

  .basics, .stats {
    width: 48%;
  }

  .basics p, .stats p {
    margin: 0;
    margin-bottom: 10px;
  }

  /* Style for the notes section */
  .section {
    margin-top: 20px;
  }
      
      
      
      
    </style>
  </head>
  <body style="
  background-color: white; height: 100vh;" id="body"> 
    
      
    
    <div class="container" id="print">
      <div class="card">
        <h1>DE VILLA - BIRUNG <br> <span style="font-size:15px;"> MEDICAL AND OB-GYNE CLINIC </span></h1>
        <hr>
        <h2>Patient Information</h2>
        <div class="info">
          <div class="basics">
            <p> <strong>Name:</strong> {{$data2->name2}}</p>
            <p><strong>Email:</strong> {{$data2->email2}}</p>
            <p><strong>Age:</strong> {{$data2->age2}}</p>
            <p><strong>Sex</strong> {{$data2->sex2}}</p>
            <p><strong>Address:</strong> {{$data2->email2}}</p>
            <p><strong>Birthday:</strong> {{$data2->bday2}}</p>
            <p><strong>Contact Number:</strong> {{$data2->phone2}}</p>
          </div>
          <div class="stats">
            <p><strong>Height:</strong> {{$data2->height2}}</p>
            <p><strong>Weight:</strong> {{$data2->weight2}}</p>
            <p><strong>BMI:</strong> {{$data2->bmi2}}</p>
            <p><strong>BP:</strong> {{$data2->bp2}}</p>
            <p><strong>O2Sat:</strong> {{$data2->o2sat2}}</p>
            <p><strong>HR:</strong> {{$data2->hr2}}</p>
            <p><strong>Temperature:</strong> {{$data2->temp2}}</p>
          </div>
        </div>
      </div>
      <div class="card">
        <h2>Medical Information</h2>
        <p><strong>Diagnosis:</strong> {{$data2->diag2}}</p>
        <p><strong>Prescription:</strong> {{$data2->prec2}}</p>
        <p class="section"><strong>Notes:</strong> {{$data2->notes2}}</p>
      </div>
    </div>
    
        
      

  
        
     
    
    
        @include('admin.script')
  </body>
</html>