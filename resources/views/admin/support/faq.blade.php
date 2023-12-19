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
                        <div class="row">{{asset('admin/assets/images/icons/del-icon-red.svg')}}
                            <div class="col-12">
                                <ul class="list-unstyled m-0 p-0 article-list faq-list">
                                    <li class="d-flex flex-column">
                                        <div class="upper d-flex flex-wrap align-items-start">
                                            <div class="qusetion">
                                                <strong>1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</strong>
                                            </div>
                                            <div class="action ms-auto d-flex align-items-center">
                                                <a href="#" class="me-4 edit d-flex align-items-center"><img src="{{asset('admin/assets/images/icons/edit-icon.svg')}}" alt="" class="me-2"/>Edit</a>
                                                <a href="#" class="me-0 delete d-flex align-items-center"><img src="{{asset('admin/assets/images/icons/del-icon-red.svg')}}" alt="" class="me-2"/>Delete</a>
                                            </div>
                                        </div>
                                        <div class="answer d-flex align-items-start">
                                            <strong>Answer:</strong>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        </div>
                                    </li>
                                    <li class="d-flex  flex-column">
                                        <div class="upper d-flex flex-wrap align-items-start">
                                            <div class="qusetion">
                                                <strong>2. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</strong>
                                            </div>
                                            <div class="action ms-auto d-flex align-items-center">
                                                <a href="#" class="me-4 edit d-flex align-items-center"><img src="{{asset('admin/assets/images/icons/edit-icon.svg')}}" alt="" class="me-2"/>Edit</a>
                                                <a href="#" class="me-0 delete d-flex align-items-center"><img src="{{asset('admin/assets/images/icons/del-icon-red.svg')}}" alt="" class="me-2"/>Delete</a>
                                            </div>
                                        </div>
                                        <div class="answer d-flex align-items-start">
                                            <strong>Answer:</strong>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        </div>
                                    </li>

                                    
                                </ul>
                            </div>
                        </div>
                    </form>                   
                </div>
            </section>   
@endsection  