<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Customer;
use Validator;
use App\Quotation;
use App\Prescription;
use Hash;
use App\Http\Requests\PasswordChangeRequest;

class CustomerController extends Controller
{
    public function customerProfileView(){

    	$customer = Customer::where('id',Auth::user()->id)->first();
        return view('customer.customer-profile',compact('customer'));
    }

    public function customerProfileQuotations()
    {
            // dd('hello');
            $quotations = Quotation::with('quotationDetails.product')->where('customer_id',Auth::user()->id)->get();
            // dd($quotations);
            return view('customer.customer-profile-quotations',compact('quotations'));
    }

    public function customerProfileQuotationsMore(Request $request)
    {
            // dd($request->all());
            $quotations = Quotation::with('quotationDetails.product')->where('id',$request->id)->first();
            return view('customer.quotation-more',compact('quotations'));
    }

    public function customerProfilePrescriptions()
    {
            // dd('hello');
            $prescriptions = Prescription::where('customer_id',Auth::user()->id)->get();
            // dd($prescriptions);
            return view('customer.customer-profile-prescriptions',compact('prescriptions'));
    }

    public function customerProfilePrescriptionsMore(Request $request)
    {
            // dd($request->all());
            $prescriptions = Prescription::where('id',$request->id)->first();
            return view('customer.prescription-more',compact('prescriptions'));
    }

     public function customerEditView(){

        $customer = Customer::where('id',Auth::user()->id)->first();
        return view('customer.customer-profile-edit',compact('customer'));
    }

    public function customerProfileEdit(Request $request){

    	$this->validate($request, $this->getRules());

        $customer = Customer::find(Auth::user()->id);
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->dob = $request->dob;
        $customer->save();

        return response()->json(['msg' => 'User Updated Successfully'], 200);

    }

    public function passwordUpdate(PasswordChangeRequest $request){
    // dd($request->all());
        Customer::find(Auth::User()->id)->update([
          'password' => Hash::make($request->new_password)
      ]);
        return response()->json(['msg' => 'Password updated successfully!'], 200);
    }

    public function getRules()
    {
        $this->rules = [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|',
            'address' => 'required|string|max:255',
            'dob' => 'required',
        ];

        return $this->rules;
    }

    public function customerPrescriptionAdd(){
        
        return view('customer.customer-profile-add-prescription');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function customerPrescriptionStore(Request $request)
    {
        $this->validate($request, $this->getPrescriptionRules());
        
        $prescriptionImage = $request->image;
        $prescriptionImageSaveAsName = str_random(10) . "-prescription." . $prescriptionImage->getClientOriginalExtension();

        $upload_path1 = 'assets/uploads/prescriptions/';
        $prescription_image_url = $upload_path1 . $prescriptionImageSaveAsName;
        $successPRES = $prescriptionImage->move($upload_path1, $prescriptionImageSaveAsName);
        

        $prescriptions                       =   new Prescription();
        $prescriptions->note                 =   $request->note;
        $prescriptions->delivery_address     =   $request->delivery_address;
        $prescriptions->delivery_time        =   $request->delivery_time;
        
        $prescriptions->image              =   $prescription_image_url;
        $prescriptions->customer_id          =   Auth::user()->id;
        $prescriptions->save();

        $pres_code = Prescription::find($prescriptions->id);
        $pres_code->prescription_no = 'PRES'.((int)$prescriptions->id + 10000);
        $pres_code->save();

        // Session::flash('successs','Prescription Added Successfully');
        return redirect('customer-profile-prescriptions');
    } 

    public function getPrescriptionRules()
    {
        $this->rules = [
            'delivery_address' => 'required|string|max:255',
            'note' => 'required|string|max:255',
            'delivery_time' => 'required|',
            'image' => 'required',
        ];

        return $this->rules;
    }

    public function acceptQuotation($id){

        $quotation = Quotation::find($id);
        $quotation->status = 1;
        $quotation->save();

        return response()->json(['msg' => 'Quotation  successfully accepted!'], 200);
    }

    public function rejectQuotation($id){

        $quotation = Quotation::find($id);
        $quotation->status = 2;
        $quotation->save();

        return response()->json(['msg' => 'Quotation successfully rejected!'], 200);
    }

}
