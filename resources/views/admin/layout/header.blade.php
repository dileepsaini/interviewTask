<div class="header">

    <div class="header-left active">
        <a href="index.html" class="logo logo-normal">
            <img src="assets/img/logo.png" alt>
        </a>
        <a href="index.html" class="logo logo-white">
            <img src="assets/img/logo-white.png" alt>
        </a>
        <a href="index.html" class="logo-small">
            <img src="assets/img/logo-small.png" alt>
        </a>
        <a id="toggle_btn" href="javascript:void(0);">
            <i data-feather="chevrons-left" class="feather-16"></i>
        </a>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <ul class="nav user-menu">

        <li class="nav-item nav-searchinputs">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <i class="fa fa-search"></i>
                </a>
                <form action="#">
                    <div class="searchinputs">
                        <input type="text" placeholder="Search">
                        <div class="search-addon">
                            <span><i data-feather="search" class="feather-14"></i></span>
                        </div>
                    </div>

                </form>
            </div>
        </li>


    

        <li class="nav-item nav-item-box">
            <a href="javascript:void(0);" id="btnFullscreen">
                <i data-feather="maximize"></i>
            </a>
        </li>
       

    

       
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <span class="user-info">
                    <span class="user-letter">
                        <img src="assets/img/profiles/avator1.jpg" alt class="img-fluid">
                    </span>
                    <span class="user-detail">
                        <span class="user-name">{{ Auth::user()->name }}</span>
                    </span>
                </span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <a class="dropdown-item logout pb-0" href="{{ route('logout') }}"><img
                            src="{{ asset('admin/img/icons/log-out.svg') }}" class="me-2" alt="img">Logout</a>
                </div>
            </div>
        </li>
    </ul>


    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="javascript:void(0);">{{ Auth::user()->name }}</a>
            <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
        </div>
    </div>

</div>