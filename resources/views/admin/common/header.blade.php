<?php
	$page_url = ($_SERVER['REQUEST_URI']);
    $header_value = 'Dashboard';
    if(str_contains($page_url,'dashboard')){
        $header_value = 'Dashboard';
    }elseif(str_contains($page_url,'user-management')){
        $header_value = 'User Management';
    }elseif(str_contains($page_url,'driver-management')){
        $header_value = 'Drivers';
    }elseif(str_contains($page_url,'trip-management')){
        $header_value = 'Trip Management';
    }elseif(str_contains($page_url,'owner-management')){
        $header_value = 'Owner Management';
    }elseif(str_contains($page_url,'support-management')){
        $header_value = 'Support Management';
    }elseif(str_contains($page_url,'insight-management')){
        $header_value = 'Insight';
    }elseif(str_contains($page_url,'payment-management')){
        $header_value = 'Payment Method';
    }elseif(str_contains($page_url,'report-management')){
        $header_value = 'Reporting';
    }elseif(str_contains($page_url,'promotion-management')){
        $header_value = 'Promotions';
    }elseif(str_contains($page_url,'email-setting-management')){
        $header_value = 'Email Settings';
    }elseif(str_contains($page_url,'send-email-management')){
        $header_value = 'SMS';
    }else{
        $header_value = 'Dashboard';
    }
?>
<section class="titlebar mb-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="headerWrap d-flex align-items-center justify-content-between">
                    <h1>{{$header_value}}</h1>
                    <div class="profile-area">
                        <ul class="list-unstyled m-0 p-0 d-flex align-items-center">
                            <li class="messages">
                                <a href="#"><img src="{{asset('admin/assets/images/chat-icon.svg')}}" alt="" class="card-icon"/></a>
                            </li>
                            <li class="notification">
                                <a href="#" class="position-relative"><img src="{{asset('admin/assets/images/notification-icon.svg')}}" alt="" class="card-icon"/></a>
                            </li>
                            <li class="profile-box">
                                <div class="imgBox online">
                                    <img src="{{asset('admin/assets/images/profile-pic.png')}}" alt="" class="img-fluid"/>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>