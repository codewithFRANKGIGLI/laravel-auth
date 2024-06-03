@extends('layouts.admin')
@section('content')

<h2>Modifica il progetto: {{$project->name}}</h2>

{{-- fomr per modificare --}}
<form action="{{route('admin.projects.update', ['project'=>$project->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$project->name}}">
    </div>
    <div class="mb-3">
        <label for="client_name" class="form-label">Client name</label>
        <input type="text" class="form-control" id="client_name" name="client_name" aria-describedby="emailHelp" value="{{$project->client_name}}">
    </div>
    <div class="mb-3">
        <label for="summary" class="form-label">Summary</label>
        <input type="text" class="form-control" id="summary" name="summary" aria-describedby="emailHelp" value="{{$project->summary}}">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>

</form>
    
@endsection