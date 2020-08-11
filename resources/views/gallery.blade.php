@extends('layouts.frontend')
@section('title')
    Gallery | {{ config('app.name') }}
@endsection

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'Gallery' , 'subtitle' => 'Our Gallery'])
@endsection

@section('main_content')
<section class="ttm-row pb-70 res-991-pb-20 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row multi-columns-row ttm-boxes-row-wrapper">
            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                <!-- featured-imagebox -->
                <div class="featured-imagebox featured-imagebox-portfolio">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <a href="#"> <img class="img-fluid" src="/images/pig.png" alt="image"></a>
                    </div><!-- featured-thumbnail end-->
                    <!-- ttm-box-view-overlay -->
                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a class="ttm_prettyphoto ttm_image" title="piggery" data-rel="prettyPhoto" href="/images/pig.png">
                                <i class="ti ti-search"></i>
                            </a>
                        </div>
                        <div class="ttm-box-view-content-inner">
                            <div class="featured-content featured-content-portfolio">
                                <div class="featured-title">
                                    <h5><a href="#">Piggery section</a></h5>
                                </div>
                                <!-- <span class="category">
                                    <a href="portfolio-category.html">Cardiology</a>,
                                    <a href="portfolio-category.html">Oncology</a>
                                </span> -->
                            </div>
                        </div>
                    </div><!-- ttm-box-view-overlay end-->
                </div><!-- featured-imagebox -->
            </div>
            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                <!-- featured-imagebox -->
                <div class="featured-imagebox featured-imagebox-portfolio">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <a href="#"> <img class="img-fluid" src="/images/wk.png" alt="image"></a>
                    </div><!-- featured-thumbnail end-->
                    <!-- ttm-box-view-overlay -->
                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a class="ttm_prettyphoto ttm_image" title="workers" data-rel="prettyPhoto" href="/images/wk.png">
                                <i class="ti ti-search"></i>
                            </a>
                        </div>
                        <div class="ttm-box-view-content-inner">
                            <div class="featured-content featured-content-portfolio">
                                <div class="featured-title">
                                    <h5><a href="#">Farm Tour</a></h5>
                                </div>
                                <!-- <span class="category">
                                    <a href="portfolio-category.html">Orthopedics</a>,
                                    <a href="portfolio-category.html">Pharmacy</a>
                                </span> -->
                            </div>
                        </div>
                    </div><!-- ttm-box-view-overlay end-->
                </div><!-- featured-imagebox -->
            </div>
            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                <!-- featured-imagebox -->
                <div class="featured-imagebox featured-imagebox-portfolio">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <a href="#"> <img class="img-fluid" src="/images/fam.png" alt="image"></a>
                    </div><!-- featured-thumbnail end-->
                    <!-- ttm-box-view-overlay -->
                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a class="ttm_prettyphoto ttm_image" title="Farm" data-rel="prettyPhoto" href="/images/fam.png">
                                <i class="ti ti-search"></i>
                            </a>
                        </div>
                        <div class="ttm-box-view-content-inner">
                            <div class="featured-content featured-content-portfolio">
                                <div class="featured-title">
                                    <h5><a href="#">Farmland</a></h5>
                                </div>
                                <!-- <span class="category">
                                    <a href="portfolio-category.html">Anesthesiology</a>,
                                    <a href="portfolio-category.html">Orthopedics</a>
                                </span> -->
                            </div>
                        </div>
                    </div><!-- ttm-box-view-overlay end-->
                </div><!-- featured-imagebox -->
            </div>
            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                <!-- featured-imagebox -->
                <div class="featured-imagebox featured-imagebox-portfolio">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <a href="#"> <img class="img-fluid" src="/images/fishg.png" alt="image"></a>
                    </div><!-- featured-thumbnail end-->
                    <!-- ttm-box-view-overlay -->
                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a class="ttm_prettyphoto ttm_image" title="fish pond" data-rel="prettyPhoto" href="/images/fishg.png">
                                <i class="ti ti-search"></i>
                            </a>
                        </div>
                        <div class="ttm-box-view-content-inner">
                            <div class="featured-content featured-content-portfolio">
                                <div class="featured-title">
                                    <h5><a href="#">Fish Pond</a></h5>
                                </div>
                                <!-- <span class="category">
                                    <a href="portfolio-category.html">Cardiology</a>,
                                    <a href="portfolio-category.html">Pharmacy</a>
                                </span> -->
                            </div>
                        </div>
                    </div><!-- ttm-box-view-overlay end-->
                </div><!-- featured-imagebox -->
            </div>
            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                <!-- featured-imagebox -->
                <div class="featured-imagebox featured-imagebox-portfolio">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <a href="#"> <img class="img-fluid" src="/images/gl.png" alt="image"></a>
                    </div><!-- featured-thumbnail end-->
                    <!-- ttm-box-view-overlay -->
                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a class="ttm_prettyphoto ttm_image" title="farmland" data-rel="prettyPhoto" href="/images/gl.png">
                                <i class="ti ti-search"></i>
                            </a>
                        </div>
                        <div class="ttm-box-view-content-inner">
                            <div class="featured-content featured-content-portfolio">
                                <div class="featured-title">
                                    <h5><a href="#">Farm Estate</a></h5>
                                </div>
                                <!-- <span class="category">
                                    <a href="portfolio-category.html">Anesthesiology</a>,
                                    <a href="portfolio-category.html">Pediatric</a>
                                </span> -->
                            </div>
                        </div>
                    </div><!-- ttm-box-view-overlay end-->
                </div><!-- featured-imagebox -->
            </div>
            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                <!-- featured-imagebox -->
                <div class="featured-imagebox featured-imagebox-portfolio">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <a href="#"> <img class="img-fluid" src="/images/gal.png" alt="image"></a>
                    </div><!-- featured-thumbnail end -->
                    <!-- ttm-box-view-overlay -->
                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a class="ttm_prettyphoto ttm_image" title="farm work" data-rel="prettyPhoto" href="/images/gal.png">
                                <i class="ti ti-search"></i>
                            </a>
                        </div>
                        <div class="ttm-box-view-content-inner">
                            <div class="featured-content featured-content-portfolio">
                                <div class="featured-title">
                                    <h5><a href="#">Harvesting</a></h5>
                                </div>
                                <!-- <span class="category">
                                    <a href="portfolio-category.html">Oncology</a>,
                                    <a href="portfolio-category.html">Pharmacy</a>
                                </span> -->
                            </div>
                        </div>
                    </div><!-- ttm-box-view-overlay end-->
                </div><!-- featured-imagebox -->
            </div>
             
            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                <!-- featured-imagebox -->
                <div class="featured-imagebox featured-imagebox-portfolio">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <a href="#"> <img class="img-fluid" src="/images/mac.png" alt="image"></a>
                    </div><!-- featured-thumbnail end -->
                    <!-- ttm-box-view-overlay -->
                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a class="ttm_prettyphoto ttm_image" title="oil processing" data-rel="prettyPhoto" href="/images/mac.png">
                                <i class="ti ti-search"></i>
                            </a>
                        </div>
                        <div class="ttm-box-view-content-inner">
                            <div class="featured-content featured-content-portfolio">
                                <div class="featured-title">
                                    <h5><a href="#">Essential oil extraction</a></h5>
                                </div>
                                <!-- <span class="category">
                                    <a href="portfolio-category.html">Anesthesiology</a>,
                                    <a href="portfolio-category.html">Pediatric</a>
                                </span> -->
                            </div>
                        </div>
                    </div><!-- ttm-box-view-overlay end-->
                </div><!-- featured-imagebox -->
            </div>
            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                <!-- featured-imagebox -->
                <div class="featured-imagebox featured-imagebox-portfolio">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <a href="#"> <img class="img-fluid" src="/images/rab.png" alt="image"></a>
                    </div><!-- featured-thumbnail end -->
                    <!-- ttm-box-view-overlay -->
                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a class="ttm_prettyphoto ttm_image" title="Rabbit" data-rel="prettyPhoto" href="/images/rab.png">
                                <i class="ti ti-search"></i>
                            </a>
                        </div>
                        <div class="ttm-box-view-content-inner">
                            <div class="featured-content featured-content-portfolio">
                                <div class="featured-title">
                                    <h5><a href="#">Rabbitery Center</a></h5>
                                </div>
                                <!-- <span class="category">
                                    <a href="portfolio-category.html">Cardiology</a>,
                                    <a href="portfolio-category.html">Oncology</a>
                                </span> -->
                            </div>
                        </div>
                    </div><!-- ttm-box-view-overlay end-->
                </div><!-- featured-imagebox -->
            </div>
            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                <!-- featured-imagebox -->
                <div class="featured-imagebox featured-imagebox-portfolio">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <a href="#"> <img class="img-fluid" src="/images/comm.png" alt="image"></a>
                    </div><!-- featured-thumbnail end -->
                    <!-- ttm-box-view-overlay -->
                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a class="ttm_prettyphoto ttm_image" title="Commissioner" data-rel="prettyPhoto" href="/images/comm.png">
                                <i class="ti ti-search"></i>
                            </a>
                        </div>
                        <div class="ttm-box-view-content-inner">
                            <div class="featured-content featured-content-portfolio">
                                <div class="featured-title">
                                    <h5><a href="#">Commissioner of Agriculture at the Park</a></h5>
                                </div>
                                <!-- <span class="category">
                                    <a href="portfolio-category.html">Cardiology</a>,
                                    <a href="portfolio-category.html">Oncology</a>
                                </span> -->
                            </div>
                        </div>
                    </div><!-- ttm-box-view-overlay end-->
                </div><!-- featured-imagebox -->
            </div>
            
        </div><!-- row end -->
    </div>
</section>
@endsection