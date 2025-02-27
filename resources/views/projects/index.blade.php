<x-layout title="Project List">
    <h1>Projects Management</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Add Project</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Budget <i class="fa-solid fa-coins"></th>
                <th>Status</th>
                <th>Startdate</th>
                <th>Enddate</th>
                <th>Manager</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->budget }}</td>
                <td>{{ $project->status }}</td>
                <td>{{ $project->start_date }}</td>
                <td>{{ $project->end_date }}</td>
                <td>{{ $project->employee }}</td>
                <td>
                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">Show</a>
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>