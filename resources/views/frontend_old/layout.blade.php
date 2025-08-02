<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') - {{env('COLLEGE_NAME_SHORT')}}</title>
        <meta name="robots" content="max-image-preview:large">
        <style>
            img:is([sizes="auto" i], [sizes^="auto," i]) {
                contain-intrinsic-size: 3000px 1500px
            }
        </style>
        <link rel="alternate" type="application/rss+xml" title="Edupreme » Feed"href="https://tebewebe.online/edupreme/feed/">
        <link rel="alternate" type="application/rss+xml" title="Edupreme » Comments Feed"href="https://tebewebe.online/edupreme/comments/feed/">
        <script>
            window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/tebewebe.online\/edupreme\/wp-includes\/js\/wp-emoji-release.min.js?ver=ed3f10f838a351563df2b55103f4defe" } };
            /*! This file is auto-generated */
            !function (i, n) { var o, s, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === r[t] }) } function u(e, t, n) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b") }return !1 } function f(e, t, n) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"), a = r.getContext("2d", { willReadFrequently: !0 }), o = (a.textBaseline = "top", a.font = "600 32px Arial", {}); return e.forEach(function (e) { o[e] = t(a, e, n) }), o } function t(e) { var t = i.createElement("script"); t.src = e, t.defer = !0, i.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));", r = new Blob([e], { type: "text/javascript" }), a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" }); return void (a.onmessage = function (e) { c(n = e.data), a.terminate(), t(n) }) } catch (e) { } c(n = f(s, u, p)) } t(n) }).then(function (e) { for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () { n.DOMReady = !0 } }).then(function () { return e }).then(function () { var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji))) })) }((window, document), window._wpemojiSettings);
        </script>
        <link rel="stylesheet" id="elementor-frontend-css" href="{{asset('css/frontend.min.css')}}" media="all">
        <link rel="stylesheet" id="elementor-post-32-css" href="{{asset('css/post-32.css')}}" media="all">
        <link rel="stylesheet" id="elementor-post-312-css" href="{{asset('css/post-312.css')}}" media="all">
        <style id="wp-emoji-styles-inline-css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        {{-- Internal css --}}
        <link rel="stylesheet" href="{{ asset('css/global_style_inline_css.css') }}">
        <link rel="stylesheet" id="template-kit-export-css"href="{{asset('css/template-kit-export-public.css')}}" media="all">
        <link rel="stylesheet" id="cute-alert-css" href="{{asset('css/style.css')}}" media="all">
        <link rel="stylesheet" id="text-editor-style-css" href="{{asset('css/text-editor.css')}}" media="all">
        <link rel="stylesheet" id="hello-elementor-css" href="{{asset('css/all.min.css')}}" media="all">
        <link rel="stylesheet" id="hello-elementor-css" href="{{asset('css/apple-webkit.min.css')}}" media="all">
        <link rel="stylesheet" id="hello-elementor-css" href="{{asset('css/e-animation-grow.min.css')}}" media="all">
        <link rel="stylesheet" id="hello-elementor-css" href="{{asset('css/style.min.css')}}" media="all">
        <link rel="stylesheet" id="hello-elementor-theme-style-css" href="{{asset('css/theme.min.css')}}"media="all">
        <link rel="stylesheet" id="hello-elementor-header-footer-css"href="{{asset('css/header-footer.min.css')}}" media="all">
        <link rel="stylesheet" id="elementor-post-6-css" href="{{asset('css/post-6.css')}}" media="all">                      
        <link rel="stylesheet" id="widget-heading-css" href="{{asset('css/widget-heading.min.css')}}"media="all">
        <link rel="stylesheet" id="widget-text-editor-css" href="{{asset('css/widget-text-editor.min.css')}}"media="all">
        <link rel="stylesheet" id="e-animation-fadeIn-css" href="{{asset('css/fadeIn.min.css')}}" media="all">
        <link rel="stylesheet" id="e-animation-fadeInLeft-css" href="{{asset('css/fadeInLeft.min.css')}}"media="all">
        <link rel="stylesheet" id="e-animation-fadeInRight-css" href="{{asset('css/fadeInRight.min.css')}}"media="all">
        <link rel="stylesheet" id="e-animation-fadeInUp-css" href="{{asset('css/fadeInUp.min.css')}}"media="all">  
        <link rel="stylesheet" id="e-animation-fadeInDown-css" href="{{asset('css/fadeInDown.min.css')}}"media="all">
        <link rel="stylesheet" id="e-animation-fadeInRight-css" href="{{asset('css/v4-shims.min.css')}}"media="all">
        <link rel="stylesheet" id="widget-image-css" href="{{asset('css/widget-image.min.css')}}" media="all">
        <link rel="stylesheet" id="widget-spacer-css" href="{{asset('css/widget-spacer.min.css')}}" media="all">
        <link rel="stylesheet" id="widget-counter-css" href="{{asset('css/widget-counter.min.css')}}"media="all">
        <link rel="stylesheet" id="widget-divider-css" href="{{asset('css/widget-divider.min.css')}}"media="all">
        <link rel="stylesheet" id="widget-testimonial-css" href="{{asset('css/widget-testimonial.min.css')}}"media="all">
        <link rel="stylesheet" id="widget-icon-box-css" href="{{asset('css/widget-icon-box.min.css')}}"media="all">
        <link rel="stylesheet" id="widget-icon-list-css" href="{{asset('css/widget-icon-list.min.css')}}"media="all">
        <link rel="stylesheet" id="mediaelement-css" href="{{asset('css/mediaelementplayer-legacy.min.css')}}"media="all">
        <link rel="stylesheet" id="wp-mediaelement-css" href="{{asset('css/wp-mediaelement.min.css')}}"media="all">
        
        <link rel="stylesheet" id="elementor-post-304-css" href="{{asset('css/post-304.css')}}" media="all">
        <link rel="stylesheet" id="elementor-post-1184-css" href="{{asset('css/post-1184.css')}}" media="all">
        <link rel="stylesheet" id="elementor-post-2112-css" href="{{asset('css/post-2112.css')}}" media="all">
        <link rel="stylesheet" id="elementor-post-898-css" href="{{asset('css/post-898.css')}}" media="all">
        <link rel="stylesheet" id="elementor-post-436-css" href="{{asset('css/post-436.css')}}" media="all">
        <link rel="stylesheet" id="ekit-widget-styles-css" href="{{asset('css/widget-styles.css')}}" media="all">
        <link rel="stylesheet" id="ekit-widget-social-css" href="{{asset('css/widget-social-icons.min.css')}}" media="all">
        <link rel="stylesheet" id="ekit-responsive-css" href="{{asset('css/responsive.css')}}" media="all">
        <link rel="stylesheet" id="google-fonts-1-css" href="{{asset('css/css')}}" media="all">
        <link rel="stylesheet" id="elementor-icons-ekiticons-css" href="{{asset('css/ekiticons.css')}}" media="all">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
        
        {{-- Internal js --}}
        <script src="{{asset('js/frontend-modules.min.js')}}" id="frontend-module-js"></script>        
        <script src="{{asset('js/jquery.min.js')}}"id="frontend-script-js"></script>
        <script src="{{asset('js/jquery-migrate.min.js')}}"id="frontend-script-js"></script>        
        <script src="{{asset('js/mediaelement-and-player.min.js')}}"id="frontend-script-js"></script>
        <script src="{{asset('js/mediaelement-migrate.min.js')}}"id="frontend-script-js"></script>
        <script src="{{asset('js/template-kit-export-public.js')}}"id="frontend-script-js"></script>        
        <script src="{{asset('js/wp-emoji-release.min.js')}}"id="frontend-script-js"></script>
        <script src="{{asset('js/wp-mediaelement.min.js')}}"id="frontend-script-js"></script>

        {{-- external css and js --}}
        <link rel="https://api.w.org/" href="https://tebewebe.online/edupreme/wp-json/">
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://tebewebe.online/edupreme/xmlrpc.php?rsd">
        <link rel="canonical" href="https://tebewebe.online/edupreme/template-kit/homepage/">
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"href="https://tebewebe.online/edupreme/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftebewebe.online%2Fedupreme%2Ftemplate-kit%2Fhomepage%2F">
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"href="https://tebewebe.online/edupreme/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftebewebe.online%2Fedupreme%2Ftemplate-kit%2Fhomepage%2F&amp;format=xml">
        <meta name="generator"content="Elementor 3.27.2; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">        
        

        
        
        <style>
            .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
    
            @media screen and (max-height: 1024px) {
    
                .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
                .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                    background-image: none !important;
                }
            }
    
            @media screen and (max-height: 640px) {
    
                .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
                .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                    background-image: none !important;
                }
            }


            /* Fixed Button Style */
        /* Fixed Button Style */        
        .apply-btn {
            position: fixed;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            background: var(--e-global-color-accent);
            color: white;
            padding: 15px 6px;
            font-weight: 300;
            writing-mode: vertical-rl;
            text-align: center;
            cursor: pointer;
            border-radius: 5px 0 0 5px;
            z-index: 1000;
            -webkit-transform: rotate(-180deg)
        }

        /* Background Blur Effect */
        .blur {
            filter: blur(5px);
            pointer-events: none;
        }

        /* Popup Styles */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            height: 100%;
            background: transparent;
            display: none;
            z-index: 1001;
            border-radius: 10px;
            overflow: hidden;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .popup .popup-content {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .popup .image-section {
            position: absolute;
            width: 100%;
            height: 90%;
            background: url('../images/two-students-working-in-library.jpg') center/cover no-repeat;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .popup .form-section {
            position: absolute;
            width: 45%;
            height: 98%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: white;
            right: 60px;
            top: 50%;
            transform: translateY(-50%);            
        }

        .popup form {
            display: flex;
            flex-direction: column;
            padding: 50px 10px;
        }
        
        .popup form input, .popup form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px !important;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif !important
        }

        .popup form button {
            background: var(--e-global-color-accent);
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: transparent !important;
            color: white !important;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 40px !important;
        }
        .form-section h3{
            font-weight: 100;
            color: #000;
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.5;
            font-size: 20px;
            
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;            
            margin-top: 10px;
        }

        @media screen and (max-width: 1000px) {
            .popup .popup-content .image-section {
                display: none; /* Hide the image section */
            }

            .popup .popup-content {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 100%;
            }

            .popup .form-section {
                position: relative;
                width: 100%; /* Full width */
                height: auto; /* Adjust height dynamically */
                padding: 20px; /* Reduce padding for small screens */
                display: flex;
                flex-direction: column;
                justify-content: center;
                background: white;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                overflow-y: auto;
            }

            .popup form {
                width: 100%;
                padding: 20px; /* Adjust padding for a better look */
                display: flex;
                flex-direction: column;
            }

            .popup form input, 
            .popup form select {
                width: 100%;
                padding: 12px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px; /* Improve readability */
            }

            .popup form button {
                width: 100%;
                background: var(--e-global-color-accent);
                color: white;
                padding: 12px;
                border: none;
                cursor: pointer;
                border-radius: 5px;
                font-size: 16px;
                font-weight: bold;
            }

            .close-btn {
                top: 10px;
                right: 10px;
                font-size: 30px !important; /* Adjust size */
            }
        }


        </style>        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body data-rsssl="1"class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-304 wp-embed-responsive theme-default elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-304 e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="desktop">

        <div id="content">
            @include('frontend.includes.header')
            {{-- main code start  --}}
            @yield('main_content')
            {{-- main code end  --}}
            @include('frontend.includes.footer')
            {{-- Internal js out of head --}}
        </div>
        <!-- Fixed Apply Now Button -->
    <div class="apply-btn" onclick="openPopup()">Apply Now</div>

    <!-- Popup -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <div class="image-section">
                <button class="close-btn" onclick="closePopup()">&times;</button>
            </div>
            <div class="form-section">                
                <form>
                    <h3>Get in Touch</h3>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Enter email address" required>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" style="background: transparent; width:100px; border-radius:0;" id="telPrepend">+ 91</span>
                            </div>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone number" aria-describedby="telPrepend" required>                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <select>
                            <option>Select school</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select>
                            <option>Select program</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select>
                            <option>Select your city</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Enter your state" required>
                    </div>


                    <button class="btn btn-sm btn-primary" style="width: 100px;" type="submit">Submit</button>

                    <div class="form-group" style="margin-top: 10px;">
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                            <label class="custom-control-label" for="customControlAutosizing"><small>By Clicking on above button, I authorize DYPU representative to contact me via phone and/or email.</small></label>
                          </div>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
        

        <script>
            function openPopup() {
                document.getElementById("popup").style.display = "flex";
                document.getElementById("content").classList.add('blur');
                document.body.style.overflow = "hidden"; // Disable scrolling
            }
    
            function closePopup() {
                document.getElementById("popup").style.display = "none";
                document.getElementById("content").classList.remove('blur');
                document.body.style.overflow = "auto"; // Disable scrolling
            }
        </script>

        <script>
            const lazyloadRunObserver = () => {
                const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
                const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            let lazyloadBackground = entry.target;
                            if (lazyloadBackground) {
                                lazyloadBackground.classList.add('e-lazyloaded');
                            }
                            lazyloadBackgroundObserver.unobserve(entry.target);
                        }
                    });
                }, { rootMargin: '200px 0px 200px 0px' });
                lazyloadBackgrounds.forEach((lazyloadBackground) => {
                    lazyloadBackgroundObserver.observe(lazyloadBackground);
                });
            };
            const events = [
                'DOMContentLoaded',
                'elementor/lazyload/observe',
            ];
            events.forEach((event) => {
                document.addEventListener(event, lazyloadRunObserver);
            });
        </script>
        <script src="{{asset('js/cute-alert.js')}}" id="cute-alert-js"></script>
        <script src="{{asset('js/hello-frontend.min.js')}}"id="hello-theme-frontend-js"></script>
        <script src="{{asset('js/frontend-script.js')}}"id="elementskit-framework-js-frontend-js"></script>
        <script id="elementskit-framework-js-frontend-js-after">var elementskit = {resturl: 'https://tebewebe.online/edupreme/wp-json/elementskit/v1/',}
    // </script>
        <script src="{{asset('js/widget-scripts.js')}}"id="ekit-widget-scripts-js"></script>
        <script src="{{asset('js/jquery-numerator.min.js')}}"id="jquery-numerator-js"></script>
        <script src="{{asset('js/webpack.runtime.min.js')}}"id="elementor-webpack-runtime-js"></script>
        <script src="{{asset('js/frontend-modules.min.js')}}" id="elementor-frontend-modules-js"></script>
        <script src="{{asset('js/core.min.js')}}" id="core-js"></script>
        <script id="elementor-frontend-js-before">
            var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":false},"version":"3.27.2","is_static":false,"experimentalFeatures":{"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"e_swiper_latest":true,"e_onboarding":true,"hello-theme-header-footer":true,"home_screen":true,"landing-pages":true,"nested-elements":true,"editor_v2":true,"link-in-bio":true,"floating-buttons":true},"urls":{"assets":"https:\/\/tebewebe.online\/edupreme\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/tebewebe.online\/edupreme\/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/tebewebe.online\/edupreme\/wp-content\/uploads\/sites\/63"},"nonces":{"floatingButtonsClickTracking":"aae2858eba"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"title","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":1184,"title":"About%20Us%20%E2%80%93%20Edupreme","excerpt":"","featuredImage":"https:\/\/tebewebe.online\/edupreme\/wp-content\/uploads\/sites\/63\/2023\/12\/About-Us-439x1024.jpg"}};
        </script>
        <script src="{{asset('js/frontend.min.js')}}"id="frontend-script-js"></script>
        <script src="{{asset('js/animate-circle.min.js')}}" id="animate-circle-js"></script>
        <script src="{{asset('js/v4-shims.min.js')}}"id="frontend-script-js"></script>
        <script id="elementskit-elementor-js-extra">
            var ekit_config = {"ajaxurl":"https:\/\/tebewebe.online\/edupreme\/wp-admin\/admin-ajax.php","nonce":"7e255b411d"};
        </script>
        <script src="{{asset('js/elementor.js')}}" id="elementor-js"></script>        
    </body>
</html>