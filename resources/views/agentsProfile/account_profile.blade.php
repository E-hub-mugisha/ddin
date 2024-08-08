@extends('layouts.app')
@section('title','Became an Agent')
@section('content')

@include('includes.header')
<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('assets/assets/css/bd-wizard.css')}}">
<link rel="stylesheet" href="{{ asset('assets/assets/css/bootstrap-select.min.css')}}">
<section class="bg-light-blue">
    <div class="container">
        <form action="/became-an-agent/store" method="post" enctype="multipart/form-data">
            @csrf
            <div id="wizard">
                <h3>
                    <div class="media">
                        <div class="bd-wizard-step-icon"><i class="mdi mdi-account-outline"></i></div>
                        <div class="media-body">
                            <div class="bd-wizard-step-title">Personal Details</div>
                            <div class="bd-wizard-step-subtitle">Step 1</div>
                        </div>
                    </div>
                </h3>
                <section>
                    <div class="content-wrapper">
                        <h4 class="section-heading">Enter your Personal details </h4>
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
                        </div>
                    </div>
                </section>
                <h3>
                    <div class="media">
                        <div class="bd-wizard-step-icon"><i class="mdi mdi-bank"></i></div>
                        <div class="media-body">
                            <div class="bd-wizard-step-title">Employ Location</div>
                            <div class="bd-wizard-step-subtitle">Step 2</div>
                        </div>
                    </div>
                </h3>
                <section>
                    <div class="content-wrapper">
                        <h4 class="section-heading">Enter your Employment details </h4>
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
                        </div>
                    </div>
                </section>
                <h3>
                    <div class="media">
                        <div class="bd-wizard-step-icon"><i class="mdi mdi-bank"></i></div>
                        <div class="media-body">
                            <div class="bd-wizard-step-title">Business Details</div>
                            <div class="bd-wizard-step-subtitle">Step 3</div>
                        </div>
                    </div>
                </h3>
                <section>
                    <div class="content-wrapper">
                        <h4 class="section-heading">Enter your Business details </h4>
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
                                                <input class="form-check-input" type="checkbox" name="services[]" value="irembo" id="services" {{{ (isset($agent->status) && $agent->status == 'irembo') ? "checked" : "" }}}>
                                                <label class="form-check-label" for="irembo">irembo</label>
                                            </div>
                                        </li>
                                        <li class="me-3">
                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" value="mango" id="services" {{{ (isset($agent->status) && $agent->status == 'mango') ? "checked" : "" }}}>
                                                <label class="form-check-label" for="mango">mango</label>
                                            </div>
                                        </li>
                                        <li class="me-3">
                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" value="insurance_agency" id="services" {{{ (isset($agent->status) && $agent->status == 'insurance_agency') ? "checked" : "" }}}>
                                                <label class="form-check-label" for="male">insurance_agency</label>
                                            </div>
                                        </li>
                                        <li class="me-3">
                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" value="spenn" id="services" {{{ (isset($agent->status) && $agent->status == 'spenn') ? "checked" : "" }}}>
                                                <label class="form-check-label" for="spenn">spenn</label>
                                            </div>
                                        </li>
                                        <li class="me-3">
                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" value="sms_reselling" id="services" {{{ (isset($agent->status) && $agent->status == 'sms_reselling') ? "checked" : "" }}}>
                                                <label class="form-check-label" for="male">sms_reselling</label>
                                            </div>
                                        </li>
                                        <li class="me-3">
                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" value="bk_agent" id="services" {{{ (isset($agent->status) && $agent->status == 'bk_agent') ? "checked" : "" }}}>
                                                <label class="form-check-label" for="bk_agent">bk_agent</label>
                                            </div>
                                        </li>
                                        <li class="me-3">
                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" value="mobicash" id="services" {{{ (isset($agent->status) && $agent->status == 'mobicash') ? "checked" : "" }}}>
                                                <label class="form-check-label" for="male">mobicash</label>
                                            </div>
                                        </li>
                                        <li class="me-3">
                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" value="commodities" id="services" {{{ (isset($agent->status) && $agent->status == 'commodities') ? "checked" : "" }}}>
                                                <label class="form-check-label" for="commodities">commodities</label>
                                            </div>
                                        </li>
                                        <li class="me-3">
                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" value="bpr_agent" id="services" {{{ (isset($agent->status) && $agent->status == 'bpr_agent') ? "checked" : "" }}}>
                                                <label class="form-check-label" for="male">bpr_agent</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="userImg">Ifoto Yawe</label>
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
                        </div>
                    </div>
                </section>
                <h3>
                    <div class="media">
                        <div class="bd-wizard-step-icon"><i class="mdi mdi-account-check-outline"></i></div>
                        <div class="media-body">
                            <div class="bd-wizard-step-title">Review </div>
                            <div class="bd-wizard-step-subtitle">Step 3</div>
                        </div>
                    </div>
                </h3>
                <section>
                    <div class="col-sm-6">
                        <label class="form-label" for="userImg">Criminal Record Certificate</label>
                        <input type="file" class="form-control" id="CriminalRecordCertificate" name="CriminalRecordCertificate">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="userImg">certificate Of Residence</label>
                        <input type="file" class="form-control" id="certificateOfResidence" name="certificateOfResidence">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="userImg">RDB certificate</label>
                        <input type="file" class="form-control" id="rdb_certificate" name="rdb_certificate">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="userImg">ID document</label>
                        <input type="file" class="form-control" id="id_doc" name="id_doc">
                    </div>
                    <!-- <div class="content-wrapper">
                        <h4 class="section-heading mb-5">Review your Details</h4>
                        <h6 class="font-weight-bold">Personal Details</h6>
                        <p class="mb-4"><span id="enteredFirstName">Cha</span> <span id="enteredLastName">Ji-Hun C</span> <br>
                            Phone: <span id="enteredPhoneNumber">+230-582-6609</span> <br>
                            Email: <span id="enteredEmailAddress">willms_abby@gmail.com</span></p>
                        <h6 class="font-weight-bold">Employment Details</h6>
                        <p class="mb-0"><span id="enteredDesignation">Junior Developer</span> - <span id="enteredDepartment">UI Development</span> <br>
                            Phone: <span id="enteredEmployeeNumber">JDUI36849</span> <br>
                            Email: <span id="enteredWorkEmailAddress">willms_abby@company.com</span></p>
                    </div> -->
                </section>
                <h3>
                    <div class="media">
                        <div class="bd-wizard-step-icon"><i class="mdi mdi-emoticon-outline"></i></div>
                        <div class="media-body">
                            <div class="bd-wizard-step-title">Submit</div>
                            <div class="bd-wizard-step-subtitle">Step 4</div>
                        </div>
                    </div>
                </h3>
                <section>
                    <div class="content-wrapper">
                        <h4 class="section-heading mb-5">Accept agreement and Submit</h4>
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
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                                I hereby declare that I had read all the <a href="#!">terms and conditions</a> and all the details provided my me in this form are true.
                            </label>
                        </div>
                        <button type="submit" class="col-6 btn btn-primary">Save info</button>
                    </div>
                </section>
            </div>
        </form>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/assets/js/jquery.steps.min.js')}}"></script>
<script src="{{ asset('assets/assets/js/bd-wizard.js')}}"></script>
<script src="{{ asset('assets/assets/js/bootstrap-select.min.js')}}"></script>
@include('includes.footer')
@endsection