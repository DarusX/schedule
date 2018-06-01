@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <legend>{{$classroom->classroom}}</legend>
</div>
@component('component.courses', ['courses' => $classroom->courses, 'show' => true])
@endcomponent
@endsection