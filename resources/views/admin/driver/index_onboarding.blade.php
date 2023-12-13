@extends('admin.layouts.app')
@section('content')
<section id="main-content" class="main-content">
    <div class="container-fluid"> 
        <div class="row mt-4">
            <div class="col-12">
                <h5 class="f-20 fw-bold">Pending Requests : 10</h5>
            </div>
        </div>                   
        <div class="row mt-0 gy-4">
            <div class="col-12">
                <div class="card">                              
                    <div class="table-responsive driver-onboarding">
                        <table class="w-100 table mb-0 table-custom2">
                            <thead>
                                <tr>
                                    <th>Driver ID:</th>
                                    <th>Username:</th>
                                    <th>Phone:</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=1;$i<=10;$i++)
                                <tr>
                                    <td>#23725{{$i}}</td>
                                    <td>Driver Name</td>
                                    <td>+123-123-1234</td>
                                    <td>driver@gmail.com</td>
                                    <td class="text-end view-link"><a href="{{route('admin.driver-management.driver.detailOnboarding')}}">View</a></td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
@endsection  