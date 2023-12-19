@extends('admin.layouts.app')
@section('content')
<section id="main-content" class="main-content">
                <div class="container-fluid">
                    <div class="row mt-0 gy-4">
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
                        
                    </div>
                </div>
            </section>     
@endsection 