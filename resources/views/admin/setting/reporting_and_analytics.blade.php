@extends('admin.layouts.app')
@section('content')

<section id="main-content" class="main-content">
                <div class="container-fluid">
                    <div class="row mt-5">
                        <div class="col-12">
                            <form method="post" action="" class="promotion-form reporting-analytics d-flex align-items-end">
                                <div class="row w-100">
                                    <div class="col">
                                        <div class="form-group">
                                            <select class="form-select">
                                                <option>Select</option>
                                                <option>Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <select class="form-select">
                                                <option>Driver</option>
                                                <option>Rider</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <button type="button" class="btn btn-black btn-filter">Filter</button>
                                </div>
                            </form>
                        </div>                        
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6 col-12 mb-4">
                            <div class="card card-block2 earnings revenue position-relative">
                                <div class="title d-flex align-items-center justify-content-start mb-4">
                                    <label class="me-2">Track ticket volumes:</label>
                                    <select class="rounded-select">
                                        <option>This Month</option>
                                        <option>Next Month</option>
                                    </select>
                                </div>
                                <div class="chart-value">
                                    <img src="{{asset('admin/assets/images/graph6.jpg')}}" alt="" class="img-fluid"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-4">
                            <div class="card card-block2 earnings revenue position-relative">
                                <div class="title d-flex align-items-center justify-content-start mb-4">
                                    <label class="me-2">Response times:</label>
                                    <select class="rounded-select">
                                        <option>This Month</option>
                                        <option>Next Month</option>
                                    </select>
                                </div>
                                <div class="chart-value">
                                    <img src="{{asset('admin/assets/images/graph6.jpg')}}" alt="" class="img-fluid"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-4">
                            <div class="card card-block2 earnings revenue position-relative">
                                <div class="title d-flex align-items-center justify-content-start mb-4">
                                    <label class="me-2">Agent performance:</label>
                                    <select class="rounded-select">
                                        <option>This Month</option>
                                        <option>Next Month</option>
                                    </select>
                                </div>
                                <div class="chart-value">
                                    <img src="{{asset('admin/assets/images/graph6.jpg')}}" alt="" class="img-fluid"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-4">
                            <div class="card card-block2 earnings revenue position-relative">
                                <div class="title d-flex align-items-center justify-content-start mb-4">
                                    <label class="me-2">Customer satisfaction:</label>
                                    <select class="rounded-select">
                                        <option>This Month</option>
                                        <option>Next Month</option>
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
@endsection  
