@extends('layouts.admin')
@section('title','Agent Profile')
@section('content')

<!-- Page Content -->
<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">{{ $agents->names}}</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="card mb-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img alt="" src="{{asset('image')}}/{{ $agents->userImg}}"></a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0">{{ $agents->names}}</h3>
                                        <h6 class="text-muted">{{ $agents->businessNames}}</h6>
                                        <small class="text-muted">{{ $agents->businessCategory}}</small>
                                        <div class="staff-id">TIN Number : {{ $agents->tinNumber}}</div>
                                        <div class="small doj text-muted">Date of Join : {{ $agents->created_at}}</div>
                                        <div class="staff-msg"><a class="btn btn-custom" href="mailto:{{ $agents->email}}">Send Message</a></div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Phone:</div>
                                            <div class="text"><a href="">{{ $agents->names}}</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Email:</div>
                                            <div class="text"><a href="">{{ $agents->names}}</a></div>
                                        </li>
                                        <li>
                                            <div class="title">National ID:</div>
                                            <div class="text">{{ $agents->nid}}</div>
                                        </li>
                                        <li>
                                            <div class="title">Address:</div>
                                            <div class="text">{{ $agents->province}},{{ $agents->district}},{{ $agents->sector}},{{ $agents->cell}},{{ $agents->village}},{{ $agents->isibo}}</div>
                                        </li>
                                        <li>
                                            <div class="title">Gender:</div>
                                            <div class="text">{{ $agents->gender}}</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card tab-box">
        <div class="row user-tabs">
            <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                <ul class="nav nav-tabs nav-tabs-bottom">
                    <li class="nav-item"><a href="#emp_profile" data-toggle="tab" class="nav-link active">Profile</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content">

        <!-- Profile Info Tab -->
        <div id="emp_profile" class="pro-overview tab-pane fade show active">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Personal Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#personal_info_modal"><i class="fa fa-pencil"></i></a></h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">National ID.</div>
                                    <div class="text">{{ $agents->nid}}</div>
                                </li>
                                <li>
                                    <div class="title">Tel</div>
                                    <div class="text">{{ $agents->phone}}</div>
                                </li>
                                <li>
                                    <div class="title">Nationality</div>
                                    <div class="text">{{ $agents->country}}</div>
                                </li>
                                <li>
                                    <div class="title">Marital status</div>
                                    <div class="text">{{ $agents->status}}</div>
                                </li>
                                <li>
                                    <div class="title">Education</div>
                                    <div class="text">{{ $agents->education}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Emergency Contact <a href="#" class="edit-icon" data-toggle="modal" data-target="#emergency_contact_modal"><i class="fa fa-pencil"></i></a></h3>
                            <h5 class="section-title">Primary</h5>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Name</div>
                                    <div class="text">{{ $agents->nextKinNames}}</div>
                                </li>
                                <li>
                                    <div class="title">Relationship</div>
                                    <div class="text">Father</div>
                                </li>
                                <li>
                                    <div class="title">Phone </div>
                                    <div class="text">{{ $agents->nextKinPhone}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Document Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#education_info"><i class="fa fa-pencil"></i></a></h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="/id document/{{ $agents->id_doc}}" target="_blank" class="name">National ID
                                                <span class="time">Click to View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="/rdb_certificate/{{ $agents->rdb_certificate}}" target="_blank" class="name">RDB Certificate
                                                <span class="time">Click to View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="/certificate_Residence/{{ $agents->certificateOfResidence}}" target="_blank" class="name">certificate Of Residence
                                                <span class="time">Click to View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="/certificate_Criminal/{{ $agents->CriminalRecordCertificate}}" target="_blank" class="name">Criminal Record Certificate
                                                <span class="time">Click to View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Business Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#experience_info"><i class="fa fa-pencil"></i></a></h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Business Name</a>
                                                <span class="time">{{ $agents->businessNames}}</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Business Category</a>
                                                <span class="time">{{ $agents->businessCategory}}</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Services</a>
                                                <span class="time">{{ $agents->services}}</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Profile Info Tab -->

    </div>
</div>
<!-- /Page Content -->

<!-- Profile Modal -->
<div id="profile_info" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Profile Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-img-wrap edit-img">
                                <img class="inline-block" src="assets/img/profiles/avatar-02.jpg" alt="user">
                                <div class="fileupload btn">
                                    <span class="btn-text">edit</span>
                                    <input class="upload" type="file">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" value="John">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" value="Doe">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Birth Date</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text" value="05/06/1985">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="select form-control">
                                            <option value="male selected">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" value="4487 Snowbird Lane">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control" value="New York">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" value="United States">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pin Code</label>
                                <input type="text" class="form-control" value="10523">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" value="631-889-3206">
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Reports To <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>-</option>
                                    <option>Wilmer Deluna</option>
                                    <option>Lesley Grauer</option>
                                    <option>Jeffery Lalor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Profile Modal -->

<!-- Personal Info Modal -->
<div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Personal Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Passport No</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Passport Expiry Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tel</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nationality <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Religion</label>
                                <div class="cal-icon">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Marital status <span class="text-danger">*</span></label>
                                <select class="select form-control">
                                    <option>-</option>
                                    <option>Single</option>
                                    <option>Married</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Employment of spouse</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No. of children </label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Personal Info Modal -->

<!-- Family Info Modal -->
<div id="family_info_modal" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Family Informations</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-scroll">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Family Member <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Relationship <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of birth <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Relationship <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of birth <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="add-more">
                                    <a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Family Info Modal -->

<!-- Emergency Contact Modal -->
<div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Personal Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Primary Contact</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Relationship <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone 2</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Primary Contact</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Relationship <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone 2</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Emergency Contact Modal -->

<!-- Education Modal -->
<div id="education_info" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Education Informations</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-scroll">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-focus focused">
                                            <input type="text" value="Oxford University" class="form-control floating">
                                            <label class="focus-label">Institution</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus focused">
                                            <input type="text" value="Computer Science" class="form-control floating">
                                            <label class="focus-label">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus focused">
                                            <div class="cal-icon">
                                                <input type="text" value="01/06/2002" class="form-control floating datetimepicker">
                                            </div>
                                            <label class="focus-label">Starting Date</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus focused">
                                            <div class="cal-icon">
                                                <input type="text" value="31/05/2006" class="form-control floating datetimepicker">
                                            </div>
                                            <label class="focus-label">Complete Date</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus focused">
                                            <input type="text" value="BE Computer Science" class="form-control floating">
                                            <label class="focus-label">Degree</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus focused">
                                            <input type="text" value="Grade A" class="form-control floating">
                                            <label class="focus-label">Grade</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-focus focused">
                                            <input type="text" value="Oxford University" class="form-control floating">
                                            <label class="focus-label">Institution</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus focused">
                                            <input type="text" value="Computer Science" class="form-control floating">
                                            <label class="focus-label">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus focused">
                                            <div class="cal-icon">
                                                <input type="text" value="01/06/2002" class="form-control floating datetimepicker">
                                            </div>
                                            <label class="focus-label">Starting Date</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus focused">
                                            <div class="cal-icon">
                                                <input type="text" value="31/05/2006" class="form-control floating datetimepicker">
                                            </div>
                                            <label class="focus-label">Complete Date</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus focused">
                                            <input type="text" value="BE Computer Science" class="form-control floating">
                                            <label class="focus-label">Degree</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus focused">
                                            <input type="text" value="Grade A" class="form-control floating">
                                            <label class="focus-label">Grade</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-more">
                                    <a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Education Modal -->

<!-- Experience Modal -->
<div id="experience_info" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Experience Informations</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-scroll">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" value="Digital Devlopment Inc">
                                            <label class="focus-label">Company Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" value="United States">
                                            <label class="focus-label">Location</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" value="Web Developer">
                                            <label class="focus-label">Job Position</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <div class="cal-icon">
                                                <input type="text" class="form-control floating datetimepicker" value="01/07/2007">
                                            </div>
                                            <label class="focus-label">Period From</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <div class="cal-icon">
                                                <input type="text" class="form-control floating datetimepicker" value="08/06/2018">
                                            </div>
                                            <label class="focus-label">Period To</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" value="Digital Devlopment Inc">
                                            <label class="focus-label">Company Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" value="United States">
                                            <label class="focus-label">Location</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" value="Web Developer">
                                            <label class="focus-label">Job Position</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <div class="cal-icon">
                                                <input type="text" class="form-control floating datetimepicker" value="01/07/2007">
                                            </div>
                                            <label class="focus-label">Period From</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <div class="cal-icon">
                                                <input type="text" class="form-control floating datetimepicker" value="08/06/2018">
                                            </div>
                                            <label class="focus-label">Period To</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-more">
                                    <a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Experience Modal -->

@endsection