<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Times+New+Roman:wght@700&display=swap');

        .navbar { background-color: #2e1a69; }
        .navbar-brand img { height: 60px; }
        .navbar-nav .nav-link { color: white; }
        .navbar-toggler { border: none; }
        .get-in-touch {
            background: white;
            color: #2e1a69;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
        }

        #menu-item-26{
            position: relative;
        }

        #menu-item-26_mobile{
            position: relative;
        }

        #menu-item-26 .elementskit-dropdown {
            display: none;
            flex-direction: column;
            position: absolute;
            width: max-content;
        }
        #menu-item-26_mobile .elementskit-dropdown{
            display: none;
            flex-direction: column;
            position: absolute;
            width: max-content;
        }

        #menu-item-26:hover .elementskit-dropdown {
            display: flex;
        }

        #menu-item-26_mobile:hover .elementskit-dropdown {
            display: flex;
        }
        /* Header Container */
        .header {

            display: flex;
            align-items: center;
        /*    justify-content: space-between;*/
            background-color: white;
/*            padding: 10px 20px;*/
/*            border-bottom: 3px solid #2d1c66; /* Dark Blue Border */*/
        }

        /* Logo Styling */
        .header-logo img {
            height: 80px; /* Adjust as needed */
            margin-right: 15px;
        }

        /* Right Section (Title + Navbar) */
        .header > div {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        /* Institute Title */
        .header-title {
            font-size: 30px;
            font-weight: bold;
            color: #2d1c66; /* Dark Blue */
            font-family: "Times New Roman", serif;
            letter-spacing: 1px;
        }

        /* Get in Touch Button */
        .get-in-touch {
            background-color: #2d1c66; /* Dark Blue */
            color: #e4b316 !important;
            padding: 8px 15px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
            display: inline-block;
            margin-top: -7px;
            margin-right: 20px;
        }

        .get-in-touch:hover {
            background-color: #fff; /* Yellow */
            color: #2d1c66 !important;
            border: 1px solid #2d1c66;
            text-decoration: none;

        }

        /* Navbar */
        .navbar {
            background-color: #2d1c66; /* Dark Blue */
            width: 100%;
            margin-top: 30px;
            padding: 8px 0;

        }

        .navbar ul {
/*            display: flex;*/
            justify-content: center;
            list-style: none;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .navbar ul li {
            margin: 0 15px;
            float: left;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar ul li a:hover {
            color: #ffcc00; /* Yellow Hover */
        }
        
        /* Hide submenu by default */
        .elementskit-dropdown {
            display: none;
            position: absolute;
            top: 92%;
            left: 0;
            background: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            min-width: 200px;
        }
        
        /* Show submenu on hover */
        .ekit-menu-nav-link:hover + .elementskit-dropdown,
        .elementskit-dropdown:hover {
            display: block;
        }
        
        /* Rotate arrow icon on hover */
        .ekit-menu-nav-link:hover .elementskit-submenu-indicator {
            transform: rotate(180deg);
            transition: transform 0.3s ease;
        }
        
        /* Submenu item styling */
        .elementskit-dropdown li {
            list-style: none;
        }
        
        .elementskit-dropdown .dropdown-item {
            display: block;
            padding: 10px 5px;
            color: #333;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        
        .elementskit-dropdown .dropdown-item:hover {
            /*background: #f0f0f0;*/
        }

        .logo {
            font-family: 'Times New Roman', serif;
            font-weight: bold;
            color: #2d1c6a; /* Dark purple color */
            display: flex;
            align-items: center;
            user-select: none;
            
        }

        .logo .main {
            font-size: 78px;                      
            /* margin-top: 12px; */
        }

        .logo .sub {
            font-size: 19px;
            text-transform: uppercase;
            margin-left: 10px;
            font-weight: 100;
            width: 279px; 
            line-height: 1.5           
        }
        .mobile-header,#mobile-menus{
            display:none;
        }
        
@media (max-width: 767px) {
    .mobile-header,#mobile-menus{
        display:block;
    }
     .header {
         display:none;
     }
     .logo .sub {
     font-size: 13px;
     width: 180px;
     line-height: 1.2;
     margin-left:0;
}
.header-logo{
    display:flex;
}
.logo{
    display:block;
    position: relative;
        top: 10px;
}
/* Mobile Menu Styling */
.mobile-menu {
    position: fixed;
    top: 150px;
    right: 0; /* Initially hidden */
    width: 300px;
    height: 95vh;
    background-color: #560713;
    padding: 16px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    z-index: 9999;
    transform: translateX(300px);
    transition: transform 0.3s ease-in-out;
}
 .mobile-menu.open {
    transform: translateX(0);
}

/* Navigation Links */
.mobile-menu ul {
    list-style: none;
    padding: 0;
}



.mobile-menu ul li {
    margin-bottom: 16px;
}

.mobile-menu ul li a {
       color: white;
        text-transform: uppercase;
        font-size: 15px;
        transition: color 0.3sease-in-out;
        text-decoration: none;
}

.mobile-menu ul li a:hover {
    color: red;
}

/* Buttons */
.mobile-menu .flex {
    display: flex;
    gap: 8px;
}

.mobile-menu a {
    display: flex;
    align-items: center;
    text-transform: uppercase;
    font-size: 13px;
    transition: transform 0.3s ease-in-out;
}
 
.mobile-menu a span {
    padding: 12px;
}

.mobile-menu a .icon {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 12px;
    transition: transform 0.3s ease-in-out;
}

.mobile-menu a .icon:hover {
    transform: scale(1.1);
}
.elementor-304 .elementor-element.elementor-element-e7b1143 {
       padding-top: 4em !important;;
        padding-bottom: 0em !important;;
        padding-left: 1em !important;;
        
    }
    .elementor-heading-title.elementor-size-default{
        font-size:24px !important;
    }
    .elementor-button-wrapper{
        width:70% !important;
    }
}

    </style>
    <header class="header e-con e-flex">
        <div class="" style="padding-bottom: 0;width: 100%;">
            <div style="display: flex;width: 100%;">                
                <div style="position: absolute; right: 0; display: none;">
                    <ul style="list-style: none; display: flex;">
                        <li><a style="text-decoration:none;color:#2d1c66" href="https://p3plmcpnl504303.prod.phx3.secureserver.net:2096/webmaillogout.cgi" target="_blank">Login</a></li>&nbsp;|&nbsp;
                        <li><a style="text-decoration:none;color:#2d1c66" href="#">Online Payment</a></li>&nbsp;|&nbsp;
                        <li><a style="text-decoration:none;color:#2d1c66" href="{{route('contact')}}">Help Desk</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                    </ul>
                </div>
                 {{-- <div class="header-logo">
                    <img src="{{ asset('images/' . env('COLLEGE_IMAGE')) }}" alt="Institute Logo" style="width: 100px;height: auto;">
                 </div> --}}
                <div style="width: 100%;padding: 00px 0 0;">                                        
                    <nav class="navbar" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 1); background-color:#fff;">
                        <ul style="display: flex; justify-content:flex-end; align-items:center;">
                            <li><a style="color: #2d1c6a;" href="{{ route('home') }}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
                            <li><a style="color: #2d1c6a;" href="{{ route('about') }}" class="{{request()->routeIs('about') ? 'active' : ''}}">About {{env('COLLEGE_NAME_SHORT')}}</a></li>
                            <li style="position:relative"><a style="color: #2d1c6a;" href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle {{request()->routeIs('courses') ? 'active' : ''}}">Programs                                
                                </a style="color: #2d1c6a;">
                                    <ul class="elementskit-dropdown elementskit-submenu-panel"
                                        style="width: max-content;">
                                        <li id="menu-item-24"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content"
                                            data-vertical-menu="750px">
                                            <a  href="{{route('courses.btech')}}" class=" dropdown-item">B tech</a>
                                        </li>                                                                                            
                                    </ul>
                                </a>
                            </li>                        
                            <li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom 
                                menu-item-has-children menu-item-26 nav-item elementskit-dropdown-has 
                                relative_position elementskit-dropdown-menu-default_width 
                                elementskit-mobile-builder-content" data-vertical-menu="750px">
                                
                                <a style="color: #2d1c6a;" href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle">
                                    Insights
                                    <i aria-hidden="true" class="icon icon-down-arrow1 elementskit-submenu-indicator"></i>
                                </a>

                                <ul class="elementskit-dropdown elementskit-submenu-panel" style="">
                                    <li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom 
                                        menu-item-25 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                        <a href="" class="dropdown-item">
                                            Academics Infrastructure
                                        </a>
                                    </li>

                                    <li id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom 
                                        menu-item-27 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                        <a href="" class="dropdown-item">
                                            T&P
                                        </a>
                                    </li>

                                    <li id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom 
                                        menu-item-28 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                        <a href="{{route('my_blogs')}}" class="dropdown-item">
                                            Blogs
                                        </a>
                                    </li>                                    
                                    {{-- <li id="menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom 
                                        menu-item-30 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px">
                                        <a href="/edupreme/template-kit/404-page/" class="dropdown-item">
                                            404 Page
                                        </a>
                                    </li> --}}
                                </ul>
                            </li>

                            <li><a style="color: #2d1c6a;" href="{{route('contact')}}">Admissions</a></li>                            
                            <li><a style="color: #2d1c6a;" href="{{route('contact')}}">Contact Us</a></li>
                            <li><a style="color: #2d1c6a;" href="#">Careers</a></li>
                            <li><a style="color: #2d1c6a;" href="#" class="get-in-touch" style="padding-left:25px;padding-right:25px;border-radius:0">Admissions {{date('Y')}} →</a></li>
                        </ul>                                               
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>

    
    <div class="mobile-header" style="padding: 15px 15px;position: sticky; top: -1px; z-index: 9999; background: #fff;">
        <div>
             <ul style="list-style: none; display: flex;justify-content: center;margin-bottom: .4rem;">
                <li><a style="text-decoration:none;color:#2d1c66" href="https://p3plmcpnl504303.prod.phx3.secureserver.net:2096/webmaillogout.cgi" target="_blank">Login</a></li>&nbsp;|&nbsp;
                <li><a style="text-decoration:none;color:#2d1c66" href="#">Online Payment</a></li>&nbsp;|&nbsp;
                <li><a style="text-decoration:none;color:#2d1c66" href="{{route('contact')}}">Help Desk</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
             </ul> 
        </div>
        <div style="display:flex;align-items: center; justify-content: space-between;">
             <div class="header-logo">
                <img src="{{ asset('images/' . env('COLLEGE_IMAGE')) }}" alt="Institute Logo" style="width: 90px;height: auto;">
                 <div class="header-title logo">
                    <h2 class="main" style="font-size:24px;margin: 0 0 2px;">{{env('COLLEGE_NAME_SHORT')}}</h2>
                    <p class="sub">{{env('COLLEGE_NAME')}}</p>
                </div>
            </div>
            <div style="cursor:pointer; position: absolute; top: 49px;right: 22px;" id="menu-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="#dc1515" d="M3 4h18v2H3zm0 7h12v2H3zm0 7h18v2H3z" stroke-width="0.5" stroke="#dc1515"/></svg>
            </div>
        </div>
    </div>


    <!-- Mobile Sidebar Menu -->
    
    <div id="mobile-menus" class="mobile-menu flex flex-col bg-[#a51c30] p-4 space-y-2 transition-all fixed h-[95vh] z-[9999] w-[300px] right-0 pt-10 lg:hidden">
        <ul>
            <li><a href="{{ route('home') }}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{request()->routeIs('about') ? 'active' : ''}}">About {{env('COLLEGE_NAME_SHORT')}}</a></li>
            <li style="position:relative"><a href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle {{request()->routeIs('courses') ? 'active' : ''}}">Programs                
                </a>
                    <ul class="elementskit-dropdown elementskit-submenu-panel"
                        style="width: max-content;">
                        <li id="menu-item-24"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content"
                            data-vertical-menu="750px">
                            <a href="{{route('courses.btech')}}" class=" dropdown-item">B tech</a>
                        </li>                                                                                            
                    </ul>
                </a>
            </li>


            <li  class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="insightsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Insights <i class="bi bi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="insightsDropdown" style="border-radius: 0;">
                    <li>
                        <a  style="color: #000;" class="dropdown-item" href="#">Academics Infrastructure</a>
                    </li>
                    <li>
                        <a  style="color: #000;" class="dropdown-item" href="#">T&P</a>
                    </li>
                    <li>
                        <a  style="color: #000;" class="dropdown-item" href="{{ route('my_blogs') }}">Blogs</a>
                    </li>
                </ul>
            </li>
            
            <li><a href="{{route('contact')}}">Admissions </a></li>
            <li><a href="{{route('my_blogs')}}">Blog</a></li>
            
            <li><a href="{{route('contact')}}">Contact Us</a></li>
            <li><a href="#">Careers</a></li>
        </ul>
        <div class="flex gap-2">
          <a href="#" class="get-in-touch" style="height:44px;margin-top:10px;padding-left:25px;padding-right:25px;border-radius:0">Admissions 2025 →</a>             
        </div>
    </div>

    <div class="offcanvas offcanvas-start" id="mobileMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About {{env('COLLEGE_NAME_SHORT')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><a href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle">Courses<i
                                                    aria-hidden="true"
                                                    class="icon icon-down-arrow1 elementskit-submenu-indicator"></i></a>
                                            <ul class="elementskit-dropdown elementskit-submenu-panel"
                                                style="width: max-content;">
                                                <li id="menu-item-24"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content"
                                                    data-vertical-menu="750px">
                                                    <a href="{{route('courses.btech')}}" class=" dropdown-item">B tech</a>
                                                </li>                                                                                            
                                            </ul></a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Admission Help Desk</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Careers</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
            </ul>
            <a href="#" class="get-in-touch mt-3 d-block">Get in touch →</a>
        </div>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menuToggle = document.getElementById("menu-toggle");
            const mobileMenu = document.getElementById("mobile-menus");
        
            menuToggle.addEventListener("click", () => {
                // Toggle menu visibility
                mobileMenu.classList.toggle("open");
        
                if (mobileMenu.classList.contains("open")) {
                    menuToggle.innerHTML = `
                       <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="#dc1515" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" stroke-width="0.5" stroke="#dc1515"/></svg>
                    `;
                } else {
                    menuToggle.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="#dc1515" d="M3 4h18v2H3zm0 7h12v2H3zm0 7h18v2H3z" stroke-width="0.5" stroke="#dc1515"/></svg>
                    `;
                }
            });
        });
    </script>
