
<div class="page-section bg-light" id="doctor">
  <div style="display:flex;" class="table-responsive">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

      @foreach($doctor as $doctors)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300 px" src="doctorimage/{{$doctors->image}}" alt="">
              
            </div>

            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              <span class="text-sm text-grey">{{$doctors->specialty}}</span>
            </div>
          </div>
        </div>

        @endforeach
        
      </div>
    </div>

    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Staffs</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

      @foreach($staff as $staffs)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300 px" src="doctorimage/{{$staffs->image}}" alt="">
              
            </div>

            <div class="body">
              <p class="text-xl mb-0">{{$staffs->name}}</p>
              <span class="text-sm text-grey">{{$staffs->role}}</span>
            </div>
          </div>
        </div>

        @endforeach
        
      </div>
    </div>

    
    
    

    </div>
    
  </div>

  