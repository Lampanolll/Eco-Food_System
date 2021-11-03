<div class="page-section">
  <div class="container">
    <h1 class="text-center mb-5 wow fadeInUp">Available Food Waste Company</h1>

    <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
      
      @foreach ($foodcomp as $foodcomps)
        
      <div class="item">
        <div class="card-doctor">
          <div class="header">
            <img height="300px" src="companyimage/{{$foodcomps->image}}" alt="">
            <div class="meta">
              <a href="#"><span class="mai-call"></span></a>
              <a href="#"><span class="mai-logo-whatsapp"></span></a>
            </div>
          </div>
          <div class="body">
            <p class="text-xl mb-0">{{$foodcomps->companyname}}</p>
            <span class="text-sm text-grey">Ratings & Reviews</span>
          </div>
        </div>
      </div>

      @endforeach
      
    </div>
  </div>
</div>