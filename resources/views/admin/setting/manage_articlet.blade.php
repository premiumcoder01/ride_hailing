@extends('admin.layouts.app')
@section('content')
<section id="main-content" class="main-content">
                <div class="container-fluid edit-role manage-article">
                    <form method="post" action="" class="mt-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="role-wrapper">
                                    <div class="title-wrap d-flex align-items-center justify-content-between">
                                        <h4 class="mb-0">Manage Article</h4>  
                                        <div class="search-box">
                                            <input type="text" placeholder="Search here..."/>
                                            <button type="button" class="search-btn"><img src="assets/images/icons/search-icon.svg" alt="" class="img-fluid"/></button>
                                        </div>
                                    </div>                              
                                    <div class="table-responsive edit-tables ">
                                        <table class="table w-100 checklist-role">
                                            <thead>
                                                <tr>
                                                    <td style="width: 10px;" class="pe-0">&nbsp;</td>
                                                    <td class="text-start ps-3">ID</td>
                                                    <td>Title</td>
                                                    <td>Author ID</td>
                                                    <td>Published At</td>
                                                    <td>Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width: 10px;" class="pe-0">
                                                        <div class="form-check mb-0" style="min-height: auto;">
                                                            <input class="form-check-input" type="checkbox" value="" id="1">
                                                        </div>
                                                    </td>
                                                    <td class="text-start ps-3">1</td>
                                                    <td>Article name</td>
                                                    <td>#675946</td>
                                                    <td>23-11-2023 3:00PM</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="assets/images/icons/edit-icon.svg" alt="" class="mx-2"/></a>
                                                        <a href="javascript:void(0)"><img src="assets/images/icons/del-icon.svg" alt="" class="mx-2"/></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px;" class="pe-0">
                                                        <div class="form-check mb-0" style="min-height: auto;">
                                                            <input class="form-check-input" type="checkbox" value="" id="1">
                                                        </div>
                                                    </td>
                                                    <td class="text-start ps-3">1</td>
                                                    <td>Article name</td>
                                                    <td>#675946</td>
                                                    <td>23-11-2023 3:00PM</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="assets/images/icons/edit-icon.svg" alt="" class="mx-2"/></a>
                                                        <a href="javascript:void(0)"><img src="assets/images/icons/del-icon.svg" alt="" class="mx-2"/></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px;" class="pe-0">
                                                        <div class="form-check mb-0" style="min-height: auto;">
                                                            <input class="form-check-input" type="checkbox" value="" id="1">
                                                        </div>
                                                    </td>
                                                    <td class="text-start ps-3">1</td>
                                                    <td>Article name</td>
                                                    <td>#675946</td>
                                                    <td>23-11-2023 3:00PM</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="assets/images/icons/edit-icon.svg" alt="" class="mx-2"/></a>
                                                        <a href="javascript:void(0)"><img src="assets/images/icons/del-icon.svg" alt="" class="mx-2"/></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px;" class="pe-0">
                                                        <div class="form-check mb-0" style="min-height: auto;">
                                                            <input class="form-check-input" type="checkbox" value="" id="1">
                                                        </div>
                                                    </td>
                                                    <td class="text-start ps-3">1</td>
                                                    <td>Article name</td>
                                                    <td>#675946</td>
                                                    <td>23-11-2023 3:00PM</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img src="assets/images/icons/edit-icon.svg" alt="" class="mx-2"/></a>
                                                        <a href="javascript:void(0)"><img src="assets/images/icons/del-icon.svg" alt="" class="mx-2"/></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                           
                        </div>
                    </div>
                    </form>                   
                </div>
            </section>  
@endsection  
