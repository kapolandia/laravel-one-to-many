@extends('layouts.admin')

@section('content')
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

<div class="card">
    <h5 class="card-header">Project name: {{$project->name}}</h5>
    <div class="card-body">
      @if ($project->cover_image)
          <div>
              <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->title }}">
          </div>
      @endif
      <h6 class="card-subtitle mb-2 text-body-secondary">Project slug: {{$project->slug}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">Client name: {{$project->client_name}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">Project type: {{$project->type ? $project->type->name : 'No type selected'}}</h6>
      <p class="card-text">{{$project->summary}}</p>
    </div>
</div>
@endsection