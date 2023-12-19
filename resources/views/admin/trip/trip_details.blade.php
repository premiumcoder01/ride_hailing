@extends('admin.layouts.app')
@section('content')


<section id="main-content" class="main-content">
                <div class="container-fluid">                    
                    <div class="row mt-0 gy-4">
                       <div class="col-12">
                            <div class="card trip-mgm-detail">
                              <div class="trip-det mb-4">
                                <h3>Trip ID : #6257296</h3>
                                <p class="mb-0">Vehicle ID :  #8436739</p>
                              </div>
                                <div class="trip-details">
                                    <div class="upper-area  d-flex justify-content-between">
                                        <div class="trip-locations">
                                            <ul class="list-unstyled m-0 p-0">
                                                <li><strong>Pickup Location:</strong> Main Peninsular Rd </li>
                                                <li><strong>Destination:</strong> Hamilton Freetown. Sierra Leone.</li>
                                            </ul>
                                        </div>
                                        <div class="trip-date">
                                            <strong>Date:</strong> 05/10/2023
                                        </div>
                                    </div>
                                    <div class="driver-details">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <p><strong>Driver Id:</strong> #675946</p>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <p><strong>Name:</strong> Driver Name</p>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <p><strong>Phone:</strong> +1234-123-123</p>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <p>
                                                    <strong>Rating:</strong>
                                                    <span class="rating-icons rating-5"></span>
                                                </p>
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <p><strong>User Id:</strong> #675946</p>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <p><strong>Name:</strong> User Name</p>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <p><strong>Phone:</strong> +1234-123-123</p>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <p>
                                                    <strong>Rating:</strong>
                                                    <span class="rating-icons rating-4"></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="fare-details">
                                                    <ul class="list-unstyled m-0 p-0">
                                                        <li class="heading"><strong>Base Fare</strong></li>
                                                        <li class="seperator">-</li>
                                                        <li class="price">$50</li>
                                                    </ul>
                                                    <ul class="list-unstyled m-0 p-0">
                                                        <li class="heading"><strong>Distance</strong></li>
                                                        <li class="seperator">-</li>
                                                        <li class="price">17km</li>
                                                    </ul>
                                                    <ul class="list-unstyled m-0 p-0">
                                                        <li class="heading"><strong>Trip time</strong></li>
                                                        <li class="seperator">-</li>
                                                        <li class="price">35min</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 paymentType mt-4 mb-5">
                                                <p class="d-flex align-items-center justify-content-end"><strong class="me-2">Payment Type:</strong> <span class="ptype d-flex align-items-center"><img src="assets/images/icons/cash-icon.svg" alt="" class="img-fluid me-2"> Cash</span></p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="total-fare text-end mb-3">
                                                <p>Total Fare</p>
                                                <h1>$50</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>        
        </section>
@endsection 