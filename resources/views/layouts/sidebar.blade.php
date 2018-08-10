{{--
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    @lang('menu.courses')
                    <span class="pull-right">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="list-group">
                <li class="list-group-item">
                    <a href="{{route('course.index')}}">@lang('menu.courses')
                        <span class="pull-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                @can('course.create')
                <li class="list-group-item">
                    <a href="{{route('course.create')}}">@lang('menu.create')
                        <span class="pull-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                @endcan
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" id="headingTwo">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    @lang('menu.professors')
                    <span class="pull-right">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="list-group">
                <li class="list-group-item">
                    <a href="{{route('professor.index')}}">@lang('menu.professors')
                        <span class="pull-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                <li class="list-group-item list-group-form">
                    <form action="{{route('professor.search')}}" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" placeholder="@lang('placeholder.name')">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </li>
                @can('professor.create')
                <li class="list-group-item">
                    <a href="{{route('professor.create')}}">@lang('menu.create')
                        <span class="pull-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                @endcan
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" id="headingThree">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    @lang('menu.classrooms')
                    <span class="pull-right">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="list-group">
                <li class="list-group-item">
                    <a href="{{route('classroom.index')}}">@lang('menu.classrooms')
                        <span class="pull-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                @can('classroom.create')
                <li class="list-group-item">
                    <a href="{{route('classroom.create')}}">@lang('menu.create')
                        <span class="pull-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                @endcan
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" id="headingFour">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                    @lang('menu.periods')
                    <span class="pull-right">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
            <div class="list-group">
                <li class="list-group-item">
                    <a href="{{route('period.index')}}">@lang('menu.periods')
                        <span class="pull-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                @can('period.create')
                <li class="list-group-item">
                    <a href="{{route('period.create')}}">@lang('menu.create')
                        <span class="pull-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                @endcan
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" id="headingFive">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                    @lang('menu.languages')
                    <span class="pull-right">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
            </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse">
            <div class="list-group">
                <li class="list-group-item">
                    <a href="{{route('language.index')}}">@lang('menu.languages')
                        <span class="pull-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                @can('language.create')
                <li class="list-group-item">
                    <a href="{{route('language.create')}}">@lang('menu.create')
                        <span class="pull-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                @endcan
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" id="headingSix">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                    @lang('menu.hours')
                    <span class="pull-right">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
            </h4>
        </div>
        <div id="collapseSix" class="panel-collapse collapse">
            <div class="list-group">
                <li class="list-group-item">
                    <a href="{{route('hour.index')}}">@lang('menu.hours')
                        <span class="pull-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                @can('hour.create')
                <li class="list-group-item">
                    <a href="{{route('hour.create')}}">@lang('menu.create')
                        <span class="pull-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                @endcan
            </div>
        </div>
    </div>
</div>
--}}
<nav class="side-navbar">
    @auth
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar">
            <img src="{{asset('img/logo.png')}}" alt="..." class="img-fluid rounded-circle">
        </div>
        <div class="title">
            <h1 class="h4">{{Auth::user()->name}}</h1>
            <p>{{Auth::user()->username}}</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus-->
    <span class="heading">Main</span>
    <ul class="list-unstyled">
        <li>
            <a href="/home">
                <i class="icon-home"></i>Incio </a>
        </li>
        <li>
            <a href="#courses-menu" aria-expanded="false" data-toggle="collapse">
                <i class="icon-interface-windows"></i>@lang('menu.courses')</a>
            <ul id="courses-menu" class="collapse list-unstyled ">
                <li>
                    <a href="{{route('course.index')}}">@lang('menu.courses')</a>
                </li>
                @can('course.create')
                <li>
                    <a href="{{route('course.create')}}">@lang('menu.create')</a>
                </li>
                @endcan
            </ul>
        </li>
    </ul>
    <span class="heading">Catalogs</span>
    <ul class="list-unstyled">
        <li>
            <a href="#professors-menu" aria-expanded="false" data-toggle="collapse">
                <i class="icon-interface-windows"></i>@lang('menu.professors')</a>
            <ul id="professors-menu" class="collapse list-unstyled ">
                <li>
                    <a href="{{route('professor.index')}}">@lang('menu.professors')</a>
                </li>
                @can('professor.create')
                <li>
                    <a href="{{route('professor.create')}}">@lang('menu.create')</a>
                </li>
                @endcan
            </ul>
            <a href="#periods-menu" aria-expanded="false" data-toggle="collapse">
                <i class="icon-interface-windows"></i>@lang('menu.periods')</a>
            <ul id="periods-menu" class="collapse list-unstyled ">
                <li>
                    <a href="{{route('period.index')}}">@lang('menu.periods')</a>
                </li>
                @can('period.create')
                <li>
                    <a href="{{route('period.create')}}">@lang('menu.create')</a>
                </li>
                @endcan
            </ul>
            <a href="#languages-menu" aria-expanded="false" data-toggle="collapse">
                <i class="icon-interface-windows"></i>@lang('menu.languages')</a>
            <ul id="languages-menu" class="collapse list-unstyled ">
                <li>
                    <a href="{{route('language.index')}}">@lang('menu.languages')</a>
                </li>
                @can('period.create')
                <li>
                    <a href="{{route('language.create')}}">@lang('menu.create')</a>
                </li>
                @endcan
            </ul>
        </li>

    </ul>
    @endauth
</nav>