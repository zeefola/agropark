@extends('layouts.frontend')
@section('title')
     Our Team | {{ config('app.name') }}
@endsection

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'Bulletin' , 'subtitle' => 'Our Bulletin'])
@endsection

@section('main_content')
<section class="ttm-row pb-70 res-991-pb-20 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="ttm-tabs">

                    <div class="content-tab pt-20">
                        <!-- content-inner -->
                        <div class="content-inner active">
                            <div class="row multi-columns-row ttm-boxes-row-wrapper">
                               <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                    <!-- featured-imagebox -->
                                    <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image ttm-box-view-top-image">
                                        <div class="ttm-box-view-content-inner">
                                            <!-- featured-thumbnail -->
                                            <div class="featured-thumbnail">
                                                <a href="#"> <img class="img-fluid" src="/images/nov.png" alt="image"></a>
                                            </div><!-- featured-thumbnail end-->
                                            <!-- ttm-box-view-overlay -->
                                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                <div class="featured-iconbox ttm-media-link">
                                                    <a class="ttm_prettyphoto ttm_image" title="November 2019" data-rel="prettyPhoto" href="/images/nov.png">
                                                        <i class="ti ti-search"></i>
                                                    </a>
                                                </div>
                                            </div><!-- ttm-box-view-overlay end-->
                                        </div>
                                        <div class="ttm-box-bottom-content featured-content-portfolio box-shadow">
                                            <div class="featured-title">
                                                <h5><a href="/images/nov2019.pdf">November 2019</a></h5>
                                            </div>
                                            <span class="category">
                                                <a href="#">Bulletin</a>,
                                                <a href="#">2019</a>
                                            </span>
                                        </div>
                                    </div><!-- featured-imagebox -->
                                </div>
                                <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                    <!-- featured-imagebox -->
                                    <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                                        <div class="ttm-box-view-content-inner">
                                            <!-- featured-thumbnail -->
                                            <div class="featured-thumbnail">
                                                <a href="#"> <img class="img-fluid" src="/images/decem.png" alt="image"></a>
                                            </div><!-- featured-thumbnail end-->
                                            <!-- ttm-box-view-overlay -->
                                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                <div class="featured-iconbox ttm-media-link">
                                                    <a class="ttm_prettyphoto ttm_image" title="December 2019" data-rel="prettyPhoto" href="/images/decem.png">
                                                        <i class="ti ti-search"></i>
                                                    </a>
                                                </div>
                                            </div><!-- ttm-box-view-overlay end-->
                                        </div>
                                        <div class="ttm-box-bottom-content featured-content-portfolio box-shadow">
                                            <div class="featured-title">
                                                <h5><a href="/images/dec2019.pdf">December 2019</a></h5>
                                            </div>
                                            <span class="category">
                                                <a href="#">Bulletin</a>,
                                                <a href="#">2019</a>
                                            </span>
                                        </div>
                                    </div><!-- featured-imagebox -->
                                </div>
                                <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                    <!-- featured-imagebox -->
                                    <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                                        <div class="ttm-box-view-content-inner">
                                            <!-- featured-thumbnail -->
                                            <div class="featured-thumbnail">
                                                <a href="#"> <img class="img-fluid" src="/images/jan.png" alt="image"></a>
                                            </div><!-- featured-thumbnail end-->
                                            <!-- ttm-box-view-overlay -->
                                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                <div class="featured-iconbox ttm-media-link">
                                                    <a class="ttm_prettyphoto ttm_image" title="January 2020" data-rel="prettyPhoto" href="/images/jan.png">
                                                        <i class="ti ti-search"></i>
                                                    </a>
                                                </div>
                                            </div><!-- ttm-box-view-overlay end-->
                                        </div>
                                        <div class="ttm-box-bottom-content featured-content-portfolio box-shadow">
                                            <div class="featured-title">
                                                <h5><a href="/images/jan2020.pdf">January 2020</a></h5>
                                            </div>
                                            <span class="category">
                                                <a href="#">Bulletin</a>,
                                                <a href="#">2020</a>
                                            </span>
                                        </div>
                                    </div><!-- featured-imagebox -->
                                </div>
                              
                            </div><!-- row end -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
@endsection