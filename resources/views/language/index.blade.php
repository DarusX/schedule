@extends('layouts.app')
@section('content')
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">@lang('title.languages')</h2>
    </div>
</header>
<section>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="h4">@lang('title.languages')</h3>
            </div>
            <div class="card-body">
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
                            <td>
                                <a href="{{route('language.show', $language)}}">{{$language->language}}</a>
                            </td>
                            <td>{{$language->courses()->current()->count()}}</td>
                            <td>
                                <a href="{{route('language.destroy', $language)}}" class="btn btn-danger btn-xs destroy">
                                    <i class="fas fa-times"></i>
                                </a>
                                <a href="{{route('language.edit', $language)}}" class="btn btn-success btn-xs">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection