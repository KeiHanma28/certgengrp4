<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\generatedImport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Mail\Mailable;

class UserController extends Controller
{

    public function forgotpassword(){
        return view('forgot');
    }
    public function scanner(){
        return view('qr');
    }
    public function sendResetLinkEmail(Request $request)
    {
        $user = DB::table('login_credentials')->where('user_email', $request->user_email)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'Invalid email address.');
        }
        $token = Str::random(10);
        $user=DB::table('login_credentials')->where('user_email', $request->user_email)->update(['password_reset_token'=>  $token]);

        
        $data["email"] = $request->user_email;
        $data["title"] = "This is your token to reset password: ".$token ;

       Mail::send('email', $data, function($message)use($data) {
                $message->to($data["email"], $data["email"])
                        ->subject($data["title"]);
            
            });

            return redirect('/token')->with('success', 'Password reset link sent to your email address.');
    }

    public function tokenreset(){
        return view('/token');
    }

    public function tokenpass(Request $request)
    {
        $user = DB::table('login_credentials')->where('password_reset_token', $request->password_reset_token)->first();
        if (!$user) {
            return redirect('/login')->with('error', 'Invalid token.');
        }
        else{
        $user =DB::table('login_credentials')->where('password_reset_token', $request->password_reset_token)->update(['user_password'=>  $request->user_password]);

        return redirect('/login')->with('success', 'Password reset successfully.');
    }
    }

    public function getuser(){
        $users = DB::table('login_credentials')->get();
        $req_user = DB::table('login_credentials_request')->get();
        return view('admin.user-list', ['users' => $users],['req_user' => $req_user]);
    }

   
    public function cert_signup(){
        return view('cert_signup');
    }
    function insertuser_request(Request $request){
        DB::table('login_credentials_request')
        ->insert([
            'user_firstname' =>  $request->user_firstname,
            'user_lastname' =>  $request->user_lastname,
            'user_email'=> $request->user_email,
            'user_type' =>  '0',
            'user_username' =>  $request->user_username,
            'user_password' =>  $request->user_password
        ]);

        return redirect('/login')->with('success','You have signed up, Wait for validation');
    }
    

    public function edituser(Request $request){
        $user = DB::table('login_credentials')->where('user_id', $request->id)->first();
        return view('admin.user-edit', ['user' => $user]);
    }

    public function getlanding(){
        $landing = DB::table('dynamic_data')->first();
        $validusers = DB::table('login_credentials')->get();
        $notvalidusers = DB::table('login_credentials_request')->get();
        $base = DB::table('base_image')->get();
        $logo = DB::table('logo')->get();
        $seminars = DB::table('seminars')->get();
        $sended = DB::table('generated_certs')->where('status', 1)->get();
        $notsended = DB::table('generated_certs')->where('status', 0)->get();
        return view('admin.landing-page', ['landing' => $landing],['validusers' => $validusers,'notvalidusers' => $notvalidusers, 'seminars'=>$seminars,'logo'=>$logo,'base'=>$base, 'sended'=>$sended, 'notsended'=>$notsended]);
    }
    public function editpage(Request $request){
        $page = DB::table('dynamic_data')->where('id', $request->id)->first();
        return view('admin.edit-page', ['page' => $page]);
    }
    public function updatepage(Request $request){
        DB::table('dynamic_data')
        ->where('id', $request->id)
        ->update([
            'title' =>  $request->title,
            'intro' =>  $request->intro,
            'location' =>  $request->location,
            'email' =>  $request->email,
            'contact' =>  $request->contact,
            'year' =>  $request->year
        ]);

        return redirect('/landing')->with('success','Page updated successfully');
    }

   
    public function deleteuser_req(Request $request){
        DB::table('login_credentials_request')->where('user_id', $request->id)->delete();
        $users = DB::table('login_credentials_request')->get();
        return redirect('/users')->with('success','User Disapproved');
    }
    public function deleteuser(Request $request){
        DB::table('login_credentials')->where('user_id', $request->id)->delete();
        $users = DB::table('login_credentials')->get();
        return redirect('/users')->with('success','User deleted successfully');
    }
    public function certs(){
        $getgenerated= DB::table('generated_certs')
        ->join('seminars', 'generated_certs.seminar_id', '=', 'seminars.seminar_id')
        ->select("*")
        ->get();
        return view('admin.cert-list', ['generated'=>$getgenerated]);
    }
    public function createuser(){
        return view('admin.user-create');
    }
    public function insertuser(Request $request){
        DB::table('login_credentials')
        ->insert([
            'user_firstname' =>  $request->user_firstname,
            'user_lastname' =>  $request->user_lastname,
            'user_email' =>  $request->user_email,
            'user_type' =>  $request->user_type,
            'user_username' =>  $request->user_username,
            'user_password' =>  $request->user_password
        ]);

        return redirect('/users')->with('success','User inserted successfully');
    }

     public function approve(Request $request){
        DB::table('login_credentials')->insertUsing([
            'user_firstname' ,
            'user_lastname',
            'user_email',
            'user_type' ,
            'user_username' ,
            'user_password'],
            DB::table('login_credentials_request')
        ->select([
            'user_firstname' ,
            'user_lastname',
            'user_email',
            'user_type',
            'user_username' ,
            'user_password'
        ])->where('user_id', $request->id));
        DB::table('login_credentials_request')->where('user_id', $request->id)->delete();
        $users = DB::table('login_credentials_request')->get();
        return redirect('/users')->with('success','User Approved');
    }
    public function updateuser(Request $request){
        DB::table('login_credentials')
        ->where('user_id', $request->user_id)
        ->update([
            'user_firstname' =>  $request->user_firstname,
            'user_lastname' =>  $request->user_lastname,
            'user_email' =>  $request->user_email,
            'user_type' =>  $request->user_type,
            'user_username' =>  $request->user_username,
            'user_password' =>  $request->user_password
        ]);

        return redirect('/users')->with('success','User updated successfully');
    }


    
}