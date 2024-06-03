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
            <tr class="">
                <td>{{$project->id}}</td>
                <td>{{$project->name}}</td>
                <td>{{$project->client_name}}</td>
                <td>{{$project->created_at}}</td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}" class="btn btn-success btn-sm">View</a>
                        <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}" class="btn btn-success btn-sm">Edit</a>
                        <form action="{{ route('admin.projects.destroy', ['project' => $project->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection