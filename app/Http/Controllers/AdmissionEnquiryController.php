<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmissionEnquiry;
use App\Models\AdmissionApply;
use App\Models\Contact;

class AdmissionEnquiryController extends Controller
{

    public function index(){
        $admission_enquries = AdmissionEnquiry::orderBy('created_at', 'desc')->get(); 
        return view('admin.admission_enquiry.index', compact('admission_enquries'));
    }

    public function destroy($id){
        $enquiry = AdmissionEnquiry::where('id', $id)->first();
        

        if ($enquiry) {
            $enquiry->delete();
        }
        return redirect()->back()->with('message', 'Enquiry deleted successfully!');
    }



    public function index_contact(){
        $contact_enquries = Contact::orderBy('created_at', 'desc')->get(); 
        return view('admin.contact.index', compact('contact_enquries'));
    }

    public function destroy_contact($id){
        $enquiry = Contact::where('id', $id)->first();

        if ($enquiry) {
            $enquiry->delete();
        }
        return redirect()->back()->with('message', 'Enquiry deleted successfully!');
    }

    public function index_apply(){
        $apply_enquries = AdmissionApply::orderBy('created_at', 'desc')->get(); 
        return view('admin.apply.index', compact('apply_enquries'));
    }

    public function destroy_apply($id){
        $enquiry = AdmissionApply::where('id', $id)->first();

        if ($enquiry) {
            $enquiry->delete();
        }
        return redirect()->back()->with('message', 'Enquiry deleted successfully!');
    }
}
