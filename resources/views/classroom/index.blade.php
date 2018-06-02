@extends('layouts.panel') 
@section('panel')
<div class="col-sm-12">
    <legend>@lang('title.classrooms')</legend>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>@lang('head.classroom')</th>
                <th>@lang('head.courses')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classrooms as $classroom)
            <tr>
                <td><a href="{{route('classroom.show', $classroom)}}">{{$classroom->classroom}}</a></td>
                <td>{{$classroom->courses()->current()->count()}}</td>
                <td>
                    <a href="{{route('classroom.destroy', $classroom)}}" class="btn btn-danger btn-xs destroy"><i class="fas fa-times"></i></a>
                    <a href="{{route('classroom.edit', $classroom)}}" class="btn btn-success btn-xs"><i class="fas fa-pencil-alt"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection