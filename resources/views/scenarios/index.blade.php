@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <a class="btn btn-primary btn-large" href="#">Features</a>
                <a class="btn btn-primary btn-large" href="{{route('yamls.index')}}">Yamls</a>
                <a class="btn btn-primary btn-large" href="{{route('steps.index')}}">Steps</a>
            </div>
            <div class="col-md-8">
                </br>
                <a class="btn btn-primary btn-large" href="{{route('scenarios.create')}}">Create Scenario</a>
            </div>
        </div>
        @if (count($scenarios) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Created Steps
                </div>

                <div class="panel-body">
                    <table id="table" class="table table-striped task-table">

                        <!-- Table Headings -->
                        <thead>
                        <th>Definition</th>

                        {{--<th>Options</th>--}}
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                        @foreach ($scenarios as $scenario)
                            <tr>
                                <!-- Step Name -->
                                <td class="table-text">
                                    <p>{{ $scenario->description }}</p>
                                </td>
                                <td class="table-text"><p>
                                @foreach(explode(",",$scenario->tags) as $tags)
                                        {{ $tags }}
                                @endforeach
                                    </p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
