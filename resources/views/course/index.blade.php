@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endsection
@section('content')
<div class="col-sm-12">
    <legend>@lang('title.courses')</legend>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>@lang('head.language')</th>
                <th>@lang('head.level')</th>
                <th>@lang('head.hour')</th>
                <th>@lang('head.professor')</th>
                <th>@lang('head.classroom')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td><a href="{{route('language.show', $course->language)}}">{{$course->language->language}}</a></td>
                <td>{{$course->level}}</td>
                <td><a href="{{route('hour.show', $course->hour)}}">{{$course->hour->hour}}</a></td>
                <td><a href="{{route('professor.show', $course->professor)}}">{{$course->professor->fullName}}</a></td>
                <td>{{$course->classroom->classroom}}</td>
                <td>
                    <a href="{{route('course.destroy', $course)}}" class="btn btn-danger btn-xs destroy">E</a>
                    <a href="{{route('course.edit', $course)}}" class="btn btn-success btn-xs">E</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
@section('scripts')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
    $(".table").DataTable()

</script>
@endsection