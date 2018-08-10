@extends('layouts.app') 
@section('content')
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">@lang('title.professors')</h2>
    </div>
</header>
<section>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="h4">@lang('title.professors')</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>@lang('head.name')</th>
                            <th>@lang('head.max_hours')</th>
                            <th>@lang('head.used_hours')</th>
                            <th>@lang('head.actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($professors as $professor)
                        <tr>
                            <td>
                                <a href="{{route('professor.show', $professor)}}">{{$professor->fullName}}</a>
                            </td>
                            <td>{{$professor->max_hours}}</td>
                            <td>{{$professor->courses()->current()->count()}}</td>
                            <td>
                                <a href="{{route('professor.destroy', $professor)}}" class="btn btn-danger btn-xs destroy">
                                    <i class="fas fa-times"></i>
                                </a>
                                <a href="{{route('professor.edit', $professor)}}" class="btn btn-success btn-xs">
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