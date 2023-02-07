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

class CertController extends Controller
{
    


    function download($id){
        $certs= DB::table('generated_certs')
        ->join('seminars', 'generated_certs.seminar_id', '=', 'seminars.seminar_id')
        ->where('generated_id','=', $id)
        ->select("*")
        ->get();

        $designs= DB::table('designs')
        ->where('seminar_id','=', $certs[0]->seminar_id)
        ->select("*")
        ->get();

        $logo= DB::table('logo')
        ->where('logo_id','=', $designs[0]->logo_id)
        ->select("*")
        ->get();

        $signatory = DB::table('signatory')
        ->where('design_id','=', $designs[0]->design_id)
        ->select("*")
        ->get();


        $signature = [];
        $count = 0;

        foreach ($signatory as $user) {
            $signature[$count] = DB::table('signature')
            ->where('signature_id','=', $user->signature_id)
            ->select("*")
            ->get();

            $count++;
        }
        
        $baseimage= DB::table('base_image')
        ->where('baseimage_id','=', $designs[0]->baseimage_id)
        ->select("*")
        ->get();
        
         $pdf = Pdf::loadView('certificate', ['designs'=>$designs, 'certs'=>$certs, 'logo'=>$logo, 'signature'=>$signature, 'baseimage'=>$baseimage]);
         $pdf->setPaper('A4', 'landscape');
        
          return $pdf->stream();
  


    }

    function findcertificates(){

        $getgenerated= DB::table('generated_certs')
        ->join('seminars', 'generated_certs.seminar_id', '=', 'seminars.seminar_id')
        ->select("*")
        ->get();
        return view('user.user_find', ['generated'=>$getgenerated]);

    }

    function emailresent(){

        $certs= DB::table('generated_certs')
        ->select("*")
        ->get();

        foreach ($certs as $user) {

            $id = $user->generated_id;
              $certs= DB::table('generated_certs')
            ->join('seminars', 'generated_certs.seminar_id', '=', 'seminars.seminar_id')
            ->where('generated_id','=', $id)
            ->select("*")
            ->get();

            $designs= DB::table('designs')
            ->where('seminar_id','=', $certs[0]->seminar_id)
            ->select("*")
            ->get();

            $logo= DB::table('logo')
            ->where('logo_id','=', $designs[0]->logo_id)
            ->select("*")
            ->get();

            $signatory = DB::table('signatory')
            ->where('design_id','=', $designs[0]->design_id)
            ->select("*")
            ->get();


            $signature = [];
            $count = 0;

            foreach ($signatory as $user) {
                $signature[$count] = DB::table('signature')
                ->where('signature_id','=', $user->signature_id)
                ->select("*")
                ->get();

                $count++;
            }
            
            $baseimage= DB::table('base_image')
            ->where('baseimage_id','=', $designs[0]->baseimage_id)
            ->select("*")
            ->get();


            $data["email"] = $certs[0]->email;
            $data["title"] = $certs[0]->seminar_name . " Certificate";
            $data["body"] = "Demo";
    
            $pdf = PDF::loadView('certificate', ['designs'=>$designs, 'certs'=>$certs, 'logo'=>$logo, 'signature'=>$signature, 'baseimage'=>$baseimage,  $data]);
            $pdf->setPaper('A4', 'landscape');
    
            Mail::send('email', $data, function($message)use($data, $pdf) {
                $message->to($data["email"], $data["email"])
                        ->subject($data["title"])
                        ->attachData($pdf->output(), "SeminarCertificate.pdf");
            });

            date_default_timezone_set('Asia/Manila');
            $curdate = date('Y-m-d H:i:s') ;

            $update= DB::table('generated_certs')
            ->where('generated_id','=', $certs[0]->generated_id)
            ->update(['status' => 1, 'date_sended' => $curdate]);

        }

        return back()->with('success','All Sent!');

    }

    function deleteuser($id){
        $delete = DB::table('generated_certs')->where('generated_id', '=', $id)->delete();

        return back()->with('success','Deleted!');
    }

    function emailsent($id){
        $certs= DB::table('generated_certs')
        ->join('seminars', 'generated_certs.seminar_id', '=', 'seminars.seminar_id')
        ->where('generated_id','=', $id)
        ->select("*")
        ->get();

        $designs= DB::table('designs')
        ->where('seminar_id','=', $certs[0]->seminar_id)
        ->select("*")
        ->get();

        $logo= DB::table('logo')
        ->where('logo_id','=', $designs[0]->logo_id)
        ->select("*")
        ->get();

        $signatory = DB::table('signatory')
        ->where('design_id','=', $designs[0]->design_id)
        ->select("*")
        ->get();


        $signature = [];
        $count = 0;

        foreach ($signatory as $user) {
            $signature[$count] = DB::table('signature')
            ->where('signature_id','=', $user->signature_id)
            ->select("*")
            ->get();

            $count++;
        }
        
        $baseimage= DB::table('base_image')
        ->where('baseimage_id','=', $designs[0]->baseimage_id)
        ->select("*")
        ->get();


        $data["email"] = $certs[0]->email;
        $data["title"] = $certs[0]->seminar_name . " Certificate";
        $data["body"] = "Demo";
  
        $pdf = PDF::loadView('certificate', ['designs'=>$designs, 'certs'=>$certs, 'logo'=>$logo, 'signature'=>$signature, 'baseimage'=>$baseimage,  $data]);
        $pdf->setPaper('A4', 'landscape');
  
        Mail::send('email', $data, function($message)use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "SeminarCertificate.pdf");
        });

        date_default_timezone_set('Asia/Manila');
        $curdate = date('Y-m-d H:i:s') ;

        $update= DB::table('generated_certs')
        ->where('generated_id','=', $id)
        ->update(['status' => 1, 'date_sended' => $curdate]);
  
        return back()->with('success','Email Sent!');
    }


    function deleteseminar($id){
        $design = DB::table('designs')
        ->where('seminar_id','=', $id)
        ->select("*")
        ->get();

        $delete = DB::table('generated_certs')->where('seminar_id', '=', $id)->delete();
        $delete = DB::table('signatory')->where('design_id', '=', $design[0]->design_id)->delete();
        $delete = DB::table('designs')->where('seminar_id', '=', $id)->delete();

        $delete = DB::table('seminars')->where('seminar_id', '=', $id)->delete();

        if($delete){
            return back()->with('success','Seminar Deleted!');
        }else{
             return back()->with('fail','Something Went Wrong, Try Again.');
        }

    }

    function sample($id){

        $certs= DB::table('generated_certs')
        ->join('seminars', 'generated_certs.seminar_id', '=', 'seminars.seminar_id')
        ->where('generated_id','=', $id)
        ->select("*")
        ->get();

        $designs= DB::table('designs')
        ->where('seminar_id','=', $certs[0]->seminar_id)
        ->select("*")
        ->get();

        
        $logo= DB::table('logo')
        ->where('logo_id','=', $designs[0]->logo_id)
        ->select("*")
        ->get();

        $signature= DB::table('signature')
        ->where('signature_id','=', $designs[0]->signature_id)
        ->select("*")
        ->get();

        $baseimage= DB::table('base_image')
        ->where('baseimage_id','=', $designs[0]->baseimage_id)
        ->select("*")
        ->get();

        //return view('certificate', ['designs'=>$designs, 'certs'=>$certs, 'logo'=>$logo, 'signature'=>$signature, 'baseimage'=>$baseimage]);
        $pdf = Pdf::loadView('certificate', ['designs'=>$designs, 'certs'=>$certs, 'logo'=>$logo, 'signature'=>$signature, 'baseimage'=>$baseimage]);
        $pdf->setPaper('A4', 'landscape');

        return $pdf->stream();
    }

    function certvalidate(Request $request){
        if($request->code_input == ""){
            return back()->with('fail','No Code Detected');
        }else{

            $certs = DB::table('generated_certs')
            ->where('validation_code','=', $request->code_input)
            ->select("*")
            ->get();
   
            if(!$certs->isEmpty()){
            $ids = DB::table('generated_certs')
            ->where('generated_id','=', $certs[0]->generated_id)
            ->join('seminars', 'generated_certs.seminar_id', '=', 'seminars.seminar_id')
            ->select("*")
            ->get();
            }

            if(!$certs->isEmpty()){
                return back()
                ->with('success','Certificate Valid!')
                ->with('ids', $ids);
            }else{
                return back()->with('fail','Certficate is not Valid!');
            }
            
        }
    }
    
    function viewCertificate($id){

        $certs= DB::table('generated_certs')
        ->join('seminars', 'generated_certs.seminar_id', '=', 'seminars.seminar_id')
        ->where('generated_id','=', $id)
        ->select("*")
        ->get();

        $designs= DB::table('designs')
        ->where('seminar_id','=', $certs[0]->seminar_id)
        ->select("*")
        ->get();

        $logo= DB::table('logo')
        ->where('logo_id','=', $designs[0]->logo_id)
        ->select("*")
        ->get();

        $signatory = DB::table('signatory')
        ->where('design_id','=', $designs[0]->design_id)
        ->select("*")
        ->get();


        $signature = [];
        $count = 0;

        foreach ($signatory as $user) {
            $signature[$count] = DB::table('signature')
            ->where('signature_id','=', $user->signature_id)
            ->select("*")
            ->get();

            $count++;
        }
        
        $baseimage= DB::table('base_image')
        ->where('baseimage_id','=', $designs[0]->baseimage_id)
        ->select("*")
        ->get();
        

         //return view('certificate', ['designs'=>$designs, 'certs'=>$certs, 'logo'=>$logo, 'signature'=>$signature, 'baseimage'=>$baseimage]);
          
         $pdf = Pdf::loadView('certificate', ['designs'=>$designs, 'certs'=>$certs, 'logo'=>$logo, 'signature'=>$signature, 'baseimage'=>$baseimage]);
        $pdf->setPaper('A4', 'landscape');
        
          return $pdf->stream();

        // return view('certificate', ['designs'=>$designs, 'certs'=>$certs, 'logo'=>$logo, 'signature'=>$signature, 'baseimage'=>$baseimage]);
    }

    function insertModules(Request $request){

        if($request->type == 1){

            
        $request->validate([
            'type'=>'required',
            'file'=>'required',
            'name'=>'required',
        ]);


            $image = $request->file('file');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/images'),$image_name);
            $image_path = "/images/" . $image_name;
            
            $insert = DB::table('logo')->insert([
                'logo_name' => $request->name,
                'logo_img' => $image_path,

            ]);

            if($insert){
                return back()->with('success','Successfully Added!');
            }else{
                 return back()->with('fail','Something Went Wrong, Try Again.');
            }

        }elseif($request->type == 2)
        {

            $request->validate([
                'type'=>'required',
                'file'=>'required',
                'name'=>'required',
                'position'=>'required'
            ]);
        

            $image = $request->file('file');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/images'),$image_name);
            $image_path = "/images/" . $image_name;
            
            $insert = DB::table('signature')->insert([
                'signature_name' => $request->name,
                'signature_img' => $image_path,
                'signature_position' =>  $request->position,
            ]);

            if($insert){
                return back()->with('success','Successfully Added!');
            }else{
                 return back()->with('fail','Something Went Wrong, Try Again.');
            }

        }elseif($request->type == 3)
        {

            $request->validate([
                'type'=>'required',
                'file'=>'required',
                'name'=>'required',
            ]);
    
            $image = $request->file('file');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/images'),$image_name);
            $image_path = "/images/" . $image_name;
            
            $insert = DB::table('base_image')->insert([
                'baseimage_name' => $request->name,
                'baseimage_img' => $image_path,
            ]);

            if($insert){
                return back()->with('success','Successfully Added!');
            }else{
                 return back()->with('fail','Something Went Wrong, Try Again.');
            }


        }else{
            return back()->with('fail','Something Went Wrong, Try Again.');
        }
       


    }

    function pro_editseminar_page($id){

        $seminars= DB::table('seminars')
        ->where('seminar_id','=', $id)
        ->select("*")
        ->get();

        return view('pro.pro_editseminar_page', ['seminars'=>$seminars]);
    }

    function pro_editseminar_page_update(Request $request, $id){

        $request->validate([
            'seminarname'=>'required',
            'seminardesc'=>'required'
        ]);

        $update = DB::update("update seminars set seminar_name = '".$request->seminarname."', seminar_desc='".$request->seminardesc."'  where seminar_id = ".$id."");
        
        if($update){
            return back()->with('success','Updated');
        }else{
             return back()->with('fail','No Changes.');
        }
    }   

    function pro_editseminar(){

        $seminars= DB::table('seminars')
        ->select("*")
        ->get();

        return view('pro.pro_editseminar', ['seminars'=>$seminars]);
    }
    
    function basic_edit_page($id){

        $designs= DB::table('designs')
        ->join('seminars', 'designs.seminar_id', '=', 'seminars.seminar_id')
        ->where('design_id','=', $id)
        ->select("*")
        ->get();


        $logo= DB::table('logo')
        ->where('logo_id','=', $designs[0]->logo_id)
        ->select("*")
        ->get();

        $signature= DB::table('signature')
        ->where('signature_id','=', $designs[0]->signature_id)
        ->select("*")
        ->get();

        $baseimage= DB::table('base_image')
        ->where('baseimage_id','=', $designs[0]->baseimage_id)
        ->select("*")
        ->get();

        $logoall= DB::table('logo')
        ->select("*")
        ->get();

        $signatureall= DB::table('signature')
        ->select("*")
        ->get();

        $baseimageall= DB::table('base_image')
        ->select("*")
        ->get();

        return view('basic.basic_editpage', ['logo'=>$logo, 'designs'=>$designs, 'signature'=>$signature, 'baseimage'=>$baseimage, 'logoall'=>$logoall, 'signatureall'=>$signatureall, 'baseimageall'=>$baseimageall]);
    }

    function updateSeminar(Request $request, $id){


        if($request->signature == 1){

            if($request->logo == 0){
                $update= DB::table('designs')
                ->where('design_id','=', $id)
                ->update(['logo_id' => null, 'baseimage_id' => $request->base, 'position' => null]);
    
                $delete = DB::table('signatory')->where('design_id', '=', $id)->delete();
    
                $insert = DB::table('signatory')->insert([
                    'design_id' => $id,
                    'signature_id' => $request->signature1,
                ]);
    
                if($insert){
                    return back()->with('success','Certificate Design Updated!');
                }else{
                     return back()->with('fail','Something Went Wrong, Try Again.');
                }
            }else{
                $update= DB::table('designs')
                ->where('design_id','=', $id)
                ->update(['logo_id' => $request->logo, 'baseimage_id' => $request->base, 'position' => $request->pos]);
    
                $delete = DB::table('signatory')->where('design_id', '=', $id)->delete();
    
                $insert = DB::table('signatory')->insert([
                    'design_id' => $id,
                    'signature_id' => $request->signature1,
                ]);
    
                if($insert){
                    return back()->with('success','Certificate Design Updated!');
                }else{
                     return back()->with('fail','Something Went Wrong, Try Again.');
                }
            }

        }


        elseif($request->signature == 2){

            if($request->logo == 0){
                $update= DB::table('designs')
                ->where('design_id','=', $id)
                ->update(['logo_id' => null, 'baseimage_id' => $request->base, 'position' => null]);
    
                $delete = DB::table('signatory')->where('design_id', '=', $id)->delete();
    
                $a = [$request->signature1, $request->signature2];
        
                foreach ($a  as $ids) {
                    $insert = DB::table('signatory')->insert([
                        'design_id' => $id,
                        'signature_id' => $ids,
                    ]); 
                }
    
                if($insert){
                    return back()->with('success','Certificate Design Updated!');
                }else{
                     return back()->with('fail','Something Went Wrong, Try Again.');
                }
            }else{
                $update= DB::table('designs')
                ->where('design_id','=', $id)
                ->update(['logo_id' => $request->logo, 'baseimage_id' => $request->base, 'position' => $request->pos]);
    
                $delete = DB::table('signatory')->where('design_id', '=', $id)->delete();
    
                $a = [$request->signature1, $request->signature2];
        
                foreach ($a  as $ids) {
                    $insert = DB::table('signatory')->insert([
                        'design_id' => $id,
                        'signature_id' => $ids,
                    ]); 
                }
    
                if($insert){
                    return back()->with('success','Certificate Design Updated!');
                }else{
                     return back()->with('fail','Something Went Wrong, Try Again.');
                }
            }
          

            //return $request->base . " / " . $request->logo . " / " . $request->signature . " / " . $request->signature1 . " / " . $request->signature2;
        }


        else{
                return back()->with('fail','Something Went Wrong, Try Again.');
        }
       



        // $designinfo = DB::table('designs')
        //     ->join('seminars', 'designs.seminar_id', '=', 'seminars.seminar_id')
        //     ->select("*")
        //     ->get();
            

    }

    function pro_edit_page($id){

        $designs= DB::table('designs')
        ->join('seminars', 'designs.seminar_id', '=', 'seminars.seminar_id')
        ->where('design_id','=', $id)
        ->select("*")
        ->get();

        $logo= DB::table('logo')
        ->where('logo_id','=', $designs[0]->logo_id)
        ->select("*")
        ->get();

        $logoall= DB::table('logo')
        ->select("*")
        ->get();

        $baseimage= DB::table('base_image')
        ->where('baseimage_id','=', $designs[0]->baseimage_id)
        ->select("*")
        ->get();

        $baseimageall= DB::table('base_image')
        ->select("*")
        ->get();


        $signatory = DB::table('signatory')
        ->where('design_id','=', $id)
        ->select("*")
        ->get();

        $signature = [];
        $count = 0;

        foreach ($signatory as $user) {
            $signature[$count] = DB::table('signature')
            ->where('signature_id','=', $user->signature_id)
            ->select("*")
            ->get();

            $count++;
        }
        
        $signatureall = DB::table('signature')
        ->select("*")
        ->get();

        return view('pro.pro_editpage',  ['logosingle'=>$logo, 'designs'=>$designs, 'signature'=>$signature, 'baseimage'=>$baseimage, 'logoall'=>$logoall, 'signatureall'=>$signatureall, 'baseimageall'=>$baseimageall]);
    }

    function insertseminar(Request $request){


        $logoall= DB::table('logo')
        ->select("*")
        ->first('logo_id');

        $signatureall= DB::table('signature')
        ->select("*")
        ->first('signature_id');

        $baseimageall= DB::table('base_image')
        ->select("*")
        ->first('baseimage_id');

        $request->validate([
            'seminar'=>'required',
            'seminardesc'=>'required'
        ]);

        $insert = DB::table('seminars')->insert([
            'seminar_name' => $request->seminar,
            'seminar_desc' => $request->seminardesc
        ]);

        $seminarnewlyadded= DB::table('seminars')
        ->select("*")
        ->orderByRaw('seminar_id DESC')
        ->first('seminar_id');

        $seminar = $seminarnewlyadded->seminar_id;

        $insert = DB::table('designs')->insert([
            'seminar_id' =>   $seminar,
            'baseimage_id' => $baseimageall->baseimage_id,
            'logo_id' => $logoall->logo_id
        ]);

        $addedid = DB::table('designs')->latest('design_id')->first();

        $insert = DB::table('signatory')->insert([
            'design_id' =>   $addedid->design_id,
            'signature_id' => $signatureall->signature_id,
        ]);
  


        if($insert){
            return back()->with('success','New Seminar Added!');
        }else{
             return back()->with('fail','Something Went Wrong, Try Again.');
        }
    }

    function insertGeneratedCerts(Request $request){

        if($request->method == 1){

            $request->validate([
                'file_excel'=>'required',
            ]);

            $import = new generatedImport($request->seminar);
            Excel::import(new $import, request()->file('file_excel'));

            if($import){
                return back()->with('success','Generated');
            }else{
                 return back()->with('fail','Something Went Wrong, Try Again.');
            }

        }elseif($request->method == 0){

            $request->validate([
                'seminar'=>'required',
                'firstname'=>'required',
                'lastname'=>'required',
                'cert_detail'=>'required',
                'email' => 'required|email'
            ]);
    
            date_default_timezone_set('Asia/Manila');
            $curdate = date('Y-m-d H:i:s') ;
    
            $a = Hash::make('validation_code');

            $insert = DB::table('generated_certs')->insert([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'seminar_id' => $request->seminar,
                'cert_detail' => $request->cert_detail,
                'date_generated' => $curdate,
                'email' => $request->email,
                'validation_code' => $a,
            ]);

            if($insert){
                return back()->with('success','Generated');
            }else{
                 return back()->with('fail','Something Went Wrong, Try Again.');
            }
        }
    }

    function generatedcerts(){

        $getgenerated= DB::table('generated_certs')->orderBy('date_generated', 'DESC')
        ->join('seminars', 'generated_certs.seminar_id', '=', 'seminars.seminar_id')
        ->select("*")
        ->get();

        return view('user.user_certificates', ['generated'=>$getgenerated]);
    }
    function generatedcertsbasic(){

        $getgenerated= DB::table('generated_certs')
        ->join('seminars', 'generated_certs.seminar_id', '=', 'seminars.seminar_id')
        ->select("*")
        ->get();

        return view('user.user_certificates', ['generated'=>$getgenerated]);
    }

    
    function pro_edit(){

        $designinfo = DB::table('designs')
        ->join('seminars', 'designs.seminar_id', '=', 'seminars.seminar_id')
        ->select("*")
        ->get();

        return view('pro.pro_editlist', ['designinfo'=>$designinfo]);
    }

    function basic_edit(){

        $designinfo = DB::table('designs')
        ->join('seminars', 'designs.seminar_id', '=', 'seminars.seminar_id')
        ->select("*")
        ->get();

        return view('basic.basic_editlist', ['designinfo'=>$designinfo]);
    }

    function pro_landing(){
        $landing = DB::table('dynamic_data') 
        ->select("*")
        ->get();
        $getseminars= DB::table('seminars')
        ->select("*")
        ->get();

        return view('pro.pro_landing', ['seminars'=>$getseminars,'landing'=>$landing]);
    }

    

   
    function index_landing(){
        $landing = DB::table('dynamic_data') 
        ->select("*")
        ->get();
        $getseminars= DB::table('seminars')
        ->select("*")
        ->get();

     

        return view('user.user_landing', ['seminars'=>$getseminars,'landing' => $landing]);
    }
    
    

    function basic_landing(){
        $landing = DB::table('dynamic_data') 
        ->select("*")
        ->get();
        $seminars= DB::table('seminars')
        ->select("*")
        ->get();
        return view('basic.basic_landing', ['seminars'=>$seminars,'landing'=>$landing]);
    }

    function admin_landing(){
        return view('admin.admin_landing');
    }
    
    function cert_login(){
        
        if(session()->has('sessionType' == 'pro')){
            return redirect('pro');
        }
       
        if(session()->has('sessionType' == 'admin')){
            return redirect('admin');
        }
      else{

        $type = session('sessionType');
        $user = session('sessionUser');

        return view('cert_login', compact('type', 'user'));
    }
    }
   

   function logout(){
    if(session()->has('sessionUser')){
        session()->pull('sessionType');
        session()->pull('sessionUser');
        return redirect('/login');
    }
   
    }
   
   function checkLogin(Request $request){

    $request->validate([
        'username'=>'required',
        'password'=>'required'
    ]);




    $proInfo = DB::table('login_credentials')
    ->where([
        ['user_username','=', $request->username],
        ['user_type','=', 0],
    ])
    ->select("*")
    ->first();

    $adminInfo = DB::table('login_credentials')
    ->where([
        ['user_username','=', $request->username],
        ['user_type','=', 3],
    ])
    ->select("*")
    ->first();

    if(!$adminInfo){
        if(!$proInfo){
                return back()->with('fail','Incorrect username or password');
            }
        
        else{
            if($request->password == $proInfo->user_password){
                $request->session()->put('sessionType', 'pro');
                $request->session()->put('sessionUser', $proInfo->user_username);
                return redirect('pro');
            }else{
                return back()->with('fail','Incorrect username or password');
            }
        }
    }
    
    else {
        if($request->password == $adminInfo->user_password){
            $request->session()->put('sessionType', 'admin');
            $request->session()->put('sessionUser', $adminInfo->user_username);
            return redirect('landing');
        }else{
            return back()->with('fail','Incorrect username or password');
        }
    }
   }

}
