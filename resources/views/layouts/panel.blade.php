@extends('layouts.app')
@section('content')
<div class="col-sm-3">
    @include('layouts.sidebar')
</div>
<div class="col-sm-9">
    <div class="row">
        @yield('panel')
    </div>
</div>
@endsection