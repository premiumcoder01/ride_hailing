@extends('admin.layouts.app')
@section('content')
<section id="main-content" class="main-content">
    <div class="container-fluid"> 
        <div class="row mt-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="fw-normal f-18 m-0">Status</h5>
                    <ul class="list-unstyled m-0 p-0 onboarding-tags d-flex align-items-center">
                        <li class="approved">Approved</li>
                        <li class="not-approved">Not Approved</li>
                        <li class="pending">Pending</li>
                    </ul>
                </div>
            </div>
        </div>                   
        <div class="row mt-0 gy-4">
            <div class="col-12">
                <div class="card">                              
                    <div class="row justify-content-between driver-details-row">
                        <div class="w-auto">Driver ID: #237258</div>
                        <div class="w-auto">Username: Driver Name</div>
                        <div class="w-auto">Phone: +123-123-1234</div>
                        <div class="w-auto">Email: driver@gmail.com</div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <ul class="list-unstyled m-0 p-0 d-flex justify-content-between flex-wrap onboard-driver-checklist">
                                <li class="approved">
                                    <span class="title">Driver Registration Entry</span>
                                    <a href="#" class="eye-view"><img src="{{asset('admin/assets/images/icons/open-eye-icon.svg')}}" alt=""/></a>
                                    <span class="seperator"></span>
                                    <a href="#" class="action-link">Action</a>
                                </li>
                                <li class="approved">
                                    <span class="title">Document Verification</span>
                                    <a href="#" class="eye-view"><img src="{{asset('admin/assets/images/icons/open-eye-icon.svg')}}" alt=""/></a>
                                    <span class="seperator"></span>
                                    <a href="#" class="action-link">Action</a>
                                </li>
                                <li class="not-approved">
                                    <span class="title">Background Checks</span>
                                    <a href="#" class="eye-view"><img src="{{asset('admin/assets/images/icons/open-eye-icon.svg')}}" alt=""/></a>
                                    <span class="seperator"></span>
                                    <a href="#" class="action-link">Action</a>
                                </li>
                                <li class="approved">
                                    <span class="title">Vehicle Inspection</span>
                                    <a href="#" class="eye-view"><img src="{{asset('admin/assets/images/icons/open-eye-icon.svg')}}" alt=""/></a>
                                    <span class="seperator"></span>
                                    <a href="#" class="action-link">Action</a>
                                </li>
                                <li class="pending">
                                    <span class="title">Driver Training and Onboarding Materials</span>
                                    <a href="#" class="eye-view"><img src="{{asset('admin/assets/images/icons/open-eye-icon.svg')}}" alt=""/></a>
                                    <span class="seperator"></span>
                                    <a href="#" class="action-link">Action</a>
                                </li>
                                <li class="approved">
                                    <span class="title">Driver Agreement and Terms</span>
                                    <a href="#" class="eye-view"><img src="{{asset('admin/assets/images/icons/open-eye-icon.svg')}}" alt=""/></a>
                                    <span class="seperator"></span>
                                    <a href="#" class="action-link">Action</a>
                                </li>
                                <li class="approved">
                                    <span class="title">Vehicle and Driver Photos</span>
                                    <a href="#" class="eye-view"><img src="{{asset('admin/assets/images/icons/open-eye-icon.svg')}}" alt=""/></a>
                                    <span class="seperator"></span>
                                    <a href="#" class="action-link">Action</a>
                                </li>
                                <li class="approved">
                                    <span class="title">Approval Process</span>
                                    <a href="#" class="eye-view"><img src="{{asset('admin/assets/images/icons/open-eye-icon.svg')}}" alt=""/></a>
                                    <span class="seperator"></span>
                                    <a href="#" class="action-link">Action</a>
                                </li>                                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  

@endsection 