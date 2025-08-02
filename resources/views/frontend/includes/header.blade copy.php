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
            background-color: white;            
        }
        .fix_top{
            position: fixed;
            top: 0;
            z-index: 1000; 
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
        .navbar {
            background-color: #2d1c66; /* Dark Blue */
            width: 100%;
            margin-top: 10px;
            padding: 8px 0;

        }

        .navbar-2 {
            background-color: #2d1c66; /* Dark Blue */
            width: 60%;
            margin-top: 10px;
            padding: 8px 0;

        }

        .navbar ul {
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
            font-family: 'Times New Roman', serif !important;
            font-weight: bold;
            color: #2d1c6a; /* Dark purple color */
            display: flex;
            align-items: center;
            user-select: none;            
        }

        .logo-2 {
            font-family: 'Times New Roman', serif !important;
            font-weight: bold;
            color: #2d1c6a; /* Dark purple color */
            display: flex;
            align-items: center;
            justify-content: flex-start;
            user-select: none;                
        }

        .logo .main {
            font-size: 78px;  
            font-family: 'Times New Roman', serif !important;                                
        }

        .logo-2 .main {
            font-size: 58px;  
            font-family: 'Times New Roman', serif !important;                                
        }


        .logo .sub {
            font-size: 19px;
            text-transform: uppercase;
            margin-left: 10px;
            font-weight: 100;
            min-width: 279px; 
            max-width: 330px;
            line-height: 1.5;
            font-family: 'Times New Roman', serif !important;      
        }

        .logo-2 .sub {
            font-size: 14px;
            text-transform: uppercase;
            margin-left: 10px;
            font-weight: 100;
            min-width: 279px; 
            max-width: 330px;
            line-height: 1.5;
            font-family: 'Times New Roman', serif !important;      
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
                min-width: 238px;
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
                top: 137px;
                right: 0; /* Initially hidden */
                width: 300px;
                height: 85vh;
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
            
            .elementor-button-wrapper{
                width:70% !important;
            }
        }

        .dropdown-a:hover .dropdown {
            display: flex;
            flex-wrap: nowrap;
            height: max-content !important;
            flex-direction: column !important;
        }        
    </style>
    <header class="header e-con e-flex " style="padding: 10px 0 0 0;">
        <div class="" style="padding-bottom: 0;width: 100%;">
            <div style="display: flex;width: 100%;">                
                <div style="position: absolute; right: 0;"><ul style="list-style: none; display: flex;">
                    <li><a style="text-decoration:none;color:#2d1c66" href="https://p3plmcpnl504303.prod.phx3.secureserver.net:2096/webmaillogout.cgi" target="_blank">Login</a></li>&nbsp;|&nbsp;
                    <li><a style="text-decoration:none;color:#2d1c66" href="#">Online Payment</a></li>&nbsp;|&nbsp;
                    <li><a style="text-decoration:none;color:#2d1c66" href="{{route('contact')}}">Help Desk</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                </ul></div>                 
                <div style="width: 100%;padding:0 0;">
                    <div style="display: flex;justify-content: flex-end;">                        
                        <div class="header-title logo" style="margin:auto">
                            <img src="{{ asset('images/'. env('COLLEGE_IMAGE')) }}" width="100" height="100">
                            <span class="main">{{env('COLLEGE_NAME_SHORT')}}</span>
                            <span class="sub">{{env('COLLEGE_NAME')}}</span>                            
                        </div>
                        <a href="#" class="get-in-touch" style="height:44px;margin-top:10px;padding-left:25px;padding-right:25px;border-radius:0; position: absolute; top:30px;">Admissions {{date('Y')}} →</a>
                    </div>
                    <nav class="navbar" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 1);">
                        <ul style="display: flex;">
                            <li><a href="{{ route('home') }}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
                            <li><a href="{{ route('about') }}" class="{{request()->routeIs('about') ? 'active' : ''}}">About {{env('COLLEGE_NAME_SHORT')}}</a></li>
                            
                            <li style="position:relative" class="dropdown-a" >
                                <a href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle {{request()->routeIs('courses') ? 'active' : ''}}">
                                    Programs                                                                                                                                
                                </a>
                                <ul class="elementskit-dropdown elementskit-submenu-panel dropdown" style="width:max-content; flex-direction:column;">
                                    <li class="menu-item nav-item">
                                        <a href="{{route('view-courses', 'bba')}}" class="dropdown-item">BBA</a>
                                    </li>
                                    <li class="menu-item nav-item">
                                        <a href="{{route('view-courses', 'bca')}}" class="dropdown-item">BCA</a>
                                    </li>
                                    <li class="menu-item nav-item">
                                        <a href="{{route('view-courses', 'mba')}}" class="dropdown-item">MBA</a>
                                    </li>
                                    <li class="menu-item nav-item">
                                        <a href="{{route('view-courses', 'mca')}}" class="dropdown-item">MCA</a>
                                    </li>                                    
                                </ul>  
                            </li>
                            
                            <li style="position:relative" class="dropdown-a">
                                <a href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle {{ request()->routeIs('courses') ? 'active' : '' }}">
                                    Admission
                                </a>
                                <ul class="elementskit-dropdown elementskit-submenu-panel dropdown" style="width:max-content; flex-direction:column;">
                                    <li class="menu-item nav-item">
                                        <a href="{{route('admissions')}}" class="dropdown-item">Admissions cell @ {{env('COLLEGE_NAME_SHORT')}}</a>
                                    </li>
                                    <li class="menu-item nav-item">
                                        <a href="{{route('apply_now')}}" class="dropdown-item">Apply Now</a>
                                    </li>
                                    <li class="menu-item nav-item">
                                        <a href="{{route('coursesoffered')}}" class="dropdown-item">Courses Offered</a>
                                    </li>
                                    <li class="menu-item nav-item">
                                        <a href="{{route('eligibility')}}" class="dropdown-item">Eligibility Criteria</a>
                                    </li>                                    
                                    <li class="menu-item nav-item">
                                        <a href="{{route('doc-checklist')}}" class="dropdown-item">Document Checklist</a>
                                    </li>
                                    <li class="menu-item nav-item">
                                        <a href="{{route('anti-ragging')}}" class="dropdown-item">Anti-Ragging Policy</a>
                                    </li>
                                    <li class="menu-item nav-item">
                                        <a href="{{route('view-rules')}}" class="dropdown-item">College Rules and Regulations</a>
                                    </li>                                    
                                    <li class="menu-item nav-item">
                                        <a href="{{route('admission-policy')}}" class="dropdown-item">Admission Policy</a>
                                    </li>

                                    <li class="menu-item nav-item">
                                        <a href="#" class="dropdown-item">Scholarships</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="{{route('academics')}}">Academics Infrastructure</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="{{route('view-rd')}}">R&D Cell</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="{{route('view-tp')}}">Corporate Resource Cell</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="{{route('my_blogs')}}">Blog</a></li>
                            
                            <li style="float: right;"><a href="{{route('contact')}}">Contact Us</a></li>
                            <li style="float: right;"><a href="#">Careers</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header> 

    <style>

        .header-2 {
            visibility: hidden;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
            background: white; /* Change based on design */
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity .4s linear, transform .4s linear;
        }

        .header-2.show {
            visibility: visible;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: nowrap;
            padding: 2px 20px;
            background: white;
            opacity: 1;
            transform: translateY(0);
        }  
        
        .header-2 .logo-2{
            flex:  0 0 30%;
        }

        .header-2 .logo-2 .main{
            margin-left: 5px;
        }

        .logo-2{            
            min-width: 35%;            
        }
        .nav-2{            
            width: 55%;
            height: 45px;
            padding: 20px;
            background-color: #fff

        }

        
        .login-tab{
            width: 10%;
            padding: 20px;
        }

        .nav-2 ul{
            justify-content: flex-start;
            list-style: none;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            align-items: center;
        }

        .nav-2 ul li {
            margin: 0 15px;
            float: left;
        }

        .nav-2 ul li a {
            color: #2e1a69;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease;
            white-space: nowrap;
        }

        .nav-2 ul li a:hover {
            color: #ffcc00; /* Yellow Hover */
        }

        .header-2 button{
            padding: 15px 20px !important;
            width: 100%;
            background-color: transparent;
            border: 1px solid #2e1a69;
            color: #2e1a69;
            border-radius: 5px;
        }

        .header-2 button:hover{
            background-color: #2e1a69;
            color: white;
        }
    </style>
    

    <div class="header-2">
        <div class="header-title logo-2">
            <img src="{{ asset('images/'. env('COLLEGE_IMAGE')) }}" width="60" height="100">
            <span class="main">{{env('COLLEGE_NAME_SHORT')}}</span>
            <span class="sub">{{env('COLLEGE_NAME')}}</span>                            
        </div>

        <nav class="nav-2">
            <ul style="display: flex;">
                <li><a href="{{ route('home') }}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{request()->routeIs('about') ? 'active' : ''}}">About {{env('COLLEGE_NAME_SHORT')}}</a></li>

                <li style="position:relative" class="dropdown-a" >
                    <a href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle {{request()->routeIs('courses') ? 'active' : ''}}">
                        Programs                                                                                                                                
                    </a>
                    <ul class="elementskit-dropdown elementskit-submenu-panel dropdown" style="width:max-content; flex-direction:column; align-items:flex-start;">
                        <li class="menu-item nav-item">
                            <a href="{{route('view-courses', 'bba')}}" class="dropdown-item text-start">BBA</a>
                        </li>
                        <li class="menu-item nav-item">
                            <a href="{{route('view-courses', 'bca')}}" class="dropdown-item">BCA</a>
                        </li>
                        <li class="menu-item nav-item">
                            <a href="{{route('view-courses', 'mba')}}" class="dropdown-item">MBA</a>
                        </li>
                        <li class="menu-item nav-item">
                            <a href="{{route('view-courses', 'mca')}}" class="dropdown-item">MCA</a>
                        </li>                                    
                    </ul>  
                </li>
                
                <li style="position:relative" class="dropdown-a">
                    <a href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle {{ request()->routeIs('courses') ? 'active' : '' }}">
                        Admission
                    </a>
                    <ul class="elementskit-dropdown elementskit-submenu-panel dropdown" style="width:max-content; flex-direction:column; align-items:flex-start;">
                        <li class="menu-item nav-item">
                            <a href="{{route('admissions')}}" class="dropdown-item">Admissions cell @ {{env('COLLEGE_NAME_SHORT')}}</a>
                        </li>
                        <li class="menu-item nav-item">
                            <a href="{{route('apply_now')}}" class="dropdown-item">Apply Now</a>
                        </li>
                        <li class="menu-item nav-item">
                            <a href="{{route('coursesoffered')}}" class="dropdown-item">Courses Offered</a>
                        </li>
                        <li class="menu-item nav-item">
                            <a href="{{route('eligibility')}}" class="dropdown-item">Eligibility Criteria</a>
                        </li>                                    
                        <li class="menu-item nav-item">
                            <a href="{{route('doc-checklist')}}" class="dropdown-item">Document Checklist</a>
                        </li>
                        <li class="menu-item nav-item">
                            <a href="{{route('anti-ragging')}}" class="dropdown-item">Anti-Ragging Policy</a>
                        </li>
                        <li class="menu-item nav-item">
                            <a href="{{route('view-rules')}}" class="dropdown-item">College Rules and Regulations</a>
                        </li>                                    
                        <li class="menu-item nav-item">
                            <a href="{{route('admission-policy')}}" class="dropdown-item">Admission Policy</a>
                        </li>

                        <li class="menu-item nav-item">
                            <a href="#" class="dropdown-item">Scholarships</a>
                        </li>
                    </ul>
                </li>                                                                  
                <li style="position:relative" class="dropdown-a" >
                    <a href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle {{request()->routeIs('courses') ? 'active' : ''}}">
                        More                                                                                                                                
                    </a>
                    <ul class="elementskit-dropdown elementskit-submenu-panel dropdown" style="width:max-content; flex-direction:column; align-items:flex-start;">    
                        <li class="menu-item nav-item"><a class="dropdown-item" href="{{route('academics')}}">Academics Infrastructure</a></li>                                        
                        <li class="menu-item nav-item"><a class="dropdown-item" href="{{route('view-rd')}}">R&D Cell</a></li>
                        <li class="menu-item nav-item"><a class="dropdown-item" href="{{route('my_blogs')}}">Blog</a></li>
                        <li class="menu-item nav-item"><a class="dropdown-item" href="{{route('contact')}}">Contact Us</a></li>
                        <li class="menu-item nav-item"><a class="dropdown-item" href="#">Careers</a></li>
                    </ul>  
                </li> 
                
            </ul>
        </nav>

        <div class="login-tab">            
            <a href="https://p3plmcpnl504303.prod.phx3.secureserver.net:2096/webmaillogout.cgi" target="_blank" class="btn btn-outline-primary px-4 py-2">Login</a>    
            
        </div>
    </div>

    <script>
        window.addEventListener('scroll', function () {
            const header2 = document.querySelector('.header-2');
            if (window.scrollY > 150) {
                header2.classList.add('show');
            } else {
                header2.classList.remove('show');
            }
        });
    </script>
    <div class="mobile-header" style="padding: 15px 15px;position: sticky; top: -1px; z-index: 999; background: #fff;">        
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

    
    <div id="mobile-menus" class="mobile-menu flex flex-col bg-[#a51c30] p-4 space-y-2 transition-all fixed h-[95vh] z-[9999] w-[300px] right-0 pt-10 lg:hidden" style="background-color: var(--e-global-color-accent);">
        <ul>
            <li><a href="{{ route('home') }}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{request()->routeIs('about') ? 'active' : ''}}">About {{env('COLLEGE_NAME_SHORT')}}</a></li>            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="programsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Programs
                </a>
                <ul class="dropdown-menu" aria-labelledby="programsDropdown">
                  <li><a class="dropdown-item text-dark" href="{{route('view-courses', 'bba')}}">BBA</a></li>
                  <li><a class="dropdown-item text-dark" href="{{route('view-courses', 'bca')}}">BCA</a></li>
                  <li><a class="dropdown-item text-dark" href="{{route('view-courses', 'mBa')}}">MBA</a></li>
                  <li><a class="dropdown-item text-dark" href="{{route('view-courses', 'mca')}}">MCA</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="programsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  B.tech Programs
                </a>
                <ul class="dropdown-menu" aria-labelledby="programsDropdown">
                  <li><a class="dropdown-item text-dark" href="{{route('view-courses', 'csa')}}">Computer Science and Engineering</a></li>
                  <li><a class="dropdown-item text-dark" href="{{route('view-courses', 'ec')}}">Electronics & Communication Engineering</a></li>
                  <li><a class="dropdown-item text-dark" href="{{route('view-courses', 'csit')}}">Computer Science & Information Technology</a></li>
                  <li><a class="dropdown-item text-dark" href="{{route('view-courses', 'aiml')}}">CSE (Artificial Intelligence & Machine Learning)</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="programsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admission
                </a>                
                <ul class="dropdown-menu" style="width:max-content; flex-direction:column; align-items:flex-start; overflow-y:auto; height:380px;">
                    <li><a href="{{route('admissions')}}" class="dropdown-item">Admissions cell @ {{env('COLLEGE_NAME_SHORT')}}</a></li>
                    <li class="menu-item nav-item"><a href="{{route('apply_now')}}" class="dropdown-item text-dark">Apply Now</a></li>
                    <li class="menu-item nav-item"><a href="{{route('coursesoffered')}}" class="dropdown-item text-dark">Courses Offered</a></li>
                    <li class="menu-item nav-item"><a href="{{route('eligibility')}}" class="dropdown-item text-dark">Eligibility Criteria</a></li>                                    
                    <li class="menu-item nav-item"><a href="{{route('doc-checklist')}}" class="dropdown-item text-dark">Document Checklist</a></li>
                    <li class="menu-item nav-item"><a href="{{route('anti-ragging')}}" class="dropdown-item text-dark">Anti-Ragging Policy</a></li>
                    <li class="menu-item nav-item"><a href="{{route('view-rules')}}" class="dropdown-item text-dark">College Rules and Regulations</a></li>                                    
                    <li class="menu-item nav-item"><a href="{{route('admission-policy')}}" class="dropdown-item text-dark">Admission Policy</a></li>
                    <li class="menu-item nav-item"><a href="#" class="dropdown-item text-dark">Scholarships</a></li>
                </ul>
            </li>

            <li><a href="{{route('academics')}}">Academics Infrastructure</a></li>
            <li><a href="{{route('view-rd')}}">R&D Cell</a></li>
            <li><a href="{{route('view-tp')}}">T&P</a></li>
                        
            <li><a href="{{route('my_blogs')}}">Blog</a></li>
            
            <li><a href="{{route('contact')}}">Contact Us</a></li>
            <li><a href="#">Careers</a></li>
        </ul>
        <div class="flex gap-2">
          <a href="#" class="get-in-touch" style="height:44px;margin-top:10px;padding-left:25px;padding-right:25px;border-radius:0">Admissions 2025 →</a>             
        </div>
    </div>

    <script>
        function toggleSubMenu(el) {                        
            const submenu = el.nextElementSibling;
            submenu.classList.toggle('show');
        }
    </script>
    

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
