@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <legend>@lang('title.professor')</legend>
</div>
<div class="col-sm-6">
    <form action="{{route('professor.update', $professor)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group form-group-sm">
            <label for="">@lang('label.name')</label>
            <input type="text" name="name" class="form-control" value="{{$professor->name}}">
        </div>
        <div class="form-group form-group-sm">
            <label for="">@lang('label.lastname')</label>
            <input type="text" name="lastname" class="form-control" value="{{$professor->lastname}}">
        </div>
        <div class="form-group form-group-sm">
            <label for="">@lang('label.max_hours')</label>
            <input type="number" name="max_hours" class="form-control" value="{{$professor->max_hours}}">
        </div>
        <div class="form-group form-group-sm">
            <button type="submit" class="btn btn-success btn-sm">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection