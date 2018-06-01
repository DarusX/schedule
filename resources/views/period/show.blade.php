@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <legend>{{$period->period}}</legend>
</div>
@component('component.courses', ['courses' => $period->courses, 'show' => true])
@endcomponent
@endsection