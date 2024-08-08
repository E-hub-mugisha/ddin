@extends('layouts.app')
@section('title','Became an Agent')
@section('content')

@include('includes.header')

<section class="bg-light-seegreen">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-9">
                <!-- Basic Info -->
                <div class="dash-wrapsw card border-0 rounded-4 py-4 mb-4">
                    <div class="card-headers border-0 py-4 px-4 pb-0 pt-1">
                        <h4><i class="fa-regular fa-user text-primary me-2"></i>More info</h4>
                    </div>
                    <div class="card-body px-4">
                        <form action="/became-an-agent/create-step4" method="post">
                            {{ csrf_field() }}

                            <div class="row g-3 g-sm-4 mt-0 mt-lg-2">

                                <div class="col-sm-12">
                                    <div class="">
                                        <label class="form-label">Kugirango ubusabe bwanyu bukorwe, murasabwa kubanza kwishura amafaranga y' u Rwanda ibihumbi makumyabiri (20.000Rwf) kuri MOPay code 363386 ibaruye kuri DISABILITY DIGITAL INCLUSION</label>
                                        <ul class="no-ul-list d-flex align-items-center border rounded-2 px-3 py-3">
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="terms" value="yego" id="terms" {{{ (isset($agent->status) && $agent->status == 'yego') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="yego">Ndemeza ko nishyuye 20.000Rwf kuri momo code 363386 ibaruye kuri DISABILITY DIGITAL INCLUSION</label>
                                                </div>
                                            </li>
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="terms" value="oya" id="terms" {{{ (isset($agent->status) && $agent->status == 'oya') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="oya">Ndemeza ko bazayakata kuri commission zanjye nintangira gukora</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="">
                                        <label class="form-label">Umaze kuzuza ndetse ukanohereza iyi fomu isaba kuba umu agenti wa serivisi wasabye binyuze muri DDIN, uraba wemeye ko wasomye neza amategeko n'amabwiriza afatwa nk'amasezerano agenga ab'agent ba DDIN, ndetse wemeye no kujyengwa nayo mugihe cyose ukora service yaba izitangwa na DDIN cyangwa iz'abafatanyabikorwa ba DDIN</label>
                                        <ul class="no-ul-list d-flex align-items-center border rounded-2 px-3 py-3">
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="acceptance" value="yego" id="acceptance" {{{ (isset($agent->status) && $agent->status == 'yego') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="yego">yego</label>
                                                </div>
                                            </li>
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="acceptance" value="oya" id="acceptance" {{{ (isset($agent->status) && $agent->status == 'oya') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="oya">oya</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="row">
                                    <a type="button" href="/became-an-agent/create-step3" class="col-6 btn btn-warning">Back to Step 3</a>
                                    <button type="submit" class="col-6 btn btn-primary">Preview info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('includes.footer')
@endsection