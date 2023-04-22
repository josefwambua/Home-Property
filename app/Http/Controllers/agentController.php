<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\properties;
use App\Models\houseunit;
use App\Models\tenant;
use PDF;
use Notification;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceMail;
use Mpesa;
use Session;
use Stripe;

class agentController extends Controller
{
    public function view_property(){
        $data = properties::all();
        return view('agent.property',compact('data'));
    }

    public function add_property(Request $request){
      
        $data = new properties;

       $data->name = $request->name;
       $data->owner = $request->owner;
       $data->address = $request->address;
       $data->description = $request->description;
       $data->save();
       return redirect()->back()->with('message','Property Added Successfully');

    }
    public function view_houseunits(){
        $properties = properties::all();
        return view('agent.houseunits',compact('properties'));
    }
    
    public function delete_property($id){
        $data = properties::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function add_houseunits(Request $request){
        $houseunits = new houseunit;
        $houseunits->size=$request->size;
        $houseunits->name=$request->name;
        $houseunits->rent=$request->Rent;
        $houseunits->deposit=$request->Deposit;
        $houseunits->save();
        return redirect()->back()->with('message','House Unit Added Successfully');
    
    }
    public function view_tenants(){
        $data = tenant::all();
        return view('agent.tenant',compact('data'));
    }
    public function register_tenant(Request $request){
        $data = new tenant;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->national_id = $request->national_id;
        $data->save();
        return redirect()->back()->with('message','Property Added Successfully');
 
    }
  
    public function delete_tenant($id){
        $data = tenant::find($id);
        $data->delete();
        return redirect()->back();

    }
    public function view_invoices(){
        return view('agent.invoices');
        
    }
    public function print_pdf(){
            $pdf =PDF::loadView('agent.invoices');
            return $pdf->download('Invoice.pdf');
        }
    public function sendEmail(Request $req){
        $data =[
            'name'=>$req->name,
            'email'=>$req->email,
            'amount'=>$req->amount,
            'garbageamount'=>$req->garbageamount,
            'description'=>$req->description,
        ];
        Mail::to('josefwambua2@gmail.com')->send(new InvoiceMail($data));
        
        return redirect()->back()->with('message','Email Sent Successfully');
    }   

public function stripe(){
    return view('agent.stripe');
}

public function stripePost(Request $request)
{
    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    Stripe\Charge::create ([
            "amount" => 100 * 100,
            "currency" => "kes",
            "source" => $request->stripeToken,
            "description" => "Thanks for Payment" 
    ]);
  
    Session::flash('success', 'Payment successful!');
          
    return back();
}
}
