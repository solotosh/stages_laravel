@extends('dashboard')
@section('content')

<style>
    /* Basic styling for the button and form */
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-top: 10px;
    }

    input[type="text"],
    textarea,
    select,
    input[type="number"] {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        text-decoration: none;
        cursor: pointer;
    }

    .btn-sm {
        padding: 4px 8px;
        font-size: 12px;
    }

    .btn:hover {
        background-color: #0056b3;
    }
</style>

<h1>Create Stage</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<main class="dashboard-main">

<form action="{{ route('stages.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Stage Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ old('description') }}</textarea>
    </div>
    <div>
        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="pending">Pending</option>
            <option value="in-progress">In Progress</option>
            <option value="completed">Completed</option>
        </select>
    </div>
    <div>
        <label for="progress">Progress:</label>
        <input type="number" id="progress" name="progress" value="{{ old('progress') }}" required min="0" max="100">
    </div>
    <button type="submit" class="btn btn-sm btn-success">Submit</button>
</form>


</main>
@endsection