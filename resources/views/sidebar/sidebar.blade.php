<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div class="sidebar-contents">
            <div id="sidebar-menu" class="sidebar-menu">
                <div class="mobile-show">
                    <div class="offcanvas-menu">
                        <div class="user-info align-center bg-theme text-center">
                            <span class="lnr lnr-cross  text-white" id="mobile_btn_close">X</span>
                            <a href="javascript:void(0)" class="d-block menu-style text-white">
                                <div class="user-avatar d-inline-block mr-3">
                                    <img src="{{ URL::to('assets/img/profiles/avatar-18.jpg') }}" alt="user avatar"
                                        class="rounded-circle" width="50">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-input">
                        <div class="top-nav-search">
                            <form>
                                <input type="text" class="form-control" placeholder="Search here">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <ul>
                    <li class="">
                        <a href="{{ route('home') }}"><img src="{{ URL::to('assets/img/home.svg') }}" alt="sidebar_img">
                            <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="employee.html"><img src="{{ URL::to('assets/img/employee.svg') }}" alt="sidebar_img"><span>
                                Employees</span></a>
                    </li>
                    <li>
                        <a href="employee.html"><img src="{{ URL::to('assets/img/performance.svg') }}" alt="sidebar_img"><span>
                                Performance</span></a>
                    </li>
                    @can('role-create')                    
                        <li>
                            <a href="{{ route('users.index') }}"><img src="{{ URL::to('assets/img/users.svg') }}" alt="sidebar_img"> <span>
                                    Users</span></a>
                        </li>
                    @endcan
                    @can('role-create')                    
                        <li>
                            <a href="{{ route('roles.index') }}"><img src="{{ URL::to('assets/img/users.svg') }}" alt="sidebar_img"> <span>
                                    Roles</span></a>
                        </li>
                    @endcan
                    @can('role-create')                    
                        <li>
                            <a href="{{ route('permissions.index') }}"><img src="{{ URL::to('assets/img/users.svg') }}" alt="sidebar_img"> <span>
                                    Permissions</span></a>
                        </li>
                    @endcan
                    
                    
                    @can('product-create')
                        <li>
                            <a href="{{ route('products.index') }}"><img src="{{ URL::to('assets/img/calendar.svg') }}" alt="sidebar_img">
                                <span>Products</span></a>
                        </li>
                    @endcan
                    <li>
                        <a href="leave.html"><img src="{{ URL::to('assets/img/leave.svg') }}" alt="sidebar_img">
                            <span>Leave</span></a>
                    </li>
                    <li>
                        <a href="manage.html"><img src="{{ URL::to('assets/img/manage.svg') }}" alt="sidebar_img">
                            <span>Manage</span></a>
                    </li>
                    <li>
                        <a href="settings.html"><img src="{{ URL::to('assets/img/settings.svg') }}"
                                alt="sidebar_img"><span>Settings</span></a>
                    </li>
                    <li>
                        <a href="{{ route('profiles.index') }}"><img src="{{ URL::to('assets/img/profile.svg') }}" alt="sidebar_img">
                            <span>Profile</span></a>
                    </li>
                </ul>
                <ul class="logout">
                    <li>
                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <img src="{{ URL::to('assets/img/logout.svg') }}" alt="sidebar_img"><span>Log
                                out</span>
                                        <!-- {{ __('Logout')  }} - {{ Auth::user()->name }} -->
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>