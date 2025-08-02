@extends('frontend.layout')
@section('title', 'Privacy Policy   ')

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
    <section class="banner" style="background: url('../images/privacy-policy.jpg') no-repeat center center / cover;">
        <div class="banner-content">
            {{-- <h1 style="">Privacy Policy for SITASRM Institute of Management and Technology (SIMT)</h1>            
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
                    <h2>Privacy Policy for SITASRM Institute of Management and Technology (SIMT)</h2>
                    <h4>Commitment to Privacy at SITASRM Institute of Management and Technology (SIMT)</h4>
                    <p>At SITASRM Institute of Management and Technology (SIMT), operating under the distinguished patronage of <strong>SHRI KRISHNA EDUCATIONAL SOCIETY</strong>, we are dedicated to safeguarding your privacy and ensuring the security of your personal information. This Privacy Policy details the practices through which we gather, utilize, disclose, and protect your data during your engagement with our website, services, and academic programs.</p>
                    <p>We encourage all users to thoroughly review this policy to comprehend our institutional approach to managing personal data.</p>
                </div>
                      
                <div class="content"> 
                    <h4>Our Guiding Principle: SHRI KRISHNA EDUCATIONAL SOCIETY</h4>                   
                    <p>SITASRM Institute of Management and Technology (SIMT) is an educational endeavor nurtured by the <strong>SHRI KRISHNA EDUCATIONAL SOCIETY</strong>. This society is committed to advancing educational opportunities and fostering environments of learning and growth. Our privacy practices are firmly rooted in the ethos of this society, emphasizing transparency, integrity, and the responsible stewardship of information entrusted to us by our students, faculty, and stakeholders.</p>
                </div>
            
                <div class="content">
                    <h4>Key Provisions:</h4>
                    <ul>
                        <li><strong>Data Collection:</strong> Understanding the categories of personal data we acquire.</li>
                        <li><strong>Information Utilization:</strong> Clarification of the purposes for which your data is employed.</li>
                        <li><strong>Data Sharing:</strong> Explanation of when and with whom your data may be shared</li>
                        <li><strong>Your Privacy Rights:</strong> Elucidation of your prerogatives concerning your personal data.</li>
                        <li><strong>Contact Details:</strong> Guidance on reaching our designated Privacy Officer for inquiries.</li>
                    </ul>
                </div>

                <div class="content">
                    <h4>Table of Contents</h4>
                    <ul>
                        <li style="list-style:decimal;"><a href="#introduction  ">Introduction</a></li>
                        <li style="list-style:decimal;"><a href="#information_collection  ">Information Collection</a></li>
                        <li style="list-style:decimal;"><a href="#utilization_of_information  ">Utilization of Information</a></li>
                        <li style="list-style:decimal;"><a href="#disclosure_of_information  ">Disclosure of Information</a></li>
                        <li style="list-style:decimal;"><a href="#cookies_and_tracking_technologies  ">Cookies and Tracking Technologies</a></li>
                        <li style="list-style:decimal;"><a href="#your_data_protection_rights_and_choices  ">Your Data Protection Rights and Choices</a></li>
                        <li style="list-style:decimal;"><a href="#data_security_measures  ">Data Security Measures</a></li>
                        <li style="list-style:decimal;"><a href="#data_retention_principles  ">Data Retention Principles</a></li>
                        <li style="list-style:decimal;"><a href="#external_website_links  ">External Website Links</a></li>
                        <li style="list-style:decimal;"><a href="#privacy_concerning_minors  ">Privacy Concerning Minors</a></li>
                        <li style="list-style:decimal;"><a href="#international_data_transfer_policy  ">International Data Transfer Policy</a></li>
                        <li style="list-style:decimal;"><a href="#amendments_to_this_privacy_policy  ">Amendments to This Privacy Policy</a></li>
                        <li style="list-style:decimal;"><a href="#grievance_redressal_officer  ">Grievance Redressal Officer</a></li>
                        <li style="list-style:decimal;"><a href="#contact_information">Contact Information</a></li>
                    </ul>
                </div>

                <div class="content" id="introduction">
                    <h4>1. Introduction</h4>
                    <p>Welcome to the official Privacy Policy of SITASRM Institute of Management and Technology (SIMT). We are committed to upholding your privacy and ensuring that all personal information is handled with the utmost care and responsibility. This policy outlines how we collect, use, and protect your data as you interact with our digital platforms and academic services.</p>
                    <p><strong>About SIMT and Our Trust</strong>: SITASRM Institute of Management and Technology (SIMT) is a premier educational institution situated at Knowledge Park 3, Greater Noida, Uttar Pradesh. We are affiliated with Dr. APJ Abdul Kalam Technical University (AKTU) and hold approval from the All India Council for Technical Education (AICTE). Our institute proudly offers a diverse range of undergraduate and postgraduate programs, including BBA, BCA, MBA, and MCA. SIMT operates under the benevolent guidance and support of the SHRI KRISHNA EDUCATIONAL SOCIETY, a trust dedicated to fostering a high standard of education and contributing positively to society.</p>                    
                </div>

                <div class="content" id="information_collection">
                    <h4>2. Information Collection</h4>
                    <p>We collect various forms of information to deliver and enhance our educational services. This typically includes:</p>
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

                <div class="content" id="utilization_of_information">
                    <h4>3. Utilization of Information</h4>
                    <p>The data we collect serves several crucial purposes, primarily aimed at providing you with quality educational services and improving your overall experience at SIMT:</p>

                    <ul>
                        <li>To facilitate the provision and continuous enhancement of our academic programs and services.</li>
                        <li>To efficiently process your applications, manage course enrollments, and administer fee payments</li>
                        <li>To maintain effective communication with you regarding academic updates, new program announcements, admission-related information, and other pertinent notices.</li>                        
                        <li>To personalize your educational journey, adapting to your preferences and academic progress.</li>
                        <li>To conduct in-depth analysis of website usage, optimize functionality, and refine our service offerings.</li>
                        <li>To ensure compliance with all applicable legal and regulatory requirements, and to uphold the rights and safety of SIMT and its community members.</li>
                        <li>For internal administrative functions and maintaining accurate institutional records.</li>
                    </ul>                    
                </div> 

                <div class="content" id="disclosure_of_information">
                    <h4>4. Disclosure of Information</h4>
                    <p>SIMT values your privacy and does not engage in the sale or rental of your personal information to third parties for commercial gain. However, there are specific circumstances under which your information may be shared:</p>

                    <ul>
                        <li><strong>External Service Providers:</strong> We may share data with trusted third-party vendors who assist us in critical operational areas such as payment processing, website hosting, data analytics, and other essential support functions. Such sharing is always governed by strict confidentiality agreements.</li>
                        <li><strong>Legal and Regulatory Compliance:</strong> Your information may be disclosed if mandated by law, compelled by a court order, or deemed necessary to protect the legitimate rights, property, or safety of SIMT, our students, or the wider public. This includes cooperation with lawful requests from governmental or regulatory bodies.</li>
                        <li><strong>Associated Entities:</strong> Information may be shared with other institutions or initiatives operating under the umbrella of the SHRI KRISHNA EDUCATIONAL SOCIETY for administrative or operational coherence, always upholding consistent privacy standards.</li>
                        <li><strong>Academic Affiliates:</strong> In specific instances, data may be shared with affiliated universities (e.g., AKTU) or accreditation authorities (e.g., AICTE) for the verification of academic credentials or compliance with program guidelines.</li>
                    </ul>
                </div>

                <div class="content" id="cookies_and_tracking_technologies">
                    <h4>5. Cookies and Tracking Technologies</h4>
                    <p>Our website utilizes cookies and similar tracking technologies to enhance your Browse experience, analyze site traffic, and support the delivery of our educational content. These technologies enable us to understand user behavior and tailor our services accordingly. You retain the right to manage your cookie preferences through your web browser settings. Please note that disabling certain cookies may impact the full functionality and user experience of our platform.</p>
                </div>

                <div class="content" id="your_data_protection_rights_and_choices">
                    <h4>6. Your Data Protection Rights and Choices</h4>
                    <p>SITASRM Institute of Management and Technology (SIMT) respects your rights regarding your personal data:</p>
                    <ul>
                        <li><strong>Access and Correction:</strong> You have the right to request access to your personal information and to have any inaccuracies corrected or updated</li>
                        <li><strong>Erasure (Right to Be Forgotten):</strong> You may request the deletion of your personal information, subject to any overriding legal obligations or legitimate operational requirements.</li>
                        <li><strong>Opt-out of Communications:</strong> You have the option to unsubscribe from marketing and promotional communications.</li>
                        <li><strong>Withdrawal of Consent:</strong> Should our processing of your data be based on your consent, you are entitled to withdraw that consent at any time, impacting future processing.</li>
                        <li><strong>Data Portability:</strong> You may request a copy of the personal data you have provided to us in a structured, commonly used, and machine-readable format.</li>
                    </ul>
                    <p>To exercise any of these rights, please contact our designated Grievance Redressal Officer using the contact details provided in this policy.</p>
                </div>

                <div class="content" id="data_security_measures">
                    <h4>7. Data Security Measures</h4>
                    <p>We implement robust technical and organizational security protocols designed to protect your information from unauthorized access, disclosure, alteration, or destruction. While we strive for comprehensive data protection, it is important to acknowledge that no method of internet transmission or electronic storage is entirely e is entirely infallible. Consequently, absolute security cannot be guaranteed. Users are advised to take personal precautions, such as safeguarding their login credentials.</p>
                </div>

                <div class="content" id="data_retention_principles">
                    <h4>8. Data Retention Principles</h4>
                    <p>We retain your personal information only for the duration necessary to fulfill the purposes for which it was originally collected, including adherence to legal, accounting, or reporting obligations. The specific retention period is determined by factors such as the type of data, the purpose of its collection, and any relevant statutory requirements. Academic records, for instance, may be retained for longer periods as required by educational regulations.</p>
                </div>

                <div class="content" id="external_website_links">
                    <h4>9. External Website Links</h4>
                    <p>Our website may feature links to external third-party websites that are not under the operational control of SIMT. This Privacy Policy exclusively applies to SITASRM Institute of Management and Technology's website and services. We bear no responsibility for the privacy practices or the content of any external websites. We strongly advise you to review the privacy policies of any third-party sites you choose to visit.</p>
                </div>
                <div class="content" id="privacy_concerning_minors">
                    <h4>10. Privacy Concerning Minors</h4>
                    <p>Our academic and digital services are not intended for individuals under the age of 18. We do not knowingly collect personal data from minors. If you are a parent or legal guardian and believe that your child has provided us with personal information, please contact us immediately. We will take prompt action to remove such information and, if applicable, terminate the minor's account.</p>
                </div>


                <div class="content" id="international_data_transfer_policy">
                    <h4>11. International Data Transfer Policy</h4>
                    <p>SITASRM Institute of Management and Technology (SIMT) primarily conducts its operations within the geographical boundaries of India. As such, your personal data will typically be stored and processed within India. Our current operational model does not generally involve the transfer of data outside of India for the services provided through our platform. Should circumstances necessitate international data transfers in the future, we commit to implementing appropriate safeguards to ensure robust data protection in compliance with applicable regulations.</p>
                </div>


                <div class="content" id="amendments_to_this_privacy_policy">
                    <h4>12. Amendments to This Privacy Policy</h4>
                    <p>We reserve the right to revise this Privacy Policy periodically to reflect changes in our data handling practices or to comply with evolving legal requirements. Any modifications will be posted on this page, accompanied by an updated effective date. We encourage you to regularly review this Privacy Policy for any changes. Significant amendments will be communicated to you as required by prevailing laws.</p>
                </div>

                <div class="content" id="grievance_redressal_officer">
                    <h4>13. Grievance Redressal Officer</h4>
                    <p>For any inquiries, concerns, or grievances related to this Privacy Policy or the handling of your personal data, please direct your correspondence to our designated Grievance Redressal Officer:</p>
                    <p><strong>Contact:</strong> <a href="tel:01204109418 ">0120-4109418 </a> | <a href="tel:01204106050">0120-4106050</a></p>
                    <p><strong>Name and Address of the Institution:</strong> SITASRM Institute of Management and Technology, Plot No. 25/1, Knowledge Park III, Greater Noida, Uttar Pradesh 201310 </p>
                </div>

                <div class="content" id="contact_information">
                    <h4>14. Contact Information</h4>
                    <p>Should you have any questions regarding this Privacy Policy or wish to discuss any aspect of our data practices, please do not hesitate to contact us:</p>
                    <p><strong>Phone:</strong> <a href="tel:+919560201536">+91-9560-201-536</a> | <a href="tel:+919560339929">+91-9560-339-929</a>, <a href="tel:01204109418">0120-4109418</a></p>
                    <p><strong>Email:</strong> <a href="mailto:admissions@simt.net.in">admissions@simt.net.in</a> <a href="mailto:info@simt.net.in">info@simt.net.in</a> 
                    (For admission-related inquiries, please contact 
                    <a href="mailto:admissions@sitasrm.ac.in">admissions@sitasrm.ac.in</a>)</p>
                    <p><strong>Mailing Address:</strong> SITASRM Institute of Management and Technology, Plot No. 25/1, Knowledge Park III, Greater Noida, Uttar Pradesh 201310</p>
                    <p><strong>Website:</strong> <a target="__blank" href="https://simt.net.in">SIMT Official Website</a></p>
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