@extends('frontend.layout')
@section('title', 'Admission')

<link rel="stylesheet" href="{{asset('css/test-form.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<style>               
        .content{
            margin: 20px;
            scroll-margin-top: 200px;
        }  
        .content a{
            font-weight: bold;
            color: royalblue !important;
        } 

        .owl-carousel .item{
            padding: 10px 0px;
        }
        .owl-carousel .item img {
            width: 90%;
            height: 200px; /* Adjust as needed */
            object-fit: contain;
            border-radius: 10px;
            background-blend-mode: color-burn;
            mix-blend-mode: multiply;            
        } 

        .carousel-fade-wrapper {
            position: relative;
            overflow: hidden;
        }

        /* Left Fade */
        .carousel-fade-wrapper::before,
        .carousel-fade-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            width: 60px;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }

        .carousel-fade-wrapper::before {
            left: 0;
            background: linear-gradient(to right, white, transparent);
        }

        .carousel-fade-wrapper::after {
            right: 0;
            background: linear-gradient(to left, white, transparent);
        }
                
        
        .container{
            position: relative;
        }
        .navbar-container{
            position: sticky;
            top: 0;
            left: 0;         
            width: 100%;   
            z-index: 1000; /* Higher than other elements to keep it on top */
        }

        .boxes{
            display: flex;
            gap: 10px;
        }
        .box1{
            border-right: 1px solid #888;
        }
        .box{
            min-width: 130px;
            display: flex;
            flex-direction: column;
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

        .contact{
            padding: 10px;
            background-color: var(--e-global-color-primary) !important;
            color: #fff;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 20px;            
            border-radius: 10px;
        }
        .contact h4{
            color: #fff;
        }
        .btn-contact{
            background-color: #fff !important;
            color: #000 !important;
            color: var(--e-global-color-primary) !important;
            border-radius: 10px !important;
            float: right !important;
        }  
    .accreditation-section {
        padding: 40px 0px;        
        background-color: transparent;        
      }
      
      .accreditation-section h3 {
        font-size: 22px;
        font-weight: 700;
        color: #0c1e41; /* dark navy */
        margin-bottom: 30px;
      }
      
      .accreditation-logos {
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
        gap: 30px;
      }
      
      .accreditation-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 150px;
      }
      
      .accreditation-item img {
        height: 60px;
        object-fit: contain;
        margin-bottom: 10px;
      }
      
      .accreditation-item p {
        margin: 0;
        font-size: 14px;
        font-weight: 500;
        color: #333;
        text-align: center;
      }

      .download-btn{
        border-radius: 0 !important;
        padding: 13px !important;
      }

      .banner-2 {
            height: 73vh;
            position: relative;            
            display: flex;
            justify-content: flex-end;
            align-items: center;            
            padding: 2rem;
            color: white;            
            background-position-x: center;
            background-position-y: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .banner-dark{
            position: relative;
        }

        .baner-dark::before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Dark overlay */
            z-index: 1;
        }
        .banner-content2{
            position: absolute;
            z-index: 2;
            max-width: 700px;
            color: white;            
            padding: 20px;
            border-radius: 10px;
            right: 50px;
        }

        .banner-content2 h1{
            color: #fff !important;
            font-size: 50px !important;
        }
        .banner-content2 h4{
            color: #fff !important;
            font-size: 24px !important;
        }

        .content li{        
            font-size: 18px;
            line-height: 2;
            margin-bottom: 20px;
        }

        @media screen and (max-width:768px) {
        .banner-2 {
            background-position-x:20%;
        }
        .banner-content2 {
            position: absolute;
            z-index: 2;
            max-width: 350px;
            color: white;            
            padding: 20px;
            border-radius: 10px;
            bottom: 0px;
            left: 0px;            
            /* transform: translateY(-50%); */
        }   
        .banner-content2 h1{
            font-size: 24px !important;
        }

        .banner-content2 h4{
            font-size: 16px !important;
        }
        .banner-content2 p{
            font-size: 12px !important;
        }
    }

</style>
@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304" style="background-color: #fff;">        
    {{-- <section class="banner-2 baner-dark" style="background-image: url('../images/cse_banner3.jpg');">    
        <div class="banner-content2">
            <h1 style="">Computer Science and Engineering</h1>            
            <h4>Transform Your Passion for Technology into a Rewarding Career</h4>
            <p style="color:#fff;"><i>Applying for SERI’s B.Tech. – Computing Science and Engineering program provides a comprehensive education in core CSE principles and cutting-edge technologies.</i></p>
        </div>
    </section> --}}

    <section class="container-lg"style="padding: 10px 40px;">
        <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
            data-id="66a6537" data-element_type="widget"
            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
            data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">SIMT-SITASRM Institute of Management and Technology | <br>Admissions 2025-26</h2>                                                        
            </div>
        </div>
        <br>
        <h4>More Than a College—It’s a Launchpad for Innovators!</h4>            
        <b>Limited seats for BCA, BBA, MCA, and MBA. Dual Specializations. Scholarships Available.</b>              
    </section>
    <div class="container p-4" style="padding: 10px 40px;">        
        <section>
            <div class="content" id="why_choose_seri">
                <h2>Why SIMT?</h2>
                <ul>
                    <li>AICTE Approved | AKTU Affiliated</li>
                    <li>Dual Specialization MBA (HR, Finance, Marketing, IT, and more.)</li>
                    <li>BBA/BCA with Future-Skills Focus: AI, Digital Marketing, Analytics</li>
                    <li>Over 7-Acre Tech-Enabled Campus</li>
                    <li>24/7 R&D Innovation Hub</li>
                    <li>Student Start-Up Incubation</li>
                    <li>100% Placement Assistance & Skill Workshops</li>
                </ul>                
            </div>

            <div class="navbar-box" style="position: sticky;top: 85px; margin-bottom:100px;z-index: 994; background-color:#fff;padding:5px;">
                <nav class="navbar" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 1);">
                    <ul style="display: flex;">                    
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#academic_offering">Academic Offerings</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#admission_process">Admission Process</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#check_list">Checklist </a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#research">Research, Community, and Student Value</a></li>                                      
                    </ul>
                </nav>
            </div>

            <div class="content eligibility" id="academic_offering">
                <h2>Academic Offerings</h2>       
                <b>Undergraduate Programs</b>
                <ul>
                    <li><strong>BBA / BCA</strong> – Duration: 3 Years | Eligibility: 10+2 (Min. 45%)</li>                    
                </ul>

                <b>Postgraduate Programs</b>
                <ul>
                    <li><strong>MBA (Dual Specialization)</strong> – 2 Years | Eligibility: Graduate (Min. 50%)</li>
                    <li><strong>MCA</strong> – 2 Years | Eligibility: Graduate in CS/IT/Maths (Min. 50%)</li>
                </ul>

                <i><b>👉 Flexible admissions with counseling and expert guidance.</b></i>
            </div>
            
            <div class="content" id="admission_process">
                <h2>Admission Process</h2>
                <b>5-Step Entry Path:</b>
                <ul>
                    <li><strong>Apply Online: </strong><a href="https://simt.net.in/apply-now">https://simt.net.in/apply-now</a></li>
                    <li><strong>Document Submission : </strong>Marksheets, ID, Certificates</li>
                    <li><strong>Entrance Test / Interview (as per norms)</strong></li>
                    <li><strong>Offer Letter & Fee Submission</strong></li>
                    <li><strong>Start Your Journey @ SIMT</strong></li>
                </ul>
            </div>

            <div class="content" id="check_list">
                <h2>Essential Checklist</h2>
                <p>Ensure you're ready to enroll with these:</p>
                <ul>
                    <li>Provisional Allotment Letter</li>
                    <li>10th/12th/Graduation Marksheet</li>
                    <li>ID & Domicile (for UP students)</li>
                    <li>Income, Caste & Medical Certificates</li>
                    <li>Anti-Ragging Affidavit</li>
                </ul>
            </div>

            <div class="content" id="research">
                <h2>Research, Community, and Student Value</h2>
                <h4>Innovation & Research Cell</h4>
                <ul>
                    <li>Hands-on R&D with real industry problems</li>
                    <li>Student incubation and startup mentoring</li>
                    <li>Workshops, Hackathons, CFA/Analytics Certifications</li>
                </ul>
                <br>
                <h4>Campus Life & Culture</h4>
                <ul>
                    <li>Wi-Fi enabled smart campus</li>
                    <li>Cultural and Sports events</li>
                    <li>Premium Cafeterias</li>
                    <li>Safe hostels & seamless transport</li>
                    <li>Mentorship, networking, and career fairs</li>
                </ul>
                <br>
                <h4>Value & Support</h4>
                <ul>
                    <li>Affordable, value-driven education</li>
                    <li>Merit-based Scholarships</li>
                    <li>Strong Placement Network with Industry Partners</li>
                    <li>Personalized Guidance & Support</li>
                </ul>
            </div>

            <div class="content" style="margin: 0px;">
                <h2 class="text-center">Industry Alliances</h2>
            </div>
            <div class="carousel-fade-wrapper">                
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="{{asset('recruiters/image1.png')}}" alt="Image 1" width="70" height="70"></div>
                    <div class="item"><img src="{{asset('recruiters/image2.png')}}" alt="Image 2" width="60" height="60"></div>
                    <div class="item"><img src="{{asset('recruiters/image3.png')}}" alt="Image 3" width="60" height="50" style="width: 50%; align-self:center; margin:auto;"></div>
                    <div class="item"><img src="{{asset('recruiters/image4.png')}}" alt="Image 4" width="100" height="70" style="width: 80%; align-self:center; margin:auto;"></div>
                    <div class="item"><img src="{{asset('recruiters/image5.png')}}" alt="Image 5" width="70" height="70" style="width: 80%; align-self:center; margin:auto;"></div>
                    <div class="item"><img src="{{asset('recruiters/image6.png')}}" alt="Image 6" width="70" height="70" style="width: 80%; align-self:center; margin:auto;"></div>        
                    <div class="item"><img src="{{asset('recruiters/image7.png')}}" alt="Image 7" width="70" height="70" style="width: 80%; align-self:center; margin:auto;"></div>        
                    <div class="item"><img src="{{asset('recruiters/image8.png')}}" alt="Image 8" width="70" height="70" style="width: 80%; align-self:center; margin:auto;"></div>        
                    <div class="item"><img src="{{asset('recruiters/image9.png')}}" alt="Image 9" width="60" height="60" style="width: 80%; align-self:center; margin:auto;"></div>                
                    <div class="item"><img src="{{asset('recruiters/image10.png')}}" alt="Image 10" width="60" height="60" style="width: 80%; align-self:center; margin:auto;"></div>                                    
                </div>
            </div>  
            

            <div class="content" id="how_to_apply">
                <h2>Admission Support</h2>    
                <p>Have questions or need assistance? Our admissions team is here to help you choose the right program and guide you through the application process.</p>

                <p>Live Chat / Call/ Whatsapp:  <br> Visit our website at <a href="https://simt.net.in">https://simt.net.in</a> or message us on +91-9560201536 | 9560339929</p>
                <p>Email: admissions@simt.edu.in <br> We typically respond within 24 hours.</p>
                <p>Campus Address: <br>
                    SITASRM Institute of Management and Technology (SIMT)
                    Plot No. 3B, Knowledge Park-III
                    Greater Noida – 201310, Uttar Pradesh, India</p>

                <p>Live Chat / WhatsApp: <br>Message or Call us on WhatsApp at +91-9560201536</p>
                <p>You can also request a callback, speak with a counselor, or book a campus tour.
                    We are here to support you at every step.</p>
            </div>   
                        
            <hr>
            <div class="content contact">
                <h4 style="color: #fff;">Speak with our counselors to explore your options and know more about programs</h4>
                <button class="btn-contact btn btn-lg">Schedule a Call</button>
            </div>
        </section>
    </div>    
</div>

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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>   

  <!-- JS Script to handle dynamic document loading -->
  <script>
    document.querySelectorAll('.view-doc-btn').forEach(btn => {
      btn.addEventListener('click', function () {
        const docPath = this.getAttribute('data-doc_name');
        document.getElementById('docFrame').src = docPath;
        // document.getElementById('downloadLink').href = docPath;

        const modal = new bootstrap.Modal(document.getElementById('documentModal'));
        modal.show();
      });
    });

    function printIframe() {
      const iframe = document.getElementById('docFrame');
      iframe.contentWindow.focus();
      iframe.contentWindow.print();
    }
  </script>


<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000, // <- no delay between transitions
            autoplaySpeed: 2500, // <- smooth & long transition time
            smartSpeed: 2500,
            dots: false,
            nav: false,
            slideTransition: 'linear', // <- enables smooth motion
            responsive: {
                0: { items: 3 },
                600: { items: 5 },
                1000: { items: 7 }
            }
        });
    });
</script>
@endsection

