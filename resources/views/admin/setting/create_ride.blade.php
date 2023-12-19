@extends('admin.layouts.app')
@section('content')
            <section id="main-content" class="main-content">
                <div class="container-fluid">                   
                    <form method="post" action="" class="float-label mt-5">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Enter Full Name</label>
                                    <input type="text" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Enter Mobile No.</label>
                                    <input type="text" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Enter Pickup Location</label>
                                    <input type="text" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Enter Destination</label>
                                    <input type="text" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Select Vehicle</label>
                                    <select class="form-select form-control">
                                        <option>Select</option>
                                        <option>Select1</option>
                                    </select>
                                </div>
                            </div>
                        </div>                       
                        <div class="row">
                            <div class="col-12 mb-4 text-center">
                                <button type="button" class="btn btn-validate">Create Ride</button>
                            </div>
                        </div>
                    </form>                   
                </div>
            </section>        
        </section>
 @endsection  