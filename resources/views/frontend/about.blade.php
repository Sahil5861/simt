@extends('frontend.layout')
@section('title', 'About')

@section('main_content')   
<div data-elementor-type="wp-post" data-elementor-id="1184" class="elementor elementor-1184" style="background-color: #fff;">
    <div class="elementor-element elementor-element-9c0d281 e-flex e-con-boxed e-con e-parent e-lazyloaded" style="background-image: url('../images/about_us_banner.jpg');"
        data-id="9c0d281" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-3871437 e-con-full e-flex e-con e-child"
                data-id="3871437" data-element_type="container">
                <div class="elementor-element elementor-element-72ef988 elementor-widget elementor-widget-heading animated fadeInDown"
                    data-id="72ef988" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">About Campus</h1>
                    </div>
                </div>
                <div class="elementor-element elementor-element-8765ec4 elementor-widget elementor-widget-heading animated fadeInLeft"
                    data-id="8765ec4" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title" style="font-size: 30px;">Welcome to</h3>
                        <br>
                        <h2 class="elementor-heading-title elementor-size-default">{{ENV('COLLEGE_NAME')}} ({{env('COLLEGE_NAME_SHORT')}})</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-18bcc94 e-flex e-con-boxed e-con e-child"
                    data-id="18bcc94" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-61ad27f elementor-widget__width-initial elementor-widget-divider--view-line elementor-widget elementor-widget-divider animated fadeInUp"
                            data-id="61ad27f" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                            data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-162d4ad elementor-widget-mobile__width-initial elementor-widget elementor-widget-text-editor animated fadeInRight"
                            data-id="162d4ad" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                            data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>{{env('COLLEGE_NAME_SHORT')}}, a leading <b>business school</b> with a focus on technology, offers an interdisciplinary approach, advanced research capabilities, and elevated collaboration in the fields of <b>business management</b> and technology</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-023796d e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="023796d" data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-e33acf4 e-con-full e-flex e-con e-child"
                data-id="e33acf4" data-element_type="container">
                <div class="elementor-element elementor-element-c059924 elementor-invisible elementor-widget elementor-widget-image"
                    data-id="c059924" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img decoding="async" width="1080" height="721"
                            src="{{asset('images/about_image.jpeg')}}"
                            class="attachment-full size-full wp-image-1253" alt=""                            
                            sizes="(max-width: 1080px) 100vw, 1080px">
                    </div>
                </div>
                <div class="elementor-element elementor-element-4c8f429 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-spacer"
                    data-id="4c8f429" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-61a7bf0 e-con-full e-flex e-con e-child"
                data-id="61a7bf0" data-element_type="container">
                <div class="elementor-element elementor-element-2051bf3 elementor-invisible elementor-widget elementor-widget-elementskit-heading"
                    data-id="2051bf3" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                    data-widget_type="elementskit-heading.default">
                    <div class="elementor-widget-container">
                        <div class="ekit-wid-con">
                            <div
                                class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                <h2 class="ekit-heading--title elementskit-section-title ">Management & Technology Experts</h2>
                                {{-- <h3 class="ekit-heading--subtitle elementskit-section-subtitle">Is your education preparing you for what you intend to do in the future?</h3> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4dfb54b elementor-widget elementor-widget-text-editor"
                    data-id="4dfb54b" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container"> 
                        <p>{{env('COLLEGE_NAME_SHORT')}} is empowering youth and future generations to unlock the opportunities for tomorrow. This evolving landscape will create both opportunities and challenges, continuously shaping the way the youth and future generations will navigate and experience life. To address them, innovation is, and will continue to be, the key.</p>                                               
                        <p>{{env('COLLEGE_NAME_SHORT')}} aims to mold <b>future business professionals</b> who think strategically and ahead of their times, going beyond the traditional <b>business school</b> setup. 
                            Innovation and <b>academic excellence</b> come together at {{env('COLLEGE_NAME_SHORT')}}, preparing students to become <b>future business leaders</b>, managers, and technologists.
                        </p>
                        <p>we have built trust among students as we are committed to working on futuristic research, real-life problem solving, and curriculum inclusivity aligned with industry expectations. </p>
                        <p>We drive creativity, leadership, and ethical practices through a student-centric approach. Students through {{env('COLLEGE_NAME_SHORT')}} are trained in simulation exercises, advanced AI labs, and interdisciplinary projects to face the global workforce. Our goal is to prepare tomorrow's leaders to change the world through innovation meaningfully.</p>                        
                    </div>
                </div>
                {{-- <div class="elementor-element elementor-element-40d9029 elementor-widget elementor-widget-button"
                    data-id="40d9029" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="#">
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
    {{-- <div class="elementor-element elementor-element-baaad7b e-flex e-con-boxed e-con e-parent" data-id="baaad7b"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-af8341c e-con-full e-flex e-con e-child"
                data-id="af8341c" data-element_type="container">
                <div class="elementor-element elementor-element-62d70c7 elementor-widget__width-initial elementor-widget elementor-widget-counter"
                    data-id="62d70c7" data-element_type="widget" data-widget_type="counter.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix">#</span>
                                <span class="elementor-counter-number" data-duration="2000" data-to-value="32"
                                    data-from-value="0" data-delimiter=",">0</span>
                                <span class="elementor-counter-number-suffix"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-b7e6e91 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="b7e6e91" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Worlds Best Education Program
                        </h4>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-9a81c48 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="9a81c48" data-element_type="widget" data-widget_type="divider.default">
                <div class="elementor-widget-container">
                    <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-3241afc e-con-full e-flex e-con e-child"
                data-id="3241afc" data-element_type="container">
                <div class="elementor-element elementor-element-a8c913f elementor-widget__width-initial elementor-widget elementor-widget-counter"
                    data-id="a8c913f" data-element_type="widget" data-widget_type="counter.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix"></span>
                                <span class="elementor-counter-number" data-duration="2000" data-to-value="99"
                                    data-from-value="0" data-delimiter=",">0</span>
                                <span class="elementor-counter-number-suffix">%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-1e83ff0 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="1e83ff0" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Reveive Multiyear Fellowships
                        </h4>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-2aee7ad elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-tablet__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="2aee7ad" data-element_type="widget" data-widget_type="divider.default">
                <div class="elementor-widget-container">
                    <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-4c3620d e-con-full e-flex e-con e-child"
                data-id="4c3620d" data-element_type="container">
                <div class="elementor-element elementor-element-4e0f2e7 elementor-widget__width-initial elementor-widget elementor-widget-counter"
                    data-id="4e0f2e7" data-element_type="widget" data-widget_type="counter.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix"></span>
                                <span class="elementor-counter-number" data-duration="2000" data-to-value="87"
                                    data-from-value="0" data-delimiter=",">0</span>
                                <span class="elementor-counter-number-suffix">%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-eb90b9d elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="eb90b9d" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Freshman Graduation Rate</h4>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-3c54f84 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="3c54f84" data-element_type="widget" data-widget_type="divider.default">
                <div class="elementor-widget-container">
                    <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-96f7549 e-con-full e-flex e-con e-child"
                data-id="96f7549" data-element_type="container">
                <div class="elementor-element elementor-element-05ccbb4 elementor-widget__width-initial elementor-widget elementor-widget-counter"
                    data-id="05ccbb4" data-element_type="widget" data-widget_type="counter.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix"></span>
                                <span class="elementor-counter-number" data-duration="2000" data-to-value="1.5"
                                    data-from-value="0" data-delimiter=",">0</span>
                                <span class="elementor-counter-number-suffix">M</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-02cedd2 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="02cedd2" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Undergrads from the State</h4>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="elementor-element elementor-element-ef1ac9a e-flex e-con-boxed elementor-invisible e-con e-parent" style="margin-bottom: 5px;"
        data-id="ef1ac9a" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;animation_mobile&quot;:&quot;fadeInUp&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-61c9462 e-con-full e-flex e-con e-child"
                data-id="61c9462" data-element_type="container">
                <div class="elementor-element elementor-element-a7145b6 elementor-widget elementor-widget-heading"
                    data-id="a7145b6" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Engineering the Future</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-baaa77e elementor-widget elementor-widget-text-editor"
                    data-id="baaa77e" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>The {{env('COLLEGE_NAME')}} ({{env('COLLEGE_NAME_SHORT')}}) believes that education is the solution for a sustainable world. Our aspiration is not only to educate but to develop future leaders for a world of greater good. {{env('COLLEGE_NAME_SHORT')}}'s curriculum addresses the 2030 Agenda for Education and NEP 2020 as inclusive, equitable, and lifelong learning. {{env('COLLEGE_NAME_SHORT')}} aims to empower learners toward world progress while embedding culture values by incorporating Indian knowledge systems and fusing these with modern science and technology.</p>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-5b5db1a e-con-full e-flex elementor-invisible e-con e-child"
                data-id="5b5db1a" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;animation_delay&quot;:720}">
                <div class="elementor-element elementor-element-4ead210 elementor-widget elementor-widget-heading"
                    data-id="4ead210" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Innovation for Success</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-dd66122 elementor-widget elementor-widget-text-editor"
                    data-id="dd66122" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Innovation is at the heart of {{env('COLLEGE_NAME_SHORT')}}. We are committed to radical learning with state-of-the-art AI and cross-disciplinary research labs, collaborative research with global institutions, and addressing real-world problems through innovation hubs. {{env('COLLEGE_NAME_SHORT')}} fosters an innovative ecosystem where students conceptualize new ideas, test freely, and implement innovations.</p>                        
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-2c37642 e-con-full e-flex elementor-invisible e-con e-child"
                data-id="2c37642" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;animation_delay&quot;:960}">
                <div class="elementor-element elementor-element-9eb217c elementor-widget elementor-widget-heading"
                    data-id="9eb217c" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Our Excellence</h3>
                    </div>

                </div>
                <div class="elementor-element elementor-element-b698c82 elementor-widget elementor-widget-text-editor"
                    data-id="b698c82" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>
                            {{env('COLLEGE_NAME_SHORT')}}, a premier <b>business school</b>, offers a range of UG and PG courses, designed with <b>industry relevance</b> in mind.
                            Our <b>business-focused</b> curriculum includes BBA, BCA, MCA, and our MBA with dual specialization in key <b>management</b> areas: HR, <b>Marketing, Finance, Operations, Business Analytics,</b> IT, and IB.
                            We are committed to providing quality education and the success of our students in their professional life.    
                        </p>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-3c66e7c e-flex e-con-boxed e-con e-parent" style="padding: 50px;" data-id="3c66e7c"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-fd4493a e-con-full e-flex e-con e-child"
                data-id="fd4493a" data-element_type="container">
                <div class="elementor-element elementor-element-5b3fe58 elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="5b3fe58" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Our Core Values</h2>
                    </div>
                </div>                
                <div class="elementor-element elementor-element-ce186bd elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-position-left elementor-view-stacked elementor-shape-circle elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box"
                    data-id="ce186bd" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <strong>Futuristic Education -</strong><span>Cutting-edge programs designed for real-world corporate challenges. </span>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-cfbd413 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                    data-id="cfbd413" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator">
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="elementor-element elementor-element-ce186bd elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-position-left elementor-view-stacked elementor-shape-circle elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box"
                    data-id="ce186bd" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <strong>Sustainability-Driven Approach -</strong><span>Learning that integrates responsible and ethical leadership.</span>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-cfbd413 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                    data-id="cfbd413" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator">
                            </span>
                        </div>
                    </div>
                </div>

                <div class="elementor-element elementor-element-ce186bd elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-position-left elementor-view-stacked elementor-shape-circle elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box"
                    data-id="ce186bd" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <strong>Global Exposure -</strong><span>Opportunities for international collaborations and insights.</span>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-cfbd413 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                    data-id="cfbd413" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator">
                            </span>
                        </div>
                    </div>
                </div>


                <div class="elementor-element elementor-element-ce186bd elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-position-left elementor-view-stacked elementor-shape-circle elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box"
                    data-id="ce186bd" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <strong>Analytical Excellence -</strong><span>Data-driven decision-making and strategic problem-solving skills.</span>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-cfbd413 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                    data-id="cfbd413" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator">
                            </span>
                        </div>
                    </div>
                </div>


                <div class="elementor-element elementor-element-ce186bd elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-position-left elementor-view-stacked elementor-shape-circle elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box"
                    data-id="ce186bd" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="icon-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-content">

                                <div class="elementor-icon-box-title">
                                    <strong>Innovation & Agility -</strong><span>Training for leaders to adapt and thrive in evolving industries.</span>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>                

                
            </div>
            <div class="elementor-element elementor-element-b3bc3ce e-con-full e-flex e-con e-child"
                data-id="b3bc3ce" data-element_type="container">
                <div class="elementor-element elementor-element-810853d elementor-invisible elementor-widget elementor-widget-image"
                    data-id="810853d" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img decoding="async" width="853" height="1280"
                            src="{{asset('images/home_student.jpg')}}"
                            class="attachment-full size-full wp-image-1240"
                            alt="Happy students graduating from university"                            
                            sizes="(max-width: 853px) 100vw, 853px">
                    </div>
                </div>
                <div class="elementor-element elementor-element-c3ea21a elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="c3ea21a" data-element_type="widget"
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

    <div class="elementor-element elementor-element-7466030 e-flex e-con-boxed e-con e-parent" data-id="7466030"
        data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-ce51f2d e-flex e-con-boxed e-con e-child"
                data-id="ce51f2d" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-d4b28b4 elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="d4b28b4" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Your Launchpad to Global Opportunities, Start with {{env('COLLEGE_NAME_SHORT')}}!</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bb18dba elementor-invisible elementor-widget elementor-widget-text-editor"
                        data-id="bb18dba" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>Experience a {{env('COLLEGE_NAME_SHORT')}}'s curriculum in sync with globally aligned curriculum, relevant research and industry engagement. Empowering you towards future-looking Management and technology leaders.</p>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-792b5c2 elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
                        data-id="792b5c2" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:480}"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                    href="{{route('coursesoffered')}}">
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
    </div>
</div>
@endsection