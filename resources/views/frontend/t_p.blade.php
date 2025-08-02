@extends('frontend.layout')
@section('title', 'Corporate resource cell')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

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
        list-style:none;
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


        .banner {
            height: 90vh;
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

    .important-heading {
        position: relative;
        display: inline-block;
        text-align: center;
    }

    .important-heading .asterisk {
        position: absolute;
        top: 0px;
        left: 100%;
        transform: translateX(-50%);
        color: red;
        font-size: 20px;
        font-weight: bold;
    }

</style>

@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304" style="background: #fff;">
    {{-- here it is --}}      
    <div class="banner" style="background: url('../images/tp_banner_new.jpg') no-repeat top center / cover;"></div>
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
                <h1 style="margin:20px 0; font-weight:100; line-height:1.6;">Training and Placement @ SIMT</h1>                                
                <br>
                <h5>Bridging Academia and Industry for Career Success</h5>
                <br>

                <p>At SITASRM Institute of Management and Technology (SIMT), we are deeply committed to nurturing future leaders and innovators by bridging the gap between academic learning and industry demands.</p>
                <p>Our dedicated Training and Placement efforts focus on equipping students with the necessary skills, knowledge, and practical experience to excel in their chosen careers across diverse industry verticals. This approach prepares them to secure positions in leading national and international Multinational Corporations (MNCs). </p>
                <br>
                <div class="content"> 
                    <h4>Comprehensive Training & Skill Development</h4>     
                    <p>SIMT believes in learning beyond theory. Our training methodology emphasizes practical application and holistic development:</p>                                  
                    <ul>
                        <li style="list-style: disc;" ><strong>Experiential Learning:</strong> We prioritize hands-on experience through live projects, challenging industry partnerships, and internships, ensuring students graduate with a portfolio of real-world skills.  </li>
                        <li style="list-style: disc;" ><strong>Industry-Aligned Curriculum:</strong> Our courses are designed in collaboration with industry experts to ensure relevance and alignment with current market needs and emerging technologies. </li>
                        <li style="list-style: disc;" ><strong>Skill Enhancement:</strong> We conduct regular workshops and certification programs focused on enhancing both technical and soft skills, including communication, leadership, critical thinking, and specific management/technology tools. </li>
                        <li style="list-style: disc;" ><strong>Value-Added Certifications:</strong> To give our students a competitive edge, we offer training for prestigious certifications such as CFA, CISI, Six Sigma, Python, R, and SPSS. </li>
                        <li style="list-style: disc;" ><strong>Industry Interaction:</strong> Students benefit from regular guest lectures, seminars, workshops, and panel discussions featuring experts and leaders from various industries, providing invaluable insights into corporate realities. </li>
                    </ul>
                </div>

                <section class="content">                                    
                    <div class="container mt-4">
                        <h2 class="text-center mb-4">Dedicated Placement Support & Industry Connect</h2>
                        <div class="row p-0">
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Placement Cell</div>
                                    <div class="accordion-content">
                                        <p> SIMT has dedicated placement support providing career advice, mentorship, and assistance throughout the placement process.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Strong Industry Linkages</div>
                                    <div class="accordion-content">
                                        <p>We maintain strong ties and collaborations with over leading companies and organizations, facilitating internships and final placements. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Placement Preparation</div>
                                    <div class="accordion-content">
                                        <p>We integrate placement training from the beginning, offering tailored workshops, resume-building sessions, and mock interviews to prepare students for success. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Mentorship</div>
                                    <div class="accordion-content">
                                        <p>Students receive guidance through joint mentoring programs involving both experienced faculty and industry professionals.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Placement Success</div>
                                    <div class="accordion-content">
                                        <p>SIMT strives for excellent placement outcomes, connecting students with opportunities in leading national and international MNCs across diverse sectors. We are proud of our strong placement success rate.  </p>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="col-md-6 mb-3">
                                <div class="accordion-item">
                                    <div class="accordion-header btn-primary_2 text-light"><i class="fa-solid fa-angles-right"></i> Global Career Opportunities</div>
                                    <div class="accordion-content">
                                        <p>SIMT prepares students to excel in a competitive global market by equipping them with cross-cultural competencies and language skills, alongside exposure to international business practices</p>
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
                                <div class="elementor-widget-container">                                    
                                    <h3 class="elementor-heading-title elementor-size-default">Our Recruiters<sup style="color: #000;">*</sup></h3>
                                </div>
                            </div>    
                            <p>SIMT partners with a wide network of leading companies and organizations, including prominent national and international MNCs, to provide diverse career opportunities for our graduates. </p>                    
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <img src="{{asset('images/recruiters_logo.jpg')}}" alt="images" width="100%" height="100%">
                        </div>
                    </div>                                   
                </div>                
                <div class="content">
                    <h4>Contact Training & Placement</h4>
                    <p>For inquiries regarding internships, placements, or industry collaborations, please contact: +91-9560-990-539, +91-9560-550-691</p>                    
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