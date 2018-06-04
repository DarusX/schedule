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
                                <button class="btn btn-default" type="button"><i class="fas fa-search"></i></button>
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