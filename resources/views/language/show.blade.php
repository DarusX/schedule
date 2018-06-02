@extends('layouts.panel') 
@section('panel')
<div class="col-sm-12">
    <legend>{{$language->language}}</legend>
</div>
@component('component.courses', ['courses' => $language->courses, 'show' => true])
@endcomponent
@endsection