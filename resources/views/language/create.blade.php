@extends('layouts.panel')
@section('panel')
<div class="col-sm-12">
    <legend>@lang('title.language')</legend>
</div>
<div class="col-sm-6">
    <form action="{{route('language.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group form-group-sm">
            <label for="">@lang('label.language')</label>
            <input type="text" name="language" class="form-control">
        </div>
        <div class="form-group form-group-sm">
            <button type="submit" class="btn btn-success btn-sm">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection