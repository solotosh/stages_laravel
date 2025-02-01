<!DOCTYPE html>
<!--  Main JS File -->

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="">
    <title> County Government Of Narok  Projects Monitoring and Tracking System | Transparent Governance</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding-bottom: 60px; /* Space for fixed footer */
        }
        .dashboard-main {
            padding: 20px;
        }
        .feedback-item, .remark-item {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
        }
        .project-details, .reply-display {
            background-color: #f9f9f9;
            padding: 10px;
            margin-top: 10px;
            border-left: 4px solid #007bff;
            border-radius: 4px;
        }
        .project-details h4, .reply-display p:first-of-type {
            margin-top: 0;
        }
        @media (max-width: 768px) {
            .dashboard-main {
                padding: 10px;
            }
            .feedback-item, .remark-item {
                padding: 10px;
            }
        }
    </style>
    
    <!-- Add your CSS and JS files here -->
    <style>
        /* Modern Styling */
        .dashboard-main {
            padding: 20px;
            width: 100%; /* Ensure it spans the full width */
            margin: 0 auto;
        }

        .feedback-list,
        .remarks-list {
            margin-top: 20px;
        }

        .feedback-item,
        .remark-item {
            padding: 15px;
            margin-bottom: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #f52c1e;
        }

        .feedback-item p,
        .remark-item p {
            margin: 0;
            font-size: 14px;
            color: #555;
        }

        .feedback-item small,
        .remark-item small {
            display: block;
            margin-top: 5px;
            font-size: 12px;
            color: #888;
        }

        .project-details {
            margin-top: 10px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 4px;
            border-left: 4px solid #918a0d;
        }

        .project-details h4 {
            margin: 0 0 10px 0;
            font-size: 16px;
            color: #333;
        }

        .project-details p {
            margin: 0;
            font-size: 14px;
            color: #555;
        }

        .reply-display {
            margin-top: 10px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 4px;
            border-left: 4px solid #28a745;
        }

        .reply-display p {
            margin: 0;
            font-size: 14px;
            color: #333;
        }

        .reply-display small {
            display: block;
            margin-top: 5px;
            font-size: 12px;
            color: #666;
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
                    <li><a href="{{route('adminfeedback')}}">Feedback</a></li>
                    @php
                    // Loop through the financial years and generate the links
                    $financialYears = \App\Models\FinancialYear::all();
                @endphp
                
                    <li class="dropdown"><a href="{{ route('home') }}"><span>Public Projects</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="">Financial Years</a></li>
                            
                            @foreach($financialYears as $year)
                                <li>
                                    <a href="{{ route('financial_years.show', ['fy' => $year->name, 'id' => $year->id]) }}">
                                        FY {{ $year->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        
                    </li>
                    <!-- <li class="dropdown"><a href=""><span>Projects Gallery</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="landing_knowledge_center">Projects Gallery</a></li>
                            <li><a href="landing_knowledge_departmental">Departmental Information Center</a></li>
                        </ul>
                    </li> -->
                   
               
                 
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li>
                        <a href="{{route('contactus')}}">Contact Us</a>
                    </li>
                    <li><a href="{{Route('login')}}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>   
    
    <main class="dashboard-main">
    
             
                        
                        
               
                   
               
                        <main class="dashboard-main">
                            <h1 class="text-center mb-4">County Official Feedback and Remarks</h1>
                    
                            <!-- Combined Feedback and Remarks List -->
                            <div class="combined-list mb-5">
                                <h2 class="mb-3">Feedback & Remarks</h2>
                                @foreach ($feedback as $fb)
                                    <div class="feedback-item" data-bs-toggle="modal" data-bs-target="#feedbackModal{{ $fb->id }}">
                                        <div class="row mb-2">
                                            <div class="col-md-4"><strong>Name:</strong> {{ $fb->name }}</div>
                                            <div class="col-md-4"><strong>Phone:</strong> {{ $fb->phone }}</div>
                                            <div class="col-md-4 text-end"><small>Posted on: {{ $fb->created_at->format('Y-m-d H:i:s') }}</small></div>
                                        </div>
                                        <p><strong>Comment:</strong> {{ $fb->comment }}</p>
                    
                                        <!-- Display Project Details -->
                                        @if ($fb->stage)
                                            <div class="project-details mt-3">
                                                <h4>Project Details</h4>
                                                <div class="row">
                                                    <div class="col-md-6"><strong>Stage Name:</strong> {{ $fb->stage->name }}</div>
                                                    <div class="col-md-6"><strong>Status:</strong> {{ ucfirst($fb->stage->status) }}</div>
                                                    <div class="col-md-6"><strong>Ward:</strong> {{ $fb->stage->ward->ward_name ?? 'N/A' }}</div>
                                                    <div class="col-md-6"><strong>Subcounty:</strong> {{ $fb->stage->subcounty->sub_county_name ?? 'N/A' }}</div>
                                                    <div class="col-md-6"><strong>Financial Year:</strong> {{ $fb->stage->financialYear->name ?? 'N/A' }}</div>
                                                    <div class="col-md-6"><strong>Department:</strong> {{ $fb->stage->department->name ?? 'N/A' }}</div>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($fb->reply)
                                            <div class="reply-display mt-3">
                                                <p><strong>County Official Reply:</strong> {{ $fb->reply }}</p>
                                                <small>Replied on: {{ $fb->updated_at->format('Y-m-d H:i:s') }}</small>
                                            </div>
                                        @endif
                                    </div>
                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="feedbackModal{{ $fb->id }}" tabindex="-1" aria-labelledby="feedbackModalLabel{{ $fb->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="feedbackModalLabel{{ $fb->id }}">Feedback Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row mb-2">
                                                        <div class="col-md-4"><strong>Name:</strong> {{ $fb->name }}</div>
                                                        <div class="col-md-4"><strong>Phone:</strong> {{ $fb->phone }}</div>
                                                        <div class="col-md-4 text-end"><small>Posted on: {{ $fb->created_at->format('Y-m-d H:i:s') }}</small></div>
                                                    </div>
                                                    <p><strong>Comment:</strong> {{ $fb->comment }}</p>
                    
                                                    <!-- Display Project Details -->
                                                    @if ($fb->stage)
                                                        <div class="project-details mt-3">
                                                            <h4>Project Details</h4>
                                                            <div class="row">
                                                                <div class="col-md-6"><strong>Stage Name:</strong> {{ $fb->stage->name }}</div>
                                                                <div class="col-md-6"><strong>Status:</strong> {{ ucfirst($fb->stage->status) }}</div>
                                                                <div class="col-md-6"><strong>Ward:</strong> {{ $fb->stage->ward->ward_name ?? 'N/A' }}</div>
                                                                <div class="col-md-6"><strong>Subcounty:</strong> {{ $fb->stage->subcounty->sub_county_name ?? 'N/A' }}</div>
                                                                <div class="col-md-6"><strong>Financial Year:</strong> {{ $fb->stage->financialYear->name ?? 'N/A' }}</div>
                                                                <div class="col-md-6"><strong>Department:</strong> {{ $fb->stage->department->name ?? 'N/A' }}</div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if ($fb->reply)
                                                        <div class="reply-display mt-3">
                                                            <p><strong>County Official Reply:</strong> {{ $fb->reply }}</p>
                                                            <small>Replied on: {{ $fb->updated_at->format('Y-m-d H:i:s') }}</small>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                    
                             
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>