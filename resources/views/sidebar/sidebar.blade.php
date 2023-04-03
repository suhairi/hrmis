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
                                    <img src="{{ URL::to('assets/img/profiles/avatar-10.jpg') }}" alt="user avatar"
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
                        <a href="{{ route('employees.index') }}"><img src="{{ URL::to('assets/img/employee.svg') }}" alt="sidebar_img"><span>
                                Pengurusan Pekerja</span></a>
                    </li>
                    <li>
                        <a href="{{ route('leaves.index') }}"><img src="{{ URL::to('assets/img/bed.svg') }}" class="text-blue-500" alt="sidebar_img"><span>
                                Pengurusan Cuti</span></a>
                    </li>
                    
                    <li>
                        <a href="{{ route('performance.index') }}"><img src="{{ URL::to('assets/img/performance.svg') }}" alt="sidebar_img"><span>
                                Pengurusan Prestasi</span></a>
                    </li>

                    @if(Str::contains(Auth::user()->location, 'WILAYAH'))
                        <li>
                            <a href="{{ route('directory.index') }}"><img src="{{ URL::to('assets/img/performance.svg') }}" alt="sidebar_img"><span>
                                    Direktori PPK</span></a>
                        </li>
                    @endif

                    @if(Str::contains(Auth::user()->location, 'HQ'))
                        <li>
                            <a href="{{ route('positions.index') }}"><img src="{{ URL::to('assets/img/position.svg') }}" alt="sidebar_img"> <span>
                                    Position</span></a>
                        </li>               
                        <li>
                            <a href="{{ route('users.index') }}"><img src="{{ URL::to('assets/img/users.svg') }}" alt="sidebar_img"> <span>
                                    Users</span></a>
                        </li>                   
                        <li>
                            <a href="{{ route('roles.index') }}"><img src="{{ URL::to('assets/img/roles.svg') }}" alt="sidebar_img"> <span>
                                    Roles</span></a>
                        </li>                  
                        <li>
                            <a href="{{ route('permissions.index') }}"><img src="{{ URL::to('assets/img/permission.svg') }}" alt="sidebar_img"> <span>
                                    Permissions</span></a>
                        </li>
                                                        
                        <li>
                            <a href="{{ route('wilayah.index') }}"><img src="{{ URL::to('assets/img/ppk.svg') }}" alt="sidebar_img"> <span>
                                    Wilayah</span></a>
                        </li>
                        <li>
                            <a href="{{ route('ppk.index') }}"><img src="{{ URL::to('assets/img/ppk.svg') }}" alt="sidebar_img"> <span>
                                    PPK</span></a>
                        </li>
                        <li>
                            <a href="{{ route('audits.index') }}"><img src="{{ URL::to('assets/img/ppk.svg') }}" alt="sidebar_img"> <span>
                                    Audit</span></a>
                        </li>
                        
                    @endif

                    <li class="mt-5">
                        <a href="{{ route('profiles.index') }}"><img src="{{ URL::to('assets/img/profile.svg') }}" alt="sidebar_img">
                            <span>Profil Pengguna</span></a>
                    </li>
                    

                    
                </ul>
                <ul>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <img src="{{ URL::to('assets/img/logout.svg') }}" alt="sidebar_img"><span>Log Keluar</span>
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