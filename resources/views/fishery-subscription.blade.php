@extends('layouts.frontend')

@section('title')
    Fishery Subscription | {{ config('app.name') }}
@endsection

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'Fishery Subscription' , 'subtitle' => 'Fishery Subscription'])
@endsection

@section('main_content')
<section class="ttm-row pb-50 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- ttm-pf-single-content-wrapper-innerbox -->
                <div class="ttm-pf-single-content-wrapper-innerbox ttm-pf-view-left-image">
                    <div class="ttm-pf-detail-box">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="ttm-featured-wrapper ttm-portfolio-featured-wrapper">
                                    <img class="img-fluid" src="images/portfolio/post-one-1200x800.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ttm-pf-single-detail-box res-991-mt-30">
                                    <div class="ttm-pf-detailbox">
                                        <ul class="ttm-pf-detailbox-list">
                                            <li class="ttm-pf-details-date">
                                                <span class="ttm-pf-left-details"><i class="fa fa-medkit"></i>Research Name </span>
                                                <span class="ttm-pf-right-details">Vulputate Cursus</span>
                                            </li>
                                            <li class="ttm-pf-details-date">
                                                <span class="ttm-pf-left-details"><i class="fa fa-user"></i> Patient </span>
                                                <span class="ttm-pf-right-details">Andrew Bert</span>
                                            </li>
                                            <li class="ttm-pf-details-date">
                                                <span class="ttm-pf-left-details"><i class="fa fa-user-md"></i>Doctor </span>
                                                <span class="ttm-pf-right-details">Dr. Teresa Mayer</span>
                                            </li>
                                            <li class="ttm-pf-details-date">
                                                <span class="ttm-pf-left-details"><i class="fa fa-stethoscope"></i>Category </span>
                                                <span class="ttm-pf-right-details">Neurology</span>
                                            </li>
                                            <li class="ttm-pf-details-date">
                                                <span class="ttm-pf-left-details"><i class="fa fa-calendar"></i>Date </span>
                                                <span class="ttm-pf-right-details">25th November 2018</span>
                                            </li>
                                            <li class="ttm-pf-details-date">
                                                <span class="ttm-pf-left-details"><i class="fa fa-map-marker"></i>Location </span>
                                                <span class="ttm-pf-right-details">Bulls Stadium, Califorina</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ttm-pf-single-content-area">
                        <div class="ttm-portfolio-description">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Did You Know?</h4>
                                    <div class="sep_holder_box width-100 mb-20">
                                        <span class="sep_holder"><span class="sep_line"></span></span>
                                        <span class="sep_holder"><span class="sep_line"></span></span>
                                    </div>
                                    <p>Let us introduce you to Tilapia fish farming. Tilapia is one of the most relished aquatic foods in the world. Today, it is the second most farmed fish globally. In many countries around the world, Tilapia significantly improved Food Security. The world estimated worth of Tilapia aquaculture is around 3 to $ 3.5 billion.</p>
                                </div>
                            </div>
                            <!-- row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pt-30">
                                        <h4>Subscription Details</h4>
                                        <div class="sep_holder_box width-100 mb-20">
                                            <span class="sep_holder"><span class="sep_line"></span></span>
                                            <span class="sep_holder"><span class="sep_line"></span></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">repudiated and annoyances Lorem ipsum dolor sit consectetur.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">annoyances pain can procure him great pleasure ipsum sit.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><a href="https://agropark.ng/asset-files/investment-breakdown.pptx" > <span class="ttm-list-li-content">You can download this investment breakdown for further details</span> </a></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><a href="https://www.app.agropark.ng/" > <span class="ttm-list-li-content">Please click on this link to submit an application</span> </a> </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">repudiated and annoyances Lorem ipsum dolor sit consectetur.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">annoyances pain can procure him great pleasure ipsum sit.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">combined with handful of model sentence and repudiated.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">accusantium doloremque laudantium.</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- row end-->
                            <!-- row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pt-30">
                                        <h4>What to expect</h4>
                                        <div class="sep_holder_box width-100 mb-20">
                                            <span class="sep_holder"><span class="sep_line"></span></span>
                                            <span class="sep_holder"><span class="sep_line"></span></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p><img class="alignright img-fluid" src="/images/fi.png" alt="">Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus posuere posuere ex, ac tincidunt turpis porta id. Aenean sed mauris lacus.&nbsp;&nbsp;It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures.Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus posuere posuere ex, ac tincidunt turpis porta id. Aenean sed mauris lacus.&nbsp;&nbsp;It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-12">
                        
                        <div class="ttm-nextprev-bottom-nav">
                            <nav class="navigation post-navigation">
                                <div class="nav-links">
                                    <div class="nav-previous"><a href="#" rel="prev"><span class="meta-nav" aria-hidden="true">Previous</span></a></div>
                                </div>
                            </nav>
                        </div>
                    </div> -->
                </div><!-- ttm-pf-single-content-wrapper-innerbox end-->


                @includeIf('layouts.related_portfolio')
                
            </div>
        </div>
    </div>
</section>


@endsection
