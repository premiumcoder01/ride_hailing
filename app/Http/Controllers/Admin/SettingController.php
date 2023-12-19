<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class SettingController extends Controller { 

    public function supportPolicies(){
        return view('admin.setting.support_policies');
    }
    public function reportingAndAnalytics(){

        
        return view('admin.setting.reporting_and_analytics');
    }
    public function pushNotification(){
       
        return view('admin.setting.push_notification');
    }
    public function ticketReport(){
        //   dd('ffff');
        return view('admin.setting.ticket_report');
    }
    public function manageArticle(){
        // dd('ffff');
      return view('admin.setting.manage_articlet');
     }
    public function feedbackSurveys(){
        // dd('ffff');
    return view('admin.setting.feedback_surveys');
    }
    public function faq(){
        // dd('ffff');
      return view('admin.setting.faq');
     }
    public function faqList(){
        // dd('ffff');
    return view('admin.setting.faq_list');
    }
}