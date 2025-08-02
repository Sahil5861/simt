@extends('frontend.layout')

@section('title', $blog->meta_title)

@section('css')
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<!-- Owl Carousel JS -->


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
        height: auto;
        min-height: 100px;
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
    .author_image {
        background: url("{{ asset($blog->author && $blog->author->author_image ? $blog->author->author_image : 'https://www.w3schools.com/howto/img_avatar.png') }}");
        background-size: cover;
        background-position: center;
        width: 50px;  /* Set width */
        height: 50px; /* Set height */        
        border-radius: 50%;
        border: .1rem solid #0003;
    }
    .description-block p {
        line-height: 2 !important;
    }
    .category-badge{
        display: inline-block; 
        background: #2d1c6ac9; 
        margin:10px 0; 
        color: white; 
        padding: 10px 20px; 
        border-radius: 20px; 
        font-size: 14px; 
        font-weight: bold;        
    } 
    .rc-anchor{
        margin: 1px 0;
    }
    .post-comment-btn{
        padding: 30px 40px;
        background-color: #222 !important;
        color: #fff;
        text-align: center;
        margin: 0;
        height: 75px;
        width: 300px !important;
    }

    /* @media (min-width:500px){
        .category-badge{
            font-size: 10px;
        }
        .blog-title{
            font-size: 38px;
        }
    } */


    .social-icons {
        float: right;
    }

    .social-icons ul {
        list-style: none;
        padding: 0;
        margin:  0;
        display: flex;
        gap: 10px; /* Adjust spacing between icons */
    }

    .social-icons ul li {
        display: inline-block;              
    }

    .social-icons ul li a {
        text-decoration: none;
        font-size: 20px; /* Adjust size as needed */
        color: #222; /* Change to preferred color */
        
        /* Make a perfect circle */
        display: flex;
        align-items: center;
        justify-content: center;
        
        width: 40px; /* Equal width & height for circle */
        height: 40px;
        border-radius: 50%;
        
        background-color: #fff; /* Change to preferred background */
        border: 2px solid #222; /* Add border if needed */
        
        padding: 0; /* Remove padding to keep it round */
    }


    .social-icons ul li a:hover {        
        background-color: var(--e-global-color-accent);
        color: #fff;
    } 
    
    .blog-title{
        font-weight: 500 !important;
        color: #273954 !important;
        line-height: 1.6;
        margin: 20px 0;
    }

    .main-blog h1 span {
        font-size: 30px !important;
        font-weight: 500 !important;
        color: #273954;
    }
    
    .main-blog h2{
        font-size: 30px !important;
        font-weight: 500;
        color: #273954 !important;
    }

    .main-blog h2 span{
        font-size: 24px !important;
        font-weight: 500;
        color: #273954 !important;
    }
    .main-blog h3 span{
        font-size: 20px !important;
        font-weight: 300 !important;
        color: #273954 !important;
    }

    .main-blog h3{
        font-size: 20px !important;
        font-weight: 300 !important;
        color: #273954 !important;
    }

    .main-blog h4 span{
        font-size: 18px !important;
        color: #273954 !important;
    }

    .main-blog h4{
        font-size: 18px !important;
        color: #273954 !important;
    }
    
    .main-blog p span{
        font-size: 16px !important;
        line-height: 2 !important;
    }
    .main-blog p{
        font-size: 1em;
        line-height: 2;
    }
    .main-blog a{
        text-decoration: underline !important;
        color: #606efd !important;
        font-weight: bold !important;
    }


    /* owl crausel  */

    /* Customize Owl Carousel navigation arrows */
    .owl-carousel .owl-nav button {
        background-color: #2d1c6ac9 !important;   /* Light blue background */
        color: #fff !important;
        border-radius: 50% !important;          /* Make it circular */
        width: 60px;                 /* Set width of the button */
        height: 60px;                /* Set height of the button */
        display: flex;               /* Center the arrow inside the circle */
        justify-content: center;     /* Center horizontally */
        align-items: center;         /* Center vertically */
        border: none;                /* Remove default border */
        outline: none;               /* Remove outline */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add some shadow */
        transition: background-color 0.3s ease; /* Smooth transition */
    }

    .owl-carousel .owl-nav button:hover {
        background-color: #555 !important; /* Darker light blue on hover */
    }

    .owl-carousel .owl-nav .owl-prev, 
    .owl-carousel .owl-nav .owl-next {
        color: white;                /* Make the arrows white */
        font-size: 30px !important;             /* Size of the arrows */
    }

    /* Position the navigation buttons */
    .owl-carousel .owl-nav {
        /* position: absolute;
        top: 50%; */
        /* width: 100%; */
        display: flex;
        justify-content: center; /* Align the buttons to the left and right */
        /* transform: translateY(-50%);    Center the buttons vertically */
    }

    /* Left Arrow */
    .owl-carousel .owl-nav .owl-prev {
        font-family: "Font Awesome 5 Free"; /* Use Font Awesome */
        font-weight: 900; /* Bold weight for better visibility */
        content: '\f104'; /* Font Awesome left arrow (&#xf104;) */
    }

    /* Right Arrow */
    .owl-carousel .owl-nav .owl-next {
        font-family: "Font Awesome 5 Free"; /* Use Font Awesome */
        font-weight: 900; /* Bold weight for better visibility */
        content: '\f105'; /* Font Awesome right arrow (&#xf105;) */
    }
</style>
    
@endsection


@section('main_content')   
<div data-elementor-type="wp-post" data-elementor-id="1184" class="elementor elementor-1184">
    {{-- <div class="elementor-element elementor-element-9c0d281 e-flex e-con-boxed e-con e-parent e-lazyloaded"
        data-id="9c0d281" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-3871437 e-con-full e-flex e-con e-child"
                data-id="3871437" data-element_type="container">                                
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
    </div> --}}
    
    {{-- Blog content --}}        
    <section class="container-lg p-4">
        <div class="row my-1">
            <div class="col-lg-12">
                <div class="container">
                    {{-- <h1 class="blog-title" style="line-height:1.2; color:#000; font-weight:600; font-family:poppins; font-size:50px"> --}}
                    <h2 class="blog-title" style="line-height:1.6; font-weight:600;margin:20px 0; font-family:poppins;">
                        {{$blog->blog_title}}
                        {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, ducimus. --}}
                    </h2> 
                    <section class="blog-categories" style="margin:10px 0;">
                        @foreach($blog->categories as $category)
                        <span class="category-badge">
                            {{ $category->title }}
                        </span>                                                   
                        @endforeach                                  
                    </section>  
                    <section class="author-section" style="border-top: 1px solid #222; border-bottom:1px solid #222; height:max-content; padding:10px 0; display:flex; justify-content:space-between; align-items:center;  flex-wrap:wrap; gap:10px; margin:10px 0;">
                        <div class="about-author" style="display:flex; justify-content:flex-start; align-items:center; gap:10px;">
                            <div class="author_image"></div><b style="width: auto;">By : {{$blog->author->name ?? 'Anonymouse'}}</b> | <b style="width: auto;">{{$blog->author->designation ?? ''}}</b>
                        </div>
                        <div class="about-author" style="display:flex;justify-content:flex-end; flex-direction:column; align-items:center; gap:10px;">
                            <b style="width: auto;">Published : {{$blog->created_at->format('d M Y')}}</b>  
                        </div>
                    </section>    
                    <section class="main-blog">
                        {!! $blog->description !!}                       
                    </section>                      
                    {{-- <p class="description-block" style="font-size: 24px; font-family:minion-pro, serif">
                    </p> --}}

                    <div class="p-2 my-3">
                        <hr>
                    </div>
                    <!-- Bootstrap Alert Message -->
                    <div id="comment-alert" class="alert alert-success" style="display: none; position: fixed; top: 10px; right: 10px; z-index: 1000;">
                        Comment added successfully!
                    </div>
            
                    <div id="comment-alert-error" class="alert alert-danger" style="display: none; position: fixed; top: 10px; right: 10px; z-index: 1000;">
                        Comment added successfully!
                    </div>
            
                    <div class="social-icons">
                        <ul>
                            <li><a href="https://www.facebook.com/people/Sitasrm-Institute-of-Management-and-Technology/61576331637810/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/simt.grnoida?igsh=bGt4bHlsOWJ1YTMx"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://x.com/simt_grnoida?t=8wTK7NZEpqvIycCI7zca1g&s=08"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    
                    <h3 style="font-family: Arial, Helvetica, sans-serif; font-weight:bold; line-height:2.4">LEAVE A COMMNET</h3>
                    <form id="comment-form">
                        @csrf
                        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Enter a comment" class="form-control" style="background-color: #eee; font-size:20px;"></textarea>
                        <input type="hidden" name="blog_id" value="{{$blog->id}}">
            
                        <div style="display: flex; justify-content:flex-start; align-items:center; gap:10px; flex-wrap:wrap;">
                            <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_SITE_KEY')}}" style="margin: 10px 0;"></div>            
                            <button type="submit" class="post-comment-btn">Post Comments</button>
                        </div>
                    </form>
            
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>                            
                </div>
            </div>            
            <div class="col-lg-12">
                <h3 class="mt-2" style="border-bottom: 1px solid #0003; padding:10px 0;">Trending blogs</h3>
                {{-- <div class="row">
                    @if ($blogs->isNotEmpty())                                        
                        @foreach ($blogs as $blog)                          
                        <div class="col-lg-4 col-md-6 col-sm-12 p-2">
                            <a href="{{ route('blogs.details', $blog->seo_url) }}" style="text-decoration: none;">
                                <div class="card">                                
                                    <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                        <img src="{{asset($blog->image)}}" alt="image" style="width: 100; height: 100; object-fit: cover; flex-shrink: 0;">
                                        <div style="flex: 1; display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start;">
                                            <h1 style="margin: 0; font-size: 18px;">{{$blog->blog_title}}</h1>
                                            <p class="text-muted">
                                                <i class="icon icon-calendar"></i> {{ $blog->created_at->format('d M Y h:i A') }}
                                            </p>                                            
                                        </div>
                                        
                                    </div>
                                </div>    
                            </a>                                
                        </div>
                        @endforeach
                    @endif                                                                            
                </div> --}}


                <div class="owl-carousel owl-theme">
                    @if ($blogs->isNotEmpty())                                 
                        @foreach ($blogs as $blog)                          
                        <div class="item"> <!-- Each item needs to be inside an .item div -->
                            <a href="{{ route('blogs.details', $blog->seo_url) }}" style="text-decoration: none;">
                                <div class="card">                                 
                                    <div class="card-body" style="display: flex; align-items: center; gap: 15px; flex-wrap:wrap;">
                                        <img src="{{asset($blog->image)}}" alt="image" style="width: 200px; height: 200px; object-fit: cover; flex-shrink: 0;">
                                        <div style="flex: 1; display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start;">
                                            <h1 style="margin: 0; font-size: 18px;">{{$blog->blog_title}}</h1>
                                            <p class="text-muted">
                                                <i class="icon icon-calendar"></i> {{ $blog->created_at->format('d M Y h:i A') }}
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
    </section>
    {{-- <div class="elementor-element elementor-element-023796d e-flex e-con-boxed e-con e-parent e-lazyloaded" data-id="023796d" data-element_type="container" style="margin-top: 30px;">        
    </div>     --}}
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

    <div class="container-lg p-4">
        <div class="row">
            <div class="col-lg-8">
                
            </div>
        </div>        
    </div>


    <section class="container-lg p-4">
        <div class="row">
            {{-- <div class="col-lg-8">
                <!-- Bootstrap Alert Message -->
                <div id="comment-alert" class="alert alert-success" style="display: none; position: fixed; top: 10px; right: 10px; z-index: 1000;">
                    Comment added successfully!
                </div>
        
                <div id="comment-alert-error" class="alert alert-danger" style="display: none; position: fixed; top: 10px; right: 10px; z-index: 1000;">
                    Comment added successfully!
                </div>
        
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
                
                <h3 style="font-family: Arial, Helvetica, sans-serif; font-weight:bold; line-height:2.4">LEAVE A COMMNET</h3>
                <form id="comment-form">
                    @csrf
                    <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Enter a comment" class="form-control" style="background-color: #eee; font-size:20px;"></textarea>
                    <input type="hidden" name="blog_id" value="{{$blog->id}}">
        
                    <div style="display: flex; justify-content:flex-start; align-items:center; gap:10px; flex-wrap:wrap;">
                        <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_SITE_KEY')}}" style="margin: 10px 0;"></div>            
                        <button type="submit" class="post-comment-btn">Post Comments</button>
                    </div>
                </form>
        
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>        
            </div> --}}
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>   
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 3,                // Show 3 items at a time
            margin: 10,              // Space between items
            loop: true,              // Enable looping
            autoplay: true,          // Enable autoplay
            autoplayTimeout: 5000,   // Time between item transitions (5000 ms = 5 seconds)
            autoplayHoverPause: true,// Pause autoplay on hover
            nav: true,               // Enable navigation arrows
            dots: false,             // Disable dots
            responsive: {            // Responsive design (adjusts items per screen size)
                0: {
                    items: 1          // 1 item for small screens (e.g., mobile)
                },
                600: {
                    items: 2          // 2 items for medium screens (e.g., tablets)
                },
                1000: {
                    items: 3          // 3 items for larger screens
                }
            }
        });
    });
</script>

<script>
    $(document).ready(function () {        
        $("#comment-form").submit(function (e) {
            e.preventDefault(); // Prevent default form submission

            var formData = $(this).serialize(); // Serialize form data

            var comment = $('#comment').val();

            if (comment == '') {
                $("#comment-alert-error").text( "Please Enter a comment").fadeIn();

                    // Hide alert after 5 seconds
                    setTimeout(function () {
                        $("#comment-alert-error").fadeOut();
                    }, 5000);
                return;
            }

            // Get reCAPTCHA response
            var recaptchaResponse = grecaptcha.getResponse();

            

            if (!recaptchaResponse) {                
                $("#comment-alert-error").text( "Please verify the reCAPTCHA.").fadeIn();

                    // Hide alert after 5 seconds
                    setTimeout(function () {
                        $("#comment-alert-error").fadeOut();
                    }, 5000);
                return;
            }

            // Append reCAPTCHA response to formData
            formData += "&g-recaptcha-response=" + recaptchaResponse;
            $.ajax({
                url: "{{ route('store-comment') }}",
                type: "POST",
                data: formData,
                success: function (response) {
                    // alert(response.message);

                    $("#comment-alert").text(response.message).fadeIn();

                    // Hide alert after 5 seconds
                    setTimeout(function () {
                        $("#comment-alert").fadeOut();
                    }, 5000);


                    $("#comment-form")[0].reset(); // Reset form
                    grecaptcha.reset(); // Reset reCAPTCHA
                },
                error: function (xhr) {
                    // alert("Error: " + xhr.responseJSON.error);

                    $("#comment-alert-error").text( `Error: ${xhr.responseJSON.error}`).fadeIn();

                    // Hide alert after 5 seconds
                    setTimeout(function () {
                        $("#comment-alert-error").fadeOut();
                    }, 5000);
                }
            });
        });
    });
</script>
@endsection

