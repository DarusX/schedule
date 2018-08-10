<table class="table table-hover">
    <thead>
        <tr>
            <th>
                <i class="fas fa-comments"></i> @lang('head.language')</th>
            <th>
                <i class="fas fa-expand-arrows-alt"></i> @lang('head.level')</th>
            <th>
                <i class="fas fa-barcode"></i> @lang('head.group')</th>
            <th>
                <i class="far fa-calendar-alt"></i> @lang('head.period')</th>
            <th>
                <i class="fas fa-clock"></i> @lang('head.hour')</th>
            <th class="text-center">
                <i class="fas fa-anchor"></i> @lang('head.base')</th>
            <th>
                <i class="fas fa-user"></i> @lang('head.professor')</th>
            <th>
                <i class="fas fa-home"></i> @lang('head.classroom')</th>
            @if($show)
            <th>@lang('head.actions')</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td>
                @if($show)
                <a href="{{route('language.courses', $course->language)}}" class="btn btn-primary btn-xs link-modal">
                    <i class="fas fa-plus"></i>
                </a>
                @endif
                <a href="{{route('language.show', $course->language)}}">{{$course->language->language}}</a>
            </td>
            <td>{{$course->level}}</td>
            <td>{{$course->group}}</td>
            <td>
                <a href="{{route('period.show', $course->period)}}">{{$course->period->period}}</a>
            </td>
            <td>
                @if($show)
                <a href="{{route('hour.courses', $course->hour)}}" class="btn btn-primary btn-xs link-modal">
                    <i class="fas fa-plus"></i>
                </a>
                @endif
                <a href="{{route('hour.show', $course->hour)}}">{{$course->hour->hour}}</a>
            </td>
            <td class="text-center">
                @if($course->base == 'Y')
                <i class="fas fa-check"></i>
                @endif
            </td>
            <td>
                @if($show)
                <a href="{{route('professor.courses', $course->professor)}}" class="btn btn-primary btn-xs link-modal">
                    <i class="fas fa-plus"></i>
                </a>
                <a href="{{route('professor.history', $course->professor)}}" class="btn btn-primary btn-xs link-modal">
                    <i class="fas fa-history"></i>
                </a>
                @endif
                <a href="{{route('professor.show', $course->professor)}}">{{$course->professor->fullName}}</a>
            </td>
            <td>
                @if($show)
                <a href="{{route('classroom.courses', $course->classroom)}}" class="btn btn-primary btn-xs link-modal">
                    <i class="fas fa-plus"></i>
                </a>
                @endif
                <a href="{{route('classroom.show', $course->classroom)}}">{{$course->classroom->classroom}}</a>
            </td>
            @if($show)
            <td>
                @can('course.delete', $course)
                <a href="{{route('course.destroy', $course)}}" class="btn btn-danger btn-xs destroy">
                    <i class="fas fa-times"></i>
                </a>
                @endcan @can('course.update', $course)
                <a href="{{route('course.edit', $course)}}" class="btn btn-success btn-xs">
                    <i class="fas fa-pencil-alt"></i>
                </a>
                @endcan
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>