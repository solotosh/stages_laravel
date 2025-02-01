<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Narok County</title>
    <link rel="stylesheet" href="{{ asset('frontend/styles.css') }}">

    <style>
        /* Progress Bar Styles */
        .progress-bar {
            width: 100%;
            height: 16px; /* Increased height */
            background-color: #e2e8f0;
            border-radius: 8px; /* Adjusted border radius */
            overflow: hidden;
            position: relative;
        }

        .progress {
            height: 100%;
            background-color: #22c55e;
            border-radius: 8px; /* Adjusted border radius */
            transition: width 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 12px; /* Increased font size */
            font-weight: bold;
        }

    
        .navbar {
        background-color: #a6b0c9;
        padding: 1rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        color: white;
    }
    .navbar .container {
        display: flex;
        justify-content: space-between; /* Positions left and right content */
        align-items: center;
    }
    .navbar .left-content {
        display: flex;
        align-items: center;
    }
    .navbar .logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: #e2e8f0;
        text-decoration: none;
        margin-right: 1rem;
    }
    .navbar .nav-links {
        list-style: none;
        display: flex;
        gap: 1.5rem;
        margin: 0;
        padding: 0;
    }
    .navbar .nav-links li {
        display: inline;
    }
    .navbar .nav-links a {
        color: #cbd5e1;
        text-decoration: none;
        font-size: 1rem;
        transition: color 0.3s;
    }
    .navbar .nav-links a:hover {
        color: #22c55e;
    }


    </style>
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <div class="left-content">
                <a href="/" class="logo">Government of Narok </a>
            </div>
            <ul class="nav-links">
                <li><a href="#timeline">Timeline</a></li>
                <li><a href="#feedback">Feedback</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <header>
            <h1>Project Development Timeline</h1>
            <p>Track our progress through each development stage</p>
        </header>
        @php
        $stages = App\Models\Stage::latest()->get();
    @endphp
    


        <div class="timeline">
            @foreach($stages as $stage)
                <div class="timeline-item">
                    <div class="icon yellow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                            <path d="M9 18h6" />
                            <path d="M10 22h4" />
                        </svg>
                    </div>
                    <div class="content">
                        <h3>{{ $stage->name }}</h3>
                        <p>{{ $stage->description }}</p>
                        <div class="status {{ $stage->status }}">{{ ucfirst($stage->status) }}</div>
                        <div class="progress-bar">
                            <div class="progress" style="width: {{ $stage->progress }} %">{{ $stage->progress }}%</div>
                        </div>
                        <div>
                            <strong>Sub County:</strong> 
                            <span class="badge badge-pill badge-primary">{{ $stage->subcounty->sub_county_name ?? 'N/A' }}</span>
                        </div>
                        <div>
                            <strong>Ward:</strong> 
                            <span class="badge badge-pill badge-secondary">{{ $stage->ward->ward_name ?? 'N/A' }}</span>
                        </div>



                        <!-- Buttons for Feedback and Remarks -->
                        <div class="action-buttons">
                            <button class="add-feedback-btn" onclick="openModal('feedback', '{{ $stage->id }}')">Add Feedback</button>
                            <button class="add-remark-btn" onclick="openModal('remark', '{{ $stage->id }}')">Add Remark</button>
                        </div>

                        <!-- Feedback List -->
                        <div class="feedback-list" id="feedback-{{ $stage->id }}">
                            <!-- Feedback items will be dynamically added here -->
                        </div>

                        <!-- Remarks List -->
                        <div class="remarks-list" id="remarks-{{ $stage->id }}">
                            <!-- Remarks items will be dynamically added here -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Modal for Feedback and Remarks -->
      <!-- Modal for Feedback and Remarks -->
<div id="feedbackModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2 id="modalTitle">Add Feedback</h2>
        <form id="modalForm" action="{{ route('feedback.store') }}" method="POST">
            @csrf
            <input type="hidden" id="modalStageId" name="stage_id">
            <textarea id="modalText" name="comment" placeholder="Enter your contents here" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

    <script>
        // Function to open the modal
        function openModal(type, stageId) {
            const modal = document.getElementById('feedbackModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalForm = document.getElementById('modalForm');

            // Set the modal title and form action based on the type (feedback or remark)
            if (type === 'feedback') {
                modalTitle.textContent = 'Add Feedback';
            } else if (type === 'remark') {
                modalTitle.textContent = 'Add Remark';
            }

            // Store the type and stage ID in the modal
            modal.setAttribute('data-type', type);
            modal.setAttribute('data-stage', stageId);

            // Display the modal
            modal.style.display = 'block';
        }

        // Function to close the modal
        function closeModal() {
            const modal = document.getElementById('feedbackModal');
            modal.style.display = 'none';
        }

        // Function to handle form submission
        function submitForm(event) {
            event.preventDefault();
            const modal = document.getElementById('feedbackModal');
            const type = modal.getAttribute('data-type');
            const stageId = modal.getAttribute('data-stage');
            const text = document.getElementById('modalText').value;

            // Create a new item (feedback or remark)
            const item = document.createElement('div');
            item.className = `${type}-item`;
            item.innerHTML = `
                <p>${text}</p>
                <small>Submitted on ${new Date().toLocaleString()}</small>
            `;

            // Append the item to the appropriate list
            document.getElementById(`${type}-${stageId}`).appendChild(item);

            // Clear the form and close the modal
            document.getElementById('modalForm').reset();
            closeModal();
        }

        // Close the modal if the user clicks outside of it
        window.onclick = function (event) {
            const modal = document.getElementById('feedbackModal');
            if (event.target === modal) {
                closeModal();
            }
        };


// Function to open the modal
function openModal(type, stageId) {
    const modal = document.getElementById('feedbackModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalForm = document.getElementById('modalForm');
    const modalStageId = document.getElementById('modalStageId');

    // Set the modal title and form action based on the type (feedback or remark)
    if (type === 'feedback') {
        modalTitle.textContent = 'Add Feedback';
        modalForm.action = "{{ route('feedback.store') }}";
    } else if (type === 'remark') {
        modalTitle.textContent = 'Add Remark';
        modalForm.action = "{{ route('remarks.store') }}";
    }

    // Set the stage ID in the hidden input
    modalStageId.value = stageId;

    // Display the modal
    modal.style.display = 'block';
}



    </script>
</body>
</html>