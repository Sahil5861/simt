@extends('frontend.layout')
@section('title', $blog->blog_title)
<style>
    .blogs_feild{
        background-color: #fff;
        width: 150% !important;
        
    }

    .card2 {
        max-height: 300px;
        height: 200px;
        padding: 10px;
        margin: 10px 0;
        /* overflow: hidden; */
    }
    .card-small{
        max-height: 150px;
        height: 120px;
        padding: 10px;
    }
    
    .col-md-4 .card-img {
        height: 100% !important; 
        width:100% !important;
        /* object-fit: contain; */
        transition: box-shadow 0.3s ease-in-out;
        cursor: pointer;
    }
    .col-md-4 img:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }
    .e-con.e-flex>.e-con-inner{
        align-items: flex-start !important;
    }

    .elementor-1184 .elementor-element.elementor-element-9c0d281:not(.elementor-motion-effects-element-type-background), .elementor-1184 .elementor-element.elementor-element-9c0d281>.elementor-motion-effects-container>.elementor-motion-effects-layer{
        background-image: url('{{ asset($blog->image) }}') !important;
    }

    .container .mt-4 h1{
        line-height: 3;
    }
    
</style>

@section('main_content')   
<div data-elementor-type="wp-post" data-elementor-id="1184" class="elementor elementor-1184">
    <div class="elementor-element elementor-element-9c0d281 e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="9c0d281" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-3871437 e-con-full e-flex e-con e-child"
                data-id="3871437" data-element_type="container">                
                <div class="elementor-element elementor-element-8765ec4 elementor-widget elementor-widget-heading animated fadeInLeft"
                    data-id="8765ec4" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">{{$blog->blog_title}}</h2>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Blog content --}}
    <div class="elementor-element elementor-element-023796d e-flex e-con-boxed e-con e-parent e-lazyloaded" data-id="023796d" data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-e33acf4 e-con-full e-flex e-con e-child blogs_feild" data-id="e33acf4" data-element_type="container">
                <div class="elementor-element elementor-element-c059924 elementor-invisible elementor-widget elementor-widget-image"
                    data-id="c059924" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">
                    <div class="container mt-4" style="text-align: left; line-height:1.5;">
                        <h1 class="text-primary" style="font-weight: 100; line-height:2;">{{$blog->blog_title}}</h1>                        
                        {!! $blog->description !!}                       
                    </div>
                </div>
                <div class="elementor-element elementor-element-4c8f429 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-spacer"
                    data-id="4c8f429" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="spacer.default">                    
                </div>
            </div>
            <div class="elementor-element elementor-element-61a7bf0 e-con-full e-flex e-con e-child" data-id="61a7bf0" data-element_type="container">
                <div class="elementor-element elementor-element-2051bf3 elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="2051bf3" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="elementskit-heading.default">
                    <div class="elementor-widget-container">
                        <div class="ekit-wid-con">
                            <div class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet- ekit_heading_mobile-">
                                <h4 class="ekit-heading--title" style="border-bottom: 1px solid #888; padding-bottom:10px;">Trending Blogs</h4>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4dfb54b elementor-widget elementor-widget-text-editor"
                    data-id="4dfb54b" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">

                        @if ($blogs->isNotEmpty())   
                        
                        @foreach ($blogs as $blog)                            
                            <div class="card-small shadow-lg border-0" style="background: transparent;">
                                <div class="row g-0">                    
                                    <!-- Image Section -->
                                    <div class="col-md-4">
                                        <a href="#">
                                            <img style="width:70px;" class="card-img" src="{{asset($blog->image)}}" class="img-fluid rounded-end" alt="Blog Image">
                                        </a>
                                    </div>              
                                    <div class="col-lg-1"></div>                                  
                                    <!-- Content Section -->
                                    <div class="col-md-7">
                                        <div class="card-small-body">
                                            <h6 class="card-title">{{$blog->blog_title}}</h6>
                                            <p class="text-muted">
                                                <i class="bi bi-calendar"></i> {{$blog->created_at->format('d M Y')}}
                                                {{-- <i class="bi bi-chat"></i> 0 --}}
                                            </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        @endforeach
                        @endif
                    </div>
                </div>                
            </div>
        </div>
    </div>    
    {{-- <div class="elementor-element elementor-element-ef1ac9a e-flex e-con-boxed elementor-invisible e-con e-parent" style="margin-bottom: 5px;"
        data-id="ef1ac9a" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;animation_mobile&quot;:&quot;fadeInUp&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-61c9462 e-con-full e-flex e-con e-child"
                data-id="61c9462" data-element_type="container">
                <div class="elementor-element elementor-element-a7145b6 elementor-widget elementor-widget-heading"
                    data-id="a7145b6" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Our Vision</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-baaa77e elementor-widget elementor-widget-text-editor"
                    data-id="baaa77e" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>The {{env('COLLEGE_NAME')}}'s main objective is to maintain its standing as a supreme point of academic achievement known for its dedication to providing top-notch technical education. Beyond only teaching, our goal is to develop a culture of self-motivation and nurture the potential of future technocrats. By adopting modern educational methods and a demanding curriculum, we aim to provide our students with the skills, values, and information needed to succeed in their chosen areas.</p>
                    </div>
                </div>
            </div>            
        </div>
    </div>     --}}
</div>
@endsection