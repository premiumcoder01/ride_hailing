@extends('admin.layouts.app')
@section('content')


<section id="main-content" class="main-content">
                <div class="container-fluid">                   
                    <form method="post" action="" class="float-label mt-5 ticket-form">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Period From</label>
                                    <div class="input-group date datepicker" id="datepicker">
                                        <input type="text" class="form-control" id="date"/>
                                        <span class="input-group-append d-flex align-items-center">
                                            <span class="input-group-text d-block border-0">
                                                <img src="assets/images/icons/calendar-icon.svg" alt="" class="date-icon"/>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">To</label>
                                    <div class="input-group date datepicker" id="datepicker">
                                        <input type="text" class="form-control" id="date"/>
                                        <span class="input-group-append d-flex align-items-center">
                                            <span class="input-group-text d-block border-0">
                                                <img src="assets/images/icons/calendar-icon.svg" alt="" class="date-icon"/>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">User Email</label>
                                    <input type="text" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Source</label>
                                    <select class="form-control form-select ">
                                        <option>Select</option>
                                        <option>Select</option>
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Status</label>
                                    <select class="form-control form-select ">
                                        <option>Select Status</option>
                                        <option>Select</option>
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Assets</label>
                                    <select class="form-control form-select ">
                                        <option>Select Assets</option>
                                        <option>Select</option>
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Agent</label>
                                    <select class="form-control form-select ">
                                        <option>Select</option>
                                        <option>Select</option>
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Priority</label>
                                    <select class="form-control form-select ">
                                        <option>Select</option>
                                        <option>Select</option>
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Overdue</label>
                                    <select class="form-control form-select ">
                                        <option>Select</option>
                                        <option>Select</option>
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Department</label>
                                    <select class="form-control form-select ">
                                        <option>Select</option>
                                        <option>Select</option>
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="f-20 ">Download as</p>
                                <div class="form-group1 d-flex align-items-center ">
                                    <div class="radio-group">
                                        <input type="radio" class="form-check-input" name="download" id="excel" value="Excel">
                                        <label for="excel">Excel</label>
                                    </div>
                                    <div class="radio-group ms-4">
                                        <input type="radio" class="form-check-input" id="pdf" name="download" value="PDF">
                                        <label for="pdf">PDF</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-4 text-center">
                                <button type="button" class="btn btn-validate">Go</button>
                            </div>
                        </div>
                    </form>                   
                </div>
            </section> 
@endsection  
