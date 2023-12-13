@extends('admin.layouts.app')
@section('content')
<section id="main-content" class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="vacancy-link-group">
                    <a href="#" class="active">Current & Opening</a>
                    <a href="#" class="">Past</a>
                    <a href="#" class="">All</a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="addPromo-wrap d-flex align-items-center justify-content-between">
                    <p class="mb-0">Create a promotion and manage current and upcoming ones</p>
                    <a href="#" class="add-promotion-btn">Add Promotion</a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <form method="post" action="" class="promotion-form d-flex align-items-end">
                    <div class="row w-100">
                        <div class="col">
                            <div class="form-group">
                                <label>Search for promotion</label>
                                <input type="text" class="form-control" placeholder="Enter Promotion Name"/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Date</label>
                                <div class="input-group date" id="datepicker">
                                    <input type="text" class="form-control" id="date"/>
                                    <span class="input-group-append d-flex align-items-center">
                                        <span class="input-group-text d-block border-0">
                                            <img src="{{asset('admin/assets/images/icons/calendar-icon.svg')}}" alt="" class="date-icon"/>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>User</label>
                                <select class="form-select">
                                    <option>Driver</option>
                                    <option>Rider</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="ms-3">
                        <button type="button" class="btn btn-search-promo"><img src="{{asset('admin/assets/images/icons/search-icon.svg')}}" alt="" class=""/></button>
                    </div>
                </form>
            </div>
            
        </div>
        <div class="row mt-4">
            <div class="col-12 promotion">
                <div class="card position-relative promotion-list">
                    <div class="card-wrap">
                        <p class="no-of-promotions">Displaying 20 Promotions</p>
                        <div class="table-responsive tbr">
                            <table class="w-100 table table-borderless mb-0">
                                <thead>
                                    <tr>
                                        <td>Start Date</td>
                                        <td>End Date</td>
                                        <td>Name</td>
                                        <td>Available On</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>19/10/2023 10:10AM</td>
                                        <td>19/10/2023 10:10AM</td>
                                        <td>Festival Coupon</td>
                                        <td>User</td>
                                        <td><a href="#"><img src="{{asset('admin/assets/images/icons/pen-edit-icon.svg')}}" alt="" /></a></td>
                                    </tr>
                                    <tr>
                                        <td>19/10/2023 10:10AM</td>
                                        <td>19/10/2023 10:10AM</td>
                                        <td>Festival Coupon</td>
                                        <td>User</td>
                                        <td><a href="#"><img src="{{asset('admin/assets/images/icons/pen-edit-icon.svg')}}" alt="" /></a></td>
                                    </tr>
                                    <tr>
                                        <td>19/10/2023 10:10AM</td>
                                        <td>19/10/2023 10:10AM</td>
                                        <td>Festival Coupon</td>
                                        <td>User</td>
                                        <td><a href="#"><img src="{{asset('admin/assets/images/icons/pen-edit-icon.svg')}}" alt="" /></a></td>
                                    </tr>
                                    <tr>
                                        <td>19/10/2023 10:10AM</td>
                                        <td>19/10/2023 10:10AM</td>
                                        <td>Festival Coupon</td>
                                        <td>User</td>
                                        <td><a href="#"><img src="{{asset('admin/assets/images/icons/pen-edit-icon.svg')}}" alt="" /></a></td>
                                    </tr>
                                    <tr>
                                        <td>19/10/2023 10:10AM</td>
                                        <td>19/10/2023 10:10AM</td>
                                        <td>Festival Coupon</td>
                                        <td>User</td>
                                        <td><a href="#"><img src="{{asset('admin/assets/images/icons/pen-edit-icon.svg')}}" alt="" /></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<script>
    $(function(){
        $('#datepicker').datepicker();
    });
</script> 
@endsection 