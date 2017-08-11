@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a class="btn btn-primary btn-large" href="#">Features</a>
            <a class="btn btn-primary btn-large" href="{{route('scenarios.index')}}">Scenarios</a>
            <a class="btn btn-primary btn-large" href="{{route('steps.index')}}">Steps</a>
            <a class="btn btn-primary btn-large" href="{{route('yamls.index')}}">Yamls</a>

        </div>
    </div>
</div>
@endsection
