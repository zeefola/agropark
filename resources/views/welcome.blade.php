@extends("layouts.frontend")


@section('title')
     Agricultural Property Managers | {{ config('app.name') }}
@endsection

@section("slider")
  @includeIf("layouts.slider")
@endsection


@section("main_content")

<!--row-top-section-->
<section class="ttm-row row-top-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mt_60 res-991-mt-50">
                    <div class="row ttm-bgcolor-white ttm-box-seperator box-shadow">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box top-icon featured-icon-hover text-center">
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="themifyicon ti-bookmark-alt"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Who we are</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Agro Park Development Company Limited is primarily a farm management company</p>
                                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline mb-15" href="/about-us">VIEW MORE</a>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 box-shadow">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box top-icon featured-icon-hover text-center">
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="themifyicon ti-settings"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Farm Management</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>For something to be a green asset, it must have social, economic, and environmental</p>
                                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline mb-15" href="/asset-management">VIEW MORE</a>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box top-icon featured-icon-hover text-center">
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="themifyicon ti-world"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Farm Estate</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Our Delmont hospital utilizes state-of-the-art technology and employs a team of true experts.</p>
                                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline mb-15" href="#">VIEW MORE</a>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!-- row-top-section end -->


<!--introduction-section-->
<section class="ttm-row introduction-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12">
                <!-- col-bg-img-two -->
                <div class="col-bg-img-two ttm-col-bgimage-yes ttm-bg res-991-ptb-200 ttm-reset-content-center-991">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="layer-content">
                        <div class="ttm-video-icon ttm-left-video-icon text-right mt_30 mr_40 res-991-m-0">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-background-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- col-bg-img-two end-->
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="pl-60 pb-20 res-991-pl-0 res-991-pt-40 res-991-pb-0">
                    <!-- section title -->
                    <div class="section-title clearfix">
                        <div class="title-header">
                            <h5>INTRODUCING</h5>
                            <h2 class="title">Bringing change to our World through Agriculture</h2>
                        </div>
                    </div><!-- section title end -->
                    <div class="mb-30 clearfix">
                    <p>Farmland is a resource to its owner. It becomes an asset when cultivated. Many people and organisations are unable to take advantage of the appreciation of their asset as they are faced with issues such as seed procurement, farm management and ultimately, profitability. This underscores the importance of savvy managers that can help you maximise the effective and efficient use of agricultural resources.</p>
                    <p>At Agro Park, our farm management module involves strategic offtake partners that serve as a secured market for cultivated crops. We also manage rural estates as part of our mission to improve social standards through agriculture. </p>
                    <p> We acquire, develop, and partner with individuals, companies, and institutions to create a dramatic turnaround on existing agricultural infrastructures that are not yielding the expected profits. </p>
                    </div>
                    <div class="sep_holder_box pt-25 mb-45 res-991-mb-20">
                        <span class="sep_holder"><span class="sep_line"></span></span>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box left-icon icon-box-heading-only">
                                <div class="featured-icon ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Online Appointment!</h5>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box left-icon icon-box-heading-only">
                                <div class="featured-icon ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Available at Your Location</h5>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box left-icon icon-box-heading-only">
                                <div class="featured-icon ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Work Improvements</h5>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!--introduction-section end-->

<!--quality-services-section-->
 <div class="ttm-row quality-services-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 col-md-12">
                        <!-- section-title -->
                        <div class="section-title with-desc text-center clearfix">
                            <div class="title-header">
                                <h5>OUR SERVICES</h5>
                                <h2 class="title">Our High Value Investment Portfolios</h2>
                            </div>
                            <div class="title-desc">Our high value investments include short and long-term portfolios with guaranteed returns according to our terms and conditions.</div>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-2"></div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-md-4">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox ttm-box-view-top-image box-shadow res-991-mb-30">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="/images/pol.png" alt="">
                            </div>
                            <div class="featured-content featured-content-bottom">
                                <div class="featured-title">
                                    <h5>
                                        <a href="/poultry-subscription" target="_blank"> Livestock </a> </h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Raised in an agricultural setting, our livestock animals include poultry, pig, goat, rabbit, snail, and grasscutter. </p>
                                    <a href="/poultry-subscription"  class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline mb-5" target="_blank">READ MORE </a>
                                    <!-- <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline mb-5" href="#">READ MORE</a> -->
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox ttm-box-view-top-image box-shadow res-991-mb-30">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="/images/fish.png" alt="">
                            </div>
                            <div class="featured-content featured-content-bottom">
                                <div class="featured-title">
                                    <h5><a href="/fishery-subscription" target="_blank"> Aquaculture </a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Let us introduce you to Tilapia fish farming. Tilapia is one of the most relished aquatic foods in the world. Today, it is the second</p>
                                    <a href="/fishery-subscription" target="_blank" class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline mb-5">READ MORE </a>
                                    <!-- <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline mb-5" href="#">READ MORE</a> -->
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox ttm-box-view-top-image box-shadow res-991-mb-30">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="/images/oil.png" alt="">
                            </div>
                            <div class="featured-content featured-content-bottom">
                                <div class="featured-title">
                                    <h5><a href="/cashcrop-subscription" target="_blank"> Cash Crop </a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Our nurology hospital utilizes state-of-the-art technology and employs a team of true experts.</p>
                                    <a href="/cashcrop-subscription" target="_blank" class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline mb-5">READ MORE </a>
                                    <!-- <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline mb-5" href="#">READ MORE</a> -->
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-50 text-center res-991-mt-0">
                            <strong>Don’t hesitate, contact us for better help and services. 
                                <!-- <span class="ttm-textcolor-darkgrey"><u>Explore all Dr. Team</u></span> -->
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--quality-services-section end-->     
 <!--action-section-->
 <section class="ttm-row action-section bg-img5 ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="action-box text-center">
                            <h4 class="ttm-textcolor-skincolor font-weight-normal">Interested in our Investment Portfolios?</h4>
                            <div class="mb-20">
                                <h1 class="ttm-textcolor-white">Just fill out the Enquiry Form & We’ll Reach Out to You!</h1>
                            </div>
                            <h3 class="ttm-textcolor-white font-weight-normal">Contact us to get Your Quote or Email : {{ config('app.email_1')}}</h3>
                            <a href="/contact-us" target="_blank" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor mt-30">GET IN TOUCH </a>
                        </div>
                    </div>
                </div>
            </div>
</section>
        <!--action-section end-->

 <!--portfolio-section-->
 <section class="ttm-row portfolio-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <!-- section-title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h5>AWESOME TIPS</h5>
                                <h2 class="title">What We’ve Been up to</h2>
                            </div>
                            <div class="title-desc">Since we started out, our processes have been in line with best agricultural practices. The result is that our farm produce are some of the healthiest and affordable on the market.</div>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <a  href="/gallery" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-30 mt-45 res-991-mt-0 float-right">VIEW MORE</a>                 </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sep_holder_box width-100 mt_15 mb-40 res-991-mt-0">
                            <span class="sep_holder"><span class="sep_line"></span></span>
                            <span class="sep_holder"><span class="sep_line"></span></span>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row multi-columns-row ttm-boxes-row-wrapper ttm-boxes-spacing-10px">
                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <a href="#"> <img class="img-fluid" src="/images/up.png" alt="image"></a>
                            </div><!-- featured-thumbnail end-->
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="Workers" data-rel="prettyPhoto" href="/images/up.png">
                                        <i class="ti ti-search"></i>
                                    </a>
                                </div>
                                <div class="ttm-box-view-content-inner">
                                    <div class="featured-content featured-content-portfolio">
                                        <div class="featured-title">
                                            <h5><a href="#">Workers on the field</a></h5>
                                        </div>
                                        <!-- <span class="category">
                                            <a href="#">Cardiology</a>,
                                            <a href="#">Oncology</a>
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
                                <a href="#"> <img class="img-fluid" src="/images/wok.png" alt="image"></a>
                            </div><!-- featured-thumbnail end-->
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="Workers on the farm" data-rel="prettyPhoto" href="/images/wok.png">
                                        <i class="ti ti-search"></i>
                                    </a>
                                </div>
                                <div class="ttm-box-view-content-inner">
                                    <div class="featured-content featured-content-portfolio">
                                        <div class="featured-title">
                                            <h5><a href="#">Workers on the farm</a></h5>
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
                                <a href="#"> <img class="img-fluid" src="/images/work.png" alt="image"></a>
                            </div><!-- featured-thumbnail end-->
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="FArm" data-rel="prettyPhoto" href="/images/work.png">
                                        <i class="ti ti-search"></i>
                                    </a>
                                </div>
                                <div class="ttm-box-view-content-inner">
                                    <div class="featured-content featured-content-portfolio">
                                        <div class="featured-title">
                                            <h5><a href="#">Workers at lemongrass farm</a></h5>
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
                                <a href="#"> <img class="img-fluid" src="/images/rab.png" alt="image"></a>
                            </div><!-- featured-thumbnail end-->
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
                                <a href="#"> <img class="img-fluid" src="/images/gal.png" alt="image"></a>
                            </div><!-- featured-thumbnail end-->
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="working on the farm" data-rel="prettyPhoto" href="/images/gal.png">
                                        <i class="ti ti-search"></i>
                                    </a>
                                </div>
                                <div class="ttm-box-view-content-inner">
                                    <div class="featured-content featured-content-portfolio">
                                        <div class="featured-title">
                                            <h5><a href="#">Harvesting</a></h5>
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
                                            <a href="portfolio-category.html">Oncology</a>,
                                            <a href="portfolio-category.html">Pharmacy</a>
                                        </span> -->
                                    </div>
                                </div>
                            </div><!-- ttm-box-view-overlay end-->
                        </div><!-- featured-imagebox -->
                    </div>
                </div>
                <!-- row end-->
            </div>
        </section>
        <!--portfolio-section end-->


 <!-- fid-section -->
 <section class="ttm-row fid-section ttm-bg ttm-bgcolor-skincolor clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row ttm-facts-colum-sep">
                    <div class="col-md-3 col-sm-3">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-cup"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "201"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                        >201
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Award Shows<br></span></h3>
                            </div><!-- ttm-fid-contents end -->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-user"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "354"
                                            data-interval         = "5"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                        >354
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Qualified Staff<br></span></h3>
                            </div><!-- ttm-fid-contents end -->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-blackboard"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "528"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                        >528
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Hospital Rooms<br></span></h3>
                            </div><!-- ttm-fid-contents end-->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-heart-broken"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "124"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                        >124
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Machines<br></span></h3>
                            </div><!-- ttm-fid-contents end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fid-section end -->
 <!--healthcare-section-->
 <section class="ttm-row healthcare-section break-991-colum clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="pt-5 pr-35 res-991-mb-30">
                            <!-- section title -->
                            <div class="section-title with-desc clearfix">
                                <div class="title-header">
                                    <h5>WE PROVIDE</h5>
                                    <h2 class="title">Agricultural Property Managers </h2>
                                </div>
                                <div class="title-desc">We Acquire, Develop, and Manage diversified farmland and rural property for individuals, corporate organizations & institutions.</div>
                            </div><!-- section title end -->
                            <div class="mt_10 mb-25">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="featured-icon-box">
                                            <div class="featured-content">
                                                <!-- <div class="featured-title">
                                                    <h5>DNA Testing</h5>
                                                </div> -->
                                                <div class="featured-desc">
                                                    <!-- <p>We Acquire, Develop, and Manage livestock and aquaculture production.&nbsp;&nbsp;<u><a href="#">Read More…</a></u></p> -->
                                                    <p>Livestock & Aquaculture production.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="featured-icon-box">
                                            <div class="featured-content">
                                                <!-- <div class="featured-title">
                                                    <h5>Prosthodontics</h5>
                                                </div> -->
                                                <div class="featured-desc">
                                                    <p>We Acquire, Partner, and Undertake existing Agricultural properties not yielding expected returns. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="sep_holder_box mt-10 mb-20">
                                            <span class="sep_holder"><span class="sep_line"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="featured-icon-box">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <!-- <h5>Agricultural Community Development Project (ACD)</h5> -->
                                                </div>
                                                <div class="featured-desc">
                                                    <p>As part of our corporate social responsibility, we aim to improve the quality of life of the people in the communities which we have businesses. We have designed programmes that will empower underprivileged youth as well as drive community action, social change, and other sustainability initiatives. 
Together with our purpose-oriented employees, we pioneer projects that will inspire the way to a more socially responsible business world.</p>
                                                    <p> We Design, Partner & Implement  Agricultural Community Development projects </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="featured-icon-box">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Agri Business Academy</h5>
                                                </div>
                                                <!-- <div class="featured-desc">
                                                    <p>Call it the Tuskegee University of the 21st century. The Agribusiness Academy is a professional institution where strong foundations in agricultural technology and business are provided alongside specialized courses which would equip our students to work in any field in the Agriculture sector.</p>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="/asset-management" target="_blank" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mr-15 mb-20"> MORE SERVICES </a>
                                    <a href="/contact-us" target="_blank" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor mb-20"> CONTACT US </a>
                                    <!-- <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mr-15 mb-20" href="#">MORE SERVICES</a> -->
                                    <!-- <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor mb-20" href="#">CONTACT US!</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper ttm-reset-content-center-991">
                             <div class="twentytwenty-container">
                                <img src="/images/after_one.jpg" alt="after" />
                                <img src="/images/before_one.jpg" alt="before" />
                            </div>
                        </div><!-- ttm_single_image-wrapper end -->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--healthcare-section end-->

@endsection