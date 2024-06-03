@extends('layouts.admin')
@section('content')
    <h2>Create a new project</h2>
{{-- errors --}}


    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="client_name" class="form-label">Client name</label>
            <input type="text" class="form-control" id="client_name" name="client_name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <input type="text" class="form-control" id="summary" name="summary" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
