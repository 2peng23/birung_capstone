<div class="page-section border border-black bg-light rounded" id="doctor">
    <div class="container">
      <h1 class="text-center mb-5 animate__animated infinite animate__pulse" style="font-style: bolder; font-size:40px;" id="ourdoc">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp text-center" id="doctorSlideshow">

      @foreach($doctor as $doctors)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img style="height:300px !important" src="doctorimage/{{$doctors->image}}" alt="">
              
            </div>

            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              <span class="text-sm text-grey">{{$doctors->specialty}}</span><br><br>
              <a href="{{url('createappointment', $doctors->id)}}" class="btn btn-success">Make an Appointment</a>
            </div>
          </div>
        </div>

        @endforeach
        
      </div>
    </div> 
  </div>
  
<script>
  //Doctor
const doc = document.querySelector('#doctor')
const ourdoc = document.querySelector('#ourdoc')
doc.addEventListener('mouseover', function(e){
    ourdoc.classList.remove('animate__pulse')
    ourdoc.classList.add('text-success', 'animate__heartBeat')
    const target = e.target;
    if(target.matches('.item')){
        target.style.animation = 'fadeInLeft 0.5s forwards'
        target.style.transform = 'translateX(-100%)' 
        target.style.opacity = '0'
    }
});
doc.addEventListener('mouseout', function(e){
    ourdoc.classList.add('animate__pulse')
    ourdoc.classList.remove('text-success', 'animate__heartBeat')
    
});
</script>