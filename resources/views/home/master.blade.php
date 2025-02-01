<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> County Government Of Narok Projects Monitoring and Tracking System | Transparent Governance</title>
    <meta name="title" content="Government of Narok County Projects Monitoring and Tracking System ">
    <meta name="description" content="A unified platform aimed at boosting efficiency, fostering transparency, and ensuring accountability in monitoring and tracking projects throughout the County.">
    <meta name="keywords" content="A unified platform aimed at boosting efficiency, fostering transparency, and ensuring accountability in monitoring and tracking projects throughout the County.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="Government Of Narok County Applications Development Section Team">
    <!-- Favicon -->
  
    <!-- Vendor CSS Files -->
    <link href="{{asset('landing/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="p{{asset('landing/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Sweet Alerts -->
    <script src="{{asset('js/sweetalert2/sweetalert2.min.css')}}"></script>
    <!-- Odometer -->
    <link rel="stylesheet" href="{{asset('css/odometer.min.css')}}">
    <!-- Data Tables -->
    <link href="{{ asset('1.13.4/css/jquery.dataTables.css') }}" rel="stylesheet">
    <!-- DataTables Bootstrap 4 Integration CSS -->
    <link href="{{ asset('v/bs4/dt-1.13.4/r-2.4.1/datatables.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{asset('landing/css/style.css')}}" rel="stylesheet">
    <!-- Google tag (gtag.js) -->

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-X223GYV8LZ');
    </script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        /* Header background */
        #header {
            background: red; /* Set header background to red */
        }

        /* Navigation links */
        #navbar ul li a {
            color: rgb(221, 179, 54); /* Set text color of links to yellow */
            transition: color 0.3s;
        }

        /* Navigation links on hover */
        #navbar ul li a:hover {
            color: white; /* Optional hover color for contrast */
        }

        /* Active link state */
        #navbar ul li a.active {
            color: white;
        }

        /* Mobile nav toggle */
        .mobile-nav-toggle {
            color: rgb(231, 185, 69); /* Adjust color for mobile menu toggle */
        }

        /* Navigation dropdown arrow */
        .bi-chevron-down {
            color: rgb(221, 170, 62);
        }

        /* Custom styles for the header section */
        .header-section {
            padding: 40px 0; /* Add padding for spacing */
            background-color: #f8f9fa; /* Light background color */
            border-bottom: 2px solid #e9ecef; /* Add a border at the bottom */
            margin-bottom: 40px; /* Add spacing below the header */
        }

        h1 {
            font-size: 2.5rem; /* Larger font size */
            color: #333; /* Darker color for better visibility */
            text-align: center; /* Center the heading */
            margin-bottom: 20px; /* Add spacing below the heading */
            font-weight: bold; /* Make it bold */
            text-transform: uppercase; /* Optional: Uppercase text */
            letter-spacing: 1px; /* Optional: Add spacing between letters */
        }

        p {
            font-size: 1.2rem; /* Slightly larger font size for the description */
            color: #666; /* Subdued color for the description */
            text-align: center; /* Center the description */
            margin-bottom: 40px; /* Add spacing below the description */
        }

        /* Other existing styles */
        .progress-bar {
            width: 100%;
            height: 16px;
            background-color: #e2e8f0;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
        }

        .progress {
            height: 100%;
            background-color: #22c55e;
            border-radius: 8px;
            transition: width 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 12px;
            font-weight: bold;
        }

        .content {
            width: 100%; /* Full width */
            padding: 1rem; /* Add spacing */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: Add some elevation */
            border: 1px solid #ddd; /* Optional: Add border for better visualization */
            background-color: #fff; /* Optional: Set background color */
            border-radius: 0.5rem; /* Optional: Add rounded corners */
        }

        .action-buttons button {
            margin: 0.5rem;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.3rem;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .action-buttons button:hover {
            background-color: #0056b3;
        }
        
        .container {
            padding-top: 80px; /* Adjust this value based on the height of your navigation bar */
        }

        .header-section {
    margin-top: 80px; /* Adjust this value based on the height of your navigation bar */
    padding: 40px 0;
    background-color: #f8f9fa;
    border-bottom: 2px solid #e9ecef;
    margin-bottom: 40px;
}
/* Modal Styles */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    background-color: rgba(0, 0, 0, 0.5); /* Black background with opacity */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    z-index: 1000; /* Ensure it's on top */
}

.modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    width: 50%; /* Default width for larger screens */
    max-width: 600px; /* Maximum width */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    position: relative;
}

/* Close button */
.close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    cursor: pointer;
    color: #333;
}

/* Responsive modal width */
@media (max-width: 992px) {
    .modal-content {
        width: 70%; /* Wider on medium screens */
    }
}

@media (max-width: 768px) {
    .modal-content {
        width: 90%; /* Full width on small screens */
    }
}

    </style>
</head>
<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto">
                <a href="index.htm" class="logo me-auto me-lg-0" class="img-fluid">
                    <img src="public/img/logos/merged_logo.png" alt="" class="img-fluid">
                </a>
            </h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="{{route('mainhome')}}">Home</a></li>
                    <li><a href="{{ route('adminfeedback') }}">Feedback</a></li>

                    <li class="dropdown">
                        <a href="{{ route('home') }}"><span>Financial Years</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('home') }}">All</a></li>
                            @foreach($financialYears as $financialYear)
                                <li>
                                    <a href="{{ route('home', ['financial_year_id' => $financialYear->id]) }}">
                                        {{ $financialYear->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>   

    @php
        $stages = App\Models\Stage::latest()->get();
    @endphp

    <div class="container">
        <!-- Heading and Description -->
        <div class="header-section">
            <h1>Project Development Details Of Narok County</h1>
            <p>Track our progress through each development stage</p>
        </div>

        <div class="timeline row">
            @foreach($stages as $stage)
                <div class="timeline-item col-lg-12">
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
                            <div class="progress" style="width: {{ $stage->progress }}%">{{ $stage->progress }}%</div>
                        </div>
                        <div class="details">
                            <div class="detail-item">
                                <strong>Sub County:</strong>
                                <span class="detail-value">{{ $stage->subcounty->sub_county_name ?? 'N/A' }}</span>
                            </div>
                            <div class="detail-item">
                                <strong>Ward:</strong>
                                <span class="detail-value">{{ $stage->ward->ward_name ?? 'N/A' }}</span>
                            </div>
                            <div class="detail-item">
                                <strong>Budget:</strong>
                                <span class="detail-value">KES {{ number_format($stage->amount, 2) }}</span>
                            </div>
                            <div class="detail-item">
                                <strong>Financial Year:</strong>
                                <span class="detail-value">{{ $stage->financialYear->name ?? 'N/A' }}</span>
                            </div>
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
   <div id="feedbackModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2 id="modalTitle">Add Feedback</h2>
        <form id="modalForm" method="POST" action="{{ route('feedbackstore') }}">
            @csrf
            <input type="hidden" id="modalStageId" name="stage_id">
            <!-- Name Input -->
            <div class="form-group">
                <label for="modalName">Name</label>
                <input type="text" id="modalName" name="name" class="form-control" placeholder="Enter your name" required>
            </div>
            <!-- Phone Input -->
            <div class="form-group">
                <label for="modalPhone">Phone</label>
                <input type="tel" id="modalPhone" name="phone" class="form-control" placeholder="Enter your phone number" required>
            </div>
            <!-- Feedback/Remark Textarea -->
            <div class="form-group">
                <label for="modalText">Comment</label>
                <textarea id="modalText" name="comment" class="form-control" rows="4" placeholder="Enter your feedback" required></textarea>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
    <script>
        // Function to open the modal
        function openModal(type, stageId) {
            const modal = document.getElementById('feedbackModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalForm = document.getElementById('modalForm');
            const modalStageId = document.getElementById('modalStageId');

            // Set the modal title and form action dynamically
            if (type === 'feedback') {
                modalTitle.textContent = 'Add Feedback';
                modalForm.action = "{{ route('feedbackstore') }}";
            } else if (type === 'remark') {
                modalTitle.textContent = 'Add Remark';
                modalForm.action = "{{ route('remarks.store') }}";
            }

            // Set the stage ID in the hidden input field
            modalStageId.value = stageId;

            // Display the modal
            modal.style.display = 'flex';
        }

        // Function to close the modal
        function closeModal() {
            const modal = document.getElementById('feedbackModal');
            modal.style.display = 'none';
        }

        // Handle form submission
        document.getElementById('modalForm').addEventListener('submit', function (e) {
            // Allow the form to submit normally
        });
    </script>
</body>
</html>