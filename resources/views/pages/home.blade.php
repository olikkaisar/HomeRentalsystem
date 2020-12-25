@extends ('layout')
@section('content')

<!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <br></p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Rent</span>Home
                      <br>Find your's</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <br></p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Rent</span>Home
                      <br>Find your's</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <br></p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Rent</span>Home
                      <br>Find your's</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Latest Properties</h2>
              </div>
              <div class="title-link">
                <a href="{{url('available_rooms')}}">All Property
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>



        <div id="property-carousel" class="owl-carousel owl-theme">
            <?php 
              $all_post_info=DB::table('post')
                        ->where('publication_status',1)
                        ->get();

              foreach ($all_post_info as $v_post) { ?>

          <div class="carousel-item-b">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="{{url($v_post->image)}}" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <p class="card-title-a">
                      <a href="property-single.html">{{$v_post->description}}</a>
                    </p>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">{{$v_post->price}}</span>
                    </div>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Name</h4>
                        <span>{{$v_post->name}}</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Phone</h4>
                        <span>{{$v_post->phone}}</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Location</h4>
                        <span>{{$v_post->location}}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <?php } ?>
          
        </div>
          
    </section><!-- End Latest Properties Section -->

   
  </main><!-- End #main -->

@endsection