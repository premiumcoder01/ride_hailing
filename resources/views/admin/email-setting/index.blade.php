@extends('admin.layouts.app')
@section('content')
<section id="main-content" class="main-content">
    <div class="container-fluid">                   
        <div class="row">
            <div class="col-12 user-list-data mt-4">
                <div class="table-responsive box-shadow radius-10 email-setting-list">
                    <table  class="w-100 table table-border-last-none table-custom text-center m-0">
                        <thead>
                            <tr>
                                <th>Host Name</th>
                                <th>Port</th>
                                <th>Sender Email</th>                                            
                                <th>Action</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i=1;$i<=5;$i++)
                            <tr>
                                <td>Rider</td>
                                <td>745739</td>
                                <td>01/12/27 to 30/12/27</a></td>    
                                <td>
                                    <a href="{{route('admin.email-setting-management.edit')}}" class="edit-icon mx-2"><img src="{{asset('admin/assets/images/icons/edit-icon.svg')}}" alt=""/></a>
                                    <a href="#" class="del-icon mx-2"><img src="{{asset('admin/assets/images/icons/del-icon.svg')}}" alt=""/></a>
                                </td>                                        
                                <td class="default">Default</td>
                            </tr>
                            @endfor                                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>             
    </div>
</section> 
@endsection