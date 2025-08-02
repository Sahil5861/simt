@extends('frontend.layout')
@section('title', 'Admission')

<link rel="stylesheet" href="{{asset('css/tabs_container.css')}}">
<link rel="stylesheet" href="{{asset('css/test-form.css')}}">

<style>    
    .main h3, .main h1{
        font-family: yale, TimesNewRoman, Times New Roman, Times, Baskerville, Georgia, serif;
        font-weight: bold;
    }

    .main p{
        /* font-family: Mallory, 'Gill Sans', 'Gill Sans MT', Calibri, Arial, sans-serif; */
        line-height: 1.6;
        font-weight: 400;
        font-size: 18px;
    }

    .nav-list {
    list-style: none;
    padding: 0;
    margin: 0;
    width: 100%;
    max-width: 300px; /* Adjust width as needed */
}

.nav-list li {
    font-family: "Arial", sans-serif; /* Choose a clean font */
    font-size: 16px;
    font-weight: normal;
    padding: 15px;
    border-bottom: 1px solid #ddd; /* Light separator */
    text-align: left;
    cursor: pointer;
    transition: background 0.3s;
}

.nav-list li:hover {
    background-color: #f5f5f5; /* Light hover effect */
}


.card{
        height: 400px;
        background-position: left;
        background-position-x: left;
        background-size: contain;
        background-repeat: no-repeat;
        margin-bottom: 50px;
        border: none;
        border-bottom: 1px solid #555;
    }

    .blog-card .card-body img{
        width: 250px; 
        height: 250px; 
        object-fit: cover; 
        flex-shrink: 0;
    }

    .main .content{
        margin:20px auto;
    }

    .content li{
        list-style: none;
        font-size: 18px;
        line-height: 1.5;
    }
    

    @media screen and (max-width:990px){
        .nav-responsive-div{
            overflow-x: auto;
            white-space: nowrap; /* Prevent text from wrapping */
            position: sticky;
            top: 135px;
            /* background: #333; */
            background-color: #fff;
            /* box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5); */
            border-bottom: 1px solid #888;

        }
        .nav-responsive{
            display: flex;
            width: 100%;     
            
            /* flex-wrap: wrap;                                */
        }
        .nav-responsive li{
            flex: 1 1 100%;
            text-align: left;
            cursor: pointer;
        }

        .nav-responsive li.active-nav {
            border-bottom: 1px solid #000;
        }
    }


    .accordion-item {
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 10px;
        }
        .accordion-header {
            background: #f4f4f4;
            padding: 15px;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.3s;
            user-select: none;            
        }
        .accordion-header:hover {
            background: #ddd;
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            padding: 0 15px;
            background: #fff;
            transition: max-height 0.3s ease-out, padding 0.3s ease-out;
        }
        .accordion-item.active .accordion-content {
            max-height: max-content;
            padding: 15px;
            border-left: 1px solid #888;
            border-right: 1px solid #888;
            border-bottom: 1px solid #888;
        }

        .accordion-item.active .accordion-header i{
            transform: rotateZ(90deg);
            transition: transform 0.3s ease;
        }

        .btn-primary_2{
            background-color: var(--e-global-color-primary) !important;
        }


        .banner {
            height: 73vh;
            position: relative;
            overflow: hidden;            
        }
        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .counter-section {
            position: absolute;
            top: 50%;
            right: 5%;
            transform: translateY(-50%);            
            color: white;
            padding: 40px;
            width: 35%;
        }
        .counter-table {
            width: 100%;
            padding: 20px;
            background-color: #fff;
        }
        .counter-table td {
            padding: 10px;
            text-align: left;
            cursor: pointer;
        }
        .counter-table p{
            font-weight: bold;
        }
        .counter {
            font-size: 2.5rem;
            font-weight: bold;
            color: red;
        }

    
        

    .comprehensive-data{
        display: flex;
        justify-content: center;
        align-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    .comprehensive-data li{
        cursor: pointer;
        padding: 20px;
        width: 150px;
        text-align: center;
        background-color: var(--e-global-color-primary);
        color: #fff;        
    }
    .comprehensive-data li:hover{
        box-shadow: .1rem .1rem 10px rgba(00, 0, 0, 0.5);
    }

    @media screen and (max-width:500px){

        .comprehensive-data{
            width: 100%;
            display: flex;
            justify-content: flex-start;
            align-content: center;
            gap: 20px;
            overflow-x:  auto;            
        }
        .comprehensive-data li{
            cursor: pointer;
            padding: 8px;
            width: 70px;
            font-size: 12px;
            text-align: center;
            background-color: var(--e-global-color-primary);
            color: #fff;        
        }   
    }

</style>

@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304" style="background-color: #fff;">
    {{-- here it is --}}      

    <div class="banner" style="background: url('../images/admission_banner3.png') no-repeat center center / cover;">
        {{-- <img src="{{asset('images/admission_banner3.png')}}" alt="Banner Image"> --}}
        {{-- <div class="counter-section">
            <table class="counter-table table table-striped">
                <tr>
                    <td><h2 class="counter" data-target="150">0</h2>
                    <p>Projects Completed</p></td>
                </tr>
                <tr>
                    <td><h2 class="counter" data-target="300">0</h2><p>Happy Clients</p></td>
                </tr>
                <tr>
                    <td><h2 class="counter" data-target="500">0</h2>
                    <p>Cups of Coffee</p></td>
                </tr>
            </table>
        </div> --}}
    </div>

    <script>
        // Counter Animation
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                let count = +counter.innerText;
                const increment = target / 100;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 50);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    </script>
    <section class="container-lg p-4">
        {{-- <p style="font-family: Arial, Helvetica, sans-serif; margin: 30px 0 50px 0;">HOME > <span class="text-primary">ADMISSIONS</span></p> --}}
        <div class="row d-flex flex-column-reverse flex-lg-row">
            <div class="col-lg-12 main" style="font-family:Arial, Helvetica, sans-serif;">
                <h1 style="margin:20px 0; font-weight:100; line-height:1.6;">Admission to {{env('COLLEGE_NAME_SHORT')}}</h1>
                <h4 style="margin:20px 0; line-height:1.5;">Welcome to SITASRM Institute of Management and Technology ({{env('COLLEGE_NAME_SHORT')}}), where we're shaping the leaders of tomorrow.</h4>
                <p>Secure Your Spot Today, Limited Seats Available!</p>
                <br>
                {{-- <div class="content">
                    <section class="container-lg">
                        <div class="row">
                            <div class="col-lg-5 test-content shadow p-4">
                                <h3 class="text-light" style="">How To Apply</h3>
                                <div class="steps-container" style="list-style: none;">
                                    <li class="step">
                                        <span class="step-circle">STEP 01</span>
                                        <span class="step-text">Register yourself</span>
                                    </li>
                                    <li class="step-divider" style="height:30px; width:0;"></li>
                                    
                                    <li class="step">
                                        <span class="step-circle">STEP 02</span>
                                        <span class="step-text">Verify Email and Mobile</span>
                                    </li>
                                    <li class="step-divider" style="height:30px; width:0;"></li>
                                    
                                    <li class="step">
                                        <span class="step-circle">STEP 03</span>
                                        <span class="step-text">Fill Application Online</span>
                                    </li>
                                    <li class="step-divider" style="height:30px; width:0;"></li>
                                    
                                    <li class="step">
                                        <span class="step-circle">STEP 04</span>
                                        <span class="step-text">Upload Documents</span>
                                    </li>
                                    <li class="step-divider" style="height:30px; width:0;"></li>
                                
                                    <li class="step">
                                        <span class="step-circle">STEP 05</span>
                                        <span class="step-text">Pay Application Fee Online.</span>
                                    </li>
                                </div>
                                
                            </div>
                            <div class="col-lg-7 form-content">
                                <h3>ADMISSIONS OPEN 2025</h3>
                                <small>Apply Now to Get Information.</small>

                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close alert-close-btn" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <script>
                                        window.addEventListener('DOMContentLoaded', () => {
                                            const alertBox = document.getElementById('success-alert');
                                            if (alertBox) {
                                                alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                                alertBox.focus();
                                            }
                                        });
                                    </script>
                                @endif
                
                                <div class="form-2">                                    
                                    <form action="{{route('admission-apply')}}" method="POST" style="margin: 8px 0;">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <i class="input-group-text input-group-text-2  fa fa-user" id="basic-addon1"></i>
                                                    </div>
                                                    <input type="text" name="username" class="form-control" placeholder="Username *" aria-label="Username" aria-describedby="basic-addon1">
                                                  </div>
                                            </div>
                                                            
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <i class="input-group-text input-group-text-2  fa fa-envelope" id="basic-addon2"></i>
                                                    </div>
                                                    <input type="email" name="email" class="form-control" placeholder="Enter Email Address *" aria-label="Enter Email Address" aria-describedby="basic-addon2">
                                                  </div>
                                            </div>
                                                            
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input-group-text-2"><i class="fa fa-phone"></i></span>
                                                    </div>
                                                    <input type="tel" name="mobile_number" id="phone" class="form-control" placeholder="Enter Mobile Number *" aria-label="Enter Mobile Number" aria-describedby="basic-phone" max="10" maxlength="10">                                                    

                                                    <script>
                                                        document.getElementById('phone').addEventListener('input', function (e) {
                                                            this.value = this.value.replace(/\D/g, '');
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                                                                        
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <i class="input-group-text input-group-text-2 fa fa-map" id="basic-state"></i>
                                                    </div>                                                    
                                                    <select name="state" class="form-control" aria-label="Enter OTP" aria-describedby="basic-state" id="state">
                                                        <option value="" >Select state</option>
                                                        <option>Select your state</option>                        
                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                        <option value="Assam">Assam</option>
                                                        <option value="Bihar">Bihar</option>
                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                        <option value="Goa">Goa</option>
                                                        <option value="Gujarat">Gujarat</option>
                                                        <option value="Haryana">Haryana</option>
                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                        <option value="Jharkhand">Jharkhand</option>
                                                        <option value="Karnataka">Karnataka</option>
                                                        <option value="Kerala">Kerala</option>
                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                        <option value="Maharashtra">Maharashtra</option>
                                                        <option value="Manipur">Manipur</option>
                                                        <option value="Meghalaya">Meghalaya</option>
                                                        <option value="Mizoram">Mizoram</option>
                                                        <option value="Nagaland">Nagaland</option>
                                                        <option value="Odisha">Odisha</option>
                                                        <option value="Punjab">Punjab</option>
                                                        <option value="Rajasthan">Rajasthan</option>
                                                        <option value="Sikkim">Sikkim</option>
                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                        <option value="Telangana">Telangana</option>
                                                        <option value="Tripura">Tripura</option>
                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                        <option value="West Bengal">West Bengal</option>
                                                    
                                                        <option value="Andaman & Nicobar">Andaman & Nicobar (UT)</option>
                                                        <option value="Chandigarh">Chandigarh (UT)</option>
                                                        <option value="Dadra & Nagar Haveli and Daman & Diu">Dadra & Nagar Haveli and Daman & Diu (UT)</option>
                                                        <option value="Delhi">Delhi [National Capital Territory (NCT)]</option>
                                                        <option value="Jammu & Kashmir">Jammu & Kashmir (UT)</option>
                                                        <option value="Ladakh">Ladakh (UT)</option>
                                                        <option value="Lakshadweep">Lakshadweep (UT)</option>
                                                        <option value="Puducherry">Puducherry (UT)</option>                        
                                                    </select>
                                                  </div>
                                            </div>
                                                            
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <i class="input-group-text input-group-text-2 fa fa-map-marker-alt" id="basic-city"></i>
                                                    </div>                                                                                        
                                                    <input type="text" name="city" id="city" class="form-control" placeholder="Enter city">
                                                  </div>
                                            </div>                                                        
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <i class="input-group-text input-group-text-2 fa fa-graduation-cap" id="basic-discipline"></i>
                                                    </div>                                    
                                                    <select name="discipline" class="form-control" aria-label="Enter OTP" aria-describedby="basic-discipline" id="state">
                                                        <option value="" >Select discipline</option>
                                                        <option value="bba">BBA</option>
                                                        <option value="bca">BCA</option>
                                                        <option value="mba">MBA</option>
                                                        <option value="mca">MCA</option>
                                                    </select>
                                                  </div>
                                            </div>
                                                            
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <i class="input-group-text input-group-text-2 fa fa-lightbulb" id="basic-specialization"></i>
                                                    </div>                                    
                                                    <select name="specialization" class="form-control" aria-label="Enter OTP" aria-describedby="basic-specialization" id="state">
                                                        <option value="" >Select specialization</option>
                                                        <option value="HR">HR</option>
                                                        <option value="marketing">Marketing</option>
                                                        <option value="finance">Finance</option>
                                                        <option value="operations">Operations</option>
                                                        <option value="business_anlysis">Business Analytics</option>
                                                        <option value="IT">IT</option>
                                                        <option value="IB">IB</option>
                                                    </select>
                                                  </div>
                                            </div>
                                                            
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <i class="input-group-text input-group-text-2 fa fa-calendar" title="Schedule a call" id="basic-schedule"></i>
                                                    </div>                                    
                                                    <input type="date" title="Schedule a call" name="schedule" id="schedule" aria-describedby="basic-schedule" class="form-control" placeholder="Schedule a Call">
                                                  </div>
                                            </div>
                
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="box" style="width: 100%; display: flex; align-items: flex-start; gap: 10px;padding: 10px;">
                                                    <input type="checkbox" id="customControlAutosizing" name="checked" style="margin: 0; width: 16px; height: 16px;">
                                                    <label for="customControlAutosizing" style="margin-bottom: 0; font-size: 11px; user-select:none;">
                                                        I authorize {{env('COLLEGE_NAME_SHORT')}} to contact me with notifications / updates via call/ email/ SMS/ WhatsApp which overrides DND/NDNC registration *    
                                                    </label>                                    
                                                </div>
                                            </div>
                
                                            <div class="col-lg-12">
                                                <button class="btn btn-primary_2 w-100 p-3 ">APPLY NOW <i class="fa-solid fa-paper-plane"></i></button>                                                
                                            </div>                                            
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <hr> --}}

                <div class="content">
                    <div class="tabs-container">                        
                        <div class="tab-buttons">
                            <div class="tab-button active" data-index="0">Courses Offered</div>
                            <div class="tab-button" data-index="1">Eligibility & Duration</div>
                            <div class="tab-button" data-index="2">Admission Process</div>
                            <div class="tab-button" data-index="3">Fee Structure</div>
                        </div>
                        
                                        
                        <div class="tab-content active" style="background-image: url('../admission_tab/image1.png');">
                            <div>
                                <div class="tab-content-card">
                                    <h2>Courses at <span>{{env('COLLEGE_NAME_SHORT')}}</span></h2>
                                    <p>
                                        <strong>BCA</strong> (Bachelor of Computer Applications) <br>
                                        <strong>BBA</strong> (Bachelor of Business Administration) <br>
                                        <strong>MCA</strong> (Master of Computer Applications) <br>
                                        <strong>MBA</strong> (Master of Business Administration) with Dual Specializations in: <br>
                                        HR, Marketing, Finance, IT, IB, Operations, Business Analytics
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-content" style="background-image: url(https://res.cloudinary.com/dqqfisfji/image/upload/v1741332791/Research_r2bbya.png);">
                            <div>
                                <div class="tab-content-card">
                                    <h2>Eligibility Standards & <span>Course Duration</span></h2>
                                    <p>
                                        <strong>UG Courses:</strong> BCA & BBA <br>
                                        <strong>Eligibility:</strong> 10+2 with minimum 45% <br>
                                        <strong>Duration:</strong> 3 Years
                                    </p>
                                    <p>
                                        <strong>PG Courses:</strong> <br>
                                        <strong>MCA</strong> <br>
                                        <strong>Eligibility:</strong> Graduation with minimum 50% in a relevant field like Computer Science, IT, or Mathematics <br>
                                        <strong>Duration:</strong> 2 Years
                                    </p>
                                    <p>
                                        <strong>MBA</strong> <br>
                                        <strong>Eligibility:</strong> Graduation with minimum 50% in any discipline <br>
                                        <strong>Duration:</strong> 2 Years
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="tab-content" style="background-image: url('../admission_tab/image2.jpg');">
                            <div>
                                <div class="tab-content-card">
                                    <h2>Your Path to <span>{{env('COLLEGE_NAME_SHORT')}}</span></h2>
                                    <p>
                                        Your goals, our guidance. {{env('COLLEGE_NAME_SHORT')}}'s admission is a mutual selection, finding those ready to thrive in our innovative learning environment.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        
    
                        <div class="tab-content" style="background-image: url(https://res.cloudinary.com/dqqfisfji/image/upload/v1741332811/Center_of_Excellence_syesox.png);">
                            <div>
                                <div class="tab-content-card">
                                    <h2>Investment in <span>Your Education</span></h2>
                                    <p>
                                        {{env('COLLEGE_NAME_SHORT')}}'s fee structure is designed for high-value education, a key investment in your success. 
                                        For detailed fee information and scholarship opportunities, please contact our admissions office.
                                    </p>
                                    <p>
                                        <strong>Contact:</strong> For fee details, scholarships, and payment options, reach out to 
                                        <a href="mailto:admissions@simt.edu.in">admissions@simt.edu.in</a> or call <a href="tel:+919560201536">+91-9560201536</a>.
                                    </p>
                                </div>
                            </div>
                        </div>                    
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const tabButtons = document.querySelectorAll(".tab-button");
                            const tabContents = document.querySelectorAll(".tab-content");
                
                            tabButtons.forEach((button, index) => {
                                button.addEventListener("click", function () {
                                    // Remove active class from all buttons & contents
                                    tabButtons.forEach(btn => btn.classList.remove("active"));
                                    tabContents.forEach(content => content.classList.remove("active"));
                
                                    // Add active class to clicked tab & corresponding content
                                    this.classList.add("active");
                                    tabContents[index].classList.add("active");
                                });
                            });
                        });
                    </script>
                </div>



                {{-- <section class="content">                                    
                    <div class="container mt-4">
                        <div class="row p-0">
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Holistic Education</div>
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2  text-light"><i class="fa-solid fa-angles-right"></i> Comfortable Accommodation</div>
                                    <div class="accordion-content">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Industry Ready Graduates</div>
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Strong Industry Connection</div>
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}

                <section class="content">                                    
                    <div class="container mt-4">
                        <h2 class="text-center mb-4">Why Choose {{env('COLLEGE_NAME_SHORT')}}?</h2>
                        <div class="row p-0">
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Future-Ready Learning</div>
                                    <div class="accordion-content">
                                        <p>Our industry-aligned curriculum is designed for your career success in an agile corporate landscape.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Industry Edge</div>
                                    <div class="accordion-content">
                                        <p>Gain practical experience through live projects, internships, and certifications.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Tech-Empowered Campus</div>
                                    <div class="accordion-content">
                                        <p>Learn in smart labs and modern learning spaces, equipped with the latest technology.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Comprehensive Programs</div>
                                    <div class="accordion-content">
                                        <p>We offer a range of programs including BBA, BCA, MBA, and MCA, along with future skills programs like Artificial Intelligence, Digital Marketing, and more.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Holistic Development</div>
                                    <div class="accordion-content">
                                        <p>Beyond academics, we focus on nurturing your potential through career services, skill enhancement workshops, and mentorship programs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Strategic Career Path</div>
                                    <div class="accordion-content">
                                        <p>Benefit from our strategic placement pathways, powerful industry network, and dedicated placement assistance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Innovation Meets Learning</div>
                                    <div class="accordion-content">
                                        <p>At {{env('COLLEGE_NAME_SHORT')}}, we're committed to fostering a culture of innovation and research.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Benchmark Academic Affiliations</div>
                                    <div class="accordion-content">
                                        <p>{{env('COLLEGE_NAME_SHORT')}} is approved by AICTE and affiliated to AKTU, ensuring a high standard of education.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            
                <script>
                    document.querySelectorAll('.accordion-header').forEach(header => {
                        header.addEventListener('click', function() {
                            const item = this.parentElement;
                            const isActive = item.classList.contains('active');
            
                            document.querySelectorAll('.accordion-item').forEach(el => el.classList.remove('active'));
            
                            if (!isActive) {
                                item.classList.add('active');
                            }
                        });
                    });
                </script>
                <div class="content">                                    
                    <div class="row">
                        <div class=" col-lg-7 col-md-6 col-sm-12 d-flex align-items-center justify-content-center" style="flex-direction: column;">                       
                            <div class="elementor-element elementor-element-2772079 elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="2772079" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container" style="background: transparent !important;">
                                    <h3 class="elementor-heading-title elementor-size-default">Expand Your Learning Edge with Our Top Recruiters</h3>
                                </div>
                            </div>    
                            <p>We deliver dynamic business education, equipping you with vital skills like strategic management and data analytics. Through industry partnerships and a tech-empowered environment, we prepare you for top recruiters, ensuring a strong ROI on your career investment.</p>                    
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <img src="{{asset('images/recruiters_logo.jpg')}}" alt="images" width="100%" height="100%">
                        </div>
                    </div>
                    
                    
                </div>

                <div class="content">
                    <h2 class="text-center">Comprehensive Learning</h2>
                    <ul class="comprehensive-data">
                        <li>CFA</li>
                        <li>CISI</li>
                        <li>Python</li>
                        <li>R</li>
                        <li>SPSS</li>
                    </ul>
                </div>
                <br>
                
                
                
                
                {{-- <div class="content">
                    <h2>Campus Life Beyond Classrooms</h2>
                    <li style="margin:20px 0;"><strong>Your Home Away From Home</strong>:  <br>Safe and comfortable accommodations fostering community and belonging.</li>
                    <li style="margin:20px 0;"><strong>Step into the Future of Learning</strong>: <br> Experience modern, tech-driven learning spaces with seamless Wi-Fi connectivity across our expansive 9.47-acre campus, creating an environment that's both connected and inspiring</li>
                    <li style="margin:20px 0;"><strong>Fueling Your Success, Deliciously</strong>: <br> Enjoy diverse and delicious dining options in our premium cafeterias, providing the energy you need to thrive.</li>
                    <li style="margin:20px 0;"><strong>Where Energy and Excitement Converge</strong>: <br> Immerse yourself in a vibrant sports and cultural hub, a place to discover your passions and connect with others.</li>
                    <li style="margin:20px 0;"><strong>Seamless Connectivity, Effortless Journeys</strong>: <br> Benefit from our convenient transport facilities, ensuring easy access to and from campus.</li>
                    <li style="margin:20px 0;"><strong>Elevate Your Potential, Define Your Path</strong>: <br> Propel your growth with our skill enhancement workshops, personalized mentorship programs, and dedicated career services.</li>
                    <li style="margin:20px 0;"><strong>Holistic Growth, Boundless Opportunities</strong>: <br> Embrace a focus on your complete development, with a rich blend of extracurricular activities and meaningful industry interactions. </li>
                </div>


                <div class="content">
                    <h2>Our Vision and Mission</h2>
                    <li style="margin:20px 0;"><strong>Vision</strong>: To be a globally recognized hub for leadership incubation, shaping agile, ethical, and forward-thinking professionals who drive sustainable business transformations.</li>
                    <li style="margin:20px 0;"><strong>Mission</strong>: To empower aspiring and next-generation leaders with transformative learning experiences that integrate sustainability, analytical thinking, and innovation, enabling them to thrive in a rapidly progressing corporate world.</li>
                </div> --}}
                
                <div class="content">
                    <h2>Admissions Details</h2>                    
                    <li style="margin:20px 0;"><strong>Visit Our Website</strong>: <a href="http://www.simt.net.in/" target="_blank">www.simt.net.in</a></li>
                    <li style="margin:20px 0;"><strong>Call Us</strong>: +91-9560201536, 9560990539, 9560339929</li>
                </div>
                
                
            </div>            
        </div>
    </section>
</div>
@endsection

<script>
    $(document).ready(function() {
    $(".nav-responsive li").on("click", function() {
        $(".nav-responsive li").removeClass("active-nav"); // Remove class from all items
        $(this).addClass("active-nav"); // Add class to the clicked item
    });
});

</script>