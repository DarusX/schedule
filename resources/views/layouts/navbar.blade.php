<header class="header">
    <nav class="navbar">
        <!-- Search Box-->
        <div class="search-box">
            <button class="dismiss">
                <i class="icon-close"></i>
            </button>
            <form action="{{route('professor.index')}}" method="GET">
                <input type="search" class="form-control" name="query">
            </form>
        </div>
        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <!-- Navbar Header-->
                <div class="navbar-header">
                    <!-- Navbar Brand -->
                    <a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                        <div class="brand-text d-none d-lg-inline-block">
                            @auth
                            <span>Axolotl</span>
                            @endauth
                        </div>
                        <div class="brand-text d-none d-sm-inline-block d-lg-none">
                            <strong>
                                <i class="fas fa-glasses"></i>
                            </strong>
                        </div>
                    </a>
                    <!-- Toggle Button-->
                    <a id="toggle-btn" href="#" class="menu-btn active">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <!-- Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <!-- Search-->
                    @auth
                    <li class="nav-item d-flex align-items-center">
                        <a id="search" href="#">
                            <i class="icon-search"></i>
                        </a>
                    </li>
                    <!-- Notifications-->
                    <!-- Messages-->
                    @endauth
                    <!-- Logout    -->
                    <li class="nav-item">
                        @auth
                        <a href="#" class="nav-link logout">
                            <span class="d-none d-sm-inline">@lang('menu.logout')</span>
                            <i class="fa fa-sign-out"></i>
                        </a>
                        @else
                        <a href="{{route('login')}}" class="nav-link">
                            <span class="d-none d-sm-inline">@lang('menu.login')</span>
                            <i class="fa fa-sign-out"></i>
                        </a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>