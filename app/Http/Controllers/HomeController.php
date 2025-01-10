<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Cruise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function default()
    {
        return redirect('/');
    }

    public static function meta_info($id)
    {
        $seo1 = DB::table('others')->where('id', $id)->first();
        return $seo1;
    }

    public function index()
    {
        return view('web_pages.index');
    }

    public function about()
    {
        return view('web_pages.about');
    }

    public function cruise_booking()
    {
        return view('web_pages.cruise_booking');
    }
    
    public function luxury_cruise()
    {
        return view('web_pages.luxury_c');
    }
    
    public function adventure_cruise()
    {
        return view('web_pages.adventure_c');
    }
    
    public function river_cruise()
    {
        return view('web_pages.river_c');
    }
    
    public function family_cruise()
    {
        return view('web_pages.family_c');
    }
    
    public function sailing_cruise()
    {
        return view('web_pages.sailing_c');
    }
    
    public function world_cruise()
    {
        return view('web_pages.world_c');
    }
    
    public function cruise_listing()
    {
        return view('web_pages.cruise_listing');
    }

    public function cruise_details()
    {
        return view('web_pages.cruise_details');
    }

    public function contact()
    {
        return view('web_pages.contact');
    }

    public function contact_add(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->full_name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();
        $request->session()->flash('contact_success', '<h3>Thanks for contacting</h3><p> We will be in touch soon!!</p>');
        return redirect()->back();
    }

    public function cruise_add(Request $request)
    {
        $cruise = new Cruise();
        $cruise->destination = $request->destination;
        $cruise->date = $request->date_b;
        $cruise->cruise_length = $request->cruise_length;
        $cruise->cruise_line = $request->cruise_line;
        $cruise->name = $request->full_name;
        $cruise->email = $request->email;
        $cruise->phone = $request->phone;

        $cruise->save();
        $request->session()->flash('contact_success', "<h3>Thank You for Booking!</h3><p> We'll get back to you shortly!!</p>");
        return redirect()->back();
    }

    public function privacy_policy()
    {
        return view('web_pages.privacy_policy');
    }

    public function terms_condition()
    {
        return view('web_pages.terms_condition');
    }

    public function refund_policy()
    {
        return view('web_pages.refund_policy');
    }

    public function disclaimer()
    {
        return view('web_pages.disclaimer');
    }
}
