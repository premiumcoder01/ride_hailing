<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class DriverController extends Controller { 

    public function index(){
        return view('admin.driver.index');
    }
    public function detail(){
        return view('admin.driver.detail');
    }
    public function indexOnboarding(){
        return view('admin.driver.index_onboarding');
    }
    public function detailOnboarding(){
        return view('admin.driver.detail_onboarding');
    }
}