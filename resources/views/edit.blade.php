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

<h1>Update Stage</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('stages.update', $stage->id) }}" method="POST">
    @csrf
    <div>
        <label for="name">Stage Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $stage->name) }}" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ old('description', $stage->description) }}</textarea>
    </div>
    <div>
        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="pending" {{ $stage->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="in-progress" {{ $stage->status == 'in-progress' ? 'selected' : '' }}>In Progress</option>
            <option value="completed" {{ $stage->status == 'completed' ? 'selected' : '' }}>Completed</option>
        </select>
    </div>
    <div>
        <label for="progress">Progress:</label>
        <input type="number" id="progress" name="progress" value="{{ old('progress', $stage->progress) }}" required min="0" max="100">
    </div>
    <div>
        <label for="amount">Budget/Amount:</label>
        <input type="number" id="amount" name="amount" value="{{ old('amount', $stage->amount) }}" required min="0">
    </div>


    <div>
        <label for="subcounty">Sub-County:</label>
        <select id="subcounty" name="subcounty_id" required>
            @foreach($subcounties as $subcounty)
                <option value="{{ $subcounty->id }}" {{ $stage->subcounty_id == $subcounty->id ? 'selected' : '' }}>
                    {{ $subcounty->sub_county_name }}
                </option>
            @endforeach
        </select>
        
        
    </div>
    <div>
        <label for="ward">Ward:</label>
        <select id="ward" name="ward_id" required>
            @foreach($wards as $ward)
                <option value="{{ $ward->id }}" {{ $stage->ward_id == $ward->id ? 'selected' : '' }}>
                    {{ $ward->ward_name }}
                </option>
            @endforeach
        </select>
    </div>


    <button type="submit">Update Stage</button>
</form>



</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script>

$(document).ready(function() {
    // When the sub-county is selected
    $('#subcounty').change(function() {
        var subcountyId = $(this).val();  // Get the selected sub-county ID

        if(subcountyId) {
            // Make an AJAX call to get the wards based on the sub-county ID
            $.ajax({
                url: '/get-wards/' + subcountyId,  // Assuming your route is like '/get-wards/{subcountyId}'
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    var wards = response.wards;
                    var wardDropdown = $('#ward');
                    wardDropdown.empty();  // Clear the current options

                    // Add a default 'Select Ward' option
                    wardDropdown.append('<option value="">Select Ward</option>');

                    // Add new ward options
                    $.each(wards, function(index, ward) {
                        wardDropdown.append('<option value="' + ward.id + '">' + ward.ward_name + '</option>');
                    });
                },
                error: function() {
                    alert('Failed to fetch wards');
                }
            });
        } else {
            // If no sub-county is selected, clear the ward dropdown
            $('#ward').empty();
            $('#ward').append('<option value="">Select Ward</option>');
        }
    });
});



</script>

@endsection
