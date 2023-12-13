<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class EmailSettingController extends Controller { 

    public function index(Request $request){
        return view('admin.email-setting.index');
    }
    public function create(Request $request){
        return view('admin.email-setting.create');
    }
    public function edit(Request $request){
        return view('admin.email-setting.edit');
    }
}