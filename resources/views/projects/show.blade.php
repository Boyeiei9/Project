<x-layout title="Project Details">
    <h1>Project Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $project->name }}</h5>
            <p class="card-text"><strong>Description:</strong> {{ $project->description }}</p>
            <p class="card-text"><strong>Budget:</strong> {{ $project->budget }}</p>
            <p class="card-text"><strong>Start Date:</strong> {{ $project->start_date }}</p>
            <p class="card-text"><strong>End Date:</strong> {{ $project->end_date }}</p>
            <p class="card-text"><strong>Manager:</strong> {{ $project->employee }}</p>
            <p class="card-text"><strong>Status:</strong> {{ $project->status }}</p>
            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</x-layout>
