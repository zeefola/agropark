@extends('layouts.frontend')
@section('title')
     Our Team | {{ config('app.name') }}
@endsection

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'Our Partners' , 'subtitle' => 'Partners'])
@endsection

@section('main_content')
    <!--client-section-->
    <div class="ttm-row client-section ttm-bgcolor-grey mt_70 res-991-mt-0 clearfix">
        <div class="container">
            <!-- row -->
            <div class="row text-center">
                <div class="col-md-12">
                    <!-- ttm-client -->
                    <div class="ttm-client clients-slide owl-carousel owl-theme owl-loaded" data-item="5" data-nav="false" data-dots="false" data-auto="false">
                        <div class="client-box ttm-box-view-separator-logo">
                            <div class="ttm-client-logo-tooltip" data-tooltip="agricapital">
                                <div class="client-thumbnail">
                                    <img src="/images/agri.png" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="client-box ttm-box-view-separator-logo">
                            <div class="ttm-client-logo-tooltip" data-tooltip="nardus">
                                <div class="client-thumbnail">
                                    <img src="/images/nardus.png" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="client-box ttm-box-view-separator-logo">
                            <div class="ttm-client-logo-tooltip" data-tooltip="sanofoods">
                                <div class="client-thumbnail">
                                    <img src="/images/sano.png" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="client-box ttm-box-view-separator-logo">
                            <div class="ttm-client-logo-tooltip" data-tooltip="fp">
                                <div class="client-thumbnail">
                                    <img src="/images/fipl.png" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="client-box ttm-box-view-separator-logo">
                            <div class="ttm-client-logo-tooltip" >
                                <div class="client-thumbnail">
                                    <img src="/images/berj.png" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="client-box ttm-box-view-separator-logo">
                            <div class="ttm-client-logo-tooltip" >
                                <div class="client-thumbnail">
                                    <img src="/images/dhop.png" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="client-box ttm-box-view-separator-logo">
                            <div class="ttm-client-logo-tooltip" >
                                <div class="client-thumbnail">
                                    <img src="/images/ac.png" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="client-box ttm-box-view-separator-logo">
                            <div class="ttm-client-logo-tooltip" >
                                <div class="client-thumbnail">
                                    <img src="/images/best.png" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="client-box ttm-box-view-separator-logo">
                            <div class="ttm-client-logo-tooltip" >
                                <div class="client-thumbnail">
                                    <img src="/images/dtch.png" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="client-box ttm-box-view-separator-logo">
                            <div class="ttm-client-logo-tooltip" >
                                <div class="client-thumbnail">
                                    <img src="/images/snm.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div><!-- ttm-client end -->      
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!--client-section end-->
@endsection