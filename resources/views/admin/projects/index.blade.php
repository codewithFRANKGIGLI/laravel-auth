@extends('layouts.admin')
@section('content')

    <h2>Projects</h2>
    {{-- Tabella progetti --}}
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Client name</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->name}}</td>
                <td>{{$project->client->name}}</td>
                <td>{{$project->created_at}}</td>
            
    
@endsection