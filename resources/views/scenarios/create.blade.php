@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Scenario</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('scenarios.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('definition') ? ' has-error' : '' }}">
                            <label for="definition" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                            <label for="arguments" class="col-md-4 control-label">Tags</label>

                            <div class="col-md-5">

                                <div id="field">
                                    <input autocomplete="off" class="form-control inline" id="field1" name="tags[]" type="text" data-items="8" required>
                                    <button id="b1" class="btn add-more inline" type="button">+</button>
                                    <p><small>Tags should start with '@'</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                            <label for="arguments" class="col-md-4 control-label">Steps</label>

                            <div class="col-md-5">

                                <div id="field">
                                    <input autocomplete="on" class="form-control inline" id="step1" name="steps[]" type="text" data-items="8" required>
                                    <button id="s1" class="btn add-more-steps inline" type="button">+</button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                    <script type="text/javascript" src="{{ asset('js/dynamicFields.js') }}" ></script>
                    <script type="text/javascript" src="{{ asset('js/dynamic2.js') }}" ></script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
