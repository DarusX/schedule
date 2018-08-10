@extends('layouts.app') @section('content')
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">@lang('menu.professors')</h2>
    </div>
</header>
<section>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="h4">@lang('menu.create')</h3>
            </div>
            <form action="{{route('course.update', $course)}}" method="post">
                {{csrf_field()}} {{method_field('PUT')}}
                <div class="card-body">
                    <div class="form-group input-group-sm">
                        <label for="" class="">@lang('label.language')</label>
                        <select name="language_id" class="form-control">
                            @foreach($languages as $language)
                            <option value="{{$language->id}}" {{($language->id == $course->language_id)?'selected':''}}>{{$language->language}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group input-group-sm">
                        <label for="" class="">@lang('label.level')</label>
                        <input type="number" name="level" class="form-control" value="{{$course->level}}">
                    </div>
                    <div class="form-group input-group-sm">
                        <label for="" class="">@lang('label.group')</label>
                        <input type="text" name="group" class="form-control" value="{{$course->group}}">
                    </div>
                    <div class="form-group input-group-sm">
                        <label for="" class="">@lang('label.hour')</label>
                        <select name="hour_id" class="form-control">
                            @foreach($hours as $hour)
                            <option value="{{$hour->id}}" {{($hour->id == $course->hour_id)?'selected':''}}>{{$hour->hour}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group input-group-sm">
                        <label for="" class="">@lang('label.base')</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="base" value="Y" {{($course->base == 'Y')?'checked':''}}> @lang('value.yes')
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="base" value="N" {{($course->base == 'N')?'checked':''}}> @lang('value.no')
                            </label>
                        </div>
                    </div>
                    <div class="form-group input-group-sm">
                        <label for="" class="">@lang('label.classroom')</label>
                        <select name="classroom_id" class="form-control">
                            <option value=""></option>
                            @foreach($classrooms as $classroom)
                            <option value="{{$classroom->id}}" {{($classroom->id == $course->classroom_id)?'selected':''}}>{{$classroom->classroom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group input-group-sm">
                        <label for="" class="">@lang('label.professor')</label>
                        <select name="professor_id" class="form-control">
                            <option value=""></option>
                            @foreach($professors as $professor)
                            <option value="{{$professor->id}}" {{($professor->id == $course->professor_id)?'selected':''}}>{{$professor->fullName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group input-group-sm">
                        @if($course->base == 'Y')
                        <button type="submit" class="btn btn-warning"><i class="fas fa-exclamation-triangle"></i> @lang('button.save')</button>
                        @else
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> @lang('button.save')</button>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection