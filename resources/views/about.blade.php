@extends('layouts.app')
@section('title','About us')
@section('content')

@include('includes.header')

<!-- ============================ Breadcrumbs =========================== -->
<section class="bg-cover" style="background:#202A4E url(assets/img/banner.jpg)no-repeat;" data-overlay="9">
    <div class="ht-80"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 col-12">
                <h1 class="text-light mb-4">We're Here for<br>Solving your Solutions</h1>
                <p class="fs-5 fw-light text-light mb-4">We unite a multitude of services from diverse institutions onto a single, user-friendly platform</p>
                <a href="#about" class="btn btn-primary px-5">Know More..</a>
            </div>
        </div>
    </div>
    <div class="ht-80"></div>
</section>
<!-- ============================ Breadcrumbs End ======================= -->



<!-- ============================ Reason For Love Us Start ================================== -->
<section class="pt-8" id="about">
    <div class="container">

        <div class="row justify-content-between align-items-center mb-3">

            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                <div class="position-relative exloi">
                    <div class="position-relative">
                        <img src="{{ asset('assets/img/image1.png')}}" class="img-fluid" alt="">
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
                        <div class="label text-warning bg-light-warning d-inline-flex rounded-4 mb-2 font--medium"><span>About us</span></div>
                        <h2 class="mb-3 lh-base">DDIN, Agent Network with <span style="color: #F8882B;">3000+ Experts</span></h2>
                        <p class="mb-0 fs-5 fw-light">DDIN is the number #1 leading agent network company in Rwanda with over 3000 experienced representatives across the country. DDIN aggregates multiple services from different institutions into one integrated platform.</p>

                        <div class="sml-butns mt-5">
                            <a href="JavaScript:Void(0);" class="btn btn-light-warning font--medium rounded-5">Explore more<i class="fa-regular fa-circle-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row justify-content-between align-items-center mt-5">

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="position-relative exloi py-lg-0 pb-4">
                    <div class="exloi-caption">
                        <div class="label text-danger bg-light-danger d-inline-flex rounded-4 mb-2 font--medium"><span>Easy marketing</span></div>
                        <h2 class="mb-3 lh-base">Empowering Communities with <span style="color: #F8882B;">Agent Network Management</span></h2>
                        <p class="mb-0 fw-light fs-5">We decentralize your services to end customers, through agents network management framework operating from provincial to sector level.</p>
                        <div class="lios-vrst">
                            <ul>
                                <li>
                                    <div class="lios-parts mx-3">
                                        <h2><span class="ctr me-1">4200</span><span class="text-danger" style="color: #F8882B;">+</span></h2>
                                        <h6 class="text-muted">Agent network</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="lios-parts mx-3">
                                        <h2><span class="ctr">6900</span><span class="text-danger" style="color: #F8882B;">+</span></h2>
                                        <h6 class="text-muted">Agent network targeting by 2024</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
                        <img src="{{ asset('assets/img/image3.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<div class="clearfix"></div>
<!-- ============================ Reason For Love Us End ================================== -->

<!-- ============================ Services Start ================================== -->
<section class="bg-dark">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-xxl-5 col-xl-4 col-lg-4">
                <div class="position-relative py-lg-0 pb-4">
                    <h2 class="mb-3 fs-1 mb-lg-3 " style="color: #F8882B;">Our purpose </h2>
                    <p class="text-light fs-5 fw-light">DDIN specializes in agent network management, focusing on leveraging digital technology to promote financial inclusion and enhance access to financial services. DDIN's operations align with the government's initiatives to promote financial inclusion and contribute to Rwanda's socio-economic development.</p>

                    <div class="position-relative mt-3">
                        <button type="button" class="btn btn-danger">Learn More</button>
                    </div>
                </div>
            </div>

            <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-12 offset-xxl-1 offset-xl-1 offset-lg-1">
                <div class="row gy-xl-5 gy-lg-5 gy-4 gx-4">

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="card border-0 bg-transparent">
                            <div class="position-relative mb-3">
                                <div class="bg-light-success text-success circle d-inline-flex square--80">
                                    <i class="fa-brands fa-twitter fs-2"></i>
                                </div>
                            </div>
                            <div class="crd-srv">
                                <h4 class="font--bold text-light mb-2">Vision</h4>
                                <p class="text-light opacity-75 fw-light fs-6 mb-0">To become a leading distribution Network, with the ultimate goal of driving sustainable growth and promoting financial inclusion in Africa communities</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="position-relative mb-3">
                            <div class="bg-light-warning text-warning circle d-inline-flex square--80">
                                <i class="fa-solid fa-images fs-2"></i>
                            </div>
                        </div>
                        <div class="crd-srv">
                            <h4 class="font--bold text-light mb-2">Mission</h4>
                            <p class="text-light opacity-75 fw-light fs-6 mb-0">Providing an integrated distribution agent network in Africa and connecting diverse markets by delivering exceptional value to our esteemed customers.</p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="position-relative mb-3">
                            <div class="bg-light-purple text-purple circle d-inline-flex square--80">
                                <i class="fa-solid fa-lightbulb fs-2"></i>
                            </div>
                        </div>
                        <div class="crd-srv">
                            <h4 class="font--bold text-light mb-2">Core value</h4>
                            <ul class="list-unstyled d-none d-lg-block pb-3 mb-3 mb-lg-4">
                                <li class="d-flex pt-2 fs-6 text-light"><i class="fa-solid fa-check fs-5 text-success mt-n1 me-2"></i>Keep People Involved</li>
                                <li class="d-flex pt-2 fs-6 text-light"><i class="fa-solid fa-check fs-5 text-success mt-n1 me-2"></i>The Network of the Best</li>
                                <li class="d-flex pt-2 fs-6 text-light"><i class="fa-solid fa-check fs-5 text-success mt-n1 me-2"></i>Completing tasks exactly on time</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="position-relative mb-3">
                            <div class="bg-light-info text-info circle d-inline-flex square--80">
                                <i class="fa-solid fa-envelope-open-text fs-2"></i>
                            </div>
                        </div>
                        <div class="crd-srv">
                            <h4 class="font--bold text-light mb-2">Goal</h4>
                            <ul class="list-unstyled d-none d-lg-block pb-3 mb-3 mb-lg-4">
                                <li class="d-flex pt-2 fs-6 text-light"><i class="fa-solid fa-check fs-5 text-success mt-n1 me-2"></i>Aiming to establish a strong market presence</li>
                                <li class="d-flex pt-2 fs-6 text-light"><i class="fa-solid fa-check fs-5 text-success mt-n1 me-2"></i>Foster a customer-centric culture</li>
                                <li class="d-flex pt-2 fs-6 text-light"><i class="fa-solid fa-check fs-5 text-success mt-n1 me-2"></i>Drive sustainable growth</li>
                                <li class="d-flex pt-2 fs-6 text-light"><i class="fa-solid fa-check fs-5 text-success mt-n1 me-2"></i>and promote financial inclusion in Africa through a leading both service aggregator platform and distribution network.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<div class="clearfix"></div>
<!-- ============================ Services End ================================== -->

@include('includes.services-section')

<!-- ============================ Reason For Love Us Start ================================== -->
<section>
    <div class="container">

        <div class="row justify-content-between align-items-center mb-5">

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="position-relative exloi">
                    <div class="exloi-caption">
                        <div class="label text-success bg-light-success d-inline-flex rounded-4 mb-2 font--medium"><span>Growth</span></div>
                        <h2 class="mb-3 lh-base"><span style="color: #F8882B;">Continuous Training Ensures</span> Excellence in Task Execution by Our Agents</h2>
                        <p class="mb-0 fs-5 fw-light">Our agents acquire the current skills necessary to perform their assigned tasks exceptionally well by participating in ongoing orientation and refresher training sessions.</p>

                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                <div class="position-relative mt-md-0 mt-4">
                    <img src="{{ asset('assets/img/image4.png')}}" class="img-fluid" alt="">
                </div>
            </div>

        </div>

        <div class="row justify-content-between align-items-center mt-3">

            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                <div class="position-relative">
                    <img src="{{ asset('assets/img/people-cartoon.png')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="position-relative exloi mt-md-0 mt-4">
                    <div class="exloi-caption">
                        <div class="label text-success bg-light-success d-inline-flex rounded-4 mb-2 font--medium"><span>User Analytics</span></div>
                        <h2 class="mb-3 lh-base">We help <span style="color: #F8882B;">decentralize</span> your services to end customers through </br>our independent <span style="color: #F8882B;">agent network</span> across the country</h2>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<div class="clearfix"></div>
<!-- ============================ Reason For Love Us End ================================== -->

<!--  ======================== our partners ========================= --> 
@include('includes.partners')

<!--  ======================== our partners ========================= --> 

<!--  ======================== call to action ========================= --> 

@include('includes.cta')

<!--  ======================== call to action ========================= --> 

@include('includes.footer')

@endsection