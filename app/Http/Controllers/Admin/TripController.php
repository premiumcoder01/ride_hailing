<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class TripController extends Controller { 

    public function index(){
        return view('admin.trip.index');
    }
    public function detail(){
        return view('admin.trip.detail');
    }
    public function tripDetail(){
        return view('admin.trip.trip_details');
    }
}