@extends('admin.layouts.app')
@section('content')

<section id="main-content" class="main-content">
                <div class="container-fluid">                   
                    <form method="post" action="" class="float-label mt-5">
                        <div class="col-12 d-flex justify-content-between mb-3">
                            <div class="form-group1 d-flex align-items-center mb-0">
                                <div class="radio-group me-4">
                                    <input type="radio" class="form-check-input" name="drivers" id="riders" value="">
                                    <label for="riders">Riders</label>
                                </div>
                                <div class="radio-group me-4">
                                    <input type="radio" class="form-check-input" name="drivers" id="drivers" value="">
                                    <label for="drivers">Drivers</label>
                                </div>
                                <div class="radio-group me-4">
                                    <input type="radio" class="form-check-input" name="drivers" id="v-owners" value="">
                                    <label for="v-owners">V-Owners</label>
                                </div>
                            </div>
                            <a href="javascript:void()" class="add-link-text d-flex align-items-center"><img src="{{asset('admin/assets/images/icons/plus-icon.svg')}}" alt="" class="me-2"/> Add New</a>
                        </div> 
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-unstyled m-0 p-0 article-list">
                                    <li class="d-flex align-items-center">
                                        <div class="title">
                                            <strong>Title:</strong>
                                            Lorem Ipsum is simply dummy
                                        </div>
                                        <div class="publistDate">
                                            <span>Publish Date:</span>
                                            28 Nov
                                        </div>
                                        <div class="action ms-auto">
                                            <a href="#" class="me-4 edit"><img src="{{asset('admin/assets/images/icons/edit-icon.svg')}}" alt="" class="me-2"/>Edit</a>
                                            <a href="#" class="me-0 delete"><img src="{{asset('admin/assets/images/icons/del-icon-red.svg')}}" alt="" class="me-2"/>Delete</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="title">
                                            <strong>Title:</strong>
                                            Lorem Ipsum is simply dummy
                                        </div>
                                        <div class="publistDate">
                                            <span>Publish Date:</span>
                                            28 Nov
                                        </div>
                                        <div class="action ms-auto d-flex align-items-center">
                                            <a href="#" class="me-4 edit d-flex align-items-center"><img src="{{asset('admin/assets/images/icons/edit-icon.svg')}}" alt="" class="me-2"/>Edit</a>
                                            <a href="#" class="me-0 delete d-flex align-items-center"><img src="{{asset('admin/assets/images/icons/del-icon-red.svg')}}" alt="" class="me-2"/>Delete</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>                   
                </div>
            </section>   

@endsection  