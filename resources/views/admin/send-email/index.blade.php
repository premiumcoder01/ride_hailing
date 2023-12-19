@extends('admin.layouts.app')
@section('content')
<section id="main-content" class="main-content">
                <div class="container-fluid">                   
                    <form method="post" action="" class="float-label mt-5">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">From (SMTP)</label>
                                    <input type="text" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">To</label>
                                    <input type="text" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Rider/Driver List</label>
                                    <select class="form-select form-control">
                                        <option>Select</option>
                                        <option>Select1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-12">
                                <div class="form-group1 d-flex align-items-center ">
                                    <div class="radio-group">
                                        <input type="radio" class="form-check-input" name="mail" id="individual-mail" value="">
                                        <label for="individual-mail">Send each recipient an individual mail</label>
                                    </div>
                                    <div class="radio-group ms-4">
                                        <input type="radio" class="form-check-input" id="group-mail" name="mail" value="">
                                        <label for="group-mail">Send a group email to all recipients</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-5">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Textarea</label>
                                    <textarea id="editor1" rows="10"  class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-2">
                                    <div class="choose-file">
                                        <input class="form-control" type="file" id="attachment">
                                        <label for="attachment">Add Attachment</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-4 text-end">
                                <button type="button" class="btn btn-validate">Send</button>
                            </div>
                        </div>
                    </form>                   
                </div>
            </section>  

@endsection