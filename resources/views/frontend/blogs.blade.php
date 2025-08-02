@extends('frontend.layout')
@section('title', 'Blogs')
<style>
    .blogs_feild{
        background-color: #fff;
        width: 150% !important;
        
    }

    /* .card2 {
        max-height: 300px;
        height: 200px;
        padding: 10px;
        margin: 10px 0;        
    } */
    .card-small{
        height: auto;
        height: 120px;
        padding: 10px;
    }
    
    /* .col-md-4 .card-img {
        height: 100% !important; 
        width:100% !important;        
        transition: box-shadow 0.3s ease-in-out;
        cursor: pointer;
    } */
    /* .col-md-4 img:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    } */

.card2 {
    display: flex;
    flex-direction: row;
    align-items: stretch;
    width: 100%;
    max-width: 100%;
    min-height: 200px; /* Adjust as needed */   
    max-height: 300px; 
    margin: 10px 0;
    /* box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); */
    overflow: hidden;
    /* border-radius: 10px; */
    transition: box-shadow 0.3s ease-in-out;
}

.card2:hover {
    box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
}

/* Image Section */
.image-section {    
    display: flex;
    align-items: center;
    justify-content: center;
}

.image-section img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}

/* Content Section */
.content-section {
    /* background-color: green; For demo */
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    text-align: left;
}

.card-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 5px;
    color: white;
}

.text-muted {
    font-size: 14px;
    color: #e0e0e0;
    margin-bottom: 10px;
}

.card-text {
    font-size: 16px;
    line-height: 1.4;
    color: #000;
}



    .e-con.e-flex>.e-con-inner{
        align-items: flex-start !important;
    }

    .card{
        height: 400px;
        background-position: left;
        background-position-x: left;
        background-size: contain;
        background-repeat: no-repeat;
    }

    .blog-card .card-body img{
        width: 250px; 
        height: 250px; 
        object-fit: cover; 
        flex-shrink: 0;
    }

    /* @media screen and (max-width:990px){
        .blog-card{
            max-height: 250px;
        }
        .blog-card .card-body img{
            width: 180px;
            height: 180px;
        }        
    }

    @media screen and (max-width:400px){
        .blog-card{
            min-height: 250px;
        }
        .blog-card .card-body img{
            width: 150px;
            height: 150px;
        }        
    } */

    

        .banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Dark overlay */
            z-index: 1;
        }

        .banner-content {
            position: absolute;
            z-index: 2;
            max-width: 700px;
            color: white;
            
            padding: 20px;
            border-radius: 10px;
            left: 50px;
            top: 50%;
            transform: translateY(-50%);
        }

        .banner-content h1{
            color: #fff !important;
            font-size: 40px !important;
        }
        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width:768px){            
            .banner{
                background: url('../images/blog_banner.jpg') no-repeat center right / cover;
            }
            .banner-content{
                top: 65%;
                left:10px;
            }
            .banner-content h1{
                font-size: 24px !important;
            }

        }

    
</style>

@section('main_content')   
<div data-elementor-type="wp-post" data-elementor-id="1184" class="elementor elementor-1184">    

    <div class="banner" style="background: url('../images/blog_banner_new.jpg') no-repeat center / cover; height: 100vh;">
        <div class="banner-content">
            <h1 style="">SITASRM Institute of Management and Technology (SIMT) - Blogs</h1>            
            <p>The SIMT Edge
                Blog posts on innovation, AI in business, campus news, industry partnerships, career advice, and holistic growth</p>
        </div>
    </div>
    <div class="elementor-element elementor-element-023796d e-flex e-con-boxed e-con e-parent e-lazyloaded" data-id="023796d" data-element_type="container" style="padding: 40px;">
        <div class="row p-4" style="margin-top: 50px;">                                
            <div class="col-lg-8">
                <div class="row">
                    @if ($blogs->isNotEmpty())                                        
                        @foreach ($blogs as $blog)                          
                        <div class="col-lg-12 p-2">
                            <a href="{{ route('blogs.details', $blog->seo_url) }}" style="text-decoration: none;">
                                <div class="card blog-card">                                
                                    <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                        <img src="{{$blog->image}}" alt="image" style="">
                                        <div class="card-cont" style="flex: 1; display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start;">
                                            <h1 style="margin: 0; font-size: 18px;">{{$blog->blog_title}}</h1>
                                            <p class="text-muted">
                                                <i class="icon icon-calendar"></i> {{ $blog->created_at->format('d M Y h:i A') }}
                                            </p>
                                            <p style="margin: 5px 0;">{!! $blog->meta_description !!}</p>
                                        </div>
                                        
                                    </div>
                                </div>    
                            </a>                                
                        </div>
                        @endforeach
                    @endif                                        
                </div>

                <!-- Pagination Links -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $blogs->links() }}
                </div>
                
            </div>
            {{-- <div class="col-lg-1"></div> --}}
            <div class="col-lg-4">
                <h3 class="mt-2" style="border-bottom: 1px solid #0003; padding:10px 0;">Recent blogs</h3>
                <div class="row" style="overflow: auto">
                    @if ($blogs->isNotEmpty())                                        
                        @foreach ($recent_blogs as $rec_blog)                          
                        <div class="col-lg-12 p-2">
                            <a href="{{ route('blogs.details', $rec_blog->seo_url) }}" style="text-decoration: none;">
                                <div class="card card-small">                                
                                    <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                        <img src="{{asset($rec_blog->image)}}" alt="image" style="width: 100; height: 100; object-fit: cover; flex-shrink: 0;">
                                        <div style="flex: 1; display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start;">
                                            <h1 style="margin: 0; font-size: 18px;">{{$rec_blog->blog_title}}</h1>
                                            <p class="text-muted">
                                                <i class="icon icon-calendar"></i> {{ $rec_blog->created_at->format('d M Y h:i A') }}
                                            </p>                                            
                                        </div>
                                        
                                    </div>
                                </div>    
                            </a>                                
                        </div>
                        @endforeach
                    @endif                                        
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