<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\LoginService as Service;
use App\Requests\Admin\LoginRequest;
use Illuminate\Support\Facades\Crypt;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class LoginController extends Controller { 
    protected $service;
    public function __construct(Service $service) {
        $this->service = $service;
    }
    //// Admin login page
    public function login(){
        // $data_save = new User;
        // $data_save->id = 1;
        // $data_save->first_name = 'admin';
        // $data_save->last_name = '';
        // $data_save->email = 'admin@email.com';
        // $data_save->password = '$2y$10$4VDtZ0lFnwI1C5kOeuF3M.qXtkPTJlWS6mI9llAcHzSe7QYc3uluO';
        // $data_save->image = '';
        // $data_save->is_active = 1;
        // $data_save->phone = '9999999999';
        // $data_save->role_id = 1;
        // $data_save->status = 1;
        // $data_save->device_token = '121313';
        // $data_save->player_id = '12312';
        // $data_save->gender = 'Male';
        // $data_save->save();
        // $data = User::get();
        // dd($data);
        if(Auth::guard('admin')->user()){
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }
    /// admin check login details
    public function postLogin(LoginRequest $request){
        $data = $this->service->postLogin($request); 
        if($data == 'success'){
            return redirect()->route('admin.dashboard')->withSuccess('You have successfully logged in');
        }else{
            return redirect()->back()->withError('Please check your email or password');
        }
    }
    /// admin logout function
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->withSuccess('You have successfully loggout');
    }


}