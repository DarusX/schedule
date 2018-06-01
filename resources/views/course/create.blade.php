@extends('layouts.app')
@section('content')
<div class="col-sm-6">
    <legend>@lang('title.course')</legend>
    <form action="{{route('course.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group input-group-sm">
            <label for="" class="">@lang('label.period')</label>
            <select name="period_id" class="form-control">
                @foreach($periods as $period)
                <option value="{{$period->id}}">{{$period->period}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group input-group-sm">
            <label for="" class="">@lang('label.language')</label>
            <select name="language_id" class="form-control">
                @foreach($languages as $language)
                <option value="{{$language->id}}">{{$language->language}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group input-group-sm">
            <label for="" class="">@lang('label.level')</label>
            <input type="number" name="level" class="form-control">
        </div>
        <div class="form-group input-group-sm">
            <label for="" class="">@lang('label.hour')</label>
            <select name="hour_id" class="form-control">
                @foreach($hours as $hour)
                <option value="{{$hour->id}}">{{$hour->hour}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group input-group-sm">
            <label for="" class="">@lang('label.classroom')</label>
            <select name="classroom_id" class="form-control">
                <option value=""></option>
                @foreach($classrooms as $classroom)
                <option value="{{$classroom->id}}">{{$classroom->classroom}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group input-group-sm">
            <label for="" class="">@lang('label.professor')</label>
            <select name="professor_id" class="form-control">
                @foreach($professors as $professor)
                <option value="{{$professor->id}}">{{$professor->fullName}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group input-group-sm">
            <button type="submit" class="btn btn-success btn-sm">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection