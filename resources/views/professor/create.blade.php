@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <legend>@lang('title.professor')</legend>
</div>
<div class="col-sm-6">
    <form action="{{route('professor.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group form-group-sm">
            <label for="">@lang('label.name')</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group form-group-sm">
            <label for="">@lang('label.lastname')</label>
            <input type="text" name="lastname" class="form-control">
        </div>
        <div class="form-group form-group-sm">
            <label for="">@lang('label.max_hours')</label>
            <input type="number" name="max_hours" class="form-control">
        </div>
        <div class="form-group form-group-sm">
            <button type="submit" class="btn btn-success btn-sm">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection