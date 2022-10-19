<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="{{ route('/') }}"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.jpg') }}"
                    alt=""><img class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                    alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <!-- <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div> -->
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('/') }}"><img class="img-fluid"
                    src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="{{ route('/') }}"><img class="img-fluid"
                                src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">{{ trans('General') }} </h6>
                            <p class="lan-2">{{ trans('Dashboards,widgets & layout.') }}</p>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <!-- <label class="badge badge-success">2</label> -->
                        <a class="sidebar-link sidebar-title {{ (((Route::currentRouteName() == 'MembershipPlanList' ? 'active' : Route::currentRouteName() == 'MembershipPlan') ? 'active' : Route::currentRouteName() == 'MembershipCustomer') ? 'active' : Route::currentRouteName() == 'MembershipCustomerList') ? 'active' : '' }}"
                            href="#">
                            <i data-feather="home"></i>
                            <span class="lan-3">{{ trans('Membership') }}</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Route::currentRouteName() == 'MembershipCustomer' ? 'down' : 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="sidebar-submenu"
                            style="display: {{ (((Route::currentRouteName() == 'MembershipPlanList' ? 'block;' : Route::currentRouteName() == 'MembershipPlan') ? 'block;' : Route::currentRouteName() == 'MembershipCustomer') ? 'block' : Route::currentRouteName() == 'MembershipCustomerList') ? 'block' : 'none;' }}">
                            <li><a class="lan-4 {{ Route::currentRouteName() == 'MembershipPlanList' ? 'active' : '' }}"
                                    href="{{ route('MembershipPlanList') }}">{{ trans('Membership Plans') }}</a></li>
                            <li><a class="lan-4 {{ Route::currentRouteName() == 'MembershipPlan' ? 'active' : '' }}"
                                    href="{{ route('MembershipPlan') }}">{{ trans('Add Plan') }}</a></li>
                            <li><a class="lan-4 {{ Route::currentRouteName() == 'MembershipCustomerList' ? 'active' : '' }}"
                                    href="{{ route('MembershipCustomerList') }}">{{ trans('Customer Membership Plans') }}</a>
                            </li>
                            <li><a class="lan-5 {{ Route::currentRouteName() == 'MembershipCustomer' ? 'active' : '' }}"
                                    href="{{ route('MembershipCustomer') }}">{{ trans('Add Membership Customers') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        {{-- <label class="badge badge-success">2</label> --}}
                        <a class="sidebar-link sidebar-title {{ (Route::currentRouteName() == 'CustomerList' ? 'active' : Route::currentRouteName() == 'customerCreate') ? 'active' : '' }}"
                            href="#">
                            <i data-feather="home"></i>
                            <span class="lan-3">{{ trans('Customer') }}</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Route::currentRouteName() == '/dashboard' ? 'down' : 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="sidebar-submenu"
                            style="display: {{ (((Route::currentRouteName() == 'CustomerList'
                                            ? 'block;'
                                            : Route::currentRouteName() == 'customerCreate')
                                        ? 'block'
                                        : Route::currentRouteName() == 'CustomerAddressList')
                                    ? 'block'
                                    : Route::currentRouteName() == 'customerAddressCreate')
                                ? 'block;'
                                : 'none;' }}">
                            <li><a class="lan-4 {{ Route::currentRouteName() == 'CustomerList' ? 'active' : '' }}"
                                    href="{{ route('CustomerList') }}">{{ trans('All Customers') }}</a></li>
                            <li><a class="lan-4 {{ Route::currentRouteName() == 'customerCreate' ? 'active' : '' }}"
                                    href="{{ route('customerCreate') }}">{{ trans('Add Customer') }}</a></li>
                            <li><a class="lan-5 {{ Route::currentRouteName() == 'CustomerAddressList' ? 'active' : '' }}"
                                    href="{{ route('CustomerAddressList') }}">{{ trans('Customer Addresses') }}</a>
                            </li>
                            <li><a class="lan-5 {{ Route::currentRouteName() == 'customerAddressCreate' ? 'active' : '' }}"
                                    href="{{ route('customerAddressCreate') }}">{{ trans('Add Customer Addresses') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/users'? 'active': '' }}"
                            href="#">
                            <i data-feather="users"></i><span>{{ trans('Employee') }}</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ request()->route()->getPrefix() == '/users'? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="sidebar-submenu"
                            style="display: {{ ((Route::currentRouteName() == 'addEmployee' ? 'block' : Route::currentRouteName() == 'employeeList') ? 'block' : Route::currentRouteName() == 'employeeCard') ? 'block' : 'none;' }};">
                            <li><a href="{{ route('employeeList') }}"
                                    class="{{ Route::currentRouteName() == 'employeeList' ? 'active' : '' }}">Employees
                                    Profile</a></li>
                            <li><a href="{{ route('addEmployee') }}"
                                    class="{{ Route::currentRouteName() == 'addEmployee' ? 'active' : '' }}">Employee
                                    Add</a></li>
                            <li><a href="{{ route('employeeCard') }}"
                                    class="{{ Route::currentRouteName() == 'employeeCard' ? 'active' : '' }}">Employee
                                    Cards</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        {{-- <label class="badge badge-success">2</label> --}}
                        <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/dashboar'? 'active': '' }}"
                            href="#">
                            <i data-feather="home"></i>
                            <span class="lan-3">{{ trans('Warehouse') }}</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ request()->route()->getPrefix() == '/dashboard'? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="sidebar-submenu"
                            style="display: {{ (Route::currentRouteName() == 'warehouseIndia' ? 'block;' : Route::currentRouteName() == 'warehouseNepal') ? 'block;' : 'none;' }}">
                            <li><a class="lan-4 {{ Route::currentRouteName() == 'warehouseIndia' ? 'active' : '' }}"
                                    href="{{ route('warehouseIndia') }}">{{ trans('India Warehouse') }}</a></li>
                            <li><a class="lan-4 {{ Route::currentRouteName() == 'warehouseNepal' ? 'active' : '' }}"
                                    href="{{ route('warehouseNepal') }}">{{ trans('Nepal Warehouse') }}</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ (Route::currentRouteName() == 'blogList' ? 'active' : Route::currentRouteName() == 'addBlog') ? 'active' : '' }}"
                            href="#"><i data-feather="film"></i><span>{{ trans('lang.Blog') }}</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ request()->route()->getPrefix() == '/blog'? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="sidebar-submenu"
                            style="display: {{ (Route::currentRouteName() == 'addBlog' ? 'block' : Route::currentRouteName() == 'blogList') ? 'block' : 'none;' }};">
                            <li><a href="{{ route('blogList') }}"
                                    class="{{ Route::currentRouteName() == 'blogList' ? 'active' : '' }}">Blog
                                    Details</a>
                            </li>
                            {{-- <li><a href="{{ route('blog-single') }}"
                                    class="{{ Route::currentRouteName() == 'addBlog1' ? 'active' : '' }}">Blog
                                    Single</a></li> --}}
                            <li><a href="{{ route('addBlog') }}"
                                    class="{{ Route::currentRouteName() == 'addBlog' ? 'active' : '' }}">Add Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ (Route::currentRouteName() == 'cityList' ? 'active' : Route::currentRouteName() == 'addCity') ? 'active' :Route::currentRouteName() == 'pincodeList' ? 'active' :Route::currentRouteName() == 'addPincode' ? 'active' : '' }}"
                            href="#"><i data-feather="map"></i><span>{{ trans('Cities and Pincode') }}</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ Route::currentRouteName() == '/maps' ? 'down' : 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="sidebar-submenu"
                            style="display: {{ (Route::currentRouteName() == 'cityList' ? 'block' : Route::currentRouteName() == 'addCity' ? 'block' :Route::currentRouteName() == 'pincodeList' ? 'block' :Route::currentRouteName() == 'addPincode') ? 'block' : 'none;' }};">
                            <li><a href="{{ route('cityList') }}"
                                    class="{{ Route::currentRouteName() == 'cityList' ? 'active' : '' }}">All
                                    Cities</a>
                            </li>
                            <li><a href="{{ route('addCity') }}"
                                    class="{{ Route::currentRouteName() == 'addCity' ? 'active' : '' }}">Add
                                    City</a>
                            </li>
                            <li><a href="{{ route('pincodeList') }}"
                                    class="{{ Route::currentRouteName() == 'pincodeList' ? 'active' : '' }}">All
                                    Pincodes</a>
                            </li>
                            <li><a href="{{ route('addPincode') }}"
                                    class="{{ Route::currentRouteName() == 'addPincode' ? 'active' : '' }}">Add
                                    Pincode</a>
                            </li>
                        </ul>


                    </li>
                    <li class="sidebar-list"><a
                            class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName() == 'faq' ? 'active' : '' }}"
                            href="{{ route('faq') }}"><i data-feather="help-circle">
                            </i><span>{{ trans('lang.FAQ') }}</span></a></li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/chat'? 'active': '' }}"
                            href="#">
                            <i data-feather="message-circle"></i><span>{{ trans('lang.Chat') }}</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ request()->route()->getPrefix() == '/chat'? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="sidebar-submenu"
                            style="display: {{ request()->route()->getPrefix() == '/chat'? 'block': 'none;' }};">
                            <li><a href="{{ route('chat') }}"
                                    class="{{ Route::currentRouteName() == 'chat' ? 'active' : '' }}">Chat App</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/email'? 'active': '' }}"
                            href="#">
                            <i data-feather="mail"></i><span>{{ trans('lang.Email') }}</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ request()->route()->getPrefix() == '/email'? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="sidebar-submenu"
                            style="display: {{ request()->route()->getPrefix() == '/email'? 'block': 'none;' }};">
                            <li><a href="{{ route('email-application') }}"
                                    class="{{ Route::currentRouteName() == 'email-application' ? 'active' : '' }}">Email
                                    App</a></li>
                            <li><a href="{{ route('email-compose') }}"
                                    class="{{ Route::currentRouteName() == 'email-compose' ? 'active' : '' }}">Email
                                    Compose</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/email'? 'active': '' }}"
                            href="#">
                            <i data-feather="package"></i><span>{{ trans('Orders') }}</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ request()->route()->getPrefix() == '/email'? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="sidebar-submenu"
                            style="display: {{ request()->route()->getPrefix() == '/email'? 'block': 'none;' }};">
                            <li><a href="{{ route('orderRecords') }}"
                                    class="{{ Route::currentRouteName() == 'email-application' ? 'active' : '' }}">All
                                    Orders</a></li>
                            <li><a href="{{ route('createOrder') }}"
                                    class="{{ Route::currentRouteName() == 'email-compose' ? 'active' : '' }}">Create
                                    Order</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/widgets'? 'active': '' }}"
                            href="#"><i data-feather="airplay"></i><span
                                class="lan-6">{{ trans('lang.Widgets') }}</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ request()->route()->getPrefix() == '/widgets'? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="sidebar-submenu"
                            style="display: {{ request()->route()->getPrefix() == '/widgets'? 'block;': 'none;' }}">
                            <li><a href="{{ route('general-widget') }}"
                                    class="{{ Route::currentRouteName() == 'general-widget' ? 'active' : '' }}">{{ trans('lang.General') }}</a>
                            </li>
                            <li><a href="{{ route('chart-widget') }}"
                                    class="{{ Route::currentRouteName() == 'chart-widget' ? 'active' : '' }}">{{ trans('lang.Chart') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/page-layouts'? 'active': '' }}"
                            href="#"><i data-feather="layout"></i>
                            <span class="lan-7">{{ trans('lang.Page layout') }}</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ request()->route()->getPrefix() == '/page-layouts'? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="sidebar-submenu"
                            style="display: {{ request()->route()->getPrefix() == '/page-layouts'? 'block;': 'none;' }}">
                            <li><a href="{{ route('box-layout') }}"
                                    class="{{ Route::currentRouteName() == 'box-layout' ? 'active' : '' }}">Boxed</a>
                            </li>
                            <li><a href="{{ route('layout-rtl') }}"
                                    class="{{ Route::currentRouteName() == 'layout-rtl' ? 'active' : '' }}">RTL</a>
                            </li>
                            <li><a href="{{ route('layout-dark') }}"
                                    class="{{ Route::currentRouteName() == 'layout-dark' ? 'active fw-bold' : '' }}">Dark
                                    Layout</a></li>
                            <li><a href="{{ route('hide-on-scroll') }}"
                                    class="{{ Route::currentRouteName() == 'hide-on-scroll' ? 'active' : '' }}">Hide
                                    Nav Scroll</a></li>
                            <li><a href="{{ route('footer-light') }}"
                                    class="{{ Route::currentRouteName() == 'footer-light' ? 'active' : '' }}">Footer
                                    Light</a></li>
                            <li><a href="{{ route('footer-dark') }}"
                                    class="{{ Route::currentRouteName() == 'footer-dark' ? 'active' : '' }}">Footer
                                    Dark</a></li>
                            <li><a href="{{ route('footer-fixed') }}"
                                    class="{{ Route::currentRouteName() == 'footer-fixed' ? 'active' : '' }}">Footer
                                    Fixed</a></li>
                        </ul>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
