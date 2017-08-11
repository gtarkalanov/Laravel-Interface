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
                <a class="btn btn-primary btn-large" href="{{route('steps.create')}}">Create Step</a>
            </div>
        </div>
        <div style="margin-bottom:4%">
            <label for="search" class="control-label">Search</label>
            <input type="search" id="search" value="" class="form-control col-md-4"  placeholder="Search using Fuzzy searching">
        </div>
        @if (count($steps) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Created Steps
                </div>

                <div class="panel-body">
                    <table id="table" class="table table-striped task-table">

                        <!-- Table Headings -->
                        <thead>
                        <th>Definition</th>
                        @for ($i = 1; $i <= $max; $i++)
                            <th>Argument {{ $i }}</th>
                        @endfor
                        {{--<th>Options</th>--}}
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                        @foreach ($steps as $step)
                            <tr>
                                <!-- Step Name -->
                                <td class="table-text">
                                    <p>{{ $step->definition }}</p>
                                </td>
                                @foreach(explode(",",$step->arguments) as $argument)
                                    <td class="table-text">
                                        <p>{{ $argument }}</p>
                                    </td>
                                @endforeach
                                @for ($i = count(explode(",",$step->arguments)); $i < $max; $i++)
                                    <td>
                                    </td>
                                @endfor
                                {{--<td class="table-text">--}}
                                    {{--<a class="menu-margin" href="/steps/{{ $step->id }}/edit">Edit</a>--}}
                                {{--</td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
