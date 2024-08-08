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
                        <h4><i class="fa-regular fa-user text-primary me-2"></i>Basic info</h4>
                    </div>
                    <div class="card-body px-4">
                        <form action="/became-an-agent/create-step1" method="post">
                            {{ csrf_field() }}

                            <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                                <div class="col-sm-6">
                                    <label class="form-label" for="names">Amazina yose</label>
                                    <input type="text" class="form-control" id="names" name="names">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="nid">Nimero y'indangamuntu</label>
                                    <input type="text" class="form-control" id="nid" name="nid">
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label" for="phone">Nimero ya MTN ukoresha</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col-sm-5">
                                    <label class="form-label">Agent email</label>
                                    <input type="text" value="" class="form-control" id="email" name="email" />
                                </div>
                                <div class="col-sm-3">
                                    <div class="">
                                        <label class="form-label">Igitsina</label>
                                        <ul class="no-ul-list d-flex align-items-center border rounded-2 px-3 py-3">
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="gender" value="gabo" id="gender" {{{ (isset($agent->status) && $agent->status == 'gabo') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="male">Gabo</label>
                                                </div>
                                            </li>
                                            <li class="me-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="gender" value="gore" id="gender" {{{ (isset($agent->status) && $agent->status == 'gore') ? "checked" : "" }}}>
                                                    <label class="form-check-label" for="gore">Gore</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Ikiciro cy'amashuri wize </label>
                                    <select class="form-select" name="education">
                                        <option {{{ (isset($agent->education) && $agent->education == '1-6_wamashuri_abanza') ? "selected=\"selected\"" : "" }}}>1-6 w' amashuri abanza</option>
                                        <option {{{ (isset($agent->education) && $agent->education == '1-3_w_amashuri_yisumbuye') ? "selected=\"selected\"" : "" }}}>1-3 w' amashuri yisumbuye</option>
                                        <option {{{ (isset($agent->education) && $agent->education == '4-6_w_amashuri_yisumbuye') ? "selected=\"selected\"" : "" }}}>4-6 w' amashuri yisumbuye</option>
                                        <option {{{ (isset($agent->education) && $agent->education == 'Kaminuza') ? "selected=\"selected\"" : "" }}}>Kaminuza</option>
                                        <option {{{ (isset($agent->education) && $agent->education == 'Imyuga') ? "selected=\"selected\"" : "" }}}>Imyuga</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Irangamimerere </label>
                                    <select class="form-select" name="status">
                                        <option {{{ (isset($agent->status) && $agent->status == 'Ingaragu') ? "selected=\"selected\"" : "" }}}>Ingaragu</option>
                                        <option {{{ (isset($agent->status) && $agent->status == 'Ndubatse') ? "selected=\"selected\"" : "" }}}>Ndubatse</option>
                                        <option {{{ (isset($agent->status) && $agent->status == 'Umupfakare/umupfakazi') ? "selected=\"selected\"" : "" }}}>Umupfakare/umupfakazi</option>
                                        <option {{{ (isset($agent->status) && $agent->status == 'Natandukanye_nuwo_twashakanye') ? "selected=\"selected\"" : "" }}}>Natandukanye nuwo twashakanye</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Andika Amazina y'umuntu dushobora kukubonaho mugihe wowe utabonetse.</label>
                                    <input type="text" value="" class="form-control" id="nextKinNames" name="nextKinNames" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Nimero y'umuntu dushobora kukubonaho mugihe wowe utabonetse</label>
                                    <input type="text" class="form-control" id="nextKinPhone" name="nextKinPhone" />
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
                                <button type="submit" class="col-md-2 btn btn-primary">Next</button>
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