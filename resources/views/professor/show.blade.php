@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <legend>{{$professor->fullName}}</legend>
    <p>{{$professor->courses->count()}}/{{$professor->max_hours}}</p>
</div>
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
            @foreach($professor->courses as $course)
            <tr>
                <td><a href="{{route('language.show', $course->language)}}">{{$course->language->language}}</a></td>
                <td>{{$course->level}}</td>
                <td>{{$course->hour->hour}}</td>
                <td>{{$course->professor->fullName}}</td>
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
<div class="col-sm-12">
        <form class="form-inline">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail3">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword3">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Remember me
                  </label>
                </div>
                <button type="submit" class="btn btn-default">Sign in</button>
              </form>
</div>
@endsection