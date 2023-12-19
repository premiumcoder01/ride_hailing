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
    public function faq(){
        // dd('ffff');
      return view('admin.support.faq');
     }
    public function article(){
    // dd('ffff');
    return view('admin.support.article');
    }
    public function reportAnalytics(){
        return view('admin.support.report_analytics');
    }
}