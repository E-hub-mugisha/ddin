@extends('layouts.app')
@section('title','Became an Agent')
@section('content')

@include('includes.header')

<section class="bg-light-seegreen">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-9 col-lg-8">
                <form action="/became-an-agent/store" method="post">
                    {{ csrf_field() }}

                    <!-- Basic Info -->
                    <div class="dash-wrapsw card py-0 px-lg-5 px-4 pb-4 border-0 rounded-4 mb-4">
                        <div class="position-absolute start-0 end-0 top-0 bg-primary ht-120"></div>
                        <div class="position-absolute end-0 top-0 mt-5 pt-3 me-4 z-1"><a href="account-setting.html" class="btn btn-sm btn-whites fw-medium">Edit Info</a></div>
                        <div class="dash-y44 position-relative mb-5">
                            <div class="dash-user-thumb mt-5 pt-2">
                                <img src="{{ asset('assets/img/team-1.jpg')}}" class="img-fluid circle border border-3" width="100" alt="User">
                            </div>
                            <div class="dash-y45 row align-items-center justify-content-between gy-3">
                                <div class="lios-parts-starts col-sm-7">
                                    <h5 class="m-0">{{$agent->names}}<i class="fa-solid fa-circle-check fs-sm text-success ms-2"></i></h5>
                                    <p class="m-0 text-muted">{{$agent->businessCategory}}, {{$agent->province}}</p>
                                </div>
                                <div class="lios-parts col-sm-4">
                                    <h6>Profile Completion 65%</h6>
                                    <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped bg-success" style="width: 65%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class="dash-y45">
                            <ul class="no-ul-list row g-4">
                                <li class="col-sm-5">
                                    <p class="text-muted mb-0">Phone</p>
                                    <p class="m-0 text-dark fw-medium">{{$agent->phone}}</p>
                                </li>
                                <li class="col-sm-5">
                                    <p class="text-muted mb-0">Email</p>
                                    <p class="m-0 text-dark fw-medium">{{$agent->email}}</p>
                                </li>
                                <li class="col-sm-5">
                                    <p class="text-muted mb-0">Gender</p>
                                    <p class="m-0 text-dark fw-medium">{{$agent->gender}}</p>
                                </li>
                                <li class="col-sm-5">
                                    <p class="text-muted mb-0">National ID</p>
                                    <p class="m-0 text-dark fw-medium">{{$agent->nid}}</p>
                                </li>
                                <li class="col-sm-5">
                                    <p class="text-muted mb-0">City</p>
                                    <p class="m-0 text-dark fw-medium">{{$agent->district}}</p>
                                </li>
                                <li class="col-sm-5">
                                    <p class="text-muted mb-0">Province</p>
                                    <p class="m-0 text-dark fw-medium">{{$agent->province}}</p>
                                </li>
                            </ul>
                        </div>

                        <!--  -->
                        <div class="dash-y446 mt-3">
                            <div class="alert alert-info d-flex mb-0" role="alert"><i class="ai-circle-info fs-xl"></i>
                                <div class="ps-2">Fill in the information 100% to receive more suitable offers.<a class="text-info fw-semibold ms-1" href="account-setting.html">Go to settings!</a></div>
                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <a type="button" href="/became-an-agent/create-step4" class="col-6 btn btn-warning">Back to Step 4</a>
                        <button type="submit" class="col-6 btn btn-primary">Save info</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section>
<div class="clearfix"></div>


@include('includes.footer')
@endsection