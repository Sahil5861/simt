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
                        <i class="ph-house"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item nav-item-submenu {{ request()->routeIs('admin.orders', 'admin.order_view', 'admin.complete-order') ? 'nav-item-expanded' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.orders', 'admin.order_view', 'admin.complete-order', 'admin.cancelled-order') ? 'active' : '' }}"><i class="fas fa-shopping-cart"></i><span>Manage Orders</span></a>
                    <ul class="nav-group-sub {{ request()->routeIs('admin.orders', 'admin.orders_1','admin.order_view', 'admin.complete-order', 'admin.cancelled-order', 'admin.refunded-order') ? 'nav-group-sub-expanded' : 'collapse' }}">
                        <li class="nav-item">
                            <a href="{{ route('admin.orders') }}"
                                class="nav-link {{ request()->routeIs('admin.orders') ? 'active' : '' }}">
                                <i class="fas fa-hourglass-half"></i>
                                <span>Pending Orders</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('admin.orders_1') }}"
                                class="nav-link {{ request()->routeIs('admin.orders_1') ? 'active' : '' }}">
                                <i class="fas fa-hourglass-half"></i>
                                <span>Pending Orders  New</span>
                            </a>
                        </li> --}}
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
                </li>

                @if(Auth::user()->role == 'vendor')
                    <li class="nav-item">
                        <a href="{{route('vendor.products')}}"
                            class="nav-link <?= set_active(['vendor.products', 'vendor.add-product', 'vendor.edit-products'], 'active'); ?>">
                            <i class="fas fa-box-open"></i>
                            <span>Products</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.profile')}}"
                            class="nav-link <?= set_active(['admin.profile'], 'active'); ?>">
                            <i class="fa fa-user"></i>
                            <span>Profile</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('vendor.toppings')}}"
                            class="nav-link <?= set_active(['vendor.toppings', 'vendor.add-toppings', 'vendor.edit-toppings'], 'active'); ?>">
                            <i class="fa fa-plus"></i>
                            <span>Toppings</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('holidays')}}"
                            class="nav-link <?= set_active(['holidays', 'holidays.add'], 'active'); ?>">
                            <i class="fa fa-calendar-alt"></i>
                            <span>Holidays</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('restaurant-timings')}}" class="nav-link <?= set_active(['restaurant-timings'], 'active'); ?>">
                            <i class="fa fa-clock"></i>
                            <span>Restaurant Hours</span>
                        </a>
                    </li>
                @endif  


                {{-- admin routes --}}

                @if(Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a href="{{route('admin.categories')}}"
                            class="nav-link <?= set_active(['admin.categories', 'admin.add-category', 'admin.edit-category'], 'active'); ?>">
                            <i class="fas fa-list-ul"></i>
                            <span>Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.subcategories')}}"
                            class="nav-link <?= set_active(['admin.subcategories', 'admin.add-sub-category', 'admin.edit-sub-category'], 'active'); ?>">
                            <i class="fas fa-expand"></i>

                            <span>Size</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.extra_add-ons')}}"
                            class="nav-link <?= set_active(['admin.extra_add-ons', 'admin.add-extra_add_ons', 'admin.extra_add-ons.store', 'admin.edit-extra_add_ons'], 'active'); ?>">
                            <i class="fa fa-plus"></i>
                            <span>Toppings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.products')}}"
                            class="nav-link <?= set_active(['admin.products', 'admin.add-product', 'admin.edit-products'], 'active'); ?>">
                            <i class="fas fa-box-open"></i>

                            <span>Products</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.hot.deal.products')}}"
                            class="nav-link <?= set_active(['admin.hot.deal.products', 'admin.edit.hot.deal.product'], 'active'); ?>">
                            <i class="fas fa-fire"></i>
                            <span>Hot Deal Products</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.banner-products')}}"
                            class="nav-link <?= set_active(['admin.banner-products', 'admin.add-banner-product', 'admin.edit-banner-product'], 'active'); ?>">
                            <i class="fas fa-ad"></i>
                            <span>Banner Products</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.sliders')}}"
                            class="nav-link <?= set_active(['admin.sliders', 'admin.add-slider', 'admin.edit-slider'], 'active'); ?>">
                            <i class="fas fa-sliders-h"></i>  <!-- Horizontal Sliders Icon -->
                            <span>Sliders</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.users')}}"
                            class="nav-link <?= set_active(['admin.users', 'admin.add-user', 'admin.edit-user', 'admin.user.orders'], 'active'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.customers') }}"
                            class="nav-link {{ set_active(['admin.customers', 'admin.add-customer', 'admin.edit-customer'], 'active') }}">
                            <i class="fas fa-user-tag"></i>
                            <span>Customer</span>
                        </a>
                <li class="nav-item">
                    <a href="{{route('admin.vendors')}}" class="nav-link <?= set_active(['admin.vendors', 'admin.add-vendor', 'admin.edit-vendor'], 'active'); ?>">
                        <i class="fas fa-pizza-slice"></i>

                        <span>Restaurants </span>
                    </a>
                </li>
                                                
                <li class="nav-item">
                    <a href="{{route('restaurant-timings')}}" class="nav-link <?= set_active(['restaurant-timings', 'restaurant-timings.add', 'restaurant_timings.edit'], 'active'); ?>">
                        <i class="fa fa-clock"></i>
                        <span>Restaurant Hours</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.coupon-codes')}}" class="nav-link <?= set_active(['admin.coupon-codes', 'admin.add-coupon-code', 'admin.edit-coupon-code'], 'active'); ?>">
                        <i class="fa fa-tags"></i>
                        <span>Coupon Codes</span>
                    </a>
                </li>

                    <li class="nav-item">
                        <a href="{{route('admin.inquiries')}}"
                            class="nav-link <?= set_active(['admin.inquiries'], 'active'); ?>">
                            <i class="fa fa-question-circle"></i>
                            <!-- <span>Inquiries @php {{ echo App\Models\Contact::count();}}  @endphp</span> -->
                            <span>Inquiries <span class="text-warning">@php echo "(".App\Models\Contact::count().")";
                                    @endphp </span></span>

                        </a>
                    </li>


                    <li
                        class="nav-item nav-item-submenu {{ request()->routeIs('admin.orders', 'admin.order_view', 'admin.complete-order') ? 'nav-item-expanded' : '' }}">
                        <a href="#"
                            class="nav-link {{ request()->routeIs('admin.orders', 'admin.order_view', 'admin.complete-order') ? 'active' : '' }}">
                            <i class="fas fa-file-alt"></i>

                            <span>Pages</span>
                        </a>
                        <ul
                            class="nav-group-sub {{ request()->routeIs('admin.about', 'admin.privacy-policy', 'admin.gallery', 'admin.add-gallery', 'admin.edit-gallery', 'admin.franchise') ? 'nav-group-sub-expanded' : 'collapse' }}">
                            <li class="nav-item">
                                <a href="{{ route('admin.about') }}"
                                    class="nav-link {{ request()->routeIs('admin.about') ? 'active' : '' }}">
                                    <i class="fas fa-info-circle"></i>  <!-- Info Circle Icon -->
                                    <span>About</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.franchise') }}"
                                    class="nav-link {{ request()->routeIs('admin.franchise') ? 'active' : '' }}">
                                    <i class="fas fa-globe"></i>
                                    <span>Franchise</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('admin.privacy-policy') }}"
                                    class="nav-link {{ request()->routeIs('admin.privacy-policy') ? 'active' : '' }}">
                                    <i class="fas fa-lock"></i>  <!-- Lock Icon for Privacy -->

                                    <span>Privacy Policy</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.gallery') }}"
                                    class="nav-link {{ request()->routeIs('admin.gallery') ? 'active' : '' }}">
                                    <i class="fas fa-images"></i>  <!-- Gallery Icon (Images) -->

                                    <span>Gallery</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif  


                {{-- for both admin and vendor --}}
                @if(Auth::user()->role == 'vendor' || Auth::user()->role == 'admin')
                    <li
                        class="nav-item nav-item-submenu {{ request()->routeIs('admin.change.password') ? 'nav-item-expanded' : '' }}">
                        <a href="#" class="nav-link {{ request()->routeIs('admin.change.password') ? 'active' : '' }}">
                            <i class="fa fa-cog"></i>
                            <span>Settings</span>
                        </a>
                        <ul
                            class="nav-group-sub {{ request()->routeIs('admin.change.password') ? 'nav-group-sub-expanded' : 'collapse' }}">
                            <li class="nav-item">
                                <a href="{{ route('admin.change.password') }}"
                                    class="nav-link {{ request()->routeIs('admin.change.password') ? 'active' : '' }}">
                                    <i class="fas fa-key"></i>
                                    <span>Change Password</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                @if(Auth::user()->role == 'user')
                    <li class="nav-item">
                        <a href="{{route('admin.user_order')}}"
                            class="nav-link <?= set_active(['admin.user_order'], 'active'); ?>">
                            <i class="far fa-circle"></i>
                            <span>Orders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.user_profile')}}"
                            class="nav-link <?= set_active(['admin.user_profile'], 'active'); ?>">
                            <i class="far fa-circle"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                @endif              </ul>
        </div>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar content -->
</div>
<!-- /main sidebar -->