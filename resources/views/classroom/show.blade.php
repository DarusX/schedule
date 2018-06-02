@extends('layouts.panel')
@section('panel')
<div class="col-sm-12">
    <legend>{{$classroom->classroom}}</legend>
</div>
@component('component.courses', ['courses' => $classroom->courses, 'show' => true])
@endcomponent
@endsection