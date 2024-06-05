@extends ('layouts.admin')

@section ('content')
<div class="table-container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Slug</th>
          <th scope="col">Client Name</th>
          <th scope="col">Summary</th>
          <th scope="col" class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->name}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->client_name}}</td>
                <td>{{$project->summary}}</td>
                <td class="w-25 text-center">
                    <button type="button" class="btn btn-outline-primary" onclick="window.location.href='{{ route('admin.projects.show', ['project' => $project->id]) }}'"><i class="fa-solid fa-eye"></i></button>
                    <button type="button" class="btn btn-outline-dark" onclick="window.location.href='{{ route('admin.projects.edit', ['project' => $project->id]) }}'"><i class="fa-solid fa-pen"></i></button>
                    <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" style="display: inline-block">
                      @csrf
                      @method('DELETE')

                      <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection