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
                        <h4><i class="fa-regular fa-user text-primary me-2"></i>Address info</h4>
                    </div>
                    <div class="card-body px-4">
                        <form action="/became-an-agent/create-step2" method="post">
                            {{ csrf_field() }}

                            <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                                <div class="col-sm-6">
                                    <label class="form-label">Hitamo intara </label>
                                    <select class="form-select" name="province">
                                        @foreach(\App\Models\Regions::distinct()->get(['province']) as $region)
                                        <option {{{ (isset($agent->province) && $agent->province == '{{ $region->province }}') ? "selected=\"selected\"" : "" }}}>{{ $region->province }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Hitamo Akarere </label>
                                    <select class="form-select" name="district">
                                        @foreach(\App\Models\Regions::distinct()->get(['district']) as $region)
                                        <option {{{ (isset($agent->district) && $agent->district == '{{ $region->district }}') ? "selected=\"selected\"" : "" }}}>{{ $region->district }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Hitamo Umurenge </label>
                                    <select class="form-select" name="sector">
                                        @foreach(\App\Models\Regions::distinct()->get(['sector']) as $region)
                                        <option {{{ (isset($agent->sector) && $agent->sector == '{{ $region->sector }}') ? "selected=\"selected\"" : "" }}}>{{ $region->sector }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Hitamo akagari </label>
                                    <select class="form-select" name="cell">
                                    @foreach(\App\Models\Regions::distinct()->get(['cell']) as $region)
                                        <option {{{ (isset($agent->cell) && $agent->cell == '{{ $region->cell }}') ? "selected=\"selected\"" : "" }}}>{{ $region->cell }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Hitamo umudugudu </label>
                                    <select class="form-select" name="village">
                                    @foreach(\App\Models\Regions::distinct()->get(['village']) as $region)
                                        <option {{{ (isset($agent->village) && $agent->village == '{{ $region->village }}') ? "selected=\"selected\"" : "" }}}>{{ $region->village }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Andika Isibo</label>
                                    <input type="text" class="form-control" id="isibo" name="isibo" />
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
                                <div class="row form-btn">
                                    <a type="button" href="/became-an-agent/create-step1" class="col-6 btn btn-warning">Back to Step 1</a>
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