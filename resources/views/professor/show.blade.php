@extends('layouts.panel') 
@section('panel')
<div class="col-sm-12">
    <legend>{{$professor->fullName}}</legend>
    <p>{{$professor->courses->count()}}/{{$professor->max_hours}}</p>
</div>
@component('component.courses', ['courses' => $professor->courses, 'show' => true])
@endcomponent
@endsection