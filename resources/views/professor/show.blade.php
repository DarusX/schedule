@extends('layouts.app') 
@section('content')
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">@lang('title.professors')</h2>
    </div>
</header>
<section>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="h4">{{$professor->full_name}}</h3>
            </div>
            <div class="card-body">
                @component('component.courses', ['courses' => $professor->courses, 'show' => true])
                @endcomponent
            </div>
        </div>
    </div>
</section>
@endsection