<?php

namespace App\Http\Controllers;

use App\Models\Cruise;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $a1 = DB::table('cruise_booking')->count();
        $a2 = DB::table('contact')->count();
        $a3 = DB::table('others')->count();
        $a4 = DB::table('company_info')->count();
        return view('admin_pages.dashboard',compact('a1','a2','a3','a4'));
    }

    public function enquiries()
    {
        $enquiries = DB::table('contact')->get();
        return view('admin_pages.enquiry', compact('enquiries'));
    }
    
    public function getEnqData()
    {
        // $data = DB::table('contact')->orderBy('id', 'DESC')->get();
        $data = Contact::select(['id','name','email','phone','message','created_at'])->orderby('id','desc');
        return DataTables::of($data)
            ->addIndexColumn()
            // ->addColumn('date',function($data){
            //   return date('d-M-Y',strtotime($data->created_at)); 
            // })
            ->make(true);
    }
    
    public function show_enq($id)
    {
        $enq = DB::table('contact')->where('id',$id)->first();
        if ($enq) {
            return response()->json([
                'enq' => $enq
            ]);
        }
        return response()->json(['error' => 'Enquiry not found'], 404);
    }
    
    public function enq_destroy(Request $request,$id)
    {
        $enquiry = DB::table('contact')->where('id',$id)->delete();
        return response()->json(['success' => 'success','msg'=>'Enquiry deleted successfully !!']);
    }

    public function company_info(){

        $company_info = DB::table('company_info')->first();
        return view('admin_pages.company',compact('company_info'));
    }

    public function company_info_update(Request $request){

        $company_info = array(
            'comp_email1' => $request->c_email1,
            'comp_email2' => $request->c_email2,
            'comp_contact1' => $request->c_no1,
            'comp_contact2' => $request->c_no2,
            'comp_address' => $request->c_adrs,
            'comp_map' => $request->c_map,
            'comp_sm1' => $request->c_sm1,
            'comp_sm2' => $request->c_sm2,
        );
        $company_info = DB::table('company_info')->where('id',1)->update($company_info);
        $request->session()->flash('response_msg', 'Company Info updated successfully !!'); //success,info,error,warning
        $request->session()->flash('response_type', 'success');
        return redirect()->back();
    }
    
    public function change_password(){
        return view('admin_pages.change-password');
    }
    
    public function update_password(Request $request){
        $password = $request->password;
        $con_password = $request->confirm_password;
        if($password !== $con_password){
            $request->session()->flash('response_msg', 'Password does not match !!');
            $request->session()->flash('response_type', 'error');
            return redirect()->back();
        }else{
            $newPassword = Hash::make($password);
            DB::table('users')->where('id',1)->update(['password'=>$newPassword]);
            $request->session()->flash('response_msg', 'Password updated successfully !!');
            $request->session()->flash('response_type', 'success');
            return redirect()->back();
        }
    }

    public function seo_pages(){
        $seo_pages = DB::table('others')->get();
        return view('admin_pages.seo-pages',compact('seo_pages'));
    }

    public function seo_pages_update(Request $request){
        $pageUpdate = array(
            'oth_seo_title' => $request->title,
            'oth_seo_keys' => $request->keyword,
            'oth_seo_desc' => $request->desc
        );
        $seo_pages = DB::table('others')->where('id',$request->page_id)->update($pageUpdate);
        $request->session()->flash('response_msg', 'Meta Info updated successfully !!'); //success,info,error,warning
        $request->session()->flash('response_type', 'success');
        return redirect()->back();
    }

    public function bookings()
    {
        $actual_link = "bookings";
        $bookings = Cruise::select(['id','name','phone','destination','created_at'])->orderby('id','desc');
       return view('admin_pages.bookings',compact("bookings","actual_link"));
    }
    
    public function getBookingData()
    {
        // $data = Cruise::orderby('id', 'desc')->get();
        $data = Cruise::select(['id','name','email','phone','message','created_at']);
        return DataTables::of($data)
            ->addIndexColumn()
            // ->addColumn('date',function($data){
            //   return date('d-M-Y',strtotime($data->created_at)); 
            // })
            ->make(true);
    }
    
    public function show($id)
    {
        $booking = Cruise::find($id);
        if ($booking) {
            return response()->json([
                'booking' => $booking
            ]);
        }
        return response()->json(['error' => 'Booking not found'], 404);
    }

    public function admin_logout(Request $request){
        
        $request->session()->flush();
        return redirect('/login');
    }
}