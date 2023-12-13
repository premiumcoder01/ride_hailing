<?php
	$page_url = ($_SERVER['REQUEST_URI']);
?>
<div class="sidenav text-center">
    <div class="logo">
        <a href="#"><img src="{{asset('admin/assets/images/login-logo.png')}}" alt="" class="img-fluid"/></a>
    </div>
    <nav>
        <ul class="list-unstyled m-0 p-0">
            <li class="{{str_contains($page_url,'dashboard') ? 'active' : ''}}">
                <a href="{{route('admin.dashboard')}}">
                    <img src="{{asset('admin/assets/images/icons/home-icon.svg')}}"/> Dashboard
                </a>
            </li>
            <li class="{{str_contains($page_url,'user-management') ? 'active' : ''}}">
                <a href="#">
                    <img src="{{asset('admin/assets/images/icons/user-icon.svg')}}"/> User Management
                </a>
                <ul class="submenu" style="{{str_contains($page_url,'user-management') ? 'display:block;' : 'display:none'}}">
                    <li class="{{str_contains($page_url,'user-management/user/') ? 'active' : ''}}">
                        <a href="{{route('admin.user-management.user.index')}}">Users</a>
                    </li>
                    <li class="{{str_contains($page_url,'user-management/user-onboarding/') ? 'active' : ''}}">
                        <a href="{{route('admin.user-management.user.indexOnboarding')}}">User Onboarding</a>
                    </li>
                </ul>
            </li>
            <li class="{{str_contains($page_url,'driver-management') ? 'active' : ''}}">
                <a href="#">
                    <img src="{{asset('admin/assets/images/icons/postal-address-icon.svg')}}"/> Driver Management
                </a>
                <ul class="submenu" style="{{str_contains($page_url,'driver-management') ? 'display:block;' : 'display:none'}}">
                    <li class="{{str_contains($page_url,'driver-management/driver/') ? 'active' : ''}}">
                        <a href="{{route('admin.driver-management.driver.index')}}">Drivers</a>
                    </li>
                    <li class="{{str_contains($page_url,'driver-management/driver-onboarding/') ? 'active' : ''}}">
                        <a href="{{route('admin.driver-management.driver.indexOnboarding')}}">Driver Onboarding</a>
                    </li>
                </ul>
            </li>
            
            <li class="{{str_contains($page_url,'trip-management') ? 'active' : ''}}">
                <a href="{{route('admin.trip-management.index')}}">
                    <img src="{{asset('admin/assets/images/icons/trip-management-icon.svg')}}"/> Trip Management
                </a>
            </li>
            <li class="{{str_contains($page_url,'owner-management') ? 'active' : ''}}">
                <a href="{{route('admin.owner-management.index')}}">
                    <img src="{{asset('admin/assets/images/icons/key-icon.svg')}}"/> Owner Management
                </a>
            </li>





            <li class="{{str_contains($page_url,'support-management') ? 'active' : ''}}">
                <a href="{{route('admin.support-management.index')}}">
                    <img src="{{asset('admin/assets/images/icons/support-icon.svg')}}"/> Support Management
                </a>
            </li>
            <li class="{{str_contains($page_url,'report-management') ? 'active' : ''}}">
                <a href="{{route('admin.report-management.index')}}">
                    <img src="{{asset('admin/assets/images/icons/reporting-icon.svg')}}"/> Reporting
                </a>
            </li>
            <li class="{{str_contains($page_url,'insight-management') ? 'active' : ''}}">
                <a href="{{route('admin.insight-management.index')}}">
                    <img src="{{asset('admin/assets/images/icons/insight-icon.svg')}}"/> Insights
                </a>
            </li>
            <li class="{{str_contains($page_url,'payment-management') ? 'active' : ''}}">
                <a href="{{route('admin.payment-management.index')}}">
                    <img src="{{asset('admin/assets/images/icons/payment-commision-icon.svg')}}"/> Payment & Commisions
                </a>
            </li>
            <li class="{{str_contains($page_url,'promotion-management') ? 'active' : ''}}">
                <a href="{{route('admin.promotion-management.index')}}">
                    <img src="{{asset('admin/assets/images/icons/payment-commision-icon.svg')}}"/>Promotions & Marketing 
                </a>
            </li>
            <li class="{{str_contains($page_url,'email-setting-management') ? 'active' : ''}}">
                <a href="{{route('admin.email-setting-management.index')}}">
                    <img src="{{asset('admin/assets/images/icons/email-setting-icon.svg')}}"/> Email Setting
                </a>
            </li>
            <li class="{{str_contains($page_url,'send-email-management') ? 'active' : ''}}">
                <a href="{{route('admin.send-email-management.index')}}">
                    <img src="{{asset('admin/assets/images/icons/send-email-icon.svg')}}"/> Send Email
                </a>
            </li>
            <li class="{{str_contains($page_url,'setting') ? 'active' : ''}}">
                <a href="#">
                    <img src="{{asset('admin/assets/images/icons/setting-icon.svg')}}"/> Setting
                </a>
                <ul class="submenu" style="{{str_contains($page_url,'setting') ? 'display:block;' : 'display:none'}}">
                    <li class="{{str_contains($page_url,'setting/support-policies/') ? 'active' : ''}}">
                        <a href="{{route('admin.setting-management.supportPolicies')}}">Support Policies</a>
                    </li>
                    <li class="{{str_contains($page_url,'setting/reporting-and-analytics/') ? 'active' : ''}}">
                        <a href="{{route('admin.setting-management.reportingAndAnalytics')}}">Reporting And Analytics</a>
                    </li>
                    <li class="{{str_contains($page_url,'setting/push-notification/') ? 'active' : ''}}">
                        <a href="{{route('admin.setting-management.pushNotification')}}">Push Notification</a>
                    </li>
                    <li class="{{str_contains($page_url,'setting/ticket-report/') ? 'active' : ''}}">
                        <a href="{{route('admin.setting-management.ticketReport')}}">Ticket Reports</a>
                    </li>
                    <li class="{{str_contains($page_url,'setting/manage-article/') ? 'active' : ''}}">
                        <a href="{{route('admin.setting-management.manageArticle')}}">Manage Article</a>
                    </li>
                    <li class="{{str_contains($page_url,'setting/feedback-surveys/') ? 'active' : ''}}">
                        <a href="{{route('admin.setting-management.feedbackSurveys')}}">Feedback Surveys</a>
                    </li>
                    <li class="{{str_contains($page_url,'setting/faq/') ? 'active' : ''}}">
                        <a href="{{route('admin.setting-management.faq')}}">Faq</a>
                    </li>
                    <li class="{{str_contains($page_url,'setting/faq-list/') ? 'active' : ''}}">
                        <a href="{{route('admin.setting-management.faqList')}}">Faq List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('admin.logout')}}">
                    <img src="{{asset('admin/assets/images/icons/logout-icon.svg')}}"/> Logout
                </a>
            </li>
        </ul>
    </nav>
</div>