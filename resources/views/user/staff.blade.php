<head>
    <style>
        #staffSlideshow {
  display: block;
  position: relative;
  margin: 0 auto;
  width: 80%;
}

#staffSlideshow .owl-item {
  -webkit-backface-visibility: hidden;
  -webkit-transform: translateZ(0) scale(1, 1);
}

#staffSlideshow .owl-item > div {
  text-align: center;
  padding: 10px;
}

#staffSlideshow .owl-item > div img {
  display: inline-block;
  max-width: 100%;
  height: auto;
  border-radius: 50%;
}

#staffSlideshow .owl-nav {
  position: absolute;
  top: 50%;
  width: 100%;
}

#staffSlideshow .owl-nav button {
  position: absolute;
  top: -50%;
  transform: translateY(50%);
  font-size: 20px;
  color: #000;
  background-color: #fff;
  border: 1px solid #000;
  padding: 5px 10px;
  border-radius: 50%;
  cursor: pointer;
}

#staffSlideshow .owl-nav button.owl-prev {
  left: 10px;
}

#staffSlideshow .owl-nav button.owl-next {
  right: 10px;
}

#staffSlideshow .owl-dots {
  position: absolute;
  bottom: 0;
  width: 100%;
  text-align: center;
  margin-bottom: 10px;
}

#staffSlideshow .owl-dots button {
  display: inline-block;
  margin: 0 5px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: #000;
  cursor: pointer;
}

#staffSlideshow .owl-dots button.active {
  background-color: #fff;
  border: 1px solid #000;
}

    </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
<!-- Include Owl Carousel library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</head>
<div class="page-section" id="staff">
    <div class="container" >
      <h1 class="text-center mb-5 wow fadeInUp" style="font-style: bolder; font-size:40px;">Our Staffs</h1>

      <div class="owl-carousel wow fadeInUp" id="staffSlideshow" >

      @foreach($staff as $doctors)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img style="height:300px !important" src="doctorimage/{{$doctors->image}}" alt="">
              <div class="meta">
              </div>
            </div>

            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              <span class="text-sm text-grey">{{$doctors->role}}</span>
            </div>
          </div>
        </div>

        @endforeach
        
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function(){
  $("#staffSlideshow").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    nav: true,
    dots: true,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
  });
});

  </script>