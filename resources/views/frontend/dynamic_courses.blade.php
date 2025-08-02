@extends('frontend.layout')
@section('title', 'SIMT Courses')

<style>
    .elementskit-entry-thumb img{
        height: 422px !important;
    }

    .elementskit-post-body{
        min-height: calc(max-content + 40px);
        height: 520px;

    }
    .red-line-left{
        position: relative;
    }
    .red-line-left::before{
        content: "";
        position: absolute;
        top: 20%; left: -20px;
        height: 80%;
        width: 5px;
        background-color: var(--e-global-color-accent);
    }
</style>

@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304" style="background-color: #fff;">
    <div class="elementor-element elementor-element-3701d24 e-flex e-con-boxed e-con e-parent e-lazyloaded" style="background: url('../images/btech_course_image.png') center center / cover no-repeat;"
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
                        <h1 class="elementor-heading-title elementor-size-default"></h1>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9dac90b e-flex e-con-boxed e-con e-child"
                    data-id="9dac90b" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-866d9b9 elementor-widget__width-initial elementor-widget-divider--view-line elementor-widget elementor-widget-divider animated fadeInUp"
                            data-id="866d9b9" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                            data-widget_type="divider.default">                            
                        </div>
                        <div class="elementor-element elementor-element-d9061a3 elementor-widget-mobile__width-initial elementor-widget elementor-widget-text-editor animated fadeInRight"
                            data-id="d9061a3" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                            data-widget_type="text-editor.default">
                            <div class="elementor-widget-container red-line-left">
                                <p>College is where you are shaped according to the person you want to be in the
                                    future.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-253d0550 e-flex e-con-boxed e-con e-parent e-lazyloaded" data-id="253d0550" data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-6e597f42 elementor-widget elementor-widget-elementskit-blog-posts" data-id="6e597f42" data-element_type="widget" data-widget_type="elementskit-blog-posts.default">
                <div class="elementor-widget-container">
                    {{-- <div class=" table-responsive">
                        <table class="table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="3">B tech Course</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Degree</th>
                                    <th class="text-center">Course</th>
                                    <th class="text-center">Duration(Yrs)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center ">
                                <tr>
                                    <td>B Tech</td>
                                    <td>Computer science & Engineering (CSE)</td>
                                    <td>04</td>
                                </tr>
                                <tr>
                                    <td>B Tech</td>
                                    <td>Electronics & Communication Engineering (ECE)</td>
                                    <td>04</td>
                                </tr>
                                <tr>
                                    <td>B Tech</td>
                                    <td>Mechanical Engineering (ME)</td>
                                    <td>04</td>
                                </tr>
                                <tr>
                                    <td>B Tech</td>
                                    <td>Civil Engineering (CE)</td>
                                    <td>04</td>
                                </tr>
                            </tbody>
                        </table>    
                    </div>                                      
                    <div class=" table-responsive">
                        <table class="table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="3">Direct Entry Diploma/B Sc holders into the Second Year of the B. Tech (LEET) Program</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Degree</th>
                                    <th class="text-center">Course</th>
                                    <th class="text-center">Duration(Yrs)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center ">
                                <tr>
                                    <td>B Tech</td>
                                    <td>Computer science & Engineering (CSE)</td>
                                    <td>03</td>
                                </tr>
                                <tr>
                                    <td>B Tech</td>
                                    <td>Electronics & Communication Engineering (ECE)</td>
                                    <td>03</td>
                                </tr>
                                <tr>
                                    <td>B Tech</td>
                                    <td>Mechanical Engineering (ME)</td>
                                    <td>03</td>
                                </tr>
                                <tr>
                                    <td>B Tech</td>
                                    <td>Civil Engineering (CE)</td>
                                    <td>03</td>
                                </tr>
                            </tbody>
                        </table>    
                    </div>  --}}
                    <div class="ekit-wid-con">
                        <div id="post-items--6e597f42" class="row post-items">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="elementskit-post-image-card">
                                    <div class="elementskit-entry-header">
                                        <a href="#btech_cse" class="elementskit-entry-thumb">
                                            <img decoding="async" src="{{asset('courses2/bba.jpg')}}" alt="B tech">
                                        </a><!-- .elementskit-entry-thumb END -->

                                        <div class="elementskit-meta-categories">
                                            <span class="elementskit-meta-wraper">
                                                <span><a href="#btech_cse"
                                                        rel="category tag">Program</a></span>
                                            </span>
                                        </div>

                                    </div><!-- .elementskit-entry-header END -->

                                    <div class="elementskit-post-body">
                                        <h2 class="entry-title">
                                            <a href="#btech_cse">Bachelor of Business Administration (BBA)</a>
                                        </h2>

                                        <div class="post-meta-list">
                                            <span class="meta-author">
                                                <i aria-hidden="true" class="icon icon-user"></i> <a href="#"class="author-name">Bobbie Navarro</a>
                                            </span>
                                            <span class="meta-date">
                                                <i aria-hidden="true" class="icon icon-calendar-full"></i> <span
                                                    class="meta-date-text">
                                                    November 29, 2023 </span>
                                            </span>
                                        </div>
                                        <p>SIMT's BBA program offers a robust foundation in business administration, tailored to prepare students for leadership roles in management. The curriculum integrates core management principles with specialized knowledge in areas like finance, marketing, and operations. Students cultivate essential skills in communication, analytical and critical thinking, problem-solving, and leadership. The program emphasizes practical experience and digital literacy through industry interaction and technology integration, fostering entrepreneurial skills and ethical awareness to develop agile, responsible business professionals.</p>
                                        <div class="btn-wraper">
                                            <a class="elementskit-btn whitespace--normal" id=""
                                                href="{{route('view-courses', 'bba')}}">
                                                Learn More <i aria-hidden="true" class="icon icon-right-arrow2"></i>
                                            </a>
                                        </div>
                                    </div><!-- .elementskit-post-body END -->
                                </div>                            
                            </div>                                                     
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="elementskit-post-image-card">
                                    <div class="elementskit-entry-header">
                                        <a href="#btech_cse" class="elementskit-entry-thumb">
                                            <img decoding="async" src="{{asset('courses2/bca.jpg')}}" alt="B tech">
                                        </a><!-- .elementskit-entry-thumb END -->

                                        <div class="elementskit-meta-categories">
                                            <span class="elementskit-meta-wraper">
                                                <span><a href="#btech_cse"
                                                        rel="category tag">Program</a></span>
                                            </span>
                                        </div>

                                    </div><!-- .elementskit-entry-header END -->

                                    <div class="elementskit-post-body">
                                        <h2 class="entry-title">
                                            <a href="#btech_cse">Bachelor of Computer Applications (BCA)</a>
                                        </h2>

                                        <div class="post-meta-list">
                                            <span class="meta-author">
                                                <i aria-hidden="true" class="icon icon-user"></i> <a href="#"class="author-name">Bobbie Navarro</a>
                                            </span>
                                            <span class="meta-date">
                                                <i aria-hidden="true" class="icon icon-calendar-full"></i> <span
                                                    class="meta-date-text">
                                                    November 29, 2023 </span>
                                            </span>
                                        </div>


                                        <p>The BCA program at SITASRM is a three-year undergraduate course providing a strong foundation in computer applications, software development, and programming. It covers databases, networking, and emerging technologies, equipping students with essential IT industry skills. Aligned with the National Education Policy (NEP) 2020, the program integrates technical skills with critical thinking, creativity, and ethical grounding. The curriculum blends theory and practical application, emphasizing hands-on learning and industry readiness, including exposure to AI and Machine Learning.</p>
                                        <div class="btn-wraper">
                                            <a class="elementskit-btn whitespace--normal" id=""
                                                href="{{route('view-courses', 'bca')}}">
                                                Learn More <i aria-hidden="true" class="icon icon-right-arrow2"></i>
                                            </a>

                                        </div>
                                    </div><!-- .elementskit-post-body END -->
                                </div>                            
                            </div>                         

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="elementskit-post-image-card">
                                    <div class="elementskit-entry-header">
                                        <a href="#btech_cse" class="elementskit-entry-thumb">
                                            <img decoding="async" src="{{asset('courses2/mba.jpg')}}" alt="B tech">
                                        </a><!-- .elementskit-entry-thumb END -->

                                        <div class="elementskit-meta-categories">
                                            <span class="elementskit-meta-wraper">
                                                <span><a href="#btech_cse"
                                                        rel="category tag">Program</a></span>
                                            </span>
                                        </div>

                                    </div><!-- .elementskit-entry-header END -->

                                    <div class="elementskit-post-body">
                                        <h2 class="entry-title">
                                            <a href="#btech_cse">Master of Business Administration (MBA)</a>
                                        </h2>

                                        <div class="post-meta-list">
                                            <span class="meta-author">
                                                <i aria-hidden="true" class="icon icon-user"></i> <a href="#"class="author-name">Bobbie Navarro</a>
                                            </span>
                                            <span class="meta-date">
                                                <i aria-hidden="true" class="icon icon-calendar-full"></i> <span
                                                    class="meta-date-text">
                                                    November 29, 2023 </span>
                                            </span>
                                        </div>
                                        <p>SIMT’s MBA program prepares students for future business leadership with in-depth understanding through dual specialization in areas like HR, Marketing, Finance, and Business Analytics. The program develops socially conscious and globally aware professionals, training them to lead and collaborate effectively. Students gain management expertise across multiple domains through simulations, projects, internships, and industry interactions. The program emphasizes tackling global challenges and understanding multinational corporations, SMEs, and micro-enterprises.</p>
                                        <div class="btn-wraper">
                                            <a class="elementskit-btn whitespace--normal" id=""
                                                href="{{route('view-courses', 'mba')}}">
                                                Learn More <i aria-hidden="true" class="icon icon-right-arrow2"></i>
                                            </a>

                                        </div>
                                    </div><!-- .elementskit-post-body END -->
                                </div>                            
                            </div>                         
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="elementskit-post-image-card">
                                    <div class="elementskit-entry-header">
                                        <a href="#ece" class="elementskit-entry-thumb">
                                            <img decoding="async" src="{{asset('courses2/mca.jpg')}}" alt="B tech">
                                        </a><!-- .elementskit-entry-thumb END -->

                                        <div class="elementskit-meta-categories">
                                            <span class="elementskit-meta-wraper">
                                                <span><a href="#ece"
                                                        rel="category tag">Program</a></span>
                                            </span>
                                        </div>

                                    </div><!-- .elementskit-entry-header END -->

                                    <div class="elementskit-post-body">
                                        <h2 class="entry-title">
                                            <a href="#aiml"> Master of Computer Applications (MCA)</a>
                                        </h2>

                                        <div class="post-meta-list">
                                            <span class="meta-author">
                                                <i aria-hidden="true" class="icon icon-user"></i> <a href="#"class="author-name">Bobbie Navarro</a>
                                            </span>
                                            <span class="meta-date">
                                                <i aria-hidden="true" class="icon icon-calendar-full"></i> <span
                                                    class="meta-date-text">
                                                    November 29, 2023 </span>
                                            </span>
                                        </div>


                                        <p>The MCA program at SITASRM is a two-year postgraduate degree providing advanced theoretical and practical knowledge in computer science, software development, and application design, along with essential management skills. It prepares students for specialized and leadership roles in the IT industry, emphasizing research, innovation, and industry collaboration. The curriculum includes core subjects like Advanced Data Structures & Algorithms and emerging technologies like AI and Machine Learning. The program fosters critical thinking, problem-solving, and the development of solutions for real-world challenges.  
                                        </p>
                                        <div class="btn-wraper">
                                            <a class="elementskit-btn whitespace--normal" id=""
                                                href="{{route('view-courses', 'mca')}}">
                                                Learn More <i aria-hidden="true" class="icon icon-right-arrow2"></i>
                                            </a>

                                        </div>
                                    </div><!-- .elementskit-post-body END -->
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="btech_cse" class="elementor-element elementor-element-db10bcf e-con-full e-flex e-con e-parent" data-id="db10bcf" data-element_type="container">
        <div class="elementor-element elementor-element-9e82b6b e-con-full e-flex e-con e-child" data-id="9e82b6b"
            data-element_type="container">            
            <div class="elementor-element elementor-element-d406e04 elementor-widget elementor-widget-image"
                data-id="d406e04" data-element_type="widget" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" decoding="async" width="1280" height="1158"
                        src="{{asset('images/two-students-working-in-library.jpg')}}"
                        class="attachment-full size-full wp-image-1102"
                        alt="Portrait Of Smiling Male College Student In Busy Communal Campus Building"                        
                        sizes="(max-width: 1280px) 100vw, 1280px">
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-910aef9 e-con-full e-flex e-con e-child" data-id="910aef9"
            data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-element elementor-element-4dba181 e-con-full e-flex e-con e-child"
                data-id="4dba181" data-element_type="container">
                <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="66a6537" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">B Tech Computer Science & Engineering</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-d48357f elementor-widget elementor-widget-text-editor"
                    data-id="d48357f" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>A Bachelor of Technology (B.Tech) in Computer Science and Technology is your gateway to a dynamic and innovative career. This program equips students with essential skills in programming, algorithms, and data structures, along with cutting-edge technologies like artificial intelligence, cybersecurity, and cloud computing. At the World Institute of Technology (WIT) in Sohna, Gurgaon, our state-of-the-art facilities and experienced faculty ensure a comprehensive and hands-on learning experience. Graduates are well-prepared for diverse roles in the tech industry, from software development to IT consulting, driving the digital future forward. Join us and transform your passion for technology into a successful career.</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5582dfc elementor-widget elementor-widget-button"
                    data-id="5582dfc" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="#">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">Know More</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="ece" style="flex-direction: row-reverse" class="elementor-element elementor-element-db10bcf e-con-full e-flex e-con e-parent" data-id="db10bcf" data-element_type="container">
        <div class="elementor-element elementor-element-9e82b6b e-con-full e-flex e-con e-child" data-id="9e82b6b"
            data-element_type="container">            
            <div class="elementor-element elementor-element-d406e04 elementor-widget elementor-widget-image"
                data-id="d406e04" data-element_type="widget" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" decoding="async" width="1280" height="1158"
                        src="{{asset('images/explaining-chemistry.jpg')}}"
                        class="attachment-full size-full wp-image-1102"
                        alt="Portrait Of Smiling Male College Student In Busy Communal Campus Building"                        
                        sizes="(max-width: 1280px) 100vw, 1280px">
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-910aef9 e-con-full e-flex e-con e-child" data-id="910aef9"
            data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-element elementor-element-4dba181 e-con-full e-flex e-con e-child"
                data-id="4dba181" data-element_type="container">
                <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="66a6537" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">B Tech Electronics & Communication Engineering</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-d48357f elementor-widget elementor-widget-text-editor"
                    data-id="d48357f" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>A Bachelor of Technology (B.Tech) in Computer Science and Technology is your gateway to a dynamic and innovative career. This program equips students with essential skills in programming, algorithms, and data structures, along with cutting-edge technologies like artificial intelligence, cybersecurity, and cloud computing. At the World Institute of Technology (WIT) in Sohna, Gurgaon, our state-of-the-art facilities and experienced faculty ensure a comprehensive and hands-on learning experience. Graduates are well-prepared for diverse roles in the tech industry, from software development to IT consulting, driving the digital future forward. Join us and transform your passion for technology into a successful career.</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5582dfc elementor-widget elementor-widget-button"
                    data-id="5582dfc" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="#">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">Know More</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection