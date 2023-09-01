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
      body {
    font-family: Arial, sans-serif;
    color: black;
  }
  
  .print {
    margin: 0 auto;
    max-width: 800px;
  }
  
  .container {
    text-align: center;
    margin-bottom: 20px;
  }
  
  .topper h1 {
    font-size: 24px;
    font-weight: bold;
    margin: 0;
  }
  
  .info h4 {
    font-size: 16px;
    margin: 0;
  }
  
  .cert h2 {
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    margin: 20px 0;
  }
  
  .letter {
    margin-top: 20px;
  }
  
  .letter p {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 20px;
  }
  
  .letter span {
    font-weight: bold;
  }
  
  .imp, .rem {
    font-size: 18px;
    font-weight: bold;
    margin: 20px 0 10px;
    margin-top:100px;
  }
  .rem{
    margin-top:100px;
  }
  
  .bro h4 {
    font-size: 18px;
    margin: 40px 0 0;
    text-align: center;
    border-top: 2px solid black;
    margin-top:100px;
  }
  
  .note p {
    font-size: 18px;
    margin-top: 20px;
  }
  
  .signed h4 {
    font-size: 18px;
    font-weight: bold;
    margin: 60px 0;
    text-align: right;
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
    <div class="print" id="print">
      <div class="container">
        <div class="topper">
          <h1>DE VILLA - BIRUNG MEDICAL AND OB-GYNE CLINIC</h1>
        </div>
        <div class="info">
          <h4>
            Poblacion, Bansud, Oriental Mindoro <br>
            Monday - Saturday 8am - 5pm, by appointment <br>
            09654202382 / 09480265720
          </h4>
        </div>
      </div>
    
      <div class="cert">
        <h2>MEDICAL CERTIFICATE</h2>
      </div>
      <div class="letter">
        <p> 
          <span> This is to certify that {{$data2->name2}}</span>,
          {{$data2->age2}} y/o, male/female/married, and resident of {{$data2->address2}} 
          was seen and examined in our clinic.
        </p>
    
        <h4 class="imp">Impression:</h4>
        <p class="imp-value"></p>
    
        <h4 class="rem">Remarks:</h4>
        <p class="rem-value"></p>
    
        <div class="bro">
          <h4> <strong > NOTHING FOLLOWS </strong></h4>
        </div>
        <div class="note">
          <p><span>Note:</span> Not for medico-legal purposes.</p>
        </div>
        <div class="signed">
          <h4>FRANCES CARMEL BIRUNG, MD</h4>
        </div>
      </div>
    </div>

    <div class="dl">

      

    <button onclick="printNow()" class="fa-solid fa-print">
    </button>

      <a href="{{url('obpatient-list')}}" >
        <button class="fa-solid fa-angle-right"></button> 
      </a>
    
    
  </div>
  

  <script>
    function printNow(){
      var data = document.getElementById('print').innerHTML;
      document.getElementById('body').innerHTML = data;
      window.print();
    }
  </script>
  @include('admin.script')
  </body>
</html>