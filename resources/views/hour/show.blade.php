@extends('layouts.panel') 
@section('panel')
<div class="col-sm-12">
    <legend>{{$hour->hour}}</legend>
</div>
@component('component.courses', ['courses' => $hour->courses, 'show' => true])
@endcomponent
@endsection