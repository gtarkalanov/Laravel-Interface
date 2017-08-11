@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="bottom-p">
                <a class=" btn btn-primary btn-large" href="/yamls">Back</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Yaml</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="profile" class="col-md-5 control-label">Profile</label>

                        <div class="col-md-6">
                            <p id="profile">{{ $yaml->profile }} </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="profile" class="col-md-5 control-label">Base Url</label>

                        <div class="col-md-6">
                            <p>{{ $yaml->base_url }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="profile" class="col-md-5 control-label">Username</label>

                        <div class="col-md-6">
                            <p>{{ $yaml->username }} </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="profile" class="col-md-5 control-label">Password</label>

                        <div class="col-md-6">
                            <p>{{ $yaml->password }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
