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
                
                <div class="search-container">
                    <form action="/search" method="get">
                        <input class="search expandright" id="searchright" type="search" name="" placeholder="Search">
                        <label class="button searchbutton" for="searchright">
                            <span class="mglass">
                                <img src="{{asset('admin/assets/images/icons/search-icon.svg')}}" alt=""/>
                            </span>
                        </label>
                    </form>
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
                                <th>Name</th>
                                <th>ID</th>
                                <th>Vehicle ID</th>
                                <th>Phone</th>
                                <th>Rides</th>
                                <th>Earned</th>
                                <th>Rating</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i=1;$i<=10;$i++)
                            <tr>
                                <td>{{$i}}</td>
                                <td>Username</td>
                                <td class="text-primary"><a href="{{route('admin.driver-management.driver.detail')}}">#237258</a></td>
                                <td class="text-primary"><a href="#">#675946</a></td>
                                <td>9397594609</td>
                                <td>100</td>
                                <td>$500</td>
                                <td>5.0</td>
                                @if($i%2 == 0)
                                <td class="text-green"><a href="#">Active</a></td>
                                @else
                                <td class="text-grey"><a href="#">Inactive</a></td>
                                @endif
                            </tr>
                            @endfor                                     
                        </tbody>
                    </table>
                </div>
                <ul class="list-unstyled p-0 pagination mt-4">
                    <li><a href="#" class="prev-link">Prev</a></li>
                    <li><a href="#" class="next-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</section> 
@endsection  