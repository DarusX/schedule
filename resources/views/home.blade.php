@extends('layouts.panel')
@section('panel')
<div class="col-sm-12">
    <div class="row text-center">
        <div class="col-sm-3">
            <div class="tile">
                <h3 class="tile-text"><i class="fas fa-calendar"></i> {{$period->period}} Period</h3>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="tile">
                <h3 class="tile-text"><i class="fas fa-file"></i> {{$coursesCount}} Courses</h3>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="tile">
                <h3 class="tile-text"><i class="fas fa-globe"></i> {{$languageCount}} Languages</h3>
            </div>
        </div>
    </div>
</div>
@endsection
