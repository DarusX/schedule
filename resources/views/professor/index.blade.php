@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endsection
@section('content')
<div class="col-sm-12">
    <legend>@lang('title.professors')</legend>
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
                <td><a href="{{route('professor.show', $professor)}}">{{$professor->fullName}}</a></td>
                <td>{{$professor->max_hours}}</td>
                <td>{{$professor->courses->count()}}</td>
                <td>
                    <a href="{{route('professor.destroy', $professor)}}" class="btn btn-danger btn-xs destroy">E</a>
                    <a href="{{route('professor.edit', $professor)}}" class="btn btn-success btn-xs">E</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
@section('scripts')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
    $(".table").DataTable()

</script>
@endsection