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
       

    </div>
    <h1>Project In Pending Stages</h1>

      



    <table>
      
        <tbody>
           
            <form action="{{ route('pendingupdate', $stagedit->id) }}" method="POST">
                @csrf
            <div>
                Project Name : {{ $stagedit->name }}
    
    
            </div>
    
            <div>
                Project Status : {{ $stagedit->status }}
    
    
            </div>
    
            <div>
                Project Progress : {{ $stagedit->progress }}%
    
    
            </div>
    
            <div>
                Project Budget : {{ $stagedit->amount }}
    
    
            </div>

            <div>
                <label for="status">Status:</label>
                <select id="status" name="status" required>
                   
                    <option value="in-progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>




            <div>
                <input type="number" id="progress" name="progress"  required min="0" max="100" placeholder="Enter The Current Progress">
            </div>
    
    
            </div>



            <button type="submit">Update Pending Status</button>

        </tbody>
    </table>

</form>


</main>

@endsection