<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        <base href="/public">
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
          .card-container{
            width: 80%;
            margin: 0px auto;
          }
          .doctor-box1{
              width: 100%;
              padding: 30px 30px;
              background-color: white;
              margin: -60px 20px;
              border-radius: 10px;
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
              margin: 20px 20px 20px 40px;
            }
            
            
            .sched{
              width: 100%;
              padding: 30px 30px;
              background-color: white;
              margin: -60px 20px;
              border-radius: 10px;
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
              margin: 20px 20px 20px 40px;
            }
            .sched1{
              justify-content: space-evenly;
              padding: 10px 30px;
              background-color: white;
              margin: 0 20px ;
              width: 100%;
              margin: auto;
            }
            
            
            
              form {
              padding-top: 0;
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
              color: white;
            }
            button:hover{
              background-color: aqua;
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
									<header class="major" style="display: flex;justify-content:space-between;">
										<h2>Edit Doctor</h2>
                                        <button style="width:100px;border-radius:10px;height:47px;"><a href="{{url('showdoctor')}}">Back</a></button>
									</header>
                  @if(session()->has('message'))
                                
                  <div class="alert alert-success" style="margin-left:30px">
                    <button type="button" class="close" data-dismiss="alert" style="width: 50px;">x</button>
                      {{session()->get('message')}}
                      
                  </div>

              @endif
									<div class="features">
                                       
                                        <form action="{{url('doctorupdate', $doctor_data->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="doctor-box1">
                                            <label>Doctor's Name:</label>
                                            <input type="text" name="name" value="{{$doctor_data->name}}" required autocomplete="off" autofocus required><br>
                                          
                                            <div >
                                              <label>Doctor's Image</label>
                                              <img style="width: 150px" src="doctorimage/{{$doctor_data->image}}" alt="">
                                              <input type="file" name="file" value="{{$doctor_data->image}}"   style="color:black; margin-top:10px;">
                                            </div>
                                          
                                            <div >
                                              <label>Phone Number</label>
                                              <input type="number" pattern="[0-9]{11}"  value="{{$doctor_data->phone}}" name="phone" style="color:black; margin-top:10px;">
                                            </div>

                                            <div >
                                              <label>Email</label>
                                              <input type="email"   value="{{$doctor_data->email}}" name="email" style="color:black; margin-top:10px;">
                                            </div>
                                          
                                            <label>Specialty</label>
                                          
                                              <select name="specialty"  value="{{$doctor_data->specialty}}"  required="" style="color:black;">
                                                <option value="{{$doctor_data->specialty}}" >Select Specialty</option>
                                                <option value="Internal Medicine"> Internal Medicine </option>
                                                <option value="Ob-Gyne"> Ob-Gyn Services </option>
                                              </select>
                                          
                                          </div> 
                                            <div class="sched">
                                                <h2 style="color:black;font-weight:bold;font-size:30px;text-align:center;margin:20px;">Schedule</h2>
                                                <div class="sched1" style="display:flex; justify-content:space-between;">
                                                  <div>
                                                    <div>
                                                        <label for="date1">Schedule Date:</label>
                                                        <input type="date" id="date1" name="date1"    min="<?php echo date('Y-m-d'); ?>" multiple style="width:200px">
                                                    </div>
                                             <div id="timeSlotsDiv1" style="display:none;">     
                                                <div style="display: flex;justify-content:space-between;">    
                                                    <div>
                                                        <label for="time_from1">Time From:</label>
                                                        <input type="time" id="time_from1" name="time_from1" >
                                                    </div>
                                                    <div>
                                                        <label for="time_to1">Time To:</label>
                                                        <input type="time" id="time_to1" name="time_to1" >
                                                    </div>
                                                </div>
                                                    <label for="timeslot1">Select Time Slots</label>
                                                    <select name="timeslot1[]" id="" multiple style="height:150px;" >
                                                      
                                                    </select>
                                                </div>
                                              </div>
                                                  <div>
                                                    <div>
                                                        <label for="date2">Schedule Date:</label>
                                                        <input type="date"  id="date2" name="date2"  min="<?php echo date('Y-m-d'); ?>" multiple style="width:200px">
                                                    </div>
                                             <div id="timeSlotsDiv2" style="display:none;">     
                                                <div style="display: flex;justify-content:space-between;">    
                                                    <div>
                                                        <label for="time_from2">Time From:</label>
                                                        <input type="time" id="time_from2" name="time_from2" >
                                                    </div>
                                                    <div>
                                                        <label for="time_to2">Time To:</label>
                                                        <input type="time" id="time_to2" name="time_to2" >
                                                    </div>
                                                </div>
                                                    <label for="timeslot2">Select Time Slots</label>
                                                    <select name="timeslot2[]" id="" multiple style="height:150px;">
                                                      
                                                    </select>
                                                </div>
                                              </div> 
                                                </div>
      
                                                <div class="sched1" style="display:flex; justify-content:space-between;">
                                                  <div>
                                                    <div>
                                                        <label for="date3">Schedule Date:</label>
                                                        <input type="date"  id="date3" name="date3"  min="<?php echo date('Y-m-d'); ?>" multiple style="width:200px">
                                                    </div>
                                             <div id="timeSlotsDiv3" style="display:none;">     
                                                <div style="display: flex;justify-content:space-between;">    
                                                    <div>
                                                        <label for="time_from3">Time From:</label>
                                                        <input type="time" id="time_from3" name="time_from3" >
                                                    </div>
                                                    <div>
                                                        <label for="time_to3">Time To:</label>
                                                        <input type="time" id="time_to3" name="time_to3" >
                                                    </div>
                                                </div>
                                                    <label for="timeslot3">Select Time Slots</label>
                                                    <select name="timeslot3[]" id="" multiple style="height:150px;" >
                                                      
                                                    </select>
                                                </div>
                                              </div>
                                                  <div>
                                                    <div>
                                                        <label for="date4">Schedule Date:</label>
                                                        <input type="date"  id="date4" name="date4"  min="<?php echo date('Y-m-d'); ?>" multiple style="width:200px">
                                                    </div>
                                             <div id="timeSlotsDiv4" style="display:none;">     
                                                <div style="display: flex;justify-content:space-between;">    
                                                    <div>
                                                        <label for="time_from4">Time From:</label>
                                                        <input type="time" id="time_from4" name="time_from4" >
                                                    </div>
                                                    <div>
                                                        <label for="time_to4">Time To:</label>
                                                        <input type="time" id="time_to4" name="time_to4" >
                                                    </div>
                                                </div>
                                                    <label for="timeslot4">Select Time Slots</label>
                                                    <select name="timeslot4[]" id="" multiple style="height:150px;" >
                                                      
                                                    </select>
                                                </div>
                                              </div> 
                                                </div>
      
                                                <div class="sched1" style="display:flex; justify-content:space-between;">
                                                  <div>
                                                    <div>
                                                        <label for="date5">Schedule Date:</label>
                                                        <input type="date"  id="date5" name="date5"  min="<?php echo date('Y-m-d'); ?>" multiple style="width:200px">
                                                    </div>
                                             <div id="timeSlotsDiv5" style="display:none;">     
                                                <div style="display: flex;justify-content:space-between;">    
                                                    <div>
                                                        <label for="time_from5">Time From:</label>
                                                        <input type="time" id="time_from5" name="time_from5" >
                                                    </div>
                                                    <div>
                                                        <label for="time_to5">Time To:</label>
                                                        <input type="time" id="time_to5" name="time_to5" >
                                                    </div>
                                                </div>
                                                    <label for="timeslot5">Select Time Slots</label>
                                                    <select name="timeslot5[]" id="" multiple style="height:150px;" >
                                                      
                                                    </select>
                                                </div>
                                              </div>
                                                  <div>
                                                    <div>
                                                        <label for="date6">Schedule Date:</label>
                                                        <input type="date"  id="date6" name="date6"  min="<?php echo date('Y-m-d'); ?>" multiple style="width:200px">
                                                    </div>
                                             <div id="timeSlotsDiv6" style="display:none;">     
                                                <div style="display: flex;justify-content:space-between;">    
                                                    <div>
                                                        <label for="time_from6">Time From:</label>
                                                        <input type="time" id="time_from6" name="time_from6" >
                                                    </div>
                                                    <div>
                                                        <label for="time_to6">Time To:</label>
                                                        <input type="time" id="time_to6" name="time_to6">
                                                    </div>
                                                </div>
                                                    <label for="timeslot6">Select Time Slots</label>
                                                    <select name="timeslot6[]" id="" multiple style="height:150px;">
                                                      
                                                    </select>
                                                </div>
                                              </div> 
                                                </div>
      
                                                
                                            </div>
                                        
                                            <div style="margin-top:10px; margin-left:40px;">
                                                <input type="submit" style="color:black;">
                                            </div>
                                        </form>
									</div>
								</section>

							

						</div>
					</div>

				@include('admin.sidebar2')

			</div>

		<!-- Scripts -->
			@include('admin.script2')
            <script>
                const timeFromInput = document.getElementById('time_from1');
                const timeToInput = document.getElementById('time_to1');
                const timeSlotSelect = document.querySelector('select[name="timeslot1[]"]');
        
                // hide the time slots select element initially
                timeSlotSelect.style.display = 'none';
        
                timeFromInput.addEventListener('input', updateSelectOptions);
                timeToInput.addEventListener('input', updateSelectOptions);
        
                function updateSelectOptions() {
                  const timeFrom = timeFromInput.value;
                  const timeTo = timeToInput.value;
                  
                  if (timeFrom && timeTo) {
                    // both time inputs have been selected, so show the time slots select element
                    timeSlotSelect.style.display = 'block';
                    
                    const timeSlots = generateTimeSlots(timeFrom, timeTo);
                    timeSlotSelect.innerHTML = ''; // clear existing options
                    
                    timeSlots.forEach(slot => {
                      const option = document.createElement('option');
                      option.value = slot;
                      option.textContent = slot;
                      timeSlotSelect.appendChild(option);
                    });
                  } else {
                    // hide the time slots select element if either time input is empty
                    timeSlotSelect.style.display = 'none';
                  }
                }
        
                function generateTimeSlots(startTime, endTime) {
                  const timeSlots = [];
                  const time = new Date(`2000-01-01 ${startTime}`);
                  const endTimeObj = new Date(`2000-01-01 ${endTime}`);
                  
                  while (time <= endTimeObj) {
                    timeSlots.push(time.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}));
                    time.setMinutes(time.getMinutes() + 30); // increment time by 15 minutes
                  }
                  
                  return timeSlots;
                }
              </script>
              <script>
                const dateInput1 = document.getElementById('date1');
                const timeSlotsDiv1 = document.getElementById('timeSlotsDiv1');
                
                dateInput1.addEventListener('input', () => {
                    if (dateInput1.value) {
                        timeSlotsDiv1.style.display = 'block';
                    } else {
                        timeSlotsDiv1.style.display = 'none';
                    }
                });
            </script>
            <script>
              const dateInput2 = document.getElementById('date2');
              const timeSlotsDiv2 = document.getElementById('timeSlotsDiv2');
              
              dateInput2.addEventListener('input', () => {
                  if (dateInput2.value) {
                      timeSlotsDiv2.style.display = 'block';
                  } else {
                      timeSlotsDiv2.style.display = 'none';
                  }
              });
          </script>
            <script>
              const dateInput3 = document.getElementById('date3');
              const timeSlotsDiv3 = document.getElementById('timeSlotsDiv3');
              
              dateInput3.addEventListener('input', () => {
                  if (dateInput3.value) {
                      timeSlotsDiv3.style.display = 'block';
                  } else {
                      timeSlotsDiv3.style.display = 'none';
                  }
              });
          </script>
          <script>
            const dateInput4 = document.getElementById('date4');
            const timeSlotsDiv4 = document.getElementById('timeSlotsDiv4');
            
            dateInput4.addEventListener('input', () => {
                if (dateInput4.value) {
                    timeSlotsDiv4.style.display = 'block';
                } else {
                    timeSlotsDiv4.style.display = 'none';
                }
            });
        </script>
        <script>
          const dateInput5 = document.getElementById('date5');
          const timeSlotsDiv5 = document.getElementById('timeSlotsDiv5');
          
          dateInput5.addEventListener('input', () => {
              if (dateInput5.value) {
                  timeSlotsDiv5.style.display = 'block';
              } else {
                  timeSlotsDiv5.style.display = 'none';
              }
          });
        </script>
        <script>
          const dateInput6 = document.getElementById('date6');
          const timeSlotsDiv6 = document.getElementById('timeSlotsDiv6');
          
          dateInput6.addEventListener('input', () => {
              if (dateInput6.value) {
                  timeSlotsDiv6.style.display = 'block';
              } else {
                  timeSlotsDiv6.style.display = 'none';
              }
          });
        </script>
        
          
            
              <script>
                const timeFromInput2 = document.getElementById('time_from2');
                const timeToInput2 = document.getElementById('time_to2');
                const timeSlotSelect2 = document.querySelector('select[name="timeslot2[]"]');
              
                // hide the time slots select element initially
                timeSlotSelect2.style.display = 'none';
              
                timeFromInput2.addEventListener('input', updateSelectOptions2);
                timeToInput2.addEventListener('input', updateSelectOptions2);
              
                function updateSelectOptions2() {
                  const timeFrom2 = timeFromInput2.value;
                  const timeTo2 = timeToInput2.value;
                  
                  if (timeFrom2 && timeTo2) {
                    // both time inputs have been selected, so show the time slots select element
                    timeSlotSelect2.style.display = 'block';
                    
                    const timeSlots2 = generateTimeSlots2(timeFrom2, timeTo2);
                    timeSlotSelect2.innerHTML = ''; // clear existing options
                    
                    timeSlots2.forEach(slot => {
                      const option = document.createElement('option');
                      option.value = slot;
                      option.textContent = slot;
                      timeSlotSelect2.appendChild(option);
                    });
                  } else {
                    // hide the time slots select element if either time input is empty
                    timeSlotSelect2.style.display = 'none';
                  }
                }
              
                function generateTimeSlots2(startTime, endTime) {
                  const timeSlots2 = [];
                  const time2 = new Date(`2000-01-01 ${startTime}`);
                  const endTimeObj2 = new Date(`2000-01-01 ${endTime}`);
                  
                  while (time2 <= endTimeObj2) {
                    timeSlots2.push(time2.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}));
                    time2.setMinutes(time2.getMinutes() + 30); // increment time by 15 minutes
                  }
                  
                  return timeSlots2;
                }
              </script>
                <script>
                  const timeFromInput3 = document.getElementById('time_from3');
                  const timeToInput3 = document.getElementById('time_to3');
                  const timeSlotSelect3 = document.querySelector('select[name="timeslot3[]"]');
                  
                  // hide the time slots select element initially
                  timeSlotSelect3.style.display = 'none';
                  
                  timeFromInput3.addEventListener('input', updateSelectOptions3);
                  timeToInput3.addEventListener('input', updateSelectOptions3);
                  
                  function updateSelectOptions3() {
                      const timeFrom3 = timeFromInput3.value;
                      const timeTo3 = timeToInput3.value;
                      
                      if (timeFrom3 && timeTo3) {
                          // both time inputs have been selected, so show the time slots select element
                          timeSlotSelect3.style.display = 'block';
                          
                          const timeSlots3 = generateTimeSlots3(timeFrom3, timeTo3);
                          timeSlotSelect3.innerHTML = ''; // clear existing options
                          
                          timeSlots3.forEach(slot => {
                              const option = document.createElement('option');
                              option.value = slot;
                              option.textContent = slot;
                              timeSlotSelect3.appendChild(option);
                          });
                      } else {
                          // hide the time slots select element if either time input is empty
                          timeSlotSelect3.style.display = 'none';
                      }
                  }
                  
                  function generateTimeSlots3(startTime, endTime) {
                      const timeSlots3 = [];
                      const time3 = new Date(`2000-01-01 ${startTime}`);
                      const endTimeObj3 = new Date(`2000-01-01 ${endTime}`);
                      
                      while (time3 <= endTimeObj3) {
                          timeSlots3.push(time3.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}));
                          time3.setMinutes(time3.getMinutes() + 30); // increment time by 15 minutes
                      }
                      
                      return timeSlots3;
                  }
              </script>
          <script>
            const timeFromInput4 = document.getElementById('time_from4');
            const timeToInput4 = document.getElementById('time_to4');
            const timeSlotSelect4 = document.querySelector('select[name="timeslot4[]"]');
            
            // hide the time slots select element initially
            timeSlotSelect4.style.display = 'none';
            
            timeFromInput4.addEventListener('input', updateSelectOptions4);
            timeToInput4.addEventListener('input', updateSelectOptions4);
            
            function updateSelectOptions4() {
                const timeFrom4 = timeFromInput4.value;
                const timeTo4 = timeToInput4.value;
                
                if (timeFrom4 && timeTo4) {
                    // both time inputs have been selected, so show the time slots select element
                    timeSlotSelect4.style.display = 'block';
                    
                    const timeSlots4 = generateTimeSlots4(timeFrom4, timeTo4);
                    timeSlotSelect4.innerHTML = ''; // clear existing options
                    
                    timeSlots4.forEach(slot => {
                        const option = document.createElement('option');
                        option.value = slot;
                        option.textContent = slot;
                        timeSlotSelect4.appendChild(option);
                    });
                } else {
                    // hide the time slots select element if either time input is empty
                    timeSlotSelect4.style.display = 'none';
                }
            }
            
            function generateTimeSlots4(startTime, endTime) {
                const timeSlots4 = [];
                const time4 = new Date(`2000-01-01 ${startTime}`);
                const endTimeObj4 = new Date(`2000-01-01 ${endTime}`);
                
                while (time4 <= endTimeObj4) {
                    timeSlots4.push(time4.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}));
                    time4.setMinutes(time4.getMinutes() + 30); // increment time by 15 minutes
                }
                
                return timeSlots4;
            }
        </script>
        <script>
          const timeFromInput5 = document.getElementById('time_from5');
          const timeToInput5 = document.getElementById('time_to5');
          const timeSlotSelect5 = document.querySelector('select[name="timeslot5[]"]');
          
          // hide the time slots select element initially
          timeSlotSelect5.style.display = 'none';
          
          timeFromInput5.addEventListener('input', updateSelectOptions5);
          timeToInput5.addEventListener('input', updateSelectOptions5);
          
          function updateSelectOptions5() {
              const timeFrom5 = timeFromInput5.value;
              const timeTo5 = timeToInput5.value;
              
              if (timeFrom5 && timeTo5) {
                  // both time inputs have been selected, so show the time slots select element
                  timeSlotSelect5.style.display = 'block';
                  
                  const timeSlots5 = generateTimeSlots5(timeFrom5, timeTo5);
                  timeSlotSelect5.innerHTML = ''; // clear existing options
                  
                  timeSlots5.forEach(slot => {
                      const option = document.createElement('option');
                      option.value = slot;
                      option.textContent = slot;
                      timeSlotSelect5.appendChild(option);
                  });
              } else {
                  // hide the time slots select element if either time input is empty
                  timeSlotSelect5.style.display = 'none';
              }
          }
          
          function generateTimeSlots5(startTime, endTime) {
              const timeSlots5 = [];
              const time5 = new Date(`2000-01-01 ${startTime}`);
              const endTimeObj5 = new Date(`2000-01-01 ${endTime}`);
              
              while (time5 <= endTimeObj5) {
                  timeSlots5.push(time5.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}));
                  time5.setMinutes(time5.getMinutes() + 30); // increment time by 15 minutes
              }
              
              return timeSlots5;
          }
        </script>
      <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script>
          const timeFromInput6 = document.getElementById('time_from6');
          const timeToInput6 = document.getElementById('time_to6');
          const timeSlotSelect6 = document.querySelector('select[name="timeslot6[]"]');
          
          // hide the time slots select element initially
          timeSlotSelect6.style.display = 'none';
          
          timeFromInput6.addEventListener('input', updateSelectOptions6);
          timeToInput6.addEventListener('input', updateSelectOptions6);
          
          function updateSelectOptions6() {
              const timeFrom6 = timeFromInput6.value;
              const timeTo6 = timeToInput6.value;
              
              if (timeFrom6 && timeTo6) {
                  // both time inputs have been selected, so show the time slots select element
                  timeSlotSelect6.style.display = 'block';
                  
                  const timeSlots6 = generateTimeSlots6(timeFrom6, timeTo6);
                  timeSlotSelect6.innerHTML = ''; // clear existing options
                  
                  timeSlots6.forEach(slot => {
                      const option = document.createElement('option');
                      option.value = slot;
                      option.textContent = slot;
                      timeSlotSelect6.appendChild(option);
                  });
              } else {
                  // hide the time slots select element if either time input is empty
                  timeSlotSelect6.style.display = 'none';
              }
          }
          
          function generateTimeSlots6(startTime, endTime) {
              const timeSlots6 = [];
              const time6 = new Date(`2000-01-01 ${startTime}`);
              const endTimeObj6 = new Date(`2000-01-01 ${endTime}`);
              
              while (time6 <= endTimeObj6) {
                  timeSlots6.push(time6.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}));
                  time6.setMinutes(time6.getMinutes() + 30); // increment time by 15 minutes
              }
              
              return timeSlots6;
          }
        </script>

	</body>
</html>