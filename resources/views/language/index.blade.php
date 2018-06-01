@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <legend>@lang('title.languages')</legend>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>@lang('head.language')</th>
                <th>@lang('head.courses')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($languages as $language)
            <tr>
                <td><a href="{{route('language.show', $language)}}">{{$language->language}}</a></td>
                <td>{{$language->courses()->current()->count()}}</td>
                <td>
                    <a href="{{route('language.destroy', $language)}}" class="btn btn-danger btn-xs destroy"><i class="fas fa-times"></i></a>
                    <a href="{{route('language.edit', $language)}}" class="btn btn-success btn-xs"><i class="fas fa-pencil-alt"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection