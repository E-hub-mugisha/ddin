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
                        <h4><i class="fa-regular fa-user text-primary me-2"></i>Business info</h4>
                    </div>
                    <div class="card-body px-4">
                        <form action="/became-an-agent/create-step3" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                                <div class="col-sm-6">
                                    <label class="form-label" for="businessNames">Izina ry' ubucuruzi bwawe</label>
                                    <input type="text" class="form-control" id="businessNames" name="businessNames">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="tinNumber">Andika TIN Number yawe</label>
                                    <input type="text" class="form-control" id="tinNumber" name="tinNumber">
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">Hitamwo ubwoko bwa bizinesi yawe</label>
                                    <select class="form-select" name="businessCategory">
                                        <option {{{ (isset($agent->businessCategory) && $agent->businessCategory == 'butike') ? "selected=\"selected\"" : "" }}}>Butike</option>
                                        <option {{{ (isset($agent->businessCategory) && $agent->businessCategory == 'Cybee_cafee_cafee_internet') ? "selected=\"selected\"" : "" }}}>Cybee cafee/ cafee internet</option>
                                        <option {{{ (isset($agent->businessCategory) && $agent->businessCategory == 'Papeteri') ? "selected=\"selected\"" : "" }}}>Papeteri</option>
                                        <option {{{ (isset($agent->businessCategory) && $agent->businessCategory == 'serivise_za_banki') ? "selected=\"selected\"" : "" }}}>serivise za banki</option>
                                        <option {{{ (isset($agent->businessCategory) && $agent->businessCategory == 'MTN/AIRTEL_kiyosike') ? "selected=\"selected\"" : "" }}}>MTN/AIRTEL kiyosike</option>
                                        <option {{{ (isset($agent->businessCategory) && $agent->businessCategory == 'Alimentation') ? "selected=\"selected\"" : "" }}}>Alimentation</option>
                                        <option {{{ (isset($agent->businessCategory) && $agent->businessCategory == 'secretarait_public') ? "selected=\"selected\"" : "" }}}>secretarait public</option>
                                        <option {{{ (isset($agent->businessCategory) && $agent->businessCategory == 'disc_burning') ? "selected=\"selected\"" : "" }}}>disc burning</option>
                                        <option {{{ (isset($agent->businessCategory) && $agent->businessCategory == 'izindi_serivise_zitavuze_haruguru') ? "selected=\"selected\"" : "" }}}>izindi serivise zitavuze haruguru</option>
                                    </select>
                                </div>
                                <div class="col-sm-12">
                                    <div class="">
                                        <label class="form-label">Hitamo muri izi serivisi zikurikira iyo/izo mwifuza ko twabagezaho?</label>
                                        <ul class="no-ul-list d-flex align-items-center border rounded-2 px-3 py-3">
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="services" value="irembo" id="services" {{{ (isset($agent->status) && $agent->status == 'irembo') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="irembo">irembo</label>
                                                </div>
                                            </li>
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="services" value="mango" id="services" {{{ (isset($agent->status) && $agent->status == 'mango') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="mango">mango</label>
                                                </div>
                                            </li>
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="services" value="insurance_agency" id="services" {{{ (isset($agent->status) && $agent->status == 'insurance_agency') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="male">insurance_agency</label>
                                                </div>
                                            </li>
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="services" value="spenn" id="services" {{{ (isset($agent->status) && $agent->status == 'spenn') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="spenn">spenn</label>
                                                </div>
                                            </li>
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="services" value="sms_reselling" id="services" {{{ (isset($agent->status) && $agent->status == 'sms_reselling') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="male">sms_reselling</label>
                                                </div>
                                            </li>
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="services" value="bk_agent" id="services" {{{ (isset($agent->status) && $agent->status == 'bk_agent') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="bk_agent">bk_agent</label>
                                                </div>
                                            </li>
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="services" value="mobicash" id="services" {{{ (isset($agent->status) && $agent->status == 'mobicash') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="male">mobicash</label>
                                                </div>
                                            </li>
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="services" value="commodities" id="services" {{{ (isset($agent->status) && $agent->status == 'commodities') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="commodities">commodities</label>
                                                </div>
                                            </li>
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="services" value="bpr_agent" id="services" {{{ (isset($agent->status) && $agent->status == 'bpr_agent') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="male">bpr_agent</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="userImg">Ifoto</label>
                                        <input type="file" class="form-control" id="userImg" name="userImg">
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
                                    <a type="button" href="/became-an-agent/create-step2" class="col-6 btn btn-warning">Back to Step 2</a>
                                    <button type="submit" class="col-6 btn btn-primary">Next</button>
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