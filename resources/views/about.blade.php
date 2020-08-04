@extends('layouts.frontend')

@section('title')
    About Us | {{ config('app.name') }}
@endsection

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'About Us' , 'subtitle' => 'About Us'])
@endsection

@section('main_content')
    <!--introduction-section-->
    <section class="ttm-row introduction-section break-1199-colum clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12">
                    <!-- col-bg-img-two -->
                    <div class="col-bg-img-two ttm-col-bgimage-yes ttm-bg res-1199-ptb-200 ttm-reset-content-center-1199">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <div class="ttm-video-icon ttm-left-video-icon text-right mt_30 mr_40 res-1199-mr-0">
                                <div
                                    class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-background-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                    <i class="fa fa-play"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-bg-img-two end-->
                </div>
                <div class="col-lg-7 col-sm-12">
                    <div class="pl-60 pb-20 res-1199-pl-0 res-1199-pt-40 res-1199-pb-0">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h5> AGROPARK</h5>
                                <h2 class="title">Agricultural Property Managers</h2>
                            </div>
                        </div><!-- section title end -->
                        <div class="mb-30 clearfix">
                            <p>Agro Park is an agricultural property development company involved in the end-to-end of the
                                agricultural value chain. We manage farmland for Individuals, Corporate organisations, and
                                Institutional investors. Its drive as an organisation is to transform agricultural practices
                                in Nigeria and Africa at large. From inception, we have been consistent in meeting all
                                obligations and bringing solutions to issues in agriculture through innovation. </p>
                            <p>At present, we manage more than 5,000 hectares of farmland and rural properties across the
                                country. Our maiden farm estate covers about 1,500 hectares. It is located at Ijale-Orile,
                                Abeokuta, Ogun State. We offer for sale and lease farmland and provide 100% farm management
                                services. We produce herbs and spices, staples, livestock, and cash crop.</p>
                        </div>
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <!-- <h5> AGROPARK</h5> -->
                                <h2 class="title">What We Do</h2>
                            </div>
                        </div><!-- section title end -->
                        <div class="mb-30 clearfix">
                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Acquire,
                                        develop & manage diversified farmland and rural properties for Individuals,
                                        corporate organizations & institutions.</span></li>
                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Livestock &
                                        Aquaculture production. </span></li>
                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Acquire,
                                        Partner & Undertake existing Agricultural properties not yielding expected
                                        returns.</span></li>
                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Design,
                                        Partner & Implement Agricultural Community Development projects. </span></li>
                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Agri Business
                                        Academy </span></li>
                            </ul>
                        </div>
                        <!-- <div class="ttm_sign_image-wrapper mb-25 res-991-mb-0">
                                    <img src="images/dr-sign.png" alt="ttm_single_image-wrapper">
                                </div> -->
                        <!-- <div class="sep_holder_box pt-25 mb-45 res-991-mb-20">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div> -->
                        <!-- <div class="row"> -->
                        <!-- <div class="col-md-4 col-sm-12"> -->
                        <!--featured-icon-box-->
                        <!-- <div class="featured-icon-box icon-box-heading-only left-icon">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Online Appointment!</h5>
                                                </div>
                                            </div>
                                        </div> -->
                        <!-- featured-icon-box end-->
                        <!-- </div> -->
                        <!-- <div class="col-md-4 col-sm-12"> -->
                        <!--featured-icon-box-->
                        <!-- <div class="featured-icon-box icon-box-heading-only left-icon">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Available at Your Location</h5>
                                                </div>
                                            </div>
                                        </div> -->
                        <!-- featured-icon-box end-->
                        <!-- </div> -->
                        <!-- <div class="col-md-4 col-sm-12"> -->
                        <!--featured-icon-box-->
                        <!-- <div class="featured-icon-box icon-box-heading-only left-icon">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Work Improvements</h5>
                                                </div>
                                            </div>
                                        </div> -->
                        <!-- featured-icon-box end-->
                        <!-- </div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--introduction-section end-->
    <section class="ttm-row testimonial-section bg-img2 ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 col-md-12">
                    <!-- section-title -->
                    <div class="section-title with-desc text-center clearfix">
                        <div class="title-header">
                            <!-- <h5>HAPPY CLIENTS</h5> -->
                            <h2 class="title">Life is Green, Agriculture is Wealth</h2>
                        </div>
                    </div><!-- section-title end -->
                </div>
                <div class="col-lg-2"></div>
            </div><!-- row end -->
            <div class="row">
                <div class="col-md-1"></div>

                <div class="col-md-1"></div>
            </div><!-- row end-->
        </div>
    </section>
    <!-- testimonial-section end-->

    <!-- multi-section -->
    <section class="ttm-row multi-section break-991-colum clearfix">
        <div class="container">
            <div class="row mt_190 res-1199-mlr-15 res-991-mt-50 box-shadow2 no-gutters">
                <div class="col-md-5">
                    <!-- col-bg-img-three -->
                    <div class="col-bg-img-three ttm-bg ttm-col-bgimage-yes">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                        </div>
                    </div><!-- col-bg-img-three end -->
                </div>
                <div class="col-md-7">
                    <div class="spacing-7 ttm-bgcolor-white">
                        <!-- section title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h2 class="title">Corporate Philosophy</h2>
                            </div>
                            <div class="title-desc">We acquire, develop, and manage agricultural assets with the aim of
                                satisfying human needs for healthy food. Our approach to farming is designed to improve and
                                preserve environmental quality and the natural resource base. To us, profit is a by-product
                                of the value we add to the life of farming families and the community.</div>
                        </div><!-- section title end -->
                        <div class="row mt_20">
                            <div class="col-md-4">
                                <!-- col-img-img-five -->
                                <div class="col-bg-img-five ttm-col-bgimage-yes ttm-bg mr_15 res-991-mr-0">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                        <div class="col-bg-img-five"></div>
                                    </div>
                                    <div class="layer-content"></div>
                                </div><!-- col-img-bg-img-five end-->
                                <img src="/images/mision.png" class="ttm-equal-height-image" alt="bg-image">
                            </div>
                            <div class="col-md-8">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box res-767-pt-15">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Our Mission</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Sustainable use of farmland and rural properties for global economic growth
                                            </p>
                                            <!-- <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline" href="#">MORE ABOUT</a> -->
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div>
                        <div class="row pt-30">
                            <div class="col-md-4">
                                <!-- col-img-img-six -->
                                <div class="col-bg-img-six ttm-col-bgimage-yes ttm-bg mr_15">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                        <div class="col-bg-img-six"></div>
                                    </div>
                                    <div class="layer-content"></div>
                                </div><!-- col-img-bg-img-six end-->
                                <img src="/images/vision.png" class="ttm-equal-height-image" alt="bg-image">
                            </div>
                            <div class="col-md-8">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box res-767-pt-15">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Our Vision</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>To be the most trusted global brand in farmland and rural property
                                                management.</p>
                                            <!-- <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline" href="#">MORE ABOUT</a> -->
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
            <!-- row -->
            <div class="row pt-70 res-991-pt-40">
                <div class="col-lg-9 col-md-12">
                    <!-- section-title -->
                    <div class="section-title with-desc clearfix">
                        <div class="title-header">
                            <!-- <h5>OUR BLOG</h5> -->
                            <h2 class="title">What We Grow</h2>
                        </div>
                        <div class="title-desc">Our crops include a wide range of organic farm produce. This accentuates on
                            the amazing health benefits people can get from locally-grown herbs and spices, staples, and
                            perennials.</div>
                    </div><!-- section-title end -->
                </div>
                <div class="col-lg-3 col-md-12">
                    <!-- <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-30 mt-45 res-991-mt-0 float-right" href="#">READ MORE</a> -->
                </div>
            </div><!-- row end -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="sep_holder_box width-100 mt_15 mb-35 res-991-mt-0">
                        <span class="sep_holder"><span class="sep_line"></span></span>
                        <span class="sep_holder"><span class="sep_line"></span></span>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <!-- acadion -->
                    <div class="accordion mb-15 res-991-mb-40 pr-20 res-991-pr-0">
                        <!-- toggle -->
                        <div class="toggle ttm-style-classic active">
                            <div class="toggle-title " @click="accordion($event)">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <i class="flaticon-dentist-1"></i>
                                    <span class="ttm-title-text">Staple</span>
                                </a>
                            </div>
                            <div class="toggle-content show">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="toggle-figure pr-10 res-991-mb-15">
                                            <img class="img-fluid" src="/images/staple.png" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="ml_20 res-991-ml-0">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Maize</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Groundnut</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Soya Beans</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- toggle end -->
                        <!-- toggle -->
                        <div class="toggle ttm-style-classic">
                            <div class="toggle-title" @click="accordion($event)">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <i class="flaticon-hygiene"></i>
                                    <span class="ttm-title-text">Herbs & Spices</span>
                                </a>
                            </div>
                            <div class="toggle-content">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="toggle-figure pr-10 res-991-mb-15">
                                            <img class="img-fluid" src="/images/spices.png" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="ml_20 res-991-ml-0">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Fennel</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Sweet Basil</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Mint Leaves</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Chilli Pepper</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Lemon Grass</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Ginger</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Citronella</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Dill</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Sweet Marjoram</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Rosemary</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Turmeric</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Thyme</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Coriander</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Miango Pepper</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Cumin</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- toggle end -->
                        <!-- toggle -->
                        <div class="toggle ttm-style-classic">
                            <div class="toggle-title" @click="accordion($event)">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <i class="flaticon-charity"></i>
                                    <span class="ttm-title-text">Tree Crops</span>
                                </a>
                            </div>
                            <div class="toggle-content">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="toggle-figure pr-10 res-991-mb-15">
                                            <img class="img-fluid" src="/images/tree.png" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="ml_20 res-991-ml-0">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Cocoa</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Cashew</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span
                                                        class="ttm-list-li-content">Oil Palm</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- toggle end -->
                    </div><!-- acadion end-->
                </div>
                <div class="col-lg-6">

                    <div class="title-header">
                        <!-- <h5>OUR BLOG</h5> -->
                        <h2 class="title">Core Values</h2>
                    </div>

                    <!-- ttm-progress-bar -->
                    <div class="ttm-progress-bar ttm-icon-left-true ttm-icon_element-color-skincolor">
                        <i class="flaticon-clinic"></i>
                        <h4>D</h4>
                        <div class="progress" data-value=" ">
                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                <div class="progress-parcent"><span>Dependability</span></div>
                            </div>
                        </div>
                    </div><!-- ttm-progress-bar end -->
                    <!-- ttm-progress-bar -->
                    <div class="ttm-progress-bar ttm-icon-left-true ttm-icon_element-color-skincolor">
                        <i class="flaticon-hygiene"></i>
                        <h4>I</h4>
                        <div class="progress" data-value=" ">
                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                <div class="progress-parcent"><span>Integrity</span></div>
                            </div>
                        </div>
                    </div><!-- ttm-progress-bar end -->
                    <!-- ttm-progress-bar -->
                    <div class="ttm-progress-bar ttm-icon-left-true ttm-icon_element-color-skincolor">
                        <i class="flaticon-care"></i>
                        <h4>R</h4>
                        <div class="progress" data-value=" ">
                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                <div class="progress-parcent"><span>Reliability</span></div>
                            </div>
                        </div>
                    </div><!-- section title end -->
                    <!-- ttm-progress-bar -->
                    <div class="ttm-progress-bar ttm-icon-left-true ttm-icon_element-color-skincolor">
                        <i class="flaticon-doctor-2"></i>
                        <h4>E</h4>
                        <div class="progress" data-value=" ">
                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                <div class="progress-parcent"><span>Excellence</span></div>
                            </div>
                        </div>
                    </div><!-- section title end -->
                    <!-- ttm-progress-bar -->
                    <div class="ttm-progress-bar ttm-icon-left-true ttm-icon_element-color-skincolor">
                        <i class="flaticon-pharmacy"></i>
                        <h4>C</h4>
                        <div class="progress" data-value=" ">
                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                <div class="progress-parcent"><span>Creativity</span></div>
                            </div>
                        </div>
                    </div><!-- section title end -->
                    <!-- ttm-progress-bar -->
                    <div class="ttm-progress-bar ttm-icon-left-true ttm-icon_element-color-skincolor">
                        <i class="flaticon-pharmacy"></i>
                        <h4>T</h4>
                        <div class="progress" data-value=" ">
                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                <div class="progress-parcent"><span>Tenacity</span></div>
                            </div>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end-->
        </div>
    </section>
    <!--multi-section end-->
@endsection
