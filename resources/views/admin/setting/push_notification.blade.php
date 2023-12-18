@extends('admin.layouts.app')
@section('content')

<section id="main-content" class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card push-notification my-5">
                                <form class="method" action="">
                                    <div class="form-group mb-3">
                                        <select class="form-select form-control">
                                            <option>All drivers</option>
                                            <option>All drivers</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Title" class="form-control"/>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Message" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <textarea class="form-control" placeholder="Article" rows="8"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn send-notification w-100">Send Notification</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
@endsection  
