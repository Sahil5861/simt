<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">
    <!-- Sidebar content -->
    <div class="sidebar-content">
        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>
                <div>
                    <button type="button"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->

        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header pt-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="ph-house"></i><span>Dashboard</span>
                    </a>
                </li>

                {{-- <li class="nav-item nav-item-submenu {{ request()->routeIs('admin.orders', 'admin.order_view', 'admin.complete-order') ? 'nav-item-expanded' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.orders', 'admin.order_view', 'admin.complete-order', 'admin.cancelled-order') ? 'active' : '' }}"><i class="fas fa-shopping-cart"></i><span>Manage Blogs</span></a>
                    <ul class="nav-group-sub {{ request()->routeIs('admin.orders', 'admin.orders_1','admin.order_view', 'admin.complete-order', 'admin.cancelled-order', 'admin.refunded-order') ? 'nav-group-sub-expanded' : 'collapse' }}">
                        <li class="nav-item">
                            <a href="{{ route('admin.orders') }}"
                                class="nav-link {{ request()->routeIs('admin.orders') ? 'active' : '' }}">
                                <i class="fas fa-hourglass-half"></i>
                                <span>Pending Orders</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.complete-order') }}"
                                class="nav-link {{ request()->routeIs('admin.complete-order') ? 'active' : '' }}">
                                <i class="fas fa-check-circle"></i>
                                <span>Completed Orders</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.cancelled-order') }}"
                                class="nav-link {{ request()->routeIs('admin.cancelled-order') ? 'active' : '' }}">
                                <i class="fas fa-times-circle"></i>
                                <span>Cancelled Orders</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.refunded-order') }}"
                                class="nav-link {{ request()->routeIs('admin.refunded-order') ? 'active' : '' }}">
                                <i class="fas fa-undo"></i>
                                <span>Refunded Orders</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}


                {{-- <li class="nav-item">
                    <a href="{{ route('admin.blogs.index') }}" class="nav-link {{ request()->routeIs('admin.blogs.index') ? 'active' : '' }}">
                        <i class="fas fa-blog"></i><span>Manage Blogs</span>
                    </a>                    
                </li>                 --}}

                @if (Auth::User()->name == 'admin' || Auth::User()->name == 'Admin')                    
                    <li class="nav-item nav-item-submenu {{ request()->routeIs('admin.blogs.index', 'admin.authors.index', 'admin.blogs.category.index') ? 'nav-item-expanded' : '' }}">
                        <a href="#" class="nav-link {{ request()->routeIs('admin.blogs.index', 'admin.authors.index') ? 'active' : '' }}"><i class="fas fa-blog"></i><span>Manage Blogs</span></a>
                        <ul class="nav-group-sub {{ request()->routeIs('admin.blogs.index', 'admin.authors.index', 'admin.blogs.category.index') ? 'nav-group-sub-expanded' : 'collapse' }}">
                            <li class="nav-item">
                                <a href="{{ route('admin.blogs.index') }}"
                                    class="nav-link {{ request()->routeIs('admin.blogs.index') ? 'active' : '' }}">
                                    <i class="fas fa-newspaper"></i><span>Blogs</span>
                                </a>
                            </li>  

                            <li class="nav-item">
                                <a href="{{ route('admin.blogs.category.index') }}"
                                    class="nav-link {{ request()->routeIs('admin.blogs.category.index') ? 'active' : '' }}">
                                    <i class="fas fa-file-alt"></i><span>&nbsp; Blogs Category</span>
                                </a>
                            </li>  

                            <li class="nav-item">
                                <a href="{{ route('admin.authors.index') }}"
                                    class="nav-link {{ request()->routeIs('admin.orders') ? 'active' : '' }}">
                                    <i class="fas fa-users"></i><span>Blog Authors</span>
                                </a>
                            </li>                                                                       
                        </ul>
                    </li>
                @endif

                

                <li class="nav-item">
                    <a href="{{ route('admin.admission-enquiry.index') }}"
                        class="nav-link {{ request()->routeIs('admin.admission-enquiry.index') ? 'active' : '' }}">
                        <i class="fas fa-file-alt"></i><span>&nbsp; Admission Enquiries</span>
                    </a>
                </li>  
                
                <li class="nav-item">
                    <a href="{{ route('admin.contacts.index') }}"
                        class="nav-link {{ request()->routeIs('admin.contacts.index') ? 'active' : '' }}">
                        <i class="fas fa-file-alt"></i><span>&nbsp; Contacts</span>
                    </a>
                </li> 

                <li class="nav-item">
                    <a href="{{ route('admin.apply-inquiries.index') }}"
                        class="nav-link {{ request()->routeIs('admin.apply-inquiries.index') ? 'active' : '' }}">
                        <i class="fas fa-file-alt"></i><span>&nbsp; Apply Enquiries</span>
                    </a>
                </li> 


                {{-- for both admin and vendor --}}
                           
            </ul>
        </div>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar content -->
</div>
<!-- /main sidebar -->