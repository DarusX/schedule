@extends('layouts.app') @section('content')
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">@lang('menu.professors')</h2>
    </div>
</header>
<section>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h3 class="h4">@lang('menu.create')</h3>
            </div>
            <form action="{{route('professor.store')}}" method="post">
                {{csrf_field()}}
                <div class="card-body">

                    <div class="form-group form-group-sm">
                        <label for="">@lang('label.name')</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group form-group-sm">
                        <label for="">@lang('label.lastname')</label>
                        <input type="text" name="lastname" class="form-control">
                    </div>
                    <div class="form-group form-group-sm">
                        <label for="">@lang('label.max_hours')</label>
                        <input type="number" name="max_hours" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group form-group-sm">
                        <button type="submit" class="btn btn-primary">@lang('button.save')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection