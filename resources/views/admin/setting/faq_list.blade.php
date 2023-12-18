@extends('admin.layouts.app')
@section('content')
<section id="main-content" class="main-content">
                <div class="container-fluid">
                    <div class="row mt-4">
                        <div class="col-12 d-flex align-items-end justify-content-between">
                            <div class="button-group btn-management">
                                <button type="button" class="btn btn-secondary active">Rider</button>
                                <button type="button" class="btn btn-secondary">Driver</button>
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
                                        <th>Feedback</th>
                                        <th>Rating</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Username</td>
                                        <td class="text-primary"><a href="">#237258</a></td>
                                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting...</td>
                                        <td>4.5 <img src="assets/images/icons/star-black.svg" alt=""/></td>
                                        <td>28 Nov</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Username</td>
                                        <td class="text-primary"><a href="">#237258</a></td>
                                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting...</td>
                                        <td>4.5 <img src="assets/images/icons/star-black.svg" alt=""/></td>
                                        <td>28 Nov</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Username</td>
                                        <td class="text-primary"><a href="">#237258</a></td>
                                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting...</td>
                                        <td>4.5 <img src="assets/images/icons/star-black.svg" alt=""/></td>
                                        <td>28 Nov</td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Username</td>
                                        <td class="text-primary"><a href="">#237258</a></td>
                                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting...</td>
                                        <td>4.5 <img src="assets/images/icons/star-black.svg" alt=""/></td>
                                        <td>28 Nov</td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Username</td>
                                        <td class="text-primary"><a href="">#237258</a></td>
                                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting...</td>
                                        <td>4.5 <img src="assets/images/icons/star-black.svg" alt=""/></td>
                                        <td>28 Nov</td>
                                    </tr>                                     
                                </tbody>
                            </table>
                        </div>
                       </div>
                    </div>
                </div>
            </section> 
@endsection  