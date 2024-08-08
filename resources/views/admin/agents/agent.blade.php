@extends('layouts.admin')
@section('title','All Agents')
@section('content')


<!-- Page Content -->
<div class="content container-fluid">

	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h3 class="page-title">Agents</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
					<li class="breadcrumb-item active">@yield('title')</li>
				</ul>
			</div>
			<div class="col-auto float-right ml-auto">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
				<!-- <div class="view-icons">
					<a href="employees.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
					<a href="employees-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
				</div> -->
			</div>
		</div>
	</div>
	<!-- /Page Header -->

	<!-- Search Filter -->
	<!-- <div class="row filter-row">
		<div class="form-group col-sm-6 col-md-3">
			<div class="form-group form-focus">
				<input type="text" class="form-control floating">
				<label class="focus-label">Employee ID</label>
			</div>
		</div>
		<div class="form-group col-sm-6 col-md-3">
			<div class="form-group form-focus">
				<input type="text" class="form-control floating">
				<label class="focus-label">Employee Name</label>
			</div>
		</div>
		<div class="form-group col-sm-6 col-md-3">
			<div class="form-group form-focus select-focus">
				<select class="select floating">
					<option>Select Designation</option>
					<option>Web Developer</option>
					<option>Web Designer</option>
					<option>Android Developer</option>
					<option>Ios Developer</option>
				</select>
				<label class="focus-label">Designation</label>
			</div>
		</div>
		<div class="form-group col-sm-6 col-md-3">
			<a href="#" class="btn btn-success btn-block"> Search </a>
		</div>
	</div> -->
	<!-- Search Filter -->

	<div class="row staff-grid-row">
		@foreach( $agents as $agent )
		<div class="col-md-4 form-group col-sm-6 col-12 col-lg-4 col-xl-3">
			<div class="profile-widget">
				<div class="profile-img">
					<a href="/admin/agent/{{ $agent->id }}" class="avatar"><img src="{{asset('image')}}/{{ $agent->userImg}}" alt=""></a>
				</div>
				<div class="dropdown profile-action">
					<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
					</div>
				</div>
				<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="/admin/agent/{{ $agent->id }}">{{ $agent->names }}</a></h4>
				<div class="small text-muted">{{ $agent->businessNames}}</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<!-- /Page Content -->

<!-- Add Employee Modal -->
<div id="add_employee" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Employee</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<form action="/became-an-agent/store" method="post" enctype="multipart/form-data">
						@csrf
						<h3>
							<div class="bd-wizard-step-title">Personal Details</div>
						</h3>
						<div class="row">

							<div class="form-group col-sm-6">
								<label class="form-label" for="names">Amazina yose</label>
								<input type="text" class="form-control" id="names" name="names">
							</div>
							<div class="form-group col-sm-6">
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
							<div class="form-group col-sm-3">
								<label class="form-label">Igitsina</label>
								<div class="col-lg-9">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" value="gabo" id="gender" {{{ (isset($agent->status) && $agent->status == 'gabo') ? "checked" : "" }}}>
										<label class="form-check-label" for="male">Gabo</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" value="gore" id="gender" {{{ (isset($agent->status) && $agent->status == 'gore') ? "checked" : "" }}}>
										<label class="form-check-label" for="gore">Gore</label>
									</div>
								</div>
							</div>
							<div class="form-group col-sm-6">
								<label class="form-label">Ikiciro cy'amashuri wize </label>
								<select class="select" name="education">
									<option {{{ (isset($agent->education) && $agent->education == '1-6_wamashuri_abanza') ? "selected=\"selected\"" : "" }}}>1-6 w' amashuri abanza</option>
									<option {{{ (isset($agent->education) && $agent->education == '1-3_w_amashuri_yisumbuye') ? "selected=\"selected\"" : "" }}}>1-3 w' amashuri yisumbuye</option>
									<option {{{ (isset($agent->education) && $agent->education == '4-6_w_amashuri_yisumbuye') ? "selected=\"selected\"" : "" }}}>4-6 w' amashuri yisumbuye</option>
									<option {{{ (isset($agent->education) && $agent->education == 'Kaminuza') ? "selected=\"selected\"" : "" }}}>Kaminuza</option>
									<option {{{ (isset($agent->education) && $agent->education == 'Imyuga') ? "selected=\"selected\"" : "" }}}>Imyuga</option>
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label class="form-label">Irangamimerere </label>
								<select class="select" name="status">
									<option {{{ (isset($agent->status) && $agent->status == 'Ingaragu') ? "selected=\"selected\"" : "" }}}>Ingaragu</option>
									<option {{{ (isset($agent->status) && $agent->status == 'Ndubatse') ? "selected=\"selected\"" : "" }}}>Ndubatse</option>
									<option {{{ (isset($agent->status) && $agent->status == 'Umupfakare/umupfakazi') ? "selected=\"selected\"" : "" }}}>Umupfakare/umupfakazi</option>
									<option {{{ (isset($agent->status) && $agent->status == 'Natandukanye_nuwo_twashakanye') ? "selected=\"selected\"" : "" }}}>Natandukanye nuwo twashakanye</option>
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label class="form-label">Andika Amazina y'umuntu dushobora kukubonaho mugihe wowe utabonetse.</label>
								<input type="text" value="" class="form-control" id="nextKinNames" name="nextKinNames" />
							</div>
							<div class="form-group col-sm-6">
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
						<hr/>
						<h4 class="section-heading">Employment Location </h4>
						<div class="row">
							<div class="form-group col-sm-6">
								<label class="form-label">Hitamo intara </label>
								<select class="select" name="province">
									@foreach(\App\Models\Regions::distinct()->get(['province']) as $region)
									<option {{{ (isset($agent->province) && $agent->province == '{{ $region->province }}') ? "selected=\"selected\"" : "" }}}>{{ $region->province }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label class="form-label">Hitamo Akarere </label>
								<select class="select" name="district">
									@foreach(\App\Models\Regions::distinct()->get(['district']) as $region)
									<option {{{ (isset($agent->district) && $agent->district == '{{ $region->district }}') ? "selected=\"selected\"" : "" }}}>{{ $region->district }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label class="form-label">Hitamo Umurenge </label>
								<select class="select" name="sector">
									@foreach(\App\Models\Regions::distinct()->get(['sector']) as $region)
									<option {{{ (isset($agent->sector) && $agent->sector == '{{ $region->sector }}') ? "selected=\"selected\"" : "" }}}>{{ $region->sector }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label class="form-label">Hitamo akagari </label>
								<select class="select" name="cell">
									@foreach(\App\Models\Regions::distinct()->get(['cell']) as $region)
									<option {{{ (isset($agent->cell) && $agent->cell == '{{ $region->cell }}') ? "selected=\"selected\"" : "" }}}>{{ $region->cell }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label class="form-label">Hitamo umudugudu </label>
								<select class="select" name="village">
									@foreach(\App\Models\Regions::distinct()->get(['village']) as $region)
									<option {{{ (isset($agent->village) && $agent->village == '{{ $region->village }}') ? "selected=\"selected\"" : "" }}}>{{ $region->village }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group col-sm-6">
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
						<hr />
						<h4 class="section-heading mb-3 mt-3">Business details </h4>
						<div class="row">
							<div class="form-group col-sm-6">
								<label class="form-label" for="businessNames">Izina ry' ubucuruzi bwawe</label>
								<input type="text" class="form-control" id="businessNames" name="businessNames">
							</div>
							<div class="form-group col-sm-6">
								<label class="form-label" for="tinNumber">Andika TIN Number yawe</label>
								<input type="text" class="form-control" id="tinNumber" name="tinNumber">
							</div>
							<div class="form-group col-sm-4">
								<label class="form-label">Hitamwo ubwoko bwa bizinesi yawe</label>
								<select class="select" name="businessCategory">
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
							<div class="form-group col-sm-12">
								<label class="form-label">Hitamo muri izi serivisi zikurikira iyo/izo mwifuza ko twabagezaho?</label>
								<div class="row">
									<div class="form-check form-check-inline col-sm-4 mb-0">
										<input class="form-check-input" type="checkbox" name="services[]" value="irembo" id="services" {{{ (isset($agent->status) && $agent->status == 'irembo') ? "checked" : "" }}}>
										<label class="form-check-label" for="irembo">irembo</label>
									</div>
									<div class="form-check form-check-inline col-sm-4 mb-0">
										<input class="form-check-input" type="checkbox" name="services[]" value="mango" id="services" {{{ (isset($agent->status) && $agent->status == 'mango') ? "checked" : "" }}}>
										<label class="form-check-label" for="mango">mango</label>
									</div>
									<div class="form-check form-check-inline col-sm-4 mb-0">
										<input class="form-check-input" type="checkbox" name="services[]" value="insurance_agency" id="services" {{{ (isset($agent->status) && $agent->status == 'insurance_agency') ? "checked" : "" }}}>
										<label class="form-check-label" for="male">insurance_agency</label>
									</div>
									<div class="form-check form-check-inline col-sm-4 mb-0">
										<input class="form-check-input" type="checkbox" name="services[]" value="spenn" id="services" {{{ (isset($agent->status) && $agent->status == 'spenn') ? "checked" : "" }}}>
										<label class="form-check-label" for="spenn">spenn</label>
									</div>
									<div class="form-check form-check-inline col-sm-4 mb-0">
										<input class="form-check-input" type="checkbox" name="services[]" value="sms_reselling" id="services" {{{ (isset($agent->status) && $agent->status == 'sms_reselling') ? "checked" : "" }}}>
										<label class="form-check-label" for="male">sms_reselling</label>
									</div>
									<div class="form-check form-check-inline col-sm-4 mb-0">
										<input class="form-check-input" type="checkbox" name="services[]" value="bk_agent" id="services" {{{ (isset($agent->status) && $agent->status == 'bk_agent') ? "checked" : "" }}}>
										<label class="form-check-label" for="bk_agent">bk_agent</label>
									</div>
									<div class="form-check form-check-inline col-sm-4 mb-0">
										<input class="form-check-input" type="checkbox" name="services[]" value="mobicash" id="services" {{{ (isset($agent->status) && $agent->status == 'mobicash') ? "checked" : "" }}}>
										<label class="form-check-label" for="male">mobicash</label>
									</div>
									<div class="form-check form-check-inline col-sm-4 mb-0">
										<input class="form-check-input" type="checkbox" name="services[]" value="commodities" id="services" {{{ (isset($agent->status) && $agent->status == 'commodities') ? "checked" : "" }}}>
										<label class="form-check-label" for="commodities">commodities</label>
									</div>
									<div class="form-check form-check-inline col-sm-4 mb-0">
										<input class="form-check-input" type="checkbox" name="services[]" value="bpr_agent" id="services" {{{ (isset($agent->status) && $agent->status == 'bpr_agent') ? "checked" : "" }}}>
										<label class="form-check-label" for="male">bpr_agent</label>
									</div>
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
						<hr />
						<h4 class="section-header">Agent Document</h4>
						<div class="row">
							<div class="form-group col-sm-6">
								<label class="form-label" for="userImg">Ifoto Yawe</label>
								<input type="file" class="form-control" id="userImg" name="userImg">
							</div>
							<div class="form-group col-sm-6">
								<label class="form-label" for="userImg">Criminal Record Certificate</label>
								<input type="file" class="form-control" id="CriminalRecordCertificate" name="CriminalRecordCertificate">
							</div>
							<div class="form-group col-sm-6">
								<label class="form-label" for="userImg">certificate Of Residence</label>
								<input type="file" class="form-control" id="certificateOfResidence" name="certificateOfResidence">
							</div>
							<div class="form-group col-sm-6">
								<label class="form-label" for="userImg">RDB certificate</label>
								<input type="file" class="form-control" id="rdb_certificate" name="rdb_certificate">
							</div>
							<div class="form-group col-sm-6">
								<label class="form-label" for="userImg">ID document</label>
								<input type="file" class="form-control" id="id_doc" name="id_doc">
							</div>
						</div>
						<hr/>
						<h4 class="section-heading mb-5">Accept agreement and Submit</h4>
						<div class="row g-3 g-sm-4 mt-0 mt-lg-2">

							<div class="form-group col-sm-12">
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
							<div class="form-group col-sm-12">
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
							<div class="form-group">
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
									I hereby declare that I had read all the <a href="#!">terms and conditions</a> and all the details provided my me in this form are true.
								</label>
							</div>
							<button type="submit" class="col-6 btn btn-primary">Save info</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Add Employee Modal -->

<!-- Edit Employee Modal -->
<div id="edit_employee" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Employee</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="row">
						<div class="form-group col-sm-6">
							<div class="form-group">
								<label class="col-form-label">First Name <span class="text-danger">*</span></label>
								<input class="form-control" value="John" type="text">
							</div>
						</div>
						<div class="form-group col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Last Name</label>
								<input class="form-control" value="Doe" type="text">
							</div>
						</div>
						<div class="form-group col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Username <span class="text-danger">*</span></label>
								<input class="form-control" value="johndoe" type="text">
							</div>
						</div>
						<div class="form-group col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Email <span class="text-danger">*</span></label>
								<input class="form-control" value="johndoe@example.com" type="email">
							</div>
						</div>
						<div class="form-group col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Password</label>
								<input class="form-control" value="johndoe" type="password">
							</div>
						</div>
						<div class="form-group col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Confirm Password</label>
								<input class="form-control" value="johndoe" type="password">
							</div>
						</div>
						<div class="form-group col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
								<input type="text" value="FT-0001" readonly class="form-control floating">
							</div>
						</div>
						<div class="form-group col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
								<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
							</div>
						</div>
						<div class="form-group col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Phone </label>
								<input class="form-control" value="9876543210" type="text">
							</div>
						</div>
						<div class="form-group col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Company</label>
								<select class="select">
									<option>Global Technologies</option>
									<option>Delta Infotech</option>
									<option selected>International Software Inc</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Department <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select Department</option>
									<option>Web Development</option>
									<option>IT Management</option>
									<option>Marketing</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Designation <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select Designation</option>
									<option>Web Designer</option>
									<option>Web Developer</option>
									<option>Android Developer</option>
								</select>
							</div>
						</div>
					</div>
					<div class="table-responsive m-t-15">
						<table class="table table-striped custom-table">
							<thead>
								<tr>
									<th>Module Permission</th>
									<th class="text-center">Read</th>
									<th class="text-center">Write</th>
									<th class="text-center">Create</th>
									<th class="text-center">Delete</th>
									<th class="text-center">Import</th>
									<th class="text-center">Export</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Holidays</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Leaves</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Clients</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Projects</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Tasks</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Chats</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Assets</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Timing Sheets</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="submit-section">
						<button class="btn btn-primary submit-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Employee Modal -->

<!-- Delete Employee Modal -->
<div class="modal custom-modal fade" id="delete_employee" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header">
					<h3>Delete Employee</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row">
						<div class="col-6">
							<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
						</div>
						<div class="col-6">
							<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Employee Modal -->


@endsection