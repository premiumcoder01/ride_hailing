<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class SettingController extends Controller { 

    public function createRide(){
        // dd('fff');
        return view('admin.setting.create_ride');
    }
    public function createRideLoder(){

        
        return view('admin.setting.create_ride_loder');
    }
    public function pushNotification(){
       
        return view('admin.setting.push_notification');
    }
    public function sms(){
        //   dd('ffff');
        return view('admin.setting.sms');
    }
    public function promotions(){
        // dd('ffff');
      return view('admin.setting.promotions');
     }
    public function paymentCommissions(){
        // dd('ffff');
    return view('admin.setting.payment_commissions');
    }
    
    public function faqList(){
        // dd('ffff');
    return view('admin.setting.faq_list');
    }
}