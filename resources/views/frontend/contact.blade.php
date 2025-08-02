@extends('frontend.layout')
@section('title', 'Home')

<style>
    .error{
        color: var(--e-global-color-accent);
    }

    .banner {
        height: 100vh ;            
        position: relative !important;
        overflow: hidden;
    }

    .banner::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(2, 4, 95, 0.452); /* Dark overlay */
        z-index: 1;
    }

    .banner-content {
        position: absolute;
        top: 50% !important;
        left: 50% !important;
        transform: translate(-50%, -50%) !important;
        z-index: 2;
        width: 100%;
        max-width: 1200px !important;            
        padding: 40px 10px;
        border-radius: 20px;
        color: white;
    }

    .info-box {
        background-color: rgba(255, 255, 255, 0.08);
        padding: 20px;
        border-radius: 10px;
        border-left: 4px solid var(--e-global-color-accent);
        margin-bottom: 20px;
        width: 100%;
    }

    .info-box h4 {
        color: #fff !important;
        margin-bottom: 15px;
    }

    .info-box p {
        margin: 5px 0;
        font-size: 16px;
        line-height: 3;
    }

    a.text-white:hover {
        color: var(--e-global-color-accent) !important;
    }    
</style>
@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436">
    {{-- <div class="elementor-element elementor-element-3701d24 e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="3701d24" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-0873433 e-con-full e-flex e-con e-child"
                data-id="0873433" data-element_type="container">
                <div class="elementor-element elementor-element-f7bba5a elementor-widget elementor-widget-heading animated fadeInLeft"
                    data-id="f7bba5a" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">Connect With Us</h1>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9dac90b e-flex e-con-boxed e-con e-child"
                    data-id="9dac90b" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-866d9b9 elementor-widget__width-initial elementor-widget-divider--view-line elementor-widget elementor-widget-divider animated fadeInUp"
                            data-id="866d9b9" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                            data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-d9061a3 elementor-widget-mobile__width-initial elementor-widget elementor-widget-text-editor animated fadeInRight"
                            data-id="d9061a3" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                            data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>College is where you are shaped according to the person you want to be in the
                                    future.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="banner" style="background: url('../images/contact_banner.png') no-repeat center center / cover;">
        <div class="banner-content row">
            <!-- Left: Title -->
            <div class="col-lg-4 d-flex align-items-end">
                <div>
                    <h1 class="display-5 fw-bold text-white">Contact Us</h1>
                    <p class="lead">Admissions are open for this session. Reach out to us now!</p>
                </div>
            </div>
    
            <!-- Right: Admission and Support Info -->
            <div class="col-lg-8">
                <div class="row">
                    <!-- Admission Info -->                    
                    <div class="col-md-12 mb-3">
                        <div class="info-box h-100">
                            <h4><i class="fas fa-user-graduate me-2"></i>Admission Support:</h4>
                            <n style="font-size: 20px;">SITASRM INSTITUTE OF MANAGEMENT AND TECHNOLOGY</p>
                            <p><i class="fas fa-map-marker-alt me-2"></i>Address : Plot No. 25/1, Knowledge Park III, Greater Noida, Uttar Pradesh 201310</p>
                            <p><i class="fas fa-envelope me-2"></i>Email: <a href="mailto:admissions@simt.net.in" class="text-white">admissions@simt.net.in</a></p>
                            <p><i class="fas fa-phone me-2"></i>Call: 0120-4109418 9560-201-536,9560-339-929</p>
                        </div>
                    </div>
            
                </div>
            </div>        
        </div>
    </div>  
    
    <marquee behavior="loop" direction="left" style="padding: 10px; color:#324A7D; font-weight:bold;">Admission Helpline :- {{env('COLLEGE_PHONES')}}</marquee>
    {{-- <div class="elementor-element elementor-element-253d0550 e-flex e-con-boxed e-con e-parent e-lazyloaded" data-id="253d0550" data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-6e597f42 elementor-widget elementor-widget-elementskit-blog-posts" data-id="6e597f42" data-element_type="widget" data-widget_type="elementskit-blog-posts.default">
                <div class="elementor-widget-container">
                    <h1 class="display-4 mb-5">Online Counselling</h1>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{route('save.inquiry')}}" method="POST" id="counsellingForm">
                        @csrf                        
                        <div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Enter the OTP send on  <span id="otpEmail"></span></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <label for="otp" class="form-label text-center" style="text-align: center;">OTP <span style="color:red">*</span></label>
                                    <input type="tel" min="1" max="6" class="form-control" style="padding: 15px 10px; font-size:25px; height:50px;" id="otp" name="otp" required autofocus oninput="checkvalid(this)">
                                    <span class="error" id="otp_error"></span>
                                </div>
                                <div class="modal-footer">                                  
                                  <button type="button" onclick="submitForm()" class="btn btn-primary pull-right" style="height: 44px;">submit</button>
                                </div>
                              </div>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label for="name" class="form-label">First Name <span style="color:red">*</span></label>
                                <input type="text" class="form-control" id="f_name" name="fname" required autofocus>
                                <span class="error" id="f_name_error"></span>
                                @error('f_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="f_name" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name" >
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="l_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="l_name" name="l_name" required>                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="phone" class="form-label">Mobile <span style="color:red">*</span></label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">+ 91</div>
                                    </div>
                                    <input type="tel" class="form-control" id="phone" name="phone" required placeholder="10 digit number" max="10" min="10">
                                </div>                                
                                <span class="error" id="mobile_error"></span>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Email <span style="color:red">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <span class="error" id="email_error"></span>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message <small>(Max 200)</small></label>
                            <textarea class="form-control" id="message" name="message" rows="4" required minlength="0" ></textarea>
                            <span class="error" id="message_error"></span>
                        </div>                        
                        <button type="button" class="btn btn-primary pull-right"  style="float:right; height:44px" onclick="sendOTP()">Submit <i class="icon icon-arrow-right"></i></button>
                    </form>                                                                        
                </div>
            </div>
        </div>
    </div> --}}
</div>


@endsection
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>        



<script>
    $(document).ready(function () {
        setTimeout(function () {
            $(".alert").fadeOut(1000); // Fade out in 1 second
        }, 3000); // Hide after 3 seconds
    });

    function submitForm(){
        var form = document.getElementById('counsellingForm');
        var otp = $('#otp');

        if (otp.val().length != 6 ) {
            $('#otp_error').html('Please Enter the Valid OTP !');
            otp.removeClass('is-valid');
            otp.addClass('is-invalid');
            return false;
        }
        else{
            otp.add('is-valid');
            $('#otpModal').modal('hide');
            form.submit();
        }

    }

</script>
<script>

    function validate(){
        let email = document.querySelector('#email').value;
        let fname = document.querySelector('#f_name').value;             
        let phone = document.querySelector('#phone').value;
        let message = document.querySelector('#message').value;                        

        let is_valid = 1; // Assume valid unless an error occurs
        $('.error').html('');

        const email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (fname == '') {
            $('#f_name_error').html('First name Requiered');  
            is_valid = 0;          
        }

        if (phone === '') {
            $('#mobile_error').html('Phone Requiered');
            is_valid = 0;
        }

        else if (phone.length != 10 ) {
            $('#mobile_error').html('Please Enter 10 Digit number');
            is_valid = 0;
        }


        if (email === '') {
            $('#email_error').html('Email is required');
            is_valid = 0;
        } 
        else if (!email_regex.test(email)) {
            $('#email_error').html('Enter a valid email');
            is_valid = 0;
        }
        
        if (message.length > 200) {
            $('#message_error').html('Message Length should not be 200 characters');
            is_valid = 0;
        }  

        return is_valid;
    }
    function sendOTP(){    
        const email = $('#email').val();
        if (validate()) {            
            $('#otpEmail').html(email);            
            $.ajax({
                type: 'POST',
                url: '{{ route('send.otp') }}',
                data: {
                    email: email,
                    _token: '{{ csrf_token() }}' // Add CSRF token
                },
                success: function (response) {
                    if (response.success) {             
                        $('#otpModal').modal('show');                                                                                                       
                    }
                    else{
                        if (response.is_exists) {
                            $('#email_error').html('The email has already been taken.');                            
                        }
                        else{
                            $('#email_error').html('Error Occured');
                        }
                    }
                },
                error: function (xhr) {
                    console.log(xhr.responseJSON);                                        
                }
            })            
        }        
        // $('#counsellingForm').submit();        
    }

    function checkvalid(elem){
        var otp_val = $(elem).val();
        console.log(otp_val);
        if (otp_val.length == 6) {
            $(elem).addClass('is-valid');   
        } else {
            $(elem).removeClass('is-valid'); // Remove class if input is less than 6 digits
        }        
    }

</script>

