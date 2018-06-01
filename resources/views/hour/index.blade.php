@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <legend>@lang('title.hours')</legend>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>@lang('head.hour')</th>
                <th>@lang('head.courses')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hours as $hour)
            <tr>
                <td><a href="{{route('hour.show', $hour)}}">{{$hour->hour}}</a></td>
                <td>{{$hour->courses->count()}}</td>
                <td>
                    <a href="{{route('hour.destroy', $hour)}}" class="btn btn-danger btn-xs destroy">E</a>
                    <a href="{{route('hour.edit', $hour)}}" class="btn btn-success btn-xs">E</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection