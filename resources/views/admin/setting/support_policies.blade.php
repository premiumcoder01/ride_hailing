@extends('admin.layouts.app')
@section('content')
            <section id="main-content" class="main-content">
                <div class="container-fluid">       
                    <div class="card card-block position-relative mt-5 p-3">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea id="editor1" rows="12" class="form-control border-0" placeholder="Type content..."></textarea>                                    
                                    </div>
                                </div>
                            </div>                       
                            <!-- <div class="row">
                                <div class="col-12 mb-4 text-center">
                                    <button type="button" class="btn btn-validate"><img src="assets/images/icons/white-plus-icon.svg" alt="" class="me-2"/>Submit</button>
                                </div>
                            </div> -->
                        </form>   
                    </div>                       
                </div>
            </section>    
@endsection  