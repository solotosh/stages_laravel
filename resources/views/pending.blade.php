@extends('dashboard')
@section('content')

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }

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

<main class="dashboard-main">
    <div>
        <a href="{{route('addstage')}}" class="btn btn-lg btn-primary">Add</a>

    </div>
    <h1>Project In Progress Stages</h1>


    <table>
        <thead>
            <tr>
                <th>Project Name</th>
                <th>Status</th>
                <th>Progress</th>
                <th>Budget</th>
                <th>Sub-County</th>
                <th>Ward</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $stage)
            <tr>
                <td>{{ $stage->name }}</td>
                <td>{{ $stage->status }}</td>
                <td>{{ $stage->progress }}%</td>
                <td>{{ number_format($stage->amount, 2) }}</td> <!-- Formatting budget -->
                <td>{{ $stage->subcounty->sub_county_name ?? 'N/A' }}</td>
                <td>{{ $stage->ward->ward_name ?? 'N/A' }}</td>
                <td>
                    <a href="{{route('pendedit',$stage->id)}}" class="btn btn-sm btn-warning">Update  Pending</a>

                    
                </td>


            </tr>
            @endforeach
        </tbody>
    </table>


</main>

@endsection