@extends('layouts.app')
@section('title','Home')
@section('content')

@include('includes.header')
<!-- ============================ Hero Banner  Start================================== -->
<!-- <div class="image-cover hero-header position-relative" style="background:#202A4E url(assets/img/banner.jpg)no-repeat;" data-overlay="9">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="elcoss-excort mb-5">
                    <h1 class="mb-4"><span style="color: #F8882B;">A decentralized</span> <br />agent network across the market.</h1>
                    <p class="fs-5 fw-light fs-mob">This network comprises decentralized agents strategically positioned throughout the market, working collaboratively to achieve their objectives.</p>
                </div>
                <div class="btns-clasic mt-5 mb-3">
                    <div class="btn-groupss">
                        <a href="/services" class="btn btn-lg btn-success font--medium px-lg-4 px-xl-5 mx-2 my-2">How It Work</a>
                        <a href="/became-an-agent" class="btn btn-lg btn-whites text-success font--medium px-lg-4 px-xl-5 mx-2 my-2">Became an agent<i class="fa-solid fa-circle-play ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-xl-offset-1 col-lg-offset-1">
                <div class="position-relative wow animated fadeInRight">
                    <img class="d-block position-relative z-2 img-fluid" src="assets/img/image_banner.png" alt="Nicolas Black">
                </div>
            </div>
        </div>
    </div>
</div> -->
@include('includes.banner1')
<!-- ============================ Hero Banner End ================================== -->
<!-- ============================ Reason For Love Us Start ================================== -->
<section class="pt-8">
    <div class="container">

        <div class="row justify-content-between align-items-center mb-3">

            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                <div class="position-relative exloi">
                    <div class="position-relative">
                        <img src="assets/img/picture1.png" style="transform: rotate(15deg);" class="img-fluid" alt="">
                    </div>
                    <!-- <div class="position-absolute start-0 bottom-0 pb-4 ps-4">
                        <div class="dlick-img mb-2"><img src="assets/img/lists-2.png" class="img-fluid rounded-2" width="190" alt=""></div>
                        <div class="dlick-img mt-1 ps-4"><img src="assets/img/lists-2.png" class="img-fluid rounded-2" width="190" alt=""></div>
                    </div> -->
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="position-relative exloi mt-md-0 mt-4">
                    <div class="exloi-caption">
                        <div class="label text-primary bg-light-warning d-inline-flex rounded-4 mb-2 font--medium"><span>who we are</span></div>
                        <h2 class="mb-3 lh-base">Agent Network with<span style="color: #F8882B;"> 4200+ Experts</span></h2>
                        <p class="mb-0 fs-5 fw-light">DDIN serves as a management platform for a network of independent agents located throughout the country.

                            We bring together various services offered by different institutions, organizations or companies onto a single platform. </p>

                        <div class="sml-butns mt-5">
                            <a href="/about" class="btn btn-light-warning font--medium rounded-5">Explore more<i class="fa-regular fa-circle-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row justify-content-between align-items-center mt-5">

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="position-relative exloi py-lg-0 pb-4">
                    <div class="exloi-caption">
                        <div class="label text-danger bg-light-warning d-inline-flex rounded-4 mb-2 font--medium"><span>we stand</span></div>
                        <h2 class="mb-3 lh-base"><span style="color: #F8882B;">DDIN ranks among the foremost </span> network companies in Rwanda</h2>
                        <p class="mb-0 fw-light fs-5">DDIN stands as the top agent network company in Rwanda, boasting 4200+ seasoned representatives countrywide. We bring together a variety of services from various organizations onto a single, unified platform.</p>

                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                <div class="position-relative exloi mt-md-0 mt-4">
                    <!-- <div class="position-absolute start-0 bottom-0 pb-4 ps-4 z-1">
                        <div class="dlick-img mb-2"><img src="assets/img/slip-1.png" class="img-fluid rounded-3" width="210" alt=""></div>
                        <div class="dlick-img mt-1 ps-4"><img src="assets/img/slip-2.png" class="img-fluid rounded-3" width="210" alt=""></div>
                    </div> -->
                    <div class="position-relative">
                        <img src="assets/img/about.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<div class="clearfix"></div>
<!-- ============================ Reason For Love Us End ================================== -->

@include('includes.agent-count')

@include('includes.services-section')

<!-- ============================ Few moments Start ================================== -->
<section class="bg-seegreen pt-4 pb-4">
    <div class="container">
        <div class="row g-4">

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="d-flex align-items-center">
                    <div class="exljk-icon text-warning fs-2"><i class="fa-regular fa-clock"></i></div>
                    <div class="exljk-caps ps-3">
                        <h5 class="text-light fw-semibold">Time Saving</h5>
                        <p class="m-0 text-light lh-base opacity-75">Our efficient agent network streamlines transactions, saving you valuable time and making it easier.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="d-flex align-items-center">
                    <div class="exljk-icon text-warning fs-2"><i class="fa-solid fa-shield-heart"></i></div>
                    <div class="exljk-caps ps-3">
                        <h5 class="text-light fw-semibold">Secure Payment</h5>
                        <p class="m-0 text-light lh-base opacity-75">With our robust agent network, your transactions are handled securely and reliably, ensuring peace of mind</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="d-flex align-items-center">
                    <div class="exljk-icon text-warning fs-2"><i class="fa-solid fa-headset"></i></div>
                    <div class="exljk-caps ps-3">
                        <h5 class="text-light fw-semibold">24x7 Support</h5>
                        <p class="m-0 text-light lh-base opacity-75">Our dedicated agent network provides round-the-clock support, ensuring you can get help whenever you need it.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="clearfix"></div>
<!-- ============================ Few moments End ================================== -->
<!-- ============================ Reason For Love Us Start ================================== -->
<section class="pt-8">
    <div class="container">

        <div class="row justify-content-between align-items-center mb-8">

            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                <div class="position-relative exloi">
                    <div class="position-relative">
                        <img src="assets/img/image_banner.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="position-relative exloi mt-md-0 mt-4">
                    <div class="exloi-caption">
                        <div class="label text-success bg-light-success d-inline-flex rounded-4 mb-2 font--medium"><span>integration</span></div>
                        <h2 class="mb-3 lh-base">DDIN aggregates <span style="color: #F8882B;">multiple services</span> from different institutions into <span style="color: #F8882B;">one integrated platform.</span></h2>

                        <div class="sml-butns mt-5">
                            <a href="#" class="btn btn-light-success font--medium rounded-5">Learn more<i class="fa-regular fa-circle-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row justify-content-between align-items-center mt-5">

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="position-relative exloi py-lg-0 pb-4">
                    <div class="exloi-caption">
                        <!-- <div class="label text-success bg-light-success d-inline-flex rounded-4 mb-2 font--medium"><span>Recieving Money</span></div> -->
                        <h2 class="mb-3 lh-base">We help <span style="color: #F8882B;">decentralize</span> your services to end customers through our independent <span style="color: #F8882B;">agent network</span> across the country</h2>

                        <div class="sml-butns mt-5">
                            <a href="/contact" class="btn btn-light-success font--medium rounded-5">schedule a call<i class="fa-regular fa-circle-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                <div class="position-relative exloi mt-md-0 mt-4">
                    <div class="position-relative">
                        <img src="assets/img/mob-app.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<div class="clearfix"></div>
<!-- ============================ Reason For Love Us End ================================== -->

@include('includes.partners')

@include('includes.cta')

@include('includes.footer')

@endsection