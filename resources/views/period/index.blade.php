@extends('layouts.panel') 
@section('panel')
<div class="col-sm-12">
    <legend>@lang('title.periods')</legend>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>@lang('head.period')</th>
                <th>@lang('head.courses')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($periods as $period)
            <tr>
                <td><a href="{{route('period.show', $period)}}">{{$period->period}}</a></td>
                <td>{{$period->courses()->count()}}</td>
                <td>
                    <a href="{{route('period.destroy', $period)}}" class="btn btn-danger btn-xs destroy"><i class="fas fa-times"></i></a>
                    <a href="{{route('period.edit', $period)}}" class="btn btn-success btn-xs"><i class="fas fa-pencil-alt"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection