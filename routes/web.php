<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OTPController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AdmissionEnquiryController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;




// Frontend routes start
// Route::get('/', function () {    
//     return view('frontend.home');
// })->name('home');

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about-us', function () {    
    return view('frontend.about');
})->name('about');

Route::get('/courses/btech', function () {    
    return view('frontend.dynamic_courses');
})->name('courses.btech');

Route::get('/contact', function () {
    // return view('welcome');
    return view('frontend.contact');
})->name('contact');

// Home controller
Route::post('/save-contacts', [HomeController::class, 'contact_save'])->name('save.inquiry');
Route::post('/save-inquiries', [HomeController::class, 'saveInquiry'])->name('save.inquiries');

Route::post('/add-enquiry', [HomeController::class, 'addEnquiry'])->name('add-enquiry');


Route::post('/send-otp', [OTPController::class, 'sendOTP'])->name('send.otp');


Route::get('/admin-register', [AuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin-register-post', [AuthController::class, 'register'])->name('admin.register.post');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('admin-login-post', [AuthController::class, 'login_save'])->name('admin.login.post');

Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');


Route::get('allblogs', [HomeController::class, 'blogs'])->name('my_blogs');
Route::get('blogs/{url}', [HomeController::class, 'blogsdetails'])->name('blogs.details');

Route::get('admission', [HomeController::class, 'showAdmissinPage'])->name('admissions');
Route::get('apply-now', [HomeController::class, 'showApplyNowPage'])->name('apply_now');

Route::post('store-comment', [HomeController::class, 'storeComment'])->name('store-comment');
Route::get('courses/{slug}', [HomeController::class, 'viewCourse'])->name('view-courses');
Route::get('tp', [HomeController::class, 'view_t_p'])->name('view-tp');
Route::get('admission-policy', [HomeController::class, 'admissionpolicy'])->name('admission-policy');
Route::get('academics-infrastructure', [HomeController::class, 'academics'])->name('academics');

Route::get('courses-offered', [HomeController::class, 'coursesoffered'])->name('coursesoffered');
Route::get('rd_cell', [HomeController::class, 'view_r_d'])->name('view-rd');

Route::get('rules-regulations', [HomeController::class, 'viewRules'])->name('view-rules');
Route::get('eligibility', [HomeController::class, 'showEligibility'])->name('eligibility');
Route::get('doc-checklist', [HomeController::class, 'viewchecklist'])->name('doc-checklist');
Route::get('anti-ragging', [HomeController::class, 'antiRagging'])->name('anti-ragging');

Route::post('send-apply-otp', [HomeController::class, 'sendApplyOTP'])->name('send-apply-otp');
Route::post('admission-apply', [HomeController::class, 'AdmissoinApply'])->name('admission-apply');
Route::post('submit-contact', [HomeController::class, 'submitContact'])->name('submit-contact');

Route::get('simtadmissions', [HomeController::class, 'AdmissoinBrand'])->name('admission-brand');

Route::get('privacy-policy', function (){
    return view('frontend.privacy');
})->name('privacy-policy');

Route::get('terms-conditions', function (){
    return view('frontend.t_and_c');
})->name('terms-conditions');

Route::get('fees', function (){
    return view('frontend.fees');
})->name('fees');

Route::get('refund', function (){
    return view('frontend.refund');
})->name('refund');
// Frontend routes end



// Admin Routes:
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('dashboard',[HomeController::class, 'dashboard'])->name('admin.dashboard');


    Route::prefix('admin')->name('admin.')->group(function () {

        Route::post('/upload-image', function (Request $request) {
            if ($request->hasFile('file')) {
                $image = $request->file('file');
        
                // Define the path where the image will be stored
                $destinationPath = public_path('blog_uploads');
        
                // Generate a unique filename
                $imageName = time() . '_' . $image->getClientOriginalName();
        
                // Move the image to the public/blog_uploads directory
                $image->move($destinationPath, $imageName);
        
                // Return the image URL for TinyMCE
                // return response()->json(['location' => asset('blog_uploads/' . $imageName)]);
                return response()->json(['location' => url('blog_uploads/' . $imageName)]);
            }
            return response()->json(['error' => 'Upload failed'], 400);
        })->name('upload.image');
        
        
        // Manage Blogs
        Route::prefix('blog')->name('blogs.')->group(function () {
            Route::get('/', [BlogController::class, 'index'])->name('index');
            Route::get('/create', [BlogController::class, 'create'])->name('create');
            Route::post('/store', [BlogController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
            Route::get('/show/{id}', [BlogController::class, 'show'])->name('show');
            Route::put('/{id}', [BlogController::class, 'update'])->name('update');
            Route::delete('/{id}', [BlogController::class, 'destroy'])->name('destroy');
        });
    
        // Manage Blogs category
        Route::prefix('blog-category')->name('blogs.category.')->group(function () {
            Route::get('/', [BlogCategoryController::class, 'index'])->name('index');
            Route::get('/create', [BlogCategoryController::class, 'create'])->name('create');
            Route::post('/store', [BlogCategoryController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [BlogCategoryController::class, 'edit'])->name('edit');
            Route::get('/show/{id}', [BlogCategoryController::class, 'show'])->name('show');
            Route::put('/{id}', [BlogCategoryController::class, 'update'])->name('update');
            Route::delete('/{id}', [BlogCategoryController::class, 'destroy'])->name('destroy');
        });
    
        // Manage Authors
        Route::prefix('author')->name('authors.')->group(function () {
            Route::get('/', [AuthorController::class, 'index'])->name('index');
            Route::get('/create', [AuthorController::class, 'create'])->name('create');
            Route::post('/store', [AuthorController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [AuthorController::class, 'edit'])->name('edit');
            Route::get('/show/{id}', [AuthorController::class, 'show'])->name('show');
            Route::put('/{id}', [AuthorController::class, 'update'])->name('update');
            Route::delete('/{id}', [AuthorController::class, 'destroy'])->name('destroy');
        });


        // Manage Admissin enquries
        Route::prefix('admission-enquiry')->name('admission-enquiry.')->group(function () {
            Route::get('/', [AdmissionEnquiryController::class, 'index'])->name('index');            
            Route::delete('/{id}', [AdmissionEnquiryController::class, 'destroy'])->name('destroy');
        });

        // Manage Admissin enquries
        Route::prefix('contacts')->name('contacts.')->group(function () {
            Route::get('/', [AdmissionEnquiryController::class, 'index_contact'])->name('index');            
            Route::delete('/{id}', [AdmissionEnquiryController::class, 'destroy_contact'])->name('destroy');
        });

        // Manage Admissin enquries
        Route::prefix('apply-inquiries')->name('apply-inquiries.')->group(function () {
            Route::get('/', [AdmissionEnquiryController::class, 'index_apply'])->name('index');            
            Route::delete('/{id}', [AdmissionEnquiryController::class, 'destroy_apply'])->name('destroy');
        });
    });
});





require __DIR__.'/auth.php';
