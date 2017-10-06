@extends('Frontend.includes.header')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('frontend_container')
      <div class="hero" id="highlighted">
        <div class="inner">
          <div id="highlighted-slider" class="container">
            <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp"}'>
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
              
            </div>
          </div>
        </div>
      </div>
      <div class="showcase block block-border-bottom-grey">
        <div class="container">
          <h2 class="block-title">
            Famous Places
          </h2>
          <p>These are the famous places in Myanmar. You can see many places by clicking next button and can read more about them by clicking the 'Read More' button.</p>
          <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
            @foreach ($famousplaces as $famousplace)
            <div class="item">
              <a href="#" class="overlay-wrapper">
                <img src="/images/famousplace/{{$famousplace->img}}" alt="Project 5 image" class="img-responsive underlay">
              </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                  <a href="#">{{$famousplace->name}}</a>
                </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read More</a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    
    

    @endsection

@push('scripts')
@endpush
    
    <!-- Required JavaScript Libraries -->
   
    
  
 