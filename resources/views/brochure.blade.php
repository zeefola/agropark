@extends('layouts.frontend')
@section('title')
     Brochure | {{ config('app.name') }}
@endsection

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'Brochure' , 'subtitle' => 'Our Brochure'])
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
                                                <a href="#"> <img class="img-fluid" src="images/portfolio/01.jpg" alt="image"></a>
                                            </div><!-- featured-thumbnail end-->
                                            <!-- ttm-box-view-overlay -->
                                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                <div class="featured-iconbox ttm-media-link">
                                                    <a class="ttm_prettyphoto ttm_image" title="AgroPark" data-rel="prettyPhoto" href="images/portfolio/01.jpg">
                                                        <i class="ti ti-search"></i>
                                                    </a>
                                                </div>
                                            </div><!-- ttm-box-view-overlay end-->
                                        </div>
                                        <div class="ttm-box-bottom-content featured-content-portfolio box-shadow">
                                            <div class="featured-title">
                                                <h5><a href="/images/brochure.pdf">Agropark Brochure</a></h5>
                                            </div>
                                            <!-- <span class="category">
                                                <a href="#">Cardiology</a>,
                                                <a href="#">Oncology</a>
                                            </span> -->
                                        </div>
                                    </div><!-- featured-imagebox -->
                                </div>
                                <!-- <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6"> -->
                                    <!-- featured-imagebox -->
                                    <!-- <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                                        <div class="ttm-box-view-content-inner"> -->
                                            <!-- featured-thumbnail -->
                                            <!-- <div class="featured-thumbnail">
                                                <a href="#"> <img class="img-fluid" src="images/portfolio/02.jpg" alt="image"></a>
                                            </div> -->
                                            <!-- featured-thumbnail end-->
                                            <!-- ttm-box-view-overlay -->
                                            <!-- <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                <div class="featured-iconbox ttm-media-link">
                                                    <a class="ttm_prettyphoto ttm_image" title="Diagnostic Imagine" data-rel="prettyPhoto" href="images/portfolio/02.jpg">
                                                        <i class="ti ti-search"></i>
                                                    </a>
                                                </div>
                                            </div> -->
                                            <!-- ttm-box-view-overlay end-->
                                        <!-- </div>
                                        <div class="ttm-box-bottom-content featured-content-portfolio box-shadow">
                                            <div class="featured-title">
                                                <h5><a href="portfolio-style-3.html">Diagnostic Imagine</a></h5>
                                            </div>
                                            <span class="category">
                                                <a href="portfolio-category.html">Orthopedics</a>,
                                                <a href="portfolio-category.html">Pharmacy</a>
                                            </span>
                                        </div>
                                    </div> -->
                                    <!-- featured-imagebox -->
                                <!-- </div> -->
                                <!-- <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6"> -->
                                    <!-- featured-imagebox -->
                                    <!-- <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                                        <div class="ttm-box-view-content-inner"> -->
                                            <!-- featured-thumbnail -->
                                            <!-- <div class="featured-thumbnail">
                                                <a href="#"> <img class="img-fluid" src="images/portfolio/03.jpg" alt="image"></a>
                                            </div> -->
                                            <!-- featured-thumbnail end-->
                                            <!-- ttm-box-view-overlay -->
                                            <!-- <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                <div class="featured-iconbox ttm-media-link">
                                                    <a class="ttm_prettyphoto ttm_image" title="Orthodontics Surgery &amp; Transplants" data-rel="prettyPhoto" href="images/portfolio/03.jpg">
                                                        <i class="ti ti-search"></i>
                                                    </a>
                                                </div>
                                            </div> -->
                                            <!-- ttm-box-view-overlay end-->
                                        <!-- </div>
                                        <div class="ttm-box-bottom-content featured-content-portfolio box-shadow">
                                            <div class="featured-title">
                                                <h5><a href="portfolio-style-3.html">Orthodontics Surgery &amp; Transplants</a></h5>
                                            </div>
                                            <span class="category">
                                                <a href="portfolio-category.html">Anesthesiology</a>,
                                                <a href="portfolio-category.html">Orthopedics</a>
                                            </span>
                                        </div>
                                    </div> -->
                                    <!-- featured-imagebox -->
                                <!-- </div> -->
                              
                            </div><!-- row end -->
                        </div>





                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
@endsection