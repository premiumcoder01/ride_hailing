<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class OwnerController extends Controller { 

    public function index(){
        return view('admin.owner.index');
    }
    public function detail(){
        return view('admin.owner.detail');
    }
}