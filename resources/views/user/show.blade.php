<x-layout title="{{ $project->name }}">
    <div class="project-container">
        <h1 class="project-title">{{ $project->name }}</h1>
        <div class="project-details">
            <p><strong>Description:</strong> {{ $project->description }}</p>
            <p><strong>Budget:</strong> {{ number_format($project->budget, 2) }}</p>
            <p><strong>Start Date:</strong> {{ $project->start_date }}</p>
            <p><strong>End Date:</strong> {{ $project->end_date }}</p>
        </div>
        
        <ul class="employee-list">
            @foreach ($project->employees as $employee)
            <li>
                <span class="employee-name">{{ $employee->name }} {{ $employee->lastname }}</span> 
                <span class="employee-position">({{ $employee->position }})</span>
            </li>
            @endforeach
        </ul>

        <a href="{{ route('user.projects.index') }}" class="btn-back">Back to Projects</a>
    </div>
</x-layout>

<!-- CSS in the layout (or include in a dedicated CSS file) -->
<style>
    body {
        background-color: #f9fafc;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    .project-container {
        max-width: 800px;
        margin: 3rem auto;
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 2rem;
    }

    .project-title {
        text-align: center;
        font-size: 2.5rem;
        color: #343a40;
        margin-bottom: 1rem;
    }

    .project-details p {
        font-size: 1.1rem;
        margin-bottom: 1rem;
        line-height: 1.6;
        color: #555;
    }

    .project-details strong {
        color: #333;
    }

    .employee-header {
        font-size: 1.5rem;
        margin-top: 2rem;
        margin-bottom: 1rem;
        color: #007bff;
        text-align: left;
    }

    .employee-list {
        list-style: none;
        padding: 0;
    }

    .employee-list li {
        padding: 0.5rem 0;
        border-bottom: 1px solid #ddd;
        font-size: 1.1rem;
        color: #555;
        display: flex;
        justify-content: space-between;
    }

    .employee-list li:last-child {
        border-bottom: none;
    }

    .employee-name {
        font-weight: bold;
        color: #343a40;
    }

    .employee-position {
        font-style: italic;
        color: #888;
    }

    .btn-back {
        display: inline-block;
        margin-top: 2rem;
        padding: 0.7rem 1.5rem;
        background-color: #6c757d;
        color: white;
        text-decoration: none;
        font-size: 1rem;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-back:hover {
        background-color: #5a6268;
    }
</style>
