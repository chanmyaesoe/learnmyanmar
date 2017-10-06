@extends('Frontend.includes.header')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('frontend_container')
      <div class="hero" id="highlighted">
        <div class="inner">
          <div id="highlighted-slider" class="container">
            <!-- <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp"}'>
              @foreach ($slides as $slide)
                  <div class="item">
                  <div class="row">
                    <div class="col-md-6 col-md-push-6 item-caption">
                        <h2 class="h1 text-weight-light">
                        {{$slide->title}}
                      </h2>
                      <p>{{$slide->description}}</p>
                      <a href="#" class="btn btn-more btn-lg i-right">Learn More</a>
                    </div>
                    <div class="col-md-6 col-md-pull-6 hidden-xs">
                      <img src="/images/slides/{{$slide->img}}" alt="Slide 1" class="center-block img-responsive">
                    </div>
                  </div>
                </div>
                  @endforeach
              
            </div> -->
          </div>
        </div>
      </div>
      <div class="showcase block block-border-bottom-grey">
        <!-- <div class="container">
          <h2 class="block-title">
            Showcase
          </h2>
          <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
          <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                <img src="img/showcase/project1.png" alt="Project 1 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 1</span> </span>
                </span>
              </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                  <a href="#">Project 1</a>
                </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
              </div>
            </div>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                <img src="img/showcase/project2.png" alt="Project 2 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 2</span> </span>
                </span>
              </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                  <a href="#">Project 2</a>
                </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
              </div>
            </div>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                <img src="img/showcase/project3.png" alt="Project 3 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 3</span> </span>
                </span>
              </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                  <a href="#">Project 3</a>
                </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
              </div>
            </div>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                <img src="img/showcase/project4.png" alt="Project 4 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 4</span> </span>
                </span>
              </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                  <a href="#">Project 4</a>
                </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
              </div>
            </div>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                <img src="img/showcase/project5.png" alt="Project 5 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 5</span> </span>
                </span>
              </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                  <a href="#">Project 5</a>
                </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
              </div>
            </div>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                <img src="img/showcase/project6.png" alt="Project 6 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 6</span> </span>
                </span>
              </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                  <a href="#">Project 6</a>
                </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
              </div>
            </div>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                <img src="img/showcase/project7.png" alt="Project 7 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 7</span> </span>
                </span>
              </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                  <a href="#">Project 7</a>
                </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
              </div>
            </div>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                <img src="img/showcase/project8.png" alt="Project 8 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 8</span> </span>
                </span>
              </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                  <a href="#">Project 8</a>
                </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
              </div>
            </div>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                <img src="img/showcase/project9.png" alt="Project 9 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 9</span> </span>
                </span>
              </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                  <a href="#">Project 9</a>
                </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
              </div>
            </div>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                <img src="img/showcase/project10.png" alt="Project 10 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 10</span> </span>
                </span>
              </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                  <a href="#">Project 10</a>
                </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
              </div>
            </div>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                <img src="img/showcase/project11.png" alt="Project 11 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 11</span> </span>
                </span>
              </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                  <a href="#">Project 11</a>
                </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
              </div>
            </div>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                <img src="img/showcase/project12.png" alt="Project 12 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 12</span> </span>
                </span>
              </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                  <a href="#">Project 12</a>
                </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    
    

    @endsection

@push('scripts')
@endpush
    
    <!-- Required JavaScript Libraries -->
   
    
  
 