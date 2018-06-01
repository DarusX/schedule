@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <legend>{{$hour->hour}}</legend>
</div>
@component('component.courses', ['courses' => $hour->courses, 'show' => true])
@endcomponent
@endsection