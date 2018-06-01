@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <legend>{{$language->language}}</legend>
</div>
@component('component.courses', ['courses' => $language->courses, 'show' => true])
@endcomponent
@endsection