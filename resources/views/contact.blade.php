@extends('layouts.app')
@section('title','Contact us')
@section('content')

@include('includes.header')

<!-- ============================ Breadcrumbs =========================== -->
<section class="bg-cover" style="background:url(assets/img/banner.jpg)no-repeat;" data-overlay="4">
    <div class="ht-80"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 col-12">
                <h1 class="text-light mb-4">We're delighted that<br> you want to connect with us. </h1>
                <p class="fs-5 fw-light text-light mb-4">Whether you have questions, feedback, or inquiries, this is the place to reach out. Our team is here and eager to assist you.</p>
                <a href="#estimate" class="btn btn-primary px-5">Let's Talk</a>
            </div>
        </div>
    </div>
    <div class="ht-80"></div>
</section>
<!-- ============================ Breadcrumbs End ======================= -->


<!-- ============================ Get Estimate Start ================================== -->
<section id="estimate">
    <div class="container">

        <div class="row align-items-center justify-content-between">
            <div class="col-xl-6 col-lg-6 col-md-11 mb-3">
                <h2 class="fs-1 fw-bold mb-4">Lets Talk<span class="text-danger">.</span></h2>
                <p>Let’s create something extraordinary together</p>

                
                <form class="row g-4" id="contact-form" method="post" action="{{ route('send.email') }}" role="form">
                    {{ csrf_field() }}
                    <div class="messages">
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-1">
                            <input class="form-control" type="text" name="names" placeholder="Your name" required>
                            <label class="form-label">Name</label>
                            @if ($errors->has('names'))
                            <span class="text-danger">{{ $errors->first('names') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-1">
                            <input class="form-control" type="email" name="email" placeholder="Your Email" required>
                            <label class="form-label">Email</label>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-1">
                            <input class="form-control" type="text" name="phone" placeholder="Your Phone" required>
                            <label class="form-label">Phone</label>
                            @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-1">
                            <input class="form-control" type="text" name="subject" placeholder="Subject" required>
                            <label class="form-label">Subject</label>
                            @if ($errors->has('subject'))
                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-1">
                            <textarea class="form-control ht-150" name="messages" placeholder="Type your comment here..." required></textarea>
                            <label class="form-label">Comment</label>
                            @if ($errors->has('messages'))
                            <span class="text-danger">{{ $errors->first('messages') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check mb-2">
                            <input class="form-check-input" name="agree" value="Agree Terms & Conditions" type="checkbox">
                            <label class="form-check-label">I agree to the <a class="nav-link d-inline fs-normal text-decoration-underline p-0" href="#">Terms &amp; Conditions</a></label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary px-lg-4" type="submit">Send your Message</button>
                    </div>
                </form>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-5 col-xl-offset-1 col-lg-offset-1">
                <h2 class="fw-bold mb-4">Reach Us<span class="text-danger">.</span></h2>
                <p>At DDIN, we value your feedback, inquiries, and ideas. Our team is here to assist you and provide the support you need. Whether you have a question, a suggestion, or just want to say hello, there are multiple ways to reach us.</p>
                <ul class="p-0 m-0 mt-4">
                    <li class="d-flex mb-3"><i class="fa-solid fa-phone text-primary fs-5 me-3"></i><a class="text-dark" href="tel:+250783038641">Call Us<br><span class="text-muted fw-semibold">+250 783 038 641</span></a></li>
                    <li class="d-flex mb-3"><i class="fa-solid fa-envelope-circle-check fs-5 text-primary me-3"></i><a class="text-dark" href="mailto:contacts@ddin.rw">Drop Us Mail<br><span class="text-muted fw-semibold">contacts@ddin.rw</span></a></li>
                    <li class="d-flex mb-3"><i class="fa-solid fa-location-pin text-primary fs-5 me-3"></i><a class="text-dark" href="mailto:contacts@ddin.rw">Reach Us<br><span class="fw-semibold text-muted">KN 78 ST, NORRSKEN HOUSE KIGALI</span></a></li>
                </ul>
            </div>

        </div>

    </div>
</section>
<div class="clearfix"></div>
<!-- ============================ Get Estimate End ================================== -->

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

@include('includes.footer')