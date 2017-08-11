@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
                <a class="btn btn-primary btn-large" href="#">Features</a>
                <a class="btn btn-primary btn-large" href="yamls">Yamls</a>
                <a class="btn btn-primary btn-large" href="steps">Steps</a>
        </div>
        <div class="col-md-8">
            </br>
            <a class="btn btn-primary btn-large" href="yamls/create">Create Yaml</a>
        </div>
    </div>
    @if (count($yamls) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Created Yamls
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                    <th>Yaml</th>
                    <th>Base url</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($yamls as $yaml)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <p>{{ $yaml->profile }}</p>
                            </td>
                            <td class="table-text">
                                <p>{{ $yaml->base_url }}</p>
                            </td>
                            <td class="table-text">
                                <a class="menu-margin" href="/yamls/{{ $yaml->id }}">View</a>

                                <a class="menu-margin" href="/yamls/{{ $yaml->id }}/edit">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
@endsection
