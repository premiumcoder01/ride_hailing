@extends('admin.layouts.app')
@section('content')
<section id="main-content" class="main-content">
    <div class="container-fluid">
        <div class="row gy-3 mt-3">
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="card card-block position-relative">
                    <h3 class="fw-bold">250</h3>
                    <p class="fw-normal m-0 text-truncate">Total User</p>
                    <img src="{{asset('admin/assets/images/postal-address-icon.svg')}}" alt="" class="card-icon"/>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="card card-block position-relative">
                    <h3 class="fw-bold">200</h3>
                    <p class="fw-normal m-0 text-truncate">Total Drivers</p>
                    <img src="{{asset('admin/assets/images/postal-address-icon.svg')}}" alt="" class="card-icon"/>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="card card-block position-relative">
                    <h3 class="fw-bold">110</h3>
                    <p class="fw-normal m-0 text-truncate">Approved drivers</p>
                    <img src="{{asset('admin/assets/images/postal-address-icon.svg')}}" alt="" class="card-icon"/>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="card card-block position-relative">
                    <h3 class="fw-bold">90</h3>
                    <p class="fw-normal m-0 text-truncate">Pending Driver/Vehicle Verified</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="card card-block position-relative">
                    <h3 class="fw-bold">6k</h3>
                    <p class="fw-normal m-0 text-truncate">Total Trips</p>
                    <img src="{{asset('admin/assets/images/car.svg')}}" alt="" class="card-icon"/>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="card card-block position-relative">
                    <h3 class="fw-bold">400</h3>
                    <p class="fw-normal m-0 text-truncate">Active Trips</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="card card-block position-relative">
                    <h3 class="fw-bold">$700</h3>
                    <p class="fw-normal m-0 text-truncate">Revenue Today</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="card card-block position-relative">
                    <h3 class="fw-bold">15</h3>
                    <p class="fw-normal m-0 text-truncate">Feedback and Support Tickets</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="card card-block position-relative">
                    <h3 class="fw-bold">$55k</h3>
                    <p class="fw-normal m-0 text-truncate">Earnings This Month</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="card card-block position-relative">
                    <h3 class="fw-bold">$4k</h3>
                    <p class="fw-normal m-0 text-truncate">Earnings This Month</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="card card-block position-relative">
                    <h3 class="fw-bold">60</h3>
                    <p class="fw-normal m-0 text-truncate">Active Promotions:</p>
                </div>
            </div>
        </div>

        <div class="row mt-1 gy-4">
            <div class="col-lg-6 col-12">
                <div class="card card-block2 top-performing-drivers position-relative">
                    <div class="title d-flex justify-content-between mb-4">
                        <h4 class="m-0 fe-bold">Top Performing Drivers</h4>
                        <a href="#" class="viewAll-link">View All</a>
                    </div>
                    <div class="chart-value">
                        <div class="table-responsive">
                            <table class="table w-100">
                                <tr>
                                    <td>Drivername</td>
                                    <td>237258</td>
                                    <td class="text-end">9397594609</td>
                                </tr>
                                <tr>
                                    <td>Drivername</td>
                                    <td>237258</td>
                                    <td class="text-end">9397594609</td>
                                </tr>
                                <tr>
                                    <td>Drivername</td>
                                    <td>237258</td>
                                    <td class="text-end">9397594609</td>
                                </tr>
                                <tr>
                                    <td>Drivername</td>
                                    <td>237258</td>
                                    <td class="text-end">9397594609</td>
                                </tr>
                                <tr>
                                    <td>Drivername</td>
                                    <td>237258</td>
                                    <td class="text-end">9397594609</td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="card card-block2 driver-activity position-relative">
                    <div class="title d-flex justify-content-between mb-4">
                        <select class="selectBox">
                            <option>Driver Activity</option>
                            <option>Driver Activity1</option>
                            <option>Driver Activity2</option>
                        </select>
                    </div>
                    <div class="chart-value">
                        <img src="{{asset('admin/assets/images/graph1.jpg')}}" alt="" class="img-fluid"/>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="card card-block2 earnings position-relative">
                    <div class="title d-flex align-items-center justify-content-start mb-4">
                        <label class="me-2">Earnings:</label>
                        <select class="rounded-select">
                            <option>This Month</option>
                            <option>Next Month</option>
                        </select>
                    </div>
                    <div class="chart-value">
                        <img src="{{asset('admin/assets/images/graph2.jpg')}}" alt="" class="img-fluid"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card card-block2 growth position-relative">
                    <div class="title d-flex align-items-center justify-content-start mb-4">
                        <label class="me-2">Growth:</label>
                        <select class="rounded-select">
                            <option>User</option>
                            <option>New Users</option>
                        </select>
                    </div>
                    <div class="chart-value">
                        <img src="{{asset('admin/assets/images/graph3.jpg')}}" alt="" class="img-fluid"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card card-block2 earnings revenue position-relative">
                    <div class="title d-flex align-items-center justify-content-start mb-4">
                        <label class="me-2">Revenue:</label>
                        <select class="rounded-select">
                            <option>This Month</option>
                            <option>Next Month</option>
                        </select>
                    </div>
                    <div class="chart-value">
                        <img src="{{asset('admin/assets/images/graph4.jpg')}}" alt="" class="img-fluid"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card card-block2 driver-feedback position-relative">
                    <div class="title d-flex align-items-center justify-content-start mb-4">
                        <label class="me-2">Driver Feedback:</label>
                        <select class="rounded-select">
                            <option>Comments</option>
                            <option>Feedback</option>
                        </select>
                    </div>
                    <div class="chart-value">
                        <img src="{{asset('admin/assets/images/graph5.jpg')}}" alt="" class="img-fluid"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card card-block2 rider-feedback position-relative">
                    <div class="title d-flex align-items-center justify-content-start mb-4">
                        <label class="me-2">Rider Feedback:</label>
                        <select class="rounded-select">
                            <option>Comments</option>
                            <option>Feedback</option>
                        </select>
                    </div>
                    <div class="chart-value">
                        <img src="{{asset('admin/assets/images/graph6.jpg')}}" alt="" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="news-update" class="news-update pt-5 pb-5">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="title position-relative">News and Updates</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled m-0 p-0 news-list">
                    <li>
                        <figure>
                            <img src="{{asset('admin/assets/images/blog-img1.png')}}" alt="" class="img-fluid"/>
                        </figure>
                        <div class="news-content">
                            <h3>News Title</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the...</p>
                        </div>
                    </li>
                    <li>
                        <figure>
                            <img src="{{asset('admin/assets/images/blog-img2.png')}}" alt="" class="img-fluid"/>
                        </figure>
                        <div class="news-content">
                            <h3>News Title</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the...</p>
                        </div>
                    </li>
                    <li>
                        <figure>
                            <img src="{{asset('admin/assets/images/blog-img1.png')}}" alt="" class="img-fluid"/>
                        </figure>
                        <div class="news-content">
                            <h3>News Title</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the...</p>
                        </div>
                    </li>
                    <li>
                        <figure>
                            <img src="{{asset('admin/assets/images/blog-img2.png')}}" alt=""/>
                        </figure>
                        <div class="news-content">
                            <h3>News Title</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the...</p>
                        </div>
                    </li>
                    <li>
                        <figure>
                            <img src="{{asset('admin/assets/images/blog-img1.png')}}" alt=""/>
                        </figure>
                        <div class="news-content">
                            <h3>News Title</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the...</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="admin-summary" class="admin-summary mt-4 ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-unstyled m-0 p-0">
                    <li class="title-block">
                        <div class="sno" style="background-color: #E9E9E9;">S.NO</div>
                        <div class="d-flex  align-items-center ">
                            <div class="ms-auto title">Admin Summary</div>
                            <a href="#" class="viewAll-link ms-auto">View All</a>
                        </div>
                    </li>
                    <li>
                        <div class="sno">01</div>
                        <div class="content">Admin (ID: #642499) Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                    </li>
                    <li>
                        <div class="sno">02</div>
                        <div class="content">Admin (ID: #642499) Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                    </li>
                    <li>
                        <div class="sno">03</div>
                        <div class="content">Admin (ID: #642499) Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        $('.news-list').slick({
            dots: false,
            arrows: false,
            infinite: true,
            speed: 2000,
            slidesToShow: 3,
            focusOnSelect: true
        });
    
    })
</script>
@endsection  