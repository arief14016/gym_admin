@extends('layouts.app')

@section('trainer')

<div class="content flex-column-fluid" id="kt_content">
    <!--begin::Row-->
    <div class="row">
        <!--begin::Col-->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <!--begin::Card-->
            <div class="card card-custom gutter-b card-stretch">
                <!--begin::Body-->
                <div class="card-body text-center pt-4">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ki ki-bold-more-hor"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover">
                                    <li class="navi-header font-weight-bold py-4">
                                        <span class="font-size-lg">Choose Label:</span>
                                        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                    </li>
                                    <li class="navi-separator mb-3 opacity-70"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-success">Customer</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-danger">Partner</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-primary">Member</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-dark">Staff</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-separator mt-3 opacity-70"></li>
                                    <li class="navi-footer py-4">
                                        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                        <i class="ki ki-plus icon-sm"></i>Add new</a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::User-->
                    <div class="mt-7">
                        <div class="symbol symbol-circle symbol-lg-75">
                            <img src="assets/media/users/300_14.jpg" alt="image" />
                        </div>
                        <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                            <span class="font-size-h3 font-weight-boldest">JB</span>
                        </div>
                    </div>
                    <!--end::User-->         
                    <!--begin::Name-->
                    <div class="my-2">
                        <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4">John Beans</a>
                    </div>
                    <!--end::Name-->
                    <!--begin::Label-->
                    <span class="label label-inline label-lg label-light-warning btn-sm font-weight-bold">Active</span>
                    <!--end::Label-->
                    <!--begin::Buttons-->
                    <div class="mt-9 mb-6">
                        <a href="#" class="btn btn-md btn-icon btn-light-facebook btn-pill mx-2">
                            <i class="socicon-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-md btn-icon btn-light-twitter btn-pill mx-2">
                            <i class="socicon-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-md btn-icon btn-light-linkedin btn-pill mx-2">
                            <i class="socicon-linkedin"></i>
                        </a>
                    </div>
                    <!--end::Buttons-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <!--begin::Card-->
            <div class="card card-custom gutter-b card-stretch">
                <!--begin::Body-->
                <div class="card-body text-center pt-4">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ki ki-bold-more-hor"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover">
                                    <li class="navi-header pb-1">
                                        <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-shopping-cart-1"></i>
                                            </span>
                                            <span class="navi-text">Order</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-calendar-8"></i>
                                            </span>
                                            <span class="navi-text">Event</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-graph-1"></i>
                                            </span>
                                            <span class="navi-text">Report</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="navi-text">Post</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-writing"></i>
                                            </span>
                                            <span class="navi-text">File</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::User-->
                    <div class="mt-7 pb-2">
                        <div class="symbol symbol-circle symbol-lg-5 d-none">
                            <img src="assets/media/users/300_1.jpg" alt="image" />
                        </div>
                        <div class="symbol symbol-lg-75 symbol-circle symbol-light-success">
                            <span class="font-size-h3 symbol-label font-weight-boldest">MP</span>
                        </div>
                    </div>
                    <!--end::User-->
                    <!--begin::Name-->
                    <div class="my-2">
                        <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4">Matt Pears</a>
                    </div>
                    <!--end::Name-->
                    <!--begin::Label-->
                    <a href="#" class="label label-inline label-lg label-light-danger font-weight-bold">Rejected</a>
                    <!--end::Label-->
                    <!--begin::Buttons-->
                    <div class="mt-9 mb-6">
                        <a href="#" class="btn btn-md btn-icon btn-light-facebook btn-pill mx-2">
                            <i class="socicon-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-md btn-icon btn-light-twitter btn-pill mx-2">
                            <i class="socicon-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-md btn-icon btn-light-linkedin btn-pill mx-2">
                            <i class="socicon-linkedin"></i>
                        </a>
                    </div>
                    <!--end::Buttons-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <!--begin::Card-->
            <div class="card card-custom gutter-b card-stretch">
                <!--begin::Body-->
                <div class="card-body text-center pt-4">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ki ki-bold-more-hor"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                <!--begin::Naviigation-->
                                <ul class="navi">
                                    <li class="navi-header font-weight-bold py-5">
                                        <span class="font-size-lg">Add New:</span>
                                        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                    </li>
                                    <li class="navi-separator mb-3 opacity-70"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-shopping-cart-1"></i>
                                            </span>
                                            <span class="navi-text">Order</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="navi-icon flaticon2-calendar-8"></i>
                                            </span>
                                            <span class="navi-text">Members</span>
                                            <span class="navi-label">
                                                <span class="label label-light-danger label-rounded font-weight-bold">3</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="navi-icon flaticon2-telegram-logo"></i>
                                            </span>
                                            <span class="navi-text">Project</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="navi-icon flaticon2-new-email"></i>
                                            </span>
                                            <span class="navi-text">Record</span>
                                            <span class="navi-label">
                                                <span class="label label-light-success label-rounded font-weight-bold">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-separator mt-3 opacity-70"></li>
                                    <li class="navi-footer pt-5 pb-4">
                                        <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
                                        <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>
                                <!--end::Naviigation-->
                            </div>
                        </div>
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::User-->
                    <div class="mt-7">
                        <div class="symbol symbol-circle symbol-lg-75">
                            <img src="assets/media/users/300_11.jpg" alt="image" />
                        </div>
                        <div class="symbol symbol-lg-75 symbol-circle symbol-primary">
                            <span class="font-size-h3 symbol-label font-weight-boldest d-none">JM</span>
                        </div>
                    </div>
                    <!--end::User-->
                    <!--begin::Name-->
                    <div class="my-2">
                        <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4">Jessica Miles</a>
                    </div>
                    <!--end::Name-->
                    <!--begin::Label-->
                    <a href="#" class="label label-inline label-lg label-light-success font-weight-bold">Active</a>
                    <!--end::Label-->
                    <!--begin::Buttons-->
                    <div class="mt-9 mb-6">
                        <a href="#" class="btn btn-md btn-icon btn-light-facebook btn-pill mx-2">
                            <i class="socicon-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-md btn-icon btn-light-twitter btn-pill mx-2">
                            <i class="socicon-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-md btn-icon btn-light-linkedin btn-pill mx-2">
                            <i class="socicon-linkedin"></i>
                        </a>
                    </div>
                    <!--end::Buttons-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <!--begin::Card-->
            <div class="card card-custom gutter-b card-stretch">
                <!--begin::Body-->
                <div class="card-body text-center pt-4">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ki ki-bold-more-hor"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover py-5">
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-drop"></i>
                                            </span>
                                            <span class="navi-text">New Group</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-list-3"></i>
                                            </span>
                                            <span class="navi-text">Contacts</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="navi-text">Groups</span>
                                            <span class="navi-link-badge">
                                                <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-bell-2"></i>
                                            </span>
                                            <span class="navi-text">Calls</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-gear"></i>
                                            </span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-separator my-3"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-magnifier-tool"></i>
                                            </span>
                                            <span class="navi-text">Help</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-bell-2"></i>
                                            </span>
                                            <span class="navi-text">Privacy</span>
                                            <span class="navi-link-badge">
                                                <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::User-->
                    <div class="mt-7">
                        <div class="symbol symbol-circle symbol-lg-75">
                            <img src="assets/media/users/300_1.jpg" alt="image" />
                        </div>
                        <div class="symbol symbol-lg-75 symbol-circle symbol-primary">
                            <span class="font-size-h3 symbol-label font-weight-boldest d-none">AP</span>
                        </div>
                    </div>
                    <!--end::User-->
                    <!--begin::Name-->
                    <div class="my-2">
                        <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4">Antonio Pastore</a>
                    </div>
                    <!--end::Name-->
                    <!--begin::Label-->
                    <a href="#" class="label label-inline label-lg label-light-primary font-weight-bold">Active</a>
                    <!--end::Label-->
                    <!--begin::Buttons-->
                    <div class="mt-9 mb-6">
                        <a href="#" class="btn btn-md btn-icon btn-light-facebook btn-pill mx-2">
                            <i class="socicon-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-md btn-icon btn-light-twitter btn-pill mx-2">
                            <i class="socicon-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-md btn-icon btn-light-linkedin btn-pill mx-2">
                            <i class="socicon-linkedin"></i>
                        </a>
                    </div>
                    <!--end::Buttons-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    
    <!--begin::Pagination-->
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="d-flex flex-wrap mr-3">
            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                <i class="ki ki-bold-double-arrow-back icon-xs"></i>
            </a>
            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                <i class="ki ki-bold-arrow-back icon-xs"></i>
            </a>
            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                <i class="ki ki-bold-arrow-next icon-xs"></i>
            </a>
            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                <i class="ki ki-bold-double-arrow-next icon-xs"></i>
            </a>
        </div>
        <div class="d-flex align-items-center">
            <select class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <span class="text-muted">Displaying 10 of 230 records</span>
        </div>
    </div>
    <!--end::Pagination-->
</div>

@endsection