<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SupportController extends Controller { 

    public function index(){
        return view('admin.support.index');
    }
    public function detail(){
        return view('admin.support.detail');
    }
}