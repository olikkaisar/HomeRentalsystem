@extends('layout')
@section ('content')


 <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Amazing Properties</h1>
              <span class="color-text-a">Grid Properties</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Properties Grid
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
<?php 
              $all_post_info=DB::table('post')
                        ->where('publication_status',1)
                        ->get();

              foreach ($all_post_info as $v_post) { ?>
<div class="clearfix">
  <img src="{{url($v_post->image)}}" alt="..." class="float-left" style="width: 450px; margin-left: 200px">
  <div>
  <h5>{{$v_post->name}}</h5>
  <h5>{{$v_post->phone}}</h5>
  <h5>{{$v_post->location}}</h5>
  <h5>{{$v_post->price}}</h5>
  <p>{{$v_post->description}}</p>
  </div>


</div>
<br>

<?php } ?>

  </main><!-- End #main -->


@endsection