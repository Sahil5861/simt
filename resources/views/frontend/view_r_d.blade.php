@extends('frontend.layout')
@section('title', 'R & D cell')

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
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304">
    {{-- here it is --}}      
    <section class="banner" style="background: url('../images/r&d_image2.png') no-repeat center center / cover;">
        <div class="banner-content" style="max-width: 800px;">
            <h1 style="">Innovate, Design, Inspire at SIMT’s Centre for Innovation and Research Excellence</h1>            
            <p>Looking for more than just a degree in management or technology? Come be part of the transformation at SIMT’s Innovation & Research Cell, where curiosity meets creation and ambition leads to impact.</p>
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
                    <h4>Release Your Inner Innovator at SITASRM Institute of Management and Technology (SIMT)</h4>                   
                    <p>At SIMT, we don’t just teach management and technology—we prepare you to shape the future of business and innovation. Our Research and Innovation Cell is a powerhouse of creativity and collaboration, where students and faculty work together to solve real-world problems in business and technology.</p>
                    <p>Whether your interest lies in AI & Data Analytics, Digital Business, or cutting-edge applications of technology in management, this is your lab, your launchpad, and your legacy.</p>
                </div>

                <div class="content">
                    <h4>Why SIMT’s R&D Cell is Your Innovation HQ:</h4>
                    <li style="list-style: disc;">Hands-on R&D on real-world business and technology challenges</li>
                    <li style="list-style: disc;">Strong ties with industry for practical exposure in management and technology sectors</li>
                    <li style="list-style: disc;">Regular interaction with entrepreneurs & thought leaders in the business and tech world</li>
                    <li style="list-style: disc;">Incubation support for student startups focused on tech-driven business solutions</li>
                    <li style="list-style: disc;"> Participate in expos, conferences, competitions</li>
                    <li style="list-style: disc;">24/7 access to digital tools, simulation software, and relevant resources</li>
                    <li style="list-style: disc;">Utilize the expertise of faculty and labs for innovation and research</li>
                    <li style="list-style: disc;">Guided mentorship by experienced faculty and industry professionals</li>
                    <li style="list-style: disc;">Workshops, hackathons, exhibitions & more, centered on management and technology innovation</li>

                    <b>At SIMT, we convert ideas into execution, empowering students to experiment, invent, and excel in the fields of management and technology.</b>

                </div>

                <div class="content">
                    <h4>SIMT’s Innovation Journey: 5 Simple Steps</h4>
                    <ul>
                        <li style="list-style: decimal;"><strong>Find your Passion - </strong>Discover your spark in management and technology</li>
                        <li style="list-style: decimal;"><strong>Define the Problem - </strong>Focus on real-life business and tech applications</li>
                        <li style="list-style: decimal;"><strong>Design a Solution –</strong>Collaborate with our expert mentors</li>
                        <li style="list-style: decimal;"><strong>Develop a Prototype - </strong>Utilize SIMT’s innovation resources</li>
                        <li style="list-style: decimal;"><strong>Deploy Your Idea - </strong>Present at college expos, demos, and competitions</li>
                    </ul>
                </div>

                <div class="content">
                    <h4>Transform Ideas into Impact</h4>
                    <ul>
                        <li style="list-style: disc;">Have ideas but need space and tools at a Management and Technology Institute?</li>
                        <li style="list-style: disc;">Want expert mentorship to develop your projects?</li>
                        <li style="list-style: disc;">Want to work with real companies?</li>
                        <li style="list-style: disc;">Dream of launching a startup?</li>                        
                    </ul>
                    <p>If you said YES to any of these—you belong at SIMT!</p>
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