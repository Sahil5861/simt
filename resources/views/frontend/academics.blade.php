@extends('frontend.layout')
@section('title', 'Academics Infrastructure')

<link rel="stylesheet" href="{{asset('css/tabs_container.css')}}">
<link rel="stylesheet" href="{{asset('css/test-form.css')}}">
<style>
    .content{
        margin: 30px 0;
    }
    .content .img{
        width: 100%;
        min-height: 15rem;
        max-height: 15rem;
        object-fit: cover;
        animation: fade-up 1s linear;        
    }

    @keyframes fadeUp {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .img.fade-up {
        animation: fadeUp 1s ease forwards;
    }
</style>
@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304" style="background-color: #fff;">
    {{-- here it is --}}      

    <div class="banner" style="background: url('../images/academics_banner.jpg') no-repeat center center / cover;">
        <div class="banner-content">
            <h1>SIMT-Academic Infrastructure</h1>
            <p><i>Pioneering education in management and technology with world-class facilities and visionary learning.</i></p>
        </div>
    </div>    
    <section class="container-lg p-4">        
        <div class="row d-flex flex-column-reverse flex-lg-row">
            <div class="col-lg-12 main" style="font-family:Arial, Helvetica, sans-serif;">
                <h1 style="margin:20px 0; font-weight:100; line-height:1.6;">Academic Infrastructure @ SIMT</h1>                
                    <p><strong>SITASRM Institute of Management and Technology (SIMT)</strong> is committed to delivering a vibrant academic ecosystem that fosters excellence in learning, research, and innovation. Located in the academic heart of Greater Noida (Delhi NCR), SIMT provides a compact, modern campus with well-planned facilities, convenient student accommodation, and seamless access to urban amenities. The academic infrastructure at SIMT is designed to provide a comprehensive and empowering educational experience.</p>
                <br>                                                                                                 
            </div>            
        </div>

        <div class="content">
            <h4>Laboratories</h4>
            <p>The departments at SIMT are equipped with state-of-the-art laboratories that support practical learning and applied research. These labs are designed to cater to the requirements of various undergraduate and postgraduate programs.</p>
            <p>All laboratories are furnished with essential equipment, software tools, and consumables, offering students ample opportunities to experiment, innovate, and explore.</p>
            <p>Every lab is managed by experienced staff to assist students and faculty.</p>

            <b>SIMT’s Laboratory Facilities Include:</b>
            <br>
            <strong>BCA Labs</strong>
            <ul>
                <li>Programming Lab</li>
                <li>DBMS Lab</li>
                <li>Web Technology Lab</li>
                <li>Computer Organisation and Architecture lab </li>
            </ul>

            <strong>MCA Labs</strong>
            <ul>
                <li>Advance Programming Lab</li>
                <li>Software engineering Lab</li>
                <li>Network Programming Lab</li>
                <li>Cloud Computing lab </li>
            </ul>

            <strong>COMMON LABS <sup>*</sup></strong>
            <ul>
                <li>Language & Communication skill Lab (English, French, German etc)</li>
                <li>AI Lab </li>
                <li>Simulation Lab </li>
                <li>Incubation Lab</li>
                <li>Research Lab</li>
                <li>Cyber security & Network Lab </li>
                <li>Iot & embedded systems lab</li>
                <li>Digital Marketing & Consumer insight Lab</li>
                <li>Business Simulation & strategy Lab</li>
                <li>Financial marketing & trading Lab</li>
            </ul>

            <div class="row">
                {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img class="img fade-up" src="{{asset('academics/lab_images/lab1.jpg')}}" alt="image">
                </div> --}}


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img class="img fade-up" src="{{asset('academics/lab_images/lab2.jpg')}}" alt="image">
                </div>


                {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img class="img fade-up" src="{{asset('academics/lab_images/lab3.jpg')}}" alt="image">
                </div> --}}


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img class="img fade-up" src="{{asset('academics/lab_images/lab4.jpg')}}" alt="image">
                </div>


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img class="img fade-up" src="{{asset('academics/lab_images/lab5.jpg')}}" alt="image">
                </div>


                {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img class="img fade-up" src="{{asset('academics/lab_images/lab6.jpg')}}" alt="image">
                </div> --}}


                {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img class="img fade-up" src="{{asset('academics/lab_images/lab7.jpg')}}" alt="image">
                </div> --}}


                {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img class="img fade-up" src="{{asset('academics/lab_images/lab8.jpg')}}" alt="image">
                </div> --}}


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img class="img fade-up" src="{{asset('academics/lab_images/lab9.png')}}" alt="image">
                </div>
            </div>

        </div>

        <div class="content">
            <h4>Library</h4>
            <p>SIMT houses a well-established central library that serves as a knowledge hub for students, faculty, and researchers.</p>
            <p>Key Features:</p>

            <ul>
                <li>A diverse collection of over 3000+ books across disciplines</li>
                <li>12+ subscribed journals, magazines, and newspapers</li>
                <li>Spacious reading areas and reference sections</li>
                <li>A fully Air-Conditioned Digital Library with DELNET access</li>
                <li>Access to e-resources, e-books, and multimedia content</li>
                <li>Secure environment with CCTV monitoring and fire safety systems</li>
            </ul>
        </div>

        <div class="content">
            <h4>Digital Repository</h4>
            <p>The SIMT Library maintains a comprehensive <strong>Digital Repository</strong> that includes:</p>
            <ul>
                <li>Question papers from Sessional, PUT, and University exams</li>
                <li>Model solutions curated by faculty members</li>
                <li>Accessible via central and departmental libraries, as well as hostel facilities</li>
                <li>Available in both digital and print formats</li>
                <li>24/7 access through the institutional digital platform</li>
            </ul>

            <div class="row">
                <div class="col-lg-4 mb-3">
                    <img src="{{asset('academics/libs/lib1.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 mb-3">
                    <img src="{{asset('academics/libs/lib2.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 mb-3">
                    <img src="{{asset('academics/libs/lib3.jpg')}}" alt="image" class="img fade-up">
                </div>
            </div>
        </div>

        <div class="content">
            <h4>Internet and Intranet Facilities</h4>
            <p>SIMT offers a highly connected digital learning environment:</p>
            <ul>
                <li><strong>300 Mbps high-speed internet connectivity</strong></li>
                <li>A <strong>24/7 Dedicated Internet Lab</strong> accessible to students</li>
                <li>Campus-wide Wi-Fi: accessible in hostels, classrooms, library, and labs</li>
                <li>An internal intranet system to access:</li>
                <ul>
                    <li style="list-style: lower-alpha;">Exam schedules</li>
                    <li style="list-style: lower-alpha;">Time tables</li>
                    <li style="list-style: lower-alpha;">Academic announcements</li>
                    <li style="list-style: lower-alpha;">Digital learning resources</li>
                </ul>
            </ul>
            <p>Technical support is provided by a dedicated IT cell for software setup, system monitoring, and network support.</p>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <img src="{{asset('academics/net/net1.jpg')}}" alt="image" class="img fade-up">                            
                </div>
                <div class="col-lg-4 mb-3">
                    <img src="{{asset('academics/net/net2.jpg')}}" alt="image" class="img fade-up">
                </div>
            </div>
        </div>

        <div class="content">
            <h4>Sports and Games Facilities</h4>
            <p>SIMT strongly supports physical education and student wellness by promoting sports and fitness.</p>

            <strong>Outdoor Facilities:</strong>
            <ul>
                <li>Cricket</li>
                <li>Volleyball</li>
                <li>Basketball</li>
                <li>Badminton</li>
                <li>Kabaddi</li>
            </ul>

            <strong>Indoor Facilities:</strong>
            <ul>
                <li>Table Tennis</li>
                <li>Chess</li>
                <li>Carrom</li>
                <li>Weight Training</li>                
            </ul>

            <p>The campus also encourages inter-collegiate participation and annual sports events.</p>
        </div>

        <div class="content">
            <h4>Gymnasium</h4>
            <p>SIMT provides separate gymnasiums for boys and girls within the campus.</p>
            <p>Each gym is equipped with:</p>
            <ul>
                <li>Treadmills</li>
                <li>Bench and Incline Press Machines</li>
                <li>Dumbbells and resistance training equipment</li>
            </ul>

            <p><strong>Yoga classes</strong> are conducted regularly in both indoor and outdoor settings, fostering mindfulness and physical health.</p>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/games/game1.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/games/game2.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/games/game3.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/games/game4.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/games/game5.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/games/game6.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/games/game7.gif')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/games/game8.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/games/game9.jpg')}}" alt="image" class="img fade-up">
                </div>
            </div>
        </div>


        <div class="content">
            <h4>Health Center</h4>
            <p>SIMT offers a well-equipped <strong>Health Centre</strong> to support student health and wellness.</p>

            <ul>
                <li>Separate inpatient areas for male and female students</li>
                <li>Regular medical check-ups and OPD services through Bakson Hospital</li>
                <li>Services overseen by a professional medical officer and trained assistant staff</li>
                <li>Health services are provided at nominal charges</li>
            </ul>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="{{asset('academics/health/health1.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="{{asset('academics/health/health2.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="{{asset('academics/health/health3.jpg')}}" alt="image" class="img fade-up">
                </div>
            </div>
        </div>

        <div class="content">
            <h4>Auditorium</h4>
            <p>The SIMT auditorium provides a dynamic space for events, workshops, and presentations.</p>                               
            <ul>
                <li>Seating capacity: 200+</li>
                <li>Fully air-conditioned environment</li>
                <li>Acoustic design and modern audio-visual equipment</li>
                <li>Used for guest lectures, cultural events, seminars, and interdepartmental activities</li>
            </ul>
        </div>

        <hr>

        <div class="content">
            <h4>Multipurpose Conference Halls</h4>
            <p>SIMT has two fully functional <strong>Multipurpose Halls</strong>, each with:</p>
            <ul>
                <li>Seating capacity of 100 participants</li>
                <li>Centralized air-conditioning</li>
                <li>Ideal for training programs, meetings, webinars, and interactive sessions</li>
            </ul>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="{{asset('academics/audi/audi1.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="{{asset('academics/audi/audi2.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="{{asset('academics/audi/audi3.jpg')}}" alt="image" class="img fade-up">
                </div>
            </div> 
        </div>

        <div class="content">
            <h4>Hostels</h4>
            <p>SIMT offers secure and comfortable on-campus accommodation for both boys and girls.</p>            

            <strong>Boys Hostel</strong>
            <ul>
                <li>Attached bathrooms</li>
                <li>Individual study tables, chairs, beds, and storage with lockable wardrobes</li>
                <li>24x7 power backup, RO purified water</li>
                <li>Common TV lounge, reading room, indoor game zone</li>
                <li>High-speed unlimited Wi-Fi</li>
                <li>Smart Laundry Facility</li>
            </ul>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/hostel/hostel1.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/hostel/hostel2.jpg')}}" alt="image" class="img fade-up">
                </div>
            </div>

            <strong>Girls Hostel</strong>
            <ul>
                <li>Secure, well-maintained accommodation</li>
                <li>Qualified wardens and maintenance team</li>
                <li>Attached washrooms and well-furnished rooms</li>
                <li>Dedicated gym access, reading room, TV area</li>
                <li>Hygienic, home-style vegetarian food in hostel mess</li>
                <li>24x7 Wi-Fi and library/lab access for academic needs</li>
            </ul>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/hostel/hostel3.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/hostel/hostel4.jpg')}}" alt="image" class="img fade-up">
                </div>
            </div>

            <strong>Smart Laundry</strong>
            <p>SIMT provides <strong>Smart Laundry Services</strong> in both hostels, powered by advanced systems (like Hier).</p>
            <ul>
                <li>Eco-friendly and energy-efficient</li>
                <li>Easy mobile app interface for scheduling and payment</li>
                <li>Affordable for students</li>
            </ul>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/hostel/hostel5.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/hostel/hostel6.jpg')}}" alt="image" class="img fade-up">
                </div>
            </div>
        </div>  
        
        <div class="content">
            <h4>Transport Facilities</h4>
            <p>SIMT operates its own fleet of buses, offering daily commute facilities:</p>
            <ul>
                <li>Covers all major parts of Greater Noida and adjoining regions</li>
                <li>Operated by trained and responsible drivers</li>
                <li>Bus-in charge ensures student safety and punctuality</li>
            </ul>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/cars/car1.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/cars/car2.jpg')}}" alt="image" class="img fade-up">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('academics/cars/car3.jpg')}}" alt="image" class="img fade-up">
                </div>
            </div>
        </div>

        <div class="content">
            <h4>Green Initiatives</h4>
            <p>SIMT’s commitment to sustainability is reflected in its eco-conscious campus planning.</p>            

            <strong>Key Initiatives:</strong>
            <ul>
                <li>Solar energy systems for clean power</li>
                <li>Rainwater harvesting and organic composting</li>
                <li>Tree plantation drives and green landscaping</li>
                <li>Digital-first administrative communication (paperless office)</li>
                <li>Noise-free zones and pedestrian pathways</li>
                <li>Carbon awareness programs through Environmental Studies courses</li>
            </ul>

            <p>Classrooms are naturally lit and ventilated, encouraging a healthy and productive academic environment. The campus remains serene, pollution-free, and aligned with green principles for holistic development.</p>
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