@extends('frontend.layout')
@section('title', 'Terms & conditions   ')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<link rel="stylesheet" href="{{asset('css/tabs_container.css')}}">
<link rel="stylesheet" href="{{asset('css/test-form.css')}}">

<style>    
    .main h3, .main h1{
        font-family: yale, TimesNewRoman, Times New Roman, Times, Baskerville, Georgia, serif;
        font-weight: bold;
    }

    .content{
        scroll-margin-top: 150px;
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
        font-size: 18px;
        line-height: 1.5;
        margin: 20px 0;
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

    .owl-carousel .item{
        padding: 20px;
    }
    .owl-carousel .item img {
        width: 90%;
        height: 200px; /* Adjust as needed */
        object-fit: contain;
        border-radius: 10px;
        background-blend-mode: color-burn;
        mix-blend-mode: multiply;            
    } 
    .section-dark{
        position: relative;
    }

    .section-dark::before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }
    .card .card-img-top{
        max-height: 344px !important;
    }

</style>

@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304" style="background-color: #fff;">
    {{-- here it is --}}      
    <section class="banner" style="background: url('../images/terms_conditions.jpg') no-repeat center center / cover;">
        <div class="banner-content">
            <h1>Terms and Conditions</h1>
            <p>Establishing Clarity, Fostering Trust: Your Guide to Our Institute's Policies</p>
            {{-- <h1 style=""></h1>            
            <h4>Commitment to Privacy at SITASRM Institute of Management and Technology (SIMT)</h4> --}}
            {{-- <p style="color:#fff;"><i>We appreciate your cooperation in adhering to these guidelines.</i></p> --}}
        </div>
    </section>
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
                <div class="content"> 
                    <h2>Terms & Conditions - SITASRM Institute of Management and Technology (SIMT)</h2>
                    <h4>Welcome to SIMT: Your Guide to Our Policies</h4>
                    <br>
                    <p>This is to outline the Terms and Conditions governing your engagement with SITASRM Institute of Management and Technology (SIMT), located at Plot No. 25/1, Knowledge Park III, Greater Noida, Uttar Pradesh 201310, India. By applying for admission, enrolling in a program, or using any services provided by SIMT, you agree to comply with and be bound by the following terms. SIMT is affiliated with Dr. A.P.J. Abdul Kalam Technical University (AKTU), Lucknow, and approved by AICTE.</p>
                    <p>For the most accurate and up-to-date information, please refer to the official SIMT website at <a href="simt.net.in">simt.net.in</a>.</p>
                </div>
                                                                  
                <div class="content">
                    <h4>Table of Contents</h4>
                    <ul>
                        <li style="list-style:decimal;"><a href="#fee_structure_for_academic_programs">Fee Structure for Academic Programs</a></li>
                        <li style="list-style:decimal;"><a href="#eligibility_criteria">Eligibility Criteria</a></li>
                        <li style="list-style:decimal;"><a href="#admission_process">Admission Process</a></li>
                        <li style="list-style:decimal;"><a href="#refund_policy">Refund Policy</a></li>
                        {{-- <li style="list-style:decimal;"><a href="#general_legal_provisions">General Legal Provisions</a></li> --}}
                        <li style="list-style:decimal;"><a href="#general_terms">General Terms</a></li>
                        <li style="list-style:decimal;"><a href="#contact_information">Contact Information</a></li>
                    </ul>
                </div>


                <div class="content" id="fee_structure_for_academic_programs">
                    <h4>1. Fee Structure for Academic Programs</h4>
                    <p>The annual fee structure for various programs offered at SIMT is as follows:</p>
                    <ul>
                        <li><strong>MBA/MCA Programs</strong>: ₹1,25,000* per annum</li>
                        <li><strong>BBA/BCA Programs</strong>: ₹60,000* per annum</li>
                    </ul>
                    <i><sup>*</sup>Note: The asterisk denotes that additional charges such as examination fees, university registration fees, security deposits (refundable), and other miscellaneous charges may apply as per institute and university norms. These amounts are subject to revision as per the institute's policies and regulatory guidelines. Detailed break-up will be provided at the time of admission.</i>
                </div>

                <hr>

                <div class="content" id="eligibility_criteria">
                    <h4>2. Eligibility Criteria</h4>
                    <p>Admission to SIMT programs requires candidates to meet specific academic qualifications. Generally, for undergraduate programs such as BBA and BCA, candidates must have successfully completed their 10+2 education from a recognized board with a minimum aggregate percentage. For postgraduate programs like MBA and MCA, a bachelor's degree from a recognized university in a relevant stream, with a minimum aggregate percentage, is required. Specific entrance examination requirements may also apply as per university and AICTE guidelines.</p>
                    <ul>
                        <li style="list-style:disc;">
                            <p><strong>Personally Identifiable Information:</strong>Such as your full name, email address, contact telephone numbers, date of birth, residential address, academic qualifications (e.g., prior degrees, marks), and financial details required for fee payments or scholarships. This information is provided by you during applications, admissions, course registrations, or direct communications.</p>
                        </li>
                        <li>
                            <p><strong>Technical Information:</strong>This encompasses your Internet Protocol (IP) address, browser specifics, device identifiers, and aggregated data regarding your navigation patterns on our website. This data is gathered through the use of cookies and similar digital tools.</p>                            
                        </li>
                        <li>
                            <p><strong>Academic Engagement Data: </strong>Information related to your participation in our programs, which may include attendance records, submission of assignments, examination performance, and feedback provided.</p>
                        </li>
                    </ul>                    
                </div> 

                <hr>

                <div class="content" id="admission_process">
                    <h4>3. Admission Process</h4>
                    <p>SIMT maintains a transparent admission process. Generally, the steps involved include:</p>

                    <ul>
                        <li><strong>Application:</strong> Prospective students must apply online through the official SIMT Application website.</li>
                        <li><strong>Document Submission:</strong> Necessary academic records and other required documents must be uploaded or submitted.</li>
                        <li><strong>Entrance Examination/Assessment:</strong> Admission may be based on performance in national, state-level entrance tests, or institute-level assessments, as applicable per university and AICTE guidelines.</li>
                        <li><strong>Personal Interaction:</strong> Shortlisted candidates may be invited for a personal interview or interaction.</li>
                        <li><strong>Admission Confirmation:</strong> Successful candidates secure their admission by confirming acceptance and paying the requisite fees upon selection.</li>
                    </ul>
                    <p>For detailed and updated eligibility criteria, required documents, and the specific admission process for each program, please visit the official SIMT Admissions portal or contact the Admissions Office directly.</p>
                </div> 
                <hr>

                <div class="content" id="refund_policy">
                    <h4>4. Refund Policy</h4>
                    <p>SIMT adheres to a structured refund policy for admitted students. The policy is generally based on the date of application for withdrawal from a program:</p>

                    <ul>
                        <li><strong>Withdrawal within a stipulated period:</strong> If an application for withdrawal is received on or before a specified cut-off date (as communicated by regulatory bodies like AICTE), a substantial portion of the fee, after deduction of a nominal registration fee, will be refunded.</li>
                        <li><strong>Withdrawal after the stipulated period:</strong> For applications received after the officially communicated cut-off date, typically no amount will be refunded, except for the caution money (if deposited).</li>
                        <p>The specific dates and exact refundable amounts are communicated by the AICTE and AKTU through their academic calendars for each session. Students are strongly advised to refer to the official institute communications or contact the Admissions Office for precise details regarding the refund policy for their respective academic session.</p>
                    </ul>
                </div>
                <hr>

                <div class="content" id="general_terms">
                    <h4>5. General Terms</h4>
                    <p>Our website utilizes cookies and similar tracking technologies to enhance your Browse experience, analyze site traffic, and support the delivery of our educational content. These technologies enable us to understand user behavior and tailor our services accordingly. You retain the right to manage your cookie preferences through your web browser settings. Please note that disabling certain cookies may impact the full functionality and user experience of our platform.</p>
                </div>

                <hr>

                <div class="content" id="your_data_protection_rights_and_choices">
                    <h4>6. Your Data Protection Rights and Choices</h4>
                    <ul>
                        <li><strong>Conduct:</strong> All students are expected to adhere to the code of conduct, rules, and regulations of SIMT, as stipulated in the student handbook and other official communications.</li>
                        <li><strong>Anti-Ragging Policy:</strong> SIMT maintains a strict anti-ragging policy to ensure a safe and respectful campus environment.</li>
                        <li><strong>Amendments:</strong> SIMT reserves the right to modify these Terms and Conditions at any time. Any changes will be updated on the official website.</li>
                        <li><strong>Dispute Resolution:</strong> Any disputes arising out of these terms and conditions will be subject to the jurisdiction of the courts in Greater Noida, Uttar Pradesh, India.</li>
                        <li><strong>Electronic Record:</strong> This constitutes an electronic record in terms of the Information Technology Act, 2000, and its rules as applicable, including amended provisions pertaining to electronic records. It is generated by a computer system and does not require any physical or digital signatures.</li>
                        <li><strong>Intellectual Property Rights:</strong> All content on the SIMT website and related platforms, including text, graphics, logos, images, software, and other materials, are the proprietary property of SITASRM Institute of Management and Technology or its content suppliers. These are protected by applicable intellectual property laws. Unauthorized use, reproduction, or distribution of any content is strictly prohibited.</li>
                        <li><strong>Disclaimer of Warranties:</strong> The SIMT website and its services are provided on an "as is" and "as available" basis. SITASRM Institute of Management and Technology makes no warranties, express or implied, regarding the operation of the website or the accuracy, completeness, or reliability of any information provided, except for the terms explicitly stated herein regarding fees and admissions.</li>
                        <li><strong>Limitation of Liability:</strong> SITASRM Institute of Management and Technology shall not be liable for any direct, indirect, incidental, punitive, special, or consequential damages arising from the use of, or inability to use, the website or its services. This includes, but is not limited to, financial losses incurred due to non-adherence to fee payment schedules, misinterpretation of policies, or any other issues.</li>
                        <li><strong>Indemnification:</strong> You agree to indemnify and hold SITASRM Institute of Management and Technology, its affiliates, officers, directors, employees, and agents harmless from any claims, demands, losses, liabilities, costs, and expenses (including legal fees) arising from your use of the website or your </li>
                        <li><strong>Governing Law and Jurisdiction:</strong> These Terms and Conditions shall be governed by and construed in accordance with the laws of India. Any disputes arising under or in connection with these Terms shall be exclusively resolved by the competent courts located in Greater Noida, Uttar Pradesh, India.</li>
                        <li><strong>Amendments to Terms:</strong> SITASRM Institute of Management and Technology reserves the right to modify these Terms and Conditions, including those pertaining to fee structures and refund policies, at any time. Any changes will be posted on the official website, and your continued use of the website or services after such modifications will constitute your acceptance of the updated terms.</li>
                    </ul>                    
                </div>

                <hr>

                <div class="content" id="contact_information">
                    <h4>7. Contact Information</h4>
                    <p>For any queries related to admissions, fees, or other institute policies, please feel free to contact us:</p>
                    <ul>
                        <li><strong>Email:</strong> <a href="mailto:admissions@simt.net.in">admissions@simt.net.in</a></li>
                        <li><strong>Phone:</strong> <a href="tel:01204109418">0120-4109418</a>, <a href="tel:919560201536">+91-9560-201-536</a>, <a href="tel:919560339929">+91-9560-339-929</a></li>
                        <li><strong>Website:</strong> <a href="https://simt.net.in">simt.net.in</a></li>
                    </ul>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>   
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,  // Enables infinite looping
            margin: 10,  // Space between images            
            autoplay: true,  // Enables auto-slide            
            dots:false,
            autoplayTimeout: 3000,  // Slide changes every 3 seconds            
            responsive: {
                0: { items: 1 },  // 1 image per slide on small screens
                600: { items: 2 },  // 2 images per slide on medium screens
                1000: { items: 3 }  // 3 images per slide on large screens
            }
        });
    });
</script>