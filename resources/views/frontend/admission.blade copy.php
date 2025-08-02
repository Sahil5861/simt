@extends('frontend.layout')
@section('title', 'Admission')

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

</style>

@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304">
    {{-- here it is --}}
    <div class="elementor-element elementor-element-3701d24 e-flex e-con-boxed e-con e-parent e-lazyloaded" style="
    height:90vh !important;width:100% !important; bcakground-image:url('..images/homebanner_2.jpg') center center / cover no-repeat;
    "
        data-id="3701d24" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-0873433 e-con-full e-flex e-con e-child"
                data-id="0873433" data-element_type="container">
                <div class="elementor-element elementor-element-f7bba5a elementor-widget elementor-widget-heading animated fadeInLeft"
                    data-id="f7bba5a" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="heading.default">                     
                </div>
                <div class="elementor-element elementor-element-9dac90b e-flex e-con-boxed e-con e-child"
                    data-id="9dac90b" data-element_type="container">                    
                </div>
            </div>
        </div>
    </div>    

    <section class="container-lg p-4">
        {{-- <p style="font-family: Arial, Helvetica, sans-serif; margin: 30px 0 50px 0;">HOME > <span class="text-primary">ADMISSIONS</span></p> --}}
        <div class="row d-flex flex-column-reverse flex-lg-row">
            <div class="col-lg-9 main" style="font-family:Arial, Helvetica, sans-serif;">
                <h1 style="margin:20px 0; font-weight:100; line-height:1.6;">Your Path to {{env('COLLEGE_NAME_SHORT')}}</h1>
                <h3 style="margin:20px 0; line-height:1.5;">Welcome to SITASRM Institute of Management and Technology (SIMT), where we're shaping the leaders of tomorrow</h3>


                <div class="content">
                    <h2>Why Choose {{env('COLLEGE_NAME_SHORT')}}?</h2>
                    <li style="margin:20px 0;"><strong>Future-Ready Learning</strong>: Our industry-aligned curriculum is designed for your career success in an agile corporate landscape.</li>
                    <li style="margin:20px 0;"><strong>Industry Edge</strong>: Gain practical experience through live projects, internships, and certifications.</li>
                    <li style="margin:20px 0;"><strong>Tech-Empowered Campus</strong>: Learn in smart labs and modern learning spaces, equipped with the latest technology.</li>
                    <li style="margin:20px 0;"><strong>Comprehensive Programs</strong>: We offer a range of programs including BBA, BCA, MBA, and MCA, along with future skills programs like Artificial Intelligence, Digital Marketing, and more.</li>
                    <li style="margin:20px 0;"><strong>Holistic Development</strong>: Beyond academics, we focus on nurturing your potential through career services, skill enhancement workshops, and mentorship programs.</li>
                    <li style="margin:20px 0;"><strong>Strategic Career Path</strong>: Benefit from our strategic placement pathways, powerful industry network, and dedicated placement assistance.</li>
                    <li style="margin:20px 0;"><strong>Innovation Meets Learning</strong>: At SIMT, we're committed to fostering a culture of innovation and research.</li>
                    <li style="margin:20px 0;"><strong>Accredited Excellence</strong>: SIMT is approved by AICTE and affiliated to AKTU, ensuring a high standard of education.</li>
                </div>


                <section class="content">                                    
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
                    <h2>Program Insights</h2>
                    <li style="margin:20px 0;"><strong>BCA (Bachelor of Computer Applications)</strong>: Duration 3 Years, Eligibility: 10+2 with minimum 45%</li>
                    <li style="margin:20px 0;"><strong>BBA (Bachelor of Business Administration)</strong>: Duration 3 Years, Eligibility: 10+2 with minimum 45%</li>
                    <li style="margin:20px 0;"><strong>MCA (Master of Computer Applications)</strong>: Duration: 2 Years, Eligibility: Graduation with minimum 50% in a relevant field like Computer Science, IT, or Mathematics</li>
                    <li style="margin:20px 0;"><strong>MBA (Master of Business Administration) with Dual Specializations</strong>:</li>
                    <ul style="margin-left: 20px;">
                        <li style=" list-style:circle; !mportant;">HR</li>
                        <li style=" list-style:circle; !mportant;">Marketing</li>
                        <li style=" list-style:circle; !mportant;">Finance</li>
                        <li style=" list-style:circle; !mportant;">IT</li>
                        <li style=" list-style:circle; !mportant;">IB</li>
                        <li style=" list-style:circle; !mportant;">Operations</li>
                        <li style=" list-style:circle; !mportant;">Business Analytics</li>
                    </ul>
                    <li style="margin:20px 0;">Duration: 2 Years, Eligibility: Graduation with minimum 50%</li>
                </div>
                
                <div class="content">
                    <h2>Our Learning Edge</h2>
                    <li style="margin:20px 0;"><strong>Dynamic & Futuristic Education</strong>: We provide immersive and future-ready business education.</li>
                    <li style="margin:20px 0;"><strong>Cutting-Edge Skills</strong>: Equip students with the latest industry skills and tech competence.</li>
                    <li style="margin:20px 0;"><strong>Creativity & Leadership</strong>: Cultivate strategic thinking, innovation, and leadership agility.</li>
                    <li style="margin:20px 0;"><strong>Innovation & Research</strong>: Drive progress through research and industry collaborations.</li>
                    <li style="margin:20px 0;"><strong>Global & Ethical Mindset</strong>: Develop critical thinking with a strong ethical foundation and international exposure.</li>
                    <li style="margin:20px 0;"><strong>World-Class Learning Environment</strong>: Experience a tech-powered, modern academic ecosystem.</li>
                </div>
                
                <div class="content">
                    <h2>Campus Life Beyond Classrooms</h2>
                    <li style="margin:20px 0;"><strong>Your Home Away From Home</strong>: Safe and comfortable accommodations fostering community and belonging.</li>
                    <li style="margin:20px 0;"><strong>Future-Driven Learning</strong>: Tech-enabled spaces with seamless Wi-Fi across our 9.47-acre campus.</li>
                    <li style="margin:20px 0;"><strong>Premium Dining</strong>: Enjoy diverse, delicious meals at our top-tier cafeterias.</li>
                    <li style="margin:20px 0;"><strong>Vibrant Culture & Sports</strong>: Engage in exciting extracurricular activities and discover your passions.</li>
                    <li style="margin:20px 0;"><strong>Easy & Convenient Transport</strong>: Well-connected transport facilities for effortless commuting.</li>
                    <li style="margin:20px 0;"><strong>Career & Skill Development</strong>: Gain an edge with mentorship programs, workshops, and career services.</li>
                    <li style="margin:20px 0;"><strong>Holistic Growth</strong>: Enrich your journey with industry interactions and comprehensive extracurriculars.</li>
                </div>


                <div class="content">
                    <h2>Our Vision and Mission</h2>
                    <li style="margin:20px 0;"><strong>Vision</strong>: To be a globally recognized hub for leadership incubation, shaping agile, ethical, and forward-thinking professionals who drive sustainable business transformations.</li>
                    <li style="margin:20px 0;"><strong>Mission</strong>: To empower aspiring and next-generation leaders with transformative learning experiences that integrate sustainability, analytical thinking, and innovation, enabling them to thrive in a rapidly progressing corporate world.</li>
                </div>
                
                <div class="content">
                    <h2>Admissions Details</h2>
                    <li style="margin:20px 0;"><strong>Now Open</strong>: Admissions for the 2025-26 batch are currently open.</li>
                    <li style="margin:20px 0;"><strong>Contact Us</strong>: For inquiries, reach out at <a href="mailto:admissions@simt.edu.in">admissions@simt.edu.in</a>.</li>
                    <li style="margin:20px 0;"><strong>Visit Our Website</strong>: <a href="http://www.simt.net.in/" target="_blank">www.simt.net.in</a></li>
                    <li style="margin:20px 0;"><strong>Call Us</strong>: +91-9560201536, 9560990539, 9560339929</li>
                </div>
                
                
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 nav-responsive-div">
                <ul class="nav-list nav-responsive">                    
                    <li><a href="#apply-now">Apply Now</a></li>
                    <li><a href="#courses-offered">Courses Offered</a></li>
                    <li><a href="#eligibility-criteria">Eligibility Criteria</a></li>
                    <li><a href="#fee-structures">Fee Structures</a></li>
                    <li><a href="#document-checklist">Document Checklist</a></li>
                    <li><a href="#anti-ragging">Online Anti Ragging Affidavit Procedure</a></li>
                    <li><a href="#college-rules">College Rules and Regulations</a></li>
                    <li><a href="#prospectus">Prospectus</a></li>
                    <li><a href="#admissions-policy">Admissions Policy</a></li>
                    <li><a href="#undergraduate">Undergraduate</a></li>
                    <li><a href="#graduate-schools">Graduate & Professional Schools</a></li>
                </ul>                
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