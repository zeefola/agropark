@extends('layouts.frontend')
@section('title')
     Our Team | {{ config('app.name') }}
@endsection

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'Our Team' , 'subtitle' => 'Our Team'])
@endsection

@section('main_content')
<section class="ttm-row pb-70 res-991-pb-20 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <!-- section-title -->
                <div class="section-title with-desc clearfix">
                    <div class="title-header">
                        <h5>MEET OUR EXPERIENCED TEAM</h5>
                        <h2 class="title">Our Management Team</h2>
                    </div>
                    <div class="title-desc">Our professional team works with decades of combined experience in the fields of business management, operations, finance, client service, and consultancy.</div>
                </div><!-- section-title end -->
            </div>
            <div class="col-lg-2 col-md-2"></div>
        </div><!-- row end -->
        <!-- row -->
        <div class="row multi-columns-row ttm-boxes-row-wrapper">

            <!--For loop for Management Team section -->
@foreach($datas as $data)
            <div class="ttm-box-col-wrapper col-lg-3 col-md-4 col-xs-12">
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="{{ $data->thumbnail }} " alt="image"> 
                    </div> 
                    <div class="ttm-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a href="#" target="_blank">
                                 <i class="ti ti-plus"></i>
                            </a>
                           
                        </div>
                    </div>
                    <div class="featured-content featured-content-team">
                        <div class="ttm-team-position">{{ $data->position }}</div>
                        <div class="featured-title">
                            <h5>
                                 <a href="#" target="_blank">
                                 {{ $data->fullname }}
                                 </a>
                            </h5>
                           
                           
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
            </div>
@endforeach
            <!-- row -->
          </div><!-- row end -->


          <!-- row -->
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <!-- section-title -->
                <div class="section-title with-desc clearfix">
                    <div class="title-header">
                        <h5>MEET OUR EXPERIENCED TEAM</h5>
                        <h2 class="title">Advisory Board</h2>
                    </div>
                    <!-- <div class="title-desc">Our professional team works with decades of combined experience in the fields of business management, operations, finance, client service, and consultancy.</div> -->
                </div><!-- section-title end -->
            </div>
            <div class="col-lg-2 col-md-2"></div>
        </div><!-- row end -->
        <!-- row -->
        <div class="row multi-columns-row ttm-boxes-row-wrapper">

       <!-- For loop for Advisory board  -->

            <div class="ttm-box-col-wrapper col-lg-3 col-md-4 col-xs-12" >
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="    " alt="image"> 
                    </div> 
                    <div class="ttm-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a href="#" target="_blank">
                                 <i class="ti ti-plus"></i>
                            </a>
                           
                        </div>
                    </div>
                    <div class="featured-content featured-content-team">
                        <div class="ttm-team-position">      </div>
                        <div class="featured-title">
                            <h5>
                                 <a href="#" target="_blank">
                                   
                                 </a>
                            </h5>
                           
                           
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
            </div>

            <!-- row -->
          </div><!-- row end -->
    </div>
</section>
@endsection