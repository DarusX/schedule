@extends('layouts.panel')
@section('panel')
<div class="col-sm-12">
    <legend>@lang('title.period')</legend>
</div>
<div class="col-sm-6">
    <form action="{{route('period.update', $period)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group form-group-sm">
            <label for="">@lang('label.period')</label>
            <input type="text" name="period" class="form-control" value="{{$period->period}}">
        </div>
        <div class="form-group form-group-sm">
            <button type="submit" class="btn btn-success btn-sm">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection