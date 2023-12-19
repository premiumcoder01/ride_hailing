@extends('admin.layouts.app')
@section('content')

<section id="main-content" class="main-content">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-between">
                <div class="button-group btn-management">
                    <button type="button" class="btn btn-secondary active">All Time</button>
                    <button type="button" class="btn btn-secondary">Weekly</button>
                    <button type="button" class="btn btn-secondary">Monthly</button>
                    <button type="button" class="btn btn-secondary">Yearly</button>
                </div>
            </div>
        </div>
        <div class="row mt-0 gy-4">
            <div class="col-12 user-list-data">
                <div class="table-responsive box-shadow radius-10">
                    <table  class="w-100  table table-border-last-none table-custom text-center m-0">
                        <thead>
                            <tr>
                                <th style="width: 88px;">S.No</th>                                            
                                <th>Trip ID</th>
                                <th>Vehicle ID</th>
                                <th>Driver</th>
                                <th>Rider</th>
                                <th>Fare</th>
                                <th>Duration</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i=1;$i<=10;$i++)
                            <tr>
                                <td>{{$i}}</td>
                                <td class="text-primary"><a href="{{route('admin.trip-management.tripDetail')}}">#{{$i}}</a></td>
                                <td class="text-primary"><a href="{{route('admin.user-management.user.indexOnboarding')}}">#675946</a></td>
                                <td>Driver Name</td>
                                <td>Rider Name</td>
                                <td>$500</td>
                                <td>30min</td>
                                @if($i%2 == 0)
                                <td class="text-green"><a href="#">Completed</a></td>
                                @else
                                <td class="text-grey"><a href="#">Incompleted</a></td>
                                @endif
                            </tr>
                            @endfor                                                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>  
@endsection 