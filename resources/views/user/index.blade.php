<x-layout title="Projects">
    <h1 class="page-title">Projects</h1>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Project Name</th>
                    <th>Budget</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ number_format($project->budget, 2) }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td>{{ $project->end_date }}</td>
                    <td>
                        <a href="{{ route('user.projects.show', $project->id) }}" class="btn-view">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>

<!-- CSS in the layout (or include in a dedicated CSS file) -->
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    .page-title {
        text-align: center;
        margin-top: 2rem;
        font-size: 2.5rem;
        color: #343a40;
        text-transform: uppercase;
    }

    .table-container {
        margin: 2rem auto;
        width: 95%;
        max-width: 1200px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 2rem;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    /* th {
        background-color: #007bff;
        color: white;
        font-weight: bold;
    } */

    td {
        background-color: #f9f9f9;
    }

    tr:hover td {
        background-color: #f1f1f1;
    }

    .btn-view {
        display: inline-block;
        padding: 0.5rem 1rem;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-view:hover {
        background-color: #218838;
    }

    .btn-view:active {
        background-color: #1e7e34;
    }
</style>
