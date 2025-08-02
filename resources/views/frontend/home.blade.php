@extends('frontend.layout')
@section('title', 'Home')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> --}}

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<style>

    .modal-header {
      background-color: #fff;
      text-align: center;
      flex-direction: column;
      border-bottom: none;
    }
    .modal-header h5 {
      color: #b30000;
      font-weight: bold;
    }
    .modal-title-sub {
      font-size: 14px;
      margin-top: 5px;
      color: #555;
    }
    .modal-content {
      border-radius: 8px;
      padding: 20px;
    }
    .btn-danger {
      background-color: #b30000;
      border: none;
    }

    .modal-header .btn-close{
        background-color: transparent !important;

    }
    .form-check-input:checked {
      background-color: #b30000;
      border-color: #b30000;
    }
    .form-check-label a {
      color: #b30000;
      text-decoration: none;
    }

        .custom-card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border: none;            
            overflow: hidden;
            min-height: 13rem;
        }

        .custom-card img {
            width: 50%;
            height: 100%;
            object-fit: cover;
        }

        .custom-card .card-body {
            padding: 30px;
        }

        .custom-card .card-title {
            font-weight: bolder;
        }

        @media (max-width: 767px) {
            .custom-card {
                flex-direction: column !important;
            }

            .custom-card img {
                width: 100%;
                object-fit: cover;                
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
    .w-50{
        width: 50% !important;
    }

    .tabs-container {
       width: 100%;
        max-width: 1280px;
        margin: 0 auto 85px;
        position: relative;
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

    /* Fullscreen carousel */
    .carousel-item {
        height: max-content;
        max-height: 95vh;
        position: relative;
    }

    /* Make images cover the entire carousel */
    .carousel-item img {
        object-fit:fill;
        width: 100%;
        height: max-content;
        max-height: 100vh;
        height: 90vh;
        z-index:1;
    }

    /* Make videos full-screen, autoplay, loop, and remove controls */
    .carousel-item video {
        width: 100%;
        height: max-content;
        max-height: 100vh;
        object-fit: fill;
        z-index:1;
        position: relative;
    }

    .carousel-item video::before{
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;width: 100%;
        background: rgba(0, 0, 0, 0.5)
    }

    /* Position controls at the bottom */
    .carousel-indicators {
        bottom: 10px;
    }

    .crausel-btn{
        background-color: transparent !important;        
    }
    .crausel-btn span{
        color: #000 !important;
    }
    .crausel-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 3;
        background: transparent;        
        color: white;
        padding: 20px;
        border-radius: 10px;
        max-width: 70%;        
        text-align: center;

        /* display: none; */
    }
    .top-recruiters-title span{
        margin-left: -160px;
    }

    .red-line{
        position: relative;
    }

    .red-line::before{
        content: '';
        position: absolute;
        top: 100%; left: 0;
        width: 60%;
        height: 5px;
        background-color: var(--e-global-color-accent);
    }
    .crausel-content h2{
        color: #fff !important;
        font-size: 40px !important;
        font-family: sans-serif;
    }

    .video-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        max-height: 100vh;
        overflow: hidden;
    }

    .video-wrapper video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.5); /* semi-transparent black */
        z-index: 1;
    }

    @media screen and (max-width:1280px){
        .tabs-container{
            max-width: 900px;
        }
    }

    @media screen and (max-width:900px){
        .tabs-container{
            max-width: 750px;
        }
        .blog-grid{
            grid-template-columns: auto auto;
        }
    }  
    
    
    @media screen and (max-width:750px){
            .tabs-container{
                max-width: 650px;
            }
             .blog-grid{
                grid-template-columns: auto auto;
            }
        }

        @media screen and (max-width:500px){
            .tabs-container{
                width: 90%;                
                margin: auto;
            }
            .tab-content{
                padding: 33px 20px 37px;
                margin: 10px 0;
            }

            .tab-content-card {                
                width: auto;
                padding: 27px 19px;
            }
            .tab-content p {
                font-size: 14px;
                color: #000;
                opacity: .9;
                margin: 20px 0 0;
            }
            .tab-buttons{
                overflow: auto;
            }
            .tab-button{
                font-size: 13px;
                white-space: nowrap;
            }
            .tab-content h2{
                font-size: 26px;
            }
             .blog-grid{
                display:block;
            }
            .e-con>.e-con-inner>.elementor-widget>.elementor-widget-container, .e-con>.elementor-widget>.elementor-widget-container {
              height: auto;
          }
          .blog-lm{
              padding-bottom:10px;
          }
                .blog-grid .blog-items .blog-cont {
            padding: 18px 18px 0;
        }
    }



    @media (max-width: 767px) {
        .elementor-304 .elementor-element.elementor-element-55f7182 img {
            height: 490px !important;
        }

        .crausel-content {
            max-width: 100%;
            width: 70%;
        }

        .crausel-content h2{
            color: #fff !important;
            font-size: 15px !important;
            font-family: sans-serif;
        }
        .crausel-content i{
            font-size: 10px;
        }
    }

    .mdc-text-field--no-label:not(.mdc-text-field--textarea) .mat-mdc-form-field-input-control.mdc-text-field__input, .mat-mdc-text-field-wrapper .mat-mdc-form-field-input-control{
        border: none !important;
        padding: 0 !important;
    }
</style>

@section('main_content')    
<div data-elementor-type="wp-post" data-elementor-id="304" class="elementor elementor-304" style="background-color: #fff;">
    <div id="fullscreenCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#fullscreenCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#fullscreenCarousel" data-bs-slide-to="1"></button>
            {{-- <button type="button" data-bs-target="#fullscreenCarousel" data-bs-slide-to="2"></button> --}}
        </div>
    
        <!-- Slides -->
        <div class="carousel-inner">
            <!-- Image Slide -->
            <div class="carousel-item active">                
                <img src="{{asset('images/homebanner_12.jpg')}}" alt="Nature Image">                
            </div>

            <div class="carousel-item">
                <div class="video-wrapper">
                    <video autoplay loop muted>
                        <source src="images/college_video4.mp4" type="video/mp4">
                    </video>
                    <div class="video-overlay"></div> <!-- Overlay div -->
                </div>
                <div class="crausel-content">                    
                    <h2>Preparing Leaders & Technocrats for Tomorrow!</h2>                     
                    <i>"Leading through constantly shifting landscape. SIMT equips leaders to create a sustainable and informed future."</i>                    
                </div>
            </div>
            
            {{-- <div class="carousel-item">
                <div class="video-wrapper">
                    <video autoplay loop muted>
                        <source src="images/college_video5.mp4" type="video/mp4">
                    </video>
                    <div class="video-overlay"></div> <!-- Overlay div -->
                </div>
                <div class="crausel-content">         
                    <p>Decide. Lead. Succeed.</p>           
                    <h2>SIMT Case Analysis Advantage</h2>   
                    <p>Real-world skills for future leaders</p>                  
                    <i>Analyze real business problems Narrative-based scenarios presented Incomplete information, real decisions Develops critical thinking, problem-solving Shifts from lectures to active learning</i>                    
                </div>
            </div> --}}
    
            <!-- https://www.w3schools.com/html/mov_bbb.mp4 -->
            <!-- Video Slide -->
            {{-- <div class="carousel-item">                
                <video autoplay loop muted>
                    <source src="images/college_video2.mp4" type="video/mp4">
                </video>                
            </div> --}}
    
            <!-- Another Image Slide -->
            {{-- <div class="carousel-item">                
                <img src="{{asset('images/homebanner_2.jpg')}}" alt="City Image">                
            </div> --}}

            {{-- <div class="carousel-item">                
                <video autoplay loop muted>
                    <source src="images/college_video3.mp4" type="video/mp4">
                </video>                
            </div> --}}
        </div>
    
        <!-- Controls -->
        <button class="crausel-btn carousel-control-prev" type="button" data-bs-target="#fullscreenCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" style="color: #000 !important;"></span>
        </button>
        <button class="crausel-btn carousel-control-next" type="button" data-bs-target="#fullscreenCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"  style="color: #000 !important;"></span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <marquee behavior="loop" direction="left" style="padding: 10px; color:#324A7D; font-weight:bold;">Admission Helpline :- {{env('COLLEGE_PHONES')}}</marquee>
    <div class="elementor-element elementor-element-f443c61 e-flex e-con-boxed e-con e-parent e-lazyloaded animated fadeInRight"
        data-id="f443c61" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_mobile&quot;:&quot;fadeInUp&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-6c90143 e-con-full e-flex e-con e-child animated fadeInLeft"
                data-id="6c90143" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;animation_delay&quot;:960,&quot;animation_mobile&quot;:&quot;none&quot;}">
                <div class="elementor-element elementor-element-bfa63aa elementor-widget elementor-widget-heading"
                    data-id="bfa63aa" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Holistic Development and Leadership</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-b011bb9 elementor-widget elementor-widget-text-editor"
                    data-id="b011bb9" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>{{env('COLLEGE_NAME_SHORT')}} emphasizes the development of well-rounded professionals through programs that cultivate leadership qualities, ethical values, communication skills, and critical thinking abilities.</p>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-8f2af22 e-con-full e-flex e-con e-child animated fadeInLeft"
                data-id="8f2af22" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;animation_delay&quot;:720,&quot;animation_mobile&quot;:&quot;none&quot;}">
                <div class="elementor-element elementor-element-341d01b elementor-widget elementor-widget-heading"
                    data-id="341d01b" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Experiential Learning</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-79d0de1 elementor-widget elementor-widget-text-editor"
                    data-id="79d0de1" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Picture graduating with not only a degree, but a portfolio of experience. At {{env('COLLEGE_NAME_SHORT')}}, you'll not only study theory – you'll be able to develop real-world skills with live projects, internships, and challenging industry partnerships.</p>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-0d6dc5d e-con-full e-flex e-con e-child"
                data-id="0d6dc5d" data-element_type="container"
                data-settings="{&quot;animation_mobile&quot;:&quot;none&quot;}">
                <div class="elementor-element elementor-element-1430bfb elementor-widget elementor-widget-heading"
                    data-id="1430bfb" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Tech-Powered Campus</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-31dbb7f elementor-widget elementor-widget-text-editor"
                    data-id="31dbb7f" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>{{env('COLLEGE_NAME_SHORT')}} offers a vibrant community tailored to your holistic development. At {{env('COLLEGE_NAME_SHORT')}}, you will develop an adaptive thinking, moral leadership, and global vision so that you do not only become a successful professional, but can actually create a tangible difference in the world</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="elementor-element elementor-element-81c262e e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="81c262e" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-44649a6 e-con-full e-flex e-con e-child"
                data-id="44649a6" data-element_type="container">
                <div class="elementor-element elementor-element-cf2c721 elementor-widget elementor-widget-image animated fadeInUp"
                    data-id="cf2c721" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img decoding="async" width="1280" height="854"
                            src="{{asset('images/home_welcome2.png')}}"
                            class="attachment-full size-full wp-image-427"
                            alt="Group of happy international students posing outdoors near university building"                            
                            sizes="(max-width: 1280px) 100vw, 1280px">
                    </div>
                </div>
                <div class="elementor-element elementor-element-37a1b06 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-spacer animated fadeInLeft"
                    data-id="37a1b06" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-2d84654 e-con-full e-flex e-con e-child"
                data-id="2d84654" data-element_type="container">
                <div class="elementor-element elementor-element-68d0dab elementor-widget elementor-widget-heading animated fadeInLeft"
                    data-id="68d0dab" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">About {{env('COLLEGE_NAME_SHORT')}}</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3093cba elementor-widget elementor-widget-heading animated fadeInRight"
                    data-id="3093cba" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Welcome to {{env('COLLEGE_NAME')}}</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-d0fe679 elementor-widget elementor-widget-heading animated fadeInUp"
                    data-id="d0fe679" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <p >Be part of a life-defining experience in {{env('COLLEGE_NAME_SHORT')}}.  We transcend books, forging nimble minds, moral leaders, and prospective entrepreneurs.  Our work-oriented programs, mentorship by industry professionals, and lively community empower you to be your best personally and professionally.  Experience a culture of innovation and collaboration at {{env('COLLEGE_NAME_SHORT')}} today!</p>
                    </div>
                </div>                
                <div class="elementor-element elementor-element-09070db elementor-widget elementor-widget-button"
                    data-id="09070db" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="{{route('about')}}">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">Discover More</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="elementor-element elementor-element-1c9b1eb e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="1c9b1eb" data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-c44e3a9 e-con-full e-flex e-con e-child"
                data-id="c44e3a9" data-element_type="container">
                <div class="elementor-element elementor-element-6de2664 elementor-widget__width-initial elementor-widget elementor-widget-counter"
                    data-id="6de2664" data-element_type="widget" data-widget_type="counter.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix">24/7</span>
                                {{-- <span class="elementor-counter-number" data-duration="2000" data-to-value="32"
                                    data-from-value="0" data-delimiter=",">32</span>
                                <span class="elementor-counter-number-suffix"></span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-95071a7 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="95071a7" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Learning Hubs
                        </h4>
                    </div>
                </div>
            </div>            
            <div class="elementor-element elementor-element-9e5a9cc elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="9e5a9cc" data-element_type="widget" data-widget_type="divider.default">
                <div class="elementor-widget-container">
                    <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                    </div>
                </div>
            </div>

            <div class="elementor-element elementor-element-92bbd13 e-con-full e-flex e-con e-child"
                data-id="92bbd13" data-element_type="container">
                <div class="elementor-element elementor-element-cf97d58 elementor-widget__width-initial elementor-widget elementor-widget-counter"
                    data-id="cf97d58" data-element_type="widget" data-widget_type="counter.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix"></span>
                                <span class="elementor-counter-number" data-duration="2000" data-to-value="100"
                                    data-from-value="0" data-delimiter=",">40</span>
                                <span class="elementor-counter-number-suffix">%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-067558b elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="067558b" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Placement Assistance
                        </h4>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-f1041e7 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-tablet__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="f1041e7" data-element_type="widget" data-widget_type="divider.default">
                <div class="elementor-widget-container">
                    <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                    </div>
                </div>
            </div>

            {{-- <div class="elementor-element elementor-element-92bbd13 e-con-full e-flex e-con e-child"
                data-id="92bbd13" data-element_type="container">
                <div class="elementor-element elementor-element-cf97d58 elementor-widget__width-initial elementor-widget elementor-widget-counter"
                    data-id="cf97d58" data-element_type="widget" data-widget_type="counter.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix"></span>
                                <span class="elementor-counter-number"
                                    data-from-value="0" data-delimiter=",">50</span>
                                <span class="elementor-counter-number-suffix">/50</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-067558b elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="067558b" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Expert PhD Faculty & Research
                        </h4>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="elementor-element elementor-element-f1041e7 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-tablet__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="f1041e7" data-element_type="widget" data-widget_type="divider.default">
                <div class="elementor-widget-container">
                    <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                    </div>
                </div>
            </div> --}}
            


            <div class="elementor-element elementor-element-4e242b7 e-con-full e-flex e-con e-child"
                data-id="4e242b7" data-element_type="container">
                <div class="elementor-element elementor-element-932eae5 elementor-widget__width-initial elementor-widget elementor-widget-counter"
                    data-id="932eae5" data-element_type="widget" data-widget_type="counter.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix"></span>
                                <span class="elementor-counter-number" data-duration="2000" data-to-value="25"
                                    data-from-value="0" data-delimiter=",">50</span>
                                <span class="elementor-counter-number-suffix">+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-e8d0ce6 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="e8d0ce6" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Industry Collaborations<sup>*</sup></h4>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-2c4018a elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="2c4018a" data-element_type="widget" data-widget_type="divider.default">
                <div class="elementor-widget-container">
                    <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-a14fb6c e-con-full e-flex e-con e-child"
                data-id="a14fb6c" data-element_type="container">
                <div class="elementor-element elementor-element-625febd elementor-widget__width-initial elementor-widget elementor-widget-counter"
                    data-id="625febd" data-element_type="widget" data-widget_type="counter.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix"></span>                                
                                <span class="elementor-counter-number-suffix">14</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-223a61c elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="223a61c" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Students Engagement clubs<sup>*</sup></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="elementor-element elementor-element-6aec9e8 e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="6aec9e8" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-2003ee3 e-flex e-con-boxed e-con e-child"
                data-id="2003ee3" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-26e82ad elementor-widget elementor-widget-heading animated fadeInUp"
                        data-id="26e82ad" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">“The first step is to establish that something is possible; then probability will occur”.</h2>
                            <br><i class="elementor-heading-title elementor-size-default">-Elon Musk</i>
                        </div>
                    </div>
                    {{-- <div class="elementor-element elementor-element-5c5a9eb elementor-widget elementor-widget-text-editor animated fadeInUp"
                        data-id="5c5a9eb" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>Sed duis auctor orci lacinia bibendum fermentum nec aptent montes. Lobortis quam
                                magna parturient justo vehicula. Senectus odio lobortis quam mus elit rutrum
                                suscipit lectus eleifend conubia.</p>
                        </div>
                    </div> --}}
                    {{-- <div class="elementor-element elementor-element-7913740 elementor-align-center elementor-widget elementor-widget-button animated fadeIn"
                        data-id="7913740" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:480}"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                    href="https://tebewebe.online/edupreme/template-kit/homepage/#">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Discover More</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-1068703 e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="1068703" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-2ef56d6 e-flex e-con-boxed e-con e-child"
                data-id="2ef56d6" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-bd23d60 e-con-full e-flex e-con e-child"
                        data-id="bd23d60" data-element_type="container">
                        <div class="elementor-element elementor-element-e4b8d93 elementor-widget elementor-widget-heading animated fadeInLeft"
                            data-id="e4b8d93" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Faculties &amp; Schools
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a4ca11f elementor-widget elementor-widget-heading animated fadeInUp"
                            data-id="a4ca11f" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">Courses We Offer</h3>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="elementor-element elementor-element-5deb637 e-con-full e-flex e-con e-child"
                        data-id="5deb637" data-element_type="container">
                        <div class="elementor-element elementor-element-2ad4206 elementor-widget elementor-widget-text-editor animated fadeInUp"
                            data-id="2ad4206" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:240}"
                            data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>Future engineers are empowered through rigorous and application-oriented training and learning activities. Our students take on real-world challenges by being empowered by our innovative curriculum, state-of-the-art facilities, and expert faculty. A wide variety of learnings offered with in-depth knowledge gained through practical experience. It then translates into industry-relevant skills, assuring a higher rate of employability and successful career in the future.</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-3f59310 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="3f59310" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            {{-- 
            fadeInUp ofr animation
            --}}
            {{-- Courses start --}}            

            <div class="elementor-element elementor-element-b7c8d9a e-flex e-con-boxed e-con e-child" data-id="b7c8d9a" data-element_type="container">
                <div class="e-con-inner row">
                    <div class="elementor-element elementor-element-a87c91c e-con-full e-flex e-con e-child animated fadeInUp col-lg-6" data-id="a87c91c" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:120}">
                        <a href="{{route('view-courses', 'bba')}}">
                            <div class="elementor-element elementor-element-efe993f elementor-widget elementor-widget-heading"
                                data-id="efe993f" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">                                
                                    <h4 class="elementor-heading-title elementor-size-default">BBA (120 Seats)</h4>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-9bf72fb elementor-widget elementor-widget-image"
                                data-id="9bf72fb" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="1280" height="853"
                                        src="{{asset('images/BBA_image.jpg')}}"
                                        class="attachment-full size-full wp-image-1093"
                                        alt="Young students painting on canvas during lesson in faculty of arts university"                                    
                                        sizes="(max-width: 1280px) 100vw, 1280px">
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a643fba e-flex e-con-boxed e-con e-child"
                                data-id="a643fba" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-db90bdc elementor-widget elementor-widget-heading"
                                        data-id="db90bdc" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">Cultivate strategic thinking and entrepreneurial skills through {{env('COLLEGE_NAME_SHORT')}}'s 3-year BBA programme. It provides you with a solid business administration foundation, getting you ready to take on leadership positions. Eligibility: 10+2 with 45%.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7ca9880 elementor-widget elementor-widget-button"
                                        data-id="7ca9880" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="{{route('view-courses', 'bba')}}">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Learn More</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- <div class="elementor-element elementor-element-8f23e05 e-con-full e-flex e-con e-child animated fadeInUp col-lg-6"
                        data-id="8f23e05" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <a href="#">
                            <div class="elementor-element elementor-element-7140809 elementor-widget elementor-widget-heading"
                                data-id="7140809" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h4 class="elementor-heading-title elementor-size-default">BCA (120 Seats)</h4>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-77d3cb1 elementor-widget elementor-widget-image"
                                data-id="77d3cb1" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" width="1280" height="853"
                                        src="{{asset('images/BCA_image.jpg')}}"
                                        class="attachment-full size-full wp-image-1498" alt="Explaining chemistry"                                    
                                        sizes="(max-width: 1280px) 100vw, 1280px">
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b126756 e-flex e-con-boxed e-con e-child"
                                data-id="b126756" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-f33ff06 elementor-widget elementor-widget-heading"
                                        data-id="f33ff06" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">Kick-start your IT career with {{env('COLLEGE_NAME_SHORT')}}'s 3-year BCA course. Develop necessary skills in cloud computing, IoT, and blockchain, integrating theoretical foundations with practical competencies for the contemporary age. Eligibility: 10+2 with 45%.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-bfb387f elementor-widget elementor-widget-button"
                                        data-id="bfb387f" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                    href="#">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Learn More</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>                                         --}}

                    {{-- <div class="elementor-element elementor-element-a87c91c e-con-full e-flex e-con e-child animated fadeInUp col-lg-6" data-id="8f23e05" data-element_type="container" --}}
                    <div class="elementor-element elementor-element-a87c91c e-con-full e-flex e-con e-child animated fadeInUp col-lg-6" data-id="8f23e05" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:120}">
                        {{-- data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}"> --}}
                        <a href="#">
                            <div class="elementor-element elementor-element-7140809 elementor-widget elementor-widget-heading"
                                data-id="7140809" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h4 class="elementor-heading-title elementor-size-default">BCA (120 Seats)</h4>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-77d3cb1 elementor-widget elementor-widget-image"
                                data-id="77d3cb1" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" width="1280" height="853"
                                        src="{{asset('images/BCA_image.jpg')}}"
                                        class="attachment-full size-full wp-image-1498" alt="Explaining chemistry"                                    
                                        sizes="(max-width: 1280px) 100vw, 1280px">
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b126756 e-flex e-con-boxed e-con e-child"
                                data-id="b126756" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-f33ff06 elementor-widget elementor-widget-heading"
                                        data-id="f33ff06" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">Kick-start your IT career with {{env('COLLEGE_NAME_SHORT')}}'s 3-year BCA course. Develop necessary skills in cloud computing, IoT, and blockchain, integrating theoretical foundations with practical competencies for the contemporary age. Eligibility: 10+2 with 45%.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-bfb387f elementor-widget elementor-widget-button"
                                        data-id="bfb387f" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="{{route('view-courses', 'bca')}}">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Learn More</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> 
                </div>
            </div>  
            <div class="elementor-element elementor-element-bc58107 e-flex e-con-boxed e-con e-child" data-id="bc58107" data-element_type="container">
                <div class="e-con-inner row">
                    <div class="elementor-element elementor-element-96dbaa9 e-con-full e-flex e-con e-child animated fadeInUp col-lg-6"
                        data-id="96dbaa9" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:120}">
                        <a href="{{route('view-courses', 'mba')}}">
                            <div class="elementor-element elementor-element-9da16ae elementor-widget elementor-widget-heading"
                                data-id="9da16ae" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h4 class="elementor-heading-title elementor-size-default">MBA (120 Seats)</h4>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-740812f elementor-widget elementor-widget-image"
                                data-id="740812f" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="1280" height="853"
                                        src="{{asset('images/MBA_image.jpg')}}"
                                        class="attachment-full size-full wp-image-1520"
                                        alt="University students studying with teacher"                                    
                                        sizes="(max-width: 1280px) 100vw, 1280px">
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-8b1438c e-flex e-con-boxed e-con e-child"
                                data-id="8b1438c" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-d5edd45 elementor-widget elementor-widget-heading"
                                        data-id="d5edd45" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">Propel your career towards future business leadership with {{env('COLLEGE_NAME_SHORT')}}'s MBA programme. Gain in-depth understanding with double specialisation in HR, Marketing, Finance, IT, IB, Operations, or Business Analytics. The 2-year AICTE approved course demands graduation with 50% marks.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3a94bac elementor-widget elementor-widget-button"
                                        data-id="3a94bac" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="{{route('view-courses', 'mba')}}">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Learn More</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>  
                    <div class="elementor-element elementor-element-907ff4b e-con-full e-flex e-con e-child animated fadeInUp col-lg-6"
                        data-id="907ff4b" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:240}">
                        <a href="#">
                            <div class="elementor-element elementor-element-8d28cd4 elementor-widget elementor-widget-heading"
                                data-id="8d28cd4" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h4 class="elementor-heading-title elementor-size-default">MCA (120 Seats)
                                    </h4>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-af150d6 elementor-widget elementor-widget-image"
                                data-id="af150d6" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="1280" height="853"
                                        src="{{asset('images/MCA_image.jpg')}}"
                                        class="attachment-full size-full wp-image-1555"
                                        alt="Students of medicine using laptop while learning together in lecture hall at the university."                                    
                                        sizes="(max-width: 1280px) 100vw, 1280px">
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d91a31f e-flex e-con-boxed e-con e-child"
                                data-id="d91a31f" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-a04df3a elementor-widget elementor-widget-heading"
                                        data-id="a04df3a" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">Develop your technical skills by studying {{env('COLLEGE_NAME_SHORT')}}'s 2-year MCA program. Immerse yourself in advanced computing with emphasis on AI, data analytics, and software development. 50% at graduation in the concerned stream such as Computer Science, IT, or Mathematics is the criterion.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7ef2220 elementor-widget elementor-widget-button"
                                        data-id="7ef2220" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="{{route('view-courses', 'mca')}}">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Learn More</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>                                      
                </div>
            </div>
            {{-- Courses end --}}            
        </div>
    </div>
    {{-- <div class="elementor-element elementor-element-db10bcf e-con-full e-flex e-con e-parent" data-id="db10bcf"
        data-element_type="container">
        <div class="elementor-element elementor-element-9e82b6b e-con-full e-flex e-con e-child" data-id="9e82b6b"
            data-element_type="container">
            <div class="elementor-element elementor-element-61d1be4 e-con-full e-flex elementor-invisible e-con e-child"
                data-id="61d1be4" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">
                <div class="elementor-element elementor-element-7a9c0d0 elementor-absolute elementor-view-default elementor-widget elementor-widget-icon"
                    data-id="7a9c0d0" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="icon icon-quote2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-896b6d2 elementor-widget elementor-widget-testimonial"
                    data-id="896b6d2" data-element_type="widget" data-widget_type="testimonial.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-testimonial-wrapper">
                            <div class="elementor-testimonial-content">{{env('COLLEGE_NAME_MID')}} literally redefined my expectations of learning! With advanced labs, support from teachers and working on AI-powered systems, I have learned skills that stand me right in good stead throughout my career.                                 
                            </div>
                            <div class="elementor-testimonial-meta">
                                <div class="elementor-testimonial-meta-inner">
                                    <div class="elementor-testimonial-details">
                                        <div class="elementor-testimonial-name"> – Vishal S.</div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-d406e04 elementor-widget elementor-widget-image"
                data-id="d406e04" data-element_type="widget" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" decoding="async" width="1280" height="1158"
                        src="{{asset('images/portrait-of-smiling-male-college-student-in-busy-communal-campus-building-e1701494224421.jpg')}}"
                        class="attachment-full size-full wp-image-1102"
                        alt="Portrait Of Smiling Male College Student In Busy Communal Campus Building"
                        srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/portrait-of-smiling-male-college-student-in-busy-communal-campus-building-e1701494224421.jpg 1280w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/portrait-of-smiling-male-college-student-in-busy-communal-campus-building-e1701494224421-300x271.jpg 300w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/portrait-of-smiling-male-college-student-in-busy-communal-campus-building-e1701494224421-1024x927.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/portrait-of-smiling-male-college-student-in-busy-communal-campus-building-e1701494224421-768x695.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/portrait-of-smiling-male-college-student-in-busy-communal-campus-building-e1701494224421-800x724.jpg 800w"
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
                        <h2 class="elementor-heading-title elementor-size-default">{{env('COLLEGE_NAME_SHORT')}}: Where Education Meets Innovation</h2>
                        
                    </div>
                </div>
                <div class="elementor-element elementor-element-d48357f elementor-widget elementor-widget-text-editor"
                    data-id="d48357f" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>{{env('COLLEGE_NAME')}} ({{env('COLLEGE_NAME_SHORT')}})-one of the prime technical education and research institutes-is situated in Greater Noida. {{env('COLLEGE_NAME_SHORT')}} is a premier institution for technical education, research, and innovation spread over a campus of 9.47 acres. The institute is going in line with NEP 2020 and SDG4 in terms of cognitive skills, values such as ethics, technology, plain old good sense, etc. It can focus on AI, clean energy, and startup incubation, thus conceiving a highly stimulating atmosphere that amalgamates the rich heritage of India with global academic excellence. It trains students for leadership, entrepreneurship, and research at par with the best so as to enable progress in society at large.</p>
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
    {{-- <div class="elementor-element elementor-element-2d44f15 e-flex e-con-boxed e-con e-parent" data-id="2d44f15"
        data-element_type="container">
        <div class="e-con-inner"> --}}
            {{-- <div class="elementor-element elementor-element-81195df e-flex e-con-boxed e-con e-child"
                data-id="81195df" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-6e4e2d8 elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="6e4e2d8" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:720}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Journey of Excellence</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2772079 elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="2772079" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default">Why Choose {{env('COLLEGE_NAME_SHORT')}} ? </h3>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bab279e elementor-invisible elementor-widget elementor-widget-text-editor"
                        data-id="bab279e" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>With knowledge, leadership skills, and guidance in building a successful career, SERI ensures a transformative engineering experience for students. </p>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="elementor-element elementor-element-f86666c e-flex e-con-boxed e-con e-child"
                data-id="f86666c" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-93954da e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="93954da" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                        <div class="elementor-element elementor-element-ab3c3f8 elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="ab3c3f8" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">
                                        <div class="elementor-icon-box-title">
                                            <span>Industry-Ready Curriculum</span>
                                        </div>
                                        <p class="elementor-icon-box-description">Courses are aligning themselves with the currents of the industry in such a way that it helps students gain practical knowledge through experiential learning, research-based projects, and mentorship from experienced faculty members. </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-35656c1 e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="35656c1" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="elementor-element elementor-element-c1c37cb elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="c1c37cb" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            <span>Innovation & Research Hub</span>
                                        </div>

                                        <p class="elementor-icon-box-description">
                                            {{env('COLLEGE_NAME_SHORT')}} promotes an independent culture through AI labs, startup incubators, and global partnership collaborations, where students participate in the most unique research and development activities. 
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-808216e e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex elementor-invisible e-con e-child"
                        data-id="808216e" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">
                        <div class="elementor-element elementor-element-aea1e1d elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="aea1e1d" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            <span>Strong Industry Connections</span>
                                        </div>

                                        <p class="elementor-icon-box-description">
                                            Internships, live projects, and master classes with industry leaders enrich practical corporate experiences that the students could gain.    
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="elementor-element elementor-element-1cc1886 elementor-hidden-desktop e-flex e-con-boxed e-con e-child"
                data-id="1cc1886" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-670821a e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="670821a" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">
                        <div class="elementor-element elementor-element-9c02e5c elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="9c02e5c" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            <span>Holistic Development & Campus Life</span>
                                        </div>

                                        <p class="elementor-icon-box-description">
                                            A lively mix of academics, extracurricular activities, leadership programs, and entrepreneurship initiatives encouraging comprehensive evolution and development.    
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-ca16346 e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="ca16346" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                        <div class="elementor-element elementor-element-dc2fe51 elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="dc2fe51" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            <span>Affordable and Quality Education</span>
                                        </div>

                                        <p class="elementor-icon-box-description">
                                            Offering competitive rates, {{env('COLLEGE_NAME_SHORT')}} provides consistently high standards of technical education alongside scholarships for deserving and meritorious students. 
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="elementor-element elementor-element-ce9563b e-flex e-con-boxed e-con e-child"
                data-id="ce9563b" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-831f372 e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="831f372" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                        <div class="elementor-element elementor-element-7bed086 elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="7bed086" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            <span>Holistic Development & Campus Life</span>
                                        </div>

                                        <p class="elementor-icon-box-description">
                                            A lively mix of academics, extracurricular activities, leadership programs, and entrepreneurship initiatives encouraging comprehensive evolution and development.
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="elementor-element elementor-element-98292ac e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="98292ac" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="elementor-element elementor-element-296c3f9 elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="296c3f9" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            <span>
                                                Affordable and Quality Education    
                                            </span>
                                        </div>

                                        <p class="elementor-icon-box-description">
                                            Offering competitive rates, SERI provides consistently high standards of technical education alongside scholarships for deserving and meritorious students.    
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bf93b01 e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex elementor-invisible e-con e-child"
                        data-id="bf93b01" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">
                        <div class="elementor-element elementor-element-6af215f elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="6af215f" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            <span>Dedicated Placement and Career Support</span>
                                        </div>

                                        <p class="elementor-icon-box-description">
                                            Strong partnerships with corporations guarantee excellent placement, mentorship programs, and career awareness through the guidance offered to the students in facilitating their placement rather than the other way around.    
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        {{-- </div>
    </div> --}}

    <div class="elementor-element elementor-element-db10bcf e-con-full e-flex e-con e-parent" data-id="db10bcf"
        data-element_type="container">
        <div class="elementor-element elementor-element-9e82b6b e-con-full e-flex e-con e-child" data-id="9e82b6b"
            data-element_type="container">
            <div class="elementor-element elementor-element-61d1be4 e-con-full e-flex elementor-invisible e-con e-child"
                data-id="61d1be4" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">
                {{-- <div class="elementor-element elementor-element-7a9c0d0 elementor-absolute elementor-view-default elementor-widget elementor-widget-icon"
                    data-id="7a9c0d0" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="icon icon-quote2"></i>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="elementor-element elementor-element-896b6d2 elementor-widget elementor-widget-testimonial"
                    data-id="896b6d2" data-element_type="widget" data-widget_type="testimonial.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-testimonial-wrapper">
                            <div class="elementor-testimonial-content">{{env('COLLEGE_NAME_SHORT')}}’s collaborative environment and emphasis on innovation have helped me develop both technical knowledge and problem-solving abilities. 
                                
                                                                 
                            </div>
                            <div class="elementor-testimonial-meta">
                                <div class="elementor-testimonial-meta-inner">
                                    <div class="elementor-testimonial-details">
                                        <div class="elementor-testimonial-name">-Preeti Wadhwa <br> (BBA Student 2nd Year)</div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="elementor-element elementor-element-d406e04 elementor-widget elementor-widget-image"
                data-id="d406e04" data-element_type="widget" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" decoding="async" width="1280" height="1158"
                        src="{{asset('images/home_student_girl.jpg')}}"
                        class="attachment-full size-full wp-image-1102"
                        alt="Portrait Of Smiling Male College Student In Busy Communal Campus Building"                        
                        sizes="(max-width: 1280px) 100vw, 1280px">
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-910aef9 e-con-full e-flex e-con e-child" data-id="910aef9"
            data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div style="background-color: #fff;" class="elementor-element elementor-element-4dba181 e-con-full e-flex e-con e-child"
                data-id="4dba181" data-element_type="container">
                <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="66a6537" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">{{env('COLLEGE_NAME_SHORT')}}: Empowering Visionaries, Building Innovators</h2>
                        
                    </div>
                </div>
                <div class="elementor-element elementor-element-d48357f elementor-widget elementor-widget-text-editor"
                    data-id="d48357f" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>
                            Empowering visionaries, giving life to innovators – this is {{env('COLLEGE_NAME_SHORT')}}. We revolutionize conventional learning, developing agile minds, moral leaders, and entrepreneurial values. Future-oriented learning is our curriculum, balancing experiential learning with global consciousness. With innovation, ethical leadership, and strong industry connections as our force, {{env('COLLEGE_NAME_SHORT')}} is your jumpstart to a dynamic and fulfilling career. Apart from the main programs, {{env('COLLEGE_NAME_SHORT')}} also provides comprehensive learning with certifications in CFA, CISI, Six Sigma, Python, R, and SPSS. The emphasis on providing additional credentials adds to the career prospects of the students and gives them an edge.
                        </p>
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
    <div class="elementor-element elementor-element-2d44f15 e-flex e-con-boxed e-con e-parent" data-id="2d44f15"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-81195df e-flex e-con-boxed e-con e-child"
                data-id="81195df" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-6e4e2d8 elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="6e4e2d8" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:720}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Why Study Here?</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2772079 elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="2772079" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default">Think Big, Think {{env('COLLEGE_NAME_SHORT')}}</h3>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bab279e elementor-invisible elementor-widget elementor-widget-text-editor"
                        data-id="bab279e" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>With a focus on holistic education, {{env('COLLEGE_NAME_SHORT')}} provides a culturally rich and diverse environment for hands-on learning, advanced research, support for startups, and collaboration on a global scale, all of which are rich in innovation.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-f86666c e-flex e-con-boxed e-con e-child"
                data-id="f86666c" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-93954da e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="93954da" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                        <div class="elementor-element elementor-element-ab3c3f8 elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="ab3c3f8" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">
                                        <div class="elementor-icon-box-title">
                                            <span>Accredited Excellence</span>
                                        </div>
                                        <p class="elementor-icon-box-description">With AICTE accreditation and AKTU affiliation in our corner, we bring gold-standard education laser-focused on your success. </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-35656c1 e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="35656c1" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="elementor-element elementor-element-c1c37cb elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="c1c37cb" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            <span>Industry-Aligned Learning</span>
                                        </div>

                                        <p class="elementor-icon-box-description">
                                            Get a real industry advantage with {{env('COLLEGE_NAME_SHORT')}}'s emphasis on live projects, internships, and certifications. Our programs are designed for career success, with practical experience, not theory. 
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-808216e e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex elementor-invisible e-con e-child"
                        data-id="808216e" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">
                        <div class="elementor-element elementor-element-aea1e1d elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="aea1e1d" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            <span>AI & NEP 2020 Alignment</span>
                                        </div>

                                        <p class="elementor-icon-box-description">
                                            Our experts combine cutting-edge science with Indian traditional knowledge, driven by AI and based on NEP 2020. It is employability-focused and future-ready.    
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="elementor-element elementor-element-1cc1886 elementor-hidden-desktop e-flex e-con-boxed e-con e-child"
                data-id="1cc1886" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-670821a e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="670821a" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">
                        <div class="elementor-element elementor-element-9c02e5c elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="9c02e5c" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            <span>Holistic Development & Campus Life</span>
                                        </div>

                                        <p class="elementor-icon-box-description">
                                            A lively mix of academics, extracurricular activities, leadership programs, and entrepreneurship initiatives encouraging comprehensive evolution and development.    
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-ca16346 e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="ca16346" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                        <div class="elementor-element elementor-element-dc2fe51 elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="dc2fe51" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            <span>Affordable and Quality Education</span>
                                        </div>

                                        <p class="elementor-icon-box-description">
                                            Offering competitive rates, {{env('COLLEGE_NAME_SHORT')}} provides consistently high standards of technical education alongside scholarships for deserving and meritorious students. 
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="elementor-element elementor-element-ce9563b e-flex e-con-boxed e-con e-child"
                data-id="ce9563b" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-831f372 e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="831f372" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                        <div class="elementor-element elementor-element-7bed086 elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="7bed086" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            <span>Comprehensive Career Development</span>
                                        </div>

                                        <p class="elementor-icon-box-description">
                                            {{env('COLLEGE_NAME_SHORT')}} focuses on the development of your potential through career advice, workshops on skill development, and mentorship schemes. We enable you to plan your route and reach your destinations.
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="elementor-element elementor-element-98292ac e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="98292ac" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="elementor-element elementor-element-296c3f9 elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="296c3f9" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            <span>
                                                Tech-Powered Campus
                                            </span>
                                        </div>

                                        <p class="elementor-icon-box-description">
                                            Step into a new learning environment with smart labs, latest technology, and a technologically equipped campus. {{env('COLLEGE_NAME_SHORT')}} provides students with future-proof facilities for education.
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bf93b01 e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex elementor-invisible e-con e-child"
                        data-id="bf93b01" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">
                        <div class="elementor-element elementor-element-6af215f elementor-position-left elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="6af215f" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">

                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg> </span>
                                    </div>

                                    <div class="elementor-icon-box-content">

                                        <div class="elementor-icon-box-title">
                                            <span>Lively Community & Care</span>
                                        </div>

                                        <p class="elementor-icon-box-description">
                                            Join a lively student community at {{env('COLLEGE_NAME_SHORT')}}, with extensive clubs, activities, and care services. We take care of your well-being and build lifetime relationships.  
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="elementor-element elementor-element-2c231cc e-flex e-con-boxed e-con e-parent" data-id="2c231cc"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-f20d47b e-con-full e-flex e-con e-child"
                data-id="f20d47b" data-element_type="container">
                <div class="elementor-element elementor-element-25ae81f elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="25ae81f" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Designing A Smarter Tomorrow</h2>
                    </div>
                </div>                
                <div class="elementor-element elementor-element-c124153 elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-position-left elementor-view-stacked elementor-shape-circle elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box"
                    data-id="c124153" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                            <div class="elementor-icon-box-icon">
                                <span class="elementor-icon">
                                    <i aria-hidden="true" class="icon icon-graduation-hat"></i> </span>
                            </div>

                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <span>Our Mission</span>
                                </div>

                                <p class="elementor-icon-box-description">
                                    To empower aspiring and next-generation leaders with transformative learning experiences that integrate sustainability, analytical thinking, and innovation, enabling them to thrive in a rapidly progressing corporate world.
                                </p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-425b85f elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                    data-id="425b85f" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4e27cf9 elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-position-left elementor-view-stacked elementor-shape-circle elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box"
                    data-id="4e27cf9" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                            <div class="elementor-icon-box-icon">
                                <span class="elementor-icon">
                                    <i aria-hidden="true" class="icon icon-team-1"></i> </span>
                            </div>

                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <span>Our Vision</span>
                                </div>

                                <p class="elementor-icon-box-description">
                                    To be a globally recognized hub for leadership incubation is our vision. We aim to foster agile, ethical, and forward-thinking professionals, empowering them to drive sustainable business transformations
                                </p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-0d5b6e0 e-con-full e-flex e-con e-child"
                data-id="0d5b6e0" data-element_type="container">
                <div class="elementor-element elementor-element-55f7182 elementor-invisible elementor-widget elementor-widget-image"
                    data-id="55f7182" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img loading="lazy" decoding="async" width="853" height="1280"
                            src="{{asset('images/student_group.png')}}"
                            class="attachment-full size-full wp-image-1240"
                            alt="Happy students graduating from university"                            
                            sizes="(max-width: 853px) 100vw, 853px">
                    </div>
                </div>
                <div class="elementor-element elementor-element-4d69d82 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="4d69d82" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p><em>“College is the meeting point where the river of your dreams meets the river of your
                                realities.”</em></p>
                    </div>
                </div>
            </div>
        </div>
    </div>            
    
    {{-- <div class="elementor-element elementor-element-16dc8b2 e-flex e-con-boxed e-con e-parent" data-id="16dc8b2"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-a51e5a1 e-con-full e-flex e-con e-child"
                data-id="a51e5a1" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-element elementor-element-8bb8c5f elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="8bb8c5f" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">5-Step Application Process</h2>
                    </div>
                </div>                
            </div>
            <div class="elementor-element elementor-element-aac22a3 e-con-full e-flex e-con e-child"
                data-id="aac22a3" data-element_type="container">
                <div class="elementor-element elementor-element-9061cdd elementor-view-stacked elementor-absolute e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                    data-id="9061cdd" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="icon icon-right-arrow"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-70b8b1b elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-view-default elementor-position-top elementor-widget elementor-widget-icon-box"
                    data-id="70b8b1b" data-element_type="widget" data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                            <div class="elementor-icon-box-icon">
                                <span class="elementor-icon">
                                    <i aria-hidden="true" class="icon icon-document"></i> </span>
                            </div>

                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <span>Apply Online:</span>
                                </div>

                                <p class="elementor-icon-box-description">Just fill out the form on our site. It's super easy.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-5de6345 e-con-full e-flex e-con e-child"
                data-id="5de6345" data-element_type="container">
                <div class="elementor-element elementor-element-6132b26 elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-view-default elementor-position-top elementor-widget elementor-widget-icon-box"
                    data-id="6132b26" data-element_type="widget" data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                            <div class="elementor-icon-box-icon">
                                <span class="elementor-icon">
                                    <i aria-hidden="true" class="icon icon-suitcase-1"></i> </span>
                            </div>

                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <span>Submit your Docs</span>
                                </div>

                                <p class="elementor-icon-box-description">Upload the documents we need, like your school records.</p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-a599576 elementor-view-stacked elementor-absolute e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                    data-id="a599576" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="icon icon-right-arrow"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-2cc9f97 e-con-full e-flex e-con e-child"
                data-id="2cc9f97" data-element_type="container">
                <div class="elementor-element elementor-element-3a390d1 elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-view-default elementor-position-top elementor-widget elementor-widget-icon-box"
                    data-id="3a390d1" data-element_type="widget" data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                            <div class="elementor-icon-box-icon">
                                <span class="elementor-icon">
                                    <i aria-hidden="true" class="icon icon-page-list"></i> </span>
                            </div>

                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <span>Entrance Exam</span>
                                </div>

                                <p class="elementor-icon-box-description">Take our test so we can assess what you know.</p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7aeea68 elementor-view-stacked elementor-absolute e-transform elementor-hidden-desktop elementor-hidden-tablet elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                    data-id="7aeea68" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="icon icon-right-arrow"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-169dbf0 e-con-full e-flex e-con e-child"
                data-id="169dbf0" data-element_type="container">
                <div class="elementor-element elementor-element-f948040 elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-view-default elementor-position-top elementor-widget elementor-widget-icon-box"
                    data-id="f948040" data-element_type="widget" data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                            <div class="elementor-icon-box-icon">
                                <span class="elementor-icon">
                                    <i aria-hidden="true" class="icon icon-Profile"></i> </span>
                            </div>

                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <span>Chat with Us</span>
                                </div>

                                <p class="elementor-icon-box-description">We'll have a one-on-one chat to see what you're all about.</p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-f17c39c elementor-view-stacked elementor-absolute e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                    data-id="f17c39c" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="icon icon-right-arrow"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-8c408d0 e-con-full e-flex e-con e-child"
                data-id="8c408d0" data-element_type="container">
                <div class="elementor-element elementor-element-1e6eb2b elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-view-default elementor-position-top elementor-widget elementor-widget-icon-box"
                    data-id="1e6eb2b" data-element_type="widget" data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">

                            <div class="elementor-icon-box-icon">
                                <span class="elementor-icon">
                                    <i aria-hidden="true" class="icon icon-credit-card"></i> </span>
                            </div>

                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <span>You're In!</span>
                                </div>

                                <p class="elementor-icon-box-description">
                                    Confirm your spot, and get ready for an excellent education experience.</p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-0794bfa elementor-view-stacked elementor-absolute e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                    data-id="0794bfa" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="icon icon-right-arrow"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <section>        
        <div class="container-fluid w-100 mt-1" style="position: relative;">  
            <div class="elementor-element elementor-element-2772079 elementor-widget elementor-widget-heading"
                data-id="2772079" data-element_type="widget"
                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    {{-- <h3 class="elementor-heading-title elementor-size-default">Top Recruiters</h3> --}}
                    <div class="row p-2">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3">                            
                            <h3 class="elementor-heading-title elementor-size-default red-line top-recruiters-title" style="width: max-content; padding-bottom:5px;">
                                <span style="font-weight: 300; font-size:28px; text-align:left; length-height:2">Top</span> <br>
                                Recruiters<sup style="color: #000;">*</sup></h3>                                                                                                    
                        </div>

                        <div class="col-lg-8">
                            <p style="text-align:left;">Partnered with leading multinational corporations, we provide unmatched placement opportunities in both national and international companies. Our strong industry connections empower graduates to embark on thriving careers, equipped with the skills, confidence, and global perspective demanded by top recruiters worldwide. SIMT—where aspirations meet excellence!</p>
                        </div>
                    </div>
                </div>
            </div>         
            <div class="carousel-fade-wrapper"> 
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="{{asset('recruiters/image1.png')}}" alt="Image 1" width="70" height="70"></div>
                    <div class="item"><img src="{{asset('recruiters/image2.png')}}" alt="Image 2" width="70" height="70"></div>
                    <div class="item"><img src="{{asset('recruiters/image3.png')}}" alt="Image 3" width="70" height="70"></div>
                    <div class="item"><img src="{{asset('recruiters/image4.png')}}" alt="Image 4" width="100" height="70"></div>
                    <div class="item"><img src="{{asset('recruiters/image5.png')}}" alt="Image 5" width="100" height="100" style="object-fit: cover;"></div>
                    <div class="item"><img src="{{asset('recruiters/image6.png')}}" alt="Image 6" width="70" height="70"></div>        
                    <div class="item"><img src="{{asset('recruiters/image7.png')}}" alt="Image 7" width="70" height="70"></div>        
                    <div class="item"><img src="{{asset('recruiters/image8.png')}}" alt="Image 8" width="70" height="70"></div>        
                    <div class="item"><img src="{{asset('recruiters/image9.png')}}" alt="Image 9" width="70" height="70"></div>                
                    <div class="item"><img src="{{asset('recruiters/image10.png')}}" alt="Image 10" width="70" height="70"></div>                
                    <div class="item"><img src="{{asset('recruiters/image11.png')}}" alt="Image 11" width="70" height="70"></div>                
                    <div class="item"><img src="{{asset('recruiters/image12.png')}}" alt="Image 12" width="70" height="70"></div>                
                </div>
            </div>

            
        </div>        
    </section>

    
    <div class="elementor-element elementor-element-d05a958 e-flex e-con-boxed e-con e-parent" data-id="d05a958"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-efd2968 e-flex e-con-boxed e-con e-child"
                data-id="efd2968" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-b32a1d1 e-con-full e-flex e-con e-child"
                        data-id="b32a1d1" data-element_type="container">
                        <div class="elementor-element elementor-element-4136899 elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="4136899" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Campus Life</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e9c2cf6 elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="e9c2cf6" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">{{env('COLLEGE_NAME_SHORT')}}: Your Second Home</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-325d42d elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="325d42d" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-620f817 e-con-full e-flex e-con e-child"
                        data-id="620f817" data-element_type="container">
                        <div class="elementor-element elementor-element-8a8a63b elementor-widget elementor-widget-text-editor"
                            data-id="8a8a63b" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>Tech-powered campus with smart labs.
                                    Vibrant community with clubs and events.
                                    Comfortable living: safe accommodation, premium dining.
                                    Wi-Fi across the 6.81-acre campus.
                                    Counseling and health services for your well-being.
                                    Build connections in a thriving student community.
                                    Convenient transport facilities.</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c90bda4 e-flex e-con-boxed e-con e-child"
                            data-id="c90bda4" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-003a668 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-invisible elementor-widget elementor-widget-elementskit-heading" style="width: 75%;"
                                    data-id="003a668" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                    data-widget_type="elementskit-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="ekit-wid-con">
                                            <div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                {{-- <h4 class="ekit-heading--title elementskit-section-title ">Event and Traditions</h4> --}}
                                                <div class="ekit-heading__description">                                                    
                                                    <ul style="color: #fff;">
                                                        <li>Tech-powered campus with smart labs.</li>
                                                        <li>Vibrant community with clubs and events.</li>
                                                        <li>Comfortable living: safe accommodation, premium dining.</li>
                                                        <li>Wi-Fi across the 6.81-acre campus.</li>
                                                        <li>Counseling and health services for your well-being.</li>
                                                        <li>Build connections in a thriving student community.</li>
                                                        <li>Convenient transport facilities.</li>                                                        
                                                    </ul>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2d6031c elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                    data-id="2d6031c" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-divider">
                                            <span class="elementor-divider-separator">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="elementor-element elementor-element-da266cd elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-invisible elementor-widget elementor-widget-elementskit-heading"
                                    data-id="da266cd" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:120}"
                                    data-widget_type="elementskit-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="ekit-wid-con">
                                            <div
                                                class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                <h4 class="ekit-heading--title elementskit-section-title ">Student
                                                    Activities</h4>
                                                <div class="ekit-heading__description">
                                                    <p>Condimentum a cubilia erat sit vehicula. Cras primis conubia
                                                        letius faucibus vehicula taciti ac vulputate facilisi augue.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-c2e1a0f elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                    data-id="c2e1a0f" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-divider">
                                            <span class="elementor-divider-separator">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-d091a59 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-invisible elementor-widget elementor-widget-elementskit-heading"
                                    data-id="d091a59" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:240}"
                                    data-widget_type="elementskit-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="ekit-wid-con">
                                            <div
                                                class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                <h4 class="ekit-heading--title elementskit-section-title ">
                                                    Transportation</h4>
                                                <div class="ekit-heading__description">
                                                    <p>Condimentum a cubilia erat sit vehicula. Cras primis conubia
                                                        letius faucibus vehicula taciti ac vulputate facilisi augue.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-a81fe31 e-flex e-con-boxed e-con e-parent" data-id="a81fe31" data-element_type="container">
        <div class="elementor-element elementor-element-2772079 elementor-widget elementor-widget-heading animated fadeInUp" style="padding-top: 30px;">
            <div class="elementor-widget-container">
                <h3 class="elementor-heading-title elementor-size-default">Why {{env('COLLEGE_NAME')}}<br> is the Best Choice?</h3>
            </div>
        </div>
        {{-- <div class="e-con-inner">
            <div class="elementor-element elementor-element-14a33ee e-flex e-con-boxed e-con e-child"
                data-id="14a33ee" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-d2d573e e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="d2d573e" data-element_type="container"
                        data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                        <div class="elementor-element elementor-element-6c8a126 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image"
                            data-id="6c8a126" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="1280" height="853"
                                    src="{{asset('images/courses_by_industries.jpg')}}"
                                    class="attachment-full size-full wp-image-1093"
                                    alt="Young students painting on canvas during lesson in faculty of arts university"                                    
                                    sizes="(max-width: 1280px) 100vw, 1280px">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-61b873b e-con-full e-flex e-con e-child"
                            data-id="61b873b" data-element_type="container">
                            <div class="elementor-element elementor-element-b7ef7f7 elementor-widget elementor-widget-elementskit-heading"
                                data-id="b7ef7f7" data-element_type="widget"
                                data-widget_type="elementskit-heading.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                        <div
                                            class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                            <h3 class="ekit-heading--title elementskit-section-title ">Courses by Industry:</h3>
                                            <div class="ekit-heading__description">
                                                <p>Be up to date with courses focused on contemporary business and technology driven learning.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-be4e1db e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="be4e1db" data-element_type="container"
                        data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
                        <div class="elementor-element elementor-element-b9d761a elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image"
                            data-id="b9d761a" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="1280" height="853"                                    
                                    src="{{asset('images/expert_faculty2.png')}}"
                                    class="attachment-full size-full wp-image-1090" alt="Athletics Track"                                    
                                    sizes="(max-width: 1280px) 100vw, 1280px">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-3e4cf67 e-con-full e-flex e-con e-child"
                            data-id="3e4cf67" data-element_type="container">
                            <div class="elementor-element elementor-element-796321f elementor-widget elementor-widget-elementskit-heading"
                                data-id="796321f" data-element_type="widget"
                                data-widget_type="elementskit-heading.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                        <div
                                            class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                            <h3 class="ekit-heading--title elementskit-section-title ">Expert Faculty</h3>
                                            <div class="ekit-heading__description">
                                                <p>Benefit from the Industry Professionals and best educators around a country away.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-90e76da e-flex e-con-boxed e-con e-child"
                data-id="90e76da" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-e559556 e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="e559556" data-element_type="container"
                        data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                        <div class="elementor-element elementor-element-59ec8ef elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image"
                            data-id="59ec8ef" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="1280" height="853"
                                    src="{{asset('images/inovative_ecosystem.jpg')}}"
                                    class="attachment-full size-full wp-image-429"
                                    alt="University students using laptops and digital tablet, working together"                                    
                                    sizes="(max-width: 1280px) 100vw, 1280px">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-ae487a2 e-con-full e-flex e-con e-child"
                            data-id="ae487a2" data-element_type="container">
                            <div class="elementor-element elementor-element-383aeb9 elementor-widget elementor-widget-elementskit-heading"
                                data-id="383aeb9" data-element_type="widget"
                                data-widget_type="elementskit-heading.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                        <div
                                            class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                            <h3 class="ekit-heading--title elementskit-section-title ">Innovative Ecosystem</h3>
                                            <div class="ekit-heading__description">
                                                <p>AI labs by you, cross domain research and collaborative, global work?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-fedf1d7 e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="fedf1d7" data-element_type="container"
                        data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
                        <div class="elementor-element elementor-element-2ab0ed5 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image"
                            data-id="2ab0ed5" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="1280" height="853"
                                    src="{{asset('images/career_help.jpg')}}"
                                    class="attachment-full size-full wp-image-1101"
                                    alt="Doctor examines the patient&#39;s pulse with stethoscope and records the results, health medical checkup"                                    
                                    sizes="(max-width: 1280px) 100vw, 1280px">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-cbd1643 e-con-full e-flex e-con e-child"
                            data-id="cbd1643" data-element_type="container">
                            <div class="elementor-element elementor-element-a2759e8 elementor-widget elementor-widget-elementskit-heading"
                                data-id="a2759e8" data-element_type="widget"
                                data-widget_type="elementskit-heading.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                        <div
                                            class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                            <h3 class="ekit-heading--title elementskit-section-title ">Careers Help</h3>
                                            <div class="ekit-heading__description">
                                                <p>Hands-on learning through internships with extensive placement support. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div> --}}

        <div class="container my-5">
            <div class="row g-4 p-2 align-items-center">                
                <div class="col-md-6" data-aos="fade-right">
                    <div class="d-flex custom-card">
                        <img src="{{asset('images/courses_by_industries.jpg')}}" alt="Student Writing" class="img-fluid" >
                        <div class="card-body">
                            <h5 class="card-title">Courses by Industry:</h5>
                            <p class="card-text">Be up to date with courses focused on contemporary business and technology driven learning.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6" data-aos="fade-left">
                    <div class="d-flex custom-card">
                        <img src="{{asset('images/expert_faculty2.png')}}" alt="Expert Faculty" class="img-fluid" >
                        <div class="card-body">
                            <h5 class="card-title">Expert Faculty</h5>
                            <p class="card-text">Benefit from the Industry Professionals and best educators around a country away.</p>
                        </div>
                    </div>
                </div>
    
            </div>

            <div class="row g-4 p-2 align-items-center">                
                <div class="col-md-6" data-aos="fade-right">
                    <div class="d-flex custom-card">
                        <img src="{{asset('images/inovative_ecosystem.jpg')}}" alt="Student Writing" class="img-fluid" >
                        <div class="card-body">
                            <h5 class="card-title">Innovative Ecosystem:</h5>
                            <p class="card-text">AI labs by you, cross domain research and collaborative, global work.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6" data-aos="fade-left">
                    <div class="d-flex custom-card">
                        <img src="{{asset('images/career_help.jpg')}}" alt="Expert Faculty" class="img-fluid" >
                        <div class="card-body">
                            <h5 class="card-title">Careers Help</h5>
                            <p class="card-text">Hands-on learning through internships with extensive placement support.</p>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>

        {{-- <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <style>
            .custom-card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }

        .custom-card img {
            height: 100%;
            object-fit: cover;
        }

        .custom-card .card-body {
            padding: 30px;
        }

        .custom-card .card-title {
            font-weight: 700;
        }

        @media (max-width: 767px) {
            .custom-card {
                flex-direction: column !important;
            }

            .custom-card img {
                width: 100%;
                height: auto;
            }
        }
        </style> --}}

        {{-- <div class="container my-5">
            <div class="row g-4 align-items-center">
                <!-- Card 1 -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="d-flex custom-card">
                        <img src="images1.jpg" alt="Student Writing" class="img-fluid" style="width: 50%;">
                        <div class="card-body">
                            <h5 class="card-title">Courses by Industry:</h5>
                            <p class="card-text">Be up to date with courses focused on contemporary business and technology driven learning.</p>
                        </div>
                    </div>
                </div>
    
                <!-- Card 2 -->
                <div class="col-md-6" data-aos="fade-left">
                    <div class="d-flex custom-card">
                        <img src="cosmos.jpg" alt="Expert Faculty" class="img-fluid" style="width: 50%;">
                        <div class="card-body">
                            <h5 class="card-title">Expert Faculty</h5>
                            <p class="card-text">Benefit from the Industry Professionals and best educators around a country away.</p>
                        </div>
                    </div>
                </div>
    
            </div>
        </div> --}}

        {{-- <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // animation duration
            once: true      // only animate once
        });
    </script> --}}
    </div>
    <!--Blogs-->

    <section class="tabs-container">
        <div>
            <h2>Latest Articles</h2>
        </div>
        {{-- <div class="blog-grid">
            @foreach ($latest_blogs as $blog)                
                <div class="blog-items">
                    <a href="{{route('blogs.details', $blog->id)}}" style="text-decoration: none;">
                        <div class="blog-img">
                            <img src="{{asset($blog->image)}}">
                        </div>
                        <div class="blog-cont">
                            <p class="text-muted">
                                <i class="icon icon-calendar"></i> {{ $blog->created_at->format('d M Y h:i A') }}
                            </p>
                            <h2 style="margin: 0; font-size: 18px;">{{$blog->blog_title}}</h2>
                            <p style="margin: 5px 0;color: grey;">{{$blog->meta_description}}</p>
                        </div>
                        <div style="padding-left:18px">
                            <p class="blog-lm">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="9" viewBox="0 0 16 9"><path fill="#000" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5"/><path fill="#000" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z"/></svg></p>
                        </div>
                    </a>
                </div>
            @endforeach             
        </div> --}}

        <div class="row">
            @foreach ($latest_blogs as $blog)  
            {{-- <div class="blog-items col-lg-4">
                <a href="{{route('blogs.details', $blog->id)}}" style="text-decoration: none;">
                    <div class="blog-img">
                        <img src="{{asset($blog->image)}}">
                    </div>
                    <div class="blog-cont">
                        <p class="text-muted">
                            <i class="icon icon-calendar"></i> {{ $blog->created_at->format('d M Y h:i A') }}
                        </p>
                        <h2 style="margin: 0; font-size: 18px;">{{$blog->blog_title}}</h2>
                        <p style="margin: 5px 0;color: grey;">{{$blog->meta_description}}</p>
                    </div>
                    <div style="padding-left:18px">
                        <p class="blog-lm">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="9" viewBox="0 0 16 9"><path fill="#000" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5"/><path fill="#000" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z"/></svg></p>
                    </div>
                </a>
            </div> --}}

            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="{{route('blogs.details', $blog->seo_url)}}" style="text-decoration: none;">
                <div class="card">
                  <img src="{{$blog->image}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{$blog->blog_title}}</h5>
                    <p class="text-muted">
                        <i class="icon icon-calendar"></i> {{ $blog->created_at->format('d M Y h:i A') }}
                    </p>
                    <p class="card-text">{{$blog->meta_description}}</p>
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    <p class="blog-lm">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="9" viewBox="0 0 16 9"><path fill="#000" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5"/><path fill="#000" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z"/></svg></p>
                  </div>
                </div>
                </a>
            </div>
                
            @endforeach             
        </div>
    </section>
 
    
    <div class="elementor-element elementor-element-e6724ef e-flex e-con-boxed e-con e-parent" data-id="e6724ef"
        data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-5a80b44 e-con-full e-flex e-con e-child" style="width: 75%;"
                data-id="5a80b44" data-element_type="container">
                <div class="elementor-element elementor-element-0629977 elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="0629977" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Facing Limited Opportunities of Innovation?</h2>
                        <h4 style="color: #fff;">{{env('COLLEGE_NAME_SHORT')}} Drive Excellence in Management and Technology!</h4>
                    </div>
                </div>
                <div class="elementor-element elementor-element-f5426f5 elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="f5426f5" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>
                            We emphasize on research as well as applied learning through Latest Resources Our state-of-the art innovation Hubs, AI labs and collaborative research centers are the right place to take dreams to reality. You can whether you are enthusiastic about green energy, artificial intelligence or social innovation there are resources and mentors on the way.
                        </p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-c44af66 elementor-invisible elementor-widget elementor-widget-button"
                    data-id="c44af66" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:480}"
                    data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="#">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-icon">
                                        <i aria-hidden="true" class="icon icon-right-arrow2"></i> </span>
                                    <span class="elementor-button-text">Don’t Miss Out - Connect with Us Today!</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">            
        <!-- Modal -->
        {{-- <div class="modal fade" id="autoPopupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-3 w-100">
                <div class="modal-header border-0">
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">                                        
                        <form id="contact-form-modal" method="POST" data-action="{{ route('submit-contact') }}">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="modal-title w-100 text-dark fw-bold" id="popupModalLabel">
                                        Request Academic Assistance
                                    </h3>
                                    <br>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Your Name*</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Your Email*</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Your Phone Number*</label>
                                    <input type="tel" name="phone" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Select Program*</label>
                                    <select class="form-control" name="program" required>
                                        <option value="">Select program</option>
                                        <option value="bba">BBA</option>
                                        <option value="bca">BCA</option>
                                        <option value="mba">MBA</option>
                                        <option value="mca">MCA</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Your City*</label>
                                    <input type="text" name="city " class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Your State*</label>
                                    <input type="text" name="state" class="form-control" required>
                                </div> 
                                <div class="col-lg-3">                                    
                                    <button type="submit" class="btn btn-primary_2 px-5 submit-btn" style="padding:15px 25px !important; width:200px;">Submit</button>                            
                                </div>                               
                            </div>
                        </form>                  
                    </div>
            </div>
            </div>
        </div> --}}
    </div>
</div>




<script>
    const modalId = 'autoPopupModal';
    const modalEl = document.getElementById(modalId);
    const modal = new bootstrap.Modal(modalEl);
      
  
    // Function to show modal after 5 seconds
    function showModalAfterDelay() {
      reopenTimeout = setTimeout(() => {
        if (!modalEl.classList.contains('show')) {
          modal.show();
          closePopup();  
        }
      }, 2000);
    }    
    showModalAfterDelay();    
</script>

@section('target-x')
    {{-- <script id="targetx-enquiry-script" data-context="SIMT" data-heading="Admissions Open 2025" data-bgcolor="black" src="https://enquirywidget.targetx.in/assets/7/targetx_widget.js" defer></script> --}}
@endsection
  
{{-- <script>
  // Form validation
  document.getElementById('callbackForm').addEventListener('submit', function (e) {
    if (!this.checkValidity()) {
      e.preventDefault();
      e.stopPropagation();
    }
    this.classList.add('was-validated');
  });
</script> --}}


{{-- <script>
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
</script> --}}



@endsection

