@extends('admin.layouts.app')
@section('content')
<section id="main-content" class="main-content">
    <div class="container-fluid">
        
        <div class="row mt-0 gy-4">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive management-profiles-det">
                        <table class="table table-borderless w-100 " cellspacing="10">
                            <tr class="titles">
                                <td>#237258</td>
                                <td>Username</td>
                                <td>Phone</td>
                                <td>Email</td>
                                <td>Rides</td>
                                <td>Rating</td>
                                <td>Status</td>
                            </tr>
                            <tr>
                                <td>
                                    <figure class="mb-0">
                                        <img src="{{asset('admin/assets/images/profile-pic.png')}}" alt="" class="img-fluid"/>
                                    </figure>
                                </td>
                                <td class="name">Username</td>
                                <td class="text-nowrap">
                                    <a href="tel:9397594609"><span class="phone"><img src="{{asset('admin/assets/images/icons/phone-icon.svg')}}" alt="" class="img-fluid me-1"/> 9397594609</span></a>
                                </td>
                                <td class="text-nowrap">
                                    <a href="mailto:rider@gmail.com" target="_blank"><span class="email"><img src="{{asset('admin/assets/images/icons/envelope-icon.svg')}}" alt="" class="img-fluid me-1"/> rider@gmail.com</span></a>
                                </td>
                                <td>100</td>
                                <td>5.0</td>
                                <td class="text-green"><a href="">Active</a></td>
                            </tr>
                        </table>
                    </div>

                    <div class="management-detail-box">
                        <div class="ProductNav_Wrapper">	
                            <nav id="ProductNav2" class="ProductNav dragscroll mouse-scroll" role="tablist">
                                <div id="ProductNavContents2" class="nav ProductNav_Contents">
                                    <a class="ProductNav_Link active" id="ride-history-tab2" data-bs-toggle="tab" data-bs-target="#ride-history" role="tab" aria-controls="ride-history" aria-selected="true">Ride History</a>

                                    <a class="ProductNav_Link" id="payment-information-tab2" data-bs-toggle="tab" data-bs-target="#payment-information" role="tab" aria-controls="payment-information" aria-selected="false">Payment Information</a>

                                    <a class="ProductNav_Link" id="notification-tab2" data-bs-toggle="tab" data-bs-target="#notification" role="tab" aria-controls="notification" aria-selected="false">Notifications</a>

                                    <a class="ProductNav_Link" id="preferences-tab2" data-bs-toggle="tab" data-bs-target="#preferences" role="tab" aria-controls="preferences" aria-selected="false">Preferences</a>

                                    <a class="ProductNav_Link" id="support-histroy-tab2" data-bs-toggle="tab" data-bs-target="#support-histroy" role="tab" aria-controls="support-histroy" aria-selected="false">Support Histroy</a>

                                    <span id="Indicator2" class="ProductNav_Indicator"></span>
                            </div>
                        </nav>
                            
                            <button id="AdvancerLeft2" class="Advancer Advancer_Left" type="button">
                                <img src="{{asset('admin/assets/images/icons/left-arrow.svg')}}" alt="">
                            </button>
                            <button id="AdvancerRight2" class="Advancer Advancer_Right" type="button">
                                <img src="{{asset('admin/assets/images/icons/right-arrow.svg')}}" alt="">
                            </button>
                        
                        </div>
                            <div class="card1">
                                <div class="card-body">
                                    <div class="tab-content management-comtent-tab" id="myTabContent2">
                                        <div class="tab-pane fade show active" id="ride-history" role="tabpanel" aria-labelledby="ride-history-tab2">
                                            <div class="table-responsive">
                                                <table class="table table-borderless w-100">
                                                    <tr>
                                                        <td>12/10/2023 - 10:30AM</td>
                                                        <td><strong>Location A</strong> to <strong>Location  B</strong></td>
                                                        <td>30min</td>
                                                        <td><strong>$50</strong></td>
                                                        <td class="text-end">5.0 <img src="{{asset('admin/assets/images/icons/star.svg')}}" alt="" class="img-fluid ms-1"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>12/10/2023 - 10:30AM</td>
                                                        <td><strong>Location A</strong> to <strong>Location  B</strong></td>
                                                        <td>30min</td>
                                                        <td><strong>$50</strong></td>
                                                        <td class="text-end">5.0 <img src="{{asset('admin/assets/images/icons/star.svg')}}" alt="" class="img-fluid ms-1"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>12/10/2023 - 10:30AM</td>
                                                        <td><strong>Location A</strong> to <strong>Location  B</strong></td>
                                                        <td>30min</td>
                                                        <td><strong>$50</strong></td>
                                                        <td class="text-end">5.0 <img src="{{asset('admin/assets/images/icons/star.svg')}}" alt="" class="img-fluid ms-1"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>12/10/2023 - 10:30AM</td>
                                                        <td><strong>Location A</strong> to <strong>Location  B</strong></td>
                                                        <td>30min</td>
                                                        <td><strong>$50</strong></td>
                                                        <td class="text-end">5.0 <img src="{{asset('admin/assets/images/icons/star.svg')}}" alt="" class="img-fluid ms-1"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>12/10/2023 - 10:30AM</td>
                                                        <td><strong>Location A</strong> to <strong>Location  B</strong></td>
                                                        <td>30min</td>
                                                        <td><strong>$50</strong></td>
                                                        <td class="text-end">5.0 <img src="{{asset('admin/assets/images/icons/star.svg')}}" alt="" class="img-fluid ms-1"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>12/10/2023 - 10:30AM</td>
                                                        <td><strong>Location A</strong> to <strong>Location  B</strong></td>
                                                        <td>30min</td>
                                                        <td><strong>$50</strong></td>
                                                        <td class="text-end">5.0 <img src="{{asset('admin/assets/images/icons/star.svg')}}" alt="" class="img-fluid ms-1"/></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="payment-information" role="tabpanel" aria-labelledby="payment-information-tab-2">
                                        
                                        </div>
                                        <div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab2">
                                        
                                        </div>
                                        <div class="tab-pane fade" id="preferences" role="tabpanel" aria-labelledby="preferences-tab2">
                                        
                                        </div>
                                        <div class="tab-pane fade" id="support-histroy" role="tabpanel" aria-labelledby="support-histroy-tab2">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
    </div>
    
</section> 

@endsection 