<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Enquiry;
use App\Models\BlogComment;

use App\Models\AdmissionEnquiry;
use App\Models\AdmissionApply;

use App\Models\Contact;

class HomeController extends Controller
{

    public function home(){
        $latest_blogs = Blog::with('author')->latest()->take(3)->get(); // Fetch latest 5 blogs
        return view('frontend.home', compact('latest_blogs'));
    }
    public function contact_save(Request $request){
        $request->validate([
            'fname' => 'required',            
            'email' => 'required|email',
            'phone' => 'required|digits:10'
        ]);

        $contact = Contact::where('email', $request->email)->first();

        $contact_otp = $contact->otp;
        $reques_otp = $request->otp;

        if ($contact_otp == $reques_otp) {
            $contact->first_name = $request->input('fname');        
            $contact->middle_name = $request->input('middle_name') ?? '';        
            $contact->last_name = $request->input('l_name') ?? '';        
            $contact->email = $request->input('email');
            $contact->otp = '';
            $contact->mobile = $request->input('phone');
            $contact->message = $request->input('message') ?? '';

            if ($contact->save()) {
                return redirect()->back()->with('success', 'Inquiry Request Sent');
            } else {
                return redirect()->back()->with('error', 'Failed to send inquiry. Please try again.');
            } 
        }        
        else{
            $contact->delete();
            return redirect()->back()->with('error', 'Failed to send inquiry. Invalid OTP.');
        }

                   
    }

    public function addEnquiry(Request $request){

        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'phone' => 'required|numeric|digits:10',
            'program' =>'required',
            'state' =>'required'            
        ]);

        AdmissionEnquiry::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'program' => $request->input('program'),
            'specialization' => $request->input('specialization'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'is_checked' => ($request->input('checked') == 'on') ? 1 : 0,
        ]);

        // Prepare payload
        $payload = [
            [
                "instituteId" => 36,
                "name" => $request->input('name'),
                "emailId" => $request->input('email'),
                "mobile" => $request->input('phone'),
                "programName" => $request->input('program'),
                "specializationName" => $request->input('specialization') ?? '', // Optional: make this dynamic
                "sourceCategory" => "8",
                "sourceId" => "1",
                "sessionId" => "1",
                "campusId" => "45",
                "state" => $request->input('state'),
                "city" => $request->input('city')
            ]
        ];

        $jsonData = json_encode($payload);
        $ch = curl_init('https://clientcrmservice.targetx.in/lead/update/enquiry');

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true); // POST request
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            curl_close($ch);
            return response()->json(['success' => false, 'message' => 'CRM connection error', 'error' => $error_msg]);
        }
        curl_close($ch);
        $crmResponse = json_decode($response, true);


        // return response()->json(['success' => true, 'message' => 'Enquiry submitted']);

        if ($httpcode == 200 && isset($crmResponse['status']) && $crmResponse['status'] === true) {
            return response()->json(['success' => true, 'message' => 'Enquiry submitted & synced to CRM']);
        } else {
            return response()->json(['success' => false, 'message' => 'Saved locally, but CRM failed', 'crm_response' => $crmResponse]);
        } 
                
        // return response()->json(['success' => true, 'message' => 'Enquiry submitted']);      
    }

    public function submitContact(Request $request){
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'phone' => 'required',
            'program' =>'required',
            'city' =>'required',            
            'state' =>'required'            
        ]);

        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'program' => $request->input('program'),
            'specialization' => $request->input('specialization') ?? '',
            'state' => $request->input('state'),
            'city' => $request->input('city'),                    
        ]);

          // Prepare payload
        $payload = [
            [
                "instituteId" => 36,
                "name" => $request->input('name'),
                "emailId" => $request->input('email'),
                "mobile" => $request->input('phone'),
                "programName" => $request->input('program'),
                "specializationName" => $request->input('specialization') ?? '', // Optional: make this dynamic
                "sourceCategory" => "8",
                "sourceId" => "1",
                "sessionId" => "1",
                "campusId" => "46",
                "state" => $request->input('state'),
                "city" => $request->input('city')
            ]
        ];

        $jsonData = json_encode($payload);
        $ch = curl_init('https://clientcrmservice.targetx.in/lead/update/enquiry');

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true); // POST request
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            curl_close($ch);
            return response()->json(['success' => false, 'message' => 'CRM connection error', 'error' => $error_msg]);
        }
        curl_close($ch);
        $crmResponse = json_decode($response, true);


        // return response()->json(['success' => true, 'message' => 'Enquiry submitted']);

        if ($httpcode == 200 && isset($crmResponse['status']) && $crmResponse['status'] === true) {
            return response()->json(['success' => true, 'message' => 'Enquiry submitted & synced to CRM']);
        } else {
            return response()->json(['success' => false, 'message' => 'Saved locally, but CRM failed', 'crm_response' => $crmResponse]);
        }
    }

    public function blogs() {
        $blogs = Blog::with('author')->latest()->paginate(10); // Show 5 blogs per page
        $recent_blogs = Blog::with('author')->latest()->take(5)->get(); // Fetch latest 5 blogs
    
        return view('frontend.blogs', compact('blogs', 'recent_blogs'));
    }
    

    public function blogsdetails($url){
        $blog = Blog::where('seo_url', $url)->first();
        if (!$blog) {
            abort(404);
        }
    
        $current_blog = Blog::with('author')->where('id', $blog->id)->first();
        $blog_image = $blog->image;
        $blogs = Blog::with('author')->get();
        return view('frontend.blogsdetail',compact('blog', 'blogs', 'blog_image', 'current_blog'));
    }

    public function view_r_d(){
        return view('frontend.view_r_d');
    }
    

    public function saveInquiry(Request $request){
        $request->validate([
            'name' => 'required',            
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'branch' => 'required',
            'city' => 'required',
            'state' => 'required'
        ]);

        

        

        $inquiry = new Enquiry();
        $inquiry->name = $request->input('name');
        $inquiry->email = $request->input('email');
        $inquiry->phone = $request->input('phone');
        $inquiry->branch = $request->input('branch');
        $inquiry->city = $request->input('city');
        $inquiry->state = $request->input('state');
        $inquiry->checked = $request->input('checked') ?? null;


        
        return redirect()->back()->with('success', 'Inquiry Request Sent');
        // if ($inquiry->save()) {
        //     return redirect()->back()->with('success', 'Inquiry Request Sent');
        // }
        // else{
        //     return redirect()->back()->with('error', 'Inquiry Request Not Sent');
        // }
    }


    public function dashboard(){
        return view('admin.index');
    }


    public function storeComment(Request $request){
        $secret_key = "6LcnawArAAAAANdc-DmBoxHaMeNx89f7Rc4GZsQ2";
        $request->validate([
            'comment' => 'required'
        ], [
            'comment.required' => 'Please enter a comment.'
        ]);
    

        $recaptcha_response = $request->input('g-recaptcha-response');

        $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
        
        $response =file_get_contents($verifyUrl.'?secret='.$secret_key.'&response='.$recaptcha_response);

        $responseKeys = json_decode($response, true);

        if ($responseKeys['success']) {            
            BlogComment::create([
                'blog_id' =>$request->blog_id,
                'comment' =>$request->comment,
            ]);

            return response()->json(['message' => 'Comment added successfully!']);
        }
        else{
            return response()->json(['error', 'Recaptha Failed, comment not added']);
        }                


        // BlogComment::create([
        //     'blog_id' =>$request->blog_id,
        //     'comment' =>$request->comment,
        // ]);

        // return response()->json(['message' => 'Comment added successfully!']);
    }

    public function showAdmissinPage(){
        return view('frontend.admission');
    }

    public function showApplyNowPage(){
        return view('frontend.apply_now');
    }

    public function viewCourse($slug){
        if ($slug == 'bba') {
            return view('frontend.courses.bba');
        }
        elseif ($slug == 'mba') {
            return view('frontend.courses.mba');
        }

        elseif ($slug == 'bca') {
            return view('frontend.courses.bca');
        }
        elseif ($slug == 'mca') {
            return view('frontend.courses.mca');
        }
        else{
            abort(404); // This will show the default 404 error page
        }
    }

    public function view_t_p(){
        return view('frontend.t_p');
    }

    public function viewRules(){
        return view('frontend.rules');
    }

    public function coursesoffered(){
        return view('frontend.dynamic_courses');
    }

    public function viewchecklist(){
        return view('frontend.doc_checklist');
    }

    public function showEligibility(){
        return view('frontend.eligibility');
    }

    public function admissionpolicy(){
        return view('frontend.admission_policy');
    }


    public function antiRagging(){
        return view('frontend.anti_ragging');
    }

    public function academics() {
        return view('frontend.academics');
    }

    public function sendApplyOTP(Request $request){
        $request->validate([
            'phone' => 'required',
        ]);
        // dd($request->all()); exit;

        $otp = rand(100000, 999999); // 6-digit OTP

        // Store the OTP temporarily (e.g. in session or DB)
        session(['otp' => $otp, 'phone' => $request->phone]);


        return response()->json([
            'status' => 'success',
            'message' => 'OTP sent successfully.' . $otp,
            // 'response' => $response->json()
        ]);

    }

    public function AdmissoinApply(Request $request){

        // dd($request->all()); exit;
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',            
            'mobile_number' => 'required|string|regex:/^[0-9]{10,15}$/',
            'state' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'discipline' => 'required|string|max:100',
            'specialization' => 'required|string|max:100',
            'schedule_call' => 'required|date', // assuming it's a date input
            'consent' => 'sometimes',  // optional checkbox            
        ]);

                 
        $application = AdmissionApply::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'mobile_number' => $request->input('mobile_number'),            
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'discipline' => $request->input('discipline'),
            'specialization' => $request->input('specialization'),
            'schedule_call' => $request->input('schedule_call'),
            'consent' => ($request->input('checked') == 'on') ? 1 : 0,
        ]);
        
        // return redirect()->back()->with('success', 'Applied for admission successfully');
        return response()->json(['success' => true, 'message' => 'Apply request submitted']);
    }

    public function AdmissoinBrand(){
        return view('frontend.courses.admission_brand');
    }
}
