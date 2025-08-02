@extends('frontend.layout')
@section('title', 'Home')

<style>
    .w-50{
        width: 50% !important;
    }
</style>

@section('main_content')    
<div data-elementor-type="wp-post" data-elementor-id="304" class="elementor elementor-304">
    <div class="elementor-element elementor-element-e7b1143 e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="e7b1143" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-c449766 e-con-full e-flex e-con e-child"
                data-id="c449766" data-element_type="container">
                <div class="elementor-element elementor-element-498494d elementor-widget elementor-widget-heading animated fadeInUp"
                    data-id="498494d" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">                            
                            {{env('COLLEGE_NAME_SHORT')}}: Transforming  Your Aspirations into Engineering Achievements
                        </h1>
                    </div>
                </div>
                {{-- <div class="elementor-element elementor-element-cc5b648 elementor-widget-mobile__width-initial elementor-widget elementor-widget-text-editor animated fadeInUp"
                    data-id="cc5b648" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:240}"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Approved By AICTE, Govt of India & Affiliated to: (MDU, Rohtak),Shri Vishwakarma Skill University (SVSU),Palwal & HSBTE Panchkula </p>
                    </div>
                </div> --}}

                
                <div class="elementor-element elementor-element-2a445b5 e-flex e-con-boxed e-con e-child animated fadeIn"
                    data-id="2a445b5" data-element_type="container"
                    data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:720}">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-970618e elementor-mobile-align-justify elementor-widget-mobile__width-inherit elementor-widget elementor-widget-button"
                            data-id="970618e" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-md"
                                        href="#">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-icon">
                                                <i aria-hidden="true" class="icon icon-right-arrow2"></i> </span>
                                            <span class="elementor-button-text">Aplly Now </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="elementor-element elementor-element-6151edb elementor-mobile-align-justify elementor-widget-mobile__width-inherit elementor-widget elementor-widget-button"
                            data-id="6151edb" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-md"
                                        href="#">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Our Mission</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <marquee behavior="loop" direction="left" style="padding: 10px; color:#324A7D; font-weight:bold;">Admission Helpline :- +91-9812829027, +91-9821613002</marquee>
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
                        <h3 class="elementor-heading-title elementor-size-default">University Life</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-b011bb9 elementor-widget elementor-widget-text-editor"
                    data-id="b011bb9" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>All-inclusive academic environment that encourages growth, creativity, and a lifetime of memories.</p>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-8f2af22 e-con-full e-flex e-con e-child animated fadeInLeft"
                data-id="8f2af22" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;animation_delay&quot;:720,&quot;animation_mobile&quot;:&quot;none&quot;}">
                <div class="elementor-element elementor-element-341d01b elementor-widget elementor-widget-heading"
                    data-id="341d01b" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Skilled Lecturers</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-79d0de1 elementor-widget elementor-widget-text-editor"
                    data-id="79d0de1" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Lessons are taught by an innovative faculty at the forefront of their fields, helping to advance knowledge through both teaching and cutting-edge research.</p>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-0d6dc5d e-con-full e-flex e-con e-child"
                data-id="0d6dc5d" data-element_type="container"
                data-settings="{&quot;animation_mobile&quot;:&quot;none&quot;}">
                <div class="elementor-element elementor-element-1430bfb elementor-widget elementor-widget-heading"
                    data-id="1430bfb" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Scholarship Facility</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-31dbb7f elementor-widget elementor-widget-text-editor"
                    data-id="31dbb7f" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Scholarships based on merit to empower talent without the barrier of financial circumstances.</p>
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
                            src="./Homepage – Edupreme_files/group-of-happy-international-students-posing-outdoors-near-university-building.jpg"
                            class="attachment-full size-full wp-image-427"
                            alt="Group of happy international students posing outdoors near university building"
                            srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/group-of-happy-international-students-posing-outdoors-near-university-building.jpg 1280w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/group-of-happy-international-students-posing-outdoors-near-university-building-300x200.jpg 300w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/group-of-happy-international-students-posing-outdoors-near-university-building-1024x683.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/group-of-happy-international-students-posing-outdoors-near-university-building-768x512.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/group-of-happy-international-students-posing-outdoors-near-university-building-1536x1025.jpg 1536w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/group-of-happy-international-students-posing-outdoors-near-university-building-800x534.jpg 800w"
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
                        <h3 class="elementor-heading-title elementor-size-default">Welcome to {{env('COLLEGE_NAME')}} ({{env('COLLEGE_NAME_SHORT')}})</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-d0fe679 elementor-widget elementor-widget-heading animated fadeInUp"
                    data-id="d0fe679" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <p class="elementor-heading-title elementor-size-default">Enabling future engineers via education inspired by innovation, forte in research, and teamwork across disciplines and industries.</p>                        
                        <p class="elementor-heading-title elementor-size-default">We have best-in-class infrastructure, seasoned faculty and experiential learning to create engineers-ready-for-industry. We emphasize on innovation, academic excellence, and overall development; standing as a premier institution.</p>
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
                        <h4 class="elementor-heading-title elementor-size-default">Libraries, Labs & Digital Hub
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
                                <span class="elementor-counter-number" data-duration="2000" data-to-value="80"
                                    data-from-value="0" data-delimiter=",">80</span>
                                <span class="elementor-counter-number-suffix">%</span>
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
                                <span class="elementor-counter-number" data-duration="2000" data-to-value="92"
                                    data-from-value="0" data-delimiter=",">92</span>
                                <span class="elementor-counter-number-suffix">%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-e8d0ce6 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="e8d0ce6" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Research Funds Drive Innovation</h4>
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
                                <span class="elementor-counter-number-suffix">30+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-223a61c elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="223a61c" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Tech, Cultural & Sports Events</h4>
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
                            <h2 class="elementor-heading-title elementor-size-default">“Engineering is the art of directing the great sources of power in nature for the use and convenience of man</h2>
                            <br><i class="elementor-heading-title elementor-size-default">-Thomas Tredgold</i>
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
                    <div class="elementor-element elementor-element-5deb637 e-con-full e-flex e-con e-child"
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
                    </div>
                </div>
            </div>
            {{-- 
            fadeInUp ofr animation
            --}}
            {{-- Courses --}}
            {{-- <div class="elementor-element elementor-element-b7c8d9a e-flex e-con-boxed e-con e-child" data-id="b7c8d9a" data-element_type="container">                
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-8f23e05 e-con-full e-flex e-con e-child animated fadeInUp "
                        data-id="8f23e05" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="elementor-element elementor-element-7140809 elementor-widget elementor-widget-heading"
                            data-id="7140809" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h4 class="elementor-heading-title elementor-size-default">Computer Science and Engineering</h4>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-77d3cb1 elementor-widget elementor-widget-image"
                            data-id="77d3cb1" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="1280" height="853"
                                    src="{{asset('images/explaining-chemistry.jpg')}}"
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
                                        <p class="elementor-heading-title elementor-size-default">Tempor rhoncus
                                            facilisi leo ut porta ultrices sit bibendum consequat congue. Proin
                                            velit mollis gravida tincidunt vulputate curae.</p>
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
                    </div>
                    <div class="elementor-element elementor-element-a87c91c e-con-full e-flex e-con e-child animated fadeInUp "
                        data-id="a87c91c" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:120}">
                        <div class="elementor-element elementor-element-efe993f elementor-widget elementor-widget-heading"
                            data-id="efe993f" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h4 class="elementor-heading-title elementor-size-default">Arts &amp; Sciences</h4>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9bf72fb elementor-widget elementor-widget-image"
                            data-id="9bf72fb" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="1280" height="853"
                                    src="./Homepage – Edupreme_files/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university.jpg"
                                    class="attachment-full size-full wp-image-1093"
                                    alt="Young students painting on canvas during lesson in faculty of arts university"
                                    srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university.jpg 1280w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-300x200.jpg 300w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-1024x682.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-768x512.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-1536x1024.jpg 1536w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-800x533.jpg 800w"
                                    sizes="(max-width: 1280px) 100vw, 1280px">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a643fba e-flex e-con-boxed e-con e-child"
                            data-id="a643fba" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-db90bdc elementor-widget elementor-widget-heading"
                                    data-id="db90bdc" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">Tempor rhoncus
                                            facilisi leo ut porta ultrices sit bibendum consequat congue. Proin
                                            velit mollis gravida tincidunt vulputate curae.</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7ca9880 elementor-widget elementor-widget-button"
                                    data-id="7ca9880" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="https://tebewebe.online/edupreme/template-kit/homepage/#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">Learn More</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-6e43439 e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-child animated fadeInUp"
                        data-id="6e43439" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:240}">
                        <div class="elementor-element elementor-element-3ffac05 elementor-widget elementor-widget-heading"
                            data-id="3ffac05" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h4 class="elementor-heading-title elementor-size-default">Social &amp; Historical
                                </h4>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6c9962a elementor-widget elementor-widget-image"
                            data-id="6c9962a" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="1280" height="853"
                                    src="./Homepage – Edupreme_files/rear-view-of-mature-teacher-talking-to-his-student-during-lecture-at-university-classroom-.jpg"
                                    class="attachment-full size-full wp-image-1196"
                                    alt="Rear view of mature teacher talking to his student during lecture at university classroom."
                                    srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/rear-view-of-mature-teacher-talking-to-his-student-during-lecture-at-university-classroom-.jpg 1280w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/rear-view-of-mature-teacher-talking-to-his-student-during-lecture-at-university-classroom--300x200.jpg 300w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/rear-view-of-mature-teacher-talking-to-his-student-during-lecture-at-university-classroom--1024x682.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/rear-view-of-mature-teacher-talking-to-his-student-during-lecture-at-university-classroom--768x512.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/rear-view-of-mature-teacher-talking-to-his-student-during-lecture-at-university-classroom--1536x1024.jpg 1536w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/rear-view-of-mature-teacher-talking-to-his-student-during-lecture-at-university-classroom--800x533.jpg 800w"
                                    sizes="(max-width: 1280px) 100vw, 1280px">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-913ba2e e-flex e-con-boxed e-con e-child"
                            data-id="913ba2e" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-09d69be elementor-widget elementor-widget-heading"
                                    data-id="09d69be" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">Tempor rhoncus
                                            facilisi leo ut porta ultrices sit bibendum consequat congue. Proin
                                            velit mollis gravida tincidunt vulputate curae.</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2fe5c16 elementor-widget elementor-widget-button"
                                    data-id="2fe5c16" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="https://tebewebe.online/edupreme/template-kit/homepage/#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">Learn More</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}

            <div class="elementor-element elementor-element-b7c8d9a e-flex e-con-boxed e-con e-child" data-id="b7c8d9a" data-element_type="container">
                <div class="e-con-inner row">
                    <div class="elementor-element elementor-element-8f23e05 e-con-full e-flex e-con e-child animated fadeInUp col-lg-6"
                        data-id="8f23e05" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="elementor-element elementor-element-7140809 elementor-widget elementor-widget-heading"
                            data-id="7140809" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h4 class="elementor-heading-title elementor-size-default">Computer Science and Engineering</h4>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-77d3cb1 elementor-widget elementor-widget-image"
                            data-id="77d3cb1" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="1280" height="853"
                                    src="{{asset('images/explaining-chemistry.jpg')}}"
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
                                        <p class="elementor-heading-title elementor-size-default">Explore the fields of software development, algorithms, and computing technologies to prepare students for innovative roles in the domains of software engineering, data science, and technology leadership.</p>
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
                    </div>
                    <div class="elementor-element elementor-element-a87c91c e-con-full e-flex e-con e-child animated fadeInUp col-lg-6"
                        data-id="a87c91c" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:120}">
                        <div class="elementor-element elementor-element-efe993f elementor-widget elementor-widget-heading"
                            data-id="efe993f" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h4 class="elementor-heading-title elementor-size-default">Electronics &amp; Communication Engineering</h4>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9bf72fb elementor-widget elementor-widget-image"
                            data-id="9bf72fb" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="1280" height="853"
                                    src="./Homepage – Edupreme_files/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university.jpg"
                                    class="attachment-full size-full wp-image-1093"
                                    alt="Young students painting on canvas during lesson in faculty of arts university"
                                    srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university.jpg 1280w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-300x200.jpg 300w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-1024x682.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-768x512.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-1536x1024.jpg 1536w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-800x533.jpg 800w"
                                    sizes="(max-width: 1280px) 100vw, 1280px">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a643fba e-flex e-con-boxed e-con e-child"
                            data-id="a643fba" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-db90bdc elementor-widget elementor-widget-heading"
                                    data-id="db90bdc" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">Focuses on design and development of advanced electronic systems and communication networks, preparing a student for a career in telecommunications, robotics, and embedded systems</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7ca9880 elementor-widget elementor-widget-button"
                                    data-id="7ca9880" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="https://tebewebe.online/edupreme/template-kit/homepage/#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">Learn More</span>
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
            <div class="elementor-element elementor-element-bc58107 e-flex e-con-boxed e-con e-child" data-id="bc58107" data-element_type="container">
                <div class="e-con-inner row">
                    <div class="elementor-element elementor-element-907ff4b e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex elementor-invisible e-con e-child col-lg-6"
                        data-id="907ff4b" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:240}">
                        <div class="elementor-element elementor-element-8d28cd4 elementor-widget elementor-widget-heading"
                            data-id="8d28cd4" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h4 class="elementor-heading-title elementor-size-default">Computer Science &amp; Information Technology
                                </h4>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-af150d6 elementor-widget elementor-widget-image"
                            data-id="af150d6" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="1280" height="853"
                                    src="./Homepage – Edupreme_files/students-of-medicine-using-laptop-while-learning-together-in-lecture-hall-at-the-university-.jpg"
                                    class="attachment-full size-full wp-image-1555"
                                    alt="Students of medicine using laptop while learning together in lecture hall at the university."
                                    srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/students-of-medicine-using-laptop-while-learning-together-in-lecture-hall-at-the-university-.jpg 1280w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/students-of-medicine-using-laptop-while-learning-together-in-lecture-hall-at-the-university--300x200.jpg 300w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/students-of-medicine-using-laptop-while-learning-together-in-lecture-hall-at-the-university--1024x682.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/students-of-medicine-using-laptop-while-learning-together-in-lecture-hall-at-the-university--768x512.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/students-of-medicine-using-laptop-while-learning-together-in-lecture-hall-at-the-university--1536x1024.jpg 1536w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/students-of-medicine-using-laptop-while-learning-together-in-lecture-hall-at-the-university--800x533.jpg 800w"
                                    sizes="(max-width: 1280px) 100vw, 1280px">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-d91a31f e-flex e-con-boxed e-con e-child"
                            data-id="d91a31f" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-a04df3a elementor-widget elementor-widget-heading"
                                    data-id="a04df3a" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">Integrates the principles of computer science and IT management, giving deep training in network security, database management, and software solutions for real-life applications.</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7ef2220 elementor-widget elementor-widget-button"
                                    data-id="7ef2220" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="https://tebewebe.online/edupreme/template-kit/homepage/#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">Learn More</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-96dbaa9 e-con-full e-flex elementor-invisible e-con e-child col-lg-6"
                        data-id="96dbaa9" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:120}">
                        <div class="elementor-element elementor-element-9da16ae elementor-widget elementor-widget-heading"
                            data-id="9da16ae" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h4 class="elementor-heading-title elementor-size-default">CSE (Artificial Intelligence and Machine learning)</h4>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-740812f elementor-widget elementor-widget-image"
                            data-id="740812f" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="1280" height="853"
                                    src="./Homepage – Edupreme_files/university-students-studying-with-teacher.jpg"
                                    class="attachment-full size-full wp-image-1520"
                                    alt="University students studying with teacher"
                                    srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/university-students-studying-with-teacher.jpg 1280w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/university-students-studying-with-teacher-300x200.jpg 300w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/university-students-studying-with-teacher-1024x682.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/university-students-studying-with-teacher-768x512.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/university-students-studying-with-teacher-1536x1024.jpg 1536w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/university-students-studying-with-teacher-800x533.jpg 800w"
                                    sizes="(max-width: 1280px) 100vw, 1280px">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-8b1438c e-flex e-con-boxed e-con e-child"
                            data-id="8b1438c" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-d5edd45 elementor-widget elementor-widget-heading"
                                    data-id="d5edd45" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">"Engineering is the art of directing the great sources of power in nature for the use and convenience of man"</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3a94bac elementor-widget elementor-widget-button"
                                    data-id="3a94bac" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="https://tebewebe.online/edupreme/template-kit/homepage/#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">Learn More</span>
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
        </div>
    </div>
    <div class="elementor-element elementor-element-db10bcf e-con-full e-flex e-con e-parent" data-id="db10bcf"
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
                            <h2 class="elementor-heading-title elementor-size-default">Journey of Excellence</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2772079 elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="2772079" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default">Why choose {{env('COLLEGE_NAME_SHORT')}}</h3>
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
            </div>
        </div>
    </div>
    {{-- <div class="elementor-element elementor-element-774d654 e-con-full e-flex e-con e-child" data-id="774d654"
        data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-element elementor-element-4bdcee4 e-flex e-con-boxed e-con e-child" data-id="4bdcee4"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-3cfaec3 elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="3cfaec3" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Watch Video Tour in Edupreme</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-647fb7d elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="647fb7d" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Bibendum donec eros quis finibus condimentum. Phasellus curabitur maximus montes ac
                            mattis sem pharetra laoreet. Faucibus donec arcu dolor diam lorem leo.</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7503a23 elementor-invisible elementor-widget elementor-widget-elementskit-video"
                    data-id="7503a23" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:480}"
                    data-widget_type="elementskit-video.default">
                    <div class="elementor-widget-container">
                        <div class="ekit-wid-con">
                            <div class="video-content" data-video-player="[]"
                                data-video-setting="{&quot;videoVolume&quot;:&quot;horizontal&quot;,&quot;startVolume&quot;:0.8,&quot;videoType&quot;:&quot;iframe&quot;,&quot;videoClass&quot;:&quot;mfp-fade&quot;}">

                                <a class="ekit_icon_button ekit-video-popup ekit-video-popup-btn"
                                    href="https://www.youtube.com/embed/VhBl3dHT5SY?feature=oembed?playlist=VhBl3dHT5SY&amp;mute=0&amp;autoplay=0&amp;loop=no&amp;controls=0&amp;start=0&amp;end="
                                    aria-label="video-popup">
                                    <i aria-hidden="true" class="icon icon-play-button"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
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
                        <h2 class="elementor-heading-title elementor-size-default">Vision & Mission</h2>
                    </div>
                </div>
                {{-- <div class="elementor-element elementor-element-7d88595 elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="7d88595" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Leo natoque senectus nam facilisi tellus vehicula quis faucibus. Porta inceptos eros
                            augue urna consectetur maximus montes in. Diam faucibus ornare consectetur pede est
                            quam.</p>
                    </div>
                </div> --}}
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
                                    <span>Vision</span>
                                </div>

                                <p class="elementor-icon-box-description">{{env('COLLEGE_NAME_SHORT')}} aims to be a globally recognized center for excellence in engineering education, research, and innovation, fostering responsible leaders who drive technological advancements for a better society.</p>

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
                                    <span>Mission</span>
                                </div>

                                <p class="elementor-icon-box-description">With our industry-ready professionals, technical, management, and problem-solving skills we aim to empower students to excel in their chosen fields and also deliver high-quality education with advanced technology.</p>

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
                            src="./Homepage – Edupreme_files/happy-students-graduating-from-university.jpg"
                            class="attachment-full size-full wp-image-1240"
                            alt="Happy students graduating from university"
                            srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/happy-students-graduating-from-university.jpg 853w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/happy-students-graduating-from-university-200x300.jpg 200w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/happy-students-graduating-from-university-682x1024.jpg 682w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/happy-students-graduating-from-university-768x1152.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/happy-students-graduating-from-university-1024x1536.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/12/happy-students-graduating-from-university-800x1200.jpg 800w"
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
    <div class="elementor-element elementor-element-16dc8b2 e-flex e-con-boxed e-con e-parent" data-id="16dc8b2"
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
                        <h2 class="elementor-heading-title elementor-size-default"> {{env('COLLEGE_NAME_SHORT')}}'s 5 Step Admission Process</h2>
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
                                    <span>Explore Programs</span>
                                </div>

                                <p class="elementor-icon-box-description">Just hop on the website and scroll through the various UG & PG engineering and technology programs.</p>
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
                                    <span>Fill Out the Application Form</span>
                                </div>

                                <p class="elementor-icon-box-description">Go to the admissions portal and fill out the application form online with all required documents.</p>

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

                                <p class="elementor-icon-box-description">Apply and sit for the required entrance examinations as specified by our institute guidelines.</p>

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
                                    <span>Personal Interview</span>
                                </div>

                                <p class="elementor-icon-box-description">Shortlisted candidates will be called in for a personal interview. </p>

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
                                    <span>Confirmation of Admission</span>
                                </div>

                                <p class="elementor-icon-box-description">
                                    When the interview is passed, confirm your acceptance and pay the required fees to secure your place at {{env('COLLEGE_NAME_SHORT')}}. </p>

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
    </div>
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
                                <h2 class="elementor-heading-title elementor-size-default">University Life</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e9c2cf6 elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="e9c2cf6" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">Campus Life
                                </h3>
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
                                <p>The campus life at SERI is vibrant and useful in molding the day-to-day experience of students. Some of these are:</p>
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
                                                    {{-- Hostels with separate facilities for boys & girls with modern amenities.
                                                    Many sports and recreational facilities, including indoor and outdoor sports.
                                                    Cultural and technical fairs for creativity and teamwork.
                                                    Entrepreneurial development and leadership programs in order to enhance careers.
                                                    Canteen, library, and medical service for students' well-being. --}}

                                                    <ul style="color: #fff;">
                                                        <li>Hostels with separate facilities for boys & girls with modern amenities.</li>
                                                        <li>Many sports and recreational facilities, including indoor and outdoor sports.</li>
                                                        <li>Cultural and technical fairs for creativity and teamwork.</li>
                                                        <li>Entrepreneurial development and leadership programs in order to enhance careers.</li>
                                                        <li>Canteen, library, and medical service for students' well-being.</li>
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
    <div class="elementor-element elementor-element-a81fe31 e-flex e-con-boxed e-con e-parent" data-id="a81fe31"
        data-element_type="container">
        <div class="e-con-inner">
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
                                    src="./Homepage – Edupreme_files/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university.jpg"
                                    class="attachment-full size-full wp-image-1093"
                                    alt="Young students painting on canvas during lesson in faculty of arts university"
                                    srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university.jpg 1280w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-300x200.jpg 300w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-1024x682.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-768x512.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-1536x1024.jpg 1536w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/young-students-painting-on-canvas-during-lesson-in-faculty-of-arts-university-800x533.jpg 800w"
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
                                            <h3 class="ekit-heading--title elementskit-section-title ">Affiliations</h3>
                                            
                                            
                                            

                                            <div class="ekit-heading__description">
                                                <ul style="list-style: none;">
                                                    <li>Affiliated Institution with Dr. A.P.J. Abdul Kalam Technical University, Lucknow</li>
                                                    <li>An institution duly recognized by the All India Council for Technical Education, an apex body governing higher technical education in India.</li>
                                                    <li>Trabaje en base a esta instituciones bajo las robotistas SITA SRM.</li>
                                                </ul>
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
                                    src="./Homepage – Edupreme_files/athletics-track.jpg"
                                    class="attachment-full size-full wp-image-1090" alt="Athletics Track"
                                    srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/athletics-track.jpg 1280w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/athletics-track-300x200.jpg 300w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/athletics-track-1024x682.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/athletics-track-768x512.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/athletics-track-1536x1024.jpg 1536w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/athletics-track-800x533.jpg 800w"
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
                                            <h3 class="ekit-heading--title elementskit-section-title ">Eligibility to Join Us?</h3>
                                            <div class="ekit-heading__description">
                                                <ul style="list-style: none">
                                                    <li>B.Tech Programs: Minimum fifty percent in 10+2 with Physics, Mathematics, and Chemistry/Computer Science.</li>
                                                    <li>Admission on the basis of the AKTU Entrance Exam or JEE Mains.</li>                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="elementor-element elementor-element-90e76da e-flex e-con-boxed e-con e-child"
                data-id="90e76da" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-e559556 e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="e559556" data-element_type="container"
                        data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                        <div class="elementor-element elementor-element-59ec8ef elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image"
                            data-id="59ec8ef" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="1280" height="853"
                                    src="./Homepage – Edupreme_files/university-students-using-laptops-and-digital-tablet-working-together.jpg"
                                    class="attachment-full size-full wp-image-429"
                                    alt="University students using laptops and digital tablet, working together"
                                    srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/university-students-using-laptops-and-digital-tablet-working-together.jpg 1280w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/university-students-using-laptops-and-digital-tablet-working-together-300x200.jpg 300w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/university-students-using-laptops-and-digital-tablet-working-together-1024x682.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/university-students-using-laptops-and-digital-tablet-working-together-768x512.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/university-students-using-laptops-and-digital-tablet-working-together-1536x1024.jpg 1536w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/university-students-using-laptops-and-digital-tablet-working-together-800x533.jpg 800w"
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
                                            <h3 class="ekit-heading--title elementskit-section-title ">Information
                                                Technology</h3>
                                            <div class="ekit-heading__description">
                                                <p>Consectetur placerat fringilla conubia mollis nec pretium urna
                                                    rutrum. Vel natoque habitasse elementum platea morbi feugiat mus
                                                    orci. Dapibus est sodales conubia ex ornare.</p>
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
                                    src="./Homepage – Edupreme_files/doctor-examines-the-patient-s-pulse-with-stethoscope-and-records-the-results-health-medical-checkup.jpg"
                                    class="attachment-full size-full wp-image-1101"
                                    alt="Doctor examines the patient&#39;s pulse with stethoscope and records the results, health medical checkup"
                                    srcset="https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/doctor-examines-the-patient-s-pulse-with-stethoscope-and-records-the-results-health-medical-checkup.jpg 1280w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/doctor-examines-the-patient-s-pulse-with-stethoscope-and-records-the-results-health-medical-checkup-300x200.jpg 300w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/doctor-examines-the-patient-s-pulse-with-stethoscope-and-records-the-results-health-medical-checkup-1024x682.jpg 1024w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/doctor-examines-the-patient-s-pulse-with-stethoscope-and-records-the-results-health-medical-checkup-768x512.jpg 768w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/doctor-examines-the-patient-s-pulse-with-stethoscope-and-records-the-results-health-medical-checkup-1536x1024.jpg 1536w, https://tebewebe.online/edupreme/wp-content/uploads/sites/63/2023/11/doctor-examines-the-patient-s-pulse-with-stethoscope-and-records-the-results-health-medical-checkup-800x533.jpg 800w"
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
                                            <h3 class="ekit-heading--title elementskit-section-title ">Health &amp;
                                                Wellness</h3>
                                            <div class="ekit-heading__description">
                                                <p>Consectetur placerat fringilla conubia mollis nec pretium urna
                                                    rutrum. Vel natoque habitasse elementum platea morbi feugiat mus
                                                    orci. Dapibus est sodales conubia ex ornare.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="elementor-element elementor-element-7543343 e-flex e-con-boxed e-con e-child"
                data-id="7543343" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-d670a0f elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-elementskit-heading"
                        data-id="d670a0f" data-element_type="widget" data-widget_type="elementskit-heading.default">
                        <div class="elementor-widget-container">
                            <div class="ekit-wid-con">
                                <div
                                    class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-text_center   ekit_heading_mobile-">
                                    <h3 class="ekit-heading--title elementskit-section-title ">Explore more
                                        experiences about campus here</h3>
                                    <div class="ekit-heading__description">
                                        <p>Platea nascetur torquent per si magna suscipit posuere penatibus
                                            parturient interdum. Neque nam lacinia libero dictumst arcu vestibulum
                                            quis diam. Iaculis luctus felis nunc orci pretium eu maximus per letius.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-a439211 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-tablet__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                        data-id="a439211" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-b66a10e elementor-align-right elementor-tablet-align-center elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-button"
                        data-id="b66a10e" data-element_type="widget" data-widget_type="button.default">
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
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="elementor-element elementor-element-e6724ef e-flex e-con-boxed e-con e-parent" data-id="e6724ef"
        data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-5a80b44 e-con-full e-flex e-con e-child"
                data-id="5a80b44" data-element_type="container">
                <div class="elementor-element elementor-element-0629977 elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="0629977" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Together We Build, Together We Achieve!</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-f5426f5 elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="f5426f5" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Let us work together toward building a future of perfection in innovation, learning, and success.</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-c44af66 elementor-invisible elementor-widget elementor-widget-button"
                    data-id="c44af66" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:480}"
                    data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="https://tebewebe.online/edupreme/template-kit/homepage/#">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-icon">
                                        <i aria-hidden="true" class="icon icon-right-arrow2"></i> </span>
                                    <span class="elementor-button-text">Apply Now</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection