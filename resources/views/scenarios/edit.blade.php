@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Step</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('steps.update',$step->id) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group{{ $errors->has('definition') ? ' has-error' : '' }}">
                            <label for="definition" class="col-md-4 control-label">Definition</label>

                            <div class="col-md-6">
                                <input id="definition" type="text" class="form-control" name="definition" value="{{ $step->definition }}" required autofocus>
                                <p><small>You should write steps arguments as follows - :arg1, :arg2, arg3</small></p>
                                @if ($errors->has('profile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('arguments') ? ' has-error' : '' }}">
                            <label for="arguments" class="col-md-4 control-label">Arguments</label>

                            <div class="col-md-5">

                                <div id="field">
                                    @foreach(explode(",",$step->arguments) as $argument)
                                        <input autocomplete="off" value="{{$argument}}" class="form-control inline" id="field1" name="arguments[]" type="text" data-items="8" required>
                                    @endforeach

                                    <button id="b1" class="btn add-more inline" type="button">+</button>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
