@extends('admin.layouts.app')
@section('content')
<section id="main-content" class="main-content">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-between">
                <div class="button-group btn-management">
                    <button type="button" class="btn btn-secondary active">Rider</button>
                    <button type="button" class="btn btn-secondary">Driver</button>
                    <button type="button" class="btn btn-secondary">V-Owner</button>
                </div>
                <div class="ml-auto d-flex">
                    <div class="search-box">
                        <input type="text" placeholder="Search here..."/>
                        <button type="button" class="search-btn"><img src="{{asset('admin/assets/images/icons/search-icon.svg')}}" alt="" class="img-fluid"/></button>
                    </div>
                    <button type="button" class="btn btn-secondary filter-btn text-nowrap d-flex align-items-center"><img src="{{asset('admin/assets/images/icons/filter-icon.svg')}}" alt="" class="img fluid me-2"/> Filter</button>
                </div>   
            </div>
        </div>
        <div class="row mt-0 gy-4">
            <div class="col-12 support-list-data">
                <div class="support-list-wrap" style="overflow-x: auto;">
                    <ul class="headings list-unstyled m-0 p-0 d-flex">
                        <li>Ticket ID</li>
                        <li>Assigned To</li>
                        <li>Subject</li>
                        <li>Type</li>
                        <li>Priority</li>
                        <li>Status</li>
                        <li>Date</li>
                    </ul>
                    @for($i=1;$i<=5;$i++)
                    <div class="card position-relative mb-3">
                        <ul class="list-unstyled mb-0 p-0 d-flex ">
                            <li>#{{$i}}</li>
                            <li>Agent 1</li>
                            <li>Any Subject</li>
                            <li>Query</li>
                            <li class="text-light-green fw-bold">Low</li>
                            <li class="status completed">Completed</li>
                            <li>28 Nov</li>
                            <li><a href="{{route('admin.support-management.detail')}}" class="view-support"><img src="{{asset('admin/assets/images/icons/yellow-eye.svg')}}" alt="" class="img-fluid"/></a></li>
                        </ul>
                        <a href="#" class="chat"><img src="{{asset('admin/assets/images/icons/chat-icon.svg')}}" class="img-fluid" alt=""/></a>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section> 

@endsection 