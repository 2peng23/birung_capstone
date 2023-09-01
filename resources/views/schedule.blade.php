<head>
    <style>
      
      
      .clock{
            position:absolute;
            top: 0;
            right: 0;
            width: 180px;
            height: 180px;
            border: solid 2px black;
            border-radius: 50%;
          }
          .clock .number{
            --rotation:0;
            position: absolute;
            width: 100%;
            height: 100%;
            text-align: center;
            transform: rotate(var(--rotation));
            font-weight: bolder;
          }
          .clock .number1{--rotation: 30deg;}
          .clock .number2{--rotation: 60deg;}
          .clock .number3{--rotation: 90deg;}
          .clock .number4{--rotation: 120deg;}
          .clock .number5{--rotation: 150deg;}
          .clock .number6{--rotation: 180deg;}
          .clock .number7{--rotation: 210deg;}
          .clock .number8{--rotation: 240deg;}
          .clock .number9{--rotation: 270deg;}
          .clock .number10{--rotation: 300deg;}
          .clock .number11{--rotation: 330deg;}
  
  
          .clock .hand{
            --rotation: 0;
            position: absolute;
            left: 50%;
            bottom: 50%;
            background-color:black;
            transform: translateX(-50%) rotate(calc(var(--rotation) * 1deg));
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            transform-origin: bottom;
            z-index: 10;
          }
  
          .clock::after{
            content: '';
            position: absolute;
            background-color: black;
            z-index: 11;
            width: 15px;
            height: 15px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
          }
          .clock .hand.second{
            width: 3px;
            height: 45%;
            background-color: red;
          }
          .clock .hand.minute{
            width: 7px;
            height: 40%;
            background-color: black;
          }
          .clock .hand.hour{
            width: 9px;
            height: 30%;
            background-color: black;
          }
    </style>
  </head>
  <div class="page-section bg-light" id="sched">
    <h1 class="text-center mb-5 wow fadeInUp" style="margin-right:190px;">Appointment Schedule</h1>
    <div class="clock">
      <div class="hand hour" data-hour-hand></div>
      <div class="hand minute" data-minute-hand></div>
      <div class="hand second" data-second-hand></div>
      <div class="number number1">1</div>
      <div class="number number2">2</div>
      <div class="number number3">3</div>
      <div class="number number4">4</div>
      <div class="number number5">5</div>
      <div class="number number6">6</div>
      <div class="number number7">7</div>
      <div class="number number8">8</div>
      <div class="number number9">9</div>
      <div class="number number10">10</div>
      <div class="number number11">11</div>
      <div class="number number12">12</div>
    </div>


    <table style="border: 1px solid black; margin:60px auto 10px auto; text-align:center;width:80%;" >
      <tr style="border:1px solid black;"  class="bg-primary">
          <th style="border:1px solid black; padding:0 40px;" class="text-center wow fadeInLeft">Doctor</th>
          <th style="border:1px solid black; padding:0 40px;" class="text-center wow fadeInLeft">Service</th>
          <th style="border:1px solid black; padding:0 40px;" class="text-center wow fadeInRight">Day</th>
          <th style="border:1px solid black; padding:0 40px;" class="text-center wow fadeInRight">Time</th>
      </tr>
      @foreach($doctor as $doctors)
      <tr style="border: 1px solid black;" class="text-center wow fadeInUp">
          <td style="border: 1px solid black;">{{$doctors->name}}</td>
          <td style="border: 1px solid black;">{{$doctors->specialty}}</td>
          <td style="border: 1px solid black;">
            @if(isset($doctors->date1))
                {{ date('l, F d, Y', strtotime($doctors->date1)) }} <br>
            @endif

            @if(isset($doctors->date2))
                {{ date('l, F d, Y', strtotime($doctors->date2)) }} <br>
            @endif

            @if(isset($doctors->date3))
                {{ date('l, F d, Y', strtotime($doctors->date3)) }} <br>
            @endif

            @if(isset($doctors->date4))
                {{ date('l, F d, Y', strtotime($doctors->date4)) }} <br>
            @endif

            @if(isset($doctors->date5))
                {{ date('l, F d, Y', strtotime($doctors->date5)) }} <br>
            @endif

            @if(isset($doctors->date6))
                {{ date('l, F d, Y', strtotime($doctors->date6)) }} <br>
            @endif       
          </td>
          <td style="border: 1px solid black;">
            @if(isset($doctors->time_from1))
                {{ date('h:ia', strtotime($doctors->time_from1)) }} to {{ date('h:ia', strtotime($doctors->time_to1)) }}<br>
            @endif
            @if(isset($doctors->time_from2))
                {{ date('h:ia', strtotime($doctors->time_from2)) }} to {{ date('h:ia', strtotime($doctors->time_to2)) }}<br>
            @endif
            @if(isset($doctors->time_from3))
                {{ date('h:ia', strtotime($doctors->time_from3)) }} to {{ date('h:ia', strtotime($doctors->time_to3)) }}<br>
            @endif
            @if(isset($doctors->time_from4))
                {{ date('h:ia', strtotime($doctors->time_from4)) }} to {{ date('h:ia', strtotime($doctors->time_to4)) }}<br>
            @endif
            @if(isset($doctors->time_from5))
                {{ date('h:ia', strtotime($doctors->time_from5)) }} to {{ date('h:ia', strtotime($doctors->time_to5)) }}<br>
            @endif
            @if(isset($doctors->time_from6))
                {{ date('h:ia', strtotime($doctors->time_from6)) }} to {{ date('h:ia', strtotime($doctors->time_to6)) }}<br>
            @endif
           
          </td>
      </tr>
      @endforeach
  </table>
  
      
      
  </div>
  </div>

  <script>
    setInterval(setClock, 1000)
      const hourHand = document.querySelector('[data-hour-hand]')
      const minuteHand = document.querySelector('[data-minute-hand]')
      const secondHand = document.querySelector('[data-second-hand]')
  
    function setClock(){
      
  
      const currentDate = new Date()
      const secondsRatio = currentDate.getSeconds() / 60
      const minutesRatio = (secondsRatio + currentDate.getMinutes()) / 60
      const hoursRatio = (minutesRatio + currentDate.getHours()) / 12
  
      setRotation(hourHand, hoursRatio)
      setRotation(minuteHand, minutesRatio)
      setRotation(secondHand, secondsRatio)
    }
    function setRotation(element, rotationRatio){
      element.style.setProperty('--rotation', rotationRatio *360)
    }
    setClock()
  </script>