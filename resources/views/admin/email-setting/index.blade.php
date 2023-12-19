@extends('admin.layouts.app')
@section('content')
<section id="main-content" class="main-content">
    <div class="container-fluid">                   
        <form method="post" action="" class="float-label mt-5">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="form-group mb-5">
                        <label class="form-label">Host Name</label>
                        <input type="text" class="form-control"/>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group mb-5">
                        <label class="form-label">Port</label>
                        <input type="text" class="form-control"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="form-group mb-5">
                        <label class="form-label">Sender Email</label>
                        <input type="text" class="form-control"/>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group mb-5">
                        <label class="form-label">Sender Display Mail</label>
                        <input type="text" class="form-control"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="form-group mb-5">
                        <label class="form-label">Connection Security</label>
                        <select class="form-select form-control">
                            <option>Select</option>
                            <option>Select1</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <p class="f-20 ">Authentication Required</p>
                    <div class="form-group1 d-flex align-items-center ">
                        <div class="radio-group">
                            <input type="radio" class="form-check-input" name="auth" id="auth-yes" value="Yes">
                            <label for="auth-yes">Yes</label>
                        </div>
                        <div class="radio-group ms-4">
                            <input type="radio" class="form-check-input" id="auth-no" name="auth" value="No">
                            <label for="auth-no">No</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="form-group mb-5">
                        <label class="form-label">Authentication Email</label>
                        <input type="text" class="form-control"/>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group mb-5">
                        <label class="form-label">Authentication Password</label>
                        <input type="text" class="form-control"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 my-4 text-center">
                    <button type="button" class="btn btn-validate">Vaildate Email</button>
                </div>
            </div>
        </form>                   
    </div>
</section>  
@endsection