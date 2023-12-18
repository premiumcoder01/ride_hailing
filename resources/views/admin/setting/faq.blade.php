@extends('admin.layouts.app')
@section('content')
<section id="main-content" class="main-content">
                <div class="container-fluid">                   
                    <form method="post" action="" class="float-label mt-5">
                        <div class="col-12">
                            <div class="form-group1 d-flex align-items-center mb-5">
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
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Type Question</label>
                                    <input type="text" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="form-label">Type Answer</label>
                                    <textarea id="editor1" rows="6" class="form-control"></textarea>                                    
                                </div>
                            </div>
                        </div>                       
                        <div class="row">
                            <div class="col-12 mb-4 text-center">
                                <button type="button" class="btn btn-validate">Submit</button>
                            </div>
                        </div>
                    </form>                   
                </div>
            </section>    
@endsection  