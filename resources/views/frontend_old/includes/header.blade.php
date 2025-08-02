<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
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
            color: white !important;
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
            background-color: #ffcc00; /* Yellow */
            color: #333 !important;
            text-decoration: none;

        }

        /* Navbar */
        .navbar {
            background-color: #2d1c66; /* Dark Blue */
            width: 100%;
            margin-top: 40px;
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
            top: 100%;
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
            padding: 10px 15px;
            color: #333;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        
        .elementskit-dropdown .dropdown-item:hover {
            background: #f0f0f0;
        }


    </style>
    <header class="header e-con e-flex" style="padding: 10px 0 0 10px;">
        <div class="" style="padding-bottom: 0;width: 100%;">
            <div style="display: flex;width: 100%;">
                <div class="header-logo">
                    <img src="{{ asset('images/' . env('COLLEGE_IMAGE')) }}" alt="Institute Logo" style="width: 180px;height: auto;">
                    
                </div>
                <div style="width: 100%;padding: 40px 0 0;margin-left: 30px;">
                    <div style="display: flex;justify-content: space-between;">
                        <div class="header-title">SITASRM ENGINEERING AND RESEARCH INSTITUTE</div>
                        <a href="#" class="get-in-touch">Get in touch →</a>
                    </div>
                    <nav class="navbar">
                        <ul>
                            <li><a href="{{ route('home') }}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
                            <li><a href="{{ route('about') }}" class="{{request()->routeIs('about') ? 'active' : ''}}">About SERI</a></li>
                            <li style="position:relative"><a href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle {{request()->routeIs('courses') ? 'active' : ''}}">Programs</a>
                                            <ul class="elementskit-dropdown elementskit-submenu-panel"
                                                style="width: max-content;">
                                                <li id="menu-item-24"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content"
                                                    data-vertical-menu="750px">
                                                    <a href="{{route('courses.btech')}}" class=" dropdown-item">B tech</a>
                                                </li>                                                                                            
                                            </ul></a></li>
                            <li><a href="{{route('contact')}}">Admission Help Desk</a></li>
                            <li><a href="{{route('my_blogs')}}">Blog</a></li>
                            
                            <li style="float: right;"><a href="{{route('contact')}}">Contact Us</a></li>
                            <li style="float: right;"><a href="#">Careers</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    


    <!-- Mobile Sidebar Menu -->
    <div class="offcanvas offcanvas-start" id="mobileMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About SERI</a></li>
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
