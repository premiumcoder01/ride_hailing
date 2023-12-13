<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller { 

    public function index(){
        return view('admin.user.index');
    }
    public function detail(){
        return view('admin.user.detail');
    }
    public function indexOnboarding(){
        return view('admin.user.index_onboarding');
    }
    public function detailOnboarding(){
        return view('admin.user.detail_onboarding');
    }
}